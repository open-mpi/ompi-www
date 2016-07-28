<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 17:36:12 2013" -->
<!-- isoreceived="20130618213612" -->
<!-- sent="Tue, 18 Jun 2013 17:36:07 -0400" -->
<!-- isosent="20130618213607" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &amp;quot;libhcoll&amp;quot; library" -->
<!-- id="28182F40-F7A9-4BBF-A01F-88C30CE2276F_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CDE5D7FC.1144C%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 17:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12470.php">Paul Kapinos: "[OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
<li><strong>In reply to:</strong> <a href="12466.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it is Mellanox specific, maybe the component name could reflect this (like mlxhcoll), as it will be visible to end-users. 
<br>
<p><p>Aurelien
<br>
<p><p>Le 18 juin 2013 &#224; 11:25, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; In general, I'm ok with it.  I think we should let it soak for a week or
</span><br>
<span class="quotelev1">&gt; two in the trunk before we file the CMR to 1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/18/13 6:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good; +1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2013, at 8:02 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request for Change:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What: Add support for Mellanox Technologies&#185; next-generation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-blocking collectives, code-named &#179;libhcoll&#178;. This comes in the form
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a new &#179;hcoll&#178; component to the &#179;coll&#178; framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where: Trunk and 1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When: July 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why: In support of MPI 3, Mellanox Technologies will make available its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next generation collectives library, &#179;libhcoll&#178;,  in MOFED 2.0 releases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and higher starting in the late 2013 timeframe. &#179;Libhcoll&#178; adds support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for truly asynchronous non-blocking collectives on supported HCAs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Connect X-3 and higher) via Mellanox Technologies&#185; CORE-Direct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; technology. &#179;Libhcoll&#178; also adds support for hierarchical collectives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and features a highly scalable infrastructure battle tested and proven
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on some of the world&#185;s largest HPC systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 309b
* Knoxville, TN 37996
* 865 974 9375
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12470.php">Paul Kapinos: "[OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
<li><strong>In reply to:</strong> <a href="12466.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
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
