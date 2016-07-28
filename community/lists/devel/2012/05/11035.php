<?
$subject_val = "[OMPI devel] Fwd: [Open MPI] #3108: Affinity still busted in v1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 15:02:14 2012" -->
<!-- isoreceived="20120524190214" -->
<!-- sent="Thu, 24 May 2012 15:02:09 -0400" -->
<!-- isosent="20120524190209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Open MPI] #3108: Affinity still busted in v1.6" -->
<!-- id="F3A56130-5B86-43CA-96C6-3343E50925AD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="044.446bf333aa39d2fdf903c1c755258523_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Open MPI] #3108: Affinity still busted in v1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 15:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI.
<br>
<p>I think I have fixes ready, but I am bummed that we didn't fix the whole paffinity mess properly in 1.6.  :-(
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Open MPI &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [Open MPI] #3108: Affinity still busted in v1.6
</span><br>
<span class="quotelev1">&gt; Date: May 24, 2012 2:59:42 PM EDT
</span><br>
<span class="quotelev1">&gt; Cc: &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #3108: Affinity still busted in v1.6
</span><br>
<span class="quotelev1">&gt; ---------------------+----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |      Owner:  rhc
</span><br>
<span class="quotelev1">&gt;    Type:  defect    |     Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major     |  Milestone:  Open MPI 1.6.1
</span><br>
<span class="quotelev1">&gt; Version:  trunk     |   Keywords:
</span><br>
<span class="quotelev1">&gt; ---------------------+----------------------------
</span><br>
<span class="quotelev1">&gt; I found a system yesterday where affinity is still horribly broken in
</span><br>
<span class="quotelev1">&gt; v1.6.  bind-to-core and bind-to-socket effectively did completely
</span><br>
<span class="quotelev1">&gt; incorrect things.  Among other things, the system in question has
</span><br>
<span class="quotelev1">&gt; effectively fairly random physical socket/core numbering.  It's not
</span><br>
<span class="quotelev1">&gt; uniform across all the cores in any given socket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a new bitbucket where I think I've fixed the problems, and will be
</span><br>
<span class="quotelev1">&gt; reviewing the code with Ralph soon:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://bitbucket.org/jsquyres/ompi-affinity-again-v1.6">https://bitbucket.org/jsquyres/ompi-affinity-again-v1.6</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There were actually three bugs (that I've found so far); there's a
</span><br>
<span class="quotelev1">&gt; separate commit on that bitbucket for each.  See the commit messages on
</span><br>
<span class="quotelev1">&gt; each of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once this firms up a bit, I'll make a tarball and ask others in the
</span><br>
<span class="quotelev1">&gt; community to test it (e.g., Oracle and IBM, which have traditionally been
</span><br>
<span class="quotelev1">&gt; good at finding whacky paffinity bugs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this ''only'' affects OMPI v1.6 -- the trunk has a wholly
</span><br>
<span class="quotelev1">&gt; revamped affinity system and the entire paffintiy framework is gone
</span><br>
<span class="quotelev1">&gt; (yay!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3108">https://svn.open-mpi.org/trac/ompi/ticket/3108</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
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
