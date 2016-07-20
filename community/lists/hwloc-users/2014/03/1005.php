<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 08:59:44 2014" -->
<!-- isoreceived="20140326125944" -->
<!-- sent="Wed, 26 Mar 2014 23:59:40 +1100" -->
<!-- isosent="20140326125940" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="3983012.Gyq7EWbAvW_at_quad" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="005401cf48f1$d4a3da60$7deb8f20$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 08:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1004.php">Kenneth A. Lloyd: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1004.php">Kenneth A. Lloyd: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 26 Mar 2014 06:49:30 AM Kenneth A. Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Is there a difference between INK and CNK? 
</span><br>
<p>BG/Q IO nodes run RHEL6 with a patched distro kernel.
<br>
<p>BGQ compute nodes run CNK which is a custom kernel written in C++ and licensed 
<br>
under the Eclipse Public License (EPL).   It does not implement all of POSIX 
<br>
and deliberately omits things like fork() and execve().
<br>
<p>CNK also checks for a note in the ELF header before permitting an executable 
<br>
to run to ensure only code built with the BGQ cross compilers will run.  The 
<br>
BGP CNK didn't do that.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1004.php">Kenneth A. Lloyd: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1004.php">Kenneth A. Lloyd: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
