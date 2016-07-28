<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 12:49:18 2006" -->
<!-- isoreceived="20061002164918" -->
<!-- sent="Mon, 2 Oct 2006 12:49:13 -0400" -->
<!-- isosent="20061002164913" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Running the v1.1 nightly" -->
<!-- id="F4C3C164-A004-4173-9472-3B2C1727146C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1469323.29129%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-02 12:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was running with --verbose, but not --debug. I'll try that when the  
<br>
machine is back up on Wed.
<br>
<p>Has anyone else seen this behavior?
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Oct 2, 2006, at 9:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hrm.  Well, the lack of &quot;success=1&quot; is why it didn't run, but then the
</span><br>
<span class="quotelev1">&gt; larger question becomes &quot;why didn't it succeed?&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have --verbose or --debug output for the build, perchance?   
</span><br>
<span class="quotelev1">&gt; If it
</span><br>
<span class="quotelev1">&gt; failed to build, there should be some output about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/1/06 7:32 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I dug into this about as much as I can, and found that the v1.1
</span><br>
<span class="quotelev2">&gt;&gt; build seems to have completed successfully, but doesn't contain the
</span><br>
<span class="quotelev2">&gt;&gt; 'success = 1' line. I attached the build dumps in case that helps
</span><br>
<span class="quotelev2">&gt;&gt; figure this one out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on why this might happen,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2006, at 3:40 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone been using MTT to test the v1.1 nightly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been trying to run the [trivial,ibm] tests against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [trunk,v1.2,v1.1]. MTT will build all the sources and all the tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with all the sources. It will then run the trivial tests against all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; three sources, but only the ibm tests against the trunk and v1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked at the logs produced and there didn't seem to be any errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the ibm+v1.1 test build. Would there be any other reason this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would happen?
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
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0119.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
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
