<?
$subject_val = "Re: [OMPI users] Open MPI was unable to obtain the username";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 16:22:14 2014" -->
<!-- isoreceived="20141010202214" -->
<!-- sent="Fri, 10 Oct 2014 13:22:10 -0700" -->
<!-- isosent="20141010202210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI was unable to obtain the username" -->
<!-- id="7555F2B2-7D5A-44FC-AA96-A8169D658EB9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54383EF2.9070503_at_cs.umd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI was unable to obtain the username<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 16:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>Previous message:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>In reply to:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about delay - was on travel. Yes, that will avoid the issue.
<br>
<p>On Oct 10, 2014, at 1:17 PM, Gary Jackson &lt;garyj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To answer my own question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure with --disable-getpwuid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/10/14, 12:04 AM, Gary Jackson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to run MPI on a node to which I have access via HTCondor, but I
</span><br>
<span class="quotelev2">&gt;&gt; don't actually have an entry in the passwd file or LDAP. When I invoke
</span><br>
<span class="quotelev2">&gt;&gt; mpirun, I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev2">&gt;&gt; for its required temporary directories.  This type of error is usually
</span><br>
<span class="quotelev2">&gt;&gt; caused by a transient failure of network-based authentication services
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., LDAP or NIS failure due to network congestion), but can also be
</span><br>
<span class="quotelev2">&gt;&gt; an indication of system misconfiguration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any set of flags I can use to get OpenMPI to overlook the lack
</span><br>
<span class="quotelev2">&gt;&gt; of an actual username? I'd hoped that the --tmpdir flag would do what I
</span><br>
<span class="quotelev2">&gt;&gt; need. However, using the --tmpdir flag causes mpirun to complain that
</span><br>
<span class="quotelev2">&gt;&gt; the flag is unrecognized and exit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, &quot;get a real account on that node&quot; is not an option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25484.php">http://www.open-mpi.org/community/lists/users/2014/10/25484.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>Previous message:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>In reply to:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
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
