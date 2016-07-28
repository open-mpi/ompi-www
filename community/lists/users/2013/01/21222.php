<?
$subject_val = "Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 13:32:53 2013" -->
<!-- isoreceived="20130124183253" -->
<!-- sent="Thu, 24 Jan 2013 13:29:27 -0500" -->
<!-- isosent="20130124182927" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3" -->
<!-- id="51017D87.4020208_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B0A27AD-DED4-433E-BA8A-C0EF5D85FF91_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 13:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21223.php">#YEO JINGJIE#: "[OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/24/2013 12:40 PM, Michael Kluskens wrote:
<br>
<span class="quotelev1">&gt; This is for reference and suggestions as this took me several hours to track down and the previous discussion on &quot;mpivars.sh&quot; failed to cover this point (nothing in the FAQ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I successfully build and installed OpenMPI 1.6.3 using the following on Debian Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/intel131 --disable-ipv6 --with-mpi-f90-size=medium --with-f90-max-array-dim=4 --disable-vt F77=/opt/intel/composer_xe_2013.1.117/bin/intel64/ifort FC=/opt/
</span><br>
<span class="quotelev1">&gt; intel/composer_xe_2013.1.117/bin/intel64/ifort CXXFLAGS=-m64 CFLAGS=-m64 CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (disable-vt was required because of an error finding -lz which I gave up on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My .tcshrc file HAD the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set path = (/opt/openmpi/intel131/bin $path)
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH /opt/openmpi/intel131/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; setenv MANPATH /opt/openmpi/intel131/share/man:$MANPATH
</span><br>
<span class="quotelev1">&gt; alias mpirun &quot;mpirun --prefix /opt/openmpi/intel131 &quot;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/composer_xe_2013.1.117/bin/compilervars.csh intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For years I have used these procedures on Debian Linux and OS X with earlier versions of OpenMPI and Intel Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, at some point Intel Fortran started including &quot;mpirt&quot;, including: /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So even through I have the alias set for mpirun, I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; .: 131: Can't open /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpivars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Part of the confusion is that OpenMPI source does include a reference to &quot;mpivars&quot; in &quot;contrib/dist/linux/openmpi.spec&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The solution only occurred as I was writing this up, source intel setup first:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/composer_xe_2013.1.117/bin/compilervars.csh intel64
</span><br>
<span class="quotelev1">&gt; set path = (/opt/openmpi/intel131/bin $path)
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH /opt/openmpi/intel131/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; setenv MANPATH /opt/openmpi/intel131/share/man:$MANPATH
</span><br>
<span class="quotelev1">&gt; alias mpirun &quot;mpirun --prefix /opt/openmpi/intel131 &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I finally get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpi runtime should be in the redistributable for their MPI compiler not in the base compiler.  The question is how much of /opt/intel/composer_xe_2013.1.117/mpirt can I eliminate safely and should I ( multi-user machine were each user has their own Intel license, so I don't wish to trouble shoot this in the future ) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
ifort mpirt is a run-time to support co-arrays, but not full MPI. This 
<br>
version of the compiler checks in its path setting scripts whether Intel 
<br>
MPI is already on LD_LIBRARY_PATH, and so there is a conditional setting 
<br>
of the internal mpivars.  I assume the co-array feature would be 
<br>
incompatible with OpenMPI and you would want to find a way to avoid any 
<br>
reference to that library, possibly by avoiding sourcing that part of 
<br>
ifort's compilervars.
<br>
If you want a response on this subject from the Intel support team, 
<br>
their HPC forum might be a place to bring it up: 
<br>
<a href="http://software.intel.com/en-us/forums/intel-clusters-and-hpc-technology">http://software.intel.com/en-us/forums/intel-clusters-and-hpc-technology</a>
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21223.php">#YEO JINGJIE#: "[OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="21221.php">Michael Kluskens: "[OMPI users] mpivars.sh - Intel Fortran 13.1 conflict with OpenMPI 1.6.3"</a>
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
