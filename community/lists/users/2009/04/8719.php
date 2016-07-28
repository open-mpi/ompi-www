<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 12:38:02 2009" -->
<!-- isoreceived="20090401163802" -->
<!-- sent="Thu, 2 Apr 2009 00:37:57 +0800" -->
<!-- isosent="20090401163757" -->
<!-- name="PN" -->
<!-- email="poknam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="92daa7bf0904010937m3bd7d31al897a435b87f4faae_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C805F2A8-A2D2-4646-A4BF-393823A14D76_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour of SGE+OpenMPI<br>
<strong>From:</strong> PN (<em>poknam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 12:37:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>$ cat hpl-8cpu-test.sge
<br>
#!/bin/bash
<br>
#
<br>
#$ -N HPL_8cpu_GB
<br>
#$ -pe orte 8
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -S /bin/bash
<br>
#$ -V
<br>
#
<br>
/opt/openmpi-gcc/bin/mpirun --display-allocation --display-map -v -np
<br>
$NSLOTS --host node0001,node0002 hostname
<br>
<p><p>$ cat HPL_8cpu_GB.o46
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: node0001  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: Name: node0002.v5cluster.com    Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: node0001  Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [10982,1] Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
<p>I'm not sure why node0001 miss the domain name, is this related?
<br>
However the result is correct when I run &quot;qconf -sel&quot;
<br>
<p>$ qconf -sel
<br>
node0001.v5cluster.com
<br>
node0002.v5cluster.com
<br>
<p><p><p><p><p>2009/4/1 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Rolf has correctly reminded me that display-allocation occurs prior to host
</span><br>
<span class="quotelev1">&gt; filtering, so you will see all of the allocated nodes. You'll see the impact
</span><br>
<span class="quotelev1">&gt; of the host specifications in display-map,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion - thanks to Rolf for pointing it out.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2009, at 7:40 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As an FYI: you can debug allocation issues more easily by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --display-allocation --do-not-launch -n 1 foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will read the allocation, do whatever host filtering you specify with
</span><br>
<span class="quotelev2">&gt;&gt; -host and -hostfile options, report out the result, and then terminate
</span><br>
<span class="quotelev2">&gt;&gt; without trying to launch anything. I found it most useful for debugging
</span><br>
<span class="quotelev2">&gt;&gt; these situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to know where the procs would have gone, then you can do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --display-allocation --display-map --do-not-launch -n 8 foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, the #procs you specify needs to be the number you actually
</span><br>
<span class="quotelev2">&gt;&gt; wanted so that the mapper will properly run. However, the executable can be
</span><br>
<span class="quotelev2">&gt;&gt; bogus and nothing will actually launch. It's the closest you can come to a
</span><br>
<span class="quotelev2">&gt;&gt; dry run of a job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 1, 2009, at 7:10 AM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It turns out that the use of --host and --hostfile act as a filter of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which nodes to run on when you are running under SGE.  So, listing them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several times does not affect where the processes land.  However, this still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not explain why you are seeing what you are seeing.  One thing you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try is to add this to the mpirun command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca ras_gridengine_verbose 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will provide some additional information as to what Open MPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing as nodes and slots from SGE.  (Is there any chance that node0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually has 8 slots?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just retried on my cluster of 2 CPU sparc solaris nodes.  When I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with np=2, the two MPI processes will all land on a single node, because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that node has two slots.  When I go up to np=4, then they move on to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other node.  The --host acts as a filter to where they should run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In terms of the using &quot;IB bonding&quot;, I do not know what that means
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly.  Open MPI does stripe over multiple IB interfaces, so I think the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; answer is yes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS:  Here is what my np=4 job script looked like.  (I just changed np=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the other run)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-0 148 =&gt;more run.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #! /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -V
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N Job1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -l h_rt=00:20:00      # Run time (hh:mm:ss) - 10 min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $NSLOTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/SUNWhpc/HPC8.2/sun/bin/mpirun -mca ras_gridengine_verbose 100 -v -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 -host burl-ct-280r-1,burl-ct-280r-0 -mca btl self,sm,tcp hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the output (somewhat truncated)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-0 150 =&gt;more Job1.o199
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [burl-ct-280r-2:22132] ras:gridengine: JOB_ID: 199
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [burl-ct-280r-2:22132] ras:gridengine: PE_HOSTFILE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /ws/ompi-tools/orte/sge/sge6_2u1/default/spool/burl-ct-280r-2/active_jobs/199.1/pe_hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [..snip..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-0: PE_HOSTFILE shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-1: PE_HOSTFILE shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [..snip..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-280r-0 151 =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/31/09 22:39, PN wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've created another PE and changed the submission script, explicitly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the hostname with &quot;--host&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However the result is the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # qconf -sp orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots              8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cat hpl-8cpu-test.sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -N HPL_8cpu_GB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # pdsh -a ps ax --width=200|grep hpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18901 ?        S      0:00 /opt/openmpi-gcc/bin/mpirun -v -np
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 --host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18902 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18903 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18904 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18905 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18906 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18907 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18908 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node0002: 18909 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any hint to debug this situation?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, if I have 2 IB ports in each node, which IB bonding was done, will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI automatically benefit from the double bandwidth?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf.Vandevaart_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On 03/31/09 11:43, PN wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I have 2 compute nodes for testing, each node has a single quad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      core CPU.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Here is my submission script and PE config:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #!/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -pe mpi-fu 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -cwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -j y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #$ -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      # For IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $TMPDIR/machines ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I've tested the mpirun command can be run correctly in command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $ qconf -sp mpi-fu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      pe_name            mpi-fu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      slots              8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      user_lists         NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      xuser_lists        NONE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      allocation_rule    $fill_up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      control_slaves     TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      job_is_first_task  FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      urgency_slots      min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      accounting_summary TRUE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I've checked the $TMPDIR/machines after submit, it was correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      node0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      single node, i.e. node0002.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mpirun, i.e.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      The mpi processes can start correctly, 4 processes in node0001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      and 4 processes in node0002.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Is this normal behaviour of Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I just tried it both ways and I got the same result both times.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  processes are split between the nodes.  Perhaps to be extra sure,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  you can just run hostname?  And for what it is worth, as you have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  seen, you do not need to specify a machines file.  Open MPI will use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  the ones that were allocated by SGE.  You can also change your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  parallel queue to not run any scripts.  Like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  start_proc_args    /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  stop_proc_args     /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Also, I wondered if I have IB interface, for example, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      hostname of IB become node0001-clust and node0002-clust, will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Open MPI automatically use the IB interface?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Yes, it should use the IB interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      How about if I have 2 IB ports in each node, which IB bonding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      was done, will Open MPI automatically benefit from the double
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      bandwidth?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Thanks a lot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      PN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --     =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  781-442-3043
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  =========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
