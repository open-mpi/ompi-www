<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 21:58:30 2008" -->
<!-- isoreceived="20080814015830" -->
<!-- sent="Thu, 14 Aug 2008 09:58:27 +0800 (SGT)" -->
<!-- isosent="20080814015827" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="863721.48127.qm_at_web76802.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9b0da5ce0808130326n582dc972sf3542cee9195e131_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> Rayne (<em>lancer6238_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 21:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried to explicitly specify where 32.out is on the server when using mpirun, and it worked. So the problem I had earlier did lie in the server not being able to find 32.out. So what should I do so that I don't have to explicitly specify the location of the program everytime I run mpirun? I tried including the directory under PATH in .bash_profile in my server, where the 32.out should run on, restarted the server, but it didn't work.
<br>
<p>Also, since having the 32-bit server run the 32-bit program and the 64-bit PC run the 64-bit program works, I guess it means my server cannot run the program compiled by my PC and hence, the mpirun failed when trying to get both the PC and server to run the same program compiled by the PC.
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________________________________________________________
<br>
Search, browse and book your hotels and flights through Yahoo! Travel.
<br>
<a href="http://sg.travel.yahoo.com">http://sg.travel.yahoo.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6341.php">Jeff Squyres: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
