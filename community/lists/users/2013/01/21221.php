<?
$subject_val = "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 12:40:54 2013" -->
<!-- isoreceived="20130124174054" -->
<!-- sent="Thu, 24 Jan 2013 12:40:45 -0500" -->
<!-- isosent="20130124174045" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3" -->
<!-- id="1B0A27AD-DED4-433E-BA8A-C0EF5D85FF91_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3<br>
<strong>From:</strong> Michael Kluskens (<em>michael.kluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 12:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="21220.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is for reference and suggestions as this took me several hours to track down and the previous discussion on &quot;mpivars.sh&quot; failed to cover this point (nothing in the FAQ):
<br>
<p>I successfully build and installed OpenMPI 1.6.3 using the following on Debian Linux:
<br>
<p>./configure --prefix=/opt/openmpi/intel131 --disable-ipv6 --with-mpi-f90-size=medium --with-f90-max-array-dim=4 --disable-vt F77=/opt/intel/composer_xe_2013.1.117/bin/intel64/ifort FC=/opt/
<br>
intel/composer_xe_2013.1.117/bin/intel64/ifort CXXFLAGS=-m64 CFLAGS=-m64 CC=gcc CXX=g++
<br>
<p>(disable-vt was required because of an error finding -lz which I gave up on).
<br>
<p>My .tcshrc file HAD the following:
<br>
<p>set path = (/opt/openmpi/intel131/bin $path)
<br>
setenv LD_LIBRARY_PATH /opt/openmpi/intel131/lib:$LD_LIBRARY_PATH
<br>
setenv MANPATH /opt/openmpi/intel131/share/man:$MANPATH
<br>
alias mpirun &quot;mpirun --prefix /opt/openmpi/intel131 &quot;
<br>
source /opt/intel/composer_xe_2013.1.117/bin/compilervars.csh intel64
<br>
<p>For years I have used these procedures on Debian Linux and OS X with earlier versions of OpenMPI and Intel Fortran.
<br>
<p>However, at some point Intel Fortran started including &quot;mpirt&quot;, including: /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun
<br>
<p>So even through I have the alias set for mpirun, I got the following error:
<br>
<p><span class="quotelev1">&gt; mpirun -V
</span><br>
.: 131: Can't open /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpivars.sh
<br>
<p>Part of the confusion is that OpenMPI source does include a reference to &quot;mpivars&quot; in &quot;contrib/dist/linux/openmpi.spec&quot;
<br>
<p>The solution only occurred as I was writing this up, source intel setup first:
<br>
<p>source /opt/intel/composer_xe_2013.1.117/bin/compilervars.csh intel64
<br>
set path = (/opt/openmpi/intel131/bin $path)
<br>
setenv LD_LIBRARY_PATH /opt/openmpi/intel131/lib:$LD_LIBRARY_PATH
<br>
setenv MANPATH /opt/openmpi/intel131/share/man:$MANPATH
<br>
alias mpirun &quot;mpirun --prefix /opt/openmpi/intel131 &quot;
<br>
<p>Now I finally get:
<br>
<p><span class="quotelev1">&gt; mpirun -V
</span><br>
mpirun (Open MPI) 1.6.3
<br>
<p>The mpi runtime should be in the redistributable for their MPI compiler not in the base compiler.  The question is how much of /opt/intel/composer_xe_2013.1.117/mpirt can I eliminate safely and should I ( multi-user machine were each user has their own Intel license, so I don't wish to trouble shoot this in the future ) ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="21220.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="21222.php">Tim Prince: "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
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
