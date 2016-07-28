<?
$subject_val = "[OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 02:36:45 2008" -->
<!-- isoreceived="20080226073645" -->
<!-- sent="Mon, 25 Feb 2008 23:36:38 -0800" -->
<!-- isosent="20080226073638" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="[OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)" -->
<!-- id="28bb77d30802252336v6da04f81xd6ea8d3faf264477_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)<br>
<strong>From:</strong> Steven Truong (<em>midair77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-26 02:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Reply:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Reply:</strong> <a href="5079.php">Aurélien Bouteiller: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear, all.  We just finished installing the first batch of nodes with
<br>
the following configurations.
<br>
Machines: Dual Quad core AMD 2350 + 16 Gig of RAMs
<br>
OS + Apps: Rocks 4.3 + Torque (2.1.8-1) + Maui (3.2.6p19-1) + Openmpi
<br>
(1.1.1-8) + VASP
<br>
Interconnections:  Gigabit Ethernet ports + Extreme Summit x450a
<br>
<p>We were able to compile VASP + Openmpi + ACML and ran a bunch of
<br>
tests.  However, for all the tests that we ran a _single_ job on ONE
<br>
node (1/2/4/8 core jobs) the performances of VASP jobs scaled well
<br>
like what we expected.
<br>
<p>The problems have surfaced when we tried to run VASP jobs on the same
<br>
node (like 2 4-cores jobs on 1 node) then we would see the performance
<br>
degraded around a factor of 2.  A sample VASP 4 cores test run on a
<br>
single node (with no other jobs) would take closed to 900 seconds and
<br>
for this same job, if we ran 2 instances of the same jobs on a single
<br>
node, would would see around 1700-1800 seconds/job. On the compute
<br>
nodes, I used top command and saw that all 8 threads were running
<br>
(~100 %CPU) and  the loads were around 8.0  and a little bit up to
<br>
8.5.
<br>
<p>I thought that processor and/or memory affinity needed to specify:
<br>
&nbsp;#ompi_info | grep affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1.1)
<br>
<p>and in my job.txt file for qsub, I modified to include mpi_paffinity_alone:
<br>
....
<br>
mpiexec --mca mpi_paffinity_alone 1  --np $NPROCS vaspmpi_barcelona
<br>
....
<br>
<p>However, with or without mpi_paffinity_alone, the performances still
<br>
sucks pretty bad and are not acceptable.  With mpi_paffinity_alone
<br>
set, the performances were worse since as we observed with top command
<br>
that some threads were idled a great deal of times. We also tried to
<br>
run jobs without using qsub and PBS and used mpirun directly on the
<br>
nodes, and the performance scaled well like running jobs on an
<br>
isolated node.  Weird??  What Torque + Maui could cause such problems?
<br>
<p>I am just wondering, what I have mis-configured my cluster: torque?
<br>
vasp? maui? openmpi?  Without the scaling issue, when jobs run with
<br>
qsub and PBS, then things are great.
<br>
<p>My users's .bashrc have these 2 lines:
<br>
export OMP_NUM_THREADS=1
<br>
export LD_LIBRARY_PATH=/opt/acml4.0.1/gfortran64/lib
<br>
<p>and
<br>
<p># ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 1024
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 4096
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) unlimited
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 135168
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p>My Torque's nodes file has such a simple entry like this:
<br>
<p>compute-0-0.local np=4
<br>
<p>My Maui's setup is a very simple one.
<br>
<p>Please give you advices and suggestions on how to resolve these
<br>
performance issues.
<br>
<p>Thank you very much.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Reply:</strong> <a href="5078.php">Steven Truong: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
<li><strong>Reply:</strong> <a href="5079.php">Aurélien Bouteiller: "Re: [OMPI users] Performance do not scale at all when run jobs on same single node (Rocks, AMD Barcelona, Torque, Maui, Vasp, Openmpi, Gigabit Ethernet)"</a>
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
