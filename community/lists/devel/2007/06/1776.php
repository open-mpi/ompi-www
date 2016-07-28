<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 08:41:51 2007" -->
<!-- isoreceived="20070627124151" -->
<!-- sent="Wed, 27 Jun 2007 08:38:57 -0400" -->
<!-- isosent="20070627123857" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="46825A61.9070503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ED8D23B1-B57E-427A-8892-FBA0FF2984E2_at_lanl.gov" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 08:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am ok with the following as long as we can have some sort of
<br>
documenation describing what changed like which old functions
<br>
are replaced with newer functions and any description of changed
<br>
assumptions.
<br>
<p>--td
<br>
Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Jun 26, 2007, at 6:08 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Some time ago you were working on moving the modex out of the pml  
</span><br>
<span class="quotelev2">&gt;&gt;and cleaning
</span><br>
<span class="quotelev2">&gt;&gt;it up a bit. Is this work still ongoing? The reason I ask is that I am
</span><br>
<span class="quotelev2">&gt;&gt;currently working on integrating the RSL, and would rather build on  
</span><br>
<span class="quotelev2">&gt;&gt;the new
</span><br>
<span class="quotelev2">&gt;&gt;code rather than the old...
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tim Prins brings up a point I keep meaning to ask the group about.  A  
</span><br>
<span class="quotelev1">&gt;long time ago in a galaxy far, far away (aka, last fall), Galen and I  
</span><br>
<span class="quotelev1">&gt;started working on the BTL / PML redesign that morphed into some  
</span><br>
<span class="quotelev1">&gt;smaller changes, including some interesting IB work.  Anyway, I  
</span><br>
<span class="quotelev1">&gt;rewrote large chunks of the modex, which did a couple of things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Moved the modex out of the pml base and into the general OMPI code  
</span><br>
<span class="quotelev1">&gt;(renaming
</span><br>
<span class="quotelev1">&gt;   the functions in the process)
</span><br>
<span class="quotelev1">&gt;* Fixed the hang if a btl doesn't publish contact information (we  
</span><br>
<span class="quotelev1">&gt;wait until we
</span><br>
<span class="quotelev1">&gt;   receive a key pushed into the modex at the end of MPI_INIT)
</span><br>
<span class="quotelev1">&gt;* Tried to reduce the number of required memory copies in the interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It's a fairly big change, in that all the BTLs have to be updated due  
</span><br>
<span class="quotelev1">&gt;to the function name differences.  It's fairly well tested, and would  
</span><br>
<span class="quotelev1">&gt;be really nice for dealing with platforms where there are different  
</span><br>
<span class="quotelev1">&gt;networks on different machines.  If no one has any objections, I'll  
</span><br>
<span class="quotelev1">&gt;probably do this next week...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="1775.php">Georg Wassen: "Re: [OMPI devel] send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1773.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1777.php">Brian Barrett: "Re: [OMPI devel] Modex"</a>
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
