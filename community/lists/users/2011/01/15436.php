<?
$subject_val = "[OMPI users] allow job to survive process death";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 09:11:58 2011" -->
<!-- isoreceived="20110127141158" -->
<!-- sent="Thu, 27 Jan 2011 09:11:54 -0500" -->
<!-- isosent="20110127141154" -->
<!-- name="Kirk Stako" -->
<!-- email="kirkstako_at_[hidden]" -->
<!-- subject="[OMPI users] allow job to survive process death" -->
<!-- id="AANLkTikqCHDa0J-LHgaXV68w_4tvsCbK0L0kstqHQz+p_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] allow job to survive process death<br>
<strong>From:</strong> Kirk Stako (<em>kirkstako_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 09:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15435.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was wondering what support Open MPI has for allowing a job to
<br>
continue running when one or more processes in the job die
<br>
unexpectedly? Is there a special mpirun flag for this? Any other ways?
<br>
<p>It seems obvious that collectives will fail once a process dies, but
<br>
would it be possible to create a new group (if you knew which ranks
<br>
are dead) that excludes the dead processes - then turn this group into
<br>
a working communicator?
<br>
<p>Thanks,
<br>
Kirk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15435.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
<li><strong>Reply:</strong> <a href="15437.php">Joshua Hursey: "Re: [OMPI users] allow job to survive process death"</a>
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
