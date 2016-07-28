<?
$subject_val = "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 00:25:58 2013" -->
<!-- isoreceived="20131115052558" -->
<!-- sent="Thu, 14 Nov 2013 21:24:57 -0800" -->
<!-- isosent="20131115052457" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646" -->
<!-- id="D3D16D98-ACD8-499E-B6CA-788DC548EF76_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFE7CA5D42.9E2D90A4-ON49257C24.000E901B-49257C24.001098E1_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 00:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22994.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22994.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="23000.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed it should - most puzzling. I'll try playing with it on slurm using sbatch and see if I get the same behavior. Offhand, I can't see why the difference would exist unless somehow the script itself is taking one of the execution slots, and somehow Torque is accounting for it.
<br>
<p>Will have to explore and get back to you on a new email thread.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Nov 14, 2013, at 7:01 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's no problem that you let it lie until the problem becomes serious
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, this is just an information for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with your opinion that the problem will lie in the modified
</span><br>
<span class="quotelev1">&gt; hostfile.
</span><br>
<span class="quotelev1">&gt; But exactly speaking, it's related to just adding -hostfile option to
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; in Torque script, I think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To make it clear and to prove I never modify hostfile given by Torque,
</span><br>
<span class="quotelev1">&gt; I change the script like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ cat myscript.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile $PBS_NODEFILE -report-bindings -bind-to core Myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here, $PBS_NODEFILE is the variable prepared by Torque, which contains
</span><br>
<span class="quotelev1">&gt; allocated nodes.
</span><br>
<span class="quotelev1">&gt; Furthermore, I removed &quot;-np $NPROCS&quot; to use the number given by Torque.
</span><br>
<span class="quotelev1">&gt; Therefore, this means that I exactly use hostfile and nprocs given by
</span><br>
<span class="quotelev1">&gt; Torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, you have to submit the job to produce the problem, because direct run
</span><br>
<span class="quotelev1">&gt; could work.
</span><br>
<span class="quotelev1">&gt; The output of this job is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ qsub myscript.sh
</span><br>
<span class="quotelev1">&gt; 7999.manage.cluster
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ cat myscript.sh.o7999
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; node08
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, it still causes the oversbuscribed problem.
</span><br>
<span class="quotelev1">&gt; I know that -hostfile option is unnecessary in Torque script, but it should
</span><br>
<span class="quotelev1">&gt; run even with this harmless option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tmishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 3:25 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked -cpus-per-proc in openmpi-1.7.4a1r29646.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works well as I want to do, which can adjust nprocs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of each nodes dividing by number of threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think my problem is solved so far using -cpus-per-proc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thank you very mush.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Happy that works for you!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding oversbuscribed problem, I checked NPROCS was really 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by outputing the number.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SCRIPT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo mpirun -machinefile pbs_hosts -np $NPROCS -report-bindings
</span><br>
<span class="quotelev1">&gt; -bind-to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core Myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np $NPROCS -report-bindings -bind-to
</span><br>
<span class="quotelev1">&gt; core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUTPUT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np 8 -report-bindings -bind-to core
</span><br>
<span class="quotelev1">&gt; Myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By the way, how did you verify the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like for me that you run the job directly from cmd line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rhc_at_bend001 svn-trunk]$ mpirun -n 3 --bind-to core --cpus-per-proc 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --report-bindings -hostfile hosts hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my environment, such a direct run without Torque script also works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Really? Your above cmd line is exactly the same as mine - a hardcoded
</span><br>
<span class="quotelev1">&gt; value for np, passing in a machinefile (or hostfile - same thing) while in
</span><br>
<span class="quotelev1">&gt; a matching allocation. The only difference I can see
</span><br>
<span class="quotelev2">&gt;&gt; is that your hostfile may conflict with the detected allocation since you
</span><br>
<span class="quotelev1">&gt; modified it. I suspect that is causing the confusion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, as I already told you, my problem itself was solved. So I think
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority to check is very low.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect there really isn't a bug here - the problem most likely lies in
</span><br>
<span class="quotelev1">&gt; the modified hostfile working against the detected allocation. I'll let it
</span><br>
<span class="quotelev1">&gt; lie for now and see if something reveals itself at
</span><br>
<span class="quotelev2">&gt;&gt; a later date.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I verified that this works fine under a slurm allocation of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes, each with 12 slots. I filled the node without getting an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;oversbuscribed&quot; error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rhc_at_bend001 svn-trunk]$ mpirun -n 3 --bind-to core --cpus-per-proc 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --report-bindings -hostfile hosts hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bend001:24318] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BB/BB/BB/BB/../..][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bend001:24318] MCW rank 1 bound to socket 0[core 4[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [core 5[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../BB/BB][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bend001:24318] MCW rank 2 bound to socket 1[core 8[hwt 0-1]], socket
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev1">&gt; 0-1]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [../../../../../..][../../BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rhc_at_bend001 svn-trunk]$ cat hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bend001 slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only way I get the &quot;out of resources&quot; error is if I ask for more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes than I have slots - i.e., I give it the hosts file as shown,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ask for 13 or more processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW: note one important issue with cpus-per-proc, as shown above.
</span><br>
<span class="quotelev1">&gt; Because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I specified 4 cpus/proc, and my sockets each have 6 cpus, one of my
</span><br>
<span class="quotelev1">&gt; procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wound up being split across the two sockets (2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores on each). That's about the worst situation you can have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So a word of caution: it is up to the user to ensure that the mapping
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;good&quot;. We just do what you asked us to do.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 8:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guess I don't see why modifying the allocation is required - we have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapping options that should support such things. If you specify the
</span><br>
<span class="quotelev1">&gt; total
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of procs you want, and cpus-per-proc=4, it should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do the same thing I would think. You'd get 2 procs on the 8 slot
</span><br>
<span class="quotelev1">&gt; nodes, 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the 32 proc nodes, and up to 6 on the 64 slot nodes (since you
</span><br>
<span class="quotelev1">&gt; specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; np=16). So I guess I don't understand the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regardless, if NPROCS=8 (and you verified that by printing it out, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just assuming wc -l got that value), then it shouldn't think it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribed. I'll take a look under a slurm allocation as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is all I can access.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 7:23 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our cluster consists of three types of nodes. They have 8, 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and 64 slots respectively. Since the performance of each core is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; almost same, mixed use of these nodes is possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Furthremore, in this case, for hybrid application with openmpi+openmp,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the modification of hostfile is necesarry as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=1:ppn=32+4:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modify $PBS_NODEFILE pbs_hosts # 64 lines are condensed to 16 lines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -hostfile pbs_hosts -np 16 -cpus-per-proc 4 -x OMP_NUM_THREADS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's why I want to do that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course I know, If I quit mixed use, -npernode is better for this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; purpose.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (The script I showed you first is just a simplified one to clarify the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why do it the hard way? I'll look at the FAQ because that definitely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isn't a recommended thing to do - better to use -host to specify the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subset, or just specify the desired mapping using all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; various mappers we provide.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 6:39 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry for cross-post.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nodefile is very simple which consists of 8 lines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Therefore, NPROCS=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My aim is to modify the allocation as you pointed out. According to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAQ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proper subset of the hosts allocated to the Torque / PBS Pro job
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allowed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please - can you answer my question on script2? What is the value of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NPROCS?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why would you want to do it this way? Are you planning to modify the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation?? That generally is a bad idea as it can confuse the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 5:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since what I really want is to run script2 correctly, please let us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concentrate script2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not an expert of the inside of openmpi. What I can do is just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; obsabation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the outside. I doubt these lines are strange, especially the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; last
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:rr: mapping job [56581,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Starting with 1 nodes in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Filtering thru apps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Removing node node08 slots 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inuse
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These lines come from this part of orte_rmaps_base_get_target_nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in rmaps_base_support_fns.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    } else if (node-&gt;slots &lt;= node-&gt;slots_inuse &amp;&amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_DIRECTIVE(policy))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        /* remove the node as fully used */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             &quot;%s Removing node %s slots %d inuse
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; %d&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             node-&gt;name, node-&gt;slots, node-&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots_inuse));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        opal_list_remove_item(allocated_nodes, item);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        OBJ_RELEASE(item);  /* &quot;un-retain&quot; it */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wonder why node-&gt;slots and node-&gt;slots_inuse is 0, which I can read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the above line &quot;Removing node node08 slots 0 inuse 0&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or I'm not sure but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;else if (node-&gt;slots &lt;= node-&gt;slots_inuse &amp;&amp;&quot; should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;else if (node-&gt;slots &lt; node-&gt;slots_inuse &amp;&amp;&quot; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, the node08 has 8 slots but the process I run is also 8.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Therefore, I think it should allow this allocation. Is that right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My question is why scritp1 works and script2 does not. They are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; almost same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SCRITP1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -report-bindings -bind-to core Myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SCRIPT2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bind-to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This version is not only reading the PBS allocation, but also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; invoking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hostfile filter on top of it. Different code path. I'll take a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it should still match up assuming NPROCS=8. Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possibility that it is a different number? I don't recall, but isn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there some extra lines in the nodefile - e.g., comments?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess here's my confusion. If you are using only one node, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node has 8 allocated slots, then we will not allow you to run more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes on that node unless you specifically provide
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the --oversubscribe flag. This is because you are operating in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; managed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment (in this case, under Torque), and so we treat the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mandatory&quot; by default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect that is the issue here, in which case the system is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it should.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is the above accurate?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It has nothing to do with LAMA as you aren't using that mapper.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How many nodes are in this allocation?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:06 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, this is an additional information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the main part of output by adding &quot;-mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rmaps_base_verbose
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 50&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm creating
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm only HNP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps: mapping job [56581,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps: creating new map for job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [56581,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:ppr: job [56581,1] not using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ppr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] rmaps:seq mapping job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [56581,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:seq: job [56581,1] not using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seq
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:resilient: cannot perform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job [56581,1] - no fault groups
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:mindist: job [56581,1] not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mindist
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:rr: mapping job [56581,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Starting with 1 nodes in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Filtering thru apps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Removing node node08 slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inuse 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From this result, I guess it's related to oversubscribe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I added &quot;-oversubscribe&quot; and rerun, then it worked well as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; show
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting with 1 nodes in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Filtering thru apps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019]     node: node08 daemon: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting bookmark at node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting at node node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr: mapping by slot for job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [56774,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots 1 num_procs 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot node node08 is full -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; skipping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot job [56774,1] is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscribed -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performing second pass
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot adding up to 8 procs to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: computing vpids by slot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [56774,1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 0 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 1 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 2 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 3 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 4 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 5 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 6 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 7 to node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think something is wrong with treatment of oversubscription,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; related to &quot;#3893: LAMA mapper has problems&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...looks like we aren't getting your allocation. Can you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rerun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add -mca ras_base_verbose 50?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 12, 2013, at 11:30 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the output of &quot;-mca plm_base_verbose 5&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[INVALID],INVALID] plm:rsh_lookup on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; agent /usr/bin/rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [slurm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Skipping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [slurm].
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority to 75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Selected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: initial bias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23573
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodename
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hash 85176670
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: final jobfam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 59480
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:receive start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; creating
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HNP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here, openmpi's configuration is as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7.4a1-pgi13.10 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-tm \&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-vt \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-tp k8-64e&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okey, I can help you. Please give me some time to report the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can try, but I have no way of testing Torque any more - so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a code review. If you can build --enable-debug and add
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plm_base_verbose 5 to your cmd line, I'd appreciate seeing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 12, 2013, at 9:58 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for your quick response.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd like to report one more regressive issue about Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646, which might be related to &quot;#3893:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LAMA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has problems&quot; I reported a few days ago.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The script below does not work with openmpi-1.7.4a1r29646,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; although it worked with openmpi-1.7.3 as I told you before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -report-bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bind-to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I drop &quot;-machinefile pbs_hosts -np ${NPROCS} &quot;, then it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since this happens without lama request, I guess it's not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in lama itself. Anyway, please look into this issue as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Done - thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 12, 2013, at 7:35 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear openmpi developers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got a segmentation fault in traial use of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGI13.10 as shown below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ mpirun -np 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -report-bindings mPre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 2 bound to socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0[core 5[hwt 0]]: [././././B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 3 bound to socket 1[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././././.][B/B/./././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 0 bound to socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 1 bound to socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./.][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage:23082] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage:23082] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage:23082] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage:23082] Failing at address: 0x34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [manage:23082] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ gdb mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core.23082
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Core was generated by `mpirun -np 4 -cpus-per-proc 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -report-bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mPre'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 631             peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00002b5f861ca20b in recv_handler (sd=1778385023,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags=32767,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cbdata=0x8eb06a00007fff25) at ./oob_tcp.c:760
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00002b5f848eb06a in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; event_process_active_single_queue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (base=0x5f848eb27000007f, activeq=0x848eb27000007fff)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at ./event.c:1366
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00002b5f848eb270 in event_process_active
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (base=0x5f848eb84900007f)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at ./event.c:1435
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00002b5f848eb849 in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (base=0x4077a000007f, flags=32767) at ./event.c:1645
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00000000004077a0 in orterun (argc=7,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at ./orterun.c:1030
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00000000004067fb in main (argc=7,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at ./main.c:13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The line 627 in orte/mca/oob/tcp/oob_tcp.c is apparently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unnecessary,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causes the segfault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 624      /* lookup the corresponding process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 625      peer = mca_oob_tcp_peer_lookup(mod, &amp;hdr-&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; origin);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 626      if (NULL == peer) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 627          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 628          opal_output_verbose(OOB_TCP_DEBUG_CONNECT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 629                              &quot;%s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_recv_connect:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection from new peer&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 630                              ORTE_NAME_PRINT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 631          peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 632          peer-&gt;mod = mod;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 633          peer-&gt;name = hdr-&gt;origin;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 634          peer-&gt;state = MCA_OOB_TCP_ACCEPTING;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 635          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 636          if (OPAL_SUCCESS !=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_hash_table_set_value_uint64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (&amp;mod-&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; peers, (*ui64), peer)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 637              OBJ_RELEASE(peer);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 638              return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 639          }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please fix this mistake in the next release.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22994.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22994.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="23000.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
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
