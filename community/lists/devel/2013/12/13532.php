<?
$subject_val = "[OMPI devel] 1.7.4rc2r30031 testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:11:14 2013" -->
<!-- isoreceived="20131220221114" -->
<!-- sent="Fri, 20 Dec 2013 14:11:12 -0800" -->
<!-- isosent="20131220221112" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30031 testing summary" -->
<!-- id="CAAvDA14B6QKpTgrrUB6VeK75XvTNcwo5V7gN=sR2F3ZppCcruQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30031 testing summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13533.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This email is a summary of my results testing 1.7.4rc2r30031.
<br>
I will send detailed follow-ups on the new issues.
<br>
So, this is a heads-up to let you know this version still has significant
<br>
problems for me.
<br>
<p>FreeBSD-9/amd64
<br>
+ &quot;mpirun -np 2 examples/ring_c&quot; hangs!
<br>
+ &quot;mpirun -np 1 examples/ring_c&quot; runs but with (unnecessary?) warning.
<br>
Will follow up on both with more info later
<br>
<p>OpenBSD-5/amd64
<br>
+ &quot;mpirun -np 1 examples/ring_c&quot; hangs!
<br>
Will follow up with more info later
<br>
<p>NetBSD-6/amd64
<br>
+ &quot;make install&quot; still fails as I reported in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">http://www.open-mpi.org/community/lists/devel/2013/12/13515.php</a>
<br>
+ r30016 (cmr of r30013) DID NOT fix the issue I reported in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/12/13519.php">http://www.open-mpi.org/community/lists/devel/2013/12/13519.php</a>
<br>
<p>Solaris-11/amd64/gcc - WORKS!
<br>
<p>Solaris-10/SPARC/Studio - still compiling :-(
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13532/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13533.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
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
