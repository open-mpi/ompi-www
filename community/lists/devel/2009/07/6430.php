<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 15:40:23 2009" -->
<!-- isoreceived="20090715194023" -->
<!-- sent="Wed, 15 Jul 2009 15:40:13 -0400" -->
<!-- isosent="20090715194013" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686" -->
<!-- id="9D8D4E26-DA88-4A69-AD88-213DD32A1B72_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907151936.n6FJargc013851_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 15:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a question regarding the mapping. How can I declare a partial  
<br>
mapping ? In fact I only care about how some of the processes are  
<br>
mapped on some specific nodes. Right now if the rmaps doesn't contain  
<br>
information about all nodes, we give up (before this patch we  
<br>
segfaulted).
<br>
<p>Does it means we always have to declare the whole mapping or it's just  
<br>
that we overlooked this strange case?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-15 15:36:53 EDT (Wed, 15 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21686
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21686">https://svn.open-mpi.org/trac/ompi/changeset/21686</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Reorder the nidmap encoding function. Add a check to make sure we  
</span><br>
<span class="quotelev1">&gt; don't write
</span><br>
<span class="quotelev1">&gt; outside the boundaries of the allocated array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the problem is still there. If we have rmaps file  
</span><br>
<span class="quotelev1">&gt; containing only
</span><br>
<span class="quotelev1">&gt; partial information the num_procs get set to the wrong value (the  
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt; hosts in the rmaps file instead of the number of processes requested  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; command line).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6429.php">Jeff Squyres: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
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
