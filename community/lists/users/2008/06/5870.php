<?
$subject_val = "[OMPI users] weird problem with passing data between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 20:56:05 2008" -->
<!-- isoreceived="20080613005605" -->
<!-- sent="Thu, 12 Jun 2008 19:55:51 -0500" -->
<!-- isosent="20080613005551" -->
<!-- name="zach" -->
<!-- email="zachlubin_at_[hidden]" -->
<!-- subject="[OMPI users] weird problem with passing data between nodes" -->
<!-- id="9fdb08030806121755s17718b80kf00c8f99d6bcd847_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] weird problem with passing data between nodes<br>
<strong>From:</strong> zach (<em>zachlubin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 20:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5869.php">Tim Mattox: "[OMPI users] Brief mail services outage today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Reply:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a weird problem that shows up when i use LAM or OpenMPI but not MPICH.
<br>
<p>I have a parallelized code working on a really large matrix. It
<br>
partitions the matrix column-wise and ships them off to processors,
<br>
so, any given processor is working on a matrix with the same number of
<br>
rows as the original but reduced number of columns. Each processor
<br>
needs to send a single column vector entry
<br>
from its own matrix to the adjacent processor and visa versa as part
<br>
of the algorithm.
<br>
<p>I have found that depending on the number of rows of the matrix -or,
<br>
the size of the vector being sent using MPI_Send, MPI_Recv, the
<br>
simulation will hang.
<br>
It is only until i reduce this dimension to a certain max number will
<br>
the sim run properly. I have also found that this magic number differs
<br>
depending on the system I am using, eg my home quad-core box or remote
<br>
cluster.
<br>
<p>As i mentioned i have not had this issue with mpich. I would like to
<br>
understand why it is happening rather than just defect over to mpich
<br>
to get by.
<br>
<p>Any help would be appreciated!
<br>
zach
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5869.php">Tim Mattox: "[OMPI users] Brief mail services outage today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Reply:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
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
