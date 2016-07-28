<?
$subject_val = "Re: [OMPI devel] Component open";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 15:36:50 2008" -->
<!-- isoreceived="20081022193650" -->
<!-- sent="Wed, 22 Oct 2008 13:36:43 -0600" -->
<!-- isosent="20081022193643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Component open" -->
<!-- id="0EB117E2-AE96-4CD4-B2A0-B8B2E94EEE0F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F4879655-A4F3-4F13-968D-D08D616637C7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Component open<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 15:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...interesting. I see what's going on - I'm having a build system  
<br>
issue that is causing some of the dynamic libraries to not be seen.
<br>
<p>Red herring - thanks for clarifying!
<br>
<p>Camille: thanks for fixing this way back when.
<br>
<p>Ralph
<br>
<p><p>On Oct 22, 2008, at 1:17 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem was fixed long ago by some of the work Camille did. The  
</span><br>
<span class="quotelev1">&gt; exact revision number is r15402 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/15402">https://svn.open-mpi.org/trac/ompi/changeset/15402</a> 
</span><br>
<span class="quotelev1">&gt; ). I'm using this feature daily and so far I had any problems with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To reuse your example here is what Camille came up with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --mca routed_base_verbose 30 -n 3 hostname
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: Looking for routed  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: opening routed components
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev1">&gt; binomial
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component binomial has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component binomial has no  
</span><br>
<span class="quotelev1">&gt; open function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev1">&gt; direct
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component direct has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component direct has no  
</span><br>
<span class="quotelev1">&gt; open function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev1">&gt; linear
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev1">&gt; open function
</span><br>
<span class="quotelev1">&gt; [dancer:09638] mca:base:select: Auto-selecting routed components
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if we force a special component:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiexec --mca routed linear --mca routed_base_verbose 30 -n 3  
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca: base: components_open: Looking for routed  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca: base: components_open: opening routed components
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev1">&gt; linear
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev1">&gt; open function
</span><br>
<span class="quotelev1">&gt; [dancer:09642] mca:base:select: Auto-selecting routed components
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder what are the configuration options you're using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 1:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been digging a little into optimization and found something  
</span><br>
<span class="quotelev2">&gt;&gt; that seems counterintuitive in the way OMPI is handling components.  
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, if I specify a component I want used for a framework,  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI still does a component load and open on every component in the  
</span><br>
<span class="quotelev2">&gt;&gt; framework - it only uses my specification during &quot;select&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, the cmd line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca routed linear
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; still results in the loading and opening of the direct and binomial  
</span><br>
<span class="quotelev2">&gt;&gt; components - even though we have directed the framework not to use  
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This causes us to waste memory when there is no possibility of a  
</span><br>
<span class="quotelev2">&gt;&gt; different component being selected. Is there a reason why &quot;open&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; isn't using the mca params to guide the components it is loading?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<li><strong>Next message:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
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
