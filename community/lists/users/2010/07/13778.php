<?
$subject_val = "Re: [OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 02:55:36 2010" -->
<!-- isoreceived="20100726065536" -->
<!-- sent="Mon, 26 Jul 2010 00:55:30 -0600" -->
<!-- isosent="20100726065530" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="SNT134-w3492801117C71664FF06CACBA60_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTi=4TPKJzJR7aKYvFVFaM21Z=gFHmDs7vqyErHj6_at_mail.gmail.com" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 02:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
It can be installed on linux and work with gcc ? 
<br>
If I have many processes, such as 30, I have to open 30 terminal windows ? 
<br>
thanks
<br>
Jack
<br>
<p><span class="quotelev1">&gt; Date: Mon, 26 Jul 2010 08:23:57 +0200
</span><br>
<span class="quotelev1">&gt; From: jody.xha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried to run your aplication under valgrind?
</span><br>
<span class="quotelev1">&gt; Even though applications generallay run slower under valgrind,
</span><br>
<span class="quotelev1">&gt; it may detect memory errors before the actual crash happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best would be to start a terminal window for each of your processes
</span><br>
<span class="quotelev1">&gt; so you can see valgrind's output for each process separately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 26, 2010 at 4:08 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt; I run a 6 parallel processes on OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt; When the run-time of the program is short, it works well.
</span><br>
<span class="quotelev2">&gt; &gt; But, if the run-time is long, I got errors:
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] Failing at address: 0x44
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 1] /lib64/libc.so.6(strlen+0x10) [0x3c50278d60]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 2] /lib64/libc.so.6(_IO_vfprintf+0x4479) [0x3c50246b19]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 3] /lib64/libc.so.6(_IO_printf+0x9a) [0x3c5024d3aa]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 4] /home/path/exec [0x40ec9a]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] [ 6] /home/path/exec [0x401139]
</span><br>
<span class="quotelev2">&gt; &gt; [n124:45521] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; It seems that there may be some problems about memory management.
</span><br>
<span class="quotelev2">&gt; &gt; But, I cannot find the reason.
</span><br>
<span class="quotelev2">&gt; &gt; My program needs to write results to some files.
</span><br>
<span class="quotelev2">&gt; &gt; If I open the files too many without closing them, I may get the above
</span><br>
<span class="quotelev2">&gt; &gt; errors.
</span><br>
<span class="quotelev2">&gt; &gt; But, I have removed the writing files from my program.
</span><br>
<span class="quotelev2">&gt; &gt; The problem appears again when the program runs longer time.
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; Jack
</span><br>
<span class="quotelev2">&gt; &gt; July 25  2010
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev2">&gt; &gt; inbox. See how.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. 
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13779.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
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
