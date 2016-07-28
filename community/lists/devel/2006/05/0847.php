<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 10:49:31 2006" -->
<!-- isoreceived="20060502144931" -->
<!-- sent="Tue, 2 May 2006 10:49:30 -0400" -->
<!-- isosent="20060502144930" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to test OpenMPI?" -->
<!-- id="DBCA2306-EDB0-49F9-BCAE-BF770907A7C8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060502131133.GC18129_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-05-02 10:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Josh Hursey: "Re: [OMPI devel] is &quot;process fault tolerance&quot; or FT-MPI semantics being worked on?"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Adrian Knoth: "[OMPI devel] How to test OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Adrian Knoth: "[OMPI devel] How to test OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2006, at 9:11 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; as already mentioned some weeks ago, we plan to provide IPv6-support
</span><br>
<span class="quotelev1">&gt; for OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before touching the code, we'd like to have a test environment to  
</span><br>
<span class="quotelev1">&gt; ensure
</span><br>
<span class="quotelev1">&gt; not to break anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a test/-directory, but the tests inside seem to be very  
</span><br>
<span class="quotelev1">&gt; basic,
</span><br>
<span class="quotelev1">&gt; no network testing or anything running longer than a few  
</span><br>
<span class="quotelev1">&gt; milliseconds ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better/larger testsuite available? Or how do you test
</span><br>
<span class="quotelev1">&gt; your code modifications?
</span><br>
<p>We have an internal set of tests we run against Open MPI, but many  
<br>
can not be released, so we've made the entire repository of tests  
<br>
available only to members of the Open MPI development team.  The two  
<br>
popular sets of tests are the IBM test suite (which is what the LAM  
<br>
test suite is based off of) and the Intel test suite.  Generally,  
<br>
those are a good start to making sure your code works.  Of course,  
<br>
you might want to start with something dead simple, like NetPIPE, and  
<br>
work your way up ;).
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Josh Hursey: "Re: [OMPI devel] is &quot;process fault tolerance&quot; or FT-MPI semantics being worked on?"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Adrian Knoth: "[OMPI devel] How to test OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Adrian Knoth: "[OMPI devel] How to test OpenMPI?"</a>
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
