<?
$subject_val = "[OMPI users] About the Open-MPI point-to-point messaging layers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 30 21:46:25 2012" -->
<!-- isoreceived="20120701014625" -->
<!-- sent="Sat, 30 Jun 2012 21:46:21 -0400" -->
<!-- isosent="20120701014621" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] About the Open-MPI point-to-point messaging layers" -->
<!-- id="4FEFABED.1040903_at_ulaval.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] About the Open-MPI point-to-point messaging layers<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-30 21:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19721.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19719.php">S&#233;bastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I really like Open-MPI and its Modular Component Architecture.
<br>
The --mca parameters are so useful for learning and testing things !
<br>
<p>So here are my questions.
<br>
<p>I know that the default point-to-point messaging layer is ob1
<br>
(the Obi-Wan Kenobi PML). I know that there is also the PML
<br>
cm (the Connor MacLeod PML).
<br>
<p>&nbsp;From what I understand, the force is strong with Obi-Wan Kenobi, so he
<br>
can use various byte transfer layers (BTLs).
<br>
And there can be only one highlander (probably Connor MacLeod) so
<br>
when I use the MTL psm, I can not use any of the BTLs because Connor
<br>
MacLeod can only be alone at the end.
<br>
<p>But what about the PML csum ?
<br>
<p>What exactly is the PML csum (checksum) doing ?
<br>
<p>Which code is the PML csum using for actually transferring stuff between
<br>
MPI ranks ? BTLs or MTLs or something else or nothing ?
<br>
<p>I have searched the web a little but have not found much about it.
<br>
<p>If I use the MTL psm, can the PML csum be used to detect message
<br>
corruption ? I guess the answer is no because csum is not Connor MacLeod.
<br>
<p>I have read that when the MTL psm is used, all the Open-MPI BTL objects are
<br>
disabled.
<br>
<p>What code would the PML dr use to move bytes around should it
<br>
be stable and production-ready ?
<br>
<p><p>And my final question:
<br>
<p>When a company design a new interconnect, why choose the MTL architecture
<br>
(and thus the PML cm) instead of the BTL architecture (with the ob1 PML) ?
<br>
<p>It seems to me that ob1 and BTLs are mature and that BTLs self and sm 
<br>
are quite
<br>
useful and bug-free for what I know. New code should only do the case 
<br>
when the two
<br>
MPI processes are on different nodes, right ?
<br>
<p><p>Thank you !
<br>
<p><p>S&#233;bastien Boisvert
<br>
<p>p.s.: I found the silly names here -&gt; 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2008/05/3925.php">http://www.open-mpi.org/community/lists/devel/2008/05/3925.php</a>
<br>
;)
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19721.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19719.php">S&#233;bastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
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
