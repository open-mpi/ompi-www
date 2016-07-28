<?
$subject_val = "[OMPI devel] Leopard problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 15:39:32 2008" -->
<!-- isoreceived="20080211203932" -->
<!-- sent="Mon, 11 Feb 2008 15:39:25 -0500" -->
<!-- isosent="20080211203925" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] Leopard problems" -->
<!-- id="EE1CBC31-167F-4CA8-B662-54EA54FA09D6_at_computer.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Leopard problems<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 15:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3186.php">George Bosilca: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
<li><strong>Reply:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Since I upgraded to MacOS X 10.5.1, I've been having problems running  
<br>
MPI programs (using both 1.2.4 and 1.2.5). The symptoms are  
<br>
intermittent (i.e. sometimes the application runs fine), and appear as  
<br>
follows:
<br>
<p>1. One or more of the application processes die (I've see both one and  
<br>
two processes die).
<br>
<p>2. (It appears) that the orted's associated with these application  
<br>
process then spin continually.
<br>
<p>Here is what I see when I run &quot;mpirun -np 4 ./mpitest&quot;:
<br>
<p>12467   ??  Rs     1:26.52 orted --bootproxy 1 --name 0.0.1 -- 
<br>
num_procs 5 --vpid_start 0 --nodename node0 --universe  
<br>
greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
<br>
12468   ??  Rs     1:26.63 orted --bootproxy 1 --name 0.0.2 -- 
<br>
num_procs 5 --vpid_start 0 --nodename node1 --universe  
<br>
greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
<br>
12469   ??  Ss     0:00.04 orted --bootproxy 1 --name 0.0.3 -- 
<br>
num_procs 5 --vpid_start 0 --nodename node2 --universe  
<br>
greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
<br>
12470   ??  Ss     0:00.04 orted --bootproxy 1 --name 0.0.4 -- 
<br>
num_procs 5 --vpid_start 0 --nodename node3 --universe  
<br>
greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.200:56749;tcp://9.67.176.162:56749;tcp:// 
<br>
10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
<br>
12471   ??  S      0:00.05 ./mpitest
<br>
12472   ??  S      0:00.05 ./mpitest
<br>
<p>Killing the mpirun results in:
<br>
<p>$ mpirun -np 4 ./mpitest
<br>
^Cmpirun: killing job...
<br>
<p>^ 
<br>
C 
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpirun is in the process of killing a job, but has detected an
<br>
interruption (probably control-C).
<br>
<p>It is dangerous to interrupt mpirun while it is killing a job (proper
<br>
termination may not be guaranteed).  Hit control-C again within 1
<br>
second if you really want to kill mpirun immediately.
<br>
--------------------------------------------------------------------------
<br>
^Cmpirun: forcibly killing job...
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpirun has exited before it received notification that all
<br>
started processes had terminated.  You should double check and ensure
<br>
that there are no runaway processes still executing.
<br>
--------------------------------------------------------------------------
<br>
<p>At this point, the two spinning orted's are left running, and the only  
<br>
way to kill them is with -9.
<br>
<p>Is anyone else seeing this problem?
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3186.php">George Bosilca: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
<li><strong>Reply:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
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
