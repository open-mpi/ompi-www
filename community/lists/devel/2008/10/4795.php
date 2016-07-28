<?
$subject_val = "Re: [OMPI devel] Component open";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 15:18:11 2008" -->
<!-- isoreceived="20081022191811" -->
<!-- sent="Wed, 22 Oct 2008 15:17:55 -0400" -->
<!-- isosent="20081022191755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Component open" -->
<!-- id="F4879655-A4F3-4F13-968D-D08D616637C7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9DD56635-2DC7-49C7-915C-C8F170B6E118_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 15:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This problem was fixed long ago by some of the work Camille did. The  
<br>
exact revision number is r15402 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/15402">https://svn.open-mpi.org/trac/ompi/changeset/15402</a> 
<br>
). I'm using this feature daily and so far I had any problems with it.
<br>
<p>To reuse your example here is what Camille came up with.
<br>
<p>$ mpiexec --mca routed_base_verbose 30 -n 3 hostname
<br>
[dancer:09638] mca: base: components_open: Looking for routed components
<br>
[dancer:09638] mca: base: components_open: opening routed components
<br>
[dancer:09638] mca: base: components_open: found loaded component  
<br>
binomial
<br>
[dancer:09638] mca: base: components_open: component binomial has no  
<br>
register function
<br>
[dancer:09638] mca: base: components_open: component binomial has no  
<br>
open function
<br>
[dancer:09638] mca: base: components_open: found loaded component direct
<br>
[dancer:09638] mca: base: components_open: component direct has no  
<br>
register function
<br>
[dancer:09638] mca: base: components_open: component direct has no  
<br>
open function
<br>
[dancer:09638] mca: base: components_open: found loaded component linear
<br>
[dancer:09638] mca: base: components_open: component linear has no  
<br>
register function
<br>
[dancer:09638] mca: base: components_open: component linear has no  
<br>
open function
<br>
[dancer:09638] mca:base:select: Auto-selecting routed components
<br>
[...]
<br>
<p>And if we force a special component:
<br>
<p>$ mpiexec --mca routed linear --mca routed_base_verbose 30 -n 3 hostname
<br>
[dancer:09642] mca: base: components_open: Looking for routed components
<br>
[dancer:09642] mca: base: components_open: opening routed components
<br>
[dancer:09642] mca: base: components_open: found loaded component linear
<br>
[dancer:09642] mca: base: components_open: component linear has no  
<br>
register function
<br>
[dancer:09642] mca: base: components_open: component linear has no  
<br>
open function
<br>
[dancer:09642] mca:base:select: Auto-selecting routed components
<br>
[...]
<br>
<p>I wonder what are the configuration options you're using?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 22, 2008, at 1:30 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I've been digging a little into optimization and found something  
</span><br>
<span class="quotelev1">&gt; that seems counterintuitive in the way OMPI is handling components.  
</span><br>
<span class="quotelev1">&gt; Specifically, if I specify a component I want used for a framework,  
</span><br>
<span class="quotelev1">&gt; OMPI still does a component load and open on every component in the  
</span><br>
<span class="quotelev1">&gt; framework - it only uses my specification during &quot;select&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, the cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca routed linear
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; still results in the loading and opening of the direct and binomial  
</span><br>
<span class="quotelev1">&gt; components - even though we have directed the framework not to use  
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This causes us to waste memory when there is no possibility of a  
</span><br>
<span class="quotelev1">&gt; different component being selected. Is there a reason why &quot;open&quot;  
</span><br>
<span class="quotelev1">&gt; isn't using the mca params to guide the components it is loading?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4795/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
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
