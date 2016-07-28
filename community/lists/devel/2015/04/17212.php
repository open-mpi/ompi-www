<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 11:38:57 2015" -->
<!-- isoreceived="20150410153857" -->
<!-- sent="Fri, 10 Apr 2015 08:38:52 -0700" -->
<!-- isosent="20150410153852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="89F3D40B-29B3-45E4-B9A3-2A6ED3AED62E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1428675887047.95609_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 11:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17213.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1488-g40b7643"</a>
<li><strong>Previous message:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17248.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17248.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your configure options look fine.
<br>
<p>Getting 1 process assigned to each core (irrespective of HT on or off):
<br>
<p>&#151;map-by core &#151;bind-to core
<br>
<p>This will tight-pack the processes - i.e., they will be placed on each successive core. If you want to balance the load across the allocation (if the #procs &lt; #cores in allocation):
<br>
<p>&#151;map-by node &#151;bind-to core
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Apr 10, 2015, at 7:24 AM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the responses.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea is to bind one process per processor.  The actual problem that prompted the investigation is that a job
</span><br>
<span class="quotelev1">&gt; ran with 1.4.2 runs in 59 minutes and the same job in 1.6.4 and 1.8.4 takes 79 minutes on the same machine, same compiler etc.  In trying to track down the reason for the run time differences, I found that the behavior is different regarding the binding.  Hence the question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe it is doing what we requested, but not what we want.  The bind-to-socket was just one attempt at making
</span><br>
<span class="quotelev1">&gt; it bind one per processor.  I tried about 15 different combinations of the mpirun args and none matched the behavior of 1.4.2 or the run time of 1.4.2 and is a huge concern for us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked this machine and hyperthreading is on.  I can change that and retest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are my configure options ok for the 1.6.4+ configuring?
</span><br>
<span class="quotelev1">&gt; And what mpirun options should I be using to get 1 process per processor?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This job was an 8 core test job, but the core counts varies per type of job (and will be run on the big clusters, not this compile server).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The run time differences show up across all our clusters, Intel based, AMD based, various SuSE OS versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 10, 2015 9:54 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Actually, I believe from the cmd line that the questioner wanted each process to be bound to a single core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From your output, I&#146;m guessing you have hyperthreads enabled on your system - yes? In that case, the 1.4 series is likely to be binding each process to a single HT because it isn&#146;t sophisticated enough to realize the difference between HT and core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Later versions of OMPI do know the difference. When you tell OMPI to bind to core, it will bind you to -both- HTs of that core. Hence the output you showed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you tell us bind-to socket, we bind you to every HT in that socket. Since you are running less than 8 processes, and we map-by core by default, all the processes are bound to the first socket. This is what you show in this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it looks to me like OMPI is doing exactly what you requested. I admit the HT numbering in the cpumask is strange, but that&#146;s the way your BIOS numbered them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2015, at 6:29 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bug, it should be &quot;span,pe=2&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-10 15:28 GMT+02:00 Nick Papior Andersen &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; I guess you want process #1 to have core 0 and core 1 bound to it, process #2 have core 2 and core 3 bound?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can do this with (I do this with 1.8.4, I do not think it works with 1.6.x):
</span><br>
<span class="quotelev2">&gt;&gt; --map-by ppr:4:socket:span:pe=2
</span><br>
<span class="quotelev2">&gt;&gt; ppr = processes per resource.
</span><br>
<span class="quotelev2">&gt;&gt; socket = the resource
</span><br>
<span class="quotelev2">&gt;&gt; span = load balance the processes
</span><br>
<span class="quotelev2">&gt;&gt; pe = bind processing elements to each process
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should launch 8 processes (you have 2 sockets). Each process should have 2 processing elements bound to it.
</span><br>
<span class="quotelev2">&gt;&gt; You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-10 15:16 GMT+02:00  &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We can't seem to get &quot;processor affinity&quot; using 1.6.4 or newer OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note this is a 2 socket machine with 8 cores per socket
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We had compiled OpenMPI 1.4.2 with the following configure options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev2">&gt;&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; version=1.4.2.I1404211
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev2">&gt;&gt;     --disable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-shared=no \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-openib \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-libnuma=/usr \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then used this mpirun command (where we used 8 cores):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; /apps/share/openmpi/1.4.2.I1404211/bin/mpirun \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix /apps/share/openmpi/1.4.2.I1404211 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl openib,tcp,sm,self \
</span><br>
<span class="quotelev2">&gt;&gt; --x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev2">&gt;&gt; {model args}
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And when we checked the process map, it looks like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now with 1.6.4 and higher, we did the following:
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev2">&gt;&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; version=1.6.4.I1404211
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt;     --disable-vt \
</span><br>
<span class="quotelev2">&gt;&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev2">&gt;&gt;     --disable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-hwloc \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpi-ext \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've tried the same mpirun command, with -bind-to-core, with -bind-to-core -bycore etc
</span><br>
<span class="quotelev2">&gt;&gt; and I can't seem to get the right combination of args to get the same behavior as 1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I figure I am compiling incorrectly or using the wrong mpirun args.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can someone tell me how to duplicate the behavior of 1.4.2 regarding binding the processes to cores?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help appreciated..
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tom
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17209.php">http://www.open-mpi.org/community/lists/devel/2015/04/17209.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17209.php">http://www.open-mpi.org/community/lists/devel/2015/04/17209.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17213.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1488-g40b7643"</a>
<li><strong>Previous message:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17248.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17248.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
