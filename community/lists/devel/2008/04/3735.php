<?
$subject_val = "Re: [OMPI devel] Vprotocol build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 11:46:39 2008" -->
<!-- isoreceived="20080421154639" -->
<!-- sent="Mon, 21 Apr 2008 11:46:27 -0400" -->
<!-- isosent="20080421154627" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Vprotocol build problem" -->
<!-- id="177E59B1-26E6-4D93-ACE0-6A777A949209_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62B0F45C-4396-41D6-86A8-285CCFDC8D8E_at_cisco.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 11:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I have been looking for a way to fix this for weeks now. I'll  
<br>
try the POST_CONFIGURE think asap.
<br>
<p>Aurelien
<br>
<p>Le 21 avr. 08 &#224; 10:12, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; This sounds like a bug in ompi/mca/pml/v/configure.m4 that should be
</span><br>
<span class="quotelev1">&gt; fixed.  I'll file a ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI: AM_CONDITIONAL's cannot go in MCA_pml_c_CONFIG.  See ompi/mca/ 
</span><br>
<span class="quotelev1">&gt; btl/
</span><br>
<span class="quotelev1">&gt; openib/configure.m4 for an example of how to do an AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2008, at 9:56 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am now simply trying some of our vaunted configure system's
</span><br>
<span class="quotelev2">&gt;&gt; options to see
</span><br>
<span class="quotelev2">&gt;&gt; what actually works, and what doesn't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is one that does NOT work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; enable_mca_no_build=pml-v
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Generates the following build error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: conditional &quot;OMPI_BUILD_vprotocol_pessimist_DSO&quot;
</span><br>
<span class="quotelev2">&gt;&gt; was never
</span><br>
<span class="quotelev2">&gt;&gt; defined.
</span><br>
<span class="quotelev2">&gt;&gt; Usually this means the macro was only invoked conditionally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could somebody please fix this? Although I know it is &quot;on&quot; by  
</span><br>
<span class="quotelev2">&gt;&gt; default,
</span><br>
<span class="quotelev2">&gt;&gt; people should be able to turn it &quot;off&quot; - or we need to tell them &quot;you
</span><br>
<span class="quotelev2">&gt;&gt; can't&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
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
