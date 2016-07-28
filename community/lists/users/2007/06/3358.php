<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun  3 07:50:45 2007" -->
<!-- isoreceived="20070603115045" -->
<!-- sent="Sun, 03 Jun 2007 07:50:11 -0400" -->
<!-- isosent="20070603115011" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] Issues running a basic program with spawn" -->
<!-- id="s66272cf.074_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-03 07:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="3357.php">Jayanta Roy: "[OMPI users] openmpi-1.2.2 installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3363.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Version - Open MPI 1.2.1.
<br>
<p>I have a simple program as below:
<br>
<p>#include&lt;string.h&gt;
<br>
#include&lt;stdlib.h&gt;
<br>
#include&lt;stdio.h&gt;
<br>
#include&quot;mpi.h&quot;
<br>
<p>void
<br>
main(int argc, char **argv)
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             tag = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             my_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             num_proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char            message_0[] = &quot;hello slave, i'm your master&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char            message_1[50];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char            master_data[] = &quot;slaves to work&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status      status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm        inter_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info        info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             arr[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             rc1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
<br>
MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MASTER : message received : %s\n&quot;, message_1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(master_data, 50, MPI_CHAR,0 , tag, inter_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p>When this is run, all I get is 
<br>
<span class="quotelev1">&gt;~/thesis/CS/Samples/x86_64&gt; mpirun -np 4 --pernode --hostfile
</span><br>
machinefile --prefix /usr/local/openmpi-1.2 ./master1
<br>
MASTER : spawning 3 slaves ... 
<br>
MASTER : spawning 3 slaves ... 
<br>
MASTER : spawning 3 slaves ... 
<br>
MASTER : spawning 3 slaves ... 
<br>
src is (null) and orte type is 0
<br>
[bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
dss/dss_copy.c at line 43
<br>
[bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
gpr_replica_put_get_fn.c at line 410
<br>
[bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_registry_fns.c at line 612
<br>
[bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_map_job.c at line 93
<br>
[bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_receive.c at line 139
<br>
mpirun: killing job...
<br>
<p>mpirun noticed that job rank 0 with PID 25447 on node bmi-opt2-01 exited
<br>
on signal 15 (Terminated). 
<br>
3 additional processes aborted (not shown)
<br>
<p>Any idea what is wrong with this.
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="3357.php">Jayanta Roy: "[OMPI users] openmpi-1.2.2 installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3360.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3363.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
