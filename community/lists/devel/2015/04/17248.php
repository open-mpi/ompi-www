<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 14:14:11 2015" -->
<!-- isoreceived="20150417181411" -->
<!-- sent="Fri, 17 Apr 2015 18:14:07 +0000" -->
<!-- isosent="20150417181407" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="1429294447249.73451_at_goodyear.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="89F3D40B-29B3-45E4-B9A3-2A6ED3AED62E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-04-17 14:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, seems like I am making some progress here.  Thanks for the help.
<br>
I turned HT off.
<br>
Now I can run v 1.4.2, 1.6.4 and 1.8.4 all compiled the same compiler and run on the same machine
<br>
1.4.2 runs this job in 59 minutes.   1.6.4 and 1.8.4 run the job in 1hr 24 minutes.
<br>
1.4.2 uses just --mca paffinuty-alone 1 and the processes are bound
<br>
&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
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
<p>If I use 1.6.4 and 1.8.4 with --mca paffinity-alone 1, the run time is now 1hr 14 minutes.  The process map now looks like:
<br>
bash-4.3# numa-maps -n eagle
<br>
&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
12248 eagle                 0    163.3M [ 155.3M   8.0M     0      0      0      0  ]
<br>
12249 eagle                 2    161.6M [ 159.6M   2.0M     0      0      0      0  ]
<br>
12250 eagle                 4    164.3M [ 160.3M   4.0M     0      0      0      0  ]
<br>
12251 eagle                 6    160.4M [ 156.4M   4.0M     0      0      0      0  ]
<br>
12252 eagle                 8    160.6M [ 154.6M   6.0M     0      0      0      0  ]
<br>
12253 eagle                10    159.8M [ 151.8M   8.0M     0      0      0      0  ]
<br>
12254 eagle                12    160.9M [ 152.9M   8.0M     0      0      0      0  ]
<br>
12255 eagle                14    159.8M [ 157.8M   2.0M     0      0      0      0  ]
<br>
<p>If I take off the --mca paffinity-alone 1, and instead use --bysocket --bind-to-core (1.6.4)  or --map-by socket --bind-to core (1.8.4), the job runs in 59 minutes and the process map look like the 1.4.2 one above...looks super!
<br>
<p>Now the issue:
<br>
<p>If I move the same openmi install dirs to our cluster nodes, I can run 1.64+ using the --mca paffinity-alone 1 options and the job runs (taking longer etc).
<br>
<p>If I then try the --bysocket --bind-to-core etc, I get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
An attempt to set processor affinity has failed - please check to
<br>
ensure that your system supports such functionality. If so, then
<br>
this is probably something that should be reported to the OMPI developers.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Input/output error
<br>
Node: rdsargo36
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
Error: Previous command failed (exitcode=1
<br>
<p>Now the original runs were done on an Intel box (and this is where OpenMPI was comilped).
<br>
I am trying to run now on an AMD based cluster node.
<br>
<p>So --mca paffinity-alone 1  works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bysocket --bind-to-core doesn't.
<br>
<p>Does this make sense to you folks?  If the AMD (running SuSE 11.1, BTW) doesn't support paffinity, why does the --mca version run?  Is there some way to check/set whether a system would support --bysocket etc?  Does it matter which machine I compiled on?
<br>
<p>And compare the following:
<br>
<p>[test_lsf2]rds4020[1010]% /apps/share/openmpi/1.6.4.I1404211/bin/ompi_info | grep -i affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
<p>[test_lsf2]rds4020[1010]% /apps/share/openmpi/1.4.2.I1404211/bin/ompi_info | grep -i affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
<br>
<p>[test_lsf2]rds4020[1012]% /apps/share/openmpi/1.8.4.I1404211/bin/ompi_info | grep -i affinity
<br>
(no output)
<br>
<p>Shouldn't the 1.8.4 version show something?
<br>
<p>Thank again for the help so far and appreciate any comments/help on the above.
<br>
tom
<br>
________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Friday, April 10, 2015 11:38 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
<br>
<p>Your configure options look fine.
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
<p><p>On Apr 10, 2015, at 7:24 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>Thanks for the responses.
<br>
<p>The idea is to bind one process per processor.  The actual problem that prompted the investigation is that a job
<br>
ran with 1.4.2 runs in 59 minutes and the same job in 1.6.4 and 1.8.4 takes 79 minutes on the same machine, same compiler etc.  In trying to track down the reason for the run time differences, I found that the behavior is different regarding the binding.  Hence the question.
<br>
<p>I believe it is doing what we requested, but not what we want.  The bind-to-socket was just one attempt at making
<br>
it bind one per processor.  I tried about 15 different combinations of the mpirun args and none matched the behavior of 1.4.2 or the run time of 1.4.2 and is a huge concern for us.
<br>
<p>I just checked this machine and hyperthreading is on.  I can change that and retest.
<br>
<p>Are my configure options ok for the 1.6.4+ configuring?
<br>
And what mpirun options should I be using to get 1 process per processor?
<br>
<p>This job was an 8 core test job, but the core counts varies per type of job (and will be run on the big clusters, not this compile server).
<br>
<p>The run time differences show up across all our clusters, Intel based, AMD based, various SuSE OS versions.
<br>
<p>thanks
<br>
tom
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
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
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17209.php">http://www.open-mpi.org/community/lists/devel/2015/04/17209.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
