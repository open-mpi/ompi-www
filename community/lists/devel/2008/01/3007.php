<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 20:47:12 2008" -->
<!-- isoreceived="20080119014712" -->
<!-- sent="Fri, 18 Jan 2008 20:46:56 -0500" -->
<!-- isosent="20080119014656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="EF96407D-097A-4B82-A6D2-EDE929218976_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D919A4C4-3A95-45FD-A13E-6109A05739DA_at_daugerresearch.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 20:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2008, at 2:17 PM, Dean Dauger, Ph. D. wrote:
<br>
<p><span class="quotelev1">&gt; I'm developing an mca_pls module, intending to drop it into a
</span><br>
<span class="quotelev1">&gt; preexisting Open MPI build (in its lib/openmpi directory) and have
</span><br>
<span class="quotelev1">&gt; orterun pick it up, but orterun kept crashing on me even though it
</span><br>
<span class="quotelev1">&gt; correctly calls my module.  To help isolate the issue I separately
</span><br>
<span class="quotelev1">&gt; recompiled the mca_pls_rsh module from a given Open MPI source
</span><br>
<span class="quotelev1">&gt; checkout and dropping that didn't work either.   Any pointers?
</span><br>
<p>Which source checkout did you use?  Note that the pls structures have  
<br>
likely changed between the OMPI SVN trunk and the v1.2 branch.  So if  
<br>
you didn't use a checkout from the v1.2 branch, I would expect Random  
<br>
Bad Things (RBT's) to occur.
<br>
<p><span class="quotelev1">&gt; pingpong was compiled with the existing Open MPI, and it runs with
</span><br>
<span class="quotelev1">&gt; the built-in rsh module, but not when I replace the pls_rsh module
</span><br>
<span class="quotelev1">&gt; with a recompiled one.  When I add printf's in the pls_rsh module in
</span><br>
<span class="quotelev1">&gt; its _open and _init, I can show each of its subroutines return
</span><br>
<span class="quotelev1">&gt; without problem, but _launch is not yet called.  I'm running Mac OS X
</span><br>
<span class="quotelev1">&gt; 10.5.1, which ships with Open MPI at /usr, on a MacBook Pro with an
</span><br>
<span class="quotelev1">&gt; Intel Core Duo.  (&quot;Rotarran X.5&quot; is the name of the computer.)  I
</span><br>
<span class="quotelev1">&gt; first attempted the 1.3.0 source code via svn, then went back to the
</span><br>
<span class="quotelev1">&gt; 1.2.3 source code from Open MPI, but both gave the above bus error.
</span><br>
<span class="quotelev1">&gt; Then I went to Apple's copy of Open MPI 1.2.3 at opensource.apple.com
</span><br>
<span class="quotelev1">&gt; guessing Apple changed things, but that still doesn't work.  I've
</span><br>
<span class="quotelev1">&gt; tried their take on ./configure options too to no avail.  Other than
</span><br>
<span class="quotelev1">&gt; debugging orterun, what else can I try?
</span><br>
<p>Hmm -- are you saying that you tried compiling the Apple copy of the  
<br>
rsh pls and/or the OMPI SVN v1.2.3 rsh pls and neither of them worked?
<br>
<p>I don't rightly know why that wouldn't work -- is there a way to know  
<br>
with what compiler flags Apple built Open MPI?  Can you step through  
<br>
mpirun with a debugger to see where it dies?  I suspect it may not  
<br>
have any debugging symbols, so you might not, but at least you might  
<br>
be able to see which pls rsh functions are invoked...?  (and more  
<br>
importantly, if something is invoked &quot;wrong&quot; in the pls rsh)
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
<li><strong>Next message:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
