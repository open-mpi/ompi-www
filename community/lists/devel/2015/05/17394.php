<?
$subject_val = "Re: [OMPI devel] MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 17:10:38 2015" -->
<!-- isoreceived="20150511211038" -->
<!-- sent="Mon, 11 May 2015 15:10:37 -0600" -->
<!-- isosent="20150511211037" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA params" -->
<!-- id="20150511211037.GE7298_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkX0EqMUBWfgdaNB33k3fKAeyb_6k6y5rSMc4qOV=gdsTg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA params<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 17:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<li><strong>Previous message:</strong> <a href="17393.php">George Bosilca: "[OMPI devel] MCA params"</a>
<li><strong>In reply to:</strong> <a href="17393.php">George Bosilca: "[OMPI devel] MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<li><strong>Reply:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, that shouldn't be happening. Will take a look now.
<br>
<p>-Nathan
<br>
<p>On Mon, May 11, 2015 at 04:51:43PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    I was looking to preconnect all MPI processes to remove some weird
</span><br>
<span class="quotelev1">&gt;    behaviors. As I did not remembered the full name I hope to get that from
</span><br>
<span class="quotelev1">&gt;    the ompi_info.
</span><br>
<span class="quotelev1">&gt;    $ ompi_info -a -l 9  | grep preco
</span><br>
<span class="quotelev1">&gt;                     MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
</span><br>
<span class="quotelev1">&gt;    &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated,
</span><br>
<span class="quotelev1">&gt;    synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;    so mpi_preconnect_all is a deprecated synonym to a non-existing parameter.
</span><br>
<span class="quotelev1">&gt;    So be it!
</span><br>
<span class="quotelev1">&gt;    I then added &quot;mpi_preconnect_mpi = true&quot; to my
</span><br>
<span class="quotelev1">&gt;    $(HOME).opemmpi/mca-params.conf file.
</span><br>
<span class="quotelev1">&gt;    ompi_info -a -l 9  | grep preco
</span><br>
<span class="quotelev1">&gt;                     MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
</span><br>
<span class="quotelev1">&gt;    &quot;true&quot;, data source: file ((null)), level: 9 dev/all, type: bool,
</span><br>
<span class="quotelev1">&gt;    deprecated, synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;    While the change has been detected, the MCA system somehow got confused to
</span><br>
<span class="quotelev1">&gt;    where this change is coming from (the source file is (null)). Not very
</span><br>
<span class="quotelev1">&gt;    user friendly.
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17393.php">http://www.open-mpi.org/community/lists/devel/2015/05/17393.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17394/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<li><strong>Previous message:</strong> <a href="17393.php">George Bosilca: "[OMPI devel] MCA params"</a>
<li><strong>In reply to:</strong> <a href="17393.php">George Bosilca: "[OMPI devel] MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
<li><strong>Reply:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI devel] MCA params"</a>
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
