<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 23 11:57:37 2007" -->
<!-- isoreceived="20070623155737" -->
<!-- sent="Sat, 23 Jun 2007 11:57:13 -0400" -->
<!-- isosent="20070623155713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] OMPI C++ tests just split" -->
<!-- id="D460F928-3578-4133-A17D-7BD39EA93A45_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706231153.09075.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-23 11:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- thanks.
<br>
On Jun 23, 2007, at 11:53 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; On Saturday 23 June 2007 10:58:13 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you are running the MPI 2 C++ tests for OMPI testing, note that I
</span><br>
<span class="quotelev2">&gt;&gt; just split it into 2 executables.  So if you currently have this in
</span><br>
<span class="quotelev2">&gt;&gt; your .ini file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      simple_pass:tests = src/mpi2c++_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need to change it to this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      simple_pass:tests = src/mpi2c++_test src/mpi2c++_dyanmics_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is actually (note the spelling of 'dynamics'):
</span><br>
<span class="quotelev1">&gt;  simple_pass:tests = src/mpi2c++_test src/mpi2c++_dynamics_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
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
