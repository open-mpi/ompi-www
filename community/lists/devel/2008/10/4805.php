<?
$subject_val = "Re: [OMPI devel] Component open";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 10:09:28 2008" -->
<!-- isoreceived="20081023140928" -->
<!-- sent="Thu, 23 Oct 2008 10:09:22 -0400" -->
<!-- isosent="20081023140922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Component open" -->
<!-- id="65EA96E1-E2A8-46C6-9C13-05A8D95C3CB1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0EB117E2-AE96-4CD4-B2A0-B8B2E94EEE0F_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 10:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4806.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion 1.5.4 Released"</a>
<li><strong>Previous message:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, this turned out to be a combination of two things:
<br>
<p>1. Ralph's experimental DSO's were referencing a missing symbol,  
<br>
causing the underlying dlopen() to fail
<br>
<p>2. LT 2.2.6 is incorrectly (IMHO) reporting &quot;file not found&quot; instead  
<br>
of &quot;missing symbol&quot; through lt_dlerror(), which is darned confusing  
<br>
(because you look at the filesystem and say, &quot;but the file is  
<br>
there!!&quot;).  I have posted to the LT bug mailing list about it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2008-10/msg00017.html">http://lists.gnu.org/archive/html/bug-libtool/2008-10/msg00017.html</a>
<br>
<p><p><p>On Oct 22, 2008, at 3:36 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...interesting. I see what's going on - I'm having a build  
</span><br>
<span class="quotelev1">&gt; system issue that is causing some of the dynamic libraries to not be  
</span><br>
<span class="quotelev1">&gt; seen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Red herring - thanks for clarifying!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Camille: thanks for fixing this way back when.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 1:17 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem was fixed long ago by some of the work Camille did.  
</span><br>
<span class="quotelev2">&gt;&gt; The exact revision number is r15402 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/15402">https://svn.open-mpi.org/trac/ompi/changeset/15402</a> 
</span><br>
<span class="quotelev2">&gt;&gt; ). I'm using this feature daily and so far I had any problems with  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To reuse your example here is what Camille came up with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --mca routed_base_verbose 30 -n 3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: Looking for routed  
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: opening routed components
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev2">&gt;&gt; binomial
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component binomial has  
</span><br>
<span class="quotelev2">&gt;&gt; no register function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component binomial has  
</span><br>
<span class="quotelev2">&gt;&gt; no open function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev2">&gt;&gt; direct
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component direct has no  
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component direct has no  
</span><br>
<span class="quotelev2">&gt;&gt; open function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev2">&gt;&gt; linear
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev2">&gt;&gt; open function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09638] mca:base:select: Auto-selecting routed components
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And if we force a special component:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --mca routed linear --mca routed_base_verbose 30 -n 3  
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca: base: components_open: Looking for routed  
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca: base: components_open: opening routed components
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev2">&gt;&gt; linear
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca: base: components_open: component linear has no  
</span><br>
<span class="quotelev2">&gt;&gt; open function
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:09642] mca:base:select: Auto-selecting routed components
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder what are the configuration options you're using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 22, 2008, at 1:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been digging a little into optimization and found something  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that seems counterintuitive in the way OMPI is handling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components. Specifically, if I specify a component I want used for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a framework, OMPI still does a component load and open on every  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component in the framework - it only uses my specification during  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;select&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, the cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -mca routed linear
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still results in the loading and opening of the direct and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binomial components - even though we have directed the framework  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not to use them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This causes us to waste memory when there is no possibility of a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different component being selected. Is there a reason why &quot;open&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't using the mca params to guide the components it is loading?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4806.php">Jeff Squyres: "[OMPI devel] Fwd: Subversion 1.5.4 Released"</a>
<li><strong>Previous message:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
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
