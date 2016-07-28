<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 10:57:05 2014" -->
<!-- isoreceived="20140805145705" -->
<!-- sent="Tue, 5 Aug 2014 10:57:01 -0400" -->
<!-- isosent="20140805145701" -->
<!-- name="Dan Shell" -->
<!-- email="dshellwireless_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="7B7CBC62BC434D46933F9243CB6ECAC3_at_WDC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="528F9D37-A8AB-4B65-B249-17456208E6D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.1 gfortran not working<br>
<strong>From:</strong> Dan Shell (<em>dshellwireless_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 10:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24912.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24912.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
Ok
<br>
Should I look for a newer version of gfortran?
<br>
I saw from the config fortran compile section that mpi_f08 was not compiled
<br>
Thank you for the help
<br>
Dan Shell
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
(jsquyres)
<br>
Sent: Tuesday, August 05, 2014 10:36 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] openmpi 1.8.1 gfortran not working
<br>
<p>Dan --
<br>
<p>The version of gfortran that you have does not support the mpi_f08 bindings.
<br>
Note that:
<br>
<p>- newer versions of gfortran will support the mpi_f08 bindings
<br>
- all versions of gfortran support the mpi module and the mpif.h Fortran
<br>
bindings
<br>
<p>See the README:
<br>
<p>------
<br>
&nbsp;&nbsp;The following notes apply to the above-listed Fortran bindings:
<br>
<p>&nbsp;&nbsp;- All Fortran compilers support the mpif.h/shmem.fh-based bindings.
<br>
<p>&nbsp;&nbsp;- The level of support provided by the mpi module is based on your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fortran compiler.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If Open MPI is built with a non-GNU Fortran compiler, or if Open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI is built with the GNU Fortran compiler &gt;= v4.9, all MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutines will be prototyped in the mpi module.  All calls to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI subroutines will therefore have their parameter types checked
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at compile time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If Open MPI is built with an old gfortran (i.e., &lt; v4.9), a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;limited &quot;mpi&quot; module will be built.  Due to the limitations of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;these compilers, and per guidance from the MPI-3 specification,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all MPI subroutines with &quot;choice&quot; buffers are specifically *not*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;included in the &quot;mpi&quot; module, and their parameters will not be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;checked at compile time.  Specifically, all MPI subroutines with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no &quot;choice&quot; buffers are prototyped and will receive strong
<br>
&nbsp;&nbsp;&nbsp;&nbsp;parameter type checking at run-time (e.g., MPI_INIT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_RANK, etc.).
<br>
<p>&nbsp;&nbsp;- The mpi_f08 module is new and has been tested with the Intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fortran compiler and gfortran &gt;= 4.9.  Other modern Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;compilers may also work (but are, as yet, only lightly tested).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It is expected that this support will mature over time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Many older Fortran compilers do not provide enough modern Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;features to support the mpi_f08 module.  For example, gfortran &lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;v4.9 does provide enough support for the mpi_f08 module.
<br>
-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Previous message:</strong> <a href="24912.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24912.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
