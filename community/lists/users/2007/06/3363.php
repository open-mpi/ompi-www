<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 06:17:17 2007" -->
<!-- isoreceived="20070605101717" -->
<!-- sent="Tue, 05 Jun 2007 06:16:39 -0400" -->
<!-- isosent="20070605101639" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues running a basic program with spawn" -->
<!-- id="s664ffe7.005_at_n6mcgw16.cchmc.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Issues running a basic program with spawn" -->
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
<strong>Date:</strong> 2007-06-05 06:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3362.php">Aaron Thompson: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4 -- solved"</a>
<li><strong>Maybe in reply to:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry about that. Two lines got cut out from the program. Here is the
<br>
full program and error messages again. No Resource Manager involved,
<br>
just ssh/rsh.
<br>
<p>Hostfile contains
<br>
<p>bmi-opt2-01
<br>
bmi-opt2-02
<br>
bmi-opt2-03
<br>
bmi-opt2-04
<br>
<p>############################
<br>
#include&lt;string.h&gt;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             tag = 0;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             array_of_errcodes[10];
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MASTER : spawning 3 slaves ... \n&quot;);
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
#################################
<br>
<p>prakash_at_bmi-opt2-01:~/thesis/CS/Samples/x86_64&gt; mpirun -np 1 --pernode
<br>
--prefix /usr/local/openmpi-1.2 --hostfile machinefile ./master1
<br>
MASTER : spawning 3 slaves ... 
<br>
src is (null) and orte type is 0
<br>
[bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
dss/dss_copy.c at line 43
<br>
[bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
gpr_replica_put_get_fn.c at line 410
<br>
[bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_registry_fns.c at line 612
<br>
[bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_map_job.c at line 93
<br>
[bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rmaps_base_receive.c at line 139
<br>
mpirun: killing job...
<br>
<p>mpirun noticed that job rank 0 with PID 3532 on node bmi-opt2-01 exited
<br>
on signal 15 (Terminated). 
<br>
<p>Thanks,
<br>
Prakash
<br>
<p><span class="quotelev3">&gt;&gt;&gt; rhc_at_[hidden] 06/03/07 9:31 PM &gt;&gt;&gt;
</span><br>
Hi Prakash
<br>
<p>Are you sure the code you provided here is the one generating the output
<br>
you
<br>
attached? I don't see this message anywhere in your code:
<br>
<p>MASTER : spawning 3 slaves ...
<br>
<p>and it certainly isn't anything we generate. Also, your output implies
<br>
you
<br>
are in some kind of loop, yet your code contains only a single
<br>
comm_spawn.
<br>
<p>Could you please clarify?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 6/3/07 5:50 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version - Open MPI 1.2.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a simple program as below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include&lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         int             tag = 0;
</span><br>
<span class="quotelev1">&gt;         int             my_rank;
</span><br>
<span class="quotelev1">&gt;         int             num_proc;
</span><br>
<span class="quotelev1">&gt;         char            message_0[] = &quot;hello slave, i'm your master&quot;;
</span><br>
<span class="quotelev1">&gt;         char            message_1[50];
</span><br>
<span class="quotelev1">&gt;         char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev1">&gt;         int             num;
</span><br>
<span class="quotelev1">&gt;         MPI_Status      status;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm        inter_comm;
</span><br>
<span class="quotelev1">&gt;         MPI_Info        info;
</span><br>
<span class="quotelev1">&gt;         int             arr[1];
</span><br>
<span class="quotelev1">&gt;         int             rc1;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev1">&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm,
</span><br>
&amp;status);
<br>
<span class="quotelev1">&gt;         printf(&quot;MASTER : message received : %s\n&quot;, message_1);
</span><br>
<span class="quotelev1">&gt;         MPI_Send(master_data, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When this is run, all I get is
</span><br>
<span class="quotelev2">&gt;&gt; ~/thesis/CS/Samples/x86_64&gt; mpirun -np 4 --pernode --hostfile
</span><br>
<span class="quotelev1">&gt; machinefile --prefix /usr/local/openmpi-1.2 ./master1
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; src is (null) and orte type is 0
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; dss/dss_copy.c at line 43
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; gpr_replica_put_get_fn.c at line 410
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_registry_fns.c at line 612
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 93
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_receive.c at line 139
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 25447 on node bmi-opt2-01
</span><br>
exited
<br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is wrong with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3362.php">Aaron Thompson: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4 -- solved"</a>
<li><strong>Maybe in reply to:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
