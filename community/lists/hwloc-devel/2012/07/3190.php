<?
$subject_val = "Re: [hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 12:40:23 2012" -->
<!-- isoreceived="20120723164023" -->
<!-- sent="Mon, 23 Jul 2012 11:40:10 -0500" -->
<!-- isosent="20120723164010" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="500D7E6A.9020404_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="500D7DAB.6090002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] mpich2 maintained patches for hwloc<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 12:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/23/2012 11:36 AM, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; 2. The change to autogen.sh is required for pgcc and friends.  You
</span><br>
<span class="quotelev2">&gt;&gt; can't take this patch as is, obviously, but you'll need some version
</span><br>
<span class="quotelev2">&gt;&gt; of this.  Cc'ing Dave, in case you need more details of this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't tried pgcc recently. Which pgcc version needs this? and what
</span><br>
<span class="quotelev1">&gt; happens if you don't apply this patch?
</span><br>
<p>Here's Dave's response (he's not subscribed to hwloc-devel) --
<br>
<p>This one is being upstreamed to automake and should be included in its 
<br>
next release.  I don't think you need to incorporate this into hwloc:
<br>
<p><a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=8880">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=8880</a>
<br>
<p><span class="quotelev2">&gt;&gt; 3. The changes to config/hwloc.m4 and include/private/private.h are
</span><br>
<span class="quotelev2">&gt;&gt; essentially a warning squash when getpagesize() requires an explicit
</span><br>
<span class="quotelev2">&gt;&gt; prototype declaration.  But it's not clear how easy it is for you to
</span><br>
<span class="quotelev2">&gt;&gt; absorb it as it uses an MPICH2 internal m4 macro.  Maybe there's a
</span><br>
<span class="quotelev2">&gt;&gt; cleaner way to integrate this patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will look at this. On which platform/system did you need this patch?
</span><br>
<p>On regular x86_64 machines.  We use strict builds in mpich2.  I can 
<br>
figure out the exact flags that trigger it, but my guess is that -Wall 
<br>
would.
<br>
<p><span class="quotelev2">&gt;&gt; 4. The change to configure.ac is an issue with automake-1.12 that Dave
</span><br>
<span class="quotelev2">&gt;&gt; noticed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These lines have been added in v1.5 already.
</span><br>
<p>Thanks.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3191.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>Reply:</strong> <a href="3192.php">Brice Goglin: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
