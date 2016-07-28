<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 10:35:16 2011" -->
<!-- isoreceived="20110823143516" -->
<!-- sent="Tue, 23 Aug 2011 10:35:08 -0400" -->
<!-- isosent="20110823143508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="991D1265-0CC7-4467-95AF-9FEF1A3E1FB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5864_1314107711_p7NDt6cg001759_4E53B109.506_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 10:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2011, at 9:54 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I modified the code, copyright comments added.
</span><br>
<p>I added your fixes to <a href="https://bitbucket.org/jsquyres/ompi-tipc">https://bitbucket.org/jsquyres/ompi-tipc</a>.
<br>
<p><span class="quotelev1">&gt; And about configure.m4, sorry I was not clear before, tipc.h is under /usr/include/linux/tipc.h, not under include directly.
</span><br>
<p>Can you edit your configure.m4 directly and test it and whatnot?  I provided the configure.m4 as a starting point for you.  :-)  It shouldn't be hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you direct write access to the bitbucket, if you want it.  
<br>
<p>As we've discussed off-list, we can't take the code upstream until the contributor agreement is signed, unfortunately.
<br>
<p><span class="quotelev1">&gt; I have done some tests using tools like NetPIPE, osu and IMB and the result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev1">&gt; than TCP BTL.
</span><br>
<p>Great!  Can you share any results?
<br>
<p>Have you been able to compare it to the sm BTL?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
