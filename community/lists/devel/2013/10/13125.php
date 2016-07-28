<?
$subject_val = "[OMPI devel] Warnings in v1.7.4: rcache";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 19:18:49 2013" -->
<!-- isoreceived="20131023231849" -->
<!-- sent="Wed, 23 Oct 2013 16:18:47 -0700" -->
<!-- isosent="20131023231847" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings in v1.7.4: rcache" -->
<!-- id="CAMD57oem_PMB3HM9P5J36_jEF3SEzQjy++wQMxghaNXgTzgfZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings in v1.7.4: rcache<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 19:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>Previous message:</strong> <a href="13124.php">Larry Baker: "Re: [OMPI devel] http://newscenter.lbl.gov/wp-content/uploads/2008/07/yelick-berkeleyview-july081.pdf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>Reply:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the recent CMRs has created new warnings in v1.7.4:
<br>
<p>rcache_vma.c: In function 'mca_rcache_vma_find':
<br>
rcache_vma.c:58:23: warning: pointer of type 'void *' used in arithmetic
<br>
[-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c:58:30: warning: pointer of type 'void *' used in arithmetic
<br>
[-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c: In function 'mca_rcache_vma_find_all':
<br>
rcache_vma.c:84:23: warning: pointer of type 'void *' used in arithmetic
<br>
[-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
rcache_vma.c:84:30: warning: pointer of type 'void *' used in arithmetic
<br>
[-Wpedantic]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>Does someone know where these came from, and how to correct them?
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>Previous message:</strong> <a href="13124.php">Larry Baker: "Re: [OMPI devel] http://newscenter.lbl.gov/wp-content/uploads/2008/07/yelick-berkeleyview-july081.pdf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
<li><strong>Reply:</strong> <a href="13126.php">Rolf vandeVaart: "Re: [OMPI devel] Warnings in v1.7.4: rcache"</a>
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
