<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 20:24:54 2014" -->
<!-- isoreceived="20140731002454" -->
<!-- sent="Thu, 31 Jul 2014 00:24:53 +0000" -->
<!-- isosent="20140731002453" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error" -->
<!-- id="AB82A9AC-45EF-41F6-B44F-402F6BEA0C15_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF85E44503.AC585A78-ON49257D24.00142D50-49257D24.001496D2_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 20:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15383.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev1">&gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev1">&gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<p>Just to go back to the original post here: can you send the results of
<br>
<p>&nbsp;&nbsp;mpifort test.f -o test.ex --showme
<br>
<p>I'd like to see what fortran libraries are being linked in.  Here's what I get when I compile OMPI with the Intel suite:
<br>
<p>-----
<br>
$ mpifort hello_usempif08.f90 -o hello --showme
<br>
ifort hello_usempif08.f90 -o hello -I/home/jsquyres/bogus/include -I/home/jsquyres/bogus/lib -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -Wl,--enable-new-dtags -L/home/jsquyres/bogus/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
<pre>
----
I note that with the Intel compiler, the Fortran module files are created in the lib directory (i.e., $prefix/lib), which is -L'ed on the link line.  Does the PGI compiler require something different?  Does the PGI 14 compiler make an additional library for modules that we need to link in?
We didn't use CONTAINS, and it supposedly works fine with the mpi module (right, guys?), so I'm not sure would the same scheme wouldn't work for the mpi_f08 module...?
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15383.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
