<?
$subject_val = "Re: [OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 15:00:40 2010" -->
<!-- isoreceived="20100726190040" -->
<!-- sent="Mon, 26 Jul 2010 15:01:25 -0400" -->
<!-- isosent="20100726190125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="07B01386-1FFD-487A-9795-4E2B9810962C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w33FAA211B54B15BC132BF6CBA60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Segmentation fault (11)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 15:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, the stack trace is telling you that it segv'ed in a printf in the main() function of your application.  If it dumped core, you can just attach to the core file and see exactly where it died.
<br>
<p><p>On Jul 25, 2010, at 10:08 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run a 6 parallel processes on OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the run-time of the program is short, it works well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, if the run-time is long, I got errors: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n124:45521] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n124:45521] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n124:45521] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n124:45521] Failing at address: 0x44
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 1] /lib64/libc.so.6(strlen+0x10) [0x3c50278d60]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 2] /lib64/libc.so.6(_IO_vfprintf+0x4479) [0x3c50246b19]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 3] /lib64/libc.so.6(_IO_printf+0x9a) [0x3c5024d3aa]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 4] /home/path/exec [0x40ec9a]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev1">&gt; [n124:45521] [ 6] /home/path/exec [0x401139]
</span><br>
<span class="quotelev1">&gt; [n124:45521] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that there may be some problems about memory management. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I cannot find the reason. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My program needs to write results to some files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I open the files too many without closing them, I may get the above errors. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I have removed the writing files from my program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem appears again when the program runs longer time. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; July 25  2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your inbox. See how. _______________________________________________
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
<li><strong>Next message:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
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
