<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:28:45 2015" -->
<!-- isoreceived="20150410132845" -->
<!-- sent="Fri, 10 Apr 2015 15:28:24 +0200" -->
<!-- isosent="20150410132824" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="CAAbhqc6L4Y7QOxJy26HDeUOVGCBfHeOSkpAV7qaxDo66KJGAhw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="y9bvbh4kts6.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Date:</strong> 2015-04-10 09:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17205.php">twurgl_at_[hidden]: "[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17205.php">twurgl_at_[hidden]: "[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess you want process #1 to have core 0 and core 1 bound to it, process
<br>
#2 have core 2 and core 3 bound?
<br>
<p>I can do this with (I do this with 1.8.4, I do not think it works with
<br>
1.6.x):
<br>
--map-by ppr:4:socket:span:pe=2
<br>
ppr = processes per resource.
<br>
socket = the resource
<br>
span = load balance the processes
<br>
pe = bind processing elements to each process
<br>
<p>This should launch 8 processes (you have 2 sockets). Each process should
<br>
have 2 processing elements bound to it.
<br>
You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
<br>
<p>2015-04-10 15:16 GMT+02:00 &lt;twurgl_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev1">&gt;  N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
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
<span class="quotelev1">&gt; We've tried the same mpirun command, with -bind-to-core, with
</span><br>
<span class="quotelev1">&gt; -bind-to-core -bycore etc
</span><br>
<span class="quotelev1">&gt; and I can't seem to get the right combination of args to get the same
</span><br>
<span class="quotelev1">&gt; behavior as 1.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We get the following process map (this output is with mpirun args
</span><br>
<span class="quotelev1">&gt; --bind-to-socket
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev1">&gt;  N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M
</span><br>
<span class="quotelev1">&gt; [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M
</span><br>
<span class="quotelev1">&gt; [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3
</span><br>
<span class="quotelev1">&gt;  N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0
</span><br>
<span class="quotelev1">&gt; 0      0  ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I figure I am compiling incorrectly or using the wrong mpirun args.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone tell me how to duplicate the behavior of 1.4.2 regarding
</span><br>
<span class="quotelev1">&gt; binding the processes to cores?
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17205.php">twurgl_at_[hidden]: "[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17205.php">twurgl_at_[hidden]: "[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17207.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
