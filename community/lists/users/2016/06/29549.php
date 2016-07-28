<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 15:17:10 2016" -->
<!-- isoreceived="20160627191710" -->
<!-- sent="Mon, 27 Jun 2016 15:17:05 -0400" -->
<!-- isosent="20160627191705" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E5AFF9AF7C1_at_NRCCENMB1.nrc.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-27 15:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff and Alex for your answers and comments.
<br>
<p>mlockall(), especially with the MCL_FUTURE argument is indeed interesting.
<br>
<p>Thanks Jeff for your clarification of what memory registration really means (e.g. locking and telling the network stack the virtual to physical mapping).
<br>
<p>Also concerning the ummunotify kernel module, I would like to point out that while the link sent to github bug report suggests it is problematic, the top level Open MPI README file still recommends it. Should the README file need to be updated ?
<br>
<p>Regards,
<br>
<p>Martin Audet
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29548.php">Gilles Gouaillardet: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
