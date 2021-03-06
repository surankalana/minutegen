        </div>
        <!-- Load basic scripts -->
        <script src=<?= script('init');?>></script>
        <script src=<?= script('navbar');?>></script>
        <script src=<?= script('dropdown');?>></script>
        <script src=<?= script('matter-cards');?>></script>
        <script src=<?= script('matter-editor');?>></script>
        <script src=<?= script('minigrid.min');?>></script>
        <script src=<?= script('sidebar');?>></script>

        <!-- Load scripts for data access -->
        <script src=<?= client('connection');?>></script>
        <script src=<?= client('session');?>></script>
        <script src=<?= client('helper');?>></script>

        <!-- Load controllers of client -->
        <script src=<?= client('controllers/matters');?>></script>
        <script src=<?= client('controllers/matter-logs');?>></script>
        <script src=<?= client('controllers/members');?>></script>
        <script src=<?= client('controllers/memos');?>></script>
        <script src=<?= client('controllers/minutes');?>></script>
        <script src=<?= client('controllers/notifications');?>></script>
        <script src=<?= client('controllers/search-history');?>></script>
        <script src=<?= client('controllers/system-log');?>></script>

        <!-- Load presentation layer of client -->
        <script src=<?= client('presentation/actions');?>></script>
        <script src=<?= client('presentation/matters-dom');?>></script>

    </body>
</html>
