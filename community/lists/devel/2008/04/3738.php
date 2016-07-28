<?
$subject_val = "[OMPI devel] Fix for XLC + libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 13:09:15 2008" -->
<!-- isoreceived="20080422170915" -->
<!-- sent="Tue, 22 Apr 2008 14:09:28 -0300" -->
<!-- isosent="20080422170928" -->
<!-- name="S&#233;rgio Durigan J&#250;nior" -->
<!-- email="sergiodj_at_[hidden]" -->
<!-- subject="[OMPI devel] Fix for XLC + libtool issue" -->
<!-- id="1208884168.7205.33.camel_at_miki" -->
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
<strong>Subject:</strong> [OMPI devel] Fix for XLC + libtool issue<br>
<strong>From:</strong> S&#233;rgio Durigan J&#250;nior (<em>sergiodj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 13:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3739.php">Ziv Mhabary: "[OMPI devel] Communication problem"</a>
<li><strong>Previous message:</strong> <a href="3737.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>Taking a look at your website, I could see an issue about compiling Open
<br>
MPI shared libs using IBM's XLC compiler + libtool:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-ibm-compilers">http://www.open-mpi.org/faq/?category=building#build-ibm-compilers</a>
<br>
<p>Well, I think we have the solution for this: upgrading libtool to the
<br>
latest version seems to work well in this case. So, I'd like to ask you
<br>
to upgrade the libtool used by Open MPI to the latest version (2.2.2 or
<br>
more), and change this FAQ to provide information about how the user can
<br>
manually update libtool in older versions of Open MPI.
<br>
<p>The instructions for upgrading libtool manually are:
<br>
<p>1) Get the latest libtool package from
<br>
<a href="http://www.gnu.org/software/libtool">http://www.gnu.org/software/libtool</a>
<br>
<p>2) Untar, compile and install it
<br>
<p>3) Have a fresh and clean Open MPI source tree
<br>
<p>4) Inside there, run 'libtoolize --force'
<br>
<p>5) Then run 'aclocal'
<br>
<p>6) At last, run 'autoreconf --force'
<br>
<p>After that, you'll be able to build Open MPI without problems :-).
<br>
<p>Thanks in advance,
<br>
<p><pre>
-- 
S&#233;rgio Durigan J&#250;nior
Linux on Power Toolchain - Software Engineer
Linux Technology Center - LTC
IBM Brazil
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3739.php">Ziv Mhabary: "[OMPI devel] Communication problem"</a>
<li><strong>Previous message:</strong> <a href="3737.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
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
