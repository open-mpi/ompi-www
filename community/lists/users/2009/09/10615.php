<?
$subject_val = "[OMPI users] Bad MPI_Bcast behaviour when running over openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 07:18:38 2009" -->
<!-- isoreceived="20090911111838" -->
<!-- sent="Fri, 11 Sep 2009 13:18:24 +0200" -->
<!-- isosent="20090911111824" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Bad MPI_Bcast behaviour when running over openib" -->
<!-- id="1252667904.30154.778.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] Bad MPI_Bcast behaviour when running over openib<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 07:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10614.php">jody: "Re: [OMPI users] Timers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>The following code shows a bad behaviour when running over openib.
<br>
<p>Openmpi: 1.3.3
<br>
With openib it dies with &quot;error polling HP CQ with status WORK REQUEST
<br>
FLUSHED ERROR status number 5 &quot;, with tcp or shmem it works as expected.
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          n;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stderr);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;n = 4;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;n, 1, MPI_INTEGER, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stderr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(60);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize( );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p>I know about the internal openmpi reason for it do behave as it does.
<br>
But i think that it should be allowed to behave as it does.
<br>
<p>This example is a bit engineered but there are codes where a similar
<br>
situation can occur, i.e. the Bcast sender doing lots of other work
<br>
after the Bcast before the next MPI call. VASP is a candidate for this.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>Previous message:</strong> <a href="10614.php">jody: "Re: [OMPI users] Timers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
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
