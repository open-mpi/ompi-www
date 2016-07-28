<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 14:43:25 2013" -->
<!-- isoreceived="20131125194325" -->
<!-- sent="Mon, 25 Nov 2013 13:42:52 -0600" -->
<!-- isosent="20131125194252" -->
<!-- name="David Whitaker" -->
<!-- email="whitaker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="5293A83C.7070700_at_cray.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEB6781B.45D39%knteran_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> David Whitaker (<em>whitaker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 14:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23056.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23040.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I'd like to point out that Cray doesn't run a Work Load Manager (WLM)
<br>
&nbsp;&nbsp;&nbsp;on the compute nodes. So if you use PBS or Torque/Moab, your job
<br>
&nbsp;&nbsp;&nbsp;ends up on the login node. You have to use something like &quot;aprun&quot;
<br>
&nbsp;&nbsp;&nbsp;or &quot;ccmrun&quot; to launch the job on the compute nodes.
<br>
&nbsp;&nbsp;&nbsp;Unless &quot;mpirun&quot; or &quot;mpiexec&quot; is Cray aware, it is trying to
<br>
&nbsp;&nbsp;&nbsp;launch processes on the login or MOM node.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I've only run OpenMPI linked codes in CCM (Cray Cluster
<br>
&nbsp;&nbsp;&nbsp;Compatability) mode. On a system with PBS/Torque/Moab, I use:
<br>
<p>&nbsp;&nbsp;&nbsp;qsub -I -lgres=ccm -lmppwidth=32 -lmppnppn=16
<br>
<p>&nbsp;&nbsp;&nbsp;This gives me an interactivePBS/Torque/Moab session:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I then do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) cd $PBS_O_WORKDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) module load ccm # gets access to ccmrun command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) setenv PATH /lus/scratch/whitaker/OpenMPI/bin:$PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) setenv LD_LIBRARY_PATH /lus/scratch/whitaker/OpenMPI/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) \rm -rf hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6) cat $PBS_NODEFILE &gt; hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7) ccmrun /lus/scratch/whitaker/OpenMPI/bin/mpirun --mca plm ^tm --mca ras 
<br>
^tm --mca btl openib,sm,self  -np 32 -machinefile hosts ./hello
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you are running under Torque/Moab, OpenMPI will attempt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to use the Torque/Moab API to launch the job. This won't work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;since Cray does not run a Torque/Moab MOM process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on the compute nodes. Hence, you have to turn off OpenMPI's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attempt to use Torque/Moab.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI has a version that speaks uGNI natively on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cray. I have no experience with that.
<br>
<p>ccmrun /lus/scratch/whitaker/OpenMPI/bin/mpirun --mca plm ^tm --mca ras ^tm -np 
<br>
32 -machinefile hosts ./hello
<br>
&nbsp;&nbsp;Hello World!, I am 0 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 1 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 2 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 3 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 4 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 5 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 6 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 7 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 8 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 9 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 10 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 11 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 12 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 13 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 14 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 15 of 32 (NodeID=nid00056)
<br>
&nbsp;&nbsp;Hello World!, I am 16 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 17 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 18 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 21 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 19 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 20 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 22 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 23 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 24 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 25 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 26 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 27 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 28 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 29 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 30 of 32 (NodeID=nid00057)
<br>
&nbsp;&nbsp;Hello World!, I am 31 of 32 (NodeID=nid00057)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hope this helps,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p><p><p>On 11/23/2013 05:27 PM, Teranishi, Keita wrote:
<br>
<span class="quotelev1">&gt; Here is the module environment, and I allocate interactive node by &quot;qsub -I 
</span><br>
<span class="quotelev1">&gt; -lmppwidth=32 -lmppnppn=16.&quot;
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;   1) modules/3.2.6.7
</span><br>
<span class="quotelev1">&gt;   2) craype-network-gemini
</span><br>
<span class="quotelev1">&gt;   3) cray-mpich2/5.6.4
</span><br>
<span class="quotelev1">&gt;   4) atp/1.6.3
</span><br>
<span class="quotelev1">&gt;   5) xe-sysroot/4.1.40
</span><br>
<span class="quotelev1">&gt;   6) switch/1.0-1.0401.36779.2.72.gem
</span><br>
<span class="quotelev1">&gt;   7) shared-root/1.0-1.0401.37253.3.50.gem
</span><br>
<span class="quotelev1">&gt;   8) pdsh/2.26-1.0401.37449.1.1.gem
</span><br>
<span class="quotelev1">&gt;   9) nodehealth/5.0-1.0401.38460.12.18.gem
</span><br>
<span class="quotelev1">&gt;  10) lbcd/2.1-1.0401.35360.1.2.gem
</span><br>
<span class="quotelev1">&gt;  11) hosts/1.0-1.0401.35364.1.115.gem
</span><br>
<span class="quotelev1">&gt;  12) configuration/1.0-1.0401.35391.1.2.gem
</span><br>
<span class="quotelev1">&gt;  13) ccm/2.2.0-1.0401.37254.2.142
</span><br>
<span class="quotelev1">&gt;  14) audit/1.0.0-1.0401.37969.2.32.gem
</span><br>
<span class="quotelev1">&gt;  15) rca/1.0.0-2.0401.38656.2.2.gem
</span><br>
<span class="quotelev1">&gt;  16) dvs/1.8.6_0.9.0-1.0401.1401.1.120
</span><br>
<span class="quotelev1">&gt;  17) csa/3.0.0-1_2.0401.37452.4.50.gem
</span><br>
<span class="quotelev1">&gt;  18) job/1.5.5-0.1_2.0401.35380.1.10.gem
</span><br>
<span class="quotelev1">&gt;  19) xpmem/0.1-2.0401.36790.4.3.gem
</span><br>
<span class="quotelev1">&gt;  20) gni-headers/2.1-1.0401.5675.4.4.gem
</span><br>
<span class="quotelev1">&gt;  21) dmapp/3.2.1-1.0401.5983.4.5.gem
</span><br>
<span class="quotelev1">&gt;  22) pmi/4.0.1-1.0000.9421.73.3.gem
</span><br>
<span class="quotelev1">&gt;  23) ugni/4.0-1.0401.5928.9.5.gem
</span><br>
<span class="quotelev1">&gt;  24) udreg/2.3.2-1.0401.5929.3.3.gem
</span><br>
<span class="quotelev1">&gt;  25) xt-libsci/12.0.00
</span><br>
<span class="quotelev1">&gt;  26) xt-totalview/8.12.0
</span><br>
<span class="quotelev1">&gt;  27) totalview-support/1.1.5
</span><br>
<span class="quotelev1">&gt;  28) gcc/4.7.2
</span><br>
<span class="quotelev1">&gt;  29) xt-asyncpe/5.22
</span><br>
<span class="quotelev1">&gt;  30) eswrap/1.0.8
</span><br>
<span class="quotelev1">&gt;  31) craype-mc8
</span><br>
<span class="quotelev1">&gt;  32) PrgEnv-gnu/4.1.40
</span><br>
<span class="quotelev1">&gt;  33) moab/5.4.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In interactive mode (as well as batch mode), &quot;aprun --np 32&quot; can run my 
</span><br>
<span class="quotelev1">&gt; OpenMPI code.
</span><br>
<span class="quotelev1">&gt; aprun -n 32 ./cpi
</span><br>
<span class="quotelev1">&gt; Process 5 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 7 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 2 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 0 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 13 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 10 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 3 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 1 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 6 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 4 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 15 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 9 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 12 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 8 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 11 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 14 of 32 is on nid00015
</span><br>
<span class="quotelev1">&gt; Process 29 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 22 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 17 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 28 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 31 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 26 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 30 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 16 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 25 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 24 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 21 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 20 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 27 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 19 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 18 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; Process 23 of 32 is on nid00014
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1415926544231265, Error is 0.0000000008333334
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.004645
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I have with openmpi.
</span><br>
<span class="quotelev1">&gt; mpiexec --bind-to-core  --mca plm_base_strip_prefix_from_node_names 0 -np 32 ./cpi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 32 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;   ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Saturday, November 23, 2013 2:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca 
</span><br>
<span class="quotelev1">&gt; parameters through aprun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that you aren't doing the allocation correctly - since you are 
</span><br>
<span class="quotelev1">&gt; using qsub, can I assume you have Moab as your scheduler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aprun should be forwarding the envars - do you see them if you just run &quot;aprun 
</span><br>
<span class="quotelev1">&gt; -n 1 printenv&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2013, at 2:13 PM, Teranishi, Keita &lt;knteran_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:knteran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed OpenMPI on our small XE6 using the configure options under 
</span><br>
<span class="quotelev2">&gt;&gt; /contrib directory.  It appears it is working fine, but it ignores MCA 
</span><br>
<span class="quotelev2">&gt;&gt; parameters (set in env var).  So I switched to mpirun (in OpenMPI) and it can 
</span><br>
<span class="quotelev2">&gt;&gt; handle MCA parameters somehow.  However,  mpirun fails to allocate process by 
</span><br>
<span class="quotelev2">&gt;&gt; cores.  For example, I allocated 32 cores (on 2 nodes) by &quot;qsub 
</span><br>
<span class="quotelev2">&gt;&gt; --lmppwidth=32 --lmppnppn=16&quot;, mpirun recognizes it as 2 slots.    Is it 
</span><br>
<span class="quotelev2">&gt;&gt; possible to mpirun to handle mluticore nodes of XE6 properly or is there any 
</span><br>
<span class="quotelev2">&gt;&gt; options to handle MCA parameters for aprun?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev2">&gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev2">&gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
David Whitaker, Ph.D.                              whitaker_at_[hidden]
Aerospace CFD Specialist                        phone: (651)605-9078
ISV Applications/Cray Inc                         fax: (651)605-9001
CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23056.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23040.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
