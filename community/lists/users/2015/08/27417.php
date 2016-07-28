<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 16:25:24 2015" -->
<!-- isoreceived="20150810202524" -->
<!-- sent="Mon, 10 Aug 2015 20:25:21 +0000" -->
<!-- isosent="20150810202521" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EF2421_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57odPSh7_Y8mVo82woc2oPT=WM7bW=TBDDvbKW9b90+q+Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-10 16:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>In reply to:</strong> <a href="27403.php">Ralph Castain: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a qrsh run of OpenMPI 1.8.7 that actually generated an error message, usually
<br>
I get no output whatsoever (i.e. from stderr or stdout) from the job, and it eventually
<br>
generates core dumps:
<br>
<p>qrsh -V -now yes -pe orte 209 mpirun -np 209 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl ^sm --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  csclprd3-4-2
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        csclprd3-4-2
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>I'm using CentOS 6.3 and Son-of-Gridengine as my scheduling agent.
<br>
<p>The relevant NUMA libraries have been installed to the cluster:
<br>
<p>csclprd3-4-2 ~]$ yum list installed *numa*
<br>
Installed Packages
<br>
numactl.x86_64                                                2.0.7-3.el6                                           @centos6.3-x86_64-0/$releasever
<br>
numactl-devel.x86_64
<br>
<p>Here's the lstopo output for the node in question (a x3550-M3 node w/6-core Westmere CPU's and hyperthreading):
<br>
csclprd3-4-2 ~]$ lstopo
<br>
Machine (96GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 48GB) + Socket L#0 + L3 L#0 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#17)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 48GB) + Socket L#1 + L3 L#1 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#23)
<br>
<p>I'm going to setup a PE that has the appropriate parameters for OpenMPI
<br>
as described here:<a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
<br>
<p>and re-test w/this PE as well as using the --leave-session-attached --mca plm_base_verbose 5
<br>
mpirun switches.
<br>
<p>-Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, August 05, 2015 4:41 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7
<br>
<p>Well that stinks! Let me know what's going on and I'll take a look. FWIW, the best method is generally to configure OMPI with --enable-debug, and then run with &quot;--leave-session-attached --mca plm_base_verbose 5&quot;. That will tell us what the launcher thinks it is doing and what the daemons think is wrong.
<br>
<p><p>On Wed, Aug 5, 2015 at 3:17 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
Actually, we're still having problems submitting OpenMPI 1.8.7 jobs
<br>
to the cluster thru SGE (which we need to do in order to track usage
<br>
stats on the cluster). I suppose I'll make a PE w/the appropriate settings
<br>
and see if that makes a difference.
<br>
<p>-Bill L
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Wednesday, August 05, 2015 1:18 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7
<br>
<p>You know, I honestly don't know - there is a patch in there for qsort, but I haven't checked it against SGE. Let us know if you hit a problem and we'll try to figure it out.
<br>
<p>Glad to hear your cluster is working - nice to have such challenges to shake the cobwebs out :-)
<br>
<p>On Wed, Aug 5, 2015 at 12:43 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
I read @
<br>
<p><a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
<br>
<p>that for OpenMPI Parallel Environments there's
<br>
a special consideration for Son of Grid Engine:
<br>
<p>&nbsp;&nbsp;&nbsp;'&quot;qsort_args&quot; is necessary with the Son of Grid Engine distribution,
<br>
&nbsp;&nbsp;&nbsp;version 8.1.1 and later, and probably only applicable to it.  For
<br>
&nbsp;&nbsp;&nbsp;very old versions of SGE, omit &quot;accounting_summary&quot; too.'
<br>
<p>Does this requirement still hold true for OpenMPI 1.8.7? Because
<br>
the webpage above only refers to much older versions of OpenMPI.
<br>
<p>I also want to thank Ralph for all his help in debugging the manifold
<br>
problems w/our mixed bag cluster.
<br>
<p>-Bill Lane
<br>
<p><p><p><p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27397.php">http://www.open-mpi.org/community/lists/users/2015/08/27397.php</a>
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
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27402.php">http://www.open-mpi.org/community/lists/users/2015/08/27402.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27417/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27418.php">David Shrader: "[OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27416.php">Nils Smeds: "Re: [OMPI users] LAMA error - mpirun segfault"</a>
<li><strong>In reply to:</strong> <a href="27403.php">Ralph Castain: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
