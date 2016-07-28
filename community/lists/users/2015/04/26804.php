<?
$subject_val = "Re: [OMPI users] performance issue mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 10:57:28 2015" -->
<!-- isoreceived="20150428145728" -->
<!-- sent="Tue, 28 Apr 2015 07:57:24 -0700" -->
<!-- isosent="20150428145724" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue mpi_init" -->
<!-- id="6751834C-EC3D-43B7-AACC-68DC7A89649B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150428093527.GB1397_at_lenovo" -->
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
<strong>Subject:</strong> Re: [OMPI users] performance issue mpi_init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 10:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26801.php">Steven Vancoillie: "[OMPI users] performance issue mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what I get on my CentOS7 system using the 1.8.5 about to be released:
<br>
<p>When built as a debug build:
<br>
<p>07:41:34  (v1.8) /home/common/openmpi/ompi-release/orte/test/mpi$ time mpirun -host bend001 -n 2 ./mpi_no_op
<br>
<p>real	0m0.120s
<br>
user	0m0.064s
<br>
sys	0m0.090s
<br>
07:42:05  (v1.8) /home/common/openmpi/ompi-release/orte/test/mpi$ time mpirun -host bend001 -n 2 -mca btl tcp,self ./mpi_no_op
<br>
<p>real	0m0.114s
<br>
user	0m0.065s
<br>
sys	0m0.079s
<br>
<p><p>When built with -O2:
<br>
<p>07:52:35  (v1.8) /home/common/openmpi/ompi-release/orte/test/mpi$ time mpirun -host bend001 -n 2 ./mpi_no_op
<br>
<p>real	0m0.113s
<br>
user	0m0.050s
<br>
sys	0m0.095s
<br>
07:52:40  (v1.8) /home/common/openmpi/ompi-release/orte/test/mpi$ time mpirun -host bend001 -n 2 --mca btl tcp,self ./mpi_no_op
<br>
<p>real	0m0.110s
<br>
user	0m0.054s
<br>
sys	0m0.086s
<br>
<p>Note that I ran this on only one node per your report. However, one difference between 1.6 and 1.8 is that the latter will start daemons on every node in its allocation prior to launching the job, while the former only started daemons on the nodes it was going to use. We do that so we can sense the hardware topology of each node and thus provide a wider range of mapping options - in production, it is unusual for someone to request more nodes than they intend to use.
<br>
<p>If you have a hostfile (or allocation of some kind) that is larger than one node, then the extra time is likely being used by this DVM-style launch. You might try adding the -host flag (as I did above) to cut that down.
<br>
<p><p><span class="quotelev1">&gt; On Apr 28, 2015, at 2:35 AM, Steven Vancoillie &lt;steven.vancoillie_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've run into a recurring problem that was addressed before on this
</span><br>
<span class="quotelev1">&gt; list, of which subject was &quot;Performance issue of mpirun/mpi_init&quot;.
</span><br>
<span class="quotelev1">&gt; I found the original thread here:
</span><br>
<span class="quotelev1">&gt; <a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21346">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21346</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My former colleague noted that with OpenMPI version 1.8.1 he got bad
</span><br>
<span class="quotelev1">&gt; performance for a simple C program that only did MPI initialization.
</span><br>
<span class="quotelev1">&gt; This was apparently addressed in this ticket:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1</a>
</span><br>
<span class="quotelev1">&gt; with my colleague noting that this solved the problem and version
</span><br>
<span class="quotelev1">&gt; 1.8.1 r31402 did not have the problem any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I can't confirm this, as I'm still having performance
</span><br>
<span class="quotelev1">&gt; problems with 1.8.4, which (I assume) includes that fix from 1.8.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decided to independently repeat the tests, so I've written the
</span><br>
<span class="quotelev1">&gt; following small Fortran test program &quot;testme.f90&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program testme
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then proceeded with 1.6.5, 1.8.1, and 1.8.4 to create a binary:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.6.5/bin/mpif90 testme.f90 -o testme-165.exe
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.1/bin/mpif90 testme.f90 -o testme-181.exe
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4/bin/mpif90 testme.f90 -o testme-184.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Timings were performed with the &quot;time&quot; program, running with 2
</span><br>
<span class="quotelev1">&gt; MPI processes on a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time /opt/openmpi-1.6.5/bin/mpirun -np 2 testme-165.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real0m1.022s
</span><br>
<span class="quotelev1">&gt; user0m0.019s
</span><br>
<span class="quotelev1">&gt; sys0m0.011s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As my former colleague noted, using &quot;OMPI_MCA_btl=tcp,self&quot; brings
</span><br>
<span class="quotelev1">&gt; down the time to that of other typical MPI implementations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_btl=tcp,self
</span><br>
<span class="quotelev1">&gt; time /opt/openmpi-1.6.5/bin/mpirun -np 2 testme-165.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real0m0.020s
</span><br>
<span class="quotelev1">&gt; user0m0.014s
</span><br>
<span class="quotelev1">&gt; sys0m0.014s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, when going to 1.8.1, the timings are better initially, but
</span><br>
<span class="quotelev1">&gt; unaffected by the OMPI_MCA_btl setting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time /opt/openmpi-1.8.1/bin/mpirun -np 2 testme-181.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real0m0.620s
</span><br>
<span class="quotelev1">&gt; user0m0.267s
</span><br>
<span class="quotelev1">&gt; sys0m0.253s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using version 1.8.4, the timings _are_ indeed better compared to
</span><br>
<span class="quotelev1">&gt; 1.8.1 (but also not affected by the OMPI_MCA_btl setting):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time /opt/openmpi-1.8.4/bin/mpirun -np 2 testme-184.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real0m0.376s
</span><br>
<span class="quotelev1">&gt; user0m0.170s
</span><br>
<span class="quotelev1">&gt; sys0m0.179s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, even though there is an improvement over 1.8.1, the
</span><br>
<span class="quotelev1">&gt; performance of 1.8.4 is not even close to that of either 1.6.5 (with
</span><br>
<span class="quotelev1">&gt; the OMPI_MCA_btl setting) nor the performance of other MPI
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason we care about this is that our test suite runs a lot of
</span><br>
<span class="quotelev1">&gt; short tests that consists of independent executables that are run
</span><br>
<span class="quotelev1">&gt; thousands of times, so each time calling mpi_init. This increases the
</span><br>
<span class="quotelev1">&gt; total time of running the entire test suite from around 2-3 hours
</span><br>
<span class="quotelev1">&gt; (with MPICH or OpenMPI 1.6.5 with OMPI_MCA_btl=tcp,self) to around
</span><br>
<span class="quotelev1">&gt; 9 hours with OpenMPI 1.8.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt; Steven
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steven Vancoillie
</span><br>
<span class="quotelev1">&gt; Theoretical Chemistry
</span><br>
<span class="quotelev1">&gt; Lund University
</span><br>
<span class="quotelev1">&gt; P.O.B 124
</span><br>
<span class="quotelev1">&gt; S-221 00 Lund
</span><br>
<span class="quotelev1">&gt; Sweden
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26801.php">http://www.open-mpi.org/community/lists/users/2015/04/26801.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26805.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26801.php">Steven Vancoillie: "[OMPI users] performance issue mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
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
