<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 13:43:24 2009" -->
<!-- isoreceived="20090728174324" -->
<!-- sent="Tue, 28 Jul 2009 18:43:16 +0100" -->
<!-- isosent="20090728174316" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="73918C7F-9304-43C6-BE16-4B8BF6294A04_at_ist.utl.pt" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.9.1248796811.26563.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 13:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe in reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>I don't think this is a library mismatch. I just followed your  
<br>
instructions and got:
<br>
<p>$ otool -L a.out
<br>
a.out:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3.3-g95-32/lib/libmpi_f77.0.dylib (compatibility  
<br>
version 1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3.3-g95-32/lib/libmpi.0.dylib (compatibility version  
<br>
1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3.3-g95-32/lib/libopen-rte.0.dylib (compatibility  
<br>
version 1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3.3-g95-32/lib/libopen-pal.0.dylib (compatibility  
<br>
version 1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libutil.dylib (compatibility version 1.0.0, current version  
<br>
1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current  
<br>
version 111.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libmx.A.dylib (compatibility version 1.0.0, current version  
<br>
292.4.0)
<br>
<p>My configure line is just:
<br>
<p>./configure --prefix=/opt/openmpi/1.3.3-g95-32 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=g95 FC=g95
<br>
<p>Ricardo
<br>
<p><p>On Jul 28, 2009, at 17:00 , users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Ricardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked on Linux and on Mac OS X 10.5.7 with the fortran compilers
</span><br>
<span class="quotelev1">&gt; from (hpc.sourceforge.net) and I get the correct answer. As you only
</span><br>
<span class="quotelev1">&gt; report problems on Mac OS X I wonder if the real source of the problem
</span><br>
<span class="quotelev1">&gt; is not coming from a library mismatch. As you know, Open MPI is
</span><br>
<span class="quotelev1">&gt; bundled in Leopard. We had problems in the past if the user install
</span><br>
<span class="quotelev1">&gt; their own version, if the paths are not correctly set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's try to understand what the problem is on your system. First
</span><br>
<span class="quotelev1">&gt; please compile your version of Open MPI by adding --enable-mpirun-
</span><br>
<span class="quotelev1">&gt; prefix-by-default to the configure line. Then once everything is
</span><br>
<span class="quotelev1">&gt; installed, compile a simple application (inplace.F is a good example),
</span><br>
<span class="quotelev1">&gt; do a &quot;otool -L a.out&quot; and send out the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10119.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Maybe in reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
