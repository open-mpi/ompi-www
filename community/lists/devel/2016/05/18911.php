<?
$subject_val = "[OMPI devel] Opal get cycles for ARM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 10:51:45 2016" -->
<!-- isoreceived="20160505145145" -->
<!-- sent="Thu, 5 May 2016 20:21:24 +0530" -->
<!-- isosent="20160505145124" -->
<!-- name="Abhishek Joshi" -->
<!-- email="abhishek.joshi_at_[hidden]" -->
<!-- subject="[OMPI devel] Opal get cycles for ARM" -->
<!-- id="CAK_Rsw0oWgXW1gTa03E6nktXAY+zRMXxRKH94Jq0UHM_6xXhSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Opal get cycles for ARM<br>
<strong>From:</strong> Abhishek Joshi (<em>abhishek.joshi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 10:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I came across this patch in OMPI opal.
<br>
<a href="https://www.open-mpi.org/community/lists/devel/2010/12/8819.php">https://www.open-mpi.org/community/lists/devel/2010/12/8819.php</a>
<br>
<p>I am looking to add similar support for armv8-A but I have a small query
<br>
regarding the implementation of *opal_sys_timer_get_cycles *for AMRv7-A.
<br>
It uses the Linux *times *function which returns the time in *ticks *and not
<br>
* cycles*. However , functions calling it  like   *opal_timer_base_get_usec
<br>
&nbsp;*in* mca/timer/linux/timer_linux.h  *assume the return value in cycles. Is
<br>
there a mismatch in terms of units?
<br>
<p>Can anyone please tell if I am missing something here?
<br>
<p>P.s: I contacted the author of above patch and was directed here.
<br>
<p><pre>
-- 
Abhishek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18912.php">Josh Hursey: "[OMPI devel] opal/mca/dl/ opal_dl_open with NULL fname - assert?"</a>
<li><strong>Previous message:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
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
