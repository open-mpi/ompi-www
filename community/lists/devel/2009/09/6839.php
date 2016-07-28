<?
$subject_val = "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 03:45:10 2009" -->
<!-- isoreceived="20090916074510" -->
<!-- sent="Wed, 16 Sep 2009 09:45:21 +0200" -->
<!-- isosent="20090916074521" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?" -->
<!-- id="1253087121.7636.1.camel_at_hp-laptop" -->
<!-- inreplyto="4468005D-4B20-4AB3-87D0-C8046940E45F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?<br>
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 03:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-09-15 at 13:28 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 15, 2009, at 1:22 PM, Kiril Dichev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then I noticed some code and comments in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/btl/openib/btl_openib_component.c which seem to disable this
</span><br>
<span class="quotelev2">&gt; &gt; component when MPI_THREAD_MULTIPLE is used for the initialization  
</span><br>
<span class="quotelev2">&gt; &gt; (as is
</span><br>
<span class="quotelev2">&gt; &gt; the case with IMB). Is that intentional ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  The openib BTL is not [yet] thread safe.  Sorry.  :-(
</span><br>
<p>Ah OK, thanks for the fast reply.
<br>
<p>Regards,
<br>
Kiril
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6838.php">Jeff Squyres: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6836.php">Jeff Squyres: "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?"</a>
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
