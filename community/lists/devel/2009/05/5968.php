<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 11:09:33 2009" -->
<!-- isoreceived="20090506150933" -->
<!-- sent="Wed, 6 May 2009 11:09:29 -0400 (EDT)" -->
<!-- isosent="20090506150929" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="alpine.DEB.1.10.0905061101320.1850_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1347DA84-82CC-48D3-BE42-DABC12A34244_at_open-mpi.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 11:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 6 May 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Any thoughts on this? Should we change it?
</span><br>
<p>Yes, we should change this (IMHO) :).
<br>
<p><span class="quotelev1">&gt; If so, who wants to be involved in the re-design? I'm pretty sure it would 
</span><br>
<span class="quotelev1">&gt; require some modification of the paffinity framework, plus some minor mods to 
</span><br>
<span class="quotelev1">&gt; the odls framework and (since you cannot bind a process other than yourself) 
</span><br>
<span class="quotelev1">&gt; addition of a new small &quot;proxy&quot; script that would bind-then-exec each process 
</span><br>
<span class="quotelev1">&gt; started by the orted (Eugene posted a candidate on the user list, though we 
</span><br>
<span class="quotelev1">&gt; will have to deal with some system-specific issues in it).
</span><br>
<p>I can't contribute a whole lot of time, but I'd be happy to lurk, offer 
<br>
advice, and write some small bits of code.  But I definitely can't lead.
<br>
<p>Fist offering of opinion from me.  I think we can avoid the &quot;proxy&quot; script 
<br>
by doing the binding after the fork but before the exec.  This will 
<br>
definitely require minor changes to the odls and probably a bunch of 
<br>
changes to the paffinity framework.  This will make things slightly less 
<br>
fragile than a script would, and yet get us what we want.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5969.php">Christopher Jefferson: "[OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5967.php">Ralph Castain: "[OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5978.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
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
