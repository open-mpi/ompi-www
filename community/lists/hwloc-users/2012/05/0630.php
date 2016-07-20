<?
$subject_val = "[hwloc-users] hwloc - Build problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 09:14:50 2012" -->
<!-- isoreceived="20120520131450" -->
<!-- sent="Sun, 20 May 2012 16:14:45 +0300" -->
<!-- isosent="20120520131445" -->
<!-- name="Anatoly G" -->
<!-- email="anatolyrishon_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc - Build problem." -->
<!-- id="CACga2mrtNxHWXO9QXpaYbywGgj7hNTwT4WGkzQmfeNHdiF49Bw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc - Build problem.<br>
<strong>From:</strong> Anatoly G (<em>anatolyrishon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 09:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "[hwloc-users] #tgfh (thank God for hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>Reply:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear HWLOC.
<br>
I downloaded 1.4.2 version (tar file).
<br>
Performed
<br>
1) *./configure --enable-static*
<br>
2) *make*
<br>
3) *Wrote program*
<br>
#include &quot;hwloc.h&quot;
<br>
link with ($hwloc_dir)/src/.libhwloc.a
<br>
4) *In link stage I get following errors:*
<br>
Linking  EXE:
<br>
/space/home/anatol-g/Grape/release_4.6_FH/core/bin/linux64/rhe6/g++4.4.4/debug/mpi_rcv_waitany
<br>
...
<br>
/product/grape-data/hwloc-1.4.2/src/.libs/libhwloc.a(topology-xml.o): In
<br>
function `hwloc_libxml2_disable_stderrwarnings':
<br>
topology-xml.c:(.text+0x2d9): undefined reference to `__xmlGenericError'
<br>
topology-xml.c:(.text+0x2f0): undefined reference to
<br>
`xmlSetGenericErrorFunc'
<br>
/product/grape-data/hwloc-1.4.2/src/.libs/libhwloc.a(topology-xml.o): In
<br>
function `hwloc_backend_xml_init':
<br>
topology-xml.c:(.text+0x34f): undefined reference to `xmlCheckVersion'
<br>
topology-xml.c:(.text+0x37c): undefined reference to `xmlReadFile'
<br>
.....
<br>
.....
<br>
<p>Attached program file + error report.
<br>
I use
<br>
OS: Red Hat 6.0 Santiago
<br>
gcc 4.4.4-13
<br>
<p>Can you please help me?
<br>
Sorry if my question looks stupid.
<br>
Anatoly.
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0630/MakeErr.txt">MakeErr.txt</a>
</ul>
<!-- attachment="MakeErr.txt" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0630/mpi_hwloc_test.cpp">mpi_hwloc_test.cpp</a>
</ul>
<!-- attachment="mpi_hwloc_test.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>Previous message:</strong> <a href="0629.php">Jeff Squyres: "[hwloc-users] #tgfh (thank God for hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
<li><strong>Reply:</strong> <a href="0631.php">Brice Goglin: "Re: [hwloc-users] hwloc - Build problem."</a>
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
