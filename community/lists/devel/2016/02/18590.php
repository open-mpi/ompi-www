<?
$subject_val = "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 20:27:38 2016" -->
<!-- isoreceived="20160212012738" -->
<!-- sent="Fri, 12 Feb 2016 01:27:23 +0000" -->
<!-- isosent="20160212012723" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM" -->
<!-- id="9E38B9D0-9BC7-46AC-B575-1AF0CC1C53A4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwCO2fuMfFFBOCnBuGkFTu+yf1aOY+6zy6_OjUT6UovR2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 20:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18591.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We re-opened it, though. :)  I saw Nathan fix it in the c bindings; I'm not sure if he fixed it in fortran yet. It's noted on the pull request, though. 
<br>
<p>Yes, if you'd like to file directly on Github, that would be great. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Feb 11, 2016, at 2:49 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11 February 2016 at 14:41, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nope, this is not on purpose.  I filed <a href="https://github.com/open-mpi/ompi/issues/1355">https://github.com/open-mpi/ompi/issues/1355</a> to track the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh! I was not aware you are now tracking issues in GitHub. I think you
</span><br>
<span class="quotelev1">&gt; closed the issue too quickly :-) I added some additional comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Should I go to GitHub directly next time? Or you still prefer bug
</span><br>
<span class="quotelev1">&gt; reports in the mailing list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18589.php">http://www.open-mpi.org/community/lists/devel/2016/02/18589.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18591.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
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
