<?
$subject_val = "[OMPI devel] [SOLVED] Re: Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 23:20:11 2014" -->
<!-- isoreceived="20140410032011" -->
<!-- sent="Thu, 10 Apr 2014 11:20:11 +0800" -->
<!-- isosent="20140410032011" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="[OMPI devel] [SOLVED] Re: Was &amp;quot;hcoll destruction via MPI attribute&amp;quot;: undefined symbol hcoll_group_destroy_notify" -->
<!-- id="CADkWibfm8dMO6vLS1fq6+J4qisGGon8zomvxhgwe1y1emTUNEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [SOLVED] Re: Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-09 23:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Previous message:</strong> <a href="14484.php">Jeff Squyres (jsquyres): "[OMPI devel] Slowly moving to git"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to JoshuaL and MikeD from Mellanox for the solution.
<br>
<p>This requires hcoll-v3 which will be in MOFED &gt; v2.1-1.0.6.
<br>
<p>- Anthony
<br>
<p>On Wed, Apr 9, 2014 at 10:08 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  In order to run with OMPI 1.8, we need to get you the latest HCOLL drop.
</span><br>
<span class="quotelev1">&gt; Mike Dubman can handle this for you. He will be back in the office Thursday
</span><br>
<span class="quotelev1">&gt; sometime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Anthony
</span><br>
<span class="quotelev1">&gt; Alba
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, April 08, 2014 9:59 PM
</span><br>
<span class="quotelev1">&gt; *To:* devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;:
</span><br>
<span class="quotelev1">&gt; undefined symbol hcoll_group_destroy_notify
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running OMPI 1.8 with Mellanox OFED 2.1-1.0.6, with
</span><br>
<span class="quotelev1">&gt; --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The symbol hcoll_group_destroy_notify() is used in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/hcoll/coll_hcoll_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I cannot find it exported anywhere. It is not in
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/lib*so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nm /opt/mellanox/hcoll/lib/lib*so | grep group_destroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returns nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MOFED contains hcoll-2.0.472-1.x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13622.php">http://www.open-mpi.org/community/lists/devel/2014/01/13622.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Anthony
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14480.php">http://www.open-mpi.org/community/lists/devel/2014/04/14480.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>Previous message:</strong> <a href="14484.php">Jeff Squyres (jsquyres): "[OMPI devel] Slowly moving to git"</a>
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
