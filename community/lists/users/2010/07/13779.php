<?
$subject_val = "Re: [OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 03:15:30 2010" -->
<!-- isoreceived="20100726071530" -->
<!-- sent="Mon, 26 Jul 2010 09:15:24 +0200" -->
<!-- isosent="20100726071524" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="AANLkTim4wDfj8=Yv0xLdH-hwj_ZY5sEe=buXs9RC9n11_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w3492801117C71664FF06CACBA60_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-07-26 03:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13780.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack
<br>
<p>Yes to both questions. Best to download it directly from their page:
<br>
&nbsp;&nbsp;<a href="http://www.valgrind.org/downloads/current.html">http://www.valgrind.org/downloads/current.html</a>
<br>
then you are sure to get the newest version.
<br>
<p>Another way to manage your output is to use the '-output-filename' of
<br>
mpirun (or mpiexec)
<br>
which will redirect the outputs (stdout, stderr and stddiag) of you processors
<br>
into separate text files - check the man pages for 'mpirun'
<br>
<p>If you don't need to see the output of all your processes, but still want
<br>
to use xterminals,  you can use the '-xterm' option of
<br>
mpirun, where you can select which ranks should open an xterm.
<br>
(Again check the man pages of mpirun)
<br>
<p>Jody
<br>
<p><p>On Mon, Jul 26, 2010 at 8:55 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; It can be installed on linux and work with gcc ?
</span><br>
<span class="quotelev1">&gt; If I have many processes, such as 30, I have to open 30 terminal windows ?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 26 Jul 2010 08:23:57 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: jody.xha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jack
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to run your aplication under valgrind?
</span><br>
<span class="quotelev2">&gt;&gt; Even though applications generallay run slower under valgrind,
</span><br>
<span class="quotelev2">&gt;&gt; it may detect memory errors before the actual crash happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The best would be to start a terminal window for each of your processes
</span><br>
<span class="quotelev2">&gt;&gt; so you can see valgrind's output for each process separately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 26, 2010 at 4:08 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I run a 6 parallel processes on OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When the run-time of the program is short, it works well.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, if the run-time is long, I got errors:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] Failing at address: 0x44
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 1] /lib64/libc.so.6(strlen+0x10) [0x3c50278d60]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 2] /lib64/libc.so.6(_IO_vfprintf+0x4479) [0x3c50246b19]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 3] /lib64/libc.so.6(_IO_printf+0x9a) [0x3c5024d3aa]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 4] /home/path/exec [0x40ec9a]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x3c5021d974]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] [ 6] /home/path/exec&#160;[0x401139]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [n124:45521] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems that there may be some problems about memory management.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, I cannot find the reason.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My program needs to write results to some files.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If I open the files too many without closing them, I may get the above
</span><br>
<span class="quotelev3">&gt;&gt; &gt; errors.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, I have removed the writing files from my program.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem appears again when the program runs longer time.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jack
</span><br>
<span class="quotelev3">&gt;&gt; &gt; July 25 &#160;2010
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hotmail is redefining busy with tools for the New Busy. Get more from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; your
</span><br>
<span class="quotelev3">&gt;&gt; &gt; inbox. See how.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.
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
<li><strong>Next message:</strong> <a href="13780.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13778.php">Jack Bryan: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
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
