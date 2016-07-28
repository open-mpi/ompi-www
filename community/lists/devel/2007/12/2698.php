<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 07:13:40 2007" -->
<!-- isoreceived="20071201121340" -->
<!-- sent="Sat, 1 Dec 2007 07:10:54 -0500" -->
<!-- isosent="20071201121054" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="473823BF-A8AF-4E4B-8B71-4E7805A111DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270711131241q916578ct980cf1a25c3f4816_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-01 07:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2699.php">Brian Barrett: "Re: [OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2007, at 3:41 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; A question I had was with respect to what to set for the default value
</span><br>
<span class="quotelev1">&gt; of btl_sctp_exclusivity... I had wanted the exclusivity to be
</span><br>
<span class="quotelev1">&gt; &quot;slightly less than TCP&quot; so it was available but not the default.  In
</span><br>
<span class="quotelev1">&gt; the code I set btl_sctp_exclusivity to this:
</span><br>
<span class="quotelev1">&gt; MCA_BTL_EXCLUSIVITY_LOW - 1
</span><br>
<span class="quotelev1">&gt; ...however MCA_BTL_EXCLUSIVITY_LOW is defined as 0 and ompi_info says
</span><br>
<span class="quotelev1">&gt; that exclusivity must be &gt;= 0... a -1 exclusivity doesn't seem to
</span><br>
<span class="quotelev1">&gt; break anything though...   If two BTLs have the same exclusivity, what
</span><br>
<span class="quotelev1">&gt; is the tie-break?  Alphabetic order?
</span><br>
<p><p>There is no tie break; they are both used.  During BML selection, only  
<br>
the BTLs that share the highest exclusivity settings are saved and  
<br>
used later.
<br>
<p>FWIW, here's what I see as some of the current values:
<br>
<p>[3:54] svbu-mpi:~ % ompi_info --param btl all --parsable | grep  
<br>
exclusivity | grep value
<br>
mca:btl:openib:param:btl_openib_exclusivity:value:1024
<br>
mca:btl:self:param:btl_self_exclusivity:value:65536
<br>
mca:btl:sm:param:btl_sm_exclusivity:value:65535
<br>
mca:btl:tcp:param:btl_tcp_exclusivity:value:0
<br>
<p>Perhaps we should make TCP be the LOW value + 100 or somesuch.  This  
<br>
would give others the flexibility to do exactly what Brad proposes --  
<br>
available, but not the default.
<br>
<p>Alternatively, you could do what the ofud BTL does (a currently  
<br>
experimental BTL): look for the string &quot;ofud&quot; in the &quot;btl&quot; MCA  
<br>
parameter -- i.e., see if the user explicitly asked for the ofud BTL.   
<br>
If not found (doing the Right Things with the &quot;^&quot; operator, of  
<br>
course), then disable the ofud BTL by returning NULL from the  
<br>
component_init() function.
<br>
<p>Either seems fine to me; the ofud method seems a little less elegant  
<br>
-- was there a reason not to use exclusivity here?  Was it just the  
<br>
fact that TCP's exclusivity is already the lowest possible value (0)?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2699.php">Brian Barrett: "Re: [OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2697.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
