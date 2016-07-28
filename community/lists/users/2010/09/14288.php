<?
$subject_val = "[OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 06:28:37 2010" -->
<!-- isoreceived="20100923102837" -->
<!-- sent="Thu, 23 Sep 2010 12:28:32 +0200" -->
<!-- isosent="20100923102832" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Question about Asynchronous collectives" -->
<!-- id="AANLkTimW7oPmTKvb4=SFrRojkM1Fad_w7c330MgHy9Qk_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question about Asynchronous collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 06:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>i'm studing the interfaces of new collective routines in next MPI-3, and
<br>
i've read that new collectives haven't any tag.
<br>
<p>So all collective operations must follow the ordering rules for collective
<br>
calls.
<br>
<p><span class="quotelev1">&gt;From what i understand, this means that i can't use:
</span><br>
<p>MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
<br>
<p>but is it possible to do this:
<br>
<p>MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IReducet(MPI_COMM_WORLD, request_2) // othwer collective
<br>
<p>In other words, i can't overlap the same collective more time on one
<br>
communicator, but is it possible with different collectives?
<br>
<p>Thanks a lot.
<br>
<p><p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14287.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
