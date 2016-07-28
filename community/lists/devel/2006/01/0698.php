<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 12:26:48 2006" -->
<!-- isoreceived="20060119172648" -->
<!-- sent="Thu, 19 Jan 2006 12:26:44 -0500" -->
<!-- isosent="20060119172644" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  posix threads" -->
<!-- id="064030C8-BF79-485F-A1F0-8C424F7335EE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060118191248.GC14007_at_lukespace.acceleratedservers.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 12:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2006, at 2:12 PM, Luke Schierer wrote:
<br>
<p><span class="quotelev1">&gt; If we compile openmpi with support for posix threads (./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local --enable-mpi-threads --with-threads=posix), mpi
</span><br>
<span class="quotelev1">&gt; hangs even with simple commands like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec --host localhost --np 1 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lock up, and have to be killed.  If we compile without the --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix,
</span><br>
<span class="quotelev1">&gt; it works fine.  We've tried this with both 1.0.1 and 1.0.2a3 on a  
</span><br>
<span class="quotelev1">&gt; CentOS
</span><br>
<span class="quotelev1">&gt; release 4.2 install (CentOS is the same as Redhat, built from the  
</span><br>
<span class="quotelev1">&gt; same sources,
</span><br>
<span class="quotelev1">&gt; just without the trademarked name and the support), and on a Debian
</span><br>
<span class="quotelev1">&gt; unstable install.  Does anyone have any ideas on getting openmpi to
</span><br>
<span class="quotelev1">&gt; work with posix thread support?
</span><br>
<p>It looks like there was an inadvertent double-lock in the startup  
<br>
sequence for the standard I/O forwarding in our subversion branch for  
<br>
the 1.0 releases.  I'm not sure how the problem snuck into the  
<br>
release branch, but it has been fixed.  You can either get an SVN  
<br>
checkout of the 1.0 branch, get the nightly tarball build tomorrow,  
<br>
wait for us to release Open MPI 1.0.2, or apply the attached patch to  
<br>
the v1.0.1 tarball.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0698/orte_lock.diff">orte_lock.diff</a>
</ul>
<!-- attachment="orte_lock.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
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
