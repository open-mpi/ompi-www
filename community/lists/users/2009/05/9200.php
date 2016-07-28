<?
$subject_val = "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 15:10:23 2009" -->
<!-- isoreceived="20090504191023" -->
<!-- sent="Mon, 4 May 2009 15:10:18 -0400" -->
<!-- isosent="20090504191018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)" -->
<!-- id="31122F44-EC06-42D0-85A0-C1DB465B7AE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39121.13599.qm_at_web31003.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 15:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9201.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9199.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2009, at 9:57 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;           In fact i am testing it on my laptop before installing it  
</span><br>
<span class="quotelev1">&gt; on the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded BLCR and installed it in /usr/local on my laptop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then i installed openmpi using the following option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local --with-ft=cr --enable-ft-thread -- 
</span><br>
<span class="quotelev1">&gt; enable-mpi-threads --with-blcr=/usr/local/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The --with-blcr clause doesn't look right -- shouldn't that be --with- 
<br>
blcr=/usr/local?  Check the output of ompi_info and ensure that you  
<br>
actually built with BLCR support properly...
<br>
<p><span class="quotelev1">&gt; So, everything is installed and tested on my laptop for now but i am  
</span><br>
<span class="quotelev1">&gt; still getting the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Does the LD_LIBRARY_PATH environment variable in the shell where  
<br>
you're invoking mpirun include /usr/local/lib?  (or whatever directory  
<br>
libblcr.so is located)
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
<li><strong>Next message:</strong> <a href="9201.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9199.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
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
