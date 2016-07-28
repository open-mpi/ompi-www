<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 01:58:16 2006" -->
<!-- isoreceived="20060616055816" -->
<!-- sent="Fri, 16 Jun 2006 07:58:08 +0200" -->
<!-- isosent="20060616055808" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] tests/datatype: srandomdev" -->
<!-- id="20060616055808.GA30266_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 01:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Mails to open-mpi.org yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Reply:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>Currently 'make check' is failing for me in the tests/datatype
<br>
directory, because my system (GNU/Linux, glibc 2.3.6) doesn't provide a
<br>
srandomdev function, called in checksum.c.  I believe it's BSD specific;
<br>
if you need it, I guess you could add a configure time check for it.
<br>
<p>Cheers, and keep up the good work,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Mails to open-mpi.org yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Reply:</strong> <a href="0942.php">George Bosilca: "Re: [OMPI devel] tests/datatype: srandomdev"</a>
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
