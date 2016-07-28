<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 09:23:13 2007" -->
<!-- isoreceived="20070827132313" -->
<!-- sent="Mon, 27 Aug 2007 07:23:03 -0600" -->
<!-- isosent="20070827132303" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk issue?" -->
<!-- id="C2F82C57.A952%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 09:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2227.php">Manuel Prinz: "Re: [OMPI devel] Minor bug: sattach gives bad advice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Reply:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>Just checked out a fresh copy of the trunk and tried to build it using my
<br>
usual configure:
<br>
<p>./configure --prefix=/Users/rhc/openmpi --with-devel-headers
<br>
--disable-shared --enable-static --disable-mpi-f77 --disable-mpi-f90
<br>
--enable-mem-debug --without-memory-manager --enable-debug
<br>
--disable-progress-threads --disable-mpi-threads --disable-io-romio
<br>
--without-threads --disable-dlopen
<br>
<p><p>Got this error:
<br>
<p>Making all in mca/timer/darwin
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in .
<br>
make[2]: *** No rule to make target `../opal/libltdl/libltdlc.la', needed by
<br>
`libopen-pal.la'.  Stop.
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>It looks like some change may have broken one of these options?
<br>
<p>Ralph
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2227.php">Manuel Prinz: "Re: [OMPI devel] Minor bug: sattach gives bad advice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Reply:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
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
