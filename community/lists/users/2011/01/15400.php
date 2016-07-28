<?
$subject_val = "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 22 11:12:17 2011" -->
<!-- isoreceived="20110122161217" -->
<!-- sent="Sat, 22 Jan 2011 11:12:11 -0500" -->
<!-- isosent="20110122161211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine" -->
<!-- id="924D4BDA-8D4D-4C7D-B1B2-D4F52A3F39A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D3AFEB3.8020402_at_scss.tcd.ie" -->
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
<strong>Subject:</strong> Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-22 11:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>In reply to:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Reply:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for that info!
<br>
<p>I was literally just digging into this myself; I am able to replicate the problem on a 1.5.1 tarball, but not on a nightly 1.5.2 snapshot tarball.  Would you mind trying to replicate the issue on a recent 1.5.2 snapshot?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.5/">http://www.open-mpi.org/nightly/v1.5/</a>
<br>
<p><p>On Jan 22, 2011, at 10:58 AM, Avinash wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 	I figured out the problem, which is described herein, it might be useful for someone else. The problem stems from ompi_local_slave option being set on its own in the MPI_Info structure. It seems that MPI_Info_create is using a shift or more likely a masking operation (depending upon the size of some type, which in turn depends upon the underlying architecture), which sets the ompi_local_slave bit to high. As a result, &quot;jdata-&gt;controls&quot; has it's ORTE_JOB_CONTROL_LOCAL_SLAVE bit set high, see plm_rsh_module.c (line 1065) for the problem. I took the easy solution and set the ompi_local_slave to &quot;no&quot; in the Info structure and that solves the problem. Maybe this needs further investigation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/21/11 7:22 PM, Avinash Malik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         I have compiled openmpi-1.5.1 as a 32-bit binary on a 64-bit
</span><br>
<span class="quotelev2">&gt;&gt;         architecture. I have a problem using MPI_Comm_spawn and
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_spawn_multiple, when MPI_Info is used as a non NULL
</span><br>
<span class="quotelev2">&gt;&gt;         (MPI_INFO_NULL) parameter. I get a segmentation fault. I have
</span><br>
<span class="quotelev2">&gt;&gt;         the exact same code running fine on a 32-bit machine. I cannot
</span><br>
<span class="quotelev2">&gt;&gt;         use the 64-bit openmpi due to problems with other software,
</span><br>
<span class="quotelev2">&gt;&gt;         which uses openmpi, but can only be compiled in the 32-bit mode.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         I am attaching all the information, in a .tgz file. The .tgz
</span><br>
<span class="quotelev2">&gt;&gt;         file consists of:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         (1) The c-code for a small example two files parent.c and
</span><br>
<span class="quotelev2">&gt;&gt;         child.c
</span><br>
<span class="quotelev2">&gt;&gt;         (2) The compile_command that I ran on a 64-bit machine.
</span><br>
<span class="quotelev2">&gt;&gt;         (3) The run command to run the system
</span><br>
<span class="quotelev2">&gt;&gt;        compiling openmpi-1.5.1.
</span><br>
<span class="quotelev2">&gt;&gt;         (4) ompi_info_all
</span><br>
<span class="quotelev2">&gt;&gt;         (5) The error that I get, it's a segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>In reply to:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Reply:</strong> <a href="15401.php">Jeff Squyres: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
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
