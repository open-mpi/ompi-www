<?
$subject_val = "[OMPI users] SGE error: executing task of job 22966 failed:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 15:04:11 2008" -->
<!-- isoreceived="20080403190411" -->
<!-- sent="Thu, 3 Apr 2008 12:04:05 -0700" -->
<!-- isosent="20080403190405" -->
<!-- name="Korambath, Prakashan" -->
<!-- email="ppk_at_[hidden]" -->
<!-- subject="[OMPI users] SGE error: executing task of job 22966 failed:" -->
<!-- id="43F64E86355A744E9D51506B6C6783B9021AE855_at_EM2.ad.ucla.edu" -->
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
<strong>Subject:</strong> [OMPI users] SGE error: executing task of job 22966 failed:<br>
<strong>From:</strong> Korambath, Prakashan (<em>ppk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 15:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Reply:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>&nbsp;&nbsp;I just compiled OpenMPI version 1.2.5 with the option
<br>
<p><p>./configure --prefix=/u/local/mpi/openmpi/1.2.5 --with-openib=/usr/local  --enable-static --disable-shared CC=icc CXX=icpc F77=ifort FC=ifort --with-sge 
<br>
<p>on a X86_64 machine with Infiniband Interconnect and OFED software and CentOS 5 OS 
<br>
<p>Everything works fine on command line job submission, but when I submit through SGE 6.1U3 I am getting following error
<br>
<p>error: executing task of job 23081 failed: 
<br>
[n99:01442] ERROR: A daemon on node n99 failed to start as expected.
<br>
[n99:01442] ERROR: There may be more information available from
<br>
[n99:01442] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[n99:01442] ERROR: If the problem persists, please restart the
<br>
[n99:01442] ERROR: Grid Engine PE job
<br>
[n99:01442] ERROR: The daemon exited unexpectedly with status 1.
<br>
<p><p>In my command script for SGE I have
<br>
#$ -pe orte 2
<br>
<p><p>/u/local/mpi/openmpi/1.2.5/bin/mpiexec -n 2 -machinefile $TMPDIR/nodefile  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/u/home2/ppk/MPI/C/executablename  &gt;&amp; output
<br>
<p><p><p>n99:/work/23081.1.campus.q {1002}$ cat nodefile 
<br>
n99  slots=1
<br>
n15  slots=1
<br>
<p><p>n99:/work/23081.1.campus.q {1003}$ qconf -sp orte
<br>
pe_name           orte
<br>
slots             360
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $round_robin
<br>
control_slaves    TRUE
<br>
job_is_first_task TRUE
<br>
urgency_slots     min
<br>
<p><p>I am combing through the archives to look for similar errors.  I have seen some of it, but no satisfactory answer. Anyone knows why?
<br>
<p><p><p>i02:/u/local/mpi/openmpi/1.2.5/bin {1049}$ ./ompi_info | grep tm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
<br>
<p>I also tried pre-relese 1.2.6rc3 same results.
<br>
<p><p>Prakashan
<br>
<p><p>&nbsp;&nbsp;
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>Previous message:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Reply:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
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
