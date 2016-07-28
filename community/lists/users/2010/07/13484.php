<?
$subject_val = "[OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 16:04:06 2010" -->
<!-- isoreceived="20100706200406" -->
<!-- sent="Tue, 6 Jul 2010 13:04:00 -0700 (PDT)" -->
<!-- isosent="20100706200400" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="70424.59517.qm_at_web80803.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 16:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and right now I am just working on getting OpenMPI itself up and running. I have a successful configure and make all install. LD_LIBRARY_PATH and PATH variables were correctly edited. mpirun -np 8 hello_c successfully works on all machines. I have setup my two test machines with DSA key pairs that successfully work with each other.
<br>
<p>The problem comes when I initiate my hostfile to attempt to communicate across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive the following text
 output.
<br>
<p>[machine1:03578] mca: base: components_open: Looking for plm components
<br>
[machine1:03578] mca: base: components_open: opening plm components
<br>
[machine1:03578] mca: base: components_open: found loaded component rsh
<br>
[machine1:03578] mca: base: components_open: component rsh has no register function
<br>
[machine1:03578] mca: base: components_open: component rsh open function successful
<br>
[machine1:03578] mca: base: components_open: found loaded component slurm
<br>
[machine1:03578] mca: base: components_open: component slurm has no register function
<br>
[machine1:03578] mca: base: components_open: component slurm open function successful
<br>
[machine1:03578] mca:base:select: Auto-selecting plm components
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component [rsh]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Query of component [rsh] set priority to 10
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component
 [slurm]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Skipping component [slurm]. Query failed to return a module
<br>
[machine1:03578] mca:base:select:(&#160; plm) Selected component [rsh]
<br>
[machine1:03578] mca: base: close: component slurm closed
<br>
[machine1:03578] mca: base: close: unloading component slurm
<br>
[machine1:03578] mca: base: components_open: Looking for oob components
<br>
[machine1:03578] mca: base: components_open: opening oob components
<br>
[machine1:03578] mca: base: components_open: found loaded component tcp
<br>
[machine1:03578] mca: base: components_open: component tcp has no register function
<br>
[machine1:03578] mca: base: components_open: component tcp open function successful
<br>
Daemon was launched on machine2- beginning to initialize
<br>
[machine2:01962] mca: base: components_open: Looking for oob components
<br>
[machine2:01962] mca: base: components_open: opening oob components
<br>
[machine2:01962] mca: base: components_open:
 found loaded component tcp
<br>
[machine2:01962] mca: base: components_open: component tcp has no register function
<br>
[machine2:01962] mca: base: components_open: component tcp open function successful
<br>
Daemon [[1418,0],1] checking in as pid 1962 on host machine2
<br>
Daemon [[1418,0],1] not using static ports
<br>
<p>At this point the system hangs indefinitely. While running top on the machine2 terminal, I see several things come up briefly. These items are: sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was wondering if sshd needs to be initiated by myuser? It is currently turned off in sshd_config through UsePAM yes. This was setup by the sysadmin but it can be worked around if this is necessary.
<br>
<p>So in summary, mpirun works on each machine individually, but hangs when initiated through a hostfile or with the -host flag. ./configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help is appreciated. Thanks!
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Maybe reply:</strong> <a href="13634.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
