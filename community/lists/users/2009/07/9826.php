<?
$subject_val = "[OMPI users] build-rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  4 11:55:31 2009" -->
<!-- isoreceived="20090704155531" -->
<!-- sent="Sat, 4 Jul 2009 20:24:36 +0330 (IRST)" -->
<!-- isosent="20090704165436" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="[OMPI users] build-rpm" -->
<!-- id="32213761.57591246726476295.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] build-rpm<br>
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-04 12:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9827.php">Jeff Squyres: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi every one
<br>
I built and rpm file for openmpi-1.3.2 with openmpi.spec and buildrpm.sh on the <a href="http://www.open-mpi.org/software/ompi/v1.3/srpm.php">http://www.open-mpi.org/software/ompi/v1.3/srpm.php</a> 
<br>
<p>I change buildrpm.sh as fllowing:
<br>
prefix=&quot;/usr/local/openmpi/intel/1.3.2&quot;
<br>
specfile=&quot;openmpi.spec&quot;
<br>
#rpmbuild_options=${rpmbuild_options:-&quot;--define 'mflags -j4'&quot;}
<br>
# -j4 is an option to make, specifies the number of jobs (4) to run simultaneously.
<br>
rpmbuild_options=&quot;--define 'mflags -j4'&quot;
<br>
#configure_options=${configure_options:-&quot;&quot;}
<br>
configure_options=&quot;FC=/opt/intel/Compiler/11.0/069/bin/intel64/ifort F77=/opt/intel/Compiler/11.0/069/bin/intel64/ifort CC=/opt/intel/Compiler/11.0/069/bin/intel64/icc CXX=/opt/intel/Compiler/11.0/069/bin/intel64/icpc --with-sge --with-threads=posix --enable-mpi-threads&quot;
<br>
<p># install ${prefix}/bin/mpivars.* scripts
<br>
rpmbuild_options=${rpmbuild_options}&quot; --define 'install_in_opt 0' --define 'install_shell_scripts 1' --define 'install_modulefile 0'&quot;
<br>
# prefix variable has to be passed to rpmbuild
<br>
rpmbuild_options=${rpmbuild_options}&quot; --define '_prefix ${prefix}'&quot;
<br>
<p><p># Note that this script can build one or all of the following RPMs:
<br>
# SRPM, all-in-one, multiple.
<br>
<p># If you want to build the SRPM, put &quot;yes&quot; here
<br>
build_srpm=${build_srpm:-&quot;no&quot;}
<br>
# If you want to build the &quot;all in one RPM&quot;, put &quot;yes&quot; here
<br>
build_single=${build_single:-&quot;yes&quot;}
<br>
# If you want to build the &quot;multiple&quot; RPMs, put &quot;yes&quot; here
<br>
build_multiple=${build_multiple:-&quot;no&quot;}
<br>
<p>it create openmpi-1.3.2-1.x86_64.rpm  with no error, but when I install it with rpm -ivh I see:
<br>
error: Failed dependencies:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libifcoremt.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libifport.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libiomp5.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libtorque.so.2()(64bit) is needed by openmpi-1.3.2-1.x86_64
<br>
but all above library are in my computer
<br>
<p>I use rpm -ivh --nodeps and it install completely, but when I use mpif90 and mpirun I see:
<br>
&nbsp;&nbsp;$ /usr/local/openmpi/intel/1.3.2/bin/mpif90
<br>
gfortran: no input files   (I compile with ifort!!!!)
<br>
<p>&nbsp;&nbsp;$ /usr/local/openmpi/intel/1.3.2/bin/mpirun
<br>
usr/local/openmpi/intel/1.3.2/bin/mpirun: symbol lookup error: /usr/local/openmpi/intel/1.3.2/bin/mpirun: undefined symbol: orted_cmd_line
<br>
<p>What is wrong? 
<br>
Please help me
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9827.php">Jeff Squyres: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
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
