<?
$subject_val = "Re: [OMPI users] Open MPI was unable to obtain the username";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 16:17:58 2014" -->
<!-- isoreceived="20141010201758" -->
<!-- sent="Fri, 10 Oct 2014 16:17:54 -0400" -->
<!-- isosent="20141010201754" -->
<!-- name="Gary Jackson" -->
<!-- email="garyj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI was unable to obtain the username" -->
<!-- id="54383EF2.9070503_at_cs.umd.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54375ADA.301_at_cs.umd.edu" -->
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
<strong>From:</strong> Gary Jackson (<em>garyj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 16:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>In reply to:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Reply:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To answer my own question:
<br>
<p>Configure with --disable-getpwuid.
<br>
<p>On 10/10/14, 12:04 AM, Gary Jackson wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to run MPI on a node to which I have access via HTCondor, but I
</span><br>
<span class="quotelev1">&gt; don't actually have an entry in the passwd file or LDAP. When I invoke
</span><br>
<span class="quotelev1">&gt; mpirun, I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev1">&gt; for its required temporary directories.  This type of error is usually
</span><br>
<span class="quotelev1">&gt; caused by a transient failure of network-based authentication services
</span><br>
<span class="quotelev1">&gt; (e.g., LDAP or NIS failure due to network congestion), but can also be
</span><br>
<span class="quotelev1">&gt; an indication of system misconfiguration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any set of flags I can use to get OpenMPI to overlook the lack
</span><br>
<span class="quotelev1">&gt; of an actual username? I'd hoped that the --tmpdir flag would do what I
</span><br>
<span class="quotelev1">&gt; need. However, using the --tmpdir flag causes mpirun to complain that
</span><br>
<span class="quotelev1">&gt; the flag is unrecognized and exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, &quot;get a real account on that node&quot; is not an option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Gary
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>In reply to:</strong> <a href="25483.php">Gary Jackson: "[OMPI users] Open MPI was unable to obtain the username"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Reply:</strong> <a href="25485.php">Ralph Castain: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
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
