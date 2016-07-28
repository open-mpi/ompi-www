<?
$subject_val = "[OMPI devel] MTL PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 09:20:59 2009" -->
<!-- isoreceived="20090812132059" -->
<!-- sent="Wed, 12 Aug 2009 07:20:54 -0600" -->
<!-- isosent="20090812132054" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] MTL PSM errors" -->
<!-- id="71d2d8cc0908120620k78175256h40a2dd9417c0ff0c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MTL PSM errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 09:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Reply:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We have been getting MTT errors that prevent build on systems that support
<br>
the MTL PSM module. I took a look this morning and fixed a couple of them.
<br>
However, there are two more that I cannot fix since I don't have access to
<br>
such a system:
<br>
<p>mtl_psm.c:132: error: struct psm_ep_open_opts has no member named ib_port
<br>
mtl_psm.c:133: error: struct psm_ep_open_opts has no member named
<br>
ib_service_level
<br>
<p><p>Could someone familiar with that module please fix this?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Reply:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
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
