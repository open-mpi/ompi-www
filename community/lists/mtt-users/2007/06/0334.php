<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 23 10:58:36 2007" -->
<!-- isoreceived="20070623145836" -->
<!-- sent="Sat, 23 Jun 2007 10:58:13 -0400" -->
<!-- isosent="20070623145813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] OMPI C++ tests just split" -->
<!-- id="88C78ED3-31EF-40D7-82C4-58E315C2C360_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-06-23 10:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Reply:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are running the MPI 2 C++ tests for OMPI testing, note that I  
<br>
just split it into 2 executables.  So if you currently have this in  
<br>
your .ini file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;simple_pass:tests = src/mpi2c++_test
<br>
<p>You need to change it to this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;simple_pass:tests = src/mpi2c++_test src/mpi2c++_dyanmics_test
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Previous message:</strong> <a href="0333.php">Jeff Squyres: "Re: [MTT users] INI trick for single-node testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
<li><strong>Reply:</strong> <a href="0335.php">Tim Prins: "Re: [MTT users] OMPI C++ tests just split"</a>
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
