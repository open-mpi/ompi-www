<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 19:59:52 2013" -->
<!-- isoreceived="20130320235952" -->
<!-- sent="Wed, 20 Mar 2013 16:59:44 -0700" -->
<!-- isosent="20130320235944" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="CF30472F-B281-4039-801C-E918283D00E5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF4E949F30.FA9246CA-ON49257B34.00815928-49257B34.0081F8FC_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 19:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21574.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You obviously have some MCA params set somewhere:
<br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A deprecated MCA parameter value was specified in an MCA parameter
</span><br>
<span class="quotelev1">&gt; file.  Deprecated MCA parameters should be avoided; they may disappear
</span><br>
<span class="quotelev1">&gt; in future releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Deprecated parameter: orte_rsh_agent
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Check your environment for anything with OMPI_MCA_xxx, and your default MCA parameter file to see what has been specified.
<br>
<p>The allocation looks okay - I'll have to look for other debug flags you can set. Meantime, can you please add --enable-debug to your configure cmd line and rebuild?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mar 20, 2013, at 4:39 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a result of rerun with --display-allocation.
</span><br>
<span class="quotelev1">&gt; I set OMP_NUM_THREADS=1 to make the problem clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. As far as I checked, these 2 cases are OK(no problem).
</span><br>
<span class="quotelev1">&gt; (1)mpirun -v -np $NPROCS-x OMP_NUM_THREADS --display-allocation
</span><br>
<span class="quotelev1">&gt; ~/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt; (2)mpirun -v -x OMP_NUM_THREADS --display-allocation ~/Ducom/testbed/mPre
</span><br>
<span class="quotelev1">&gt; m02-ld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Script File:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -A tmishima
</span><br>
<span class="quotelev1">&gt; #PBS -N Ducom-run
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev1">&gt; mpirun -v -np $NPROCS -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt; --display-allocation ~/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A deprecated MCA parameter value was specified in an MCA parameter
</span><br>
<span class="quotelev1">&gt; file.  Deprecated MCA parameters should be avoided; they may disappear
</span><br>
<span class="quotelev1">&gt; in future releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Deprecated parameter: orte_rsh_agent
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostfile:  pbs_hosts
</span><br>
<span class="quotelev1">&gt;  node:      node06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've submitted a patch to fix the Torque launch issue - just some
</span><br>
<span class="quotelev1">&gt; leftover garbage that existed at the time of the 1.7.0 branch and didn't
</span><br>
<span class="quotelev1">&gt; get removed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the hostfile issue, I'm stumped as I can't see how the problem would
</span><br>
<span class="quotelev1">&gt; come about. Could you please rerun your original test and add
</span><br>
<span class="quotelev1">&gt; &quot;--display-allocation&quot; to your cmd line? Let's see if it is
</span><br>
<span class="quotelev2">&gt;&gt; correctly finding the original allocation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2013, at 5:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your comments. I understand your advice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our script used to be --npernode type as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I told before, our cluster consists of nodes having 4, 8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 32 cores, although it used to be homogeneous at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starting time. Furthermore, since performance of each core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is almost same, a mixed use of nodes with different number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of cores is possible, just like #PBS -l nodes=1:ppn=32+4:ppn=8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --npernode type is not applicable to such a mixed use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's why I'd like to continue to use modified hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By the way, the problem I reported to Jeff yesterday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was that openmpi-1.7 with torque is something wrong,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because it caused error against such a simple case as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shown below, which surprised me. Now, the problem is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limited to modified hostfile, I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=4:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 ./my_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Tetsuya
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your script that edits $PBS_NODEFILE into a separate hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is very similar to some that I used here for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hybrid OpenMP+MPI programs on older versions of OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I haven't tried this in 1.6.X,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it looks like you did and it works also.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I haven't tried 1.7 either.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since we run production machines,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I try to stick to the stable versions of OMPI (even numbered:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.6.X, 1.4.X, 1.2.X).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe you can get the same effect even if you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't edit your $PBS_NODEFILE and let OMPI use it as is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Say, if you choose carefully the values in your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=?:ppn=?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $OMP_NUM_THREADS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and use an mpiexec with --npernode or --cpus-per-proc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For instance, for twelve MPI processes, with two threads each,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on nodes with eight cores each, I would try
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (but I haven't tried!):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #PBS -l nodes=3:ppn=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export $OMP_NUM_THREADS=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -np 12 -npernode 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or perhaps more tightly:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -np 12 --report-bindings --bind-to-core --cpus-per-proc 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 03/19/2013 03:12 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Reuti and Gus,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you for your comments.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our cluster is a little bit heterogeneous, which has nodes with 4, 8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I used 8-core nodes for &quot;-l nodes=4:ppn=8&quot; and 4-core nodes for &quot;-l
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes=2:ppn=4&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (strictly speaking, Torque picked up proper nodes.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As I mentioned before, I usually use openmpi-1.6.x, which has no
</span><br>
<span class="quotelev1">&gt; troble
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; against that kind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of use. I encountered the issue when I was evaluating openmpi-1.7 to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when we could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; move on to it, although we have no positive reason to do that at this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; moment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As Gus pointed out, I use a script file as shown below for a
</span><br>
<span class="quotelev1">&gt; practical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of openmpi-1.6.x.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=2:ppn=32  # even &quot;-l nodes=1:ppn=32+4:ppn=8&quot; works fine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modify $PBS_NODEFILE pbs_hosts # 64 lines are condensed to 16 lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -hostfile pbs_hosts -np 16 -cpus-per-proc 4 -report-bindings \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -x OMP_NUM_THREADS ./my_program  # 32-core node has 8 numanodes,
</span><br>
<span class="quotelev1">&gt; 8-core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node has 2 numanodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It works well under the combination of openmpi-1.6.x and Torque. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem is just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.7's behavior.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mpiexec offers you a number of possibilities that you could try:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bynode,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --pernode,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --npernode,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bysocket,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --bycore,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --cpus-per-proc,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --cpus-per-rank,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --rankfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and more.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Most likely one or more of them will fit your needs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There are also associated flags to bind processes to cores,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to sockets, etc, to report the bindings, and so on.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Check the mpiexec man page for details.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Nevertheless, I am surprised that modifying the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $PBS_NODEFILE doesn't work for you in OMPI 1.7.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have done this many times in older versions of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Would it work for you to go back to the stable OMPI 1.6.X,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or does it lack any special feature that you need?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 03/19/2013 03:00 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I didn't have much time to test this morning. So, I checked it
</span><br>
<span class="quotelev1">&gt; again
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; now. Then, the trouble seems to depend on the number of nodes to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This works(nodes&lt;   4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This causes error(nodes&gt;= 4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 8 ./my_program&amp;&amp;     #PBS -l nodes=4:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oy; that's weird.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm afraid we're going to have to wait for Ralph to answer why
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; happening -- sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 18, 2013, at 4:45 PM,&lt;tmishima_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Correa and Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for your comments. I quickly checked your suggestion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As a result, my simple example case worked well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But, practical case that more than 1 process was allocated to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; below did not work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The error message is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mation is unknown in file rml_oob_send.c at line 316
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] unable to find address for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [[30666,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mation is unknown in file base/grpcomm_base_rollup.c at line 123
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is our openmpi configuration:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7rc8-pgi12.9 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mar 17, 2013, at 10:55 PM, Gustavo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correa&lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In your example, have you tried not to modify the node file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch two mpi processes with mpiexec, and request a &quot;-bynode&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; distribution of processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This should work in 1.7, too (I use these kinds of options with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the time).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, we should probably verify that the hostfile
</span><br>
<span class="quotelev1">&gt; functionality
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; batch jobs hasn't been broken in 1.7, too, because I'm pretty
</span><br>
<span class="quotelev1">&gt; sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; what you described should work.  However, Ralph, our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; run-time guy, is on vacation this week.  There might be a delay
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking into this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21571.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21573.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21574.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
