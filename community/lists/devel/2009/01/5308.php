<?
$subject_val = "Re: [OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:31:51 2009" -->
<!-- isoreceived="20090126193151" -->
<!-- sent="Mon, 26 Jan 2009 11:31:43 -0800" -->
<!-- isosent="20090126193143" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="497E0F9F.9010004_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="34F0EE4E-1A96-4B3E-A357-CFA18004C000_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Previous message:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me 
</span><br>
<span class="quotelev1">&gt; to bring a question to the Open MPI user and developer communities: is 
</span><br>
<span class="quotelev1">&gt; anyone interested in having a single MPI job span HCAs or RNICs from 
</span><br>
<span class="quotelev1">&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask 
</span><br>
<span class="quotelev1">&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interop testing lab at the University of New Hampshire 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a>) discovered that most 
</span><br>
<span class="quotelev1">&gt; (all?) MPI implementations fail when having a single MPI job span HCAs 
</span><br>
<span class="quotelev1">&gt; from multiple vendors and/or span RNICs from multiple vendors.  I 
</span><br>
<span class="quotelev1">&gt; don't remember the exact details (and they may not be public, anyway), 
</span><br>
<span class="quotelev1">&gt; but I'm pretty sure that OMPI failed when used with QLogic and 
</span><br>
<span class="quotelev1">&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising, given 
</span><br>
<span class="quotelev1">&gt; how we tune Open MPI's use of OpenFabrics-capable hardware based on an 
</span><br>
<span class="quotelev1">&gt; internal Open MPI .ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is: does anyone want/need to support jobs that span 
</span><br>
<span class="quotelev1">&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think the interop problems could easily arise with multiple models of 
<br>
HCA from the same vendor due to the OMPI practice Jeff mentions of 
<br>
tuning the HCAs differently according to model.
<br>
<p>There are institutions who built clusters with many node configurations 
<br>
over time, the Sandia CPlant comes to mind as perhaps the best known 
<br>
example, but I have seen others.
<br>
In such a system, new machines are added periodically and old ones 
<br>
removed.  However, at any given time a mixture of ages and 
<br>
configurations will exist.  In such a system there is NOT always the 
<br>
expectation/requirement that an MPI job run across all (or even 
<br>
multiple) node types, but such a capability is valuable if it can be 
<br>
maintained.  So, while I personally don't have the want/need to support 
<br>
a single MPI job spanning multiple HCA models/vendors, I can make a case 
<br>
for the theoretical value.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Previous message:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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
