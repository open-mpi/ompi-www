<?
$subject_val = "Re: [OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 12:09:46 2010" -->
<!-- isoreceived="20100726160946" -->
<!-- sent="Mon, 26 Jul 2010 09:09:41 -0700" -->
<!-- isosent="20100726160941" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="AANLkTimo6EygU4cvJWzms=ipRby8d7RDt8a1ezjU6kaf_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 12:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13781.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What do you mean short and long? Do you have the ability to control
<br>
the execution time of your program without changing a single line of
<br>
your code?
<br>
<p>On 7/25/10, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; I run a 6 parallel processes on OpenMPI.
</span><br>
<span class="quotelev1">&gt; When the run-time of the program is short, it works well.
</span><br>
<span class="quotelev1">&gt; But, if the run-time is long, I got errors:
</span><br>
<span class="quotelev1">&gt; [n124:45521] *** Process received signal ***[n124:45521] Signal:
</span><br>
<span class="quotelev1">&gt; Segmentation fault (11)[n124:45521] Signal code: Address not mapped
</span><br>
<span class="quotelev1">&gt; (1)[n124:45521] Failing at address: 0x44[n124:45521] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0 [0x3c50e0e4c0][n124:45521] [ 1]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(strlen+0x10) [0x3c50278d60][n124:45521] [ 2]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(_IO_vfprintf+0x4479) [0x3c50246b19][n124:45521] [ 3]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(_IO_printf+0x9a) [0x3c5024d3aa][n124:45521] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/path/exec [0x40ec9a][n124:45521] [ 5]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974][n124:45521] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/path/exec [0x401139][n124:45521] *** End of error message ***
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
<span class="quotelev1">&gt; July 25  2010
</span><br>
<span class="quotelev1">&gt;  		 	   		
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev1">&gt; inbox.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2</a>
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13781.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
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
