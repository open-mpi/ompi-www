<?
$subject_val = "Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 18:19:27 2010" -->
<!-- isoreceived="20100528221927" -->
<!-- sent="Fri, 28 May 2010 16:19:17 -0600" -->
<!-- isosent="20100528221917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?" -->
<!-- id="67BF6BCF-3083-4723-866E-2B0CCA377D8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTino0M3cbnGdlqmCQZkSnFTWKJYAhviNMnSaXvAn_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 18:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13179.php">George Wm Turner: "Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>In reply to:</strong> <a href="13178.php">Rahul Nabar: "[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2010, at 3:29 PM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; Each of our servers has twin eth cards: 1GigE and 10GigE. How does
</span><br>
<span class="quotelev1">&gt; openmpi decide which card to use while sending messages on? One of the
</span><br>
<span class="quotelev1">&gt; cards is on a 10.0. IP address subnet whereas the other cards are on a
</span><br>
<span class="quotelev1">&gt; 192.168 adress subnet. Can I select one or the other by specifying the
</span><br>
<span class="quotelev1">&gt; --host option with the correct IP addresses?
</span><br>
<p>You would want to specify the network in two places:
<br>
<p>-mca oob_tcp_if_include eth0   &lt;== specifies which interface to use for out-of-band messages
<br>
<p>-mca btl_tcp_if_include eth1    &lt;== specifies which interface to use for MPI messages on TCP
<br>
<p>They can be the same network - doesn't matter. Important thing is that all nodes are reachable on that network.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does it select the default though? Frequently I call mpirun from
</span><br>
<span class="quotelev1">&gt; within a PBS wrapper and then there is no explicit --host directive.
</span><br>
<span class="quotelev1">&gt; (I think PBS somehow communicates to mpirun what the assigned hostfile
</span><br>
<span class="quotelev1">&gt; is) In such a case though, which interface will mpirun use?
</span><br>
<p>For out-of-band, we default to the first one alphabetically, I believe. We don't do any connectivity testing, so the OOB interface must be common to all nodes.
<br>
<p>The TCP BTL, on the other hand, will check all available interfaces for connectivity, so the procs should &quot;discover&quot; a path to each other over whatever network interfaces are available.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13179.php">George Wm Turner: "Re: [OMPI users] [torqueusers] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<li><strong>In reply to:</strong> <a href="13178.php">Rahul Nabar: "[OMPI users] which eth interface does mpi use by default when torque supplies it with a hostfile?"</a>
<!-- nextthread="start" -->
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
