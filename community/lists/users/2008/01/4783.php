<?
$subject_val = "[OMPI users] getenv issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  5 03:49:19 2008" -->
<!-- isoreceived="20080105084919" -->
<!-- sent="Sat, 5 Jan 2008 03:48:53 -0500" -->
<!-- isosent="20080105084853" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] getenv issue" -->
<!-- id="7D52BEC5-5507-48C6-9354-F30B168C487D_at_cchmc.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] getenv issue<br>
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-05 03:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4784.php">Danny G Smith: "[OMPI users] can you compile Open MPI on OS X with the Intel compiler?"</a>
<li><strong>Previous message:</strong> <a href="4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<li><strong>Reply:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to start a simple MPI code below using Open MPI 1.2.4 and  
<br>
Torque 2.2.1.
<br>
<p>prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; cat pbs.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int gdb_var;
<br>
<p>void main(argc, argv)
<br>
int argc;
<br>
char **argv;
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gdb_var = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != 0) printf(&quot;ERROR with MPI initialization\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != 0) printf(&quot;ERROR with MPI ranking\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret != 0) printf(&quot;ERROR with MPI sizes\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Host %d ready to attach\n&quot;,rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (0 == gdb_var) sleep(5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jobid = getenv(&quot;PBS_JOBID&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Job id is %s\n&quot;, *jobid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!jobid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error(&quot;PBS_JOBID not set in environment.  Code must be  
<br>
run from a\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;  PBS script, perhaps interactively using \&quot;qsub -I 
<br>
\&quot;&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; mpiexec -np 4 -- 
<br>
prefix /usr/local/openmpi-1.2.4 ./pbs
<br>
prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt;
<br>
<p>As shown above, for some reason, PBS_JOBID is not getting set in the  
<br>
MPI's environment, even though it is available at the shell level.
<br>
<p>prakash_at_bmi-opt2-04:~/thesis/CS/Samples/changejob&gt; echo $PBS_JOBID
<br>
18.fructose.cchmc.org
<br>
<p>Any ideas why?
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4784.php">Danny G Smith: "[OMPI users] can you compile Open MPI on OS X with the Intel compiler?"</a>
<li><strong>Previous message:</strong> <a href="4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
<li><strong>Reply:</strong> <a href="4829.php">Jeff Squyres: "Re: [OMPI users] getenv issue"</a>
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
