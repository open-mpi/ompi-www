<?
$subject_val = "Re: [OMPI users] location of ompi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 10:17:32 2010" -->
<!-- isoreceived="20101005141732" -->
<!-- sent="Tue, 5 Oct 2010 10:17:27 -0400" -->
<!-- isosent="20101005141727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] location of ompi libraries" -->
<!-- id="0D4A91A1-107E-4FFD-BDFD-ADFD92491C4E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CAA5C1A.3080305_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] location of ompi libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 10:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14391.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14388.php">David Turner: "[OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is more than likely that you compiled Open MPI with --enable-static and/or --disable-dlopen.  In this case, all of Open MPI's plugins are slurped up into the libraries themselves (e.g., libmpi.so or libmpi.a).  That's why everything continues to work properly.
<br>
<p><p>On Oct 4, 2010, at 6:58 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI 1.4.1, the directory lib/openmpi contains about 130
</span><br>
<span class="quotelev1">&gt; entries, including such things as mca_btl_openib.so.  In my
</span><br>
<span class="quotelev1">&gt; build of Open MPI 1.4.2, lib/openmpi contains exactly three
</span><br>
<span class="quotelev1">&gt; items:
</span><br>
<span class="quotelev1">&gt; libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have searched my 1.4.2 installation for mca_btl_openib.so,
</span><br>
<span class="quotelev1">&gt; to no avail.  And yet, 1.4.2 seems to work &quot;fine&quot;.  Is my
</span><br>
<span class="quotelev1">&gt; installation broken, or is the organization significantly
</span><br>
<span class="quotelev1">&gt; different between the two versions?  A quick scan of the
</span><br>
<span class="quotelev1">&gt; release notes didn't help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14391.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14388.php">David Turner: "[OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14395.php">David Turner: "Re: [OMPI users] location of ompi libraries"</a>
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
