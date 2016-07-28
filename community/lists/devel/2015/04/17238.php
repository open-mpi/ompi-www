<?
$subject_val = "Re: [OMPI devel] running Open MPI with different install paths";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 05:34:37 2015" -->
<!-- isoreceived="20150417093437" -->
<!-- sent="Fri, 17 Apr 2015 03:34:34 -0600" -->
<!-- isosent="20150417093434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running Open MPI with different install paths" -->
<!-- id="CAMD57odABt3=7y3zvMMkyBbdb8XLkqPzFrdDkG6aqQuF6nWueQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5530C507.7020004_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] running Open MPI with different install paths<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 05:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>What launch environment? We don't currently have a simple way of doing this
<br>
outside of ensuring the paths on those nodes point to the correct default
<br>
place (i.e., you can't use prefix). However, it might be possible to add
<br>
such support if we knew which nodes were what type. Unfortunately, we would
<br>
need to know that prior to launching the daemons, so we can't self-discover
<br>
it.
<br>
<p><p>On Fri, Apr 17, 2015 at 2:32 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am trying to run heterogeneous Open MPI.
</span><br>
<span class="quotelev1">&gt; all my nodes use NFS everything is shared, so i need to manually specify
</span><br>
<span class="quotelev1">&gt; x86_64 nodes must use /.../ompi-x86_64 and sparcv9 nodes must use
</span><br>
<span class="quotelev1">&gt; /.../ompi-sparcv9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there a simple way to achieve this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17237.php">http://www.open-mpi.org/community/lists/devel/2015/04/17237.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Reply:</strong> <a href="17242.php">Gilles Gouaillardet: "Re: [OMPI devel] running Open MPI with different install paths"</a>
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
