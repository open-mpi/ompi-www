<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 22:41:30 2011" -->
<!-- isoreceived="20110204034130" -->
<!-- sent="Thu, 3 Feb 2011 22:41:19 -0500" -->
<!-- isosent="20110204034119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356" -->
<!-- id="7B5BF470-E423-44DE-BC02-51C364883FF5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D4B4E62.6050307_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 22:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8961.php">Tobias Hilbrich: "[OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>In reply to:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the fix is fine as at it -- you're right; it's bad style and your macro is clearly more robust.
<br>
<p>Actually, we should probably wait and lump your fix into more ROMIO fixes to go upstream -- I'm getting a *lot* of compiler warnings with this new ROMIO version.  I haven't looked into them yet.
<br>
<p><p>On Feb 3, 2011, at 7:54 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eugene --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This ROMIO fix needs to go upstream.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Makes sense.  Whom do I pester about that?  Is r24356 (and now CMR 2712) okay as is?  The ROMIO change is an unimportant stylistic change, so I'm okay cutting it loose from the other changes in the putback.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8961.php">Tobias Hilbrich: "[OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>In reply to:</strong> <a href="8959.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
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
