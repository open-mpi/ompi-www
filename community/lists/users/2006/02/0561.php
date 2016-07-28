<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 14:52:53 2006" -->
<!-- isoreceived="20060202195253" -->
<!-- sent="Thu, 02 Feb 2006 11:38:17 -0800" -->
<!-- isosent="20060202193817" -->
<!-- name="Brian Granger" -->
<!-- email="bgranger_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Bug in C++ bindings" -->
<!-- id="339DA367-F0ED-4F98-9141-4841AAD15E09_at_scu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8382429D-AA1E-4E3D-BDB2-189386385FD5_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Granger (<em>bgranger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 14:38:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, Thanks for looking into this.
<br>
<p>Brian
<br>
<p>On Feb 1, 2006, at 8:05 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 31, 2006, at 5:47 PM, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am compiling a C++ program that uses the Open-MPI c++ bindings.  I
</span><br>
<span class="quotelev2">&gt;&gt; think there is a bug in the constants.h and/or mpicxx.cc files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file constants.h defines lots of constants as extern.  There are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By commenting corresponding lines out in constants.h, my code
</span><br>
<span class="quotelev2">&gt;&gt; compiled and ran fine.  Is this a bug, or should these things be
</span><br>
<span class="quotelev2">&gt;&gt; defined somewhere else.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for bringing this to our attention - this is most definitely  
</span><br>
<span class="quotelev1">&gt; a bug.  The issue will be fixed in the upcoming 1.0.2 release.  It  
</span><br>
<span class="quotelev1">&gt; sounds like you have a workaround already, but I've attached the  
</span><br>
<span class="quotelev1">&gt; patch that was applied to the v1.0 branch to become part of the  
</span><br>
<span class="quotelev1">&gt; next release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_cxx.diff&gt;
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
<li><strong>Next message:</strong> <a href="0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Brian Barrett: "Re: [O-MPI users] Bug in C++ bindings"</a>
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
