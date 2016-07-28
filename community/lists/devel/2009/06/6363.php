<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 08:48:35 2009" -->
<!-- isoreceived="20090627124835" -->
<!-- sent="Sat, 27 Jun 2009 08:48:28 -0400" -->
<!-- isosent="20090627124828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552" -->
<!-- id="DF8FB981-E527-496B-9110-A2054E29E4EC_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="200906270139.n5R1dFFm011999_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 08:48:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Previous message:</strong> <a href="6362.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Reply:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to make sure that George / Eugene sees this commit message...
<br>
<p>There was a conflict committed in r21551.  Can someone check these  
<br>
compiler warning messages?
<br>
<p>Thanks.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: June 26, 2009 9:39:15 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r21552
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-26 21:39:15 EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21552
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21552">https://svn.open-mpi.org/trac/ompi/changeset/21552</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Remove svn conflict lines due to commit r21551 in the sm btl. I #if  
</span><br>
<span class="quotelev1">&gt; 0'd out the offending line that cause the conflict just in case it  
</span><br>
<span class="quotelev1">&gt; was the correct one. However, this now compiles cleanly, minus the  
</span><br>
<span class="quotelev1">&gt; following warnings that I wasn't sure which way to resolve:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_sm.c: In function &#145;mca_btl_sm_sendi&#146;:
</span><br>
<span class="quotelev1">&gt; btl_sm.c:734: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev1">&gt; btl_sm.c: In function &#145;mca_btl_sm_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_sm.c:812: warning: comparison between signed and unsigned
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/sm/btl_sm_component.c |     5 ++---
</span><br>
<span class="quotelev1">&gt;    1 files changed, 2 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/sm/btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/sm/btl_sm_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/sm/btl_sm_component.c    2009-06-26 21:39:15  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 26 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -428,11 +428,10 @@
</span><br>
<span class="quotelev1">&gt;                  /* return the fragment */
</span><br>
<span class="quotelev1">&gt;                  MCA_BTL_SM_FIFO_WRITE(
</span><br>
<span class="quotelev1">&gt;                          mca_btl_sm_component.sm_peers[peer_smp_rank],
</span><br>
<span class="quotelev1">&gt; -&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev1">&gt;                          my_smp_rank, peer_smp_rank, hdr-&gt;frag,  
</span><br>
<span class="quotelev1">&gt; false, true, rc);
</span><br>
<span class="quotelev1">&gt; -=======
</span><br>
<span class="quotelev1">&gt; +#if 0
</span><br>
<span class="quotelev1">&gt;                          my_smp_rank, peer_smp_rank, hdr-&gt;frag,  
</span><br>
<span class="quotelev1">&gt; false, rc);
</span><br>
<span class="quotelev1">&gt; -&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r21550
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              case MCA_BTL_SM_FRAG_ACK:
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Previous message:</strong> <a href="6362.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>Reply:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
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
