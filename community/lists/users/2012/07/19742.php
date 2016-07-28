<?
$subject_val = "[OMPI users] scatterv displacement unit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 17:27:40 2012" -->
<!-- isoreceived="20120706212740" -->
<!-- sent="Fri, 6 Jul 2012 21:27:35 +0000" -->
<!-- isosent="20120706212735" -->
<!-- name="Ryan S. Davis" -->
<!-- email="rsdavis_at_[hidden]" -->
<!-- subject="[OMPI users] scatterv displacement unit" -->
<!-- id="B1F95E7AB5A6BE4F8AEA927D3C338FAF37793B45_at_CSGMBX202W.pu.win.princeton.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] scatterv displacement unit<br>
<strong>From:</strong> Ryan S. Davis (<em>rsdavis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 17:27:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<li><strong>Previous message:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<li><strong>Reply:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to scatter data from the master process to the others using scatterv and my own datatype that maps out the blocks of data in memory.
<br>
<p>The problem is that I dont know what unit size the function (scatterv) is using to measure displacements in. I assume that it is using the extent of the user-defined datatype, but I need
<br>
to specify the displacements in bytes.
<br>
<p>For example, if I specify a displacement of 2 from the sendbuffer, does this mean 2 bytes
<br>
or 2*MPI_Type_size() or 2*MPI_Type_extent()? The man page isn't very clear on this.
<br>
<p>I know that there is function MPI_Type_hindexed, that accepts displacements measured is bytes
<br>
when creating new datatypes.
<br>
Is there something similar for scatterv/gatherv?
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<li><strong>Previous message:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
<li><strong>Reply:</strong> <a href="19743.php">Gus Correa: "Re: [OMPI users] scatterv displacement unit"</a>
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
