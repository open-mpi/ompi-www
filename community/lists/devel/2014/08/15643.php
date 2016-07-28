<?
$subject_val = "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 20:26:41 2014" -->
<!-- isoreceived="20140814002641" -->
<!-- sent="Wed, 13 Aug 2014 17:26:39 -0700" -->
<!-- isosent="20140814002639" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers" -->
<!-- id="CAAvDA14LUxtVBWnCnTATdawLTjUfL4nh_JoPOCF4HY6=4A_GEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 20:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following is NOT a bug report.
<br>
This is just an observation that may deserve some text in the README.
<br>
<p>I've reported issues in the past with some Fortran compilers (mostly older
<br>
XLC and PGI) which either cannot build the &quot;use mpi_f08&quot; module, or cannot
<br>
correctly link to it (and sometimes this fails only if configured with
<br>
--enable-debug).
<br>
<p>Testing the OSHMEM Fortran bindings (enabled by default on Linux) I have
<br>
found several compilers which fail to link the examples (hello_oshmemfh and
<br>
ring_oshmemfh).  I reported one specific instance (with xlc-11/xlf-13) back
<br>
in February: <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14057.php">http://www.open-mpi.org/community/lists/devel/2014/02/14057.php</a>
<br>
<p>So far I have these failures only on platforms where the Fortran compiler
<br>
is *known* to be broken for the MPI f90 and/or f08 bindings.  Specifically,
<br>
all the failing platforms are ones on which either:
<br>
+ Configure determines (without my help) that FC cannot build the F90
<br>
and/or F08 modules.
<br>
OR
<br>
+ I must pass --enable-mpi-fortran=usempi or --enable-mpi-fortran=mpifh for
<br>
cases configure cannot detect.
<br>
<p>So, I do *not* believe there is anything wrong with the OSHMEM code, which
<br>
is why I started this post with &quot;The following is NOT a bug report&quot;.
<br>
&nbsp;However, I have two recommendations to make:
<br>
<p>1) Documentation
<br>
<p>The README says just:
<br>
<p>--disable-oshmem-fortran
<br>
&nbsp;&nbsp;Disable building only the Fortran OSHMEM bindings.
<br>
<p>So, I recommend adding a sentence there referencing the &quot;Compiler Notes&quot;
<br>
section of the README which has details on some known bad Fortran compilers.
<br>
<p>2) Configure:
<br>
<p>As I noted above, at least some of the failures are on platforms where
<br>
configure has determined it cannot build the f08 MPI bindings.  So, maybe
<br>
there is something that could be done at configure time to disqualify some
<br>
Fortran compilers from building the OSHMEM fotran bindings, too.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15642.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
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
