<?
$subject_val = "Re: [MTT users] Test timeouts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 12:01:55 2009" -->
<!-- isoreceived="20090413160155" -->
<!-- sent="Mon, 13 Apr 2009 12:01:50 -0400" -->
<!-- isosent="20090413160150" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test timeouts" -->
<!-- id="20090413160150.GQ26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C608BA25.477E%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] Test timeouts<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 12:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0681.php">Barrett, Brian W: "Re: [MTT users] Test timeouts"</a>
<li><strong>Previous message:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
<li><strong>In reply to:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0681.php">Barrett, Brian W: "Re: [MTT users] Test timeouts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr/13/2009 09:45:09AM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't find documentation on the test run block, but is there a way to set
</span><br>
<span class="quotelev1">&gt; the max time a test can run?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In our test run sections we set the &quot;timeout&quot; param, e.g.,
<br>
<p>&nbsp;&nbsp;timeout = &amp;max(60, &amp;multiply(20, &amp;test_np()))
<br>
<p>That would set the timeout for the test run section to the maximum of
<br>
60 seconds and 20 * np seconds.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running the tests on interactively scheduled nodes, and we're
</span><br>
<span class="quotelev1">&gt; having tests hang and clog up the nodes for days. There's clearly a
</span><br>
<span class="quotelev1">&gt; bug on the OMPI trunk I get to track down, but the timeout on the
</span><br>
<span class="quotelev1">&gt; tests is the bigger concern right now :).
</span><br>
<p>MTT will kill the orterun after the timeout, but we've been seeing
<br>
zombie a.out's clog up our cluster. You might want to stick this in
<br>
your &quot;MPI details&quot; section:
<br>
<p>&nbsp;&nbsp;after_all_exec = mpirun @hosts@ orte-clean -v
<br>
<p>Assuming orte-clean still works.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;    Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0681.php">Barrett, Brian W: "Re: [MTT users] Test timeouts"</a>
<li><strong>Previous message:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
<li><strong>In reply to:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0681.php">Barrett, Brian W: "Re: [MTT users] Test timeouts"</a>
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
