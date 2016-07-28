<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 21:16:49 2014" -->
<!-- isoreceived="20140731011649" -->
<!-- sent="Wed, 30 Jul 2014 18:16:47 -0700" -->
<!-- isosent="20140731011647" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA16APTi6vDT+6HBJyb2+XTSPXg=vJJ_daRXXYuCzXxkb7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 21:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I can now reproduce Tetsuya's original problem, using a build of 1.8.2rc2
<br>
with PGI 14.4.
<br>
<p>$ INST/bin/mpifort  ../test.f
<br>
/scratch/scratchdirs/hargrove/pgf90pdegT3bhBmEq.o: In function `.C1_283':
<br>
test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
<br>
test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
<br>
test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
<br>
test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
<br>
/usr/bin/ld: link errors found, deleting executable `a.out'
<br>
<p>And here is the showme:
<br>
<p>$ INST/bin/mpifort  ../test.f --showme
<br>
pgf90 ../test.f
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc2-linux-x86_64-pgi-14.4/INST/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc2-linux-x86_64-pgi-14.4/INST/lib
<br>
-Wl,-rpath
<br>
-Wl,/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc2-linux-x86_64-pgi-14.4/INST/lib
<br>
-L/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc2-linux-x86_64-pgi-14.4/INST/lib
<br>
-lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
<p><p>It may be relevant to note that the 4 undefined references each name a
<br>
module.
<br>
There does not appear to be any definition of these in any library:
<br>
<p>$ for x in INST/lib/*.{a,so}; do nm $x; done | grep -i mpi_f08_sizeof
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mpi_f08_sizeof_
<br>
<p>That undefined reference is in libmpi_usepmif90.so along with the other
<br>
three in the linker error.
<br>
<p><p>I am essentially illiterate with respect to any feature added to fortran
<br>
after F77.
<br>
So, I am happy to run tests but have no suggestions as to a resolution.
<br>
<p>-Paul
<br>
<p>On Wed, Jul 30, 2014 at 5:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
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
<span class="quotelev1">&gt; `mpi_f08_interfaces_callbacks_'
</span><br>
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
<span class="quotelev1">&gt;   mpifort test.f -o test.ex --showme
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to see what fortran libraries are being linked in.  Here's what I
</span><br>
<span class="quotelev1">&gt; get when I compile OMPI with the Intel suite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ mpifort hello_usempif08.f90 -o hello --showme
</span><br>
<span class="quotelev1">&gt; ifort hello_usempif08.f90 -o hello -I/home/jsquyres/bogus/include
</span><br>
<span class="quotelev1">&gt; -I/home/jsquyres/bogus/lib -Wl,-rpath -Wl,/home/jsquyres/bogus/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -lmpi_usempif08
</span><br>
<span class="quotelev1">&gt; -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that with the Intel compiler, the Fortran module files are created
</span><br>
<span class="quotelev1">&gt; in the lib directory (i.e., $prefix/lib), which is -L'ed on the link line.
</span><br>
<span class="quotelev1">&gt;  Does the PGI compiler require something different?  Does the PGI 14
</span><br>
<span class="quotelev1">&gt; compiler make an additional library for modules that we need to link in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We didn't use CONTAINS, and it supposedly works fine with the mpi module
</span><br>
<span class="quotelev1">&gt; (right, guys?), so I'm not sure would the same scheme wouldn't work for the
</span><br>
<span class="quotelev1">&gt; mpi_f08 module...?
</span><br>
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15377.php">http://www.open-mpi.org/community/lists/devel/2014/07/15377.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15384.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
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
