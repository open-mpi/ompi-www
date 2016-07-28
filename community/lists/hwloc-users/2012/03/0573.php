<?
$subject_val = "[hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 07:45:23 2012" -->
<!-- isoreceived="20120313114523" -->
<!-- sent="Tue, 13 Mar 2012 06:37:19 -0500" -->
<!-- isosent="20120313113719" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="[hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="01f901cd010d$ab870e50$02952af0$_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] Problems on SMP with 48 cores<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 07:37:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0584.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0587.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0594.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0596.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0601.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
<p>Let me first say that hwloc is an excellent attempt in providing a portable
<br>
and cross-platform solution to introspect topology
<br>
-related information for different pieces of hardware. Thanks for working on
<br>
that. 
<br>
<p>Trying to use hwloc on a 48 bit core machine (Windows x64) causes problems,
<br>
though. Any information requests for processing units above number 32 return
<br>
garbage (see also the attached output of 'lstopo -of txt'). 
<br>
<p>I tried to recompile the library using MSVC which would allow me to debug
<br>
the issue, but after several hours of tweaking I gave up. As it turns out
<br>
the code base is everything but portable, which is really unfortunate for a
<br>
library which is supposed to be cross platform. 
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<p><p><p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0573/lstopo-48core-smp.txt">lstopo-48core-smp.txt</a>
</ul>
<!-- attachment="lstopo-48core-smp.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0574.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0584.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0585.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0587.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0594.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0596.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0598.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0601.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0604.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Maybe reply:</strong> <a href="0605.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
