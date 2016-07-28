<?
$subject_val = "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 01:13:35 2013" -->
<!-- isoreceived="20131114061335" -->
<!-- sent="Thu, 14 Nov 2013 15:14:02 +0900" -->
<!-- isosent="20131114061402" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646" -->
<!-- id="OF78B97B22.2DF12776-ON49257C23.0021E436-49257C23.0022332E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5FFF0A6B-CFB0-4C85-AC8A-B19A8CC05EC6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Segmentation%20fault%20in%20oob_tcp.c%20of	openmpi-1.7.4a1r29646"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-14 01:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22988.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22988.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph!
<br>
<p>I didn't know that function of cups-per-proc.
<br>
As fas as I know, it didn't work in openmpi-1.6.x like that.
<br>
It was just 4 cores binding...
<br>
<p>Today I don't have much time and I'll check it tomorrow.
<br>
And thank you again for checking oversubscription problem.
<br>
<p>tmishima
<br>
<p><p><span class="quotelev1">&gt; Guess I don't see why modifying the allocation is required - we have
</span><br>
mapping options that should support such things. If you specify the total
<br>
number of procs you want, and cpus-per-proc=4, it should
<br>
<span class="quotelev1">&gt; do the same thing I would think. You'd get 2 procs on the 8 slot nodes, 8
</span><br>
on the 32 proc nodes, and up to 6 on the 64 slot nodes (since you specified
<br>
np=16). So I guess I don't understand the issue.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, if NPROCS=8 (and you verified that by printing it out, not
</span><br>
just assuming wc -l got that value), then it shouldn't think it is
<br>
oversubscribed. I'll take a look under a slurm allocation as
<br>
<span class="quotelev1">&gt; that is all I can access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2013, at 7:23 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our cluster consists of three types of nodes. They have 8, 32
</span><br>
<span class="quotelev2">&gt; &gt; and 64 slots respectively. Since the performance of each core is
</span><br>
<span class="quotelev2">&gt; &gt; almost same, mixed use of these nodes is possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Furthremore, in this case, for hybrid application with openmpi+openmp,
</span><br>
<span class="quotelev2">&gt; &gt; the modification of hostfile is necesarry as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=1:ppn=32+4:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev2">&gt; &gt; modify $PBS_NODEFILE pbs_hosts # 64 lines are condensed to 16 lines
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -hostfile pbs_hosts -np 16 -cpus-per-proc 4 -x OMP_NUM_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; Myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's why I want to do that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course I know, If I quit mixed use, -npernode is better for this
</span><br>
<span class="quotelev2">&gt; &gt; purpose.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (The script I showed you first is just a simplified one to clarify the
</span><br>
<span class="quotelev2">&gt; &gt; problem.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tmishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why do it the hard way? I'll look at the FAQ because that definitely
</span><br>
<span class="quotelev2">&gt; &gt; isn't a recommended thing to do - better to use -host to specify the
</span><br>
<span class="quotelev2">&gt; &gt; subset, or just specify the desired mapping using all the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; various mappers we provide.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 13, 2013, at 6:39 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry for cross-post.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nodefile is very simple which consists of 8 lines:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node08
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Therefore, NPROCS=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My aim is to modify the allocation as you pointed out. According to
</span><br>
<span class="quotelev2">&gt; &gt; Openmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; FAQ,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; proper subset of the hosts allocated to the Torque / PBS Pro job
</span><br>
should
<br>
<span class="quotelev2">&gt; &gt; be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; allowed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Please - can you answer my question on script2? What is the value of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; NPROCS?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Why would you want to do it this way? Are you planning to modify the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; allocation?? That generally is a bad idea as it can confuse the
</span><br>
system
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Nov 13, 2013, at 5:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Since what I really want is to run script2 correctly, please let us
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; concentrate script2.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm not an expert of the inside of openmpi. What I can do is just
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; obsabation
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; from the outside. I doubt these lines are strange, especially the
</span><br>
<span class="quotelev2">&gt; &gt; last
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:rr: mapping job [56581,1]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Starting with 1 nodes in list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Filtering thru apps
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Removing node node08 slots 0
</span><br>
<span class="quotelev2">&gt; &gt; inuse
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; These lines come from this part of orte_rmaps_base_get_target_nodes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in rmaps_base_support_fns.c:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      } else if (node-&gt;slots &lt;= node-&gt;slots_inuse &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ORTE_GET_MAPPING_DIRECTIVE(policy))) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          /* remove the node as fully used */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                               &quot;%s Removing node %s slots %d inuse
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; %d&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                               ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                               node-&gt;name, node-&gt;slots, node-&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; slots_inuse));
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          opal_list_remove_item(allocated_nodes, item);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          OBJ_RELEASE(item);  /* &quot;un-retain&quot; it */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I wonder why node-&gt;slots and node-&gt;slots_inuse is 0, which I can
</span><br>
read
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; from the above line &quot;Removing node node08 slots 0 inuse 0&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Or I'm not sure but
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;else if (node-&gt;slots &lt;= node-&gt;slots_inuse &amp;&amp;&quot; should be
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;else if (node-&gt;slots &lt; node-&gt;slots_inuse &amp;&amp;&quot; ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, the node08 has 8 slots but the process I run is also 8.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Therefore, I think it should allow this allocation. Is that
</span><br>
right?
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Correct
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; My question is why scritp1 works and script2 does not. They are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; almost same.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #SCRITP1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -report-bindings -bind-to core Myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #SCRIPT2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; -bind-to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; This version is not only reading the PBS allocation, but also
</span><br>
<span class="quotelev2">&gt; &gt; invoking
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the hostfile filter on top of it. Different code path. I'll take a
</span><br>
<span class="quotelev2">&gt; &gt; look
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; it should still match up assuming NPROCS=8. Any
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; possibility that it is a different number? I don't recall, but
</span><br>
isn't
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; there some extra lines in the nodefile - e.g., comments?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I guess here's my confusion. If you are using only one node, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node has 8 allocated slots, then we will not allow you to run
</span><br>
more
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; than
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processes on that node unless you specifically provide
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the --oversubscribe flag. This is because you are operating in a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; managed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; environment (in this case, under Torque), and so we treat the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; allocation as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mandatory&quot; by default.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I suspect that is the issue here, in which case the system is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; behaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; it should.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is the above accurate?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It has nothing to do with LAMA as you aren't using that mapper.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How many nodes are in this allocation?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 13, 2013, at 4:06 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph, this is an additional information.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the main part of output by adding &quot;-mca
</span><br>
<span class="quotelev2">&gt; &gt; rmaps_base_verbose
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 50&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm
</span><br>
creating
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; map
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm only
</span><br>
HNP
<br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps: mapping job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps: creating new map for job
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:ppr: job [56581,1] not using
</span><br>
<span class="quotelev2">&gt; &gt; ppr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] rmaps:seq mapping job
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:seq: job [56581,1] not using
</span><br>
<span class="quotelev2">&gt; &gt; seq
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:resilient: cannot perform
</span><br>
<span class="quotelev2">&gt; &gt; initial
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; map
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job [56581,1] - no fault groups
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:mindist: job [56581,1] not
</span><br>
<span class="quotelev2">&gt; &gt; using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mindist
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] mca:rmaps:rr: mapping job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Starting with 1 nodes in
</span><br>
<span class="quotelev2">&gt; &gt; list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Filtering thru apps
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:26952] [[56581,0],0] Removing node node08
</span><br>
slots
<br>
<span class="quotelev2">&gt; &gt; 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; inuse 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From this result, I guess it's related to oversubscribe.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So I added &quot;-oversubscribe&quot; and rerun, then it worked well as
</span><br>
<span class="quotelev2">&gt; &gt; show
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; below:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting with 1 nodes in
</span><br>
<span class="quotelev2">&gt; &gt; list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Filtering thru apps
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019]     node: node08 daemon: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting bookmark at node
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting at node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr: mapping by slot for job
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [56774,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; slots 1 num_procs 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot node node08 is full -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; skipping
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot job [56774,1] is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; oversubscribed -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; performing second pass
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot adding up to 8 procs
</span><br>
to
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: computing vpids by slot
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; job
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [56774,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 0 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 1 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 2 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 3 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 4 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 5 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 6 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 7 to
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think something is wrong with treatment of oversubscription,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; related to &quot;#3893: LAMA mapper has problems&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm...looks like we aren't getting your allocation. Can you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rerun
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; add -mca ras_base_verbose 50?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2013, at 11:30 PM, tmishima_at_[hidden]
</span><br>
wrote:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of &quot;-mca plm_base_verbose 5&quot;.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [rsh]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[INVALID],INVALID] plm:rsh_lookup on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; agent /usr/bin/rsh path NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [rsh]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Skipping
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [slurm].
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; priority to 75
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Selected
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [tm]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: initial bias
</span><br>
<span class="quotelev2">&gt; &gt; 23573
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodename
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hash 85176670
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: final jobfam
</span><br>
<span class="quotelev2">&gt; &gt; 59480
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:receive start
</span><br>
<span class="quotelev2">&gt; &gt; comm
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt; &gt; creating
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; map
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm only
</span><br>
<span class="quotelev2">&gt; &gt; HNP
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; All nodes which are allocated for this job are already
</span><br>
filled.
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here, openmpi's configuration is as follows:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7.4a1-pgi13.10 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --disable-vt \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-debug \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Okey, I can help you. Please give me some time to report
</span><br>
the
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; output.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can try, but I have no way of testing Torque any more -
</span><br>
so
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; all
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is a code review. If you can build --enable-debug and add
</span><br>
<span class="quotelev2">&gt; &gt; -mca
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; plm_base_verbose 5 to your cmd line, I'd appreciate seeing
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; output.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2013, at 9:58 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for your quick response.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to report one more regressive issue about Torque
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; support
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646, which might be related to &quot;#3893:
</span><br>
<span class="quotelev2">&gt; &gt; LAMA
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mapper
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; has problems&quot; I reported a few days ago.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The script below does not work with
</span><br>
openmpi-1.7.4a1r29646,
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; although it worked with openmpi-1.7.3 as I told you
</span><br>
before.
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS}
</span><br>
<span class="quotelev2">&gt; &gt; -report-bindings
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -bind-to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I drop &quot;-machinefile pbs_hosts -np ${NPROCS} &quot;, then
</span><br>
it
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since this happens without lama request, I guess it's not
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in lama itself. Anyway, please look
</span><br>
into this issue as
<br>
<span class="quotelev2">&gt; &gt; well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Done - thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2013, at 7:35 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear openmpi developers,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I got a segmentation fault in traial use of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; built
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PGI13.10 as shown below:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ mpirun -np 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings mPre
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 2 bound to socket 0
</span><br>
[core
<br>
<span class="quotelev2">&gt; &gt; 4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]]: [././././B/B][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 3 bound to socket 1
</span><br>
[core
<br>
<span class="quotelev2">&gt; &gt; 6
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././././.][B/B/./././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 0 bound to socket 0
</span><br>
[core
<br>
<span class="quotelev2">&gt; &gt; 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 1 bound to socket 0
</span><br>
[core
<br>
<span class="quotelev2">&gt; &gt; 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ gdb mpirun
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; core.23082
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Core was generated by `mpirun -np 4 -cpus-per-proc 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mPre'.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 631             peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00002b5f861ca20b in recv_handler (sd=1778385023,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flags=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cbdata=0x8eb06a00007fff25) at ./oob_tcp.c:760
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00002b5f848eb06a in
</span><br>
<span class="quotelev2">&gt; &gt; event_process_active_single_queue
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x5f848eb27000007f, activeq=0x848eb27000007fff)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./event.c:1366
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00002b5f848eb270 in event_process_active
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x5f848eb84900007f)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./event.c:1435
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00002b5f848eb849 in
</span><br>
<span class="quotelev2">&gt; &gt; opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x4077a000007f, flags=32767) at ./event.c:1645
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00000000004077a0 in orterun (argc=7,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./orterun.c:1030
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00000000004067fb in main (argc=7,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./main.c:13
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The line 627 in orte/mca/oob/tcp/oob_tcp.c is
</span><br>
apparently
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unnecessary,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; causes the segfault.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 624      /* lookup the corresponding process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; */&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 625      peer = mca_oob_tcp_peer_lookup(mod, &amp;hdr-&gt;
</span><br>
<span class="quotelev2">&gt; &gt; origin);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 626      if (NULL == peer) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 627          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 628          opal_output_verbose(OOB_TCP_DEBUG_CONNECT,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 629                              &quot;%s
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mca_oob_tcp_recv_connect:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection from new peer&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 630                              ORTE_NAME_PRINT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 631          peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 632          peer-&gt;mod = mod;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 633          peer-&gt;name = hdr-&gt;origin;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 634          peer-&gt;state = MCA_OOB_TCP_ACCEPTING;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 635          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 636          if (OPAL_SUCCESS !=
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_hash_table_set_value_uint64
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (&amp;mod-&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; peers, (*ui64), peer)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 637              OBJ_RELEASE(peer);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 638              return;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 639          }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please fix this mistake in the next release.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22988.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22988.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22990.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
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
