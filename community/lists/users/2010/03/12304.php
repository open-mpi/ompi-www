<?
$subject_val = "[OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 15:54:46 2010" -->
<!-- isoreceived="20100310205446" -->
<!-- sent="Wed, 10 Mar 2010 15:54:27 -0500" -->
<!-- isosent="20100310205427" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="[OMPI users] 3D domain decomposition with MPI" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF85022818_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 15:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all. I am relatively new to MPI, and so this may be covered somewhere else, but I can't seem to find any links to tutorials mentioning any specifics, so perhaps someone here can help.
<br>
<p>In C, I have a 3D array that I have dynamically allocated and access like Array[x][y][z]. I was hoping to calculate a subsection for each processor to work on,  of size nx in the x dimension, ny in the y dimension, and the full Z dimension. Starting at Array[sx][sy][0] and going to Array[ex][ey][z] where ey-sy=ny.
<br>
<p>What is the best way to do this? I am able to calculate the neighboring processors and assign a sub-section of the XY dimensions to each processor, however I am having problems with sharing the border information of the arrays with the other processors. I don't really want to have to do a MPI_Send for each of the 0..Z slices's border information. I'd kind of like to process all of the Z, then share the full &quot;face&quot; of the border information with the neighbor processor. For example, if process 1 was the right neighbor of process zero, I'd want process zero to send Subarray[0..nx][ny][0..Z](the right most face) to processor 1's left-most face..assuming the X-Y plane was your screen, and the Z dimension extended into the screen.
<br>
<p>If anyone has any information that talks about how to use the MPI data types, or some other method, or wants to talk about how this might be done, I'm all ears.
<br>
<p>I know it is hard to talk about without pictures, so if you all like, I can post a picture explaning what I want to do. Thanks!
<br>
<p>Derek
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Maybe reply:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
