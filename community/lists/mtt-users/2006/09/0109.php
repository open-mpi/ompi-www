<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 18:26:43 2006" -->
<!-- isoreceived="20060926222643" -->
<!-- sent="Tue, 26 Sep 2006 18:26:40 -0400" -->
<!-- isosent="20060926222640" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Post run result submission" -->
<!-- id="20060926222639.GD12177_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C13F0069.286AD%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-26 18:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Maybe in reply to:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've posted the helper script here:
<br>
<p><a href="http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper">http://svn.open-mpi.org/trac/mtt/wiki/SubmitHelper</a>
<br>
<p>Let me know how it works.
<br>
<p>-Ethan
<br>
<p><p>On Tue, Sep/26/2006 04:06:01PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; For the moment, that might be sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What HLRS does is open ssh tunnels back to the head node and then http put's
</span><br>
<span class="quotelev1">&gt; through those back to the IU database.  Icky, but it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that there are some other higher-priority items that we need
</span><br>
<span class="quotelev1">&gt; to get done in MTT (performane measurements, for example) that, since there
</span><br>
<span class="quotelev1">&gt; are [icky] workarounds for http puts, we put the whole &quot;disconnected
</span><br>
<span class="quotelev1">&gt; scenario&quot; stuff at a lower priority.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/26/06 3:51 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have an unpretty solution that maybe could serve as a
</span><br>
<span class="quotelev2">&gt; &gt; stopgap between now and when we implement the &quot;disconnected
</span><br>
<span class="quotelev2">&gt; &gt; scenarios&quot; feature.  I have a very simple and easy-to-use
</span><br>
<span class="quotelev2">&gt; &gt; perl script that just HTTP POSTs a debug file (what *would*
</span><br>
<span class="quotelev2">&gt; &gt; have gone to the database). E.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ ./poster.pl -f 'mttdatabase_debug*.txt'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (Where mttdatabase_debug would be what you supply to the
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_debug_filename ini param in the &quot;IU Database&quot;
</span><br>
<span class="quotelev2">&gt; &gt; section.)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think this would fill in your missing * step below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does that sound okay, Jeff?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Sep/26/2006 03:25:08PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So the login node is the only one that has a window to the outside
</span><br>
<span class="quotelev3">&gt; &gt;&gt; world. I can't access the outside world from within an allocation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So my script does:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   - Login Node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     1) Get MPI Tarballs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   - 1 Compute node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     0) Allocate a compute node to compile.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     1) Build/Install MPI builds
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     2) Deallocate compute node
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   - Login Node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     1) Get MPI Test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   - N Compute Nodes:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     0) Allocate N compute Nodes to run the tests on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     1) Build/Install Tests
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     2) Run the tests...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   - Login Node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     0) Check to make sure we are all done (scheduler didn't kill the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        job, etc.).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     1) Report results to MTT *
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * This is what I am missing currently.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I currently have the &quot;Reporter: IU Database&quot; section commented out so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that once the tests finish they don't try to post the database, since
</span><br>
<span class="quotelev3">&gt; &gt;&gt; they can't see the outside world.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 26, 2006, at 3:17 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, Sep/26/2006 02:01:41PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm setting up MTT on BigRed at IU, and due to some visibility
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; requirements of the compute nodes I segment the MTT operations.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Currently I have a perl script that does all the svn and wget
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; interactions from the login node, then compiles and runs on the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; compute nodes. This all seems to work fine.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Now I am wondering how to get the textfile results that were
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; generated back to the MTT database once the run has finished.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you run the &quot;MPI Install&quot;, &quot;Test build&quot;, and &quot;Test run&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sections from the same machine (call it the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;Install-Build-Run&quot; node), I would think you could then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; additionaly run the &quot;Reporter: IU Database&quot; section. Or can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you not do the HTTP POST from Install-Build-Run node?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I know HLRS deals with this situation, is there a supported way of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; doing this yet or is it a future work item still?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Currently I have a method to send a summary email to our team after
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the results are generated, so this isn't a show stopper for IU or
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; anything, just something so we can share our results with the rest of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the team.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Maybe in reply to:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
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
