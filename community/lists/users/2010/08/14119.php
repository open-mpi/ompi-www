<?
$subject_val = "Re: [OMPI users] OpenMPI with BLCR runtime problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 01:56:46 2010" -->
<!-- isoreceived="20100825055646" -->
<!-- sent="Wed, 25 Aug 2010 13:56:36 +0800" -->
<!-- isosent="20100825055636" -->
<!-- name="&#179;&#194;&#206;&#196;&#186;&#198;" -->
<!-- email="whchen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with BLCR runtime problem" -->
<!-- id="000601cb441a$4732ef70$d598ce50$_at_shu.edu.cn" -->
<!-- charset="gb2312" -->
<!-- inreplyto="[OMPI users] OpenMPI with BLCR runtime problem" -->
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
<strong>From:</strong> &#179;&#194;&#206;&#196;&#186;&#198; (<em>whchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 01:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14120.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Previous message:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14120.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I really thank you for your advice, Josh. As you say, when check 'lsmod |
<br>
grep blcr' on blade02, nothing shows. That means no blcr module is inserted
<br>
on blade02. I think that's the main reason why I can't C/R mpi programs on
<br>
these two nodes.
<br>
But here is the problem:
<br>
I installed blcr under /opt/blcr on blade01. Our blades use NFS. /opt/
<br>
directory and /home/ directory are shared. And on blade02, such commands
<br>
like 'cr_run', 'cr_restart' can be found. But I can't insert blcr module on
<br>
blade02. It shows:
<br>
insmod: error inserting '/opt/blcr/lib/blcr/2.6.16.60-0.21-smp/blcr.ko': -1
<br>
Unknown symbol in module
<br>
Does it mean that I have to install blcr on blade02? If so, where should I
<br>
install it? Just cover /opt/blcr or somewhere else?
<br>
Plz give me some advice. Thank you.
<br>
<p><p>On Aug 24, 2010, at 10:27 AM, ?????? wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I configured and installed OpenMPI-1.4.2 and BLCR-0.8.2. (blade01 ?C
</span><br>
blade10, nfs)
<br>
<span class="quotelev1">&gt; BLCR configure script: ./configure ?Cprefix=/opt/blcr ?Cenable-static
</span><br>
<span class="quotelev1">&gt; After the installation, I can see the ??blcr?? module loaded correctly
</span><br>
(lsmod | grep blcr). And I can also run ??cr_run??, ??cr_checkpoint??,
<br>
??cr_restart?? to C/R the examples correctly under /blcr/examples/.
<br>
<span class="quotelev1">&gt; Then, OMPI configure script is: ./configure ?Cprefix=/opt/ompi
</span><br>
?Cwith-ft=cr ?Cwith-blcr=/opt/blcr ?Cenable-ft-thread ?Cenable-mpi-threads
<br>
?Cenable-static
<br>
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
<span class="quotelev1">&gt;          mpirun -np 2 ?Cam ft-enable-cr ./hello_c.c
</span><br>
<span class="quotelev1">&gt;          are both okay.
</span><br>
<span class="quotelev1">&gt; On two nodes(blade01, blade02):
</span><br>
<span class="quotelev1">&gt;          mpirun ?Cnp 2 ?Cmachinefile mf ./hello_c.c  OK.
</span><br>
<span class="quotelev1">&gt; mpirun ?Cnp 2 ?Cmachinefile mf ?Cam ft-enable-cr ./hello_c.c ERROR. Listed
</span><br>
below:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init 
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized 
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort) 
</span><br>
<span class="quotelev1">&gt; [blade02:28896] Abort before MPI_INIT completed successfully; not able to
</span><br>
guarantee that all other processes were killed! 
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is 
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
<p><span class="quotelev1">&gt; [blade02:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
runtime/orte_init.c at line 77 
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is 
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can 
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
environment 
<br>
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
<span class="quotelev1">&gt; I have no idea about the error. Our blades use nfs, does it matter? Can
</span><br>
anyone help me solve the problem? I really appreciate it. Thank you.
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; btw, similar error like:
</span><br>
<span class="quotelev1">&gt; ??Oops, cr_init() failed (the initialization call to the BLCR
</span><br>
checkpointing system). Abort in despair.
<br>
<span class="quotelev1">&gt; The crmpi SSI subsystem failed to initialized modules successfully during
</span><br>
MPI_INIT. This is a fatal error; I must abort.?? occurs when I use LAM/MPI +
<br>
BLCR.
<br>
<p>This seems to indicate that BLCR is not working correctly on one of the
<br>
compute nodes. Did you try some of the BLCR example programs on both of the
<br>
compute nodes? If BLCRs cr_init() fails, then there is not much the MPI
<br>
library can do for you.
<br>
<p>I would check the installation of BLCR on all of the compute nodes (blade01
<br>
and blade02). Make sure the modules are loaded and that the BLCR single
<br>
process examples work on all nodes. I suspect that one of the nodes is
<br>
having trouble initializing the BLCR library.
<br>
<p>You may also want to check to make sure prelinking is turned off on all
<br>
nodes as well:
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>If that doesn't work then I would suggest trying the current Open MPI trunk.
<br>
There should not be any problem with using NFS, since this is occurring in
<br>
MPI_Init, this is well before we ever try to use the file system. I also
<br>
test with NFS, and local staging on a fairly regular basis, so it shouldn't
<br>
be a problem even when checkpointing/restarting.
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
<li><strong>Next message:</strong> <a href="14120.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<li><strong>Previous message:</strong> <a href="14118.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14104.php">Joshua Hursey: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14120.php">³ÂÎÄºÆ: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
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
