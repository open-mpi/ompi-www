<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 15:49:11 2007" -->
<!-- isoreceived="20071017194911" -->
<!-- sent="Wed, 17 Oct 2007 13:48:57 -0600" -->
<!-- isosent="20071017194857" -->
<!-- name="Jennis Pruett" -->
<!-- email="jennyp_at_[hidden]" -->
<!-- subject="[OMPI devel] issue with --without-tm in configure?" -->
<!-- id="00cc01c810f6$c16d3ca0$bcf3a580_at_lanl.gov" -->
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
<strong>From:</strong> Jennis Pruett (<em>jennyp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 15:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, All, 
<br>
<p>I'm new to this forum, but I'm told this is where I'm to ask questions.
<br>
<p>I have a linux cluster, bproc, gm, and am trying to configure version 1.2.4.
<br>
This is my configure command line:
<br>
<p>&nbsp;./configure
<br>
--prefix=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi-1.2.4
<br>
--libdir=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi-1.2.4/lib64
<br>
--with-bproc --without-tm --enable-shared
<br>
--with-io_romio_flags=--with-file-system=ufs+nfs+panfs --without-pty_support
<br>
<p>( I threw in the --without-pty-support just to see if it would make a
<br>
difference.)
<br>
<p>The make and install seem to proced ok. 
<br>
The test I have is an IMB-MPI1 test, and I am getting these warnings, no
<br>
matter what compiler I
<br>
m using.:
<br>
<p><span class="quotelev1"> &gt;mpirun -n 6 ./IMB-MPI1
</span><br>
[n110:26208] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n110:26208] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n111:26215] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n111:26212] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n112:26216] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n112:26213] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n110:26211] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n110:26214] mca: base: component_find: unable to open ras tm: file not
<br>
found 
<br>
(ignored)
<br>
[n111:26212] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n111:26215] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n112:26213] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n110:26211] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n110:26214] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
[n112:26216] mca: base: component_find: unable to open pls tm: file not
<br>
found 
<br>
(ignored)
<br>
<p><p>I was told today that the --without-tm parameter  is being ignored in the
<br>
configure statement.
<br>
<p>Anyone know what is going on?
<br>
<p>Thanks,
<br>
<p>-----------------------------------------------------------------------
<br>
Jennis (Jenny)
<br>
Los Alamos National Laboratory
<br>
505-667-1955
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2457.php">Jeff Squyres: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2475.php">Jennis Pruett: "Re: [OMPI devel] issue with --without-tm in configure?"</a>
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
