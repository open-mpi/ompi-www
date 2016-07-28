<?
$subject_val = "[OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 09:52:59 2010" -->
<!-- isoreceived="20100720135259" -->
<!-- sent="Tue, 20 Jul 2010 09:52:34 -0400" -->
<!-- isosent="20100720135234" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="[OMPI users] Partitioning problem set data" -->
<!-- id="AANLkTikvSBaccCXCE7Zc_0qBiXJIHXtMU_uNpI1w0T_e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Partitioning problem set data<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 09:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a 3D array, which I need to split into equal n parts, so that each
<br>
part would run on a different node. I found the picture in the attachment
<br>
from this website (
<br>
<a href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>) on
<br>
the different ways to partition data. I am interested in the block methods,
<br>
as the cyclic methods wouldn't really work for me at all. Obviously the *,
<br>
BLOCK and the BLOCK, * methods would be really easy to implement for 3D
<br>
arrays, assuming that the 2D picture would be looking at the array from the
<br>
top. My question is if there are other better ways to do it from a
<br>
performance standpoint?
<br>
<p>Thanks for your replies,
<br>
Alex
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13715/distributions.gif" alt="distributions.gif">
<!-- attachment="distributions.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>Reply:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
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
