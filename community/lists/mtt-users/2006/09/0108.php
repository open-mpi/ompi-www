<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 15:25:11 2006" -->
<!-- isoreceived="20060926192511" -->
<!-- sent="Tue, 26 Sep 2006 15:25:08 -0400" -->
<!-- isosent="20060926192508" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Post run result submission" -->
<!-- id="2D3B0352-0455-4C52-BDD8-2236F7BEEEE1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060926191730.GC12177_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-26 15:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0107.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the login node is the only one that has a window to the outside  
<br>
world. I can't access the outside world from within an allocation.
<br>
<p>So my script does:
<br>
&nbsp;&nbsp;- Login Node:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1) Get MPI Tarballs
<br>
&nbsp;&nbsp;- 1 Compute node:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0) Allocate a compute node to compile.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1) Build/Install MPI builds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2) Deallocate compute node
<br>
&nbsp;&nbsp;- Login Node:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1) Get MPI Test sources
<br>
&nbsp;&nbsp;- N Compute Nodes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0) Allocate N compute Nodes to run the tests on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1) Build/Install Tests
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2) Run the tests...
<br>
&nbsp;&nbsp;- Login Node:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0) Check to make sure we are all done (scheduler didn't kill the  
<br>
job, etc.).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1) Report results to MTT *
<br>
<p>* This is what I am missing currently.
<br>
<p>I currently have the &quot;Reporter: IU Database&quot; section commented out so  
<br>
that once the tests finish they don't try to post the database, since  
<br>
they can't see the outside world.
<br>
<p>On Sep 26, 2006, at 3:17 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep/26/2006 02:01:41PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm setting up MTT on BigRed at IU, and due to some visibility
</span><br>
<span class="quotelev2">&gt;&gt; requirements of the compute nodes I segment the MTT operations.
</span><br>
<span class="quotelev2">&gt;&gt; Currently I have a perl script that does all the svn and wget
</span><br>
<span class="quotelev2">&gt;&gt; interactions from the login node, then compiles and runs on the
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes. This all seems to work fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I am wondering how to get the textfile results that were
</span><br>
<span class="quotelev2">&gt;&gt; generated back to the MTT database once the run has finished.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run the &quot;MPI Install&quot;, &quot;Test build&quot;, and &quot;Test run&quot;
</span><br>
<span class="quotelev1">&gt; sections from the same machine (call it the
</span><br>
<span class="quotelev1">&gt; &quot;Install-Build-Run&quot; node), I would think you could then
</span><br>
<span class="quotelev1">&gt; additionaly run the &quot;Reporter: IU Database&quot; section. Or can
</span><br>
<span class="quotelev1">&gt; you not do the HTTP POST from Install-Build-Run node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know HLRS deals with this situation, is there a supported way of
</span><br>
<span class="quotelev2">&gt;&gt; doing this yet or is it a future work item still?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently I have a method to send a summary email to our team after
</span><br>
<span class="quotelev2">&gt;&gt; the results are generated, so this isn't a show stopper for IU or
</span><br>
<span class="quotelev2">&gt;&gt; anything, just something so we can share our results with the rest of
</span><br>
<span class="quotelev2">&gt;&gt; the team.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0107.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT users] Post run result submission"</a>
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
