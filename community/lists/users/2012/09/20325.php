<?
$subject_val = "[OMPI users] error from MPI_Allgather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 23:45:35 2012" -->
<!-- isoreceived="20120926034535" -->
<!-- sent="Wed, 26 Sep 2012 12:45:30 +0900" -->
<!-- isosent="20120926034530" -->
<!-- name="Rajesh J" -->
<!-- email="chithrasala_at_[hidden]" -->
<!-- subject="[OMPI users] error from MPI_Allgather" -->
<!-- id="CAL_g3-VdB-EY=g0jjDHGrcgTMdwiGxN+OWUqKNqwBYhDxdoSfQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error from MPI_Allgather<br>
<strong>From:</strong> Rajesh J (<em>chithrasala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 23:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20326.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have some error while using mpirun. Could anyone please help me solve this.
<br>
I googled this and found some, but too technical for me since I am not
<br>
so familiar with mpi programs. Is this due to some installation
<br>
problem or the program which I run?
<br>
<p>Fatal error in PMPI_Allgather: Invalid buffer pointer, error stack:
<br>
PMPI_Allgather(958): MPI_Allgather(sbuf=0x6465d30, scount=1,
<br>
MPI_INTEGER, rbuf=0x6465d30, rcount=1, MPI_INTEGER, MPI_COMM_WORLD)
<br>
failed
<br>
PMPI_Allgather(931): Buffers must not be aliased
<br>
<p><p>Thank you very much
<br>
<pre>
-- 
**Dr. Rajesh J.
Postdoctoral Research Associate,
Center for Global Environmental Research,
National Institute for Environmental Studies,
16-2 Onogawa, Tsukuba, Ibaraki, 305-8506 Japan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20326.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Reply:</strong> <a href="20329.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
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
