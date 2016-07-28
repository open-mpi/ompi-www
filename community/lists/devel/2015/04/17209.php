<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 10:24:53 2015" -->
<!-- isoreceived="20150410142453" -->
<!-- sent="Fri, 10 Apr 2015 14:24:47 +0000" -->
<!-- isosent="20150410142447" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="1428675887047.95609_at_goodyear.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="77170995-3B48-4745-AD90-B983647963B3_at_open-mpi.org" -->
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
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 10:24:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17210.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the responses.
<br>
<p><p>The idea is to bind one process per processor.  The actual problem that prompted the investigation is that a job
<br>
<p>ran with 1.4.2 runs in 59 minutes and the same job in 1.6.4 and 1.8.4 takes 79 minutes on the same machine, same compiler etc.  In trying to track down the reason for the run time differences, I found that the behavior is different regarding the binding.  Hence the question.
<br>
<p><p>I believe it is doing what we requested, but not what we want.  The bind-to-socket was just one attempt at making
<br>
<p>it bind one per processor.  I tried about 15 different combinations of the mpirun args and none matched the behavior of 1.4.2 or the run time of 1.4.2 and is a huge concern for us.
<br>
<p><p>I just checked this machine and hyperthreading is on.  I can change that and retest.
<br>
<p><p>Are my configure options ok for the 1.6.4+ configuring?
<br>
<p>And what mpirun options should I be using to get 1 process per processor?
<br>
<p><p>This job was an 8 core test job, but the core counts varies per type of job (and will be run on the big clusters, not this compile server).
<br>
<p><p>The run time differences show up across all our clusters, Intel based, AMD based, various SuSE OS versions.
<br>
<p><p>thanks
<br>
<p>tom
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Friday, April 10, 2015 9:54 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
<br>
<p>Actually, I believe from the cmd line that the questioner wanted each process to be bound to a single core.
<br>
<p><span class="quotelev1">&gt;From your output, I&#146;m guessing you have hyperthreads enabled on your system - yes? In that case, the 1.4 series is likely to be binding each process to a single HT because it isn&#146;t sophisticated enough to realize the difference between HT and core.
</span><br>
<p>Later versions of OMPI do know the difference. When you tell OMPI to bind to core, it will bind you to -both- HTs of that core. Hence the output you showed here:
<br>
<p>here is the map using just --mca mpi_paffinity_alone 1
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
<br>
<p><p>When you tell us bind-to socket, we bind you to every HT in that socket. Since you are running less than 8 processes, and we map-by core by default, all the processes are bound to the first socket. This is what you show in this output:
<br>
<p>We get the following process map (this output is with mpirun args --bind-to-socket
<br>
--mca mpi_paffinity_alone 1):
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
<br>
24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
<p><p>So it looks to me like OMPI is doing exactly what you requested. I admit the HT numbering in the cpumask is strange, but that&#146;s the way your BIOS numbered them.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Apr 10, 2015, at 6:29 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
<br>
<p>Bug, it should be &quot;span,pe=2&quot;
<br>
<p>2015-04-10 15:28 GMT+02:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&lt;mailto:nickpapior_at_[hidden]&gt;&gt;:
<br>
I guess you want process #1 to have core 0 and core 1 bound to it, process #2 have core 2 and core 3 bound?
<br>
<p>I can do this with (I do this with 1.8.4, I do not think it works with 1.6.x):
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
<p>This should launch 8 processes (you have 2 sockets). Each process should have 2 processing elements bound to it.
<br>
You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
<br>
<p>2015-04-10 15:16 GMT+02:00  &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt;:
<br>
<p>We can't seem to get &quot;processor affinity&quot; using 1.6.4 or newer OpenMPI.
<br>
<p>Note this is a 2 socket machine with 8 cores per socket
<br>
<p>We had compiled OpenMPI 1.4.2 with the following configure options:
<br>
<p>===========================================================================
<br>
export CC=/apps/share/intel/v14.0.4.211/bin/icc
<br>
export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
<br>
export FC=/apps/share/intel/v14.0.4.211/bin/ifort
<br>
<p>version=1.4.2.I1404211
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-libnuma=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/apps/share/TORQUE/current/Linux
<br>
===========================================================================
<br>
<p>and then used this mpirun command (where we used 8 cores):
<br>
<p>===========================================================================
<br>
/apps/share/openmpi/1.4.2.I1404211/bin/mpirun \
<br>
--prefix /apps/share/openmpi/1.4.2.I1404211 \
<br>
--mca mpi_paffinity_alone 1 \
<br>
--mca btl openib,tcp,sm,self \
<br>
--x LD_LIBRARY_PATH \
<br>
{model args}
<br>
===========================================================================
<br>
<p>And when we checked the process map, it looks like this:
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
<br>
22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
<br>
22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
<br>
22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
<br>
22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
<br>
22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
<br>
22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
<br>
22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
<br>
<p>Now with 1.6.4 and higher, we did the following:
<br>
===========================================================================
<br>
export CC=/apps/share/intel/v14.0.4.211/bin/icc
<br>
export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
<br>
export FC=/apps/share/intel/v14.0.4.211/bin/ifort
<br>
<p>version=1.6.4.I1404211
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-verbs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-ext \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/apps/share/TORQUE/current/Linux
<br>
===========================================================================
<br>
<p>We've tried the same mpirun command, with -bind-to-core, with -bind-to-core -bycore etc
<br>
and I can't seem to get the right combination of args to get the same behavior as 1.4.2.
<br>
<p>We get the following process map (this output is with mpirun args --bind-to-socket
<br>
--mca mpi_paffinity_alone 1):
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
<br>
24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
<p>here is the map using just --mca mpi_paffinity_alone 1
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
<br>
<p>I figure I am compiling incorrectly or using the wrong mpirun args.
<br>
<p>Can someone tell me how to duplicate the behavior of 1.4.2 regarding binding the processes to cores?
<br>
<p>Any help appreciated..
<br>
<p>thanks
<br>
<p>tom
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>
<br>
<p><p><p><pre>
--
Kind regards Nick
--
Kind regards Nick
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17210.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17208.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
