<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 09:40:49 2009" -->
<!-- isoreceived="20090401134049" -->
<!-- sent="Wed, 1 Apr 2009 07:40:38 -0600" -->
<!-- isosent="20090401134038" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="322190D6-43CC-4E52-94C7-84990E2F40EA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D367AE.7000200_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 09:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an FYI: you can debug allocation issues more easily by:
<br>
<p>mpirun --display-allocation --do-not-launch -n 1 foo
<br>
<p>This will read the allocation, do whatever host filtering you specify  
<br>
with -host and -hostfile options, report out the result, and then  
<br>
terminate without trying to launch anything. I found it most useful  
<br>
for debugging these situations.
<br>
<p>If you want to know where the procs would have gone, then you can do:
<br>
<p>mpirun --display-allocation --display-map --do-not-launch -n 8 foo
<br>
<p>In this case, the #procs you specify needs to be the number you  
<br>
actually wanted so that the mapper will properly run. However, the  
<br>
executable can be bogus and nothing will actually launch. It's the  
<br>
closest you can come to a dry run of a job.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Apr 1, 2009, at 7:10 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; It turns out that the use of --host and --hostfile act as a filter  
</span><br>
<span class="quotelev1">&gt; of which nodes to run on when you are running under SGE.  So,  
</span><br>
<span class="quotelev1">&gt; listing them several times does not affect where the processes  
</span><br>
<span class="quotelev1">&gt; land.  However, this still does not explain why you are seeing what  
</span><br>
<span class="quotelev1">&gt; you are seeing.  One thing you can try is to add this to the mpirun  
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca ras_gridengine_verbose 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will provide some additional information as to what Open MPI is  
</span><br>
<span class="quotelev1">&gt; seeing as nodes and slots from SGE.  (Is there any chance that  
</span><br>
<span class="quotelev1">&gt; node0002 actually has 8 slots?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just retried on my cluster of 2 CPU sparc solaris nodes.  When I  
</span><br>
<span class="quotelev1">&gt; run with np=2, the two MPI processes will all land on a single node,  
</span><br>
<span class="quotelev1">&gt; because that node has two slots.  When I go up to np=4, then they  
</span><br>
<span class="quotelev1">&gt; move on to the other node.  The --host acts as a filter to where  
</span><br>
<span class="quotelev1">&gt; they should run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In terms of the using &quot;IB bonding&quot;, I do not know what that means  
</span><br>
<span class="quotelev1">&gt; exactly.  Open MPI does stripe over multiple IB interfaces, so I  
</span><br>
<span class="quotelev1">&gt; think the answer is yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS:  Here is what my np=4 job script looked like.  (I just changed  
</span><br>
<span class="quotelev1">&gt; np=2 for the other run)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0 148 =&gt;more run.sh
</span><br>
<span class="quotelev1">&gt; #! /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -N Job1
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 200
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=00:20:00      # Run time (hh:mm:ss) - 10 min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $NSLOTS
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/bin/mpirun -mca ras_gridengine_verbose 100 - 
</span><br>
<span class="quotelev1">&gt; v -np 4 -host burl-ct-280r-1,burl-ct-280r-0 -mca btl self,sm,tcp  
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output (somewhat truncated)
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0 150 =&gt;more Job1.o199
</span><br>
<span class="quotelev1">&gt; 200
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: JOB_ID: 199
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: PE_HOSTFILE: /ws/ompi-tools/ 
</span><br>
<span class="quotelev1">&gt; orte/sge/sge6_2u1/default/spool/burl-ct-280r-2/active_jobs/199.1/ 
</span><br>
<span class="quotelev1">&gt; pe_hostfile
</span><br>
<span class="quotelev1">&gt; [..snip..]
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-0: PE_HOSTFILE  
</span><br>
<span class="quotelev1">&gt; shows slots=2
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-1: PE_HOSTFILE  
</span><br>
<span class="quotelev1">&gt; shows slots=2
</span><br>
<span class="quotelev1">&gt; [..snip..]
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-1
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-1
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0 151 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/31/09 22:39, PN wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt; I've created another PE and changed the submission script,  
</span><br>
<span class="quotelev2">&gt;&gt; explicitly specify the hostname with &quot;--host&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; However the result is the same.
</span><br>
<span class="quotelev2">&gt;&gt; # qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev2">&gt;&gt; slots              8
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt; $ cat hpl-8cpu-test.sge
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N HPL_8cpu_GB
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -V
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS --host  
</span><br>
<span class="quotelev2">&gt;&gt; node0001 
</span><br>
<span class="quotelev2">&gt;&gt; ,node0001,node0001,node0001,node0002,node0002,node0002,node0002 ./ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; # pdsh -a ps ax --width=200|grep hpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18901 ?        S      0:00 /opt/openmpi-gcc/bin/mpirun -v  
</span><br>
<span class="quotelev2">&gt;&gt; -np 8 --host  
</span><br>
<span class="quotelev2">&gt;&gt; node0001 
</span><br>
<span class="quotelev2">&gt;&gt; ,node0001,node0001,node0001,node0002,node0002,node0002,node0002 ./ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18902 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18903 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18904 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18905 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18906 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18907 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18908 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18909 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; Any hint to debug this situation?
</span><br>
<span class="quotelev2">&gt;&gt; Also, if I have 2 IB ports in each node, which IB bonding was done,  
</span><br>
<span class="quotelev2">&gt;&gt; will Open MPI automatically benefit from the double bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; PN
</span><br>
<span class="quotelev2">&gt;&gt; 2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden] &lt;mailto:Rolf.Vandevaart_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    On 03/31/09 11:43, PN wrote:
</span><br>
<span class="quotelev2">&gt;&gt;        Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;        I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt;        I have 2 compute nodes for testing, each node has a single  
</span><br>
<span class="quotelev2">&gt;&gt; quad
</span><br>
<span class="quotelev2">&gt;&gt;        core CPU.
</span><br>
<span class="quotelev2">&gt;&gt;        Here is my submission script and PE config:
</span><br>
<span class="quotelev2">&gt;&gt;        $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev2">&gt;&gt;        #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -pe mpi-fu 8
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -V
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev2">&gt;&gt;        # For IB
</span><br>
<span class="quotelev2">&gt;&gt;        /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;        $TMPDIR/machines ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;        I've tested the mpirun command can be run correctly in  
</span><br>
<span class="quotelev2">&gt;&gt; command line.
</span><br>
<span class="quotelev2">&gt;&gt;        $ qconf -sp mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt;        pe_name            mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt;        slots              8
</span><br>
<span class="quotelev2">&gt;&gt;        user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt;        xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt;        start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh  
</span><br>
<span class="quotelev2">&gt;&gt; $pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt;        stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev2">&gt;&gt;        allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt;        control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt;        job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt;        urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt;        accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt;        I've checked the $TMPDIR/machines after submit, it was  
</span><br>
<span class="quotelev2">&gt;&gt; correct.
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        However, I found that if I explicitly specify the &quot;- 
</span><br>
<span class="quotelev2">&gt;&gt; machinefile
</span><br>
<span class="quotelev2">&gt;&gt;        $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a
</span><br>
<span class="quotelev2">&gt;&gt;        single node, i.e. node0002.
</span><br>
<span class="quotelev2">&gt;&gt;        However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line
</span><br>
<span class="quotelev2">&gt;&gt;        mpirun, i.e.
</span><br>
<span class="quotelev2">&gt;&gt;        /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS
</span><br>
<span class="quotelev2">&gt;&gt;        ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;        The mpi processes can start correctly, 4 processes in node0001
</span><br>
<span class="quotelev2">&gt;&gt;        and 4 processes in node0002.
</span><br>
<span class="quotelev2">&gt;&gt;        Is this normal behaviour of Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;    I just tried it both ways and I got the same result both times.   
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt;    processes are split between the nodes.  Perhaps to be extra sure,
</span><br>
<span class="quotelev2">&gt;&gt;    you can just run hostname?  And for what it is worth, as you have
</span><br>
<span class="quotelev2">&gt;&gt;    seen, you do not need to specify a machines file.  Open MPI will  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt;    the ones that were allocated by SGE.  You can also change your
</span><br>
<span class="quotelev2">&gt;&gt;    parallel queue to not run any scripts.  Like this:
</span><br>
<span class="quotelev2">&gt;&gt;    start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;    stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;        Also, I wondered if I have IB interface, for example, the
</span><br>
<span class="quotelev2">&gt;&gt;        hostname of IB become node0001-clust and node0002-clust, will
</span><br>
<span class="quotelev2">&gt;&gt;        Open MPI automatically use the IB interface?
</span><br>
<span class="quotelev2">&gt;&gt;    Yes, it should use the IB interface.
</span><br>
<span class="quotelev2">&gt;&gt;        How about if I have 2 IB ports in each node, which IB bonding
</span><br>
<span class="quotelev2">&gt;&gt;        was done, will Open MPI automatically benefit from the double
</span><br>
<span class="quotelev2">&gt;&gt;        bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;        Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;        PN
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    --     =========================
</span><br>
<span class="quotelev2">&gt;&gt;    rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt;    =========================
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
