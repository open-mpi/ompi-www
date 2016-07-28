<?
$subject_val = "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 17:44:39 2014" -->
<!-- isoreceived="20140729214439" -->
<!-- sent="Tue, 29 Jul 2014 17:44:38 -0400" -->
<!-- isosent="20140729214438" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account" -->
<!-- id="CAG4F6z9dPSZm_O_RCgU2Mj+-kxBcZJSEWrcyBMvZYKwz46OtHg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53BFB6A9.6020706_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 17:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15330.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15106.php">Nadia Derbey: "[OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Nadia
<br>
<p>I CMRed your patch to 1.8.2 and applied the fix on the trunk in:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/32346">https://svn.open-mpi.org/trac/ompi/changeset/32346</a>
<br>
<p>Thanks for reporting!
<br>
<p>Josh
<br>
<p><p><p>On Fri, Jul 11, 2014 at 6:04 AM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that specifying the receive_queues through an mca param (-mca
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues ....) doesn't always override the
</span><br>
<span class="quotelev1">&gt; mca-btl-openib-device-params.ini setting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If for whatever reason we want to bypass the mca-btl-openib-device-params.ini
</span><br>
<span class="quotelev1">&gt; file setting for the receive_queues, we should be able to specify a value
</span><br>
<span class="quotelev1">&gt; through an mca param.
</span><br>
<span class="quotelev1">&gt; But if the string provided in the mca param is the same as the default one
</span><br>
<span class="quotelev1">&gt; (default_qps in btl_openib_register_mca_params()), this does not work: we
</span><br>
<span class="quotelev1">&gt; still get the receive_queues from the .ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is due to the way the mca_btl_openib_component.receive_queues_source
</span><br>
<span class="quotelev1">&gt; (where did we get the receive_queues value from) is computed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) in btl_openib_register_mca_params() we register
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues, providing default_qps as a default
</span><br>
<span class="quotelev1">&gt;    value.
</span><br>
<span class="quotelev1">&gt; 2) mca_btl_openib_component.receive_queues_source is set to
</span><br>
<span class="quotelev1">&gt; BTL_OPENIB_RQ_SOURCE_MCA only if the registered string
</span><br>
<span class="quotelev1">&gt;    is different from default_qps
</span><br>
<span class="quotelev1">&gt;    (if both strings are equal, the source is set to
</span><br>
<span class="quotelev1">&gt; BTL_OPENIB_RQ_SOURCE_DEFAULT).
</span><br>
<span class="quotelev1">&gt; 3) then, in init_one_device(), mca_btl_openib_component.receive_queues_source
</span><br>
<span class="quotelev1">&gt; is checked:
</span><br>
<span class="quotelev1">&gt;      . if its value is BTL_OPENIB_RQ_SOURCE_MCA, we bypass any other
</span><br>
<span class="quotelev1">&gt; setting (this is the behaviour I expected)
</span><br>
<span class="quotelev1">&gt;      . otherwise, we go on, getting the .ini file settings (this is the
</span><br>
<span class="quotelev1">&gt; behaviour I got)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to know if this behaviour is intentional and the reason for it.
</span><br>
<span class="quotelev1">&gt; If ever it is not, the attached trivial patch fixes it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15106.php">http://www.open-mpi.org/community/lists/devel/2014/07/15106.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15330.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="15328.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15106.php">Nadia Derbey: "[OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
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
