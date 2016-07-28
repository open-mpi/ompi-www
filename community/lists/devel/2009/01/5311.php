<?
$subject_val = "Re: [OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:33:39 2009" -->
<!-- isoreceived="20090126213339" -->
<!-- sent="Mon, 26 Jan 2009 13:33:29 -0800" -->
<!-- isosent="20090126213329" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="20090126213329.GA3311_at_hpegg.hsd1.ca.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="497E0F9F.9010004_at_lbl.gov" -->
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
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 16:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>In reply to:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 26, 2009 at 11:31:43AM -0800, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me  
</span><br>
<span class="quotelev2">&gt;&gt; to bring a question to the Open MPI user and developer communities: is  
</span><br>
<span class="quotelev2">&gt;&gt; anyone interested in having a single MPI job span HCAs or RNICs from  
</span><br>
<span class="quotelev2">&gt;&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask  
</span><br>
<span class="quotelev2">&gt;&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interop testing lab at the University of New Hampshire  
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a>) discovered that most  
</span><br>
<span class="quotelev2">&gt;&gt; (all?) MPI implementations fail when having a single MPI job span HCAs  
</span><br>
<span class="quotelev2">&gt;&gt; from multiple vendors and/or span RNICs from multiple vendors.  I  
</span><br>
<span class="quotelev2">&gt;&gt; don't remember the exact details (and they may not be public, anyway),  
</span><br>
<span class="quotelev2">&gt;&gt; but I'm pretty sure that OMPI failed when used with QLogic and  
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising, given  
</span><br>
<span class="quotelev2">&gt;&gt; how we tune Open MPI's use of OpenFabrics-capable hardware based on an  
</span><br>
<span class="quotelev2">&gt;&gt; internal Open MPI .ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question is: does anyone want/need to support jobs that span  
</span><br>
<span class="quotelev2">&gt;&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the interop problems could easily arise with multiple models of  
</span><br>
<span class="quotelev1">&gt; HCA from the same vendor due to the OMPI practice Jeff mentions of  
</span><br>
<span class="quotelev1">&gt; tuning the HCAs differently according to model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are institutions who built clusters with many node configurations  
</span><br>
<span class="quotelev1">&gt; over time, the Sandia CPlant comes to mind as perhaps the best known  
</span><br>
<span class="quotelev1">&gt; example, but I have seen others.
</span><br>
<span class="quotelev1">&gt; In such a system, new machines are added periodically and old ones  
</span><br>
<span class="quotelev1">&gt; removed.  However, at any given time a mixture of ages and  
</span><br>
<span class="quotelev1">&gt; configurations will exist.  In such a system there is NOT always the  
</span><br>
<span class="quotelev1">&gt; expectation/requirement that an MPI job run across all (or even  
</span><br>
<span class="quotelev1">&gt; multiple) node types, but such a capability is valuable if it can be  
</span><br>
<span class="quotelev1">&gt; maintained.  So, while I personally don't have the want/need to support  
</span><br>
<span class="quotelev1">&gt; a single MPI job spanning multiple HCA models/vendors, I can make a case  
</span><br>
<span class="quotelev1">&gt; for the theoretical value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I suspect that mixing hardware to any serious degree will slow MPI to the point that
<br>
there is little or no value in doing this.   Since purchasing decisions can
<br>
tip on as little as a 5% advantage I cannot see vendors loving this except
<br>
as a marketing check off item.
<br>
<p>I suspect the most common transport would be TCP/IP and that would introduce
<br>
gateway and routing issues between quick fabrics and other quick fabrics
<br>
that would be intolerable for most HPC applications (but not all).
<br>
<p>It may be that IPoIB  would be a sufficient communication layer for Infiniband
<br>
fabrics but would not address Myrinet or GigE+ links.   Gateways and 
<br>
bridges would have to come to the party.
<br>
<p>My memory of Infiniband interoperability results is that all IB vendors
<br>
can inter-operate correctly with IPoIB.   Perhaps this is sufficient but
<br>
OpenFabrics is not limited to Infiniband.   i.e from the OFA web site
<br>
&quot;The mission of the OpenFabrics Alliance (OFA) is to develop, distribute
<br>
and promote a unified, transport-independent, open-source software stack
<br>
for RDMA-capable fabrics and networks, including InfiniBand and Ethernet.&quot;
<br>
<p>If open-mpi took the position that TCP/IP was the foundation for MPI
<br>
interoperability it might be possible (baseline).  This alone might be sufficient
<br>
for some site expansion plans.
<br>
<p>Picking a transport from the list of OFA choices as a common ground does not seem trivial to me....
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.iol.unh.edu/services/testing/ofa/logo.pdf">http://www.iol.unh.edu/services/testing/ofa/logo.pdf</a>
<br>
<p><p>On this point...
<br>
<span class="quotelev2">   &gt;&gt; but I'm pretty sure that OMPI failed when used with QLogic and  
</span><br>
<span class="quotelev2">   &gt;&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising, given  
</span><br>
if OMPI was compiled to use the QLogic PSM layer then it would
<br>
interoperate best with PSM capable hardware.   Since QLogic sells multiple
<br>
HCAs including Mellanox design HCAs it is incorrect to make a blanket
<br>
statement that QLogic HCAs do not inter-operate with Mellanox.   QLogic PSM
<br>
capable hardware will inter-operate with non PSM hardware with most if
<br>
not all of the OFA protocols.   However my observation based assertion
<br>
that 5% is a decision making advantage makes the PSM library the default.
<br>
There are some other issues with the latest Mellanox products...
<br>
<p><p><pre>
-- 
	Regards,
	T o m   M i t c h e l l
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>In reply to:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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
