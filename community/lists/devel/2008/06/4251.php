<?
$subject_val = "Re: [OMPI devel] mtt IBM SPAWN error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 07:21:35 2008" -->
<!-- isoreceived="20080630112135" -->
<!-- sent="Mon, 30 Jun 2008 14:21:30 +0300" -->
<!-- isosent="20080630112130" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt IBM SPAWN error" -->
<!-- id="453d39990806300421vc1f06f1m69983744894483c2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990806292338x33a66ac0n60ae87b5d568dc6a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtt IBM SPAWN error<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 07:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not familiar with spawn test of IBM, but maybe this is right behavior,
<br>
if spawn test allocates 3 ranks on the node, and then allocates another 3
<br>
then this test suppose to fail due to max_slots=4.
<br>
<p>But it fails with the fallowing hostfile as well BUT WITH A DIFFERENT ERROR.
<br>
<p>#cat hostfile2
<br>
witch2 slots=4 max_slots=4
<br>
witch3 slots=4 max_slots=4
<br>
witch1:/home/BENCHMARKS/IBM # /home/USERS/lenny/OMPI_ORTE_18772/bin/mpirun
<br>
-np 3 -hostfile hostfile2 dynamic/spawn
<br>
bash: orted: command not found
<br>
[witch1:22789]
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 22791) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
There may be more information reported by the environment (see above).
<br>
This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
[witch1:22789]
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;witch3 - daemon did not report back when launched
<br>
<p>On Mon, Jun 30, 2008 at 9:38 AM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; trying to run mtt I failed to run IBM spawn test. It fails only when using
</span><br>
<span class="quotelev1">&gt; hostfile, and not when using host list.
</span><br>
<span class="quotelev1">&gt; ( OMPI from TRUNK )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is working :
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2 dynamic/spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This Fails:
</span><br>
<span class="quotelev1">&gt; # cat hostfile
</span><br>
<span class="quotelev1">&gt; witch2 slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -hostfile hostfile dynamic/spawn
</span><br>
<span class="quotelev1">&gt; [witch1:12392]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 3 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;   dynamic/spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [witch1:12392]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using hostfile1 also works
</span><br>
<span class="quotelev1">&gt; #cat hostfile1
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4631.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
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
