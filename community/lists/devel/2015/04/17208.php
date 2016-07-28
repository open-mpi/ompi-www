<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:55:02 2015" -->
<!-- isoreceived="20150410135502" -->
<!-- sent="Fri, 10 Apr 2015 06:54:58 -0700" -->
<!-- isosent="20150410135458" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="77170995-3B48-4745-AD90-B983647963B3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAbhqc6avvtKeQ9tee0BwKXMgLeHp9Cz7kwZAuU2y++xWX=Uiw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-10 09:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I believe from the cmd line that the questioner wanted each process to be bound to a single core.
<br>
<p>From your output, I&#226;&#128;&#153;m guessing you have hyperthreads enabled on your system - yes? In that case, the 1.4 series is likely to be binding each process to a single HT because it isn&#226;&#128;&#153;t sophisticated enough to realize the difference between HT and core.
<br>
<p>Later versions of OMPI do know the difference. When you tell OMPI to bind to core, it will bind you to -both- HTs of that core. Hence the output you showed here:
<br>
<p><span class="quotelev1">&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<p><p>When you tell us bind-to socket, we bind you to every HT in that socket. Since you are running less than 8 processes, and we map-by core by default, all the processes are bound to the first socket. This is what you show in this output:
<br>
<p><span class="quotelev1">&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<p><p>So it looks to me like OMPI is doing exactly what you requested. I admit the HT numbering in the cpumask is strange, but that&#226;&#128;&#153;s the way your BIOS numbered them.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Apr 10, 2015, at 6:29 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bug, it should be &quot;span,pe=2&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-04-10 15:28 GMT+02:00 Nick Papior Andersen &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; I guess you want process #1 to have core 0 and core 1 bound to it, process #2 have core 2 and core 3 bound?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can do this with (I do this with 1.8.4, I do not think it works with 1.6.x):
</span><br>
<span class="quotelev1">&gt; --map-by ppr:4:socket:span:pe=2
</span><br>
<span class="quotelev1">&gt; ppr = processes per resource.
</span><br>
<span class="quotelev1">&gt; socket = the resource
</span><br>
<span class="quotelev1">&gt; span = load balance the processes
</span><br>
<span class="quotelev1">&gt; pe = bind processing elements to each process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should launch 8 processes (you have 2 sockets). Each process should have 2 processing elements bound to it.
</span><br>
<span class="quotelev1">&gt; You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-04-10 15:16 GMT+02:00  &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can't seem to get &quot;processor affinity&quot; using 1.6.4 or newer OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note this is a 2 socket machine with 8 cores per socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had compiled OpenMPI 1.4.2 with the following configure options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev1">&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev1">&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; version=1.4.2.I1404211
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev1">&gt;     --disable-shared \
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --enable-shared=no \
</span><br>
<span class="quotelev1">&gt;     --with-openib \
</span><br>
<span class="quotelev1">&gt;     --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev1">&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then used this mpirun command (where we used 8 cores):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; /apps/share/openmpi/1.4.2.I1404211/bin/mpirun \
</span><br>
<span class="quotelev1">&gt; --prefix /apps/share/openmpi/1.4.2.I1404211 \
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1 \
</span><br>
<span class="quotelev1">&gt; --mca btl openib,tcp,sm,self \
</span><br>
<span class="quotelev1">&gt; --x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev1">&gt; {model args}
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And when we checked the process map, it looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now with 1.6.4 and higher, we did the following:
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev1">&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev1">&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; version=1.6.4.I1404211
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;     --disable-vt \
</span><br>
<span class="quotelev1">&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev1">&gt;     --disable-shared \
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --with-verbs \
</span><br>
<span class="quotelev1">&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev1">&gt;     --with-hwloc \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-ext \
</span><br>
<span class="quotelev1">&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've tried the same mpirun command, with -bind-to-core, with -bind-to-core -bycore etc
</span><br>
<span class="quotelev1">&gt; and I can't seem to get the right combination of args to get the same behavior as 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I figure I am compiling incorrectly or using the wrong mpirun args.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone tell me how to duplicate the behavior of 1.4.2 regarding binding the processes to cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help appreciated..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
