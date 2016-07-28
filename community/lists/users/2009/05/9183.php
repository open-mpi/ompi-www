<?
$subject_val = "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:57:30 2009" -->
<!-- isoreceived="20090504135730" -->
<!-- sent="Mon, 4 May 2009 06:57:25 -0700 (PDT)" -->
<!-- isosent="20090504135725" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)" -->
<!-- id="39121.13599.qm_at_web31003.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)" -->
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
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 09:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Reply:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In fact i am testing it on my laptop before installing it on the cluster. 
<br>
<p>I downloaded BLCR and installed it in /usr/local on my laptop
<br>
<p>Then i installed openmpi using the following option:
<br>
<p>&nbsp;./configure --prefix=/usr/local --with-ft=cr --enable-ft-thread --enable-mpi-threads --with-blcr=/usr/local/lib
<br>
<p>So, everything is installed and tested on my laptop for now but i am still getting the error.
<br>
<p>Please help.
<br>
<p>Thanks 
<br>
<p>Raj
<br>
<p>&nbsp;&nbsp;
<br>
<p>--- On Mon, 5/4/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, May 4, 2009, 2:09 PM
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 9:06 AM, Kritiraj
</span><br>
<span class="quotelev1">&gt; Sajadah wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; raj_at_raj:mpirun -np 1 -am ft-enable-cr mpisleep
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I got the following with no checkpointing performed:
</span><br>
<span class="quotelev2">&gt; &gt; raj_at_raj:mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_crs_blcr: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is usually a faulty error message from libltdl.&#160;
</span><br>
<span class="quotelev1">&gt; It usually means that the dependent libraries for a
</span><br>
<span class="quotelev1">&gt; component cannot be found -- e.g., is blcr installed on
</span><br>
<span class="quotelev1">&gt; every node where you're trying to use it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9184.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Reply:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
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
