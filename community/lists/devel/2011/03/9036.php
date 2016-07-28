<?
$subject_val = "[OMPI devel] multi-threaded test";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 14:25:40 2011" -->
<!-- isoreceived="20110308192540" -->
<!-- sent="Tue, 08 Mar 2011 11:24:20 -0800" -->
<!-- isosent="20110308192420" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] multi-threaded test" -->
<!-- id="4D768264.6050607_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] multi-threaded test<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 14:24:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been assigned CMR 2728, which is to apply some thread-support 
<br>
changes to 1.5.x.  The trac ticket has amusing language about &quot;needs 
<br>
testing&quot;.  I'm not sure what that means.  We rather consistently say 
<br>
that we don't promise anything with regards to true thread support.  We 
<br>
specifically say certain BTLs are off limits and we say things are 
<br>
poorly tested and can be expected to break.  Given all that, what does 
<br>
it mean to test thread support in OMPI?
<br>
<p>One option, specifically in the context of this CMR, is to test only 
<br>
configuration options and so on.  I've done this.
<br>
<p>Another possibility is to confirm that simple run-time tests of 
<br>
multi-threaded message passing succeed.  I'm having trouble with this.
<br>
<p>Attached is a simple test.  It passes over sm but fails over TCP.  (One 
<br>
or both of the initial messages is not received.)
<br>
<p>How high should I set my sights on this?
<br>
<p>

<br><p>
#!/bin/csh
<br>
<p>mpicc -xopenmp -m64 -O5 main.c
<br>
<p>mpirun -np 2 --mca btl self,sm  ./a.out
<br>
mpirun -np 2 --mca btl self,tcp ./a.out
<br>
<p><p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9036/main.c">main.c</a>
</ul>
<!-- attachment="main.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9035.php">George Bosilca: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
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
