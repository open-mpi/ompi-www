<?
$subject_val = "[OMPI devel] failed to open libltdl.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 01:56:57 2015" -->
<!-- isoreceived="20150203065657" -->
<!-- sent="Mon, 2 Feb 2015 22:56:55 -0800" -->
<!-- isosent="20150203065655" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] failed to open libltdl.so" -->
<!-- id="CAAvDA1481-wiKkU1nrcUKLBF+9mQRpQ6rEude2=+qo6M_eLsuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] failed to open libltdl.so<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 01:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16911.php">Paul Hargrove: "[OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16909.php">khushi popat: "[OMPI devel] open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found another failure mode for non-embedded libltdl.
<br>
<p>On a system with libltdl.so on the login node but NOT the compute nodes I
<br>
encountered the following, once per rank, at job launch:
<br>
<p>/home/phhargrove/OMPI/openmpi-libltdl-linux-x86_64 psm/INST/bin/orted:
<br>
error while loading shared libraries: libltdl.so.3: cannot open shared
<br>
object file: No such file or directory
<br>
<p>The mpirun command hung as a result.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16911.php">Paul Hargrove: "[OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16909.php">khushi popat: "[OMPI devel] open mpi"</a>
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
