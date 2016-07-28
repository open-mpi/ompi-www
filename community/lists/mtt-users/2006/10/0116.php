<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct  1 19:32:58 2006" -->
<!-- isoreceived="20061001233258" -->
<!-- sent="Sun, 1 Oct 2006 19:32:55 -0400" -->
<!-- isosent="20061001233255" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Running the v1.1 nightly" -->
<!-- id="9E66E592-7F8A-4C36-BD84-8ECC5A602534_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE81A299-B6B4-46E2-8228-49FA823F1E35_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-01 19:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I dug into this about as much as I can, and found that the v1.1  
<br>
build seems to have completed successfully, but doesn't contain the  
<br>
'success = 1' line. I attached the build dumps in case that helps  
<br>
figure this one out.
<br>
<p><p>

<br><p>
<p>Any thoughts on why this might happen,
<br>
Josh
<br>
<p>On Sep 29, 2006, at 3:40 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone been using MTT to test the v1.1 nightly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to run the [trivial,ibm] tests against
</span><br>
<span class="quotelev1">&gt; [trunk,v1.2,v1.1]. MTT will build all the sources and all the tests
</span><br>
<span class="quotelev1">&gt; with all the sources. It will then run the trivial tests against all
</span><br>
<span class="quotelev1">&gt; three sources, but only the ibm tests against the trunk and v1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at the logs produced and there didn't seem to be any errors
</span><br>
<span class="quotelev1">&gt; with the ibm+v1.1 test build. Would there be any other reason this
</span><br>
<span class="quotelev1">&gt; would happen?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0116/ibm-build.tar.bz2">ibm-build.tar.bz2</a>
</ul>
<!-- attachment="ibm-build.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/09/0115.php">Josh Hursey: "[MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
<li><strong>Reply:</strong> <a href="0117.php">Jeff Squyres: "Re: [MTT users] Running the v1.1 nightly"</a>
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
