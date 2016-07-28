<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 17:01:33 2015" -->
<!-- isoreceived="20150811210133" -->
<!-- sent="Tue, 11 Aug 2015 21:01:29 +0000" -->
<!-- isosent="20150811210129" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EF3980_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87io8lg4ww.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Date:</strong> 2015-08-11 17:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can successfully run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine but not via qrsh. We're
<br>
using CentOS 6.3 and a heterogeneous cluster of hyperthreaded and non-hyperthreaded blades
<br>
and x3550 chassis. OpenMPI 1.8.7 has been built w/the debug switch as well.
<br>
<p>Here's my latest errors:
<br>
qrsh -V -now yes -pe mpi 209 mpirun -np 209 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl ^sm --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3
<br>
error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-0-4&quot; didn't accept task
<br>
error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-4-1&quot; didn't accept task
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p>NOTE: the hosts that &quot;didn't accept task&quot; were different in two different runs but the errors were the same.
<br>
<p>Here's the definition of the mpi Parallel Environment on our Son-of-Gridengine cluster:
<br>
<p>pe_name            mpi
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /opt/sge/mpi/startmpi.sh $pe_hostfile
<br>
stop_proc_args     /opt/sge/mpi/stopmpi.sh
<br>
allocation_rule    $fill_up
<br>
control_slaves     FALSE
<br>
job_is_first_task  TRUE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
qsort_args         NONE
<br>
<p>Qsort_args is set to NONE, but it's supposed to be set to TRUE right?
<br>
<p>-Bill L.
<br>
<p>If I can run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine w/no issues it has to be Son-of-Gridengine that's
<br>
the issue right?
<br>
<p>-Bill L.
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Dave Love [d.love_at_[hidden]]
<br>
Sent: Tuesday, August 11, 2015 9:34 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Son of Grid Engine,   Parallel Environments and OpenMPI 1.8.7
<br>
<p>&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I read @
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that for OpenMPI Parallel Environments there's
</span><br>
<span class="quotelev1">&gt; a special consideration for Son of Grid Engine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    '&quot;qsort_args&quot; is necessary with the Son of Grid Engine distribution,
</span><br>
<span class="quotelev1">&gt;    version 8.1.1 and later, and probably only applicable to it.  For
</span><br>
<span class="quotelev1">&gt;    very old versions of SGE, omit &quot;accounting_summary&quot; too.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this requirement still hold true for OpenMPI 1.8.7? Because
</span><br>
<span class="quotelev1">&gt; the webpage above only refers to much older versions of OpenMPI.
</span><br>
<p>That's actually unrelated to OMPI, and the current distribution contains
<br>
an &quot;mpi&quot; PE for tight integration which should work with OMPI and modern
<br>
MPICH-y startup (hydra?), at least.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27426.php">http://www.open-mpi.org/community/lists/users/2015/08/27426.php</a>
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
