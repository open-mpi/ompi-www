<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 08:33:43 2005" -->
<!-- isoreceived="20050920133343" -->
<!-- sent="Tue, 20 Sep 2005 07:33:40 -0600" -->
<!-- isosent="20050920133340" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] attempt to override read-only MCA	parameter	&amp;quot;orte_infrastructure&amp;quot; - FIXED!" -->
<!-- id="43300FB4.4090000_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b2c1411cd6d02f9baecbc0d35ea15640_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 08:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daryl,
<br>
<p>I've added support for this in bproc, committed to the trunk.
<br>
<p>Tim
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; No, you are not doing anything wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, this is not handled.  I think I documented this in the 
</span><br>
<span class="quotelev1">&gt; README file, but I can add a message to the orterun --help output, or 
</span><br>
<span class="quotelev1">&gt; just remove it for the time being.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2005, at 6:12 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Daryl,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Tim, the latest nightly fixes this - thanks!  Can I report another?  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;can't seem to specify -H|-host|--host &lt;arg0&gt;; mpirun seems to ignore 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;argument:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   %  mpirun -np 2 -H 0,4 ./cpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process 0 on n0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process 1 on n1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   pi is approximately 3.1416009869231241, Error is 0.0000083333333309
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   wall clock time = 0.010952
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Am I specifying this wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'll take a look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
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
