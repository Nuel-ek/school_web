<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. Excellence Academy | Future Starts Here</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        :root {
            --primary: #2c3e50;
            --accent: #e74c3c;
            --light: #ecf0f1;
        }

        header {
            background: var(--primary);
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 500; transition: 0.3s; }
        nav a:hover { color: var(--accent); }

        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1523050335392-9ae86eb17449?auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 { font-size: 3.5rem; margin-bottom: 1rem; animation: fadeIn 2s; }
        .hero p { font-size: 1.2rem; margin-bottom: 2rem; max-width: 600px; }

        .btn {
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.3s;
        }
        .btn:hover { transform: scale(1.1); }

        .status-box {
            background: white;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            color: var(--primary);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>

    <header>
        <h2>ST. EXCELLENCE</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#">Admissions</a>
            <a href="#">Gallery</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Empowering Minds, Shaping Futures</h1>
        <p>Join a community of innovators and leaders. Applications for the 2026 Academic Year are now open.</p>
        <a href="#" class="btn" onclick="welcomeAlert()">Apply Now</a>

        <div class="status-box">
            <?php 
                $hour = date("H");
                if ($hour < 12) { $greeting = "Good Morning!"; }
                elseif ($hour < 18) { $greeting = "Good Afternoon!"; }
                else { $greeting = "Good Evening!"; }
                
                echo "<h3>$greeting</h3>";
                echo "<p>Today is " . date("l, F jS") . "</p>";
                echo "<p><strong>Status:</strong> Admissions are 45% full.</p>";
            ?>
        </div>
    </section>

    <script>
        function welcomeAlert() {
            alert("Thank you for your interest! We are redirecting you to the application portal.");
        }

        // Change header background on scroll
        window.onscroll = function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.background = '#1a252f';
            } else {
                header.style.background = '#2c3e50';
            }
        };
    </script>

</body>
</html>