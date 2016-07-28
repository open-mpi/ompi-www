<?
$subject_val = "Re: [OMPI devel] MTL PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:42:11 2009" -->
<!-- isoreceived="20090812194211" -->
<!-- sent="Wed, 12 Aug 2009 12:41:45 -0700" -->
<!-- isosent="20090812194145" -->
<!-- name="Avneesh Pant" -->
<!-- email="avneesh.pant_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTL PSM errors" -->
<!-- id="A138796A861C994C87C7E4572BB0B5348443347213_at_AVEXMB2.qlogic.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0908120620k78175256h40a2dd9417c0ff0c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTL PSM errors<br>
<strong>From:</strong> Avneesh Pant (<em>avneesh.pant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 15:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<li><strong>In reply to:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Reply:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
These changes were done by me but I am not seeing how psm_ep_open_opts could be referring to ib_port or ib_service_level. These are fields in mca_mtl_psm_module_t.  On the build machine this is failing on there should be a psm.h file (usually under /usr/include). Can you tell me what PSM_VERNO is defined as for you? Maybe you have an extremely old version but even in that case it should complain about port and outsl symbols being undefined.
<br>
<p>Sorry for the inconvenience.
<br>
Avneesh
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, August 12, 2009 6:21 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] MTL PSM errors
<br>
<p>Hi folks
<br>
<p>We have been getting MTT errors that prevent build on systems that support the MTL PSM module. I took a look this morning and fixed a couple of them. However, there are two more that I cannot fix since I don't have access to such a system:
<br>
<p>mtl_psm.c:132: error: struct psm_ep_open_opts has no member named ib_port
<br>
<p>mtl_psm.c:133: error: struct psm_ep_open_opts has no member named ib_service_level
<br>
<p><p><p><p><p><p><p><p>Could someone familiar with that module please fix this?
<br>
<p><p><p>Thanks
<br>
<p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<li><strong>In reply to:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>Reply:</strong> <a href="6626.php">Ralph Castain: "Re: [OMPI devel] MTL PSM errors"</a>
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
