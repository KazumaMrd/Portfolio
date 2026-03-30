<script>
        const canvas = document.getElementById('canvas-links');
        const ctx = canvas.getContext('2d');
        let dots = [];
        const mouse = { x: null, y: null, radius: 150 };

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        window.addEventListener('mousemove', (e) => { mouse.x = e.x; mouse.y = e.y; });

        class Dot {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = (Math.random() - 0.5) * 1.5;
                this.speedY = (Math.random() - 0.5) * 1.5;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x > canvas.width || this.x < 0) this.speedX *= -1;
                if (this.y > canvas.height || this.y < 0) this.speedY *= -1;
            }
            draw() {
                ctx.fillStyle = '#ff0000';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function init() {
            dots = []; // On vide le tableau avant de le remplir
            for (let i = 0; i < 150; i++) dots.push(new Dot());
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            dots.forEach(dot => {
                dot.update();
                dot.draw();
                
                dots.forEach(other => {
                    const dx = dot.x - other.x;
                    const dy = dot.y - other.y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 110) {
                        ctx.strokeStyle = `rgba(255, 0, 0, ${1 - dist/110})`;
                        ctx.lineWidth = 0.5;
                        ctx.beginPath(); ctx.moveTo(dot.x, dot.y); ctx.lineTo(other.x, other.y); ctx.stroke();
                    }
                });

                const mdx = dot.x - mouse.x;
                const mdy = dot.y - mouse.y;
                const mdist = Math.sqrt(mdx * mdx + mdy * mdy);
                if (mdist < mouse.radius) {
                    ctx.strokeStyle = '#ff0000';
                    ctx.lineWidth = 1;
                    ctx.beginPath(); ctx.moveTo(dot.x, dot.y); ctx.lineTo(mouse.x, mouse.y); ctx.stroke();
                }
            });
            requestAnimationFrame(animate);
        }

        init(); animate();
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            init();
        });
    </script>
</body>
</html>