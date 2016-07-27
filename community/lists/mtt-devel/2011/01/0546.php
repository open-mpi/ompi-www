<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 08:42:28 2011" -->
<!-- isoreceived="20110104134228" -->
<!-- sent="Tue, 4 Jan 2011 08:42:21 -0500" -->
<!-- isosent="20110104134221" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="64F19745-BD36-4466-ADE3-016DE04E5A14_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="574105C7-95B6-49CD-B6A1-CFDE13D7F49C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt questions<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 08:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2011, at 8:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 4, 2011, at 7:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if there is mtt option to stop mtt execution if job`s failure ratio succeeds specified value, something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [mtt]
</span><br>
<span class="quotelev2">&gt;&gt; stop_on_test_failures=1%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't recall an option like that, offhand.
</span><br>
<p>I don't think so either. This would be neat to have for those rare scenarios when something fundamental in Open MPI breaks and we would prefer to stop testing early instead of continuing to run tests even if they are all going to fail.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, are there any ini files examples/successes of how to use mtt with non-MPI based applications?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  It *shouldn't* be hard, though -- just make the MPI Details exec statement not use &quot;mpirun&quot;...?  (of course, our phase names are biased towards &quot;MPI&quot;, but they could just as well be &quot;Middleware&quot;, for example)
</span><br>
<p>I successfully did this when testing the C/R functionality in Open MPI, and a couple other groups are looking at supporting non-MPI middleware as well. The C/R tests are all wrapped up in their own perl script (to do start/checkpoint/restart/...), so were essentially a non-MPI application. As Jeff mentioned, it was just enough to change the MPI Details section to use your own launcher (or you may be able to even go without a launcher if you just want to run the tests directly). Then you will need to define new Test Build/Run phases for the non-MPI test suite that you are using. And you should be all set.
<br>
<p>If for some reason that does not work, let us know since it is something that needs to be fixed since the MTT client should be flexible enough to support a wide manner of middleware.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
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
