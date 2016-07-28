<?
$subject_val = "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 13:10:20 2016" -->
<!-- isoreceived="20160204181020" -->
<!-- sent="Thu, 4 Feb 2016 10:10:18 -0800" -->
<!-- isosent="20160204181018" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32" -->
<!-- id="CAMD57ofE+i1w7E=481+_ReNYJRcJ-w5e7onRDfUQQh1f9=hQCQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0E328655-8BCB-4FEF-8747-A69FC615FF29_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 13:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>In reply to:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes and no re the dependency. Without async_modex, the cutoff will save you
<br>
memory footprint but not result in any launch performance benefit.
<br>
Likewise, turning on async_modex without being over the cutoff won't do you
<br>
any good as you'll immediately demand all the modex data.
<br>
<p>So they are kinda related, but not in a rigid sense. Maybe they should
<br>
be...?
<br>
<p><p>On Thu, Feb 4, 2016 at 9:31 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 4, 2016, at 9:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +1, with an addition and modification:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * add the async_modex on by default
</span><br>
<span class="quotelev2">&gt; &gt; * make the change in master and let it &quot;stew&quot; for awhile before moving
</span><br>
<span class="quotelev1">&gt; to 2.0. I believe only Cisco has been running MTT against that setup so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's been a little while, and I forget exactly what the async modex is --
</span><br>
<span class="quotelev1">&gt; can you refresh my memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be ok with enabling the async_modex, but that's not dependency to or
</span><br>
<span class="quotelev1">&gt; from this 1024-&gt;32 change, right?  I.e., does the &quot;enable async_modex&quot;
</span><br>
<span class="quotelev1">&gt; change need to be tied to this change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, I'm fine letting this stuff cook on master for a little bit
</span><br>
<span class="quotelev1">&gt; before PR'ing to v2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18554.php">http://www.open-mpi.org/community/lists/devel/2016/02/18554.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>In reply to:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
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
