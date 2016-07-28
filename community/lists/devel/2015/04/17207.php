<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:29:45 2015" -->
<!-- isoreceived="20150410132945" -->
<!-- sent="Fri, 10 Apr 2015 15:29:24 +0200" -->
<!-- isosent="20150410132924" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="CAAbhqc6avvtKeQ9tee0BwKXMgLeHp9Cz7kwZAuU2y++xWX=Uiw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6L4Y7QOxJy26HDeUOVGCBfHeOSkpAV7qaxDo66KJGAhw_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 09:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bug, it should be &quot;span,pe=2&quot;
<br>
<p>2015-04-10 15:28 GMT+02:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I guess you want process #1 to have core 0 and core 1 bound to it, process
</span><br>
<span class="quotelev1">&gt; #2 have core 2 and core 3 bound?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can do this with (I do this with 1.8.4, I do not think it works with
</span><br>
<span class="quotelev1">&gt; 1.6.x):
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
<span class="quotelev1">&gt; This should launch 8 processes (you have 2 sockets). Each process should
</span><br>
<span class="quotelev1">&gt; have 2 processing elements bound to it.
</span><br>
<span class="quotelev1">&gt; You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-04-10 15:16 GMT+02:00 &lt;twurgl_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then used this mpirun command (where we used 8 cores):
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And when we checked the process map, it looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev2">&gt;&gt;  N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now with 1.6.4 and higher, we did the following:
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've tried the same mpirun command, with -bind-to-core, with
</span><br>
<span class="quotelev2">&gt;&gt; -bind-to-core -bycore etc
</span><br>
<span class="quotelev2">&gt;&gt; and I can't seem to get the right combination of args to get the same
</span><br>
<span class="quotelev2">&gt;&gt; behavior as 1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We get the following process map (this output is with mpirun args
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to-socket
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev2">&gt;&gt;  N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt;&gt;  60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev2">&gt;&gt;  N4     N5 ]
</span><br>
<span class="quotelev2">&gt;&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; 0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I figure I am compiling incorrectly or using the wrong mpirun args.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone tell me how to duplicate the behavior of 1.4.2 regarding
</span><br>
<span class="quotelev2">&gt;&gt; binding the processes to cores?
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
