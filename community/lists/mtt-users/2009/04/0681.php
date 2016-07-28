<?
$subject_val = "Re: [MTT users] Test timeouts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 13:00:59 2009" -->
<!-- isoreceived="20090413170059" -->
<!-- sent="Mon, 13 Apr 2009 11:00:44 -0600" -->
<!-- isosent="20090413170044" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test timeouts" -->
<!-- id="C608CBDC.4788%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="29622_1239638568_n3DG27Ua030670_20090413160150.GQ26923_at_sun.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 13:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Jeff Squyres: "[MTT users] MTT SVN branches"</a>
<li><strong>Previous message:</strong> <a href="0680.php">Ethan Mallove: "Re: [MTT users] Test timeouts"</a>
<li><strong>Maybe in reply to:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ugh, I'm blind.  Thanks!
<br>
<p>Brian
<br>
<p>On 4/13/09 10:01 , &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr/13/2009 09:45:09AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't find documentation on the test run block, but is there a way to set
</span><br>
<span class="quotelev2">&gt;&gt; the max time a test can run?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our test run sections we set the &quot;timeout&quot; param, e.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   timeout = &amp;max(60, &amp;multiply(20, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would set the timeout for the test run section to the maximum of
</span><br>
<span class="quotelev1">&gt; 60 seconds and 20 * np seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the tests on interactively scheduled nodes, and we're
</span><br>
<span class="quotelev2">&gt;&gt; having tests hang and clog up the nodes for days. There's clearly a
</span><br>
<span class="quotelev2">&gt;&gt; bug on the OMPI trunk I get to track down, but the timeout on the
</span><br>
<span class="quotelev2">&gt;&gt; tests is the bigger concern right now :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT will kill the orterun after the timeout, but we've been seeing
</span><br>
<span class="quotelev1">&gt; zombie a.out's clog up our cluster. You might want to stick this in
</span><br>
<span class="quotelev1">&gt; your &quot;MPI details&quot; section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   after_all_exec = mpirun @hosts@ orte-clean -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming orte-clean still works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;    Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;    Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
   Brian W. Barrett
   Dept. 1423: Scalable System Software
   Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0682.php">Jeff Squyres: "[MTT users] MTT SVN branches"</a>
<li><strong>Previous message:</strong> <a href="0680.php">Ethan Mallove: "Re: [MTT users] Test timeouts"</a>
<li><strong>Maybe in reply to:</strong> <a href="0679.php">Barrett, Brian W: "[MTT users] Test timeouts"</a>
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
