<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 09:54:47 2007" -->
<!-- isoreceived="20070802135447" -->
<!-- sent="Thu, 2 Aug 2007 15:55:29 +0200" -->
<!-- isosent="20070802135529" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vampir trace" -->
<!-- id="200708021555.33352.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="195B5678-E1D8-4A1C-B5FF-2F34FB9EB5A6_at_cisco.com" -->
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
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 09:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/1795.php">Jeff Squyres: "Re: [OMPI devel] vampir trace - additional compiler options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody, 
<br>
<p>News from the vampir trace integration at last. The current vampir trace 
<br>
release is included in the TMP tree of the OpenMPI SVN. Now, autoconf scripts 
<br>
need to be added. 
<br>
<p>Then the build procedure will look like this:
<br>
<p>1) run global OpenMPI configure script
<br>
2) the global configure script will call the local one at some point
<br>
3) the global make command is issued
<br>
4) vampirtrace's make is called early in this process
<br>
5) building the config-file which determines compiler flags for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc-vt, mpicxx-vt, mpif90-vt, etc.
<br>
<p>Step 5) depends on step 4) because you need to ask vampir trace for this 
<br>
flags. Here, 'ask' means calling some of vampir trace's commands.
<br>
<p>Now, this was a problem with cross compilation (*) but not any longer. Besides 
<br>
the binaries we have a script which will tell the include and library flags 
<br>
which need to be added on behalf of vampir trace.
<br>
<p>The script is called  vtconfig, located at $(VTROOT)/vtlib/vtconfig/vtconfig. 
<br>
Call vtconfig with '--libs' or '--includes' to get either information on 
<br>
stdout. Those flags can be combined with one of [--seq|--mpi|--omp|--hyb] and  
<br>
[--fortran] and [--dyninst] to get, for example the flags or Fortran with MPI 
<br>
(of course).
<br>
<p>Alternatively, the information could be extracted from
<br>
$(VTROOT)/tools/compwrap/compwrap_conf.h but I would not recommend it.
<br>
<p>Is this sufficient to get the autoconf parts done, that call vampir trace's 
<br>
configure and make?
<br>
<p>Best regards, Andreas
<br>
<p><p>ps: (*) cross compiling really gets funny here: if you are cross compiling 
<br>
OpenMPI to run completely on a different platform, everything is like said 
<br>
above. But if you make OpenMPI _as_ a cross compiler, then the compiler 
<br>
wrappers should be compiled normally but the run time libs need to be for the 
<br>
target platform. Well, then you combine both ... &lt;8)
<br>
<p><p><p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2069/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/1795.php">Jeff Squyres: "Re: [OMPI devel] vampir trace - additional compiler options"</a>
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
