<x-admin-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Users</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $usersCount }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Products</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $productsCount }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <hi>Revenue Chart</hi>
                <canvas id="revenueChart"></canvas>
                
            </div>
            <div class="col-md-6">
            <hi>Overview Chart</hi>
                <canvas id="overviewChart"></canvas>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
            <hi>Customer Review Chart</hi>
                <canvas id="customerReviewChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        window.onload = function() {
            // Revenue Chart
            const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(ctxRevenue, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12000, 19000, 30000, 5000, 20000, 30000, 45000, 35000, 27000, 30000, 20000, 15000],
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Overview Chart
            const ctxOverview = document.getElementById('overviewChart').getContext('2d');
            const overviewChart = new Chart(ctxOverview, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales',
                        data: [246, 258, 300, 320, 400, 450, 500, 520, 540, 600, 620, 700],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Rent',
                        data: [125, 140, 160, 180, 200, 220, 240, 260, 280, 300, 320, 340],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Customer Review Chart
            const ctxCustomerReview = document.getElementById('customerReviewChart').getContext('2d');
            const customerReviewChart = new Chart(ctxCustomerReview, {
                type: 'pie',
                data: {
                    labels: ['Positive', 'Negative'],
                    datasets: [{
                        data: [72, 28],
                        backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)'],
                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        };
    </script>
</x-admin-layout>
