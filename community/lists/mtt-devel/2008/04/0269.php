<?
$subject_val = "Re: [MTT devel] Tracking process stats";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 17:08:25 2008" -->
<!-- isoreceived="20080422210825" -->
<!-- sent="Tue, 22 Apr 2008 17:08:16 -0400" -->
<!-- isosent="20080422210816" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Tracking process stats" -->
<!-- id="20080422210816.GJ51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D67F824A-D0EA-4125-A5EE-CCA870F4796F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Tracking process stats<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 17:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>Reply:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr/22/2008 03:19:35PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gathering the info from any given might be a little difficult -- we'd  
</span><br>
<span class="quotelev1">&gt; have to enlist orte somehow.  The orteds could conceivably be able to  
</span><br>
<span class="quotelev1">&gt; get this info because the MPI processes are their children, after  
</span><br>
<span class="quotelev1">&gt; all.  The orteds would then need to gather this info and make it  
</span><br>
<span class="quotelev1">&gt; available somehow (e.g., mpirun could dump out a file, or perhaps  
</span><br>
<span class="quotelev1">&gt; something to stdout, ...etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>What about using Proc::ProcessTable or the &quot;ps&quot; command?
<br>
<p>&nbsp;&nbsp;<a href="http://www.perlmonks.org/?node_id=115098">http://www.perlmonks.org/?node_id=115098</a>
<br>
<p>I'm guessing this would be difficult because of processes
<br>
on remote nodes?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2008, at 3:16 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was thinking for very test as an extra bit or two of information.
</span><br>
<span class="quotelev2">&gt; &gt; But we could try a test suite too, but we would have to think about
</span><br>
<span class="quotelev2">&gt; &gt; what we would want to exercise in it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 22, 2008, at 1:45 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Apr/22/2008 01:35:06PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On the Open MPI teleconf this morning Rich mentioned that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; he was  noticing odd memory usage. It got me thinking,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would it be useful for MTT to track important aspects of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the process such as memory use?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just a thought. I'm not exactly sure how we would report
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or record  this, but if it is useful we can file a bug for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it :)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would this require a new &quot;memory-usage&quot; test suite? Or were
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you thinking more along the lines of a new integer column in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the test_run table to record memory usage for *every* test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
<li><strong>Reply:</strong> <a href="0270.php">Jeff Squyres: "Re: [MTT devel] Tracking process stats"</a>
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
