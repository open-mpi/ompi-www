<?
$subject_val = "[OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 16:40:31 2013" -->
<!-- isoreceived="20130719204031" -->
<!-- sent="Fri, 19 Jul 2013 15:49:19 -0400" -->
<!-- isosent="20130719194919" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="[OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51E9983F.4080700_at_ohio.edu" -->
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
<strong>Subject:</strong> [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 15:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just upgraded the OS on one of my workstations from Fedora 17 to 18
<br>
and now I can't run even the simplest MPI programs.
<br>
<p>I filed a bug report with Fedora's bug tracker :
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=986409">https://bugzilla.redhat.com/show_bug.cgi?id=986409</a>
<br>
<p>My simple program is attached as mpi_simple.c
<br>
<p>mpicc works :
<br>
<p>&nbsp;&nbsp;mpicc -g -o mpi_simple mpi_simple.c
<br>
<p>I can even take the generated program to another computer and it runs fine.
<br>
<p>I can run mon MPI programs with mpirun :
<br>
<p>&nbsp;&nbsp;mpirun -n 4 hostname
<br>
&nbsp;&nbsp;murron.hobbs-hancock
<br>
&nbsp;&nbsp;murron.hobbs-hancock
<br>
&nbsp;&nbsp;murron.hobbs-hancock
<br>
&nbsp;&nbsp;murron.hobbs-hancock
<br>
<p>When I run a program that calls MPI_Init I get an error which includes :
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_util_nidmap_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>The output of :
<br>
<p>&nbsp;mpirun -n 1 mpi_simple
<br>
<p>is attached as error.txt
<br>
<p>I suspect it matters that this is a lenovo S10 with what /proc/cpuinfo
<br>
calls a &quot;Intel(R) Core(TM)2 Quad CPU    Q6600&quot;
<br>
<p>I did a bit of poking around in gdb but I don't know what I'm looking for.
<br>
<p>Does anybody have an idea what's going on?
<br>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22346/mpi_simple.c">mpi_simple.c</a>
</ul>
<!-- attachment="mpi_simple.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22346/error.txt">error.txt</a>
</ul>
<!-- attachment="error.txt" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22346/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22345.php">Ralph Castain: "Re: [OMPI users] check point restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
