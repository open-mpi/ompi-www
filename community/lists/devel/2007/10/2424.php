<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 14:56:42 2007" -->
<!-- isoreceived="20071011185642" -->
<!-- sent="Thu, 11 Oct 2007 14:56:24 -0400" -->
<!-- isosent="20071011185624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: delete mvapi BTL for v1.3" -->
<!-- id="4F12E47D-0601-4BB0-91F2-781476A16202_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A2AA9E54-A141-4E75-BA53-2D51CF81FE24_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 14:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2425.php">Richard Graham: "[OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2384.php">Jeff Squyres: "[OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reminder -- this RFC expires tonight.
<br>
<p>Speak now or forever hold your peace...
<br>
<p><p>On Oct 5, 2007, at 7:46 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove the mvapi BTL for the v1.3 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: None of the IB vendors want to maintain it anymore; our future
</span><br>
<span class="quotelev1">&gt; is OFED.  If someone still has mvapi IB drivers, they can use the
</span><br>
<span class="quotelev1">&gt; OMPI v1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: svn rm ompi/mca/btl/mvapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Before the v1.3 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB, Thurs, Oct 11, 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of the IB vendors are interested in maintaining the &quot;mvapi&quot; BTL
</span><br>
<span class="quotelev1">&gt; anymore.  Indeed, none of us have updated it with any of the new/
</span><br>
<span class="quotelev1">&gt; interesting/better performance features that went into the openib BTL
</span><br>
<span class="quotelev1">&gt; over the past year (or more).  Additionally, some changes may be
</span><br>
<span class="quotelev1">&gt; coming in the OMPI infrastructure that would *require* some revamping
</span><br>
<span class="quotelev1">&gt; in the mvapi BTL -- and no one of Cisco, Voltaire, Mellanox is
</span><br>
<span class="quotelev1">&gt; willing to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we'd like to ditch the mvapi BTL starting with v1.3 and have the
</span><br>
<span class="quotelev1">&gt; official guidance be that if you have mvapi, you need to use the OMPI
</span><br>
<span class="quotelev1">&gt; v1.2 series (i.e., remove this from the SVN trunk in the Very Near
</span><br>
<span class="quotelev1">&gt; Future).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2425.php">Richard Graham: "[OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2423.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2384.php">Jeff Squyres: "[OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
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
