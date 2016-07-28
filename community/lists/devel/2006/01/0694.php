<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 10:44:34 2006" -->
<!-- isoreceived="20060119154434" -->
<!-- sent="Thu, 19 Jan 2006 10:44:27 -0500" -->
<!-- isosent="20060119154427" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  posix threads" -->
<!-- id="40A86EE3-30FB-4F01-96A7-FC50A8DA09ED_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="12F76A7F-BD03-47EA-B224-0DBC73164472_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-01-19 10:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I have been able to duplicate Luke's problem and hope to  
<br>
have a fix this morning.  I'll post more details when I have the fix.
<br>
<p>Brian
<br>
<p>On Jan 19, 2006, at 10:37 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Luke,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have access to exactly the same OS like you describe, but I
</span><br>
<span class="quotelev1">&gt; was able to run your example (using the same compilation flags as
</span><br>
<span class="quotelev1">&gt; you) on the following environments:
</span><br>
<span class="quotelev1">&gt; - 32 bits Intel Redhat Nahant 2
</span><br>
<span class="quotelev1">&gt; - 32 bits Debian testing/unstable
</span><br>
<span class="quotelev1">&gt; - 64 bits MAC OS X
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I even run the Netpipe benchmark with success on the same systems.
</span><br>
<span class="quotelev1">&gt; However, there was an issue with our internal list management that
</span><br>
<span class="quotelev1">&gt; was showing up [mostly] for the shared memory device. It's fixed now
</span><br>
<span class="quotelev1">&gt; on SVN (from revision 8749).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please update you Open MPI copy (the changes are not yet in the
</span><br>
<span class="quotelev1">&gt; nightly build so you have to checkout via SVN) and try again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2006, at 2:12 PM, Luke Schierer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we compile openmpi with support for posix threads (./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local --enable-mpi-threads --with-threads=posix), mpi
</span><br>
<span class="quotelev2">&gt;&gt; hangs even with simple commands like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec --host localhost --np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lock up, and have to be killed.  If we compile without the --with-
</span><br>
<span class="quotelev2">&gt;&gt; threads=posix,
</span><br>
<span class="quotelev2">&gt;&gt; it works fine.  We've tried this with both 1.0.1 and 1.0.2a3 on a
</span><br>
<span class="quotelev2">&gt;&gt; CentOS
</span><br>
<span class="quotelev2">&gt;&gt; release 4.2 install (CentOS is the same as Redhat, built from the
</span><br>
<span class="quotelev2">&gt;&gt; same sources,
</span><br>
<span class="quotelev2">&gt;&gt; just without the trademarked name and the support), and on a Debian
</span><br>
<span class="quotelev2">&gt;&gt; unstable install.  Does anyone have any ideas on getting openmpi to
</span><br>
<span class="quotelev2">&gt;&gt; work with posix thread support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Luke
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0693.php">George Bosilca: "Re:  posix threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
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
