<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 16:04:14 2009" -->
<!-- isoreceived="20091007200414" -->
<!-- sent="Wed, 07 Oct 2009 21:04:22 +0100" -->
<!-- isosent="20091007200422" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="1254945862.3133.119.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091007194108.GB14465_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 16:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0449.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0449.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-10-07 at 15:41 -0400, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I got the following error doing a simple test:
</span><br>
<p>As it happens I saw this error earlier on FC8, r279 should fix this
<br>
problem.
<br>
<p><span class="quotelev1">&gt;   $ perl --version
</span><br>
<span class="quotelev1">&gt;   This is perl, v5.8.4 built for sun4-solaris-64int
</span><br>
<p>I had wondered if you'd be using solaris, this is not something I've
<br>
tested and not something I'd expect to work.  The stack trace code
<br>
should all be fine but there might be some problems reading data
<br>
from /proc.  In the past padb has worked on Tru64, possibly all that
<br>
needs porting would be getting parent pid and process name from ps
<br>
rather than /proc/status.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0449.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0449.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
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
