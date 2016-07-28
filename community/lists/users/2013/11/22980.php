<?
$subject_val = "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 19:43:10 2013" -->
<!-- isoreceived="20131114004310" -->
<!-- sent="Thu, 14 Nov 2013 09:43:41 +0900" -->
<!-- isosent="20131114004341" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646" -->
<!-- id="OFF8D27F01.29CA7D2C-ON49257C23.00030E56-49257C23.0003F4A0_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EBBE3F3A-4C61-4B0D-AE20-992A5F39EB20_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-11-13 19:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22979.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22979.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the node08 has 8 slots but the process I run is also 8.
<br>
<p>&nbsp;#PBS -l nodes=node08:ppn=8
<br>
<p>Therefore, I think it should allow this allocation. Is that right?
<br>
<p>My question is why scritp1 works and script2 does not. They are
<br>
almost same.
<br>
<p>#PBS -l nodes=node08:ppn=8
<br>
export OMP_NUM_THREADS=1
<br>
cd $PBS_O_WORKDIR
<br>
cp $PBS_NODEFILE pbs_hosts
<br>
NPROCS=`wc -l &lt; pbs_hosts`
<br>
<p>#SCRITP1
<br>
mpirun -report-bindings -bind-to core Myprog
<br>
<p>#SCRIPT2
<br>
mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings -bind-to core
<br>
Myprog
<br>
<p>tmishima
<br>
<p><span class="quotelev1">&gt; I guess here's my confusion. If you are using only one node, and that
</span><br>
node has 8 allocated slots, then we will not allow you to run more than 8
<br>
processes on that node unless you specifically provide
<br>
<span class="quotelev1">&gt; the --oversubscribe flag. This is because you are operating in a managed
</span><br>
environment (in this case, under Torque), and so we treat the allocation as
<br>
&quot;mandatory&quot; by default.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that is the issue here, in which case the system is behaving as
</span><br>
it should.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the above accurate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2013, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It has nothing to do with LAMA as you aren't using that mapper.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How many nodes are in this allocation?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 13, 2013, at 4:06 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph, this is an additional information.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the main part of output by adding &quot;-mca rmaps_base_verbose
</span><br>
50&quot;.
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps: mapping job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps: creating new map for job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps:ppr: job [56581,1] not using ppr
</span><br>
mapper
<br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] rmaps:seq mapping job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps:seq: job [56581,1] not using seq
</span><br>
mapper
<br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps:resilient: cannot perform initial map
</span><br>
of
<br>
<span class="quotelev3">&gt; &gt;&gt; job [56581,1] - no fault groups
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps:mindist: job [56581,1] not using
</span><br>
mindist
<br>
<span class="quotelev3">&gt; &gt;&gt; mapper
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] mca:rmaps:rr: mapping job [56581,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] Starting with 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] Filtering thru apps
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:26952] [[56581,0],0] Removing node node08 slots 0
</span><br>
inuse 0
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From this result, I guess it's related to oversubscribe.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I added &quot;-oversubscribe&quot; and rerun, then it worked well as show
</span><br>
below:
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting with 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] [[56774,0],0] Filtering thru apps
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] [[56774,0],0] Retained 1 nodes in list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019]     node: node08 daemon: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting bookmark at node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] [[56774,0],0] Starting at node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr: mapping by slot for job [56774,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slots 1 num_procs 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot node node08 is full -
</span><br>
skipping
<br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot job [56774,1] is
</span><br>
oversubscribed -
<br>
<span class="quotelev3">&gt; &gt;&gt; performing second pass
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot working node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:rr:slot adding up to 8 procs to node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: computing vpids by slot for job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [56774,1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 0 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 1 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 2 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 3 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 4 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 5 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 6 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node08.cluster:27019] mca:rmaps:base: assigning rank 7 to node node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think something is wrong with treatment of oversubscription, which
</span><br>
might
<br>
<span class="quotelev3">&gt; &gt;&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; related to &quot;#3893: LAMA mapper has problems&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tmishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmmm...looks like we aren't getting your allocation. Can you rerun
</span><br>
and
<br>
<span class="quotelev3">&gt; &gt;&gt; add -mca ras_base_verbose 50?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Nov 12, 2013, at 11:30 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Here is the output of &quot;-mca plm_base_verbose 5&quot;.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying component
</span><br>
[rsh]
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[INVALID],INVALID] plm:rsh_lookup on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; agent /usr/bin/rsh path NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of component
</span><br>
[rsh]
<br>
<span class="quotelev3">&gt; &gt;&gt; set
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Skipping component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [slurm].
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Querying component
</span><br>
[tm]
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Query of component
</span><br>
[tm]
<br>
<span class="quotelev3">&gt; &gt;&gt; set
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; priority to 75
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] mca:base:select:(  plm) Selected component
</span><br>
[tm]
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: initial bias 23573
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodename
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hash 85176670
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] plm:base:set_hnp_name: final jobfam 59480
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node08.cluster:23573] [[59480,0],0] plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; allocation
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Here, openmpi's configuration is as follows:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7.4a1-pgi13.10 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --disable-vt \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --enable-debug \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Okey, I can help you. Please give me some time to report the
</span><br>
output.
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I can try, but I have no way of testing Torque any more - so all I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; is a code review. If you can build --enable-debug and add -mca
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; plm_base_verbose 5 to your cmd line, I'd appreciate seeing the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; output.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2013, at 9:58 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for your quick response.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to report one more regressive issue about Torque support
</span><br>
of
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646, which might be related to &quot;#3893: LAMA
</span><br>
mapper
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; has problems&quot; I reported a few days ago.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The script below does not work with openmpi-1.7.4a1r29646,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; although it worked with openmpi-1.7.3 as I told you before.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
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
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bind-to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; If I drop &quot;-machinefile pbs_hosts -np ${NPROCS} &quot;, then it works
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Since this happens without lama request, I guess it's not the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in lama itself. Anyway, please look into this issue as well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Done - thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 12, 2013, at 7:35 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear openmpi developers,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I got a segmentation fault in traial use of
</span><br>
openmpi-1.7.4a1r29646
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; built
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PGI13.10 as shown below:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ mpirun -np 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings mPre
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 2 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]]: [././././B/B][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 3 bound to socket 1[core 6[hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././././.][B/B/./././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage.cluster:23082] MCW rank 1 bound to socket 0[core 2[hwt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [manage:23082] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ gdb mpirun core.23082
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Core was generated by `mpirun -np 4 -cpus-per-proc 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mPre'.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 631             peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; sd=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00002b5f861ca20b in recv_handler (sd=1778385023,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flags=32767,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cbdata=0x8eb06a00007fff25) at ./oob_tcp.c:760
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00002b5f848eb06a in event_process_active_single_queue
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x5f848eb27000007f, activeq=0x848eb27000007fff)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./event.c:1366
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00002b5f848eb270 in event_process_active
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x5f848eb84900007f)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./event.c:1435
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00002b5f848eb849 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (base=0x4077a000007f, flags=32767) at ./event.c:1645
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00000000004077a0 in orterun (argc=7, argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./orterun.c:1030
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00000000004067fb in main (argc=7, argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; at ./main.c:13
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The line 627 in orte/mca/oob/tcp/oob_tcp.c is apparently
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; unnecessary,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; causes the segfault.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 624      /* lookup the corresponding process */
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 625      peer = mca_oob_tcp_peer_lookup(mod, &amp;hdr-&gt;origin);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 626      if (NULL == peer) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 627          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 628          opal_output_verbose(OOB_TCP_DEBUG_CONNECT,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 629                              &quot;%s mca_oob_tcp_recv_connect:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection from new peer&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 630                              ORTE_NAME_PRINT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 631          peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 632          peer-&gt;mod = mod;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 633          peer-&gt;name = hdr-&gt;origin;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 634          peer-&gt;state = MCA_OOB_TCP_ACCEPTING;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 635          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 636          if (OPAL_SUCCESS !=
</span><br>
opal_hash_table_set_value_uint64
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (&amp;mod-&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; peers, (*ui64), peer)) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 637              OBJ_RELEASE(peer);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 638              return;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 639          }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please fix this mistake in the next release.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
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
<li><strong>Next message:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22979.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22979.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22981.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
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
