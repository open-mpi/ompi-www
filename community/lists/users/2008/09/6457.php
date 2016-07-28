<?
$subject_val = "[OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 14:25:54 2008" -->
<!-- isoreceived="20080902182554" -->
<!-- sent="Tue, 02 Sep 2008 20:25:48 +0200" -->
<!-- isosent="20080902182548" -->
<!-- name="Vincent Rotival" -->
<!-- email="vincent.rotival_at_[hidden]" -->
<!-- subject="[OMPI users] CPU burning in Wait state" -->
<!-- id="48BD852C.2010604_at_polytechnique.org" -->
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
<strong>Subject:</strong> [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Vincent Rotival (<em>vincent.rotival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-02 14:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>I think I already read some comments on this issue, but I'd like to know 
<br>
of latest versions of OpenMPI have managed to solve it. I am now running 
<br>
1.2.5
<br>
<p>If I run a MPI program with synchronization routines (e.g. MPI_barrier, 
<br>
MPI_bcast...), all threads waiting for data are still burning CPU. On 
<br>
the other hand when using non-blocking receives all threads waiting for 
<br>
data are not consuming any CPU.
<br>
<p>Would there be a possibility to use MPI_Bcast without  burning CPU power ?
<br>
<p>Thanks in advance
<br>
<p>Vincent
<br>
<p><pre>
-- 
**********************************************************
* CEA/DAM Ile-De-France          * 15 Boulevard BLANQUI  *
* DAM/DIF/DPTA/PN/LSNT           * 75013 Paris           *
* 91680 Bruyeres-Le-Chatel BP12  * FRANCE                *
* FRANCE                         *                       *
* office : (+33)169264972        * home : (+33)678625323 *
* fax    : (+33)169267063        *                       *
**********************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6458.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
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
