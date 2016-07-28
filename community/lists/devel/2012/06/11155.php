<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 15:36:57 2012" -->
<!-- isoreceived="20120622193657" -->
<!-- sent="Fri, 22 Jun 2012 15:36:53 -0400" -->
<!-- isosent="20120622193653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="13F0236E-A0A3-46F8-98A0-552F72868062_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F10B2403-B04B-4ECD-AADE-E7094F3348FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 15:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To update everyone: there was much more discussion about this off-list.  :-)
<br>
<p>We decided to do the following:
<br>
<p>1. The name --with-verbs seems better than --with-openfabrics, if for no other reason than the name &quot;openfabrics&quot; encompasses more things than we intend with this name (e.g., udapl, psm, etc.).
<br>
<p>2. There is a definite problem that needs to be fixed, but it is only partially related to the renaming.  Basically: the proposed option renaming is occurring opportunistically with this bug fix.
<br>
<p>3. We are *not* renaming the openib BTL at this time.  It would be great if someone would do this in the future, hint hint!
<br>
<p>4. The behavior of --with[out]-verbs is as was described in a prior mail:
<br>
&nbsp;&nbsp;- if --with-verbs is specified, all 3 verbs-based components must succeed
<br>
&nbsp;&nbsp;- if --without-verbs is specified, all 4 verbs-based components will not build
<br>
&nbsp;&nbsp;- if --with-verbs=DIR is specified, all 3 verbs-based components must succeed and will use DIR to find verbs headers and libraries
<br>
<p>5. The new collectives / non-blocking collectives will likely revise some more configury in this area when it comes in mid/late next week, because a bunch of verbs stuff moved out of the openib BTL and into common.  Pasha and I will revisit this when all that stuff is merged in next week.
<br>
<p>6. I'll be committing the current --with-verbs stuff right now in order to fix the bug that Brian is running in to.
<br>
<p><p>On Jun 21, 2012, at 2:41 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 21, 2012, at 1:54 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; About naming - I would agree with Terry, it makes sense to name it after network API used for this btl - &quot;verbs&quot; (it is not obverts).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that &quot;verbs&quot; is terrible, but I think that &quot;openfabrics&quot; has more user-level recognition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if you ask a customer what kind of network stack they have installed on their machine, they'll say &quot;I have OFED installed&quot;.  They won't say &quot;I have the verbs stack installed.&quot;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11147.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11156.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
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
