<?
$subject_val = "[OMPI users] Limitation of MPI_BCAST";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 11 18:11:43 2013" -->
<!-- isoreceived="20130411221143" -->
<!-- sent="Thu, 11 Apr 2013 15:11:37 -0700" -->
<!-- isosent="20130411221137" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] Limitation of MPI_BCAST" -->
<!-- id="SNT134-W152840AE45CD9DDE8A60F2D3C00_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.17.1365696002.12263.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Limitation of MPI_BCAST<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-11 18:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Previous message:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Reply:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Reply:</strong> <a href="21730.php">tmishima_at_[hidden]: "[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using openmpi 1.6 and when I tried to send a large array through MPI_BCAST
<br>
in fortran. The number of count is larger than 3 billions. Although I compiled openmpi and
<br>
my code with the option to declare my fortran integer as 64 bit long in linux. I found out
<br>
that fortran pbcast_f.c will cast my *count to integer to call the c code MPI_Bcast
<br>
<p>&nbsp;&nbsp;*ierr = OMPI_INT_2_FINT(MPI_Bcast(OMPI_F2C_BOTTOM(buffer),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FINT_2_INT(*count),
<br>
<p>So my question is, is it possible to bcast more than MAX_INT count of data_type in
<br>
openmpi?
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>William
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Previous message:</strong> <a href="21710.php">Ralph Castain: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Reply:</strong> <a href="21712.php">George Bosilca: "Re: [OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>Reply:</strong> <a href="21730.php">tmishima_at_[hidden]: "[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer"</a>
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
