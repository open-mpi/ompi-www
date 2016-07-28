<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 07:27:36 2009" -->
<!-- isoreceived="20090201122736" -->
<!-- sent="Sun, 1 Feb 2009 07:27:30 -0500" -->
<!-- isosent="20090201122730" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="87F21DE3-153E-4B0C-867A-0242B785A1D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="878E849B-D403-421E-89DB-07676A059F13_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 07:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; For anyone following this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have completed the IOF options discussed below. Specifically, I  
</span><br>
<span class="quotelev1">&gt; have added the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * a new &quot;output-filename&quot; option that redirects each proc's output  
</span><br>
<span class="quotelev1">&gt; to a separate rank-named file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * a new &quot;xterm&quot; option that redirects the output of the specified  
</span><br>
<span class="quotelev1">&gt; ranks to a separate xterm window.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can obtain a copy of the updated code at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<p>Sweet stuff.  :-)
<br>
<p>Note that the URL/tarball that Ralph cites is a nightly snapshot and  
<br>
will expire after a while -- we only keep the most 5 recent nightly  
<br>
tarballs available.  You can find Ralph's new IOF stuff in any 1.4a1  
<br>
nightly tarball after the one he cited above.  Note that the last part  
<br>
of the tarball name refers to the subversion commit number (which  
<br>
increases monotonically); any 1.4 nightly snapshot tarball beyond  
<br>
&quot;r20392&quot; will contain this new IOF stuff.  Here's where to get our  
<br>
nightly snapshot tarballs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Don't read anything into the &quot;1.4&quot; version number -- we've just bumped  
<br>
the version number internally to be different than the current stable  
<br>
series (1.3).  We haven't yet branched for the v1.4 series; hence,  
<br>
&quot;1.4a1&quot; currently refers to our development trunk.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7924.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
