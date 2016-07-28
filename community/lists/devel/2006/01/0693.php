<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 10:37:42 2006" -->
<!-- isoreceived="20060119153742" -->
<!-- sent="Thu, 19 Jan 2006 10:37:24 -0500" -->
<!-- isosent="20060119153724" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  posix threads" -->
<!-- id="12F76A7F-BD03-47EA-B224-0DBC73164472_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 10:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luke,
<br>
<p>I don't have access to exactly the same OS like you describe, but I  
<br>
was able to run your example (using the same compilation flags as  
<br>
you) on the following environments:
<br>
- 32 bits Intel Redhat Nahant 2
<br>
- 32 bits Debian testing/unstable
<br>
- 64 bits MAC OS X
<br>
<p>I even run the Netpipe benchmark with success on the same systems.  
<br>
However, there was an issue with our internal list management that  
<br>
was showing up [mostly] for the shared memory device. It's fixed now  
<br>
on SVN (from revision 8749).
<br>
<p>Please update you Open MPI copy (the changes are not yet in the  
<br>
nightly build so you have to checkout via SVN) and try again.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 18, 2006, at 2:12 PM, Luke Schierer wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luke
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>In reply to:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Reply:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
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
