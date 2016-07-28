<?
$subject_val = "Re: [OMPI devel] XRC_INI QPs and modify_qp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 08:27:49 2016" -->
<!-- isoreceived="20160701122749" -->
<!-- sent="Fri, 1 Jul 2016 12:27:47 +0000" -->
<!-- isosent="20160701122747" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XRC_INI QPs and modify_qp" -->
<!-- id="E4D56EB7-D82E-40F3-B91C-C79306B64FF4_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="990F2F6D-5069-4EAD-8EFE-05983C7E06FA_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XRC_INI QPs and modify_qp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-01 08:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19146.php">Josh Hursey: "[OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19144.php">H&#195;&#165;kon Bugge: "[OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>In reply to:</strong> <a href="19144.php">H&#195;&#165;kon Bugge: "[OMPI devel] XRC_INI QPs and modify_qp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed <a href="https://github.com/open-mpi/ompi/issues/1839">https://github.com/open-mpi/ompi/issues/1839</a> to track this issue.
<br>

<br>
Thanks!
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jul 1, 2016, at 6:57 AM, H&#195;&#165;kon Bugge &lt;Hakon.Bugge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To me, it looks like Open MPI in xoob_send_qp_connect() attempts to set the max_dest_rd_atomic attribute in the transition from INIT to RTR, even for XRC_INI QPs. This is illegal, according to the ib_modify_qp_is_ok() function in ib_core. In particular, IBV_QP_MAX_DEST_RD_ATOMIC is not part of either the required nor optional set of attributes for this transition for XRC_INI QPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thxs, H&#195;&#165;kon
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19144.php">http://www.open-mpi.org/community/lists/devel/2016/07/19144.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19146.php">Josh Hursey: "[OMPI devel] Additional bot:retest target for IBM Jenkins: bot:ibm:retest"</a>
<li><strong>Previous message:</strong> <a href="19144.php">H&#195;&#165;kon Bugge: "[OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>In reply to:</strong> <a href="19144.php">H&#195;&#165;kon Bugge: "[OMPI devel] XRC_INI QPs and modify_qp"</a>
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
