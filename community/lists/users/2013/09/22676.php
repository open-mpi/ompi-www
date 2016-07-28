<?
$subject_val = "[OMPI users] openmpi, stdin and qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 07:42:34 2013" -->
<!-- isoreceived="20130919114234" -->
<!-- sent="Thu, 19 Sep 2013 13:42:33 +0200" -->
<!-- isosent="20130919114233" -->
<!-- name="Fabrice Boyrie" -->
<!-- email="fboyrie_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi, stdin and qlogic infiniband" -->
<!-- id="20130919114233.GA13313_at_lapinou2.lsd.univ-montp2.fr" -->
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
<strong>Subject:</strong> [OMPI users] openmpi, stdin and qlogic infiniband<br>
<strong>From:</strong> Fabrice Boyrie (<em>fboyrie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-19 07:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22677.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I have to compile a program (abinit) reading data from stdin and it
<br>
doesn't works.
<br>
<p><p>&nbsp;&nbsp;I made a simplified version of the program
<br>
<p><p><p>PROGRAM TESTSTDIN
<br>
<p>&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;integer ( kind = 4 ) error
<br>
&nbsp;&nbsp;integer ( kind = 4 ) id
<br>
&nbsp;&nbsp;integer ( kind = 4 ) p
<br>
&nbsp;&nbsp;real ( kind = 8 ) wtime
<br>
&nbsp;&nbsp;CHARACTER(LEN=255) a
<br>
&nbsp;&nbsp;call MPI_Init ( error )
<br>
&nbsp;&nbsp;call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
<br>
&nbsp;&nbsp;call MPI_Comm_rank ( MPI_COMM_WORLD, id, error )
<br>
<p>&nbsp;&nbsp;if ( id == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PRINT*, &quot;id0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;READ(5,'(A)') a
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;write ( *, '(a)' ) ' '
<br>
&nbsp;&nbsp;write ( *, '(a,i8,a)' ) '  Process ', id, ' says &quot;Hello, world!&quot;'
<br>
<p>&nbsp;&nbsp;if ( id == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write ( *, '(a)' ) 'READ from stdin'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write ( *, '(a)' ) a
<br>
&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;call MPI_Finalize ( error )
<br>
<p>&nbsp;&nbsp;stop
<br>
end
<br>
<p><p>I've tried openmpi 1.6.5 and 1.7.2
<br>
The fortran compiler is ifort (tried Version 14.0.0.080 Build 20130728
<br>
and Version 11.1    Build 20100806)
<br>
(c compiler is gcc, centos 6.x, infiniband stack from qlogic
<br>
infinipath-libs-3.1-3420.1122_rhel6_qlc.x86_64)
<br>
<p>Trying with and without infiniband (qlogic card)
<br>
<p>mpirun -np 8 ./teststdin &lt; /tmp/a
<br>
forrtl: Bad file descriptor
<br>
forrtl: severe (108): cannot stat file, unit 5, file /proc/43811/fd/0
<br>
Image              PC                Routine            Line        
<br>
Source             
<br>
teststdin          000000000040BF48  Unknown               Unknown  Unknown
<br>
<p><p><p>&nbsp;mpirun -mca mtl ^psm -mca btl self,sm -np 8 ./teststdin &lt; /tmp/a
<br>
<p>&nbsp;id0
<br>
&nbsp;&nbsp;Process        0 says &quot;Hello, world!&quot;
<br>
READ from stdin
<br>
zer                                                                                                                                                                                                                                                            
<br>
&nbsp;
<br>
&nbsp;&nbsp;Process        1 says &quot;Hello, world!&quot;
<br>
...
<br>
<p><p><p>Is it a known problem ?
<br>
&nbsp;
<br>
&nbsp;Fabrice BOYRIE
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22677.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22675.php">Gus Correa: "Re: [OMPI users] OPEN MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22678.php">Reuti: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
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
