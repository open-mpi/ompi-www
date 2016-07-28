<?
$subject_val = "Re: [OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  1 00:13:45 2010" -->
<!-- isoreceived="20100701041345" -->
<!-- sent="Wed, 30 Jun 2010 22:13:40 -0600" -->
<!-- isosent="20100701041340" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, Segmentation fault" -->
<!-- id="SNT134-w22FAC4B25F0B620CECDAB2CBCD0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTinSJ63CXy7OCXuYAu_fRmePFIqQM_4tjLGjFt7O_at_mail.gmail.com" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-01 00:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13455.php">Asad Ali: "[OMPI users] Parallel Tempering with MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13451.php">amjad ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
I am not familiar with OpenMPI. 
<br>
Would you please help me with how to ask openMPI to show where the fault occurs ?
<br>
GNU debuger ?
<br>
Any help is appreciated. 
<br>
thanks!!!
<br>
Jack 
<br>
June 30  2010
<br>
<p>Date: Wed, 30 Jun 2010 16:13:09 -0400
<br>
From: amjad11_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI, Segmentation fault
<br>
<p>Based on my experiences, I would FULLY endorse (100% agree with) David Zhang.
<br>
It is usually a coding or typo mistake.
<br>
<p>&nbsp;At first, Ensure that array sizes and dimension are correct.
<br>
<p>I experience that if openmpi is compiled with gnu compilers (not with Intel) then it also point outs the subroutine exactly in which the fault occur. have a try.
<br>
<p><p>best,
<br>
AA
<br>
<p>&nbsp;&nbsp;
<br>
<p>On Wed, Jun 30, 2010 at 12:43 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p>When I got segmentation faults, it has always been my coding mistakes.  Perhaps your code is not robust against number of processes not divisible by 2?
<br>
<p>On Wed, Jun 30, 2010 at 8:47 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p><p>Dear All,
<br>
I am using Open MPI, I got the error: 
<br>
n337:37664] *** Process received signal ***[n337:37664] Signal: Segmentation fault (11)[n337:37664] Signal code: Address not mapped (1)
<br>
<p><p>[n337:37664] Failing at address: 0x7fffcfe90000[n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0][n337:37664] [ 1] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7]
<br>
<p><p>[n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974][n337:37664] [ 3] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1) [0x412139][n337:37664] *** End of error message ***
<br>
<p><p><p>After searching answers, it seems that some functions fail.  My program can run well for 1,2,10 processors, but fail when the number of tasks cannotbe divided evenly by number of processes. 
<br>
<p><p><p>Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
June 30  2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail.  Get busy.
<br>
<p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
-- 
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 		 	   		  
_________________________________________________________________
Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13455.php">Asad Ali: "[OMPI users] Parallel Tempering with MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13451.php">amjad ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13457.php">Asad Ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
