<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 12:51:40 2006" -->
<!-- isoreceived="20061002165140" -->
<!-- sent="Mon, 02 Oct 2006 12:50:53 -0400" -->
<!-- isosent="20061002165053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Running the v1.1 nightly" -->
<!-- id="C146BBAD.291CB%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F4C3C164-A004-4173-9472-3B2C1727146C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-02 12:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now worries -- could you send the --verbose output?
<br>
<p><p>On 10/2/06 12:49 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was running with --verbose, but not --debug. I'll try that when the
</span><br>
<span class="quotelev1">&gt; machine is back up on Wed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else seen this behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2006, at 9:57 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hrm.  Well, the lack of &quot;success=1&quot; is why it didn't run, but then the
</span><br>
<span class="quotelev2">&gt;&gt; larger question becomes &quot;why didn't it succeed?&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have --verbose or --debug output for the build, perchance?
</span><br>
<span class="quotelev2">&gt;&gt; If it
</span><br>
<span class="quotelev2">&gt;&gt; failed to build, there should be some output about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/1/06 7:32 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I dug into this about as much as I can, and found that the v1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build seems to have completed successfully, but doesn't contain the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'success = 1' line. I attached the build dumps in case that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure this one out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts on why this might happen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 29, 2006, at 3:40 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has anyone been using MTT to test the v1.1 nightly?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been trying to run the [trivial,ibm] tests against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [trunk,v1.2,v1.1]. MTT will build all the sources and all the tests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with all the sources. It will then run the trivial tests against all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; three sources, but only the ibm tests against the trunk and v1.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I looked at the logs produced and there didn't seem to be any errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the ibm+v1.1 test build. Would there be any other reason this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would happen?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
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
