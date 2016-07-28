<?
$subject_val = "[OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 11:47:57 2010" -->
<!-- isoreceived="20100630154757" -->
<!-- sent="Wed, 30 Jun 2010 09:47:52 -0600" -->
<!-- isosent="20100630154752" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI, Segmentation fault" -->
<!-- id="SNT134-w49C0772F61D020866157B9CBCC0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI, Segmentation fault<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 11:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I am using Open MPI, I got the error: 
<br>
n337:37664] *** Process received signal ***[n337:37664] Signal: Segmentation fault (11)[n337:37664] Signal code: Address not mapped (1)[n337:37664] Failing at address: 0x7fffcfe90000[n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0][n337:37664] [ 1] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7][n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974][n337:37664] [ 3] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1) [0x412139][n337:37664] *** End of error message ***
<br>
After searching answers, it seems that some functions fail.  My program can run well for 1,2,10 processors, but fail when the number of tasks cannotbe divided evenly by number of processes. 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
June 30  2010
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13447.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13449.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
