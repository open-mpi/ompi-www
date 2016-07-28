<?
$subject_val = "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 19:54:52 2014" -->
<!-- isoreceived="20140605235452" -->
<!-- sent="Thu, 5 Jun 2014 16:54:48 -0700" -->
<!-- isosent="20140605235448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1" -->
<!-- id="BEAE5ABA-4ECB-47D9-A236-B4F1CEB8EB52_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABy+9wGjs9EV4+SBL3MSM+js_sG3bqQqGo5SoGJZxf0m+P9H_w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-05 19:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24555.php">Dan Dietz: "[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2014, at 2:13 PM, Dan Dietz &lt;ddietz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to bind 8 cores to a single MPI rank for hybrid MPI/OpenMP
</span><br>
<span class="quotelev1">&gt; codes. In OMPI 1.6.3, I can do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get one rank bound to procs 0-7 and the other bound to 8-15. Great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm having some difficulties doing this with openmpi 1.8.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev1">&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Command line options:
</span><br>
<span class="quotelev1">&gt;    Deprecated:  --cpus-per-proc, -cpus-per-proc, --cpus-per-rank,
</span><br>
<span class="quotelev1">&gt; -cpus-per-rank
</span><br>
<span class="quotelev1">&gt;    Replacement: --map-by &lt;obj&gt;:PE=N
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Equivalent MCA parameter:
</span><br>
<span class="quotelev1">&gt;    Deprecated:  rmaps_base_cpus_per_proc
</span><br>
<span class="quotelev1">&gt;    Replacement: rmaps_base_mapping_policy=&lt;obj&gt;:PE=N
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Please update to the new syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  ./hello
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
<span class="quotelev1">&gt; OK, let me try the new syntax...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --map-by core:pe=8 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  ./hello
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
<span class="quotelev1">&gt; What am I doing wrong? The documentation on these new options is
</span><br>
<span class="quotelev1">&gt; somewhat poor and confusing so I'm probably doing something wrong. If
</span><br>
<span class="quotelev1">&gt; anyone could provide some pointers here it'd be much appreciated! If
</span><br>
<span class="quotelev1">&gt; it's not something simple and you need config logs and such please let
</span><br>
<span class="quotelev1">&gt; me know.
</span><br>
<p>Looks like we think there are less than 16 slots allocated on that node. What is in this &quot;nodes&quot; file? Without it, OMPI should read the Torque allocation directly. You might check what we think the allocation is by adding --display-allocation to the cmd line
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a side note -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I try this using the PBS nodefile with the above, I get a confusing message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #cpus-per-proc:  8
</span><br>
<span class="quotelev1">&gt;  number of cpus:  1
</span><br>
<span class="quotelev1">&gt;  map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev1">&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From what I've gathered this is because I have a node listed 16 times
</span><br>
<span class="quotelev1">&gt; in my PBS nodefile so it's assuming then I have 1 core per node?
</span><br>
<p><p>No - if listed 16 times, it should compute 16 slots. Try adding --display-allocation to your cmd line and it should tell you how many slots are present.
<br>
<p>However, it doesn't assume there is a core for each slot. Instead, it detects the cores directly on the node. It sounds like it isn't seeing them for some reason. What OS are you running on that node?
<br>
<p>FWIW: the 1.6 series has a different detection system for cores. Could be something is causing problems for the new one.
<br>
<p><span class="quotelev1">&gt; Some
</span><br>
<span class="quotelev1">&gt; better documentation here would be helpful. I haven't been able to
</span><br>
<span class="quotelev1">&gt; figure out how to use the &quot;oversubscribe&quot; option listed in the docs.
</span><br>
<span class="quotelev1">&gt; Not that I really want to oversubscribe, of course, I need to modify
</span><br>
<span class="quotelev1">&gt; the nodefile, but this just stumped me for a while as 1.6.3 didn't
</span><br>
<span class="quotelev1">&gt; have this behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a extra bonus, I get a segfault in this situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] Failing at address: 0x2c
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 0] /lib64/libpthread.so.0[0x3c9460f500]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 1]
</span><br>
<span class="quotelev1">&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-rte.so.7(orte_plm_base_complete_setup+0x615)[0x2ba960a59015]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 2]
</span><br>
<span class="quotelev1">&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa05)[0x2ba961666715]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 3] mpirun(orterun+0x1b45)[0x40684f]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 4] mpirun(main+0x20)[0x4047f4]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3a1bc1ecdd]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] [ 6] mpirun[0x404719]
</span><br>
<span class="quotelev1">&gt; [conte-a497:13255] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Huh - that's odd. Could you perhaps configure OMPI with --enable-debug and gdb the core file to tell us the line numbers involved?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My &quot;nodes&quot; file simply contains the first two lines of my original
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE provided by Torque. See above why I modified. Works fine
</span><br>
<span class="quotelev1">&gt; if use the full file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any pointers you all may have!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dan
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
<li><strong>Next message:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24555.php">Dan Dietz: "[OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
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
