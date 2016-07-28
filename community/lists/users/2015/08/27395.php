<?
$subject_val = "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 03:59:11 2015" -->
<!-- isoreceived="20150805075911" -->
<!-- sent="Wed, 5 Aug 2015 00:58:58 -0700" -->
<!-- isosent="20150805075858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?" -->
<!-- id="CAMD57oc1P15zN_7CX70yHFvMALxqH0_R+xrXkmpPZjHt7yaj_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EF0634_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 03:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27396.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27394.php">Lane, William: "[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27394.php">Lane, William: "[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill
<br>
<p>You need numactl-devel on the nodes. Not having them means we cannot ensure
<br>
memory is bound local to the procs, which will hurt performance but not
<br>
much else. There is an MCA param to turn off the warnings if you choose not
<br>
to install the libs: hwloc_base_mem_bind_failure_action=silent
<br>
<p>Ralph
<br>
<p><p>On Tue, Aug 4, 2015 at 10:36 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm running OpenMPI 1.8.7 tests on a mixed bag cluster of various systems
</span><br>
<span class="quotelev1">&gt; under CentOS 6.3, I've been intermittently getting warnings about not
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev1">&gt; the proper NUMA libraries installed. Which NUMA libraries should be
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; for CentOS 6.3 and OpenMPI 1.8.7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what I currently have installed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     yum list installed *numa*
</span><br>
<span class="quotelev1">&gt;     numactl.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the list of available NUMA libraries for CentOS 6.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     listed via: yum search numa | less
</span><br>
<span class="quotelev1">&gt;     numactl-devel.i686 : Development package for building Applications
</span><br>
<span class="quotelev1">&gt; that use numa
</span><br>
<span class="quotelev1">&gt;     numactl-devel.x86_64 : Development package for building Applications
</span><br>
<span class="quotelev1">&gt; that use
</span><br>
<span class="quotelev1">&gt;                      : numa
</span><br>
<span class="quotelev1">&gt;     numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev1">&gt;     numactl.i686 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt;     numactl.x86_64 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, since this cluster actually has working NUMA nodes, could the lack
</span><br>
<span class="quotelev1">&gt; of the proper NUMA libraries being installed cause any issues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev1">&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27394.php">http://www.open-mpi.org/community/lists/users/2015/08/27394.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27396.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27394.php">Lane, William: "[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27394.php">Lane, William: "[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
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
