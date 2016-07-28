<?
$subject_val = "[OMPI devel] Use non-cpu frequency for timers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 05:25:21 2016" -->
<!-- isoreceived="20160520092521" -->
<!-- sent="Fri, 20 May 2016 14:55:00 +0530" -->
<!-- isosent="20160520092500" -->
<!-- name="Abhishek Joshi" -->
<!-- email="abhishek.joshi_at_[hidden]" -->
<!-- subject="[OMPI devel] Use non-cpu frequency for timers" -->
<!-- id="CAK_Rsw0jvFWX2DFy2oE8W5+YCE6WKx7VMViLRYTmN-=7yrW9qw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Use non-cpu frequency for timers<br>
<strong>From:</strong> Abhishek Joshi (<em>abhishek.joshi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 05:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Reply:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In amd64, we have rdtsc instruction which uses a timer updated at cpu
<br>
frequency.  The frequency is given by variable, opal_timer_linux_freq which
<br>
is the cpu frequency.
<br>
<p>Consider the case where a timer updated at non-cpu frequency is to be used.
<br>
<p>Question: In this case, how do we specify the frequency of the timer?
<br>
<p><p><pre>
-- 
Abhishek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19007.php">Josh Hursey: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI devel] RFC: Public Test Repo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Reply:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
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
