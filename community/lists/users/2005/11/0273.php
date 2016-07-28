<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  2 13:35:50 2005" -->
<!-- isoreceived="20051102183550" -->
<!-- sent="Wed, 2 Nov 2005 11:35:39 -0700" -->
<!-- isosent="20051102183539" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3" -->
<!-- id="B27D84CE-198F-49D2-A3E7-A74104F378CD_at_noao.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="99462380-7773-4532-B99E-7BAE2F1B29E9_at_noao.edu" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-02 13:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George, Andrew, and Jeff,
<br>
<p>I retrieved openmpi-1.1a1r7966.tar.gz and was able to build it  
<br>
without any problems on my 5-node Beowulf cluster running gcc 2.96.   
<br>
Thanks for implementing the patches.
<br>
<p>I compiled my qlwfpc2 code and it appears that the case with 3  
<br>
machines has improved slightly over 1.0rc4
<br>
(times are given in seconds of walltime):
<br>
<p>(1) (2)  (3)  (4)
<br>
1   6.8  6.8  7.3
<br>
2   4.5  4.5  4.7
<br>
3   8.5  8.8  4.9
<br>
4   3.4  3.5  3.6
<br>
5   3.1  3.1  3.3
<br>
<p>(1) number of machines
<br>
(2) OpenMPI_1.1a1r7966
<br>
(3) OpenMPI_1.0rc4
<br>
(4) MPICH_1.2.5
<br>
<p>My cluster uses TCP over a Gigabit Ethernet switch.
<br>
<p>-Ken
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
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
