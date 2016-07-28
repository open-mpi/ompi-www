<?
$subject_val = "Re: [hwloc-users] Getting a graphics view for anon	graphic	system...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 15:52:53 2010" -->
<!-- isoreceived="20100609195253" -->
<!-- sent="Wed, 09 Jun 2010 21:52:47 +0200" -->
<!-- isosent="20100609195247" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting a graphics view for anon	graphic	system..." -->
<!-- id="4C0FF10F.4000701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BE552A04-5FD9-4EF0-83E9-B5FD6B2D8307_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting a graphics view for anon	graphic	system...<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 15:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>In reply to:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/07/0216.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/07/0216.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/06/2010 21:41, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jun 6, 2010, at 4:03 PM, Olivier Cessenat wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; What you write is clear to computer scientists, but I failed to figure
</span><br>
<span class="quotelev2">&gt;&gt; out what it meant. Sorry, it is clear now !
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; FWIW, there's a section about &quot;output formats&quot; in the hwloc-ls.1 man page.  It's probably worth adding a sentence in there that the list in the man page applies to the filenames; i.e., that the filename determines the output format.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>By the way, I wonder if we should have explicit --input and --output
<br>
options to clarify the lstopo command-line.
<br>
For instance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo --xml file.xml file2.png
<br>
would be better written as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo --input file.xml --output file2.png
<br>
<p>So basically, I am saying that --input/-i would be a superset of our
<br>
current --xml, --synthetic and --fsroot. And --output/-o would be
<br>
implicit when passing an filename argument on the command line. And we
<br>
could have --output-format/--of to enforce the output without looking at
<br>
the filename extension (and maybe --input-format/--if to enforce
<br>
xml/synthetic/fsroot).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>In reply to:</strong> <a href="0151.php">Jeff Squyres: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/07/0216.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/07/0216.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
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
