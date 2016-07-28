<?
$subject_val = "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 08:51:26 2011" -->
<!-- isoreceived="20110104135126" -->
<!-- sent="Tue, 04 Jan 2011 14:51:21 +0100" -->
<!-- isosent="20110104135121" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC" -->
<!-- id="4D2325D9.4070101_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 08:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Previous message:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Reply:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI folks,
<br>
<p>I tried to compile the OpenMPI version 1.5.1 on a CentOS  5.5 computer 
<br>
with the default GCC shipped with the distribution, which is
<br>
<p>gcc version 4.1.2 20080704 (Red Hat 4.1.2-48)
<br>
<p>The configuration failed:
<br>
<p>....
<br>
configure:156412: checking location of libltdl
<br>
configure:156425: result: internal copy
<br>
configure:156709: WARNING: Failed to build GNU libltdl.  This usually 
<br>
means that something
<br>
configure:156711: WARNING: is incorrectly setup with your environment. 
<br>
There may be useful information in
<br>
configure:156713: WARNING: opal/libltdl/config.log.  You can also 
<br>
disable GNU libltdl, which will disable
<br>
configure:156715: WARNING: dynamic shared object loading, by configuring 
<br>
with --disable-dlopen.
<br>
configure:156717: error: Cannot continue
<br>
<p><p>The configuration line was was follows:
<br>
<p>$ ./configure --with-openib --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-mpi-threads CFLAGS=-O3 -ffast-math 
<br>
-mtune=opteron -m32  CXXFLAGS=-O3 -ffast-math -mtune=opteron -m32 
<br>
FFLAGS=-O3 -ffast-math -mtune=opteron -m32  FCFLAGS=-O3 -ffast-math 
<br>
-mtune=opteron -m32  F77=gfortran LDFLAGS=-O3 -ffast-math -mtune=opteron 
<br>
-m32  --prefix=/....../MPI/openmpi-1.5.1mt/linux32/gcc
<br>
<p><p>With a newer version of GCC, version 4.2.4   (and also gcc version 
<br>
4.5.1) the configuration completed fine.
<br>
<p>Does there an error in my way of configuring, or is there a problem in 
<br>
the configure itself? I think the non-ability to configure and build 
<br>
OpenMPI with the default compiler on CentOS 5.5 is still a problem, also 
<br>
other versions of GCC seem not to have the same issue.
<br>
<p>Best wishes,
<br>
<p>Paul
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15267/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Previous message:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>Reply:</strong> <a href="15268.php">Jeff Squyres: "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
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
