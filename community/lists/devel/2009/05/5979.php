<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 14:59:32 2009" -->
<!-- isoreceived="20090507185932" -->
<!-- sent="Thu, 7 May 2009 12:59:22 -0600" -->
<!-- isosent="20090507185922" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="8F3FA2C5-B904-4758-88F0-4524D1FC9C42_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A032BCA.2020602_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Revise paffinity method?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 14:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can do the coding - just want to ensure interested others get their  
<br>
$0.002 in on how it should work.
<br>
<p>I came up with a way to do it that doesn't require changes to the  
<br>
paffinity framework. I can complete the prototype next week on an hg  
<br>
branch and let you look at it. Mostly consists of moving what is now  
<br>
in MPI_Init into the odls modules between the fork and exec, as Brian  
<br>
suggested.
<br>
<p><p>On May 7, 2009, at 12:43 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 6 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts on this? Should we change it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we should change this (IMHO) :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Me too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, who wants to be involved in the re-design? I'm pretty sure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it would require some modification of the paffinity framework,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plus some minor mods to the odls framework and (since you cannot  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind a process other than yourself) addition of a new small  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;proxy&quot; script that would bind-then-exec each process started by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the orted (Eugene posted a candidate on the user list, though we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will have to deal with some system-specific issues in it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't contribute a whole lot of time, but I'd be happy to lurk,  
</span><br>
<span class="quotelev2">&gt;&gt; offer advice, and write some small bits of code.  But I definitely  
</span><br>
<span class="quotelev2">&gt;&gt; can't lead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fist offering of opinion from me.  I think we can avoid the &quot;proxy&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; script by doing the binding after the fork but before the exec.   
</span><br>
<span class="quotelev2">&gt;&gt; This will definitely require minor changes to the odls and probably  
</span><br>
<span class="quotelev2">&gt;&gt; a bunch of changes to the paffinity framework.  This will make  
</span><br>
<span class="quotelev2">&gt;&gt; things slightly less fragile than a script would, and yet get us  
</span><br>
<span class="quotelev2">&gt;&gt; what we want.
</span><br>
<span class="quotelev1">&gt; I'll have to talk with Len to see if Sun has any time to allocate to  
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
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
