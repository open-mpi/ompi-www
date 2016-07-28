<?
$subject_val = "[OMPI devel] yet another fortran (documentation) issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 18:52:38 2014" -->
<!-- isoreceived="20140123235238" -->
<!-- sent="Thu, 23 Jan 2014 15:52:22 -0800" -->
<!-- isosent="20140123235222" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] yet another fortran (documentation) issue" -->
<!-- id="CAAvDA1621o0OqUKuHWsi-D+fanv99pt9w2nRC-nXfpw4De1b7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] yet another fortran (documentation) issue<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 18:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Reply:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following is an issue found when testing with xlf-14.1, which is
<br>
already known to have problems with the F08 stuff.  So, I've configured
<br>
with &quot;FC=xlf90 --enable-mpi-fortran=usempi&quot;.
<br>
<p>The problem is that mpifort is now a wrapper around xlf90 and thus is
<br>
assuming F90 free-form input, independent of the file suffix.  This results
<br>
in errors building fixed-form (f77) codes:
<br>
<p>$ mpifort hello_mpifh.f
<br>
&quot;hello_mpifh.f&quot;, line 1.1: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 2.3: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 3.27: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 4.27: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 5.3: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 6.3: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 7.1: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 8.3: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, line 9.1: 1515-019 (S) Syntax is incorrect.
<br>
&quot;hello_mpifh.f&quot;, 1515-002 (S) END card is missing.  One is assumed.
<br>
** _main   === End of Compilation 1 ===
<br>
&quot;hello_mpifh.f&quot;, line 22.19: 1515-019 (S) Syntax is incorrect.
<br>
** main   === End of Compilation 2 ===
<br>
1501-511  Compilation failed for file hello_mpifh.f.
<br>
<p>This can, fortunately, be worked around with &quot;-qfixed&quot;:
<br>
<p>$ mpifort -qfixed hello_mpifh.f
<br>
** main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hello_mpifh.f.
<br>
<p>I *think* that I should have configured with FC=xlf (rather than xlf90)
<br>
then it will determine language-level and format based on file suffix.  I
<br>
can (without re-configuring) confirm that xlf honors the extension by
<br>
setting OMPI_FC=xlf:
<br>
<p>{hargrove_at_vestalac1 examples}$ OMPI_FC=xlf mpifort  hello_mpifh.f
<br>
** main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hello_mpifh.f.
<br>
{hargrove_at_vestalac1 examples}$ OMPI_FC=xlf mpifort  hello_usempi.f90
<br>
** main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hello_usempi.f90.
<br>
<p><p>The term &quot;fortran compiler&quot; in Open MPI's README is not (as far as I could
<br>
see) clearly defined as &quot;a fortran compiler which honors file suffixes to
<br>
determine language dialect&quot;
<br>
<p>My FC=xlf90 setting is &quot;historical&quot; from the testing scripts I've used
<br>
since the 1.5 and 1.6 series.
<br>
<p>ADDITIONALLY, the Open MPI manpages STILL say FC is to be a fortran90
<br>
compiler and F77 is to be an fortran77 compiler.  It looks like others
<br>
might encounter the same problem I describe above just by reading the
<br>
documentation too closely.
<br>
<p>I will follow up with specifics on what appears to be out-of-date in the
<br>
manpages.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13891/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Reply:</strong> <a href="13903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] yet another fortran (documentation) issue"</a>
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
