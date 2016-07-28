<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 10:27:28 2007" -->
<!-- isoreceived="20070605142728" -->
<!-- sent="Tue, 05 Jun 2007 10:27:13 -0400" -->
<!-- isosent="20070605142713" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues running a basic program with spawn" -->
<!-- id="466572C1.5030005_at_cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C28ABA30.95C6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 10:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Andy Georgi: "[OMPI users]  Communication Latency"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...I think I know what may be happening. Could you send me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. what Open MPI version you are using?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Open MPI 1.2.1
<br>
<span class="quotelev1">&gt; 2. any MCA parameters you might be setting in your environment (remember
</span><br>
<span class="quotelev1">&gt; that we may be picking up some system configuration file for those)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
How do I get these?
<br>
<span class="quotelev1">&gt; This isn't related to the problem, but I also note that you are spawning
</span><br>
<span class="quotelev1">&gt; &quot;hostname&quot; and then trying to do MPI send/recv with it - I don't think that
</span><br>
<span class="quotelev1">&gt; is going to work.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I know. I could not start another client code before this. So just 
<br>
wanted to check if /bin/hostname works with the spawn.
<br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks,
<br>
Prakash
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/5/07 4:16 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry about that. Two lines got cut out from the program. Here is the
</span><br>
<span class="quotelev2">&gt;&gt; full program and error messages again. No Resource Manager involved,
</span><br>
<span class="quotelev2">&gt;&gt; just ssh/rsh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hostfile contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bmi-opt2-01
</span><br>
<span class="quotelev2">&gt;&gt; bmi-opt2-02
</span><br>
<span class="quotelev2">&gt;&gt; bmi-opt2-03
</span><br>
<span class="quotelev2">&gt;&gt; bmi-opt2-04
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ############################
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         int             tag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;         int             my_rank;
</span><br>
<span class="quotelev2">&gt;&gt;         int             num_proc;
</span><br>
<span class="quotelev2">&gt;&gt;         char            message_0[] = &quot;hello slave, i'm your master&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         char            message_1[50];
</span><br>
<span class="quotelev2">&gt;&gt;         char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         int             array_of_errcodes[10];
</span><br>
<span class="quotelev2">&gt;&gt;         int             num;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Status      status;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm        inter_comm;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Info        info;
</span><br>
<span class="quotelev2">&gt;&gt;         int             arr[1];
</span><br>
<span class="quotelev2">&gt;&gt;         int             rc1;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;MASTER : spawning 3 slaves ... \n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;MASTER : message received : %s\n&quot;, message_1);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(master_data, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;         exit(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prakash_at_bmi-opt2-01:~/thesis/CS/Samples/x86_64&gt; mpirun -np 1 --pernode
</span><br>
<span class="quotelev2">&gt;&gt; --prefix /usr/local/openmpi-1.2 --hostfile machinefile ./master1
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt; src is (null) and orte type is 0
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; dss/dss_copy.c at line 43
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; gpr_replica_put_get_fn.c at line 410
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_registry_fns.c at line 612
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_map_job.c at line 93
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_receive.c at line 139
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 3532 on node bmi-opt2-01 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rhc_at_[hidden] 06/03/07 9:31 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt; Hi Prakash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure the code you provided here is the one generating the output
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; attached? I don't see this message anywhere in your code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and it certainly isn't anything we generate. Also, your output implies
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; are in some kind of loop, yet your code contains only a single
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please clarify?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/3/07 5:50 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version - Open MPI 1.2.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a simple program as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             tag = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             my_rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             num_proc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            message_0[] = &quot;hello slave, i'm your master&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            message_1[50];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             num;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status      status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm        inter_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Info        info;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             arr[1];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int             rc1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;MASTER : message received : %s\n&quot;, message_1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Send(master_data, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         exit(0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When this is run, all I get is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~/thesis/CS/Samples/x86_64&gt; mpirun -np 4 --pernode --hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile --prefix /usr/local/openmpi-1.2 ./master1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src is (null) and orte type is 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dss/dss_copy.c at line 43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpr_replica_put_get_fn.c at line 410
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_registry_fns.c at line 612
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 93
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_receive.c at line 139
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 25447 on node bmi-opt2-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; exited
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what is wrong with this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prakash
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Andy Georgi: "[OMPI users]  Communication Latency"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
