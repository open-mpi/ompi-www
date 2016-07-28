<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 20:10:35 2006" -->
<!-- isoreceived="20060822001035" -->
<!-- sent="Mon, 21 Aug 2006 17:10:32 -0700" -->
<!-- isosent="20060822001032" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="[OMPI users] allreduce produces &amp;quot;error(8) registering gm memory&amp;quot;" -->
<!-- id="44EA4B78.1090300_at_lbl.gov" -->
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
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 20:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>Previous message:</strong> <a href="1760.php">micki _: "[OMPI users] mpi command not run in user mode only as root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>Reply:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have attached a small program that when run on my machine produces the 
<br>
error message below and locks up.
<br>
<p>[node0000:06319] [mpool_gm_module.c:100] error(8) registering gm memory
<br>
<p>I get the error when I run with 32 processors, but not with 4 (even if I 
<br>
increase the loop count to 20000). This is on a cluster of dual-dual 
<br>
core opterons with myrinet switches (i.e. using the gm routines). 
<br>
Unfortunately, I don't have the configure options that were used to 
<br>
build openmpi, but I don't think there was anything unusual. I've also 
<br>
attached the open_info output. Here is the compile line for the code
<br>
<p>g95 -o allreducetest allreducetest.F -I/usr/local/ompi/1.1-gcc/include 
<br>
-L/usr/local/ompi/1.1-gcc/lib -lmpi
<br>
<p>Also note that I did have to make changes to the fortran include files 
<br>
in openmpi to force all of the integers to be of size 4 (i.e. declaring 
<br>
them integer(4)) since the default integer size used by g95 is 8 bytes 
<br>
but the openmpi fortran interface was compiled with f77 which uses 4 
<br>
byte integers.
<br>
<p>Any suggestions on what to look for?
<br>
&nbsp;&nbsp;&nbsp;Thanks for the help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>
<br><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program parallel_sum_mmnts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=8):: zmmnts(0:360,28,0:8)
<br>
<p>c Use reduction routines to sum whole beam moments across all
<br>
c of the processors.  It also shares z moment data at PE boundaries.
<br>
<p>c     --- temporary for z moments
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=8),allocatable:: ztemp(:,:,:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: nn,nslaves,my_index,ii
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(4):: mpierror
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(mpierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,nslaves,mpierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,my_index,mpierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii=1,20000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,&quot;PSM1 &quot;,ii,my_index
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zmmnts0 = my_index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zmmnts = my_index
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(ztemp(0:360,28,0:8))
<br>
<p>c     --- Do reduction on beam z moments.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ztemp = zmmnts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nn = (1+360)*28*(1+8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,&quot;PSM1 &quot;,my_index,nn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ALLREDUCE(ztemp,zmmnts,nn,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;       MPI_DOUBLE_PRECISION,MPI_SUM,MPI_COMM_WORLD,mpierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,&quot;PSM2 &quot;,my_index
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(ztemp)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1761/oinfo.gz">oinfo.gz</a>
</ul>
<!-- attachment="oinfo.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>Previous message:</strong> <a href="1760.php">micki _: "[OMPI users] mpi command not run in user mode only as root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>Reply:</strong> <a href="1762.php">Brian Barrett: "Re: [OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
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
