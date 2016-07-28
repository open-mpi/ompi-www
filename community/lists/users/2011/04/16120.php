<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 13:33:58 2011" -->
<!-- isoreceived="20110404173358" -->
<!-- sent="Mon, 4 Apr 2011 13:33:45 -0400" -->
<!-- isosent="20110404173345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="A56E34EB-E5E8-4C21-BD68-06AEF6875999_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110404141840.GC16772_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 13:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Previous message:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2011, at 10:18 AM, Rob Latham wrote:
<br>
<p><span class="quotelev1">&gt; What I see happening here is the OpenMPI finalize routine is deleting
</span><br>
<span class="quotelev1">&gt; attributes.   one of those attributes is ROMIO's, which in turn tries
</span><br>
<span class="quotelev1">&gt; to free keyvals.  Is the deadlock that noting &quot;under&quot; ompi_attr_delete
</span><br>
<span class="quotelev1">&gt; can itself call ompi_* routines? (as ROMIO triggers a call to
</span><br>
<span class="quotelev1">&gt; ompi_attr_free_keyval) ?
</span><br>
<p>Yes, this is exactly what is happening -- the communicator attribute delete callback is invoking MPI_KEYVAL_FREE(), which is not something we anticipated. The locks are only active for THREAD_MULTIPLE, which results in this issue.
<br>
<p>I'll have to dig some more to make this case safe; I'll file a ticket about it.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Previous message:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
