<?
$subject_val = "[hwloc-users] xmlbuffer test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 00:41:26 2010" -->
<!-- isoreceived="20101105044126" -->
<!-- sent="Fri, 5 Nov 2010 13:41:20 +0900" -->
<!-- isosent="20101105044120" -->
<!-- name="ryuuta" -->
<!-- email="ryuuta_at_[hidden]" -->
<!-- subject="[hwloc-users] xmlbuffer test failure" -->
<!-- id="AANLkTikDSvMmZdU2341-DUGQYoFT19gKzKgarn3V1kG7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] xmlbuffer test failure<br>
<strong>From:</strong> ryuuta (<em>ryuuta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 00:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/10/0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Reply:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0239.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0240.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'd like to report the failure of the one of the tests run by 'make check':
<br>
<p>exported to buffer 0x8546408 length 3070
<br>
re-exported to buffer 0x854ce70 length 3047
<br>
lt-xmlbuffer: ../../hwloc/tests/xmlbuffer.c:36: main: Assertion `size1 ==
<br>
size2' failed.
<br>
/bin/sh: line 5: 14531 Aborted                 ${dir}$tst
<br>
FAIL: xmlbuffer
<br>
========================================================
<br>
1 of 19 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p>I'm using gcc-4.5.1, libxml2-2.7.7, and zlib-1.2.5.
<br>
The revision of hwloc checked out from svn is: 2702
<br>
<p>Regards,
<br>
Ryuta
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/10/0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Reply:</strong> <a href="0238.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0239.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0240.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
<li><strong>Maybe reply:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-users] xmlbuffer test failure"</a>
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
