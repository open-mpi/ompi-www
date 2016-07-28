<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 10:45:08 2006" -->
<!-- isoreceived="20060503144508" -->
<!-- sent="Thu, 04 May 2006 09:46:11 -0500" -->
<!-- isosent="20060504144611" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_split and intercomms" -->
<!-- id="445A13B3.4080307_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4458B717.4080501_at_informatik.uni-halle.de" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-04 10:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1207.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Bert Wesarg: "[OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a look into that ...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i get some erroneous results from calls to MPI_Comm_split with an
</span><br>
<span class="quotelev1">&gt; intercommunicator as communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is a brokendown testcase, the source is attached:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; test_split.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_comm_spwan(world, &quot;test_split_client&quot;, 1, &amp;inter)
</span><br>
<span class="quotelev1">&gt; for i=1:np
</span><br>
<span class="quotelev1">&gt;   if rank &lt; i
</span><br>
<span class="quotelev1">&gt;     mpi_comm_split(inter, 0, 0, &amp;inter2)
</span><br>
<span class="quotelev1">&gt;     /* print new rank and size */
</span><br>
<span class="quotelev1">&gt;     mpi_comm_free(&amp;inter2)
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     mpi_comm_split(inter, MPI_UNDEFINED, 0, &amp;inter2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; test_split_client.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_comm_get_parent(&amp;inter)
</span><br>
<span class="quotelev1">&gt; while true
</span><br>
<span class="quotelev1">&gt;   mpi_comm_split(inter, 0, 0, &amp;inter2)
</span><br>
<span class="quotelev1">&gt;   /* print new remote size */
</span><br>
<span class="quotelev1">&gt;   mpi_comm_free(&amp;inter2)
</span><br>
<span class="quotelev1">&gt; mpi_comm_free(&amp;inter)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first, my expected results:
</span><br>
<span class="quotelev1">&gt; np = 2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         test_split:0     test_split:1     test_split_client:0
</span><br>
<span class="quotelev1">&gt; i = 1:
</span><br>
<span class="quotelev1">&gt;         new rank = 0                      new remote size = 1
</span><br>
<span class="quotelev1">&gt;         new size = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i = 2:
</span><br>
<span class="quotelev1">&gt;         new rank = 0     new rank = 1     new remote size = 2
</span><br>
<span class="quotelev1">&gt;         new size = 2     new size = 2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now some actually results:
</span><br>
<span class="quotelev1">&gt; a)
</span><br>
<span class="quotelev1">&gt;         test_split:0     test_split:1     test_split_client:0
</span><br>
<span class="quotelev1">&gt; i = 1:
</span><br>
<span class="quotelev1">&gt;         new rank = 0                      new remote size = 1
</span><br>
<span class="quotelev1">&gt;         new size = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i = 2:
</span><br>
<span class="quotelev1">&gt;         new rank = 0     new rank = 1     new remote size = 2
</span><br>
<span class="quotelev1">&gt;         new size = 2     new size = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b)
</span><br>
<span class="quotelev1">&gt;         test_split:0     test_split:1     test_split_client:0
</span><br>
<span class="quotelev1">&gt; i = 1:
</span><br>
<span class="quotelev1">&gt;         new rank = 0                      new remote size = 1
</span><br>
<span class="quotelev1">&gt;         new size = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i = 2:
</span><br>
<span class="quotelev1">&gt;         new rank = 0     new rank = 1     new remote size = 2
</span><br>
<span class="quotelev1">&gt;         new size = 1     new size = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c)
</span><br>
<span class="quotelev1">&gt;         test_split:0     test_split:1     test_split_client:0
</span><br>
<span class="quotelev1">&gt; i = 1:
</span><br>
<span class="quotelev1">&gt;         new rank = 0                      new remote size = 1
</span><br>
<span class="quotelev1">&gt;         new size = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i = 2:
</span><br>
<span class="quotelev1">&gt;         new rank = 0     new rank = 1     new remote size = 2
</span><br>
<span class="quotelev1">&gt;         new size = 1     new size = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; something with the new size in rank 0 is wrong or the remote size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can someone please pointout if my code is wrong, or something with open-mpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; greatings
</span><br>
<span class="quotelev1">&gt; bert wesarg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps: these test were run on an dual smp machine and open-mpi 1.0.2
</span><br>
<span class="quotelev1">&gt; pps: i attached also an split test with intracommunicators, these results
</span><br>
<span class="quotelev1">&gt; are all expected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;getopt.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int ac, char *av[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm inter, inter2;
</span><br>
<span class="quotelev1">&gt;     int r, s, err, i, r2, s2, rs, isinter;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;ac, &amp;av);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_spawn(
</span><br>
<span class="quotelev1">&gt;         &quot;./test_split_client&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev1">&gt;         MPI_COMM_WORLD, &amp;inter, &amp;err
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (i = 1; i &lt;= s; i++) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_split(
</span><br>
<span class="quotelev1">&gt;             inter, (r &lt; i) ? 0 : MPI_UNDEFINED, 0, &amp;inter2
</span><br>
<span class="quotelev1">&gt;         );
</span><br>
<span class="quotelev1">&gt;         printf(
</span><br>
<span class="quotelev1">&gt;             &quot;%d:%d: split color %d, key %d\n&quot;,
</span><br>
<span class="quotelev1">&gt;             i, r, (r &lt; i) ? 0 : MPI_UNDEFINED, 0
</span><br>
<span class="quotelev1">&gt;         );
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (r &lt; i) {
</span><br>
<span class="quotelev1">&gt;             err = MPI_Comm_test_inter(inter2, &amp;isinter);
</span><br>
<span class="quotelev1">&gt;             printf(
</span><br>
<span class="quotelev1">&gt;                 &quot;%d:%d: is inter %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;                 i, r, isinter ? &quot;true&quot; : &quot;false&quot;
</span><br>
<span class="quotelev1">&gt;             );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             err = MPI_Comm_size(inter2, &amp;s2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             err = MPI_Comm_remote_size(inter2, &amp;rs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             err = MPI_Comm_rank(inter2, &amp;r2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             printf(
</span><br>
<span class="quotelev1">&gt;                 &quot;%d:%d: new rank %d, new size %d, remote size %d\n&quot;,
</span><br>
<span class="quotelev1">&gt;                 i, r, r2, s2, rs
</span><br>
<span class="quotelev1">&gt;             );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             MPI_Barrier(inter2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             err = MPI_Comm_free(&amp;inter2);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free(&amp;inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;getopt.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int ac, char *av[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm inter, inter2;
</span><br>
<span class="quotelev1">&gt;     int r, s, rs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;ac, &amp;av);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent(&amp;inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     while (true) {
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_split(inter, 0, 0, &amp;inter2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_remote_size(inter2, &amp;rs);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;c:%d: remote size %d\n&quot;, r, rs);
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter2);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_free(&amp;inter2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(inter);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free(&amp;inter);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;getopt.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int ac, char *av[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm split;
</span><br>
<span class="quotelev1">&gt;     int r, s, i, r2, s2;
</span><br>
<span class="quotelev1">&gt;     int send;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;ac, &amp;av);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     send = 1;
</span><br>
<span class="quotelev1">&gt;     for (i = 1; i &lt;= s; i++) {
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         printf(
</span><br>
<span class="quotelev1">&gt;             &quot;%d:%d: split color %d, key %d\n&quot;,
</span><br>
<span class="quotelev1">&gt;             i, r, (r &lt; i) ? 0 : MPI_UNDEFINED, 0
</span><br>
<span class="quotelev1">&gt;         );
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_split(
</span><br>
<span class="quotelev1">&gt;             MPI_COMM_WORLD, (r &lt; i) ? 0 : MPI_UNDEFINED, 0, &amp;split
</span><br>
<span class="quotelev1">&gt;         );
</span><br>
<span class="quotelev1">&gt;         if (r &lt; i) {
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_size(split, &amp;s2);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_rank(split, &amp;r2);
</span><br>
<span class="quotelev1">&gt;             printf(
</span><br>
<span class="quotelev1">&gt;                 &quot;%d:%d: new rank %d, new size %d\n&quot;, i, r, r2, s2
</span><br>
<span class="quotelev1">&gt;             );
</span><br>
<span class="quotelev1">&gt;             MPI_Barrier(split);
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_free(&amp;split);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1207.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>In reply to:</strong> <a href="1204.php">Bert Wesarg: "[OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
