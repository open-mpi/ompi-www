<?
$subject_val = "Re: [MTT users] Using mtt For Performance Testing Only";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 11:20:10 2010" -->
<!-- isoreceived="20100421152010" -->
<!-- sent="Wed, 21 Apr 2010 11:20:05 -0400" -->
<!-- isosent="20100421152005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Using mtt For Performance Testing Only" -->
<!-- id="9F14BBF0-28FB-4FC8-A5EA-3234CD066A1F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCE1831.1080305_at_berkeley.edu" -->
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
<strong>Subject:</strong> Re: [MTT users] Using mtt For Performance Testing Only<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 11:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/06/0737.php">ROHIT CHAUDHARY: "[MTT users] User Name and password for submission of results."</a>
<li><strong>Previous message:</strong> <a href="0735.php">Jon Forrest: "Re: [MTT users] Using mtt For Performance Testing Only"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Jon Forrest: "Re: [MTT users] Using mtt For Performance Testing Only"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, MTT is just an engine for running stuff.  We tend to use MTT running lots of MPI correctness and performance tests.  So yes, you could use MTT to run your chemistry code over varying numbers of nodes.  MTT might be a bit of a big tool for that, but if you have no other infrastructure for this kind of scripting, it may be just the ticket for your needs.
<br>
<p><p>On Apr 20, 2010, at 5:10 PM, Jon Forrest wrote:
<br>
<p><span class="quotelev1">&gt; On 4/20/2010 2:01 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jon,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can use MTT to do performance testing only.  Here is a good
</span><br>
<span class="quotelev2">&gt; &gt; starting point for using MTT:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the pointer!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried running trivial tests with your MPI installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. I've run various benchmarks and the Infiniband diagnostic
</span><br>
<span class="quotelev1">&gt; programs (not that I always understand their output).
</span><br>
<span class="quotelev1">&gt; But, one of our users is reporting that a standard
</span><br>
<span class="quotelev1">&gt; Chemistry application is not scaling as expected when
</span><br>
<span class="quotelev1">&gt; going to a second node after filling up the first node.
</span><br>
<span class="quotelev1">&gt; This is on a Rocks cluster with 12-cores per node.
</span><br>
<span class="quotelev1">&gt; I figured that doing some more comprehensive MPI tests
</span><br>
<span class="quotelev1">&gt; would be a good place to start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Were you planning on submitting the results to the open-mpi.org database?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. This is just informal testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jon Forrest
</span><br>
<span class="quotelev1">&gt; Research Computing Support
</span><br>
<span class="quotelev1">&gt; College of Chemistry
</span><br>
<span class="quotelev1">&gt; 173 Tan Hall
</span><br>
<span class="quotelev1">&gt; University of California Berkeley
</span><br>
<span class="quotelev1">&gt; Berkeley, CA
</span><br>
<span class="quotelev1">&gt; 94720-1460
</span><br>
<span class="quotelev1">&gt; 510-643-1032
</span><br>
<span class="quotelev1">&gt; jlforrest_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/06/0737.php">ROHIT CHAUDHARY: "[MTT users] User Name and password for submission of results."</a>
<li><strong>Previous message:</strong> <a href="0735.php">Jon Forrest: "Re: [MTT users] Using mtt For Performance Testing Only"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Jon Forrest: "Re: [MTT users] Using mtt For Performance Testing Only"</a>
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
