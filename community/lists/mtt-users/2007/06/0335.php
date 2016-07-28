<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 23 11:53:13 2007" -->
<!-- isoreceived="20070623155313" -->
<!-- sent="Sat, 23 Jun 2007 11:53:08 -0400" -->
<!-- isosent="20070623155308" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] OMPI C++ tests just split" -->
<!-- id="200706231153.09075.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="88C78ED3-31EF-40D7-82C4-58E315C2C360_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-23 11:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Reply:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 23 June 2007 10:58:13 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If you are running the MPI 2 C++ tests for OMPI testing, note that I
</span><br>
<span class="quotelev1">&gt; just split it into 2 executables.  So if you currently have this in
</span><br>
<span class="quotelev1">&gt; your .ini file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      simple_pass:tests = src/mpi2c++_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to change it to this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      simple_pass:tests = src/mpi2c++_test src/mpi2c++_dyanmics_test
</span><br>
<p>It is actually (note the spelling of 'dynamics'):
<br>
&nbsp;simple_pass:tests = src/mpi2c++_test src/mpi2c++_dynamics_test
<br>
<p><p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<li><strong>In reply to:</strong> <a href="0334.php">Jeff Squyres: "[MTT users] OMPI C++ tests just split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Reply:</strong> <a href="0336.php">Jeff Squyres: "Re: [MTT users] OMPI C++ tests just split"</a>
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
