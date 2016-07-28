<?
$subject_val = "[OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 03:53:00 2009" -->
<!-- isoreceived="20090219085300" -->
<!-- sent="Thu, 19 Feb 2009 10:52:55 +0200" -->
<!-- isosent="20090219085255" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7" -->
<!-- id="b20b52800902190052j2b13854bg1df33503dcca03b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 03:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Previous message:</strong> <a href="5463.php">Mike Dubman: "Re: [OMPI devel] SVN-specific tools?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p>We have compilation problem of ompi v1.3 on Itanium ia64 + gcc + rhel 4.7.
<br>
It seems that vt_pform_linux.c:46 includes asm/intrinsics.h which is
<br>
unavailable on rhel47/ia64 in /usr/include/asm but is a part of
<br>
kernel-headers rpm
<br>
(in /usr/src/kernels/2.6.9-78.EL-ia64/include/asm-ia64/)
<br>
<p><p>We compile ompi v1.3 from srpm with a command:
<br>
<p>configure_options=&quot;--define 'configure_options
<br>
--enable-orterun-prefix-by-default --with-openib
<br>
--enable-mpirun-prefix-by-default'&quot;
<br>
rpmbuild_options=&quot;--define 'install_in_opt 1' --define
<br>
'use_default_rpm_opt_flags 0' --define 'ofed 1' --define 'mflags -j4'
<br>
--define '_vendor Voltaire' --define 'packager Voltaire'&quot;
<br>
rpmbuild --rebuild $configure_options $rpmbuild_options
<br>
/path/to/openmpi_v1.3_src.rpm
<br>
<p>and getting the following error:
<br>
<p>tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/opt/openmpi/1.3/bin\&quot;
<br>
-DDATADIR=\&quot;
<br>
/opt/openmpi/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP   -MT
<br>
vt_pform_
<br>
linux.o -MD -MP -MF .deps/vt_pform_linux.Tpo -c -o vt_pform_linux.o
<br>
vt_pform_lin ux.c
<br>
vt_pform_linux.c:46:31: asm/intrinsics.h: No such file or directory
<br>
vt_pform_linux.c: In function `vt_pform_wtime':
<br>
vt_pform_linux.c:172: error: `_IA64_REG_AR_ITC' undeclared (first use in
<br>
this fu
<br>
nction)
<br>
vt_pform_linux.c:172: error: (Each undeclared identifier is reported only
<br>
once
<br>
vt_pform_linux.c:172: error: for each function it appears in.)
<br>
make[5]: *** [vt_pform_linux.o] Error 1
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
mv -f .deps/vt_otf_trc.Tpo .deps/vt_otf_trc.Po
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
mv -f .deps/vt_otf_gen.Tpo .deps/vt_otf_gen.Po mv -f .deps/vt_iowrap.Tpo
<br>
.deps/vt_iowrap.Po
<br>
make[5]: Leaving directory
<br>
`/tmp/buildopenmpi-30371/BUILD/openmpi-1.3/ompi/contr
<br>
ib/vt/vt/vtlib'
<br>
make[4]: make[4]: Leaving directory
<br>
`/tmp/buildopenmpi-30371/BUILD/openmpi-1.3/o
<br>
mpi/contrib/vt/vt'
<br>
*** [all-recursive] Error 1
<br>
<p><p>Please suggest.
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5465.php">Bert Wesarg: "[OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Previous message:</strong> <a href="5463.php">Mike Dubman: "Re: [OMPI devel] SVN-specific tools?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Reply:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
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
