<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 17:12:54 2013" -->
<!-- isoreceived="20130124221254" -->
<!-- sent="Thu, 24 Jan 2013 22:12:49 +0000" -->
<!-- isosent="20130124221249" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42C9E0EB_at_xmb-aln-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="510134A2.9030606_at_arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New ARM patch<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 17:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11983.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 24, 2013, at 8:18 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK. In which case I probably _should_ be on that list.
</span><br>
<span class="quotelev1">&gt; *cough* might I however suggest that a statement to that effect is added
</span><br>
<span class="quotelev1">&gt; to <a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a> ?
</span><br>
<p>Fair point.  Done.
<br>
<p><span class="quotelev2">&gt;&gt; I tested this patch in v1.6 and v1.7 on my Pi, and it seems to work
</span><br>
<span class="quotelev2">&gt;&gt; just fine.  &quot;make check&quot; passes all the ASM tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be perfectly clear: it wouldn't on ARMv5 though, and the ARMv6
</span><br>
<span class="quotelev1">&gt; ASM test executed with NOPs for barriers, although it would correctly
</span><br>
<span class="quotelev1">&gt; pass all other tests.
</span><br>
<p>Mmm.  Ok.  So is this a correct list of what is supported right now (i.e., in v1.6 with your patch)
<br>
<p>ARM4: no
<br>
ARM5: no
<br>
ARM6: sorta (not multi-core, or anywhere we would need barriers)
<br>
ARM7: yes
<br>
<p>?
<br>
<p>How would George's patch have changed that list?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11985.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27880 - trunk/ompi/request"</a>
<li><strong>Previous message:</strong> <a href="11983.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
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
