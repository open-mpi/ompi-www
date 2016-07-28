<?
$subject_val = "Re: [OMPI devel] MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 17:14:59 2015" -->
<!-- isoreceived="20150511211459" -->
<!-- sent="Mon, 11 May 2015 14:14:46 -0700" -->
<!-- isosent="20150511211446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA params" -->
<!-- id="9A568462-9781-4DB3-8AA4-9CDEC0753538_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150511211037.GE7298_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 17:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>In reply to:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I just looked at it now, and I found one part of the problem:
<br>
<p><span class="quotelev2">&gt;&gt;   so mpi_preconnect_all is a deprecated synonym to a non-existing parameter.
</span><br>
<p>The output clearly shows it is a synonym of mpi_preconnect_mpi. This param exists, and it is registered in ompi_mpi_register_params. However, that function isn&#226;&#128;&#153;t called by ompi_info.
<br>
<p>Nathan: I&#226;&#128;&#153;ll leave it to you
<br>
<p><p><span class="quotelev1">&gt; On May 11, 2015, at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, that shouldn't be happening. Will take a look now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 11, 2015 at 04:51:43PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   I was looking to preconnect all MPI processes to remove some weird
</span><br>
<span class="quotelev2">&gt;&gt;   behaviors. As I did not remembered the full name I hope to get that from
</span><br>
<span class="quotelev2">&gt;&gt;   the ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt;   $ ompi_info -a -l 9  | grep preco
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated,
</span><br>
<span class="quotelev2">&gt;&gt;   synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev2">&gt;&gt;   so mpi_preconnect_all is a deprecated synonym to a non-existing parameter.
</span><br>
<span class="quotelev2">&gt;&gt;   So be it!
</span><br>
<span class="quotelev2">&gt;&gt;   I then added &quot;mpi_preconnect_mpi = true&quot; to my
</span><br>
<span class="quotelev2">&gt;&gt;   $(HOME).opemmpi/mca-params.conf file.
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_info -a -l 9  | grep preco
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;true&quot;, data source: file ((null)), level: 9 dev/all, type: bool,
</span><br>
<span class="quotelev2">&gt;&gt;   deprecated, synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev2">&gt;&gt;   While the change has been detected, the MCA system somehow got confused to
</span><br>
<span class="quotelev2">&gt;&gt;   where this change is coming from (the source file is (null)). Not very
</span><br>
<span class="quotelev2">&gt;&gt;   user friendly.
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17393.php">http://www.open-mpi.org/community/lists/devel/2015/05/17393.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17394.php">http://www.open-mpi.org/community/lists/devel/2015/05/17394.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17396.php">Friedley, Andrew: "[OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
<li><strong>In reply to:</strong> <a href="17394.php">Nathan Hjelm: "Re: [OMPI devel] MCA params"</a>
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
