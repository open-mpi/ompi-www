<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 13:20:06 2015" -->
<!-- isoreceived="20150408172006" -->
<!-- sent="Wed, 8 Apr 2015 17:20:03 +0000" -->
<!-- isosent="20150408172003" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EA84A3_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EA8490_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 13:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I just wanted to add that roughly a year ago I was fighting w/these
<br>
same issues, but was re-tasked to more pressing issues and had to
<br>
abandon looking into these OpenMPI 1.8.2 issues on our CentOS 6.3
<br>
cluster.
<br>
<p>In any case, in digging around I found you had the following
<br>
recommendation back then:
<br>
<p><span class="quotelev1">&gt; Argh - yeah, I got confused as things context switched a few too many times. The 1.8.2 release should certainly understand that arrangement, and --hetero-nodes. The only way it wouldn't see the latter is if you configure it --without-hwloc, or hwloc refused to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since there was a question about the numactl-devel requirement, I suspect that is the root cause of all evil in this case and the lack of --hetero-nodes would confirm that diagnosis :-)
</span><br>
<p>So the numactl-devel library is required for OpenMPI to function on NUMA
<br>
nodes? Or maybe just NUMA nodes that also have hyperthreading capabilities?
<br>
<p>Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Lane, William [William.Lane_at_[hidden]]
<br>
Sent: Wednesday, April 08, 2015 9:29 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>Ralph,
<br>
<p>Thanks for YOUR help,  I never
<br>
would've managed to get the LAPACK
<br>
benchmark running on more than one
<br>
node in our cluster without your help.
<br>
<p>Ralph, is hyperthreading more of a curse
<br>
than an advantage for HPC applications?
<br>
<p>I'm going to go through all the OpenMPI
<br>
articles on hyperthreading and NUMA to
<br>
see if that will shed any light on these
<br>
issues.
<br>
<p>-Bill L.
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, April 07, 2015 7:32 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>I&#146;m not sure our man pages are good enough to answer your question, but here is the URL
<br>
<p><a href="http://www.open-mpi.org/doc/v1.8/">http://www.open-mpi.org/doc/v1.8/</a>
<br>
<p>I&#146;m a tad tied up right now, but I&#146;ll try to address this prior to 1.8.5 release. Thanks for all that debug effort! Helps a bunch.
<br>
<p>On Apr 7, 2015, at 1:17 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
<p>Ralph,
<br>
<p>I've finally had some luck using the following:
<br>
$MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
<br>
<p>Where $NSLOTS was 56 and my hostfile hostfile-single is:
<br>
<p>csclprd3-0-0 slots=12 max-slots=24
<br>
csclprd3-0-1 slots=6 max-slots=12
<br>
csclprd3-0-2 slots=6 max-slots=12
<br>
csclprd3-0-3 slots=6 max-slots=12
<br>
csclprd3-0-4 slots=6 max-slots=12
<br>
csclprd3-0-5 slots=6 max-slots=12
<br>
csclprd3-0-6 slots=6 max-slots=12
<br>
csclprd3-6-1 slots=4 max-slots=4
<br>
csclprd3-6-5 slots=4 max-slots=4
<br>
<p>The max-slots differs from slots on some nodes
<br>
because I include the hyperthreaded cores in
<br>
the max-slots, the last two nodes have CPU's that
<br>
don't support hyperthreading at all.
<br>
<p>Does --use-hwthread-cpus prevent slots from
<br>
being assigned to hyperthreading cores?
<br>
<p>For some reason the manpage for OpenMPI 1.8.2
<br>
isn't installed on our CentOS 6.3 systems is there a
<br>
URL I can I find a copy of the manpages for OpenMPI 1.8.2?
<br>
<p>Thanks for your help,
<br>
<p>-Bill Lane
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Monday, April 06, 2015 1:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>Hmmm&#133;well, that shouldn&#146;t be the issue. To check, try running it with &#147;bind-to none&#148;. If you can get a backtrace telling us where it is crashing, that would also help.
<br>
<p><p>On Apr 6, 2015, at 12:24 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
<p>Ralph,
<br>
<p>For the following two different commandline invocations of the LAPACK benchmark
<br>
<p>$MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --bind-to hwthread --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
<br>
<p>$MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --bind-to-core --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
<br>
<p>I'm receiving the same kinds of OpenMPI error messages (but for different nodes in the ring):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[csclprd3-0-16:25940] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[csclprd3-0-16:25940] Signal: Bus error (7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[csclprd3-0-16:25940] Signal code: Non-existant physical address (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[csclprd3-0-16:25940] Failing at address: 0x7f8b1b5a2600
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that process rank 82 with PID 25936 on node csclprd3-0-16 exited on signal 7 (Bus error).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>It seems to occur on systems that have more than one, physical CPU installed. Could
<br>
this be due to a lack of the correct NUMA libraries being installed?
<br>
<p>-Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Sunday, April 05, 2015 6:09 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p><p>On Apr 5, 2015, at 5:58 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
<p>I think some of the Intel Blade systems in the cluster are
<br>
dual core, but don't support hyperthreading. Maybe it
<br>
would be better to exclude hyperthreading altogether
<br>
from submitted OpenMPI jobs?
<br>
<p>Yes - or you can add &quot;--hetero-nodes -use-hwthread-cpus --bind-to hwthread&quot; to the cmd line. This tells mpirun that the nodes aren't all the same, and so it has to look at each node's topology instead of taking the first node as the template for everything. The second tells it to use the HTs as independent cpus where they are supported.
<br>
<p>I'm not entirely sure the suggestion will work - if we hit a place where HT isn't supported, we may balk at being asked to bind to HTs. I can probably make a change that supports this kind of hetero arrangement (perhaps something like bind-to pu) - might make it into 1.8.5 (we are just starting the release process on it now).
<br>
<p><p>OpenMPI doesn't crash, but it doesn't run the LAPACK
<br>
benchmark either.
<br>
<p>Thanks again Ralph.
<br>
<p>Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Wednesday, April 01, 2015 8:40 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>Bingo - you said the magic word. This is a terminology issue. When we say &quot;core&quot;, we mean the old definition of &quot;core&quot;, not &quot;hyperthreads&quot;. If you want to use HTs as your base processing unit and bind to them, then you need to specify --bind-to hwthread. That warning should then go away.
<br>
<p>We don't require a swap region be mounted - I didn't see anything in your original message indicating that OMPI had actually crashed, but just wasn't launching due to the above issue. Were you actually seeing crashes as well?
<br>
<p><p>On Wed, Apr 1, 2015 at 8:31 AM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
Ralph,
<br>
<p>Here's the associated hostfile:
<br>
<p>#openMPI hostfile for csclprd3
<br>
#max slots prevents oversubscribing csclprd3-0-9
<br>
csclprd3-0-0 slots=12 max-slots=12
<br>
csclprd3-0-1 slots=6 max-slots=6
<br>
csclprd3-0-2 slots=6 max-slots=6
<br>
csclprd3-0-3 slots=6 max-slots=6
<br>
csclprd3-0-4 slots=6 max-slots=6
<br>
csclprd3-0-5 slots=6 max-slots=6
<br>
csclprd3-0-6 slots=6 max-slots=6
<br>
csclprd3-0-7 slots=32 max-slots=32
<br>
csclprd3-0-8 slots=32 max-slots=32
<br>
csclprd3-0-9 slots=32 max-slots=32
<br>
csclprd3-0-10 slots=32 max-slots=32
<br>
csclprd3-0-11 slots=32 max-slots=32
<br>
csclprd3-0-12 slots=12 max-slots=12
<br>
csclprd3-0-13 slots=24 max-slots=24
<br>
csclprd3-0-14 slots=16 max-slots=16
<br>
csclprd3-0-15 slots=16 max-slots=16
<br>
csclprd3-0-16 slots=24 max-slots=24
<br>
csclprd3-0-17 slots=24 max-slots=24
<br>
csclprd3-6-1 slots=4 max-slots=4
<br>
csclprd3-6-5 slots=4 max-slots=4
<br>
<p>The number of slots also includes hyperthreading
<br>
cores.
<br>
<p>One more question, would not having defined swap
<br>
partitions on all the nodes in the ring cause OpenMPI
<br>
to crash? Because no swap partitions are defined
<br>
for any of the above systems.
<br>
<p>-Bill L.
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Wednesday, April 01, 2015 5:04 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>The warning about binding to memory is due to not having numactl-devel installed on the system. The job would still run, but we are warning you that we cannot bind memory to the same domain as the core where we bind the process. Can cause poor performance, but not fatal. I forget the name of the param, but you can tell us to &quot;shut up&quot; :-)
<br>
<p>The other warning/error indicates that we aren't seeing enough cores on the allocation you gave us via the hostile to support one proc/core - i.e., we didn't at least 128 cores in the sum of the nodes you told us about. I take it you were expecting that there were that many or more?
<br>
<p>Ralph
<br>
<p><p>On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
I'm having problems running OpenMPI jobs
<br>
(using a hostfile) on an HPC cluster running
<br>
ROCKS on CentOS 6.3. I'm running OpenMPI
<br>
outside of Sun Grid Engine (i.e. it is not submitted
<br>
as a job to SGE). The program being run is a LAPACK
<br>
benchmark. The commandline parameter I'm
<br>
using to run the jobs is:
<br>
<p>$MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
<br>
<p>Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
<br>
NSLOTS=128
<br>
<p>I'm getting errors of the form and OpenMPI never runs the LAPACK benchmark:
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;WARNING: a request was made to bind a process. While the system
<br>
&nbsp;&nbsp;&nbsp;supports binding the process itself, at least one node does NOT
<br>
&nbsp;&nbsp;&nbsp;support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Node:  csclprd3-0-11
<br>
<p>&nbsp;&nbsp;&nbsp;This usually is due to not having the required NUMA support installed
<br>
&nbsp;&nbsp;&nbsp;on the node. In some Linux distributions, the required support is
<br>
&nbsp;&nbsp;&nbsp;contained in the libnumactl and libnumactl-devel packages.
<br>
&nbsp;&nbsp;&nbsp;This is a warning only; your job will continue, though performance may be degraded.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A request was made to bind to that would result in binding more
<br>
&nbsp;&nbsp;&nbsp;processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node:        csclprd3-0-11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>&nbsp;&nbsp;&nbsp;You can override this protection by adding the &quot;overload-allowed&quot;
<br>
&nbsp;&nbsp;&nbsp;option to your binding directive.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>The only installed numa packages are:
<br>
numactl.x86_64                                                2.0.7-3.el6                        @centos6.3-x86_64-0/$
<br>
<p>When I search for the available NUMA packages I find:
<br>
<p>yum search numa | less
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loaded plugins: fastestmirror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loading mirror speeds from cached hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;============================== N/S Matched: numa ===============================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.i686 : Development package for building Applications that use numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.x86_64 : Development package for building Applications that use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numad.x86_64 : NUMA user daemon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl.i686 : Library for tuning for Non Uniform Memory Access machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
<br>
<p>Do I need to install additional and/or different NUMA packages in order to get OpenMPI to work
<br>
on this cluster?
<br>
<p>-Bill Lane
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26611.php">http://www.open-mpi.org/community/lists/users/2015/04/26611.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26618.php">http://www.open-mpi.org/community/lists/users/2015/04/26618.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26643.php">http://www.open-mpi.org/community/lists/users/2015/04/26643.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
