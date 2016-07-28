<?
$subject_val = "[OMPI devel] bug in r26626";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 09:05:39 2012" -->
<!-- isoreceived="20120622130539" -->
<!-- sent="Fri, 22 Jun 2012 09:05:31 -0400" -->
<!-- isosent="20120622130531" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in r26626" -->
<!-- id="4FE46D9B.9050402_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] bug in r26626<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 09:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like compilation of 32 bit platforms is failing due to a 
<br>
missing field.  It looks to me that for some reason r26626 deleted 
<br>
hdr_segkey in ompi/mca/osc/rdma/osc_rdma_header.h which is used in the 
<br>
macro OMPI_OSC_RDMA_RDMA_INFO_HDR_NTOH and HTON.  Is there a reason that 
<br>
hdr_segkey was removed, if so more changes are needed.
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
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
