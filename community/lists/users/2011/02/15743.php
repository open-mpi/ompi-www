<?
$subject_val = "[OMPI users] Problems with mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 09:21:28 2011" -->
<!-- isoreceived="20110225142128" -->
<!-- sent="Fri, 25 Feb 2011 15:21:23 +0100" -->
<!-- isosent="20110225142123" -->
<!-- name="Ole Widar Saastad" -->
<!-- email="o.w.saastad_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with mpicc-wrapper-data.txt" -->
<!-- id="1298643683.6143.89.camel_at_pyren.uio.no" -->
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
<strong>Subject:</strong> [OMPI users] Problems with mpicc-wrapper-data.txt<br>
<strong>From:</strong> Ole Widar Saastad (<em>o.w.saastad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 09:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<li><strong>Previous message:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the follwing error (it is more like a waring, the mpicc produce
<br>
output):
<br>
[olews_at_login-0-1 $ /site/VERSIONS/openmpi-1.4.3.intel.test/bin/mpicc
<br>
[login-0-1.local:14689] keyval parser: error 1 reading file /site/VERSIONS/openmpi-1.4.3.intel.test/share/openmpi/mpicc-wrapper-data.txt at line 1:
<br>
&nbsp;&nbsp;# There can be multiple blocks of configuration data, chosen by
<br>
gcc: no input files
<br>
<p><p>The /site/VERSIONS/openmpi-1.4.3.intel.test/share/openmpi/mpicc-wrapper-data.txt is read, verified by chaning it and noticing it's effect. It works fint, but many users are quite unhappy wit this error. I have used strace to see that all the characters get read (322 from strace and 322 from wc).
<br>
It looks like there is something internal in the executable
<br>
<p>Is there a fix for apparently bug ? I searched the mailing list, but
<br>
most information I got was of the type configure/make clean/make/make
<br>
install and this is something I have tried before.
<br>
<p><p><p>Background :
<br>
<p>We have several installations of OpenMPI installed.
<br>
<p>They reside at (showing mpicc location) :
<br>
&nbsp;
<br>
/site/VERSIONS/openmpi-1.2.8.gnu/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.2.8.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.3.3.gnu/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.3.3.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.3.3.intel.ipath/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.3.3.pgi/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.1.gnu/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.1.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.2.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.gnu/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.gnu32/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.intel.test/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.open64/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.3.pgi/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.intel/bin/mpicc
<br>
/site/VERSIONS/openmpi-1.4.intel.icc/bin/mpicc
<br>
<p>With corresponding modules to set up the correct path and library path.
<br>
set modulefile [lrange [split [module-info name] {/}] 0 0]
<br>
set apphome    /site/VERSIONS/openmpi-1.4.3.intel.test
<br>
set appname    OpenMPI
<br>
set appurl     <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
<br>
<p>module-whatis   &quot;A High Performance Message Passing Library&quot;
<br>
<p>setenv          MPI_TYPE          openmpi
<br>
<p>prepend-path    PATH            $apphome/bin
<br>
prepend-path    LD_LIBRARY_PATH $apphome/lib
<br>
prepend-path    LD_LIBRARY_PATH $apphome/lib/openmpi
<br>
prepend-path    MANPATH         $apphome/share/man
<br>
<p><p><p><pre>
-- 
Ole W. Saastad, dr. scient.
Scientific Computing Group, USIT, University of Oslo
<a href="http://hpc.uio.no">http://hpc.uio.no</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<li><strong>Previous message:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
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
