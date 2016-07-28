<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 14:00:09 2014" -->
<!-- isoreceived="20140415180009" -->
<!-- sent="Tue, 15 Apr 2014 13:59:48 -0400" -->
<!-- isosent="20140415175948" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDf=db0=azS3jBp7wK0mYGi-bw=-8hBaK=fYuzZWGWKe-A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534D56FA.2040703_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several processors<br>
<strong>From:</strong> Djordje Romanic (<em>djordje8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 13:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24204.php">Oscar Mojica: "[OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It is working now. It shows:
<br>
--------------------------------------------
<br>
starting wrf task            0  of            4
<br>
&nbsp;starting wrf task            1  of            4
<br>
&nbsp;starting wrf task            2  of            4
<br>
&nbsp;starting wrf task            3  of            4
<br>
---------------------------------------------
<br>
Thank you so much!!! You helped me a lot! Finally :) And plus I know the
<br>
difference between OpenMP and Open MPI (well, to be honest not completely,
<br>
but more than i knew before). :D
<br>
<p>Thanks,
<br>
<p>Djordje
<br>
<p><p><p><p>On Tue, Apr 15, 2014 at 11:57 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;locate mpirun&quot; shows items labled &quot;intel&quot;, &quot;mpich&quot;, and &quot;openmpi&quot;, maybe
</span><br>
<span class="quotelev1">&gt; more.
</span><br>
<span class="quotelev1">&gt; Is it Ubuntu or Debian?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, if you got this mess from somebody else,
</span><br>
<span class="quotelev1">&gt; instead of sorting it out,
</span><br>
<span class="quotelev1">&gt; it may save you time and headaches installing Open MPI from
</span><br>
<span class="quotelev1">&gt; source.
</span><br>
<span class="quotelev1">&gt; Since it is a single machine, there are no worries about
</span><br>
<span class="quotelev1">&gt; having an homogeneous installation for several computers (which
</span><br>
<span class="quotelev1">&gt; could be done if needed, though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0. Make sure you have gcc, g++, and gfortran installed,
</span><br>
<span class="quotelev1">&gt; including any &quot;devel&quot; packages that may exist.
</span><br>
<span class="quotelev1">&gt; [apt-get or yum should tell you]
</span><br>
<span class="quotelev1">&gt; If something is missing, install it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Download the Open MPI (a.k.a OMPI) tarball to a work directory
</span><br>
<span class="quotelev1">&gt; of your choice,
</span><br>
<span class="quotelev1">&gt; say /home/djordje/inst/openmpi/1.8 (create the directory if needed),
</span><br>
<span class="quotelev1">&gt; and untar the tarball (tar -jxvf ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Configure it to be installed in yet another directory under
</span><br>
<span class="quotelev1">&gt; your home, say /home/djordje/sw/openmpi/1.8 (with --prefix).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd /home/djordje/inst/openmpi/1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/djordje/sw/openmpi/1.8 CC=gcc, CXX=g++,
</span><br>
<span class="quotelev1">&gt; FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Not sure if with 1.8 there is a separate F77 interface, if there is
</span><br>
<span class="quotelev1">&gt; add F77=gfortran to the configure command line above.
</span><br>
<span class="quotelev1">&gt; Also, I am using OMPI 1.6.5,
</span><br>
<span class="quotelev1">&gt; but my recollection is that Jeff would phase off mpif90 and mpif77 in
</span><br>
<span class="quotelev1">&gt; favor of a single mpifortran of sorts.  Please check the OMPI README file.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Setup your environment variables PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; to point to *this* Open MPI installation ahead of anything else.
</span><br>
<span class="quotelev1">&gt; This is easily done in your .bashrc or .tcshrc/.cshrc file,
</span><br>
<span class="quotelev1">&gt; depending on which shell you use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .bashrc :
</span><br>
<span class="quotelev1">&gt; export PATH=/home/djordje/sw/openmpi/1.8/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/djordje/sw/openmpi/1.8/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .tcshrc/.cshrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv PATH /home/djordje/sw/openmpi/1.8/bin:$PATH
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH /home/djordje/sw/openmpi/1.8/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Logout, login again (or open a new terminal), and check if you
</span><br>
<span class="quotelev1">&gt; get the right mpirun, etc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpicc
</span><br>
<span class="quotelev1">&gt; which mpif90
</span><br>
<span class="quotelev1">&gt; which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They should point to items in /home/djordje/sw/openmpi/1.8/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Rebuild WRF from scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. Check if WRF got the libraries right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should show mpi libraries in /home/djordje/sw/openmpi/1.8/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. Run WRF
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/14/2014 08:21 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for this guys. I think I might have two MPI implementations
</span><br>
<span class="quotelev2">&gt;&gt; installed because 'locate mpirun' gives (see bold lines) :
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; /etc/alternatives/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /etc/alternatives/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt; */home/djordje/Build_WRF/LIBRARIES/mpich/bin/mpirun*
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/4.
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.036/linux-x86_64/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://4.1.1.036/linux-x86_64/bin/mpirun">http://4.1.1.036/linux-x86_64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/4.
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.036/linux-x86_64/bin64/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://4.1.1.036/linux-x86_64/bin64/mpirun">http://4.1.1.036/linux-x86_64/bin64/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/4.
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.036/linux-x86_64/ia32/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://4.1.1.036/linux-x86_64/ia32/bin/mpirun">http://4.1.1.036/linux-x86_64/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/4.
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.036/linux-x86_64/intel64/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://4.1.1.036/linux-x86_64/intel64/bin/mpirun">http://4.1.1.036/linux-x86_64/intel64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3/linux-x86_64-2.3.4/gnu4.5/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3/linux-x86_64-2.3.4/gnu4.5/share/man/man1/mpirun.1
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.4/linux-x86_64-2.3.4/gnu4.6/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.4/linux-x86_64-2.3.4/gnu4.6/share/man/man1/mpirun.1
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; */usr/bin/mpirun*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpirun.openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/include/openmpi/ompi/runtime/mpiruntime.h
</span><br>
<span class="quotelev2">&gt;&gt; /usr/share/man/man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt; /usr/share/man/man1/mpirun.openmpi.1.gz
</span><br>
<span class="quotelev2">&gt;&gt; /var/lib/dpkg/alternatives/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This is a single machine. I actually just got it... another user used it
</span><br>
<span class="quotelev2">&gt;&gt; for 1-2 years.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a possible cause of the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 7:06 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Apologies for stirring even more the confusion by mispelling
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Open MPI&quot; as &quot;OpenMPI&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;OMPI&quot; doesn't help either, because all OpenMP environment
</span><br>
<span class="quotelev2">&gt;&gt;     variables and directives start with &quot;OMP&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;     Maybe associating the names to
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;message passing&quot; vs. &quot;threads&quot; would help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Djordje:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     'which mpif90' etc show everything in /usr/bin.
</span><br>
<span class="quotelev2">&gt;&gt;     So, very likely they were installed from packages
</span><br>
<span class="quotelev2">&gt;&gt;     (yum, apt-get, rpm ...),right?
</span><br>
<span class="quotelev2">&gt;&gt;     Have you tried something like
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;yum list |grep mpi&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     to see what you have?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     As Dave, Jeff and Tom said, this may be a mixup of different
</span><br>
<span class="quotelev2">&gt;&gt;     MPI implementations at compilation (mpicc mpif90) and runtime
</span><br>
<span class="quotelev2">&gt;&gt; (mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;     That is common, you may have different MPI implementations installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Other possibilities that may tell what MPI you have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt;     mpif90 --show
</span><br>
<span class="quotelev2">&gt;&gt;     mpicc --show
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yet another:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     locate mpirun
</span><br>
<span class="quotelev2">&gt;&gt;     locate mpif90
</span><br>
<span class="quotelev2">&gt;&gt;     locate mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The ldd didn't show any MPI libraries, maybe they are static
</span><br>
<span class="quotelev2">&gt;&gt; libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     An alternative is to install Open MPI from source,
</span><br>
<span class="quotelev2">&gt;&gt;     and put it in a non-system directory
</span><br>
<span class="quotelev2">&gt;&gt;     (not /usr/bin, not /usr/local/bin, etc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is this a single machine or a cluster?
</span><br>
<span class="quotelev2">&gt;&gt;     Or perhaps a set of PCs that you have access to?
</span><br>
<span class="quotelev2">&gt;&gt;     If it is a cluster, do you have access to a filesystem that is
</span><br>
<span class="quotelev2">&gt;&gt;     shared across the cluster?
</span><br>
<span class="quotelev2">&gt;&gt;     On clusters typically /home is shared, often via NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 04/14/2014 05:15 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Maybe we should rename OpenMP to be something less confusing --
</span><br>
<span class="quotelev2">&gt;&gt;         perhaps something totally unrelated, perhaps even non-sensical.
</span><br>
<span class="quotelev2">&gt;&gt;         That'll end lots of confusion!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         My vote: OpenMP --&gt; SharkBook
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It's got a ring to it, doesn't it?  And it sounds fearsome!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Apr 14, 2014, at 5:04 PM, &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:tom.elken_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             That&#226;&#128;&#153;s OK.  Many of us make that mistake, though often as a
</span><br>
<span class="quotelev2">&gt;&gt;             typo.
</span><br>
<span class="quotelev2">&gt;&gt;             One thing that helps is that the correct spelling of Open
</span><br>
<span class="quotelev2">&gt;&gt;             MPI has a space in it,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     but OpenMP does not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             If not aware what OpenMP is, here is a link:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             What makes it more confusing is that more and more apps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     offer the option of running in a hybrid mode, such as WRF,
</span><br>
<span class="quotelev2">&gt;&gt;     with OpenMP threads running over MPI ranks with the same executable.
</span><br>
<span class="quotelev2">&gt;&gt;     And sometimes that MPI is Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;             -Tom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             From: users [mailto:users-bounces_at_open-__mpi.org
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Djordje
</span><br>
<span class="quotelev2">&gt;&gt;             Romanic
</span><br>
<span class="quotelev2">&gt;&gt;             Sent: Monday, April 14, 2014 1:28 PM
</span><br>
<span class="quotelev2">&gt;&gt;             To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;             Subject: Re: [OMPI users] mpirun runs in serial even I set
</span><br>
<span class="quotelev2">&gt;&gt;             np to several processors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             OK guys... Thanks for all this info. Frankly, I didn't know
</span><br>
<span class="quotelev2">&gt;&gt;             these diferences between OpenMP and OpenMPI. The commands:
</span><br>
<span class="quotelev2">&gt;&gt;             which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;             which mpif90
</span><br>
<span class="quotelev2">&gt;&gt;             which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;             give,
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;             respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             A tutorial on how to compile WRF
</span><br>
<span class="quotelev2">&gt;&gt;             (<a href="http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation</a>___
</span><br>
<span class="quotelev2">&gt;&gt; tutorial.php
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation</a>_
</span><br>
<span class="quotelev2">&gt;&gt; tutorial.php&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             provides a test program to test MPI. I ran the program and
</span><br>
<span class="quotelev2">&gt;&gt;             it gave me the output of successful run, which is:
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             C function called by Fortran
</span><br>
<span class="quotelev2">&gt;&gt;             Values are xx = 2.00 and ii = 1
</span><br>
<span class="quotelev2">&gt;&gt;             status = 2
</span><br>
<span class="quotelev2">&gt;&gt;             SUCCESS test 2 fortran + c + netcdf + mpi
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             It uses mpif90 and mpicc for compiling. Below is the output
</span><br>
<span class="quotelev2">&gt;&gt;             of 'ldd ./wrf.exe':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libpthread.so.0 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /lib/x86_64-linux-gnu/__libpthread.so.0 (0x00007f4d160ab000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libgfortran.so.3 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/lib/x86_64-linux-gnu/__libgfortran.so.3
</span><br>
<span class="quotelev2">&gt;&gt;             (0x00007f4d15d94000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.__6
</span><br>
<span class="quotelev2">&gt;&gt;             (0x00007f4d15a97000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc___s.so.1
</span><br>
<span class="quotelev2">&gt;&gt;             (0x00007f4d15881000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.__6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             (0x00007f4d154c1000)
</span><br>
<span class="quotelev2">&gt;&gt;                   /lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
</span><br>
<span class="quotelev2">&gt;&gt;                   libquadmath.so.0 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /usr/lib/x86_64-linux-gnu/__libquadmath.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             (0x00007f4d1528a000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Your WRF configure file seems to use mpif90 and mpicc (line
</span><br>
<span class="quotelev2">&gt;&gt;             115 &amp; following).
</span><br>
<span class="quotelev2">&gt;&gt;             In addition, it also seems to have DISABLED OpenMP (NO
</span><br>
<span class="quotelev2">&gt;&gt;             TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;             (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev2">&gt;&gt;             So, it looks like to me your intent was to compile with MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH,
</span><br>
<span class="quotelev2">&gt;&gt;             or MVAPICH,
</span><br>
<span class="quotelev2">&gt;&gt;             or Intel MPI, or Cray, or ...) only your environment can tell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             What do you get from these commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;             which mpif90
</span><br>
<span class="quotelev2">&gt;&gt;             which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I never built WRF here (but other people here use it).
</span><br>
<span class="quotelev2">&gt;&gt;             Which input do you provide to the command that generates the
</span><br>
<span class="quotelev2">&gt;&gt;             configure
</span><br>
<span class="quotelev2">&gt;&gt;             script that you sent before?
</span><br>
<span class="quotelev2">&gt;&gt;             Maybe the full command line will shed some light on the
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;             Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 04/14/2014 03:11 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             to get help :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                   &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       If you didn't use Open MPI, then this is the wrong
</span><br>
<span class="quotelev2">&gt;&gt;             mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                       for you.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       On Apr 14, 2014, at 2:58 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;             (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                       &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; This can also happen when you compile your
</span><br>
<span class="quotelev2">&gt;&gt;             application with
</span><br>
<span class="quotelev2">&gt;&gt;                       one MPI implementation (e.g., Open MPI), but then
</span><br>
<span class="quotelev2">&gt;&gt;             mistakenly use
</span><br>
<span class="quotelev2">&gt;&gt;                       the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI
</span><br>
<span class="quotelev2">&gt;&gt;             implementation
</span><br>
<span class="quotelev2">&gt;&gt;                       (e.g., MPICH).
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                       &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; I compiled it with: x86_64 Linux, gfortran
</span><br>
<span class="quotelev2">&gt;&gt;             compiler with
</span><br>
<span class="quotelev2">&gt;&gt;                       gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; Attached is the self-generated configuration
</span><br>
<span class="quotelev2">&gt;&gt;             file. The
</span><br>
<span class="quotelev2">&gt;&gt;                       architecture specification settings start at line
</span><br>
<span class="quotelev2">&gt;&gt;             107. I didn't
</span><br>
<span class="quotelev2">&gt;&gt;                       use Open MPI (shared memory option).
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell
</span><br>
<span class="quotelev2">&gt;&gt;             (dgoodell)
</span><br>
<span class="quotelev2">&gt;&gt;                       &lt;dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                       &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt; When I start wrf with mpirun -np 4
</span><br>
<span class="quotelev2">&gt;&gt;             ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__-------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                 1
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                 1
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                 1
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                 1
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__-------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt; This indicates that it is not using 4
</span><br>
<span class="quotelev2">&gt;&gt;             processors, but 1.
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;                        &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; It could be that you compiled WRF with a
</span><br>
<span class="quotelev2">&gt;&gt;             different MPI
</span><br>
<span class="quotelev2">&gt;&gt;                       implementation than you are using to run it (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;             MPICH vs.
</span><br>
<span class="quotelev2">&gt;&gt;                       Open MPI).
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; -Dave
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;configure.wrf&gt;_____________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ______
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                        &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                        &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       --
</span><br>
<span class="quotelev2">&gt;&gt;                       Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;             jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24204.php">Oscar Mojica: "[OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
