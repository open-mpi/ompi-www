<?
$subject_val = "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:09:36 2009" -->
<!-- isoreceived="20090504130936" -->
<!-- sent="Mon, 4 May 2009 09:09:31 -0400" -->
<!-- isosent="20090504130931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)" -->
<!-- id="1F0CC411-3F1B-4B17-9093-D659854D1844_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="575212.74299.qm_at_web31003.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 09:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>In reply to:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Maybe reply:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2009, at 9:06 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; raj_at_raj:mpirun -np 1 -am ft-enable-cr mpisleep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following with no checkpointing performed:
</span><br>
<span class="quotelev1">&gt; raj_at_raj:mca: base: component_find: unable to open /usr/local/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_crs_blcr: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is usually a faulty error message from libltdl.  It usually means  
<br>
that the dependent libraries for a component cannot be found -- e.g.,  
<br>
is blcr installed on every node where you're trying to use it?
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
<li><strong>Next message:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>In reply to:</strong> <a href="9179.php">Kritiraj Sajadah: "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Maybe reply:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
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
