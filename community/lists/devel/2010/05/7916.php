<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 13:21:27 2010" -->
<!-- isoreceived="20100512172127" -->
<!-- sent="Wed, 12 May 2010 19:21:21 +0200" -->
<!-- isosent="20100512172121" -->
<!-- name="Nils Carlson" -->
<!-- email="nils.carlson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="2A6B476C-C2F3-48B0-B60E-E4487F91D8F4_at_ludd.ltu.se" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="368C4E0A-5C84-49A5-B82B-23839618F858_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI on TIPC<br>
<strong>From:</strong> Nils Carlson (<em>nils.carlson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 13:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably not me personally, my employer is considering financing a  
<br>
masters thesis with the aim of doing an implementation.
<br>
<p>Is there a guide for adding support? I took a quick look at the tcp  
<br>
code, and it wasn't all that straightforward,
<br>
though I suppose a lot of the code is aimed at maximising performance.
<br>
<p>How long do you think a basic implementation would take?
<br>
<p>/Nils
<br>
<p>On May 12, 2010, at 7:09 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I am personally unaware of anyone working TIPC support for Open MPI  
</span><br>
<span class="quotelev1">&gt; -- but that doesn't mean it isn't happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a *brief* look at the TIPC web site -- it is sorta analogous  
</span><br>
<span class="quotelev1">&gt; to Open-MX?  (i.e., sending raw ethernet frames as opposed to TCP)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'd love to see a BTL module for TIPC in Open MPI -- are you  
</span><br>
<span class="quotelev1">&gt; interested in writing one?  I'd be happy to explain how to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2010, at 12:54 PM, Nils Carlson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering if anyone has looked at adding support in MPI for TIPC,
</span><br>
<span class="quotelev2">&gt;&gt; Transparent Inter-Process Communication protocol?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Considering TIPC's properties this should provide better performance
</span><br>
<span class="quotelev2">&gt;&gt; than TCP on ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any info,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nils Carlson
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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
