<?
$subject_val = "[OMPI users]  OpenMPI with BLCR runtime problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 10:27:16 2010" -->
<!-- isoreceived="20100824142716" -->
<!-- sent="Tue, 24 Aug 2010 22:27:06 +0800" -->
<!-- isosent="20100824142706" -->
<!-- name="&#179;&#194;&#206;&#196;&#186;&#198;" -->
<!-- email="whchen_at_[hidden]" -->
<!-- subject="[OMPI users]  OpenMPI with BLCR runtime problem" -->
<!-- id="000601cb4398$6d79cd20$486d6760$_at_shu.edu.cn" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users]  OpenMPI with BLCR runtime problem<br>
<strong>From:</strong> &#179;&#194;&#206;&#196;&#186;&#198; (<em>whchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 10:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14103.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Reply:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI users,
<br>
<p>&nbsp;
<br>
<p>I configured and installed OpenMPI-1.4.2 and BLCR-0.8.2. (blade01 &#168;C
<br>
blade10, nfs)
<br>
<p>BLCR configure script: ./configure &#168;Cprefix=/opt/blcr &#168;Cenable-static
<br>
<p>After the installation, I can see the &#161;&#174;blcr&#161;&#175; module loaded correctly
<br>
(lsmod | grep blcr). And I can also run &#161;&#174;cr_run&#161;&#175;, &#161;&#174;cr_checkpoint&#161;&#175;,
<br>
&#161;&#174;cr_restart&#161;&#175; to C/R the examples correctly under /blcr/examples/.
<br>
<p>Then, OMPI configure script is: ./configure &#168;Cprefix=/opt/ompi &#168;Cwith-ft=cr
<br>
&#168;Cwith-blcr=/opt/blcr &#168;Cenable-ft-thread &#168;Cenable-mpi-threads &#168;C
<br>
enable-static
<br>
<p>The installation is okay too.
<br>
<p>&nbsp;
<br>
<p>Then here comes the problem.
<br>
<p>On one node:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 ./hello_c.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 &#168;Cam ft-enable-cr ./hello_c.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are both okay.
<br>
<p>On two nodes(blade01, blade02):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun &#168;Cnp 2 &#168;Cmachinefile mf ./hello_c.c  OK.
<br>
<p>mpirun &#168;Cnp 2 &#168;Cmachinefile mf &#168;Cam ft-enable-cr ./hello_c.c ERROR. Listed
<br>
below:
<br>
<p>&nbsp;
<br>
<p>*** An error occurred in MPI_Init 
<br>
*** before MPI was initialized 
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort) 
<br>
[blade02:28896] Abort before MPI_INIT completed successfully; not able to
<br>
guarantee that all other processes were killed! 
<br>
-------------------------------------------------------------------------- 
<br>
It looks like opal_init failed for some reason; your parallel process is 
<br>
likely to abort. There are many reasons that a parallel process can 
<br>
fail during opal_init; some of which are due to configuration or 
<br>
environment problems. This failure appears to be an internal failure; 
<br>
here's some additional information (which may only be relevant to an 
<br>
Open MPI developer): 
<br>
<p>&nbsp;&nbsp;opal_cr_init() failed failed 
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS 
<br>
-------------------------------------------------------------------------- 
<br>
[blade02:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 77 
<br>
-------------------------------------------------------------------------- 
<br>
It looks like MPI_INIT failed for some reason; your parallel process is 
<br>
likely to abort. There are many reasons that a parallel process can 
<br>
fail during MPI_INIT; some of which are due to configuration or environment 
<br>
problems. This failure appears to be an internal failure; here's some 
<br>
additional information (which may only be relevant to an Open MPI 
<br>
developer): 
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed 
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0) 
<br>
-------------------------------------------------------------------------- 
<br>
<p>&nbsp;
<br>
<p>I have no idea about the error. Our blades use nfs, does it matter? Can
<br>
anyone help me solve the problem? I really appreciate it. Thank you.
<br>
<p>&nbsp;
<br>
<p>btw, similar error like: 
<br>
<p>&#161;&#176;Oops, cr_init() failed (the initialization call to the BLCR checkpointing
<br>
system). Abort in despair.
<br>
<p>The crmpi SSI subsystem failed to initialized modules successfully during
<br>
MPI_INIT. This is a fatal error; I must abort.&#161;&#177; occurs when I use LAM/MPI +
<br>
BLCR.
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>&nbsp;
<br>
<p>whchen
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14102/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14103.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Reply:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
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
