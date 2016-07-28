<?
$subject_val = "Re: [OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 16:13:14 2010" -->
<!-- isoreceived="20100630201314" -->
<!-- sent="Wed, 30 Jun 2010 16:13:09 -0400" -->
<!-- isosent="20100630201309" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, Segmentation fault" -->
<!-- id="AANLkTinSJ63CXy7OCXuYAu_fRmePFIqQM_4tjLGjFt7O_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikR-lyCdPrUgZ8BUBWyokUkawoxcbo7d4LibgHD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI, Segmentation fault<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 16:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13452.php">Riccardo Murri: "[OMPI users] what is &quot;thread support: progress&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on my experiences, I would FULLY endorse (100% agree with) David
<br>
Zhang.
<br>
It is usually a coding or typo mistake.
<br>
<p>At first, Ensure that array sizes and dimension are correct.
<br>
<p>I experience that if openmpi is compiled with gnu compilers (not with Intel)
<br>
then it also point outs the subroutine exactly in which the fault occur.
<br>
have a try.
<br>
<p>best,
<br>
AA
<br>
<p><p><p>On Wed, Jun 30, 2010 at 12:43 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When I got segmentation faults, it has always been my coding mistakes.
</span><br>
<span class="quotelev1">&gt; Perhaps your code is not robust against number of processes not divisible by
</span><br>
<span class="quotelev1">&gt; 2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 30, 2010 at 8:47 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open MPI, I got the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n337:37664] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Failing at address: 0x7fffcfe90000
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1)
</span><br>
<span class="quotelev2">&gt;&gt; [0x412139]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After searching answers, it seems that some functions fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My program can run well for 1,2,10 processors, but fail when the number of
</span><br>
<span class="quotelev2">&gt;&gt; tasks cannot
</span><br>
<span class="quotelev2">&gt;&gt; be divided evenly by number of processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; June 30  2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev2">&gt;&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13452.php">Riccardo Murri: "[OMPI users] what is &quot;thread support: progress&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="13450.php">amjad ali: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
