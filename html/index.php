<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the local development environment">
    <title>Welcome to Your Local Development Server</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background: #2c3e50;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
        .content {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        .feature-box {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 6px;
            border-left: 4px solid #2c3e50;
        }
        footer {
            text-align: center;
            padding: 2rem;
            background: #2c3e50;
            color: white;
        }
        .status-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            background: #2ecc71;
            border-radius: 50%;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>🐳 LAMP Stack on Docker</h1>
            <p><span class="status-indicator"></span> Container active and running</p>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <h2>Dockerized Development Environment</h2>
            <p>This server runs inside isolated Docker containers, ensuring portability, consistency and easy management of your LAMP development environment.</p>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <h3>🐳 Docker and Server Information</h3>
                    <ul>
                        <li><strong>Environment:</strong> Docker Container</li>
                        <li><strong>Container ID:</strong> <?php echo gethostname(); ?></li>
                        <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
                        <li><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
                    </ul>
                </div>
                
                <div class="feature-box">
                    <h3>🔗 Quick Links</h3>
                    <ul>
                        <li><a href="http://localhost:8080" target="_blank">phpMyAdmin</a></li>
                        <li><a href="http://localhost" target="_blank">localhost</a></li>
                    </ul>
                </div>
                
                
            </div>

            <div class="content">
                <h3>🚀 Getting Started with Docker</h3>
                <p>To start working with this Docker LAMP environment:</p>
                <ol>
                    <li><strong>Place your files:</strong> Put your project files in the <code>html/</code> directory (mapped as volume in the container)</li>
                    <li><strong>Access your project:</strong> Open <code>http://localhost/your-project</code> in your browser</li>
                    <li><strong>Manage database:</strong> Use phpMyAdmin at <code>http://localhost:8080</code></li>
                    <li><strong>Check containers:</strong> Use <code>docker-compose ps</code> to see the status</li>
                    <li><strong>View logs:</strong> Use <code>docker-compose logs -f</code> for debugging</li>
                </ol>
                
                <h3>📋 Useful Docker Commands</h3>
                <ul>
                    <li><code>docker-compose up -d</code> - Start containers in background</li>
                    <li><code>docker-compose down</code> - Stop and remove containers</li>
                    <li><code>docker-compose restart</code> - Restart containers</li>
                    <li><code>docker-compose logs [service]</code> - View logs</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>🐳 Developed and maintained by Maniglio Federico</p>
            <p>Docker LAMP Development Environment - Version 1.0</p>
        </div>
    </footer>
</body>
</html>