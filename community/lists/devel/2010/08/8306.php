<?
$subject_val = "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 16:20:48 2010" -->
<!-- isoreceived="20100820202048" -->
<!-- sent="Fri, 20 Aug 2010 14:20:40 -0600" -->
<!-- isosent="20100820202040" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers" -->
<!-- id="A0BFD1B1-80DC-4A8A-8043-9C6F27584B66_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 16:20:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8307.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I configure using --prefix and --with-platform=/contrib/platform/lanl/tlcc/debug-panasas
<br>
<p>This works for every compiler except Intel. The &quot;make&quot; phase terminates with
<br>
<p>libtool: link: /opt/Intel/cce/10.0.023/bin/icpc -I/opt/panfs/include -shared-intel -g -finline-functions -fexceptions -pthread -fexceptions -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o  ../../../ompi/.libs/libmpi.so -lrdmacm -libverbs /usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/orte/.libs/libopen-rte.so /usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/opal/.libs/libopen-pal.so -lnuma -ldl -lnsl -lutil -pthread -Wl,-rpath,/usr/projects/packages/openmpi/tlcc/openmpi-1.4.2-intel-debug/lib
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `__invalid_size_argument_for_IOC'
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[2]: Leaving directory `/usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>The actual problem is in the system include files, namely /usr/include/asm-generic/ioctl.h and is well described here:
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=473947">https://bugzilla.redhat.com/show_bug.cgi?id=473947</a>
<br>
<p>The &quot;ugly&quot; fix recommended in the write-up works for the simple reproducer code given but has anyone figured out how to apply such a fix to the OMPI code?
<br>
<p>Thanks,
<br>
david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8307.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8439.php">David Gunter: "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
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
