<?
$subject_val = "[OMPI users] performance issue mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 05:35:34 2015" -->
<!-- isoreceived="20150428093534" -->
<!-- sent="Tue, 28 Apr 2015 11:35:28 +0200" -->
<!-- isosent="20150428093528" -->
<!-- name="Steven Vancoillie" -->
<!-- email="steven.vancoillie_at_[hidden]" -->
<!-- subject="[OMPI users] performance issue mpi_init" -->
<!-- id="20150428093527.GB1397_at_lenovo" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] performance issue mpi_init<br>
<strong>From:</strong> Steven Vancoillie (<em>steven.vancoillie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 05:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26800.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Reply:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>I've run into a recurring problem that was addressed before on this
<br>
list, of which subject was &quot;Performance issue of mpirun/mpi_init&quot;.
<br>
I found the original thread here:
<br>
<a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21346">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21346</a>
<br>
<p>My former colleague noted that with OpenMPI version 1.8.1 he got bad
<br>
performance for a simple C program that only did MPI initialization.
<br>
This was apparently addressed in this ticket:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1</a>
<br>
with my colleague noting that this solved the problem and version
<br>
1.8.1 r31402 did not have the problem any more.
<br>
<p>Unfortunately I can't confirm this, as I'm still having performance
<br>
problems with 1.8.4, which (I assume) includes that fix from 1.8.1.
<br>
<p>I decided to independently repeat the tests, so I've written the
<br>
following small Fortran test program &quot;testme.f90&quot;:
<br>
<p>program testme
<br>
call mpi_init(ierr)
<br>
call mpi_finalize(ierr)
<br>
end program
<br>
<p>I then proceeded with 1.6.5, 1.8.1, and 1.8.4 to create a binary:
<br>
/opt/openmpi-1.6.5/bin/mpif90 testme.f90 -o testme-165.exe
<br>
/opt/openmpi-1.8.1/bin/mpif90 testme.f90 -o testme-181.exe
<br>
/opt/openmpi-1.8.4/bin/mpif90 testme.f90 -o testme-184.exe
<br>
<p>Timings were performed with the &quot;time&quot; program, running with 2
<br>
MPI processes on a single node.
<br>
<p>time /opt/openmpi-1.6.5/bin/mpirun -np 2 testme-165.exe
<br>
<p>real0m1.022s
<br>
user0m0.019s
<br>
sys0m0.011s
<br>
<p>As my former colleague noted, using &quot;OMPI_MCA_btl=tcp,self&quot; brings
<br>
down the time to that of other typical MPI implementations:
<br>
<p>export OMPI_MCA_btl=tcp,self
<br>
time /opt/openmpi-1.6.5/bin/mpirun -np 2 testme-165.exe
<br>
<p>real0m0.020s
<br>
user0m0.014s
<br>
sys0m0.014s
<br>
<p>Now, when going to 1.8.1, the timings are better initially, but
<br>
unaffected by the OMPI_MCA_btl setting:
<br>
<p>time /opt/openmpi-1.8.1/bin/mpirun -np 2 testme-181.exe
<br>
<p>real0m0.620s
<br>
user0m0.267s
<br>
sys0m0.253s
<br>
<p>When using version 1.8.4, the timings _are_ indeed better compared to
<br>
1.8.1 (but also not affected by the OMPI_MCA_btl setting):
<br>
<p>time /opt/openmpi-1.8.4/bin/mpirun -np 2 testme-184.exe
<br>
<p>real0m0.376s
<br>
user0m0.170s
<br>
sys0m0.179s
<br>
<p>However, even though there is an improvement over 1.8.1, the
<br>
performance of 1.8.4 is not even close to that of either 1.6.5 (with
<br>
the OMPI_MCA_btl setting) nor the performance of other MPI
<br>
implementations.
<br>
<p>The reason we care about this is that our test suite runs a lot of
<br>
short tests that consists of independent executables that are run
<br>
thousands of times, so each time calling mpi_init. This increases the
<br>
total time of running the entire test suite from around 2-3 hours
<br>
(with MPICH or OpenMPI 1.6.5 with OMPI_MCA_btl=tcp,self) to around
<br>
9 hours with OpenMPI 1.8.4.
<br>
<p>kind regards,
<br>
Steven
<br>
<p><pre>
-- 
Steven Vancoillie
Theoretical Chemistry
Lund University
P.O.B 124
S-221 00 Lund
Sweden
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26800.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Reply:</strong> <a href="26804.php">Ralph Castain: "Re: [OMPI users] performance issue mpi_init"</a>
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
