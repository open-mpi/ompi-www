<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 16:49:12 2009" -->
<!-- isoreceived="20090201214912" -->
<!-- sent="Sun, 1 Feb 2009 14:49:03 -0700" -->
<!-- isosent="20090201214903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="DEEC1D31-67C3-4EE4-85FF-C6E52492FF45_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87F21DE3-153E-4B0C-867A-0242B785A1D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 16:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7923.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we discovered a bug in optimized builds with r20392. Please  
<br>
use any tarball with r20394 or above.
<br>
<p>Sorry for the confusion
<br>
Ralph
<br>
<p><p>On Feb 1, 2009, at 5:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For anyone following this thread:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have completed the IOF options discussed below. Specifically, I  
</span><br>
<span class="quotelev2">&gt;&gt; have added the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of  
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * a new &quot;output-filename&quot; option that redirects each proc's output  
</span><br>
<span class="quotelev2">&gt;&gt; to a separate rank-named file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * a new &quot;xterm&quot; option that redirects the output of the specified  
</span><br>
<span class="quotelev2">&gt;&gt; ranks to a separate xterm window.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can obtain a copy of the updated code at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sweet stuff.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the URL/tarball that Ralph cites is a nightly snapshot and  
</span><br>
<span class="quotelev1">&gt; will expire after a while -- we only keep the most 5 recent nightly  
</span><br>
<span class="quotelev1">&gt; tarballs available.  You can find Ralph's new IOF stuff in any 1.4a1  
</span><br>
<span class="quotelev1">&gt; nightly tarball after the one he cited above.  Note that the last  
</span><br>
<span class="quotelev1">&gt; part of the tarball name refers to the subversion commit number  
</span><br>
<span class="quotelev1">&gt; (which increases monotonically); any 1.4 nightly snapshot tarball  
</span><br>
<span class="quotelev1">&gt; beyond &quot;r20392&quot; will contain this new IOF stuff.  Here's where to  
</span><br>
<span class="quotelev1">&gt; get our nightly snapshot tarballs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't read anything into the &quot;1.4&quot; version number -- we've just  
</span><br>
<span class="quotelev1">&gt; bumped the version number internally to be different than the  
</span><br>
<span class="quotelev1">&gt; current stable series (1.3).  We haven't yet branched for the v1.4  
</span><br>
<span class="quotelev1">&gt; series; hence, &quot;1.4a1&quot; currently refers to our development trunk.
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7923.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7928.php">jody: "Re: [OMPI users] Handling output of processes"</a>
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
