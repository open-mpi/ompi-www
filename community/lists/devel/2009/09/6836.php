<?
$subject_val = "Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 13:28:20 2009" -->
<!-- isoreceived="20090915172820" -->
<!-- sent="Tue, 15 Sep 2009 13:28:15 -0400" -->
<!-- isosent="20090915172815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?" -->
<!-- id="4468005D-4B20-4AB3-87D0-C8046940E45F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1253035376.7142.110.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Infiniband always disabled for required threadlevel	MPI_THREAD_MULTIPLE ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 13:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Reply:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2009, at 1:22 PM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Then I noticed some code and comments in
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c which seem to disable this
</span><br>
<span class="quotelev1">&gt; component when MPI_THREAD_MULTIPLE is used for the initialization  
</span><br>
<span class="quotelev1">&gt; (as is
</span><br>
<span class="quotelev1">&gt; the case with IMB). Is that intentional ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes.  The openib BTL is not [yet] thread safe.  Sorry.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6837.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>In reply to:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Reply:</strong> <a href="6839.php">Kiril Dichev: "Re: [OMPI devel] Infiniband always disabled for required	threadlevel	MPI_THREAD_MULTIPLE ?"</a>
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
