<?
$subject_val = "Re: [OMPI devel] about Mellanox Jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 10:30:31 2016" -->
<!-- isoreceived="20160721143031" -->
<!-- sent="Thu, 21 Jul 2016 23:30:26 +0900" -->
<!-- isosent="20160721143026" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about Mellanox Jenkins" -->
<!-- id="CAAkFZ5tC4pYEtfrOG1V02goKN4o9ZsvhaKYEjShMhtKK5saaDw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="98C66050-9539-498F-89C8-42F97B8BD3C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about Mellanox Jenkins<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 10:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19256.php">Gilles Gouaillardet: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19254.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19260.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reproduced the error, then ran git bisect (in which I remove both install
<br>
and build dir)
<br>
git bisect pointed to the most recent commit
<br>
I rebuilt it (after removing both install and build dir) and the error was
<br>
gone
<br>
so I concluded the cause was a dirty install/build dir
<br>
<p>I will double check that tomorrow though
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, July 21, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 21, 2016, at 3:53 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox Jenkins marks recent PR's as failed for very surprising reasons.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca btl sm,self ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; failed because processes could not contact each other. i was able to
</span><br>
<span class="quotelev1">&gt; reproduce this once on my workstation,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and found the root cause was a dirty build and/or install dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles: I note that these tests also failed in MTT last night (e.g., at
</span><br>
<span class="quotelev1">&gt; Absoft, which *rarely* has errors):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://mtt.open-mpi.org/index.php?do_redir=2336">https://mtt.open-mpi.org/index.php?do_redir=2336</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that the cause is a dirty build and/or install dir?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19254.php">http://www.open-mpi.org/community/lists/devel/2016/07/19254.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19258.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19256.php">Gilles Gouaillardet: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>In reply to:</strong> <a href="19254.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19260.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
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
