<?
$subject_val = "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 06:28:25 2014" -->
<!-- isoreceived="20141121112825" -->
<!-- sent="Fri, 21 Nov 2014 11:28:23 +0000" -->
<!-- isosent="20141121112823" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&amp;gt; module mpi" -->
<!-- id="F11091EC-E7C8-4231-90CB-D223499A8B21_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E17376CD1_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-21 06:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25858.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25854.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How embarrassing; I got it backwards!  :-(
<br>
<p>Thanks for pointing this out; I have updated the slides on the web site to be correct.
<br>
<p>Sidenote: on putting &quot;implicit none&quot; in the mpi module -- I remember that we talked about this, and decided that even though it would be a good thing for users, it's not a good idea for us to force our programming style ideas on users.
<br>
<p><p>On Nov 21, 2014, at 4:19 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slide 92 of the OpenMPI Sc'14  slides describes the simple migration from   mpif.h    to   use mpi    in a  Fortran application code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However the description is not correct.
</span><br>
<span class="quotelev1">&gt; In a Fortran routine, the use-stmts (if there are) must come before (!) any other stmts,
</span><br>
<span class="quotelev1">&gt; i.e. you cannot place the   implicit none    before the    use mpif90    .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct is only this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine foo      --&gt;     subroutine foo
</span><br>
<span class="quotelev1">&gt;  include 'mpif.h'                 use mpi
</span><br>
<span class="quotelev1">&gt;  implicit none                     implicit none
</span><br>
<span class="quotelev1">&gt;  integer  a, ...                     integer  a, ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However (for the developers of the mpi-module), you can (and should!!) employ the    implicit none  -stmt inside the mpi-module itself:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module mpi
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;    integer MPI_...
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt; end module mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Michael Rachner     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt; Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Gesendet: Donnerstag, 20. November 2014 16:48
</span><br>
<span class="quotelev1">&gt; An: Open MPI User's List; Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Betreff: [OMPI users] Open MPI SC'14 BOF slides
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those of you who weren't able to be at the SC'14 BOF yesterday -- and even for those of you who were there and wanted to be able to read the slides in a little more detail (and get the links from the slides) -- I have posted them here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/papers/sc-2014/">http://www.open-mpi.org/papers/sc-2014/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Enjoy!
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25849.php">http://www.open-mpi.org/community/lists/users/2014/11/25849.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25854.php">http://www.open-mpi.org/community/lists/users/2014/11/25854.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25858.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25854.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
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
