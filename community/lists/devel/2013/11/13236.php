<?
$subject_val = "[OMPI devel] Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 15:35:24 2013" -->
<!-- isoreceived="20131111203524" -->
<!-- sent="Mon, 11 Nov 2013 15:35:23 -0500" -->
<!-- isosent="20131111203523" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug in MPI.MINLOC with Java binding" -->
<!-- id="CA+ssbKVwDDR9iytmLdK8JBEERU9=1XBzXAHrSwgFXeuHCt4ZPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bug in MPI.MINLOC with Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 15:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13235.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples oshmem/include oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Maybe reply:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been using nightly tarball openmpi-1.9a1r28919 with Java binding and
<br>
it had a bug in its MINLOC implementation (Minloc.java). Essentially, the
<br>
following line,
<br>
<p>out_array [outdisp + 1] = in_array [*outdisp* + 1] ;
<br>
<p>should be changed to
<br>
<p>out_array [outdisp + 1] = in_array [*indisp* + 1] ;
<br>
<p>The same should be done for MAXLOC (Maxloc.java) implementation as well. I
<br>
tested with the change and both MINLOC and MAXLOC worked as expected
<br>
afterwards.
<br>
<p>However, these files are no longer available in the latest trunk and it
<br>
seems the API for collective operations have changed as well. Still MINLOC
<br>
(and MAXLOC) does not work as expected. I've attached a sample code to
<br>
reproduce the issue and an output from it (for MINLOC).
<br>
<p>I am running on 64bit Ubuntu 12.04.
<br>
<p>Any suggestions?
<br>
<p>Thank you in advance,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13236/Minlocbug.bzip2">Minlocbug.bzip2</a>
</ul>
<!-- attachment="Minlocbug.bzip2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13235.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples oshmem/include oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Maybe reply:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
