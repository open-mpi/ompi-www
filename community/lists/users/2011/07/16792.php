<?
$subject_val = "[OMPI users] need help for a mpi 2d heat equation solving code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 09:11:37 2011" -->
<!-- isoreceived="20110701131137" -->
<!-- sent="Fri, 1 Jul 2011 15:11:32 +0200" -->
<!-- isosent="20110701131132" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] need help for a mpi 2d heat equation solving code" -->
<!-- id="BANLkTik4Mok+fBRx+YQ-GqMAH2QHbQrAdQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 09:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="../../2011/06/16791.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i need help regarding a mpi program which solves the 2d heat equation. I
<br>
have rewritten the original code in my own way,
<br>
in oder to understand well the parallelization.
<br>
<p>I will initially make it work with 4 processors (nproc=4)  with a 2D domain of
<br>
100 points, that is to say 10 on the x axis (size_x=10)
<br>
and 10 on the y axis (size_y=10). The 2D is divided into four (x_domains=2
<br>
and y_domains=2).
<br>
<p>The array of values &#226;&#128;&#139;&#226;&#128;&#139;( &quot;x0 in the code ) has a dimension of 8 * 8, so each
<br>
processor works on 4 * 4 arrays.
<br>
<p>The current process rank is stored in &quot;me&quot;.  I calculate the coordinates of
<br>
the domain interval for each worker :
<br>
<p>xdeb(me)&lt;x&lt;xfin(me) and ydeb(me)&lt;y&lt;yfin(me) for &quot;me&quot; process. I check it and
<br>
it's correct.
<br>
<p>The initial conditions like x_domains,y_domains,size_x, size_y, the max
<br>
step, the tolerance, are stored in
<br>
param&lt;<a href="ftp://toulouse-immobilier.bz/pub/param">ftp://toulouse-immobilier.bz/pub/param</a>&gt;file.
<br>
<p>There are a total of three main files : the main program
<br>
explicitPar.f90&lt;<a href="ftp://toulouse-immobilier.bz/pub/explicitPar.f90">ftp://toulouse-immobilier.bz/pub/explicitPar.f90</a>&gt;which
<br>
does initialization,
<br>
calls in the main loop : the explitUtil solving routine in
<br>
explUtil.f90&lt;<a href="ftp://toulouse-immobilier.bz/pub/explUtil.f90">ftp://toulouse-immobilier.bz/pub/explUtil.f90</a>&gt;and updates
<br>
the
<br>
neighbors of the current process with updateBound routine in
<br>
updateBound.f90&lt;<a href="ftp://toulouse-immobilier.bz/pub/updateBound.f90">ftp://toulouse-immobilier.bz/pub/updateBound.f90</a>&gt;.
<br>
<p>Everything seems ok except the &quot;updateBound&quot; routine :  I have a problem
<br>
with the indexes of row and columns in the communication between
<br>
North Neighbors, South Neighbors, West and East Neighbors.
<br>
<p>For example, I have :
<br>
<p>------------------------------------------------------------------------------------------------------------
<br>
! Send my boundary to North and receive from South
<br>
<p>CALL MPI_SENDRECV(x(ydeb(me),xdeb(me)), 1, row_type ,neighBor(N),flag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x(yfin(me),xdeb(me)), 1, row_type,neighbor(S),flag, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm2d, status, infompi)
<br>
------------------------------------------------------------------------------------------------------------
<br>
<p>For 4 processors and me=0, i have :
<br>
<p>xdeb(0)=1
<br>
xfin(0)=4
<br>
ydeb(0)=5
<br>
yfin(0 )=8
<br>
<p>So I send to the North neighbor the upper row indexed by
<br>
x(ydeb(me),xdeb(me)). But I should have ghost cells for
<br>
the communication in this case for calculting the next values of &quot;x0&quot; array
<br>
for each worker. Actually I need the
<br>
boundaries values for each worker ( with 4*4 size) but I think I have to
<br>
work on a 5*5 size for this calculation in order to
<br>
have ghost cells on the edges of 4*4 worker cells.
<br>
<p>You can compile this code by adapting the
<br>
makefile&lt;<a href="ftp://toulouse-immobilier.bz/pub/makefile">ftp://toulouse-immobilier.bz/pub/makefile</a>&gt;with :&quot; $ make
<br>
explicitPar &quot;
<br>
and execute it in my case with : &quot;$ mpirun -n 4 explicitPar &quot;
<br>
<p><p>Anyone could see what's wrong with my code ? Have I got to put a 12*12 size
<br>
for the global domain ? it would allow to have 5*5 worker cells with 2 more
<br>
for the boundary condition (constant), so a total equal to 12 for size_x and
<br>
size_y ( 8+2+2).
<br>
<p>Note that the edges of the domain remain equal to 10 as it's expected.
<br>
<p>Any help would be really appreciated.
<br>
<p>Thanks in advance.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="../../2011/06/16791.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
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
