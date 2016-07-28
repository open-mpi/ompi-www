<?
$subject_val = "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 15:00:48 2014" -->
<!-- isoreceived="20140606190048" -->
<!-- sent="Fri, 6 Jun 2014 12:00:45 -0700" -->
<!-- isosent="20140606190045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1" -->
<!-- id="F59BD2DA-0BF4-4B07-B5C4-6931A3EE3A2E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABy+9wFjh8tTNaCVDC8wkEoaot=NkK+J+99rOvRKxG3-bpxEOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 15:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24579.php">E.O.: "[OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24577.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to pester with questions, but I'm trying to narrow down the issue.
<br>
<p>* What kind of chips are on these machines?
<br>
<p>* If they have h/w threads, are they enabled?
<br>
<p>* you might have lstopo on one of those machines - could you pass along its output? Otherwise, you can run a simple &quot;mpirun -n 1 -mca ess_base_verbose 20 hostname&quot; and it will print out. Only need one node in your allocation as we don't need a fountain of output.
<br>
<p>I'll look into the segfault - hard to understand offhand, but could be an uninitialized variable. If you have a chance, could you rerun that test with &quot;-mca plm_base_verbose 10&quot; on the cmd line?
<br>
<p>Thanks again
<br>
Ralph
<br>
<p>On Jun 6, 2014, at 10:31 AM, Dan Dietz &lt;ddietz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply. I tried out the --display-allocation option with
</span><br>
<span class="quotelev1">&gt; several different combinations and have attached the output. I see
</span><br>
<span class="quotelev1">&gt; this behavior on both RHEL6.4, RHEL6.5, and RHEL5.10 clusters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's debugging info on the segfault. Does that help? FWIW this does
</span><br>
<span class="quotelev1">&gt; not seem to crash on the RHEL5 cluster or RHEL6.5 cluster. Just
</span><br>
<span class="quotelev1">&gt; crashes on RHEL6.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ gdb -c core.22623
</span><br>
<span class="quotelev1">&gt; `which mpirun`
</span><br>
<span class="quotelev1">&gt; No symbol table is loaded.  Use the &quot;file&quot; command.
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.5-1.3.187
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2012 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-unknown-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/bin/mpirun...done.
</span><br>
<span class="quotelev1">&gt; [New LWP 22623]
</span><br>
<span class="quotelev1">&gt; [New LWP 22624]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warning: Can't read pathname for load map: Input/output error.
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; Core was generated by `mpirun -np 2 -machinefile ./nodes ./hello'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x00002acc602920e1 in orte_plm_base_complete_setup (fd=-1,
</span><br>
<span class="quotelev1">&gt; args=-1, cbdata=0x20c0840) at base/plm_base_launch_support.c:422
</span><br>
<span class="quotelev1">&gt; 422                    node-&gt;hostid = node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002acc602920e1 in orte_plm_base_complete_setup (fd=-1,
</span><br>
<span class="quotelev1">&gt; args=-1, cbdata=0x20c0840) at base/plm_base_launch_support.c:422
</span><br>
<span class="quotelev1">&gt; #1  0x00002acc60eec145 in opal_libevent2021_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00000000004073b5 in orterun (argc=6, argv=0x7fff5bb2a3a8) at
</span><br>
<span class="quotelev1">&gt; orterun.c:1077
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004048f4 in main (argc=6, argv=0x7fff5bb2a3a8) at main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ cat nodes
</span><br>
<span class="quotelev1">&gt; conte-a009
</span><br>
<span class="quotelev1">&gt; conte-a009
</span><br>
<span class="quotelev1">&gt; conte-a055
</span><br>
<span class="quotelev1">&gt; conte-a055
</span><br>
<span class="quotelev1">&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ uname -r
</span><br>
<span class="quotelev1">&gt; 2.6.32-358.14.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 5, 2014 at 7:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2014, at 2:13 PM, Dan Dietz &lt;ddietz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to bind 8 cores to a single MPI rank for hybrid MPI/OpenMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; codes. In OMPI 1.6.3, I can do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get one rank bound to procs 0-7 and the other bound to 8-15. Great!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I'm having some difficulties doing this with openmpi 1.8.1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command line options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Deprecated:  --cpus-per-proc, -cpus-per-proc, --cpus-per-rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Replacement: --map-by &lt;obj&gt;:PE=N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Equivalent MCA parameter:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Deprecated:  rmaps_base_cpus_per_proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Replacement: rmaps_base_mapping_policy=&lt;obj&gt;:PE=N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please update to the new syntax.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, let me try the new syntax...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 --map-by core:pe=8 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What am I doing wrong? The documentation on these new options is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhat poor and confusing so I'm probably doing something wrong. If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone could provide some pointers here it'd be much appreciated! If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not something simple and you need config logs and such please let
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me know.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like we think there are less than 16 slots allocated on that node. What is in this &quot;nodes&quot; file? Without it, OMPI should read the Torque allocation directly. You might check what we think the allocation is by adding --display-allocation to the cmd line
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a side note -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I try this using the PBS nodefile with the above, I get a confusing message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested ones:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #cpus-per-proc:  8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of cpus:  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From what I've gathered this is because I have a node listed 16 times
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my PBS nodefile so it's assuming then I have 1 core per node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No - if listed 16 times, it should compute 16 slots. Try adding --display-allocation to your cmd line and it should tell you how many slots are present.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it doesn't assume there is a core for each slot. Instead, it detects the cores directly on the node. It sounds like it isn't seeing them for some reason. What OS are you running on that node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: the 1.6 series has a different detection system for cores. Could be something is causing problems for the new one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better documentation here would be helpful. I haven't been able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure out how to use the &quot;oversubscribe&quot; option listed in the docs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not that I really want to oversubscribe, of course, I need to modify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nodefile, but this just stumped me for a while as 1.6.3 didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have this behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a extra bonus, I get a segfault in this situation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] Failing at address: 0x2c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 0] /lib64/libpthread.so.0[0x3c9460f500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-rte.so.7(orte_plm_base_complete_setup+0x615)[0x2ba960a59015]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa05)[0x2ba961666715]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 3] mpirun(orterun+0x1b45)[0x40684f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 4] mpirun(main+0x20)[0x4047f4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3a1bc1ecdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] [ 6] mpirun[0x404719]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [conte-a497:13255] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Huh - that's odd. Could you perhaps configure OMPI with --enable-debug and gdb the core file to tell us the line numbers involved?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My &quot;nodes&quot; file simply contains the first two lines of my original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $PBS_NODEFILE provided by Torque. See above why I modified. Works fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if use the full file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for any pointers you all may have!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan Dietz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Applications Analyst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ITaP Research Computing, Purdue University
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dan Dietz
</span><br>
<span class="quotelev1">&gt; Scientific Applications Analyst
</span><br>
<span class="quotelev1">&gt; ITaP Research Computing, Purdue University
</span><br>
<span class="quotelev1">&gt; &lt;slots&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="24579.php">E.O.: "[OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24577.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24585.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
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
