<?
$subject_val = "Re: [OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 02:24:02 2010" -->
<!-- isoreceived="20100726062402" -->
<!-- sent="Mon, 26 Jul 2010 08:23:57 +0200" -->
<!-- isosent="20100726062357" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="AANLkTi=4TPKJzJR7aKYvFVFaM21Z=gFHmDs7vqyErHj6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 02:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack
<br>
<p>Have you tried to run your aplication under valgrind?
<br>
Even though applications generallay run slower under valgrind,
<br>
it may detect memory errors before the actual crash happens.
<br>
<p>The best would be to start a terminal window for each of your processes
<br>
so you can see valgrind's output for each process separately.
<br>
<p>Jody
<br>
<p>On Mon, Jul 26, 2010 at 4:08 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; I run a 6 parallel processes on OpenMPI.
</span><br>
<span class="quotelev1">&gt; When the run-time of the program is short, it works well.
</span><br>
<span class="quotelev1">&gt; But, if the run-time is long, I got errors:
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
<span class="quotelev1">&gt; [n124:45521] [ 6] /home/path/exec&#160;[0x401139]
</span><br>
<span class="quotelev1">&gt; [n124:45521] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; It seems that there may be some problems about memory management.
</span><br>
<span class="quotelev1">&gt; But, I cannot find the reason.
</span><br>
<span class="quotelev1">&gt; My program needs to write results to some files.
</span><br>
<span class="quotelev1">&gt; If I open the files too many without closing them, I may get the above
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt; But, I have removed the writing files from my program.
</span><br>
<span class="quotelev1">&gt; The problem appears again when the program runs longer time.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; July 25 &#160;2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev1">&gt; inbox. See how.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13776.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
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
