<?
$subject_val = "Re: [OMPI devel] git tree mirror: I give up :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 04:35:34 2012" -->
<!-- isoreceived="20121005083534" -->
<!-- sent="Fri, 05 Oct 2012 10:35:26 +0200" -->
<!-- isosent="20121005083526" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] git tree mirror: I give up :-(" -->
<!-- id="506E9BCE.30407_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8019C1D0-C9DB-4263-9BB7-B87829E445B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] git tree mirror: I give up :-(<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 04:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/04/2012 03:41 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It would probably be better to ask one of the other git-interested people.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert?  Brice?  Nathan?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you check that the git mirror appears to be functioning properly?
</span><br>
<p>Just tried it and bootstrap/configure/make runs through. The only thing
<br>
which my eyes catched are some missing empty directories in the git
<br>
checkout:
<br>
<p>Only in ompi.svn/ompi/contrib/vt/vt: etc
<br>
Only in ompi.svn/ompi/contrib/vt/vt/extlib/otf/tests: otf_python
<br>
Only in ompi.svn/ompi/contrib/vt/vt/extlib/otf/tests: thumbnail
<br>
Only in ompi.svn/ompi/contrib/vt/vt/extlib/otf/tools: otfmerge-mpi
<br>
Only in ompi.svn/ompi/contrib/vt/vt/extlib/otf/tools: otfprofile-mpi
<br>
Only in ompi.svn/ompi/mca/io/romio/romio: man
<br>
Only in ompi.svn/ompi/mpi/fortran/mpif-h: base
<br>
Only in ompi.svn/opal/asm: generated
<br>
<p>For the VT directories I would say they aren't important. And actually
<br>
the otfmerge-mpi, otfprofile-mpi, otf_python, and thumbnail are long
<br>
gone in the OTF repository. I think Matthias Jurenz will take care of this.
<br>
<p>Bert
<br>
<pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11562/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11561.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>In reply to:</strong> <a href="11556.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11563.php">Brice Goglin: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
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
