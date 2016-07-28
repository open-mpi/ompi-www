<?
$subject_val = "[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 00:42:55 2012" -->
<!-- isoreceived="20120905044255" -->
<!-- sent="Wed, 5 Sep 2012 10:12:50 +0530" -->
<!-- isosent="20120905044250" -->
<!-- name="San B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs" -->
<!-- id="CAC2jn-TssW6VP_7rSuuH4R-qZo-hC2D87=_W=-LhcwX-Y6ucNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs<br>
<strong>From:</strong> San B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 00:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20123.php">mariana Vargas: "[OMPI users] python-mrmpi() failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Reply:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.6.1 is installed on Rocks-5.5 Linux cluster with intel
<br>
compilers and OFED-1.5.3. A sample Helloworld MPI program gives following
<br>
warning message:
<br>
<p><p>/mpi/openmpi/1.6.1/intel/bin/mpirun -np 4 ./mpi
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              masternode
<br>
&nbsp;&nbsp;Registerable memory:     4096 MiB
<br>
&nbsp;&nbsp;Total memory:            32151 MiB
<br>
--------------------------------------------------------------------------
<br>
Greetings: 1 of 4 from the node masternode
<br>
Greetings: 2 of 4 from the node masternode
<br>
Greetings: 3 of 4 from the node masternode
<br>
Greetings: 0 of 4 from the node masternode
<br>
[masternode:29820] 3 more processes have sent help message
<br>
help-mpi-btl-openib.txt / reg mem limit low
<br>
[masternode:29820] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>The ulimit parameters also set to unlimited:
<br>
<p>]# ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 278528
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) unlimited
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 278528
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p><p>The file /etc/securoty/limits.conf contains following lines:
<br>
<p>* soft memlock unlimited
<br>
* hard memlock unlimited
<br>
<p>But why still OpenMPI is throwing warning message wrt registered memory.
<br>
<p>Thanks in advance
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20123.php">mariana Vargas: "[OMPI users] python-mrmpi() failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Reply:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
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
