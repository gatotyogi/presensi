<div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    © {{ Carbon\Carbon::now()->format('Y') }} {{ config('app.name', 'Laravel') }}
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Powered by Gatot W
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>