<?
$subject_val = "Re: [OMPI users] OpenMPI with BLCR runtime problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 10:49:13 2010" -->
<!-- isoreceived="20100824144913" -->
<!-- sent="Tue, 24 Aug 2010 10:49:05 -0400" -->
<!-- isosent="20100824144905" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with BLCR runtime problem" -->
<!-- id="04642E80-44A2-4543-8462-14EF6E63F099_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="000601cb4398$6d79cd20$486d6760$_at_shu.edu.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with BLCR runtime problem<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 10:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14105.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14103.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14102.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users]  OpenMPI with BLCR runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14119.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Maybe reply:</strong> <a href="14119.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2010, at 10:27 AM, &#179;&#194;&#206;&#196;&#186;&#198; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I configured and installed OpenMPI-1.4.2 and BLCR-0.8.2. (blade01 &#168;C blade10, nfs)
</span><br>
<span class="quotelev1">&gt; BLCR configure script: ./configure &#168;Cprefix=/opt/blcr &#168;Cenable-static
</span><br>
<span class="quotelev1">&gt; After the installation, I can see the &#161;&#174;blcr&#161;&#175; module loaded correctly (lsmod | grep blcr). And I can also run &#161;&#174;cr_run&#161;&#175;, &#161;&#174;cr_checkpoint&#161;&#175;, &#161;&#174;cr_restart&#161;&#175; to C/R the examples correctly under /blcr/examples/.
</span><br>
<span class="quotelev1">&gt; Then, OMPI configure script is: ./configure &#168;Cprefix=/opt/ompi &#168;Cwith-ft=cr &#168;Cwith-blcr=/opt/blcr &#168;Cenable-ft-thread &#168;Cenable-mpi-threads &#168;Cenable-static
</span><br>
<span class="quotelev1">&gt; The installation is okay too.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then here comes the problem.
</span><br>
<span class="quotelev1">&gt; On one node:
</span><br>
<span class="quotelev1">&gt;          mpirun -np 2 ./hello_c.c
</span><br>
<span class="quotelev1">&gt;          mpirun -np 2 &#168;Cam ft-enable-cr ./hello_c.c
</span><br>
<span class="quotelev1">&gt;          are both okay.
</span><br>
<span class="quotelev1">&gt; On two nodes(blade01, blade02):
</span><br>
<span class="quotelev1">&gt;          mpirun &#168;Cnp 2 &#168;Cmachinefile mf ./hello_c.c  OK.
</span><br>
<span class="quotelev1">&gt; mpirun &#168;Cnp 2 &#168;Cmachinefile mf &#168;Cam ft-enable-cr ./hello_c.c ERROR. Listed below:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init 
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized 
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort) 
</span><br>
<span class="quotelev1">&gt; [blade02:28896] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed! 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is 
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can 
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure; 
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an 
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;   opal_cr_init() failed failed 
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; [blade02:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is 
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can 
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment 
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some 
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI 
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed 
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0) 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have no idea about the error. Our blades use nfs, does it matter? Can anyone help me solve the problem? I really appreciate it. Thank you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; btw, similar error like:
</span><br>
<span class="quotelev1">&gt; &#161;&#176;Oops, cr_init() failed (the initialization call to the BLCR checkpointing system). Abort in despair.
</span><br>
<span class="quotelev1">&gt; The crmpi SSI subsystem failed to initialized modules successfully during MPI_INIT. This is a fatal error; I must abort.&#161;&#177; occurs when I use LAM/MPI + BLCR.
</span><br>
<p>This seems to indicate that BLCR is not working correctly on one of the compute nodes. Did you try some of the BLCR example programs on both of the compute nodes? If BLCRs cr_init() fails, then there is not much the MPI library can do for you.
<br>
<p>I would check the installation of BLCR on all of the compute nodes (blade01 and blade02). Make sure the modules are loaded and that the BLCR single process examples work on all nodes. I suspect that one of the nodes is having trouble initializing the BLCR library.
<br>
<p>You may also want to check to make sure prelinking is turned off on all nodes as well:
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>If that doesn't work then I would suggest trying the current Open MPI trunk. There should not be any problem with using NFS, since this is occurring in MPI_Init, this is well before we ever try to use the file system. I also test with NFS, and local staging on a fairly regular basis, so it shouldn't be a problem even when checkpointing/restarting.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; whchen
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14105.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="14103.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14102.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users]  OpenMPI with BLCR runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14119.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Maybe reply:</strong> <a href="14119.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
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
