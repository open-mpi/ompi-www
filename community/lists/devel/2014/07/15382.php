<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 21:16:22 2014" -->
<!-- isoreceived="20140731011622" -->
<!-- sent="Thu, 31 Jul 2014 10:15:19 +0900" -->
<!-- isosent="20140731011519" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error" -->
<!-- id="OF9095F8A1.D4B2B8A0-ON49257D26.00048670-49257D26.0006FE18_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AB82A9AC-45EF-41F6-B44F-402F6BEA0C15_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with%20PGI-14.7	causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-30 21:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15383.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15381.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul and Jeff,
<br>
<p>I additionally installed PGI14.4 and check the behavior.
<br>
Then, I confirmed that both versions create same results.
<br>
<p>PGI14.7:
<br>
[mishima_at_manage work]$ mpif90 test.f -o test.ex --showme
<br>
pgfortran test.f -o test.ex
<br>
-I/home/mishima/opt/mpi/openmpi-1.8.2rc2-pgi14.7/include
<br>
-I/home/mishima/opt/mpi/openmpi-1.8
<br>
.2rc2-pgi14.7/lib -Wl,-rpath
<br>
-Wl,/home/mishima/opt/mpi/openmpi-1.8.2rc2-pgi14.7/lib
<br>
-L/home/mishima/opt/mpi/openmpi-1.8.
<br>
2rc2-pgi14.7/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
[mishima_at_manage work]$ mpif90 test.f -o test.ex
<br>
/tmp/pgfortranD-vdxk_lnPL3.o: In function `.C1_283':
<br>
test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
<br>
test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
<br>
test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
<br>
test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
<br>
<p>PGI14.4:
<br>
[mishima_at_manage work]$ mpif90 test.f -o test.ex --showme
<br>
pgfortran test.f -o test.ex
<br>
-I/home/mishima/opt/mpi/openmpi-1.8.2rc2-pgi14.4/include
<br>
-I/home/mishima/opt/mpi/openmpi-1.8
<br>
.2rc2-pgi14.4/lib -Wl,-rpath
<br>
-Wl,/home/mishima/opt/mpi/openmpi-1.8.2rc2-pgi14.4/lib
<br>
-L/home/mishima/opt/mpi/openmpi-1.8.
<br>
2rc2-pgi14.4/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
[mishima_at_manage work]$ mpif90 test.f -o test.ex
<br>
/tmp/pgfortranm9sdKiZYkrMy.o: In function `.C1_283':
<br>
test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
<br>
test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
<br>
test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
<br>
test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
<br>
<p>As I reported before, mpi_f08*.mod is created in $prefix/lib.
<br>
<p>[mishima_at_manage openmpi-1.8.2rc2-pgi14.7]$ ll lib/mpi_f08*
<br>
-rwxr-xr-x 1 mishima mishima    327 Jul 30 12:27 lib/mpi_f08_ext.mod
<br>
-rwxr-xr-x 1 mishima mishima  11716 Jul 30 12:27
<br>
lib/mpi_f08_interfaces_callbacks.mod
<br>
-rwxr-xr-x 1 mishima mishima 374813 Jul 30 12:27 lib/mpi_f08_interfaces.mod
<br>
-rwxr-xr-x 1 mishima mishima 715615 Jul 30 12:27 lib/mpi_f08.mod
<br>
-rwxr-xr-x 1 mishima mishima  14730 Jul 30 12:27 lib/mpi_f08_sizeof.mod
<br>
-rwxr-xr-x 1 mishima mishima  77141 Jul 30 12:27 lib/mpi_f08_types.mod
<br>
<p><p>Strange thing is that openmpi-1.8 with PGI14.7 works fine.
<br>
What's the difference with openmpi-1.8 and openmpi-1.8.2rc2?
<br>
<p>[mishima_at_manage work]$ mpif90 test.f -o test.ex --showme
<br>
pgfortran test.f -o test.ex
<br>
-I/home/mishima/opt/mpi/openmpi-1.8-pgi14.7/include
<br>
-I/home/mishima/opt/mpi/openmpi-1.8-pgi1
<br>
4.7/lib -Wl,-rpath -Wl,/home/mishima/opt/mpi/openmpi-1.8-pgi14.7/lib
<br>
-L/home/mishima/opt/mpi/openmpi-1.8-pgi14.7/lib -lm
<br>
pi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
[mishima_at_manage work]$ mpif90 test.f -o test.ex
<br>
[mishima_at_manage work]$
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x6c): undefined reference to
</span><br>
`mpi_f08_interfaces_callbacks_'
<br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to go back to the original post here: can you send the results of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort test.f -o test.ex --showme
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to see what fortran libraries are being linked in.  Here's what
</span><br>
I get when I compile OMPI with the Intel suite:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ mpifort hello_usempif08.f90 -o hello --showme
</span><br>
<span class="quotelev1">&gt; ifort hello_usempif08.f90 -o hello -I/home/jsquyres/bogus/include
</span><br>
-I/home/jsquyres/bogus/lib -Wl,-rpath -Wl,/home/jsquyres/bogus/lib
<br>
-Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -lmpi_usempif08
<br>
<span class="quotelev1">&gt; -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that with the Intel compiler, the Fortran module files are created
</span><br>
in the lib directory (i.e., $prefix/lib), which is -L'ed on the link line.
<br>
Does the PGI compiler require something
<br>
<span class="quotelev1">&gt; different?  Does the PGI 14 compiler make an additional library for
</span><br>
modules that we need to link in?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We didn't use CONTAINS, and it supposedly works fine with the mpi module
</span><br>
(right, guys?), so I'm not sure would the same scheme wouldn't work for the
<br>
mpi_f08 module...?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15377.php">http://www.open-mpi.org/community/lists/devel/2014/07/15377.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15383.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15381.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
