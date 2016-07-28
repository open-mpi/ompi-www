<?
$subject_val = "[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 11:53:12 2008" -->
<!-- isoreceived="20081017155312" -->
<!-- sent="Fri, 17 Oct 2008 17:53:07 +0200" -->
<!-- isosent="20081017155307" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems" -->
<!-- id="48F8B4E3.6010404_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 11:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7015.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Reply:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>did you test OpenMPI 1.2.8 on Solaris at all?!
<br>
<p>We tried to compile OpenMPI 1.2.8 on Solaris on Sparc and on Opteron for 
<br>
both GCC and SUN Studio compiler, in 32bit and 64bit versions, at all 
<br>
2*2*2=8 versions, in the very same maneer we have installed 1.2.5 and 
<br>
1.2.6 versions.
<br>
<p><p>The configuring processes runs through, but if &quot;gmake all&quot; called, it 
<br>
seems to be so, that the configure stage restarts or being resumed:
<br>
<p>......
<br>
orte/mca/smr/bproc/Makefile.am:47: Libtool library used but `LIBTOOL' is 
<br>
undefined
<br>
orte/mca/smr/bproc/Makefile.am:47:   The usual way to define `LIBTOOL' 
<br>
is to add `AC_PROG_LIBTOOL'
<br>
orte/mca/smr/bproc/Makefile.am:47:   to `configure.ac' and run `aclocal' 
<br>
and `autoconf' again.
<br>
orte/mca/smr/bproc/Makefile.am:47:   If `AC_PROG_LIBTOOL' is in 
<br>
`configure.ac', make sure
<br>
orte/mca/smr/bproc/Makefile.am:47:   its definition is in aclocal's 
<br>
search path.
<br>
test/support/Makefile.am:29: library used but `RANLIB' is undefined
<br>
test/support/Makefile.am:29:   The usual way to define `RANLIB' is to 
<br>
add `AC_PROG_RANLIB'
<br>
test/support/Makefile.am:29:   to `configure.ac' and run `autoconf' again.
<br>
<p>..... and breaks.
<br>
<p><p>If &quot;gmake all&quot; again we also see error messages like:
<br>
<p><p><p>*** Fortran 77 compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking gfortran external symbol convention... ./configure: line 26340: 
<br>
./conftest.o: Permission denied
<br>
./configure: line 26342: ./conftest.o: Permission denied
<br>
./configure: line 26344: ./conftest.o: Permission denied
<br>
./configure: line 26346: ./conftest.o: Permission denied
<br>
./configure: line 26348: ./conftest.o: Permission denied
<br>
configure: error: Could not determine Fortran naming convention.
<br>
<p><p><p><p><p>Considered the configure script we see on these lines in ./configire:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if $NM conftest.o | grep foo_bar__ &gt;/dev/null 2&gt;&amp;1 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_f77_external_symbol=&quot;double underscore&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif $NM conftest.o | grep foo_bar_ &gt;/dev/null 2&gt;&amp;1 ; 
<br>
then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_f77_external_symbol=&quot;single underscore&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif $NM conftest.o | grep FOO_bar &gt;/dev/null 2&gt;&amp;1 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_f77_external_symbol=&quot;mixed case&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif $NM conftest.o | grep foo_bar &gt;/dev/null 2&gt;&amp;1 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_f77_external_symbol=&quot;no underscore&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif $NM conftest.o | grep FOO_BAR &gt;/dev/null 2&gt;&amp;1 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_f77_external_symbol=&quot;upper case&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$NM conftest.o &gt;conftest.out 2&gt;&amp;1
<br>
<p><p><p><p>....and searching through ./configire says us, that $NM is never set 
<br>
(neither in ./configure nor in our environment)
<br>
<p><p>So, we think that somewhat is not OK with ./configure script. Attend to 
<br>
the fact, that we were able to install 1.2.5 and 1.2.6 some time ago on 
<br>
same boxes without problems.
<br>
<p>Or maybe we do somewhat wrong?
<br>
<p>best regards,
<br>
Paul Kapinos
<br>
HPC Group RZ RWTH Aachen
<br>
<p><p><p><p><p><p>P.S. Folks, does somebody compiled OpenMPI 1.2.8 on someone Solaris 
<br>
sucessfully?
<br>
<p><p><p><p><p><p>

<br><p>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7014/config_2_errors_on_SolOpt-GCC4.2.log">config_2_errors_on_SolOpt-GCC4.2.log</a>
</ul>
<!-- attachment="config_2_errors_on_SolOpt-GCC4.2.log" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7014/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7015.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="7013.php">Jeff Squyres: "Re: [OMPI users] The --with-sge option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Reply:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
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
