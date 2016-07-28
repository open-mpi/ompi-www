<?
$subject_val = "[OMPI devel] Threshold for pinning down user-buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 17:40:17 2014" -->
<!-- isoreceived="20140523214017" -->
<!-- sent="Fri, 23 May 2014 16:39:36 -0500" -->
<!-- isosent="20140523213936" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="[OMPI devel] Threshold for pinning down user-buffers" -->
<!-- id="CAPkf6e0BX0wEs_MKPnqX07LbOLnKBLYkS=6forembRgNqRephQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Threshold for pinning down user-buffers<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 17:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14838.php">Ralph Castain: "[OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Reply:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Is my understanding correct?
<br>
While servicing MPI_Send  using eager protocol over openib, there is a
<br>
data-size threshold below which it is preferred to copy the contents of the
<br>
user-buffer to a pre-pinned buffer instead of directly pinning down the
<br>
user-buffer. If this is correct, how does one determine this threshold?
<br>
<p>As always, thanks for the help
<br>
Sid
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14838.php">Ralph Castain: "[OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Reply:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
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
