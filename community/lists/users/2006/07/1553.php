<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 14:41:33 2006" -->
<!-- isoreceived="20060705184133" -->
<!-- sent="Wed, 5 Jul 2006 11:41:28 -0700" -->
<!-- isosent="20060705184128" -->
<!-- name="s anwar" -->
<!-- email="sanwar_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn" -->
<!-- id="3e3c86f90607051141n7388e825obb0522391ea9972e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> s anwar (<em>sanwar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 14:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a very simple program which spawns a number of slaves. I am getting
<br>
erratic results from this program. It seems that all the slave processes are
<br>
spawned but not all of them complete the MPI_Init() before the main program
<br>
ends. In addition I get the following error messages for which I haven't
<br>
been able to find any documentation:
<br>
<p>[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/soh_base_get_proc_soh.c at line 80
<br>
[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/oob_base_xcast.c at line 108
<br>
[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/rmgr_base_stage_gate.c at line 276
<br>
[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/soh_base_get_proc_soh.c at line 80
<br>
[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/oob_base_xcast.c at line 108
<br>
[turkana:26736] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
base/rmgr_base_stage_gate.c at line 276
<br>
<p>I am using openmpi 1.1 on FC4 on a dual AMD Athlon machine.
<br>
<p>My program is as follows:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>int
<br>
main(int ac, char *av[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  nameLen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  n = 5, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  slave = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  errs[5];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *args[] = { av[0], &quot;-W&quot;, NULL};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  err;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;memset(name, sizeof(name), 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for(i=1; i&lt;ac; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strcmp(av[i],&quot;-W&quot;) == 0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slave = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s before MPI_Init() in %d\n&quot;, slave?&quot;slave&quot;:&quot;master&quot;,
<br>
getpid());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;ac, &amp;av);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s after MPI_Init() in %d\n&quot;, slave?&quot;slave&quot;:&quot;master&quot;,
<br>
getpid());
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!slave){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_Comm_spawn(av[0], args, n, MPI_INFO_NULL, 0,
<br>
MPI_COMM_SELF, &amp;intercomm, errs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;MPI_Comm_spawn generated error %d.\n&quot;, err);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s before MPI_Comm_get_parent() in %d\n&quot;,
<br>
slave?&quot;slave&quot;:&quot;master&quot;, getpid());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s %d (%s) of %d\n&quot;, slave?&quot;slave&quot;:&quot;master&quot;, rank,
<br>
name, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<!-- nextthread="start" -->
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
