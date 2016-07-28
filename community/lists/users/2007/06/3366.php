<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 08:59:02 2007" -->
<!-- isoreceived="20070605125902" -->
<!-- sent="Tue, 05 Jun 2007 06:58:56 -0600" -->
<!-- isosent="20070605125856" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues running a basic program with spawn" -->
<!-- id="C28ABA30.95C6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="s664ffe7.002_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 08:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Maybe in reply to:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I think I know what may be happening. Could you send me:
<br>
<p>1. what Open MPI version you are using?
<br>
<p>2. any MCA parameters you might be setting in your environment (remember
<br>
that we may be picking up some system configuration file for those)
<br>
<p>This isn't related to the problem, but I also note that you are spawning
<br>
&quot;hostname&quot; and then trying to do MPI send/recv with it - I don't think that
<br>
is going to work.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 6/5/07 4:16 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about that. Two lines got cut out from the program. Here is the
</span><br>
<span class="quotelev1">&gt; full program and error messages again. No Resource Manager involved,
</span><br>
<span class="quotelev1">&gt; just ssh/rsh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hostfile contains
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bmi-opt2-01
</span><br>
<span class="quotelev1">&gt; bmi-opt2-02
</span><br>
<span class="quotelev1">&gt; bmi-opt2-03
</span><br>
<span class="quotelev1">&gt; bmi-opt2-04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ############################
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
<span class="quotelev1">&gt;         int             array_of_errcodes[10];
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
<span class="quotelev1">&gt;         printf(&quot;MASTER : spawning 3 slaves ... \n&quot;);
</span><br>
<span class="quotelev1">&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm, &amp;status);
</span><br>
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
<span class="quotelev1">&gt; #################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prakash_at_bmi-opt2-01:~/thesis/CS/Samples/x86_64&gt; mpirun -np 1 --pernode
</span><br>
<span class="quotelev1">&gt; --prefix /usr/local/openmpi-1.2 --hostfile machinefile ./master1
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; src is (null) and orte type is 0
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; dss/dss_copy.c at line 43
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; gpr_replica_put_get_fn.c at line 410
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_registry_fns.c at line 612
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 93
</span><br>
<span class="quotelev1">&gt; [bmi-opt2-01:03527] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_receive.c at line 139
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 3532 on node bmi-opt2-01 exited
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rhc_at_[hidden] 06/03/07 9:31 PM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Prakash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure the code you provided here is the one generating the output
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; attached? I don't see this message anywhere in your code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it certainly isn't anything we generate. Also, your output implies
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; are in some kind of loop, yet your code contains only a single
</span><br>
<span class="quotelev1">&gt; comm_spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please clarify?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/3/07 5:50 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Version - Open MPI 1.2.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a simple program as below:
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;MASTER : send a message to master of slaves ...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(message_0, 50, MPI_CHAR,0 , tag, inter_comm);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Recv(message_1, 50, MPI_CHAR, 0, tag, inter_comm,
</span><br>
<span class="quotelev1">&gt; &amp;status);
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When this is run, all I get is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/thesis/CS/Samples/x86_64&gt; mpirun -np 4 --pernode --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; machinefile --prefix /usr/local/openmpi-1.2 ./master1
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt; MASTER : spawning 3 slaves ...
</span><br>
<span class="quotelev2">&gt;&gt; src is (null) and orte type is 0
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; dss/dss_copy.c at line 43
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; gpr_replica_put_get_fn.c at line 410
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_registry_fns.c at line 612
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_map_job.c at line 93
</span><br>
<span class="quotelev2">&gt;&gt; [bmi-opt2-01:25441] [0,0,0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_receive.c at line 139
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 25447 on node bmi-opt2-01
</span><br>
<span class="quotelev1">&gt; exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is wrong with this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Maybe in reply to:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
