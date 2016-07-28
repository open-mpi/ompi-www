<?
$subject_val = "[OMPI devel] [1.8.4rc3] dangling symlinks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 02:47:53 2014" -->
<!-- isoreceived="20141212074753" -->
<!-- sent="Thu, 11 Dec 2014 23:47:26 -0800" -->
<!-- isosent="20141212074726" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc3] dangling symlinks" -->
<!-- id="CAAvDA16V2yoofXZVR57ZcHOje5CeqAFm+4g7bgKE7RwQ_7tUdg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc3] dangling symlinks<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 02:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16537.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>Reply:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Linux system configured without java support I see the following two
<br>
dangling symlinks installed in ${prefix}/bin:
<br>
<p>lrwxrwxrwx  1 phhargrove phhargrove 8 Dec 11 23:52 oshjavac -&gt; mpijavac
<br>
lrwxrwxrwx  1 phhargrove phhargrove 8 Dec 11 23:52 shmemjavac -&gt; mpijavac
<br>
<p>It seems there is some logic missing to make installation of those links
<br>
conditional on Java support.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16537.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>Reply:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
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
