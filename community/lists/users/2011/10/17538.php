<?
$subject_val = "[OMPI users] gpudirect p2p?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 01:28:04 2011" -->
<!-- isoreceived="20111014052804" -->
<!-- sent="Fri, 14 Oct 2011 16:27:58 +1100" -->
<!-- isosent="20111014052758" -->
<!-- name="Chris Cooper" -->
<!-- email="rallycoops_at_[hidden]" -->
<!-- subject="[OMPI users] gpudirect p2p?" -->
<!-- id="CAFeqsAybVFt0vF8-gwy3kaDFB9b-in5jYWUjjn3EDUz5RBXK5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] gpudirect p2p?<br>
<strong>From:</strong> Chris Cooper (<em>rallycoops_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 01:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Previous message:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Reply:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Are the recent peer to peer capabilities of cuda leveraged by Open MPI
<br>
when eg you're running a rank per gpu on the one workstation?
<br>
<p>It seems in my testing that I only get in the order of about 1GB/s as
<br>
per <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>,
<br>
whereas nvidia's simpleP2P test indicates ~6 GB/s.
<br>
<p>Also, I ran into a problem just trying to test.  It seems you have to
<br>
do cudaSetDevice/cuCtxCreate with the appropriate gpu id which I was
<br>
wanting to derive from the rank.  You don't however know the rank
<br>
until after MPI_Init() and you need to initialize cuda before.  Not
<br>
sure if there's a standard way to do it?  I have a workaround atm.
<br>
<p>Thanks,
<br>
Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Previous message:</strong> <a href="17537.php">Ralph Castain: "Re: [OMPI users] How to run open MPI without ipoib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Reply:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
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
