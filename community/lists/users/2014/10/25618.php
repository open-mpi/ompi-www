<?
$subject_val = "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 14:06:28 2014" -->
<!-- isoreceived="20141027180628" -->
<!-- sent="Mon, 27 Oct 2014 18:06:07 +0000" -->
<!-- isosent="20141027180607" -->
<!-- name="Bosler, Peter Andrew" -->
<!-- email="pabosle_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers" -->
<!-- id="D073E550.1B62%pabosle_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers<br>
<strong>From:</strong> Bosler, Peter Andrew (<em>pabosle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 14:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p>I'm trying to build OpenMPI with the Intel 14.01 compilers with the following configure line
<br>
./configure --prefix=/opt/openmpi-1.8.3/intel-14.01 CC=icc CXX=icpc FC=ifort
<br>
On a 6-core 3.5 GHz Intel Xeon E5 Mac Pro running Mac OS X 10.9.5.
<br>
<p>Configure outputs a pthread error, complaining that different threads don't have the same PID.
<br>
I also get the same error with OpenMPI 1.8.2 and the Intel compilers.
<br>
I was able to build OpenMPI 1.8.3 with both LLVM 5.1 and GCC 4.9 so something is going wrong with the Intel compilers threading interface.
<br>
<p>Interestingly, OpenMPI 1.8.3 and the Intel 14.01 compilers work fine on my Macbook pro : same OS, different CPU (2.8 Ghz Intel Core i7), same configure line.
<br>
<p>Is there an environment variable or configure option that I need to set to avoid this error on the Mac Pro?
<br>
<p>Thanks for your help.
<br>
<p>Pete Bosler
<br>
<p>P.S. The specific warnings and error from openmpi-1.8.3/configure are the following (and the whole output file is attached):
<br>
<p>... Lots of output ...
<br>
configure: WARNING: ulimit.h: present but cannot be compiled
<br>
configure: WARNING: ulimit.h:     check for missing prerequisite headers?
<br>
configure: WARNING: ulimit.h: see the Autoconf documentation
<br>
configure: WARNING: ulimit.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
configure: WARNING: ulimit.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## ------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ## ------------------------------------------------------ ##
<br>
... Lots more output ...
<br>
checking if threads have different pids (pthreads on linux)... yes
<br>
configure: WARNING: This version of Open MPI only supports environments where
<br>
configure: WARNING: threads have the same PID.  Please use an older version of
<br>
configure: WARNING: Open MPI if you need support on systems with different
<br>
configure: WARNING: PIDs for threads in the same process.  Open MPI 1.4.x
<br>
configure: WARNING: supports such systems, as does at least some versions the
<br>
configure: WARNING: Open MPI 1.5.x series.
<br>
configure: error: Cannot continue
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25618/configureOMPI-1.8.3-Intel-14.01.txt">configureOMPI-1.8.3-Intel-14.01.txt</a>
</ul>
<!-- attachment="configureOMPI-1.8.3-Intel-14.01.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25617.php">Ralph Castain: "Re: [OMPI users] HAMSTER MPI+Yarn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="25620.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Reply:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
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
