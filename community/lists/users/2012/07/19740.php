<?
$subject_val = "Re: [OMPI users] automatically creating a machinefile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 12:03:24 2012" -->
<!-- isoreceived="20120705160324" -->
<!-- sent="Thu, 05 Jul 2012 12:03:15 -0400" -->
<!-- isosent="20120705160315" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] automatically creating a machinefile" -->
<!-- id="4FF5BAC3.3030907_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="586A4828D7AAA04CA9B258C50A28DA200BF59429_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] automatically creating a machinefile<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 12:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Previous message:</strong> <a href="19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>In reply to:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Erin
<br>
<p>You should follow Dominik's and Reuti's suggestions,
<br>
and use the resource manager [Torque, Slurm, SGE]
<br>
built-in support for OpenMPI [and MPICH2 if you want]
<br>
<p>Which resource manager is installed in your Rocks cluster,
<br>
depends on how it was built.
<br>
Rocks can be built with either SGE or Torque, and maybe not
<br>
so easily with Slurm as well.
<br>
You may need to ask the system administrator or
<br>
whoever built/knows the cluster.
<br>
<p>However, 'man qsub' may give you a hint [will show PBS if you
<br>
have Torque/PBS and probably SGE if you have it.].
<br>
<p>We have Torque here, so my answers are focused on Torque/PBS,
<br>
but there are equivalent workarounds for SGE, I guess.
<br>
<p>***
<br>
<p>My recollection is that the OpenMPI that comes native with
<br>
Rocks is *not* built with either SGE or Torque support.
<br>
Hence, it won't pick up the nodes' file that the resource manager
<br>
allocated to your job and use it as a machinefile, which is
<br>
what you probably want.
<br>
<p>***
<br>
<p>If you're using Torque, a workaround
<br>
with the native Rocks OpenMPI
<br>
is to use the $PBS_NODEFILE file as your machine file,
<br>
e.g., inside your job submission script:
<br>
<p>cd $PBS_O_WORKDIR # this is to get to the work directory
<br>
<p>mpiexec -np 32 -hostfile $PBS_NODEFILE ./my_mpi_program
<br>
<p>***
<br>
<p>A notch up, is to install an alternative built of
<br>
OpenMPI in your area, ensuring Torque or SGE support.
<br>
This is as easy as 'configure;make;install', as long as
<br>
you use the right flags to configure:
<br>
<p>Download the source code:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>You can use gcc,g++,gfotran, to build OpenMPI, if installed
<br>
in your cluster, as in the example below, or other compilers.
<br>
<p>$ cd $HOME/Downloads
<br>
<p>$ tar -jxvf openmpi-1.6.tar.bz2
<br>
<p>$ ./configure --prefix=$HOME/openmpi-1.6.0 CC=gcc CXX=g++ F77=gfortran 
<br>
FC=gfortran
<br>
<p>If you have Torque, add this option to the command line above,
<br>
to get native Torque support:
<br>
<p>--with-tm=/path/to/torque     # wherever libtorque is installed
<br>
<p>There is a similar option to build with SGE support, if you
<br>
have SGE, just do ./configure --help to see all options.
<br>
<p>Also, if you have infiniband, and if it is installed in a
<br>
non-standard location, to build with infiniband support you
<br>
need to add this other option to the configure command line:
<br>
<p>--with-openib=/path/to/openib   # wherever librdma and libverbs are 
<br>
installed
<br>
<p>Then do:
<br>
<p>$ make
<br>
<p>$ make install
<br>
<p>**
<br>
<p>Check the README file to see if there were recent changes in
<br>
the configure options, please.
<br>
<p>Do ./configure --help to see all options.
<br>
<p>The FAQ are the actual OpenMPI documentation:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 07/04/2012 06:10 PM, Hodgess, Erin wrote:
<br>
<span class="quotelev1">&gt; Dear MPI people:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way (a script) available to automatically generate a
</span><br>
<span class="quotelev1">&gt; machinefile, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would be on Rocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; package:Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; ompi:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; orte:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; orte:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; orte:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; opal:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; opal:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; opal:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; ident:1.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; University of Houston - Downtown
</span><br>
<span class="quotelev1">&gt; mailto: hodgesse_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Previous message:</strong> <a href="19739.php">SLIM H.A.: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>In reply to:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
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
