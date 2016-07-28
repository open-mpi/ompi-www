<?
$subject_val = "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 11:46:10 2008" -->
<!-- isoreceived="20080226164610" -->
<!-- sent="Tue, 26 Feb 2008 11:45:55 -0500" -->
<!-- isosent="20080226164555" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)" -->
<!-- id="8FA6CE6E-726D-45E1-AA2B-B31D31FAF1C2_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28bb77d30802252336v6da04f81xd6ea8d3faf264477_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-26 11:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="5077.php">Steven Truong: "[OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that ACML creates threads to fill all the available cores. If  
<br>
you run 2 instances of ACML, it will create twice as many threads as  
<br>
available cores and performances are obviously terrible. You should  
<br>
check the ACML documentation to get the name of the environment  
<br>
variable controling the number of threads ACML creates. As an example  
<br>
GotoBLAS uses GOTO_NUM_THREADS.
<br>
<p>Hope it helps,
<br>
Aurelien
<br>
<p><p><p>Le 26 f&#233;vr. 08 &#224; 02:36, Steven Truong a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Dear, all.  We just finished installing the first batch of nodes with
</span><br>
<span class="quotelev1">&gt; the following configurations.
</span><br>
<span class="quotelev1">&gt; Machines: Dual Quad core AMD 2350 + 16 Gig of RAMs
</span><br>
<span class="quotelev1">&gt; OS + Apps: Rocks 4.3 + Torque (2.1.8-1) + Maui (3.2.6p19-1) + Openmpi
</span><br>
<span class="quotelev1">&gt; (1.1.1-8) + VASP
</span><br>
<span class="quotelev1">&gt; Interconnections:  Gigabit Ethernet ports + Extreme Summit x450a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We were able to compile VASP + Openmpi + ACML and ran a bunch of
</span><br>
<span class="quotelev1">&gt; tests.  However, for all the tests that we ran a _single_ job on ONE
</span><br>
<span class="quotelev1">&gt; node (1/2/4/8 core jobs) the performances of VASP jobs scaled well
</span><br>
<span class="quotelev1">&gt; like what we expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problems have surfaced when we tried to run VASP jobs on the same
</span><br>
<span class="quotelev1">&gt; node (like 2 4-cores jobs on 1 node) then we would see the performance
</span><br>
<span class="quotelev1">&gt; degraded around a factor of 2.  A sample VASP 4 cores test run on a
</span><br>
<span class="quotelev1">&gt; single node (with no other jobs) would take closed to 900 seconds and
</span><br>
<span class="quotelev1">&gt; for this same job, if we ran 2 instances of the same jobs on a single
</span><br>
<span class="quotelev1">&gt; node, would would see around 1700-1800 seconds/job. On the compute
</span><br>
<span class="quotelev1">&gt; nodes, I used top command and saw that all 8 threads were running
</span><br>
<span class="quotelev1">&gt; (~100 %CPU) and  the loads were around 8.0  and a little bit up to
</span><br>
<span class="quotelev1">&gt; 8.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that processor and/or memory affinity needed to specify:
</span><br>
<span class="quotelev1">&gt; #ompi_info | grep affinity
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and in my job.txt file for qsub, I modified to include  
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; mpiexec --mca mpi_paffinity_alone 1  --np $NPROCS vaspmpi_barcelona
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, with or without mpi_paffinity_alone, the performances still
</span><br>
<span class="quotelev1">&gt; sucks pretty bad and are not acceptable.  With mpi_paffinity_alone
</span><br>
<span class="quotelev1">&gt; set, the performances were worse since as we observed with top command
</span><br>
<span class="quotelev1">&gt; that some threads were idled a great deal of times. We also tried to
</span><br>
<span class="quotelev1">&gt; run jobs without using qsub and PBS and used mpirun directly on the
</span><br>
<span class="quotelev1">&gt; nodes, and the performance scaled well like running jobs on an
</span><br>
<span class="quotelev1">&gt; isolated node.  Weird??  What Torque + Maui could cause such problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am just wondering, what I have mis-configured my cluster: torque?
</span><br>
<span class="quotelev1">&gt; vasp? maui? openmpi?  Without the scaling issue, when jobs run with
</span><br>
<span class="quotelev1">&gt; qsub and PBS, then things are great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My users's .bashrc have these 2 lines:
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/opt/acml4.0.1/gfortran64/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 135168
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Torque's nodes file has such a simple entry like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compute-0-0.local np=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Maui's setup is a very simple one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please give you advices and suggestions on how to resolve these
</span><br>
<span class="quotelev1">&gt; performance issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Dr. Aur&#233;lien Bouteiller
Sr. Research Associate - Innovative Computing Laboratory
Suite 350, 1122 Volunteer Boulevard
Knoxville, TN 37996
865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="5077.php">Steven Truong: "[OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
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
