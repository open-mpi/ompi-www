<?
$subject_val = "[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 08:19:19 2012" -->
<!-- isoreceived="20120529121919" -->
<!-- sent="Tue, 29 May 2012 14:19:03 +0200" -->
<!-- isosent="20120529121903" -->
<!-- name="Antonio Messina" -->
<!-- email="amessina_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6" -->
<!-- id="4FC4BEB7.3000206_at_ictp.it" -->
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
<strong>Subject:</strong> [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6<br>
<strong>From:</strong> Antonio Messina (<em>amessina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 08:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19389.php">Rohan Deshpande: "[OMPI users] Gathering results of MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19387.php">Fran&#231;ois Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, I'm having troubles while compiling (well, trying to compile)
<br>
openmpi 1.6 with intel 12.0.4. The error message I am getting while
<br>
running the configure script is:
<br>
<p>*** GNU libltdl setup
<br>
checking location of libltdl... internal copy
<br>
configure: WARNING: Failed to build GNU libltdl.  This usually means
<br>
that something
<br>
configure: WARNING: is incorrectly setup with your environment.  There
<br>
may be useful information in
<br>
&nbsp;configure: WARNING: opal/libltdl/config.log.  You can also disable GNU
<br>
libltdl, which will disable
<br>
configure: WARNING: dynamic shared object loading, by configuring with
<br>
--disable-dlopen.
<br>
configure: error: Cannot continue
<br>
<p>The command line I'm using is:
<br>
<p>&nbsp;./configure --prefix=/opt/openmpi/1.6/intel/2011  --with-tm=/opt/torque
<br>
--with-openib=/usr
<br>
<p>I am using &quot;module environment&quot; which is setting the following variables:
<br>
<p>PATH=/opt/intel/2011/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/maui/bin:/opt/maui/sbin:/opt/bin:/opt/torque/bin:/opt/torque/sbin:/root/bin
<br>
LD_LIBRARY_PATH=/opt/intel/2011/lib/intel64:/opt/intel/2011/mkl/lib/intel64:/opt/torque/lib
<br>
F77=ifort
<br>
CXX=icpc
<br>
FC=ifort
<br>
CC=icc
<br>
<p>The machine used to comiple the software is a fresh CentOS 6.2 x86_64.
<br>
In attach you will find the config.log and the output of the configure
<br>
command.
<br>
<p>Compilation with the following compilers goes fine:
<br>
<p>* gcc 4.6.2
<br>
* intel 11.1
<br>
* pgi 10.9
<br>
<p>I can provide logs and compilation/configure outputs for those
<br>
compilation as well, if needed, and the list of installed packages.
<br>
<p>Thank you very much in advance for your help.
<br>
<p>.a.
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19388/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19388/openmpi-1.6_intel.2011_configure.log.gz">openmpi-1.6_intel.2011_configure.log.gz</a>
</ul>
<!-- attachment="openmpi-1.6_intel.2011_configure.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19389.php">Rohan Deshpande: "[OMPI users] Gathering results of MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19387.php">Fran&#231;ois Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
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
