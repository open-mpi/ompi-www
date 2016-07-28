<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:49:56 2014" -->
<!-- isoreceived="20140424184956" -->
<!-- sent="Thu, 24 Apr 2014 14:49:55 -0400" -->
<!-- isosent="20140424184955" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="CAMJJpkU+pQ7Wb+M3nGCfbdn+w=mFdFscFfpE_XJZqEUUkcvMiw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F0873FAD-E7D0-489B-8784-B03521553F58_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 14:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>In reply to:</strong> <a href="14595.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 24, 2014 at 1:06 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 24, 2014, at 12:54 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There seems to be an opportunity to still have heterogeneous environment in the future.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.enterprisetech.com/2014/04/23/ibm-google-show-power8-systems-openpower-efforts/">http://www.enterprisetech.com/2014/04/23/ibm-google-show-power8-systems-openpower-efforts/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How so?
</span><br>
<p>As the link I sent highlight, there is a push, a reasonable effort, to
<br>
bring another processor family into mainstream. This open the
<br>
potential for the dawn of heterogeneous data centers, thus the need
<br>
for at least some basic support for heterogeneous environments.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don&#226;&#128;&#153;t think it is fair to shift the burden on the original developer instead of the committer who broke a feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how your comment is related to this RFC.
</span><br>
<p>Because I have the feeling the logic behind the RFC is: it is broken
<br>
and must be removed because nobody wants to fix it. And I don't agree
<br>
with this logic. This particular code was working and was used but
<br>
incompetence and carelessness (in any arbitrary order) broke it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is unused.  It has been unused for a long time.  It is unlikely to be fixed.
</span><br>
<p>I wrote a significant portion of the code pinpointed in this RFC, and
<br>
maintained it for a reasonable amount of time, despite a number of
<br>
careless commits. But today, you are right, I have no intention in
<br>
fixing it anymore, and I don't think anybody wants to volunteer for
<br>
such a chore.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: This code has implications from the datatype engine till up in the
<br>
MPI layer. It also impacts  the BTL, especially the hand-shake for the
<br>
one requiring such a protocol. It also has an impact on the external32
<br>
support in MPI, for some types of architectures. So it's removal
<br>
should be an extremely cautious and chirurgical operation.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not remove it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14595.php">http://www.open-mpi.org/community/lists/devel/2014/04/14595.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14596.php">George Bosilca: "Re: [OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<li><strong>In reply to:</strong> <a href="14595.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14598.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
