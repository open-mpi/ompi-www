<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 03:51:09 2005" -->
<!-- isoreceived="20050920085109" -->
<!-- sent="Tue, 20 Sep 2005 10:51:06 +0200" -->
<!-- isosent="20050920085106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] attempt to override read-only MCA parameter	&amp;quot;orte_infrastructure&amp;quot; - FIXED!" -->
<!-- id="b2c1411cd6d02f9baecbc0d35ea15640_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="432EE367.7020406_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 03:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Brian Barrett: "Re: [O-MPI users] Compile problem"</a>
<li><strong>In reply to:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Reply:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, you are not doing anything wrong.
<br>
<p>Currently, this is not handled.  I think I documented this in the 
<br>
README file, but I can add a message to the orterun --help output, or 
<br>
just remove it for the time being.
<br>
<p><p>On Sep 19, 2005, at 6:12 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Daryl,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim, the latest nightly fixes this - thanks!  Can I report another?  I
</span><br>
<span class="quotelev2">&gt;&gt; can't seem to specify -H|-host|--host &lt;arg0&gt;; mpirun seems to ignore 
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; argument:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    %  mpirun -np 2 -H 0,4 ./cpi
</span><br>
<span class="quotelev2">&gt;&gt;    Process 0 on n0
</span><br>
<span class="quotelev2">&gt;&gt;    Process 1 on n1
</span><br>
<span class="quotelev2">&gt;&gt;    pi is approximately 3.1416009869231241, Error is 0.0000083333333309
</span><br>
<span class="quotelev2">&gt;&gt;    wall clock time = 0.010952
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I specifying this wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Brian Barrett: "Re: [O-MPI users] Compile problem"</a>
<li><strong>In reply to:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Reply:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
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
