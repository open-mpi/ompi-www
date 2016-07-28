<?
$subject_val = "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 12:48:05 2014" -->
<!-- isoreceived="20140206174805" -->
<!-- sent="Thu, 6 Feb 2014 09:47:26 -0800" -->
<!-- isosent="20140206174726" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV" -->
<!-- id="CAAvDA17krSXvBFMhNA_a=g8vMiWoCJ1vbJJs_Q-h6kDGtNkpPg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17q1Cjtd3vUvHqLTd_d=MW6Ght-yYo1YKD8h5QQG6eTbg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 12:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>It worked on my second try, when I spelled it &quot;ras_tm_smp&quot; :-)
<br>
<p>Thanks,
<br>
-Paul
<br>
<p><p><p>On Wed, Feb 5, 2014 at 11:59 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to build tonight's trunk tarball and then test a run tomorrow.
</span><br>
<span class="quotelev1">&gt; Please ping me if I don't post my results by Thu evening (PST).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 5, 2014 at 7:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added this to the trunk in r30568 - a new MCA param &quot;ras_tm_smp_mode&quot;
</span><br>
<span class="quotelev2">&gt;&gt; will tell us to use the PBS_PPN envar to get the number of slots allocated
</span><br>
<span class="quotelev2">&gt;&gt; per node. We then just use the PBS_Nodefile to read the names of the nodes,
</span><br>
<span class="quotelev2">&gt;&gt; which I expect will be one for each partition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if this solves the problem - I scheduled it for 1.7.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2014, at 4:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No worries about PBS itself - better to allow you to just run this way.
</span><br>
<span class="quotelev2">&gt;&gt; Easy to add a switch for this purpose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now, just add --oversubscribe to the command line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2014, at 3:32 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mods may have been done by the staff at PSC rather than by SGI.
</span><br>
<span class="quotelev2">&gt;&gt; Note the &quot;_psc&quot; suffix:
</span><br>
<span class="quotelev2">&gt;&gt; $ which pbsnodes
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/packages/torque/2.3.13_psc/bin/pbsnodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Their sources appear to be available in the f/s too.
</span><br>
<span class="quotelev2">&gt;&gt; Using &quot;tar -d&quot; to compare that to the pristine torque-2.3.13 tarball show
</span><br>
<span class="quotelev2">&gt;&gt; the following files were modified:
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/job_func.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/mom_main.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/requests.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/linux/mom_mach.h
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/linux/mom_mach.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/linux/cpuset.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/resmom/start_exec.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/scheduler.tcl/pbs_sched.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/cmds/qalter.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/cmds/qsub.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/cmds/qstat.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/server/resc_def_all.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/src/server/req_quejob.c
</span><br>
<span class="quotelev2">&gt;&gt; torque-2.3.13/torque.spec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll provide what assistance I can in testing.
</span><br>
<span class="quotelev2">&gt;&gt; That includes providing (off-list) the actual diffs of PSC's torque
</span><br>
<span class="quotelev2">&gt;&gt; against the tarball, if desired.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, since -npernode didn't work, what is the right way to
</span><br>
<span class="quotelev2">&gt;&gt; say:
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;I have 1 slot but I want to overcommit and run 16 mpi ranks&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 31, 2014 at 3:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 31, 2014, at 3:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said this is NOT a cluster - it is a 4k-core shared memory machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understood - that wasn't the nature of my question
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TORQUE is allocating cpus (time-shared mode, IIRC), not nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, there is always exactly one line in $PBS_NODESFILE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting - because that isn't the standard way Torque behaves. It is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to put one line/slot in the nodefile, each line containing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name of the node. Clearly, SGI has reconfigured Torque to do something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The system runs as 2 partitions of 2k-cores each.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the contents odf$PBS_NODESFILE has exactly 2 possible values, each 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The values of PBS_PPN and PBS_NCPUS both reflect the size of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At a minimum, shouldn't Open MPI be multiplying the lines in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $PBS_NODESFILE by the value of $PBS_PPN?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, as above, that isn't the way Torque generally behaves. It would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear that we need a &quot;switch&quot; here to handle SGI's modifications. Should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be doable - just haven't had anyone using an SGI machine before :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, when I try &quot;mpirun -npernode 16 ./ring_c&quot; I am still told
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there are not enough slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shouldn't that be working with 1 line is $PBS_NODESFILE?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Jan 31, 2014 at 2:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We read the nodes from the PBS_NODEFILE, Paul - can you pass that along?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 31, 2014, at 2:33 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to test the trunk on an SGI UV (to validate Nathan's port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of btl:vader to SGI's variant of xpmem).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At configure time, PBS's TM support was correctly located.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My PBS batch script includes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   #PBS -l ncpus=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because that is what this installation requires (not nodes, mppnodes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or anything like that).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One is allocating cpus on a large shared-memory machine, not a set of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes in a cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, this appears to be causing mpirun to think I have just 1 slot:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + mpirun -np 2 ./ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ./ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In case they contain useful info, here are the PBS env vars in the job:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_HT_NCPUS=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_VERSION=TORQUE-2.3.13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBNAME=qs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_ENVIRONMENT=PBS_BATCH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_HOME=/var/spool/torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_WORKDIR=/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-trunk-linux-x86_64-uv-trunk/BLD/examples
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_PPN=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_TASKNUM=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_HOME=/usr/users/6/hargrove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_MOMPORT=15003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_QUEUE=debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_LOGNAME=hargrove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_LANG=en_US.UTF-8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBCOOKIE=9EEF5DF75FA705A241FEF66EDFE01C5B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_NODENUM=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_SHELL=/usr/psc/shells/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_SERVER=tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBID=314827.tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_NCPUS=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_HOST=tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_VNODENUM=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_QUEUE=debug_r1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_MAIL=/var/mail/hargrove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_NODEFILE=/var/spool/torque/aux//
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 314827.tg-login1.blacklight.psc.teragrid.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_PATH=[...removed...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If any additional info is needed to help make mpirun &quot;just work&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, at this point I am mostly interested in any work-arounds that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will let me run something other than a singleton on this system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Reply:</strong> <a href="14008.php">Ralph Castain: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
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
