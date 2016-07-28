<?
$subject_val = "[OMPI devel] MTT on Mac";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 15:22:17 2015" -->
<!-- isoreceived="20151215202217" -->
<!-- sent="Tue, 15 Dec 2015 12:22:10 -0800" -->
<!-- isosent="20151215202210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT on Mac" -->
<!-- id="0E3392A7-EE8C-40DE-88C7-BE981769CEA5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] MTT on Mac<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 15:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18423.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for Howard, who lamented the lack of MTT runs on the Mac (today&#226;&#128;&#153;s master):
<br>
<p>+-------------+-----------------+-------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
<br>
| Phase       | Section         | MPI Version | Duration | Pass | Fail | Time out | Skip | Detailed report                                                          |
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+--------------------------------------------------------------------------+
<br>
| MPI Install | my installation | 3.0.0a1     | 00:00    | 1    |      |          |      | MPI_Install-my_installation-my_installation-3.0.0a1-my_installation.html |
<br>
| Test Build  | trivial         | 3.0.0a1     | 00:00    | 1    |      |          |      | Test_Build-trivial-my_installation-3.0.0a1-my_installation.html          |
<br>
| Test Build  | ibm             | 3.0.0a1     | 00:56    | 1    |      |          |      | Test_Build-ibm-my_installation-3.0.0a1-my_installation.html              |
<br>
| Test Build  | intel           | 3.0.0a1     | 00:29    | 1    |      |          |      | Test_Build-intel-my_installation-3.0.0a1-my_installation.html            |
<br>
| Test Build  | onesided        | 3.0.0a1     | 00:05    | 1    |      |          |      | Test_Build-onesided-my_installation-3.0.0a1-my_installation.html         |
<br>
| Test Build  | orte            | 3.0.0a1     | 00:01    | 1    |      |          |      | Test_Build-orte-my_installation-3.0.0a1-my_installation.html             |
<br>
| Test Run    | trivial         | 3.0.0a1     | 00:01    | 2    |      |          |      | Test_Run-trivial-my_installation-3.0.0a1-my_installation.html            |
<br>
| Test Run    | ibm             | 3.0.0a1     | 13:41    | 361  |      | 1        |      | Test_Run-ibm-my_installation-3.0.0a1-my_installation.html                |
<br>
| Test Run    | spawn           | 3.0.0a1     | 00:02    | 7    |      |          |      | Test_Run-spawn-my_installation-3.0.0a1-my_installation.html              |
<br>
| Test Run    | loopspawn       | 3.0.0a1     | 00:07    |      | 1    |          |      | Test_Run-loopspawn-my_installation-3.0.0a1-my_installation.html          |
<br>
| Test Run    | intel           | 3.0.0a1     | 38:33    | 240  |      | 2        | 2    | Test_Run-intel-my_installation-3.0.0a1-my_installation.html              |
<br>
| Test Run    | intel_skip      | 3.0.0a1     | 05:48    | 222  |      |          | 22   | Test_Run-intel_skip-my_installation-3.0.0a1-my_installation.html         |
<br>
| Test Run    | onesided        | 3.0.0a1     | 00:35    | 31   |      | 1        |      | Test_Run-onesided-my_installation-3.0.0a1-my_installation.html           |
<br>
| Test Run    | orte            | 3.0.0a1     | 00:51    | 19   |      |          |      | Test_Run-orte-my_installation-3.0.0a1-my_installation.html               |
<br>
+-------------+-----------------+-------------+----------+------+------+----------+------+&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;
<br>
<p>I&#226;&#128;&#153;ll happily run it every night as my computer gently &#226;&#128;&#156;sleeps&#226;&#128;&#157;
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18423.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing"</a>
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
