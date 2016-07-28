<?
$subject_val = "Re: [OMPI users] OpenMPI with BLCR runtime problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 02:03:40 2010" -->
<!-- isoreceived="20100825060340" -->
<!-- sent="Wed, 25 Aug 2010 14:03:30 +0800" -->
<!-- isosent="20100825060330" -->
<!-- name="&#179;&#194;&#206;&#196;&#186;&#198;" -->
<!-- email="whchen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with BLCR runtime problem" -->
<!-- id="000701cb441b$3e25edf0$ba71c9d0$_at_shu.edu.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with BLCR runtime problem<br>
<strong>From:</strong> &#179;&#194;&#206;&#196;&#186;&#198; (<em>whchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 02:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14119.php">&#179;&#194;&#206;&#196;&#186;&#198;: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was so careless. BLCR Admin Guide says: as the root, load the kernel
<br>
modules in this order:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# /sbin/insmod /usr/local/lib/blcr/2.6.12-1.234/blcr_imports.ko
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# /sbin/insmod /usr/local/lib/blcr/2.6.12-1.234/blcr.ko
<br>
In the last email, I load the kernel in the wrong order. And I followed the
<br>
order above, it succeeded. lol
<br>
I really thank you for your advice, Josh. Many thanks.
<br>
<p>I really thank you for your advice, Josh. As you say, when check 'lsmod |
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
Unknown symbol in module Does it mean that I have to install blcr on
<br>
blade02? If so, where should I install it? Just cover /opt/blcr or somewhere
<br>
else?
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
<span class="quotelev1">&gt; blade10, nfs) BLCR configure script: ./configure ?Cprefix=/opt/blcr 
</span><br>
<span class="quotelev1">&gt; ?Cenable-static After the installation, I can see the ??blcr?? module
</span><br>
loaded correctly (lsmod | grep blcr). And I can also run ??cr_run??,
<br>
??cr_checkpoint??, ??cr_restart?? to C/R the examples correctly under
<br>
/blcr/examples/.
<br>
<span class="quotelev1">&gt; Then, OMPI configure script is: ./configure ?Cprefix=/opt/ompi 
</span><br>
<span class="quotelev1">&gt; ?Cwith-ft=cr ?Cwith-blcr=/opt/blcr ?Cenable-ft-thread ?Cenable-mpi-threads
</span><br>
?Cenable-static The installation is okay too.
<br>
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
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort) [blade02:28896] 
</span><br>
<span class="quotelev1">&gt; Abort before MPI_INIT completed successfully; not able to guarantee that
</span><br>
all other processes were killed!
<br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- It looks like opal_init failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is likely to abort. There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt; process can fail during opal_init; some of which are due to 
</span><br>
<span class="quotelev1">&gt; configuration or environment problems. This failure appears to be an 
</span><br>
<span class="quotelev1">&gt; internal failure; here's some additional information (which may only 
</span><br>
<span class="quotelev1">&gt; be relevant to an Open MPI developer):
</span><br>
<span class="quotelev1">&gt;   opal_cr_init() failed failed 
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- [blade02:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- It looks like MPI_INIT failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process is likely to abort. There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt; process can fail during MPI_INIT; some of which are due to 
</span><br>
<span class="quotelev1">&gt; configuration or environment problems. This failure appears to be an 
</span><br>
<span class="quotelev1">&gt; internal failure; here's some additional information (which may only 
</span><br>
<span class="quotelev1">&gt; be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed 
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
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
<li><strong>Next message:</strong> <a href="14121.php">John Hearns: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14119.php">&#179;&#194;&#206;&#196;&#186;&#198;: "Re: [OMPI users] OpenMPI with BLCR runtime problem"</a>
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
