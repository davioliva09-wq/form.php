</main>
    
    <footer style="
        background-color: #f0f0f0;
        padding: 20px;
        text-align: center;
        margin-top: 30px;
        border-top: 2px solid #ddd;
        font-family: Arial, sans-serif;
    ">
        <p>&copy; <?php echo date('Y'); ?> - Sistema de Inscrição Musical</p>
        <p style="font-size: 12px; color: #666;">
            Todos os direitos reservados
        </p>
        
        <?php if(isset($_SERVER['REQUEST_TIME'])): ?>
            <small>Página processada em <?php echo round(microtime(true) - $_SERVER['REQUEST_TIME'], 4); ?> segundos</small>
        <?php endif; ?>
    </footer>
    
    <script>
        console.log('Footer carregado com sucesso!');
    </script>
</body>
</html>