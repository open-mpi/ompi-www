<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 01:10:47 2014" -->
<!-- isoreceived="20141202061047" -->
<!-- sent="Tue, 2 Dec 2014 15:10:43 +0900" -->
<!-- isosent="20141202061043" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="C3495BBB-B997-4108-B49C-C5B052030A77_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8F18684A-588D-4379-83E9-2B85C5FC27D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 01:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>In reply to:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Dec 2, 2014, at 00:37 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2014, at 11:58 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same functionality can be trivially achieved at the user level using Adam's approach. If we provide a shortcut in Open MPI, we should emphasize this is an MPI extension, and offer the opportunity to other MPI to provide a compatible support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you referring to something Adam Moody proposed?  Or some other Adam?
</span><br>
<p>He did more than proposing, he provided a link to the implementation in SCR. So yes, I was indeed referring to Adam Moody.
<br>
<p><span class="quotelev2">&gt;&gt; Thus, I would name all new types MPIX_ instead of OMPI_ and remove them from the default mpi.h (or &quot;include mpi&quot;) to force the users to use mpiext.h and &quot;include mpiext&quot; in order to be able to access them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we&#226;&#128;&#153;ve traditionally named Open MPI-specific extensions &quot;OMPI_&quot; instead of &quot;MPIX_&quot; (which can be confused with other MPI implementation extensions).
</span><br>
<p>Indeed, it was a choice we made long ago. Thinking about this retroactively it was a bad choice. We (UTK) maintain some of the extensions, and as other MPI libraries start providing similar extensions (while they are discussed in the MPI Forum), users start asking for a common naming scheme in order to simplify their life. Other than a preferential reason, what other competing reason do we have to stick with OMPI_ instead of MPIX_?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25893.php">http://www.open-mpi.org/community/lists/users/2014/12/25893.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>In reply to:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
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
