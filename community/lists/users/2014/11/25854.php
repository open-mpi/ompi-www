<?
$subject_val = "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 04:19:43 2014" -->
<!-- isoreceived="20141121091943" -->
<!-- sent="Fri, 21 Nov 2014 09:19:41 +0000" -->
<!-- isosent="20141121091941" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&amp;gt; module mpi" -->
<!-- id="8337B490252F0944BF1D38541059627E17376CD1_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Open MPI SC'14 BOF slides: mpif.h --&amp;gt; module mpi" -->
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
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Open%20MPI%20SC'14%20BOF%20slides:%20mpif.h%20--&amp;amp;gt;%20module%20mpi"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-21 04:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25855.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25853.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>Reply:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear community,
<br>
<p>Slide 92 of the OpenMPI Sc'14  slides describes the simple migration from   mpif.h    to   use mpi    in a  Fortran application code.
<br>
<p>However the description is not correct.
<br>
In a Fortran routine, the use-stmts (if there are) must come before (!) any other stmts,
<br>
i.e. you cannot place the   implicit none    before the    use mpif90    .
<br>
<p>Correct is only this:
<br>
<p>subroutine foo      --&gt;     subroutine foo
<br>
&nbsp;&nbsp;include 'mpif.h'                 use mpi
<br>
&nbsp;&nbsp;implicit none                     implicit none
<br>
&nbsp;&nbsp;integer  a, ...                     integer  a, ...
<br>
<p><p>However (for the developers of the mpi-module), you can (and should!!) employ the    implicit none  -stmt inside the mpi-module itself:
<br>
<p>module mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer MPI_...
<br>
contains
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
end module mpi
<br>
<p><p>Greetings
<br>
Michael Rachner     
<br>
<p><p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Donnerstag, 20. November 2014 16:48
<br>
An: Open MPI User's List; Open MPI Developers List
<br>
Betreff: [OMPI users] Open MPI SC'14 BOF slides
<br>
<p>For those of you who weren't able to be at the SC'14 BOF yesterday -- and even for those of you who were there and wanted to be able to read the slides in a little more detail (and get the links from the slides) -- I have posted them here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/sc-2014/">http://www.open-mpi.org/papers/sc-2014/</a>
<br>
<p>Enjoy!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25849.php">http://www.open-mpi.org/community/lists/users/2014/11/25849.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25855.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25853.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>Reply:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
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
