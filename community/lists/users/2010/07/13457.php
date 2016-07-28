<?
$subject_val = "Re: [OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  1 03:17:40 2010" -->
<!-- isoreceived="20100701071740" -->
<!-- sent="Thu, 1 Jul 2010 19:17:34 +1200" -->
<!-- isosent="20100701071734" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, Segmentation fault" -->
<!-- id="AANLkTikrIdqK39y6F9P4RQOwS604azcx8sErbmTpQJ2H_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w22FAC4B25F0B620CECDAB2CBCD0_at_phx.gbl" -->
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
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-01 03:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
<p>Debugging OpenMPI with traditional debuggers is a pain.
<br>
<span class="quotelev1">&gt;From your error message it sounds that you have some memory allocation
</span><br>
problem. Do you use dynamic memory allocation (allocate and then free)?
<br>
<p>I use display (printf()) command with MPIrank command. It tells me which
<br>
thread is giving segmentation fault.
<br>
<p>Cheers,
<br>
<p>Asad
<br>
<p>On Thu, Jul 1, 2010 at 4:13 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you please help me with how to ask openMPI to show where the fault
</span><br>
<span class="quotelev1">&gt; occurs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU debuger ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 30  2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Wed, 30 Jun 2010 16:13:09 -0400
</span><br>
<span class="quotelev1">&gt; From: amjad11_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI, Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on my experiences, I would FULLY endorse (100% agree with) David
</span><br>
<span class="quotelev1">&gt; Zhang.
</span><br>
<span class="quotelev1">&gt; It is usually a coding or typo mistake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first, Ensure that array sizes and dimension are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experience that if openmpi is compiled with gnu compilers (not with
</span><br>
<span class="quotelev1">&gt; Intel) then it also point outs the subroutine exactly in which the fault
</span><br>
<span class="quotelev1">&gt; occur. have a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt; AA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 30, 2010 at 12:43 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I got segmentation faults, it has always been my coding mistakes.
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
<span class="quotelev1">&gt;  Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI, I got the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n337:37664] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n337:37664] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n337:37664] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n337:37664] Failing at address: 0x7fffcfe90000
</span><br>
<span class="quotelev1">&gt; [n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev1">&gt; [n337:37664] [ 1]
</span><br>
<span class="quotelev1">&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7]
</span><br>
<span class="quotelev1">&gt; [n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev1">&gt; [n337:37664] [ 3]
</span><br>
<span class="quotelev1">&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1)
</span><br>
<span class="quotelev1">&gt; [0x412139]
</span><br>
<span class="quotelev1">&gt; [n337:37664] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After searching answers, it seems that some functions fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program can run well for 1,2,10 processors, but fail when the number of
</span><br>
<span class="quotelev1">&gt; tasks cannot
</span><br>
<span class="quotelev1">&gt; be divided evenly by number of processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 30  2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your
</span><br>
<span class="quotelev1">&gt; inbox. Learn more.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1</a>&gt;
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
<p><p><p><pre>
-- 
&quot;Statistical thinking will one day be as necessary for efficient citizenship
as the ability to read and write.&quot; - H.G. Wells
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13456.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13458.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
