<?
$subject_val = "Re: [OMPI devel] Vprotocol build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:12:54 2008" -->
<!-- isoreceived="20080421141254" -->
<!-- sent="Mon, 21 Apr 2008 10:12:44 -0400" -->
<!-- isosent="20080421141244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Vprotocol build problem" -->
<!-- id="62B0F45C-4396-41D6-86A8-285CCFDC8D8E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C431F918.D2A3%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Vprotocol build problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 10:12:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Reply:</strong> <a href="3735.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like a bug in ompi/mca/pml/v/configure.m4 that should be  
<br>
fixed.  I'll file a ticket.
<br>
<p>FYI: AM_CONDITIONAL's cannot go in MCA_pml_c_CONFIG.  See ompi/mca/btl/ 
<br>
openib/configure.m4 for an example of how to do an AM_CONDITIONAL  
<br>
properly.
<br>
<p><p>On Apr 21, 2008, at 9:56 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; I am now simply trying some of our vaunted configure system's  
</span><br>
<span class="quotelev1">&gt; options to see
</span><br>
<span class="quotelev1">&gt; what actually works, and what doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is one that does NOT work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enable_mca_no_build=pml-v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generates the following build error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: conditional &quot;OMPI_BUILD_vprotocol_pessimist_DSO&quot;  
</span><br>
<span class="quotelev1">&gt; was never
</span><br>
<span class="quotelev1">&gt; defined.
</span><br>
<span class="quotelev1">&gt; Usually this means the macro was only invoked conditionally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could somebody please fix this? Although I know it is &quot;on&quot; by default,
</span><br>
<span class="quotelev1">&gt; people should be able to turn it &quot;off&quot; - or we need to tell them &quot;you
</span><br>
<span class="quotelev1">&gt; can't&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Reply:</strong> <a href="3735.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol build problem"</a>
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
