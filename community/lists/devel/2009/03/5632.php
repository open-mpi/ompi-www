<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 08:58:49 2009" -->
<!-- isoreceived="20090312125849" -->
<!-- sent="Thu, 12 Mar 2009 08:58:43 -0400" -->
<!-- isosent="20090312125843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="2395CAD1-4E45-44AC-BD17-417B07A9FBBD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B7E49D.2000206_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 08:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5633.php">Terry Dontje: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or	is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5631.php">Jeff Squyres: "[OMPI devel] 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="5620.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5636.php">Brad Benton: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2009, at 12:19 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I don't understand what's going on, but I guess each process is  
</span><br>
<span class="quotelev1">&gt; calling
</span><br>
<span class="quotelev1">&gt; sm_btl_first_time_init(), during which it initializes its own  
</span><br>
<span class="quotelev1">&gt; shm_bases
</span><br>
<span class="quotelev1">&gt; value, FIFOs, and shm_fifo pointer.  If a remote process saw those
</span><br>
<span class="quotelev1">&gt; memory operations in that order, then initialization of the shm_fifo
</span><br>
<span class="quotelev1">&gt; pointer would be an indicator that the rest of the data structures had
</span><br>
<span class="quotelev1">&gt; been initialized.  But there are no memory barriers between those
</span><br>
<span class="quotelev1">&gt; operations to order them.  So, perhaps testing the shm_fifo pointer
</span><br>
<span class="quotelev1">&gt; doesn't really mean much.  I don't know enough about memory  
</span><br>
<span class="quotelev1">&gt; coherency to
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FWIW, George and I puzzled through some of this code yesterday.  We  
<br>
didn't see anything that was obviously wrong, even though we were  
<br>
actively trying to think of whacky race conditions that could be  
<br>
happening.  :-(
<br>
<p>George said he'd continue to investigate.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5633.php">Terry Dontje: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or	is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5631.php">Jeff Squyres: "[OMPI devel] 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="5620.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5636.php">Brad Benton: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
