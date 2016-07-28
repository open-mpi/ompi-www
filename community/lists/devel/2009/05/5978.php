<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 14:44:34 2009" -->
<!-- isoreceived="20090507184434" -->
<!-- sent="Thu, 07 May 2009 14:43:22 -0400" -->
<!-- isosent="20090507184322" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="4A032BCA.2020602_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0905061101320.1850_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 14:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5977.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Wed, 6 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on this? Should we change it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, we should change this (IMHO) :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Me too.
<br>
<span class="quotelev2">&gt;&gt; If so, who wants to be involved in the re-design? I'm pretty sure it 
</span><br>
<span class="quotelev2">&gt;&gt; would require some modification of the paffinity framework, plus some 
</span><br>
<span class="quotelev2">&gt;&gt; minor mods to the odls framework and (since you cannot bind a process 
</span><br>
<span class="quotelev2">&gt;&gt; other than yourself) addition of a new small &quot;proxy&quot; script that 
</span><br>
<span class="quotelev2">&gt;&gt; would bind-then-exec each process started by the orted (Eugene posted 
</span><br>
<span class="quotelev2">&gt;&gt; a candidate on the user list, though we will have to deal with some 
</span><br>
<span class="quotelev2">&gt;&gt; system-specific issues in it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't contribute a whole lot of time, but I'd be happy to lurk, 
</span><br>
<span class="quotelev1">&gt; offer advice, and write some small bits of code.  But I definitely 
</span><br>
<span class="quotelev1">&gt; can't lead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fist offering of opinion from me.  I think we can avoid the &quot;proxy&quot; 
</span><br>
<span class="quotelev1">&gt; script by doing the binding after the fork but before the exec.  This 
</span><br>
<span class="quotelev1">&gt; will definitely require minor changes to the odls and probably a bunch 
</span><br>
<span class="quotelev1">&gt; of changes to the paffinity framework.  This will make things slightly 
</span><br>
<span class="quotelev1">&gt; less fragile than a script would, and yet get us what we want.
</span><br>
I'll have to talk with Len to see if Sun has any time to allocate to this.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5977.php">Jeff Squyres: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
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
