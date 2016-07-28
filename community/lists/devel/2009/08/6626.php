<?
$subject_val = "Re: [OMPI devel] MTL PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 16:04:02 2009" -->
<!-- isoreceived="20090812200402" -->
<!-- sent="Wed, 12 Aug 2009 14:03:57 -0600" -->
<!-- isosent="20090812200357" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTL PSM errors" -->
<!-- id="71d2d8cc0908121303s7a820569ya43aa209c0af3726_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A138796A861C994C87C7E4572BB0B5348443347213_at_AVEXMB2.qlogic.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 16:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6627.php">Kiril Dichev: "[OMPI devel] reorder parameter in MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>In reply to:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad about the error - the specific error had bad characters in the MTT
<br>
report, so I was trying to piece it together for you.
<br>
<p>Your latest change should probably resolve the problem, I suspect. The error
<br>
isn't occurring on any system I have access to - it is being reported in MTT
<br>
from the Qlogic MTT cluster. Since that is you folks, perhaps you can take a
<br>
look at it and see what is going on?
<br>
<p>Ralph
<br>
<p>On Wed, Aug 12, 2009 at 1:41 PM, Avneesh Pant &lt;avneesh.pant_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These changes were done by me but I am not seeing how psm_ep_open_opts
</span><br>
<span class="quotelev1">&gt; could be referring to ib_port or ib_service_level. These are fields in
</span><br>
<span class="quotelev1">&gt; mca_mtl_psm_module_t.  On the build machine this is failing on there should
</span><br>
<span class="quotelev1">&gt; be a psm.h file (usually under /usr/include). Can you tell me what PSM_VERNO
</span><br>
<span class="quotelev1">&gt; is defined as for you? Maybe you have an extremely old version but even in
</span><br>
<span class="quotelev1">&gt; that case it should complain about port and outsl symbols being undefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the inconvenience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Avneesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Ralph Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, August 12, 2009 6:21 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] MTL PSM errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been getting MTT errors that prevent build on systems that support
</span><br>
<span class="quotelev1">&gt; the MTL PSM module. I took a look this morning and fixed a couple of them.
</span><br>
<span class="quotelev1">&gt; However, there are two more that I cannot fix since I don't have access to
</span><br>
<span class="quotelev1">&gt; such a system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_psm.c:132: error: struct psm_ep_open_opts has no member named ib_port
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_psm.c:133: error: struct psm_ep_open_opts has no member named ib_service_level
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone familiar with that module please fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6627.php">Kiril Dichev: "[OMPI devel] reorder parameter in MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
<li><strong>In reply to:</strong> <a href="6625.php">Avneesh Pant: "Re: [OMPI devel] MTL PSM errors"</a>
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
