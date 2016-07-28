<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 15:34:06 2014" -->
<!-- isoreceived="20140415193406" -->
<!-- sent="Tue, 15 Apr 2014 15:34:05 -0400" -->
<!-- isosent="20140415193405" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="534D89AD.3010804_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CACWmqDf=db0=azS3jBp7wK0mYGi-bw=-8hBaK=fYuzZWGWKe-A_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 15:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Djordje
<br>
<p>That is great news.
<br>
Congrats for making it work!
<br>
<p>Just out of curiosity: What did the trick?
<br>
Did you install Open MPI from source, or did you sort out
<br>
the various MPI flavors which were previously installed on your system?
<br>
<p>Now the challenge is to add OpenMP and run WRF
<br>
in hybrid mode just for fun!  :)
<br>
<p>Best,
<br>
Gus Correa
<br>
<p>***
<br>
<p>PS: Parallel computing, MPI, and OpenMP, tutorials at LLNL:
<br>
<p><a href="https://computing.llnl.gov/tutorials/parallel_comp/">https://computing.llnl.gov/tutorials/parallel_comp/</a>
<br>
<a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
<br>
<a href="https://computing.llnl.gov/tutorials/openMP/">https://computing.llnl.gov/tutorials/openMP/</a>
<br>
<p>Ch. 5 in the first tutorial gives an outline of the various
<br>
parallel programming models, and the basic ideas behind MPI and OpenMP.
<br>
<p>**
<br>
<p>Wild guesses based on other models (climate, not weather):
<br>
<p>Most likely WRF uses the domain decomposition technique to solve
<br>
the dynamics' PDEs, exchanging sub-domain boundary data via MPI.
<br>
[Besides the dynamics, each process will also
<br>
compute thermodynamics, radiation effects, etc,
<br>
which may also require data exchange with neighbors.]
<br>
Each MPI process takes care of/computes on a subdomain,
<br>
and exchanges boundary data with those processes assigned
<br>
to neighbor subdomains, with the whole group contributing to
<br>
solve the PDEs in the global domain.
<br>
[This uses MPI point-to-point functions like MPI_Send/MPI_Recv.]
<br>
There may be some additional global calculations also, say,
<br>
to ensure conservation of mass, energy, momentum, etc,
<br>
which may involve all MPI processes.
<br>
[This may use MPI collective functions like MPI_Reduce.]
<br>
<p><a href="http://en.wikipedia.org/wiki/Domain_decomposition_methods">http://en.wikipedia.org/wiki/Domain_decomposition_methods</a>
<br>
<p>Besides, WRF  probably can split computation on
<br>
loops across different threads via OpenMP.
<br>
[Well, there is more to OpenMP than just loop splitting,
<br>
but loop splitting is the most common.]
<br>
You need to provide physical processors for those threads,
<br>
which is typically done by setting the environment variable 
<br>
OMP_NUM_THREADS (e.g. in bash: 'export OMP_NUM_THREADS=4').
<br>
<p>In hybrid (MPI + OpenMP mode) you use both, but must be careful
<br>
to provide enough processors for all MPI processes and OpenMP threads.
<br>
Say, for 3 MPI processes, each one launching two OpenMP threads,
<br>
you could do (if you turned both on when you configured WRF):
<br>
<p>export OMP_NUM_THREADS=2
<br>
mpirun -np 3 ./wrf.exe
<br>
<p>for a total of 6 processors.
<br>
<p>Better not oversubscribe processors.
<br>
If your computer has 4 cores, use -np 2 instead of 3 in the lines above.
<br>
<p>For a small number of processors (and/or a small global domain), you 
<br>
will probably get better performance if you assign
<br>
all processors to MPI processes, and simply do not use OpenMP.
<br>
<p>Finally, if you do:
<br>
export OMP_NUM_THREADS=1
<br>
mpiexec -np 4 ./wrf.exe
<br>
WRF will run in MPI mode, even if you configured it hybrid.
<br>
[At least this is what it is supposed to do.]
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 04/15/2014 01:59 PM, Djordje Romanic wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is working now. It shows:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; starting wrf task            0  of            4
</span><br>
<span class="quotelev1">&gt;   starting wrf task            1  of            4
</span><br>
<span class="quotelev1">&gt;   starting wrf task            2  of            4
</span><br>
<span class="quotelev1">&gt;   starting wrf task            3  of            4
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; Thank you so much!!! You helped me a lot! Finally :) And plus I know the
</span><br>
<span class="quotelev1">&gt; difference between OpenMP and Open MPI (well, to be honest not
</span><br>
<span class="quotelev1">&gt; completely, but more than i knew before). :D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 15, 2014 at 11:57 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &quot;locate mpirun&quot; shows items labled &quot;intel&quot;, &quot;mpich&quot;, and &quot;openmpi&quot;,
</span><br>
<span class="quotelev1">&gt;     maybe more.
</span><br>
<span class="quotelev1">&gt;     Is it Ubuntu or Debian?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Anyway, if you got this mess from somebody else,
</span><br>
<span class="quotelev1">&gt;     instead of sorting it out,
</span><br>
<span class="quotelev1">&gt;     it may save you time and headaches installing Open MPI from
</span><br>
<span class="quotelev1">&gt;     source.
</span><br>
<span class="quotelev1">&gt;     Since it is a single machine, there are no worries about
</span><br>
<span class="quotelev1">&gt;     having an homogeneous installation for several computers (which
</span><br>
<span class="quotelev1">&gt;     could be done if needed, though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     0. Make sure you have gcc, g++, and gfortran installed,
</span><br>
<span class="quotelev1">&gt;     including any &quot;devel&quot; packages that may exist.
</span><br>
<span class="quotelev1">&gt;     [apt-get or yum should tell you]
</span><br>
<span class="quotelev1">&gt;     If something is missing, install it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. Download the Open MPI (a.k.a OMPI) tarball to a work directory
</span><br>
<span class="quotelev1">&gt;     of your choice,
</span><br>
<span class="quotelev1">&gt;     say /home/djordje/inst/openmpi/1.8 (create the directory if needed),
</span><br>
<span class="quotelev1">&gt;     and untar the tarball (tar -jxvf ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__software/ompi/v1.8/">http://www.open-mpi.org/__software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2. Configure it to be installed in yet another directory under
</span><br>
<span class="quotelev1">&gt;     your home, say /home/djordje/sw/openmpi/1.8 (with --prefix).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cd /home/djordje/inst/openmpi/1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/home/djordje/sw/__openmpi/1.8 CC=gcc, CXX=g++,
</span><br>
<span class="quotelev1">&gt;     FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [Not sure if with 1.8 there is a separate F77 interface, if there is
</span><br>
<span class="quotelev1">&gt;     add F77=gfortran to the configure command line above.
</span><br>
<span class="quotelev1">&gt;     Also, I am using OMPI 1.6.5,
</span><br>
<span class="quotelev1">&gt;     but my recollection is that Jeff would phase off mpif90 and mpif77 in
</span><br>
<span class="quotelev1">&gt;     favor of a single mpifortran of sorts.  Please check the OMPI README
</span><br>
<span class="quotelev1">&gt;     file.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Then do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make
</span><br>
<span class="quotelev1">&gt;     make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3. Setup your environment variables PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;     to point to *this* Open MPI installation ahead of anything else.
</span><br>
<span class="quotelev1">&gt;     This is easily done in your .bashrc or .tcshrc/.cshrc file,
</span><br>
<span class="quotelev1">&gt;     depending on which shell you use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     .bashrc :
</span><br>
<span class="quotelev1">&gt;     export PATH=/home/djordje/sw/openmpi/__1.8/bin:$PATH
</span><br>
<span class="quotelev1">&gt;     export
</span><br>
<span class="quotelev1">&gt;     LD_LIBRARY_PATH=/home/djordje/__sw/openmpi/1.8/lib:$LD___LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     .tcshrc/.cshrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     setenv PATH /home/djordje/sw/openmpi/1.8/__bin:$PATH
</span><br>
<span class="quotelev1">&gt;     setenv LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;     /home/djordje/sw/openmpi/1.8/__lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4. Logout, login again (or open a new terminal), and check if you
</span><br>
<span class="quotelev1">&gt;     get the right mpirun, etc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     which mpicc
</span><br>
<span class="quotelev1">&gt;     which mpif90
</span><br>
<span class="quotelev1">&gt;     which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     They should point to items in /home/djordje/sw/openmpi/1.8/__bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     5. Rebuild WRF from scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     6. Check if WRF got the libraries right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ldd wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This should show mpi libraries in /home/djordje/sw/openmpi/1.8/__lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     7. Run WRF
</span><br>
<span class="quotelev1">&gt;     mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 04/14/2014 08:21 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks for this guys. I think I might have two MPI implementations
</span><br>
<span class="quotelev1">&gt;         installed because 'locate mpirun' gives (see bold lines) :
</span><br>
<span class="quotelev1">&gt;         ------------------------------__-----------
</span><br>
<span class="quotelev1">&gt;         /etc/alternatives/mpirun
</span><br>
<span class="quotelev1">&gt;         /etc/alternatives/mpirun.1.gz
</span><br>
<span class="quotelev1">&gt;         */home/djordje/Build_WRF/__LIBRARIES/mpich/bin/mpirun*
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/4.__1.1.036/linux-x86_64/bin/__mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin/mpirun">http://4.1.1.036/linux-x86_64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/bin/mpirun">http://4.1.1.036/linux-x86___64/bin/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin/mpirun">http://4.1.1.036/linux-x86_64/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/4.__1.1.036/linux-x86_64/bin64/__mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin64/mpirun">http://4.1.1.036/linux-x86_64/bin64/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/bin64/mpirun">http://4.1.1.036/linux-x86___64/bin64/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin64/mpirun">http://4.1.1.036/linux-x86_64/bin64/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/4.__1.1.036/linux-x86_64/ia32/bin/__mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/ia32/bin/mpirun">http://4.1.1.036/linux-x86_64/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/ia32/bin/mpirun">http://4.1.1.036/linux-x86___64/ia32/bin/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/ia32/bin/mpirun">http://4.1.1.036/linux-x86_64/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/4.__1.1.036/linux-x86_64/intel64/__bin/mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/intel64/bin/mpirun">http://4.1.1.036/linux-x86_64/intel64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/intel64/bin/mpirun">http://4.1.1.036/linux-x86___64/intel64/bin/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/intel64/bin/mpirun">http://4.1.1.036/linux-x86_64/intel64/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/openmpi/__1.4.3/linux-x86_64-2.3.4/gnu4.__5/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/openmpi/__1.4.3/linux-x86_64-2.3.4/gnu4.__5/share/man/man1/mpirun.1
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/openmpi/__1.6.4/linux-x86_64-2.3.4/gnu4.__6/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/openmpi/__1.6.4/linux-x86_64-2.3.4/gnu4.__6/share/man/man1/mpirun.1
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2</a> &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2</a> &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         */usr/bin/mpirun*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /usr/bin/mpirun.openmpi
</span><br>
<span class="quotelev1">&gt;         /usr/lib/openmpi/include/__openmpi/ompi/runtime/__mpiruntime.h
</span><br>
<span class="quotelev1">&gt;         /usr/share/man/man1/mpirun.1.__gz
</span><br>
<span class="quotelev1">&gt;         /usr/share/man/man1/mpirun.__openmpi.1.gz
</span><br>
<span class="quotelev1">&gt;         /var/lib/dpkg/alternatives/__mpirun
</span><br>
<span class="quotelev1">&gt;         ------------------------------__-----------
</span><br>
<span class="quotelev1">&gt;         This is a single machine. I actually just got it... another user
</span><br>
<span class="quotelev1">&gt;         used it
</span><br>
<span class="quotelev1">&gt;         for 1-2 years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Is this a possible cause of the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Mon, Apr 14, 2014 at 7:06 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;         &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;__&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Apologies for stirring even more the confusion by mispelling
</span><br>
<span class="quotelev1">&gt;              &quot;Open MPI&quot; as &quot;OpenMPI&quot;.
</span><br>
<span class="quotelev1">&gt;              &quot;OMPI&quot; doesn't help either, because all OpenMP environment
</span><br>
<span class="quotelev1">&gt;              variables and directives start with &quot;OMP&quot;.
</span><br>
<span class="quotelev1">&gt;              Maybe associating the names to
</span><br>
<span class="quotelev1">&gt;              &quot;message passing&quot; vs. &quot;threads&quot; would help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Djordje:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              'which mpif90' etc show everything in /usr/bin.
</span><br>
<span class="quotelev1">&gt;              So, very likely they were installed from packages
</span><br>
<span class="quotelev1">&gt;              (yum, apt-get, rpm ...),right?
</span><br>
<span class="quotelev1">&gt;              Have you tried something like
</span><br>
<span class="quotelev1">&gt;              &quot;yum list |grep mpi&quot;
</span><br>
<span class="quotelev1">&gt;              to see what you have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              As Dave, Jeff and Tom said, this may be a mixup of different
</span><br>
<span class="quotelev1">&gt;              MPI implementations at compilation (mpicc mpif90) and
</span><br>
<span class="quotelev1">&gt;         runtime (mpirun).
</span><br>
<span class="quotelev1">&gt;              That is common, you may have different MPI implementations
</span><br>
<span class="quotelev1">&gt;         installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Other possibilities that may tell what MPI you have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              mpirun --version
</span><br>
<span class="quotelev1">&gt;              mpif90 --show
</span><br>
<span class="quotelev1">&gt;              mpicc --show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Yet another:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              locate mpirun
</span><br>
<span class="quotelev1">&gt;              locate mpif90
</span><br>
<span class="quotelev1">&gt;              locate mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              The ldd didn't show any MPI libraries, maybe they are
</span><br>
<span class="quotelev1">&gt;         static libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              An alternative is to install Open MPI from source,
</span><br>
<span class="quotelev1">&gt;              and put it in a non-system directory
</span><br>
<span class="quotelev1">&gt;              (not /usr/bin, not /usr/local/bin, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Is this a single machine or a cluster?
</span><br>
<span class="quotelev1">&gt;              Or perhaps a set of PCs that you have access to?
</span><br>
<span class="quotelev1">&gt;              If it is a cluster, do you have access to a filesystem that is
</span><br>
<span class="quotelev1">&gt;              shared across the cluster?
</span><br>
<span class="quotelev1">&gt;              On clusters typically /home is shared, often via NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              On 04/14/2014 05:15 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Maybe we should rename OpenMP to be something less
</span><br>
<span class="quotelev1">&gt;         confusing --
</span><br>
<span class="quotelev1">&gt;                  perhaps something totally unrelated, perhaps even
</span><br>
<span class="quotelev1">&gt;         non-sensical.
</span><br>
<span class="quotelev1">&gt;                  That'll end lots of confusion!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  My vote: OpenMP --&gt; SharkBook
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  It's got a ring to it, doesn't it?  And it sounds fearsome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  On Apr 14, 2014, at 5:04 PM, &quot;Elken, Tom&quot;
</span><br>
<span class="quotelev1">&gt;         &lt;tom.elken_at_[hidden] &lt;mailto:tom.elken_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                  &lt;mailto:tom.elken_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:tom.elken_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      That&#146;s OK.  Many of us make that mistake, though
</span><br>
<span class="quotelev1">&gt;         often as a
</span><br>
<span class="quotelev1">&gt;                      typo.
</span><br>
<span class="quotelev1">&gt;                      One thing that helps is that the correct spelling
</span><br>
<span class="quotelev1">&gt;         of Open
</span><br>
<span class="quotelev1">&gt;                      MPI has a space in it,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              but OpenMP does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      If not aware what OpenMP is, here is a link:
</span><br>
<span class="quotelev1">&gt;         <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      What makes it more confusing is that more and more
</span><br>
<span class="quotelev1">&gt;         apps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              offer the option of running in a hybrid mode, such as WRF,
</span><br>
<span class="quotelev1">&gt;              with OpenMP threads running over MPI ranks with the same
</span><br>
<span class="quotelev1">&gt;         executable.
</span><br>
<span class="quotelev1">&gt;              And sometimes that MPI is Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Cheers,
</span><br>
<span class="quotelev1">&gt;                      -Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      From: users [mailto:users-bounces_at_open-____mpi.org
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users-bounces_at_open-__mpi.org&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:users-bounces_at_open-__mpi.org
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf Of Djordje
</span><br>
<span class="quotelev1">&gt;                      Romanic
</span><br>
<span class="quotelev1">&gt;                      Sent: Monday, April 14, 2014 1:28 PM
</span><br>
<span class="quotelev1">&gt;                      To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;                      Subject: Re: [OMPI users] mpirun runs in serial
</span><br>
<span class="quotelev1">&gt;         even I set
</span><br>
<span class="quotelev1">&gt;                      np to several processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      OK guys... Thanks for all this info. Frankly, I
</span><br>
<span class="quotelev1">&gt;         didn't know
</span><br>
<span class="quotelev1">&gt;                      these diferences between OpenMP and OpenMPI. The
</span><br>
<span class="quotelev1">&gt;         commands:
</span><br>
<span class="quotelev1">&gt;                      which mpirun
</span><br>
<span class="quotelev1">&gt;                      which mpif90
</span><br>
<span class="quotelev1">&gt;                      which mpicc
</span><br>
<span class="quotelev1">&gt;                      give,
</span><br>
<span class="quotelev1">&gt;                      /usr/bin/mpirun
</span><br>
<span class="quotelev1">&gt;                      /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt;                      /usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt;                      respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      A tutorial on how to compile WRF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (<a href="http://www.mmm.ucar.edu/wrf/____OnLineTutorial/compilation_____tutorial.php">http://www.mmm.ucar.edu/wrf/____OnLineTutorial/compilation_____tutorial.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation___tutorial.php">http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation___tutorial.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation___tutorial.php">http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation___tutorial.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php</a>&gt;&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      provides a test program to test MPI. I ran the
</span><br>
<span class="quotelev1">&gt;         program and
</span><br>
<span class="quotelev1">&gt;                      it gave me the output of successful run, which is:
</span><br>
<span class="quotelev1">&gt;                      ------------------------------____---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      C function called by Fortran
</span><br>
<span class="quotelev1">&gt;                      Values are xx = 2.00 and ii = 1
</span><br>
<span class="quotelev1">&gt;                      status = 2
</span><br>
<span class="quotelev1">&gt;                      SUCCESS test 2 fortran + c + netcdf + mpi
</span><br>
<span class="quotelev1">&gt;                      ------------------------------____---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      It uses mpif90 and mpicc for compiling. Below is
</span><br>
<span class="quotelev1">&gt;         the output
</span><br>
<span class="quotelev1">&gt;                      of 'ldd ./wrf.exe':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                            linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
</span><br>
<span class="quotelev1">&gt;                            libpthread.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt;                      /lib/x86_64-linux-gnu/____libpthread.so.0
</span><br>
<span class="quotelev1">&gt;         (0x00007f4d160ab000)
</span><br>
<span class="quotelev1">&gt;                            libgfortran.so.3 =&gt;
</span><br>
<span class="quotelev1">&gt;                      /usr/lib/x86_64-linux-gnu/____libgfortran.so.3
</span><br>
<span class="quotelev1">&gt;                      (0x00007f4d15d94000)
</span><br>
<span class="quotelev1">&gt;                            libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.____6
</span><br>
<span class="quotelev1">&gt;                      (0x00007f4d15a97000)
</span><br>
<span class="quotelev1">&gt;                            libgcc_s.so.1 =&gt;
</span><br>
<span class="quotelev1">&gt;         /lib/x86_64-linux-gnu/libgcc_____s.so.1
</span><br>
<span class="quotelev1">&gt;                      (0x00007f4d15881000)
</span><br>
<span class="quotelev1">&gt;                            libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.____6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      (0x00007f4d154c1000)
</span><br>
<span class="quotelev1">&gt;                            /lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
</span><br>
<span class="quotelev1">&gt;                            libquadmath.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt;                      /usr/lib/x86_64-linux-gnu/____libquadmath.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      (0x00007f4d1528a000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;                      &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;__&gt; wrote:
</span><br>
<span class="quotelev1">&gt;                      Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Your WRF configure file seems to use mpif90 and
</span><br>
<span class="quotelev1">&gt;         mpicc (line
</span><br>
<span class="quotelev1">&gt;                      115 &amp; following).
</span><br>
<span class="quotelev1">&gt;                      In addition, it also seems to have DISABLED OpenMP (NO
</span><br>
<span class="quotelev1">&gt;                      TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev1">&gt;                      (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev1">&gt;                      So, it looks like to me your intent was to compile
</span><br>
<span class="quotelev1">&gt;         with MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Whether it is THIS MPI (OpenMPI) or another MPI
</span><br>
<span class="quotelev1">&gt;         (say MPICH,
</span><br>
<span class="quotelev1">&gt;                      or MVAPICH,
</span><br>
<span class="quotelev1">&gt;                      or Intel MPI, or Cray, or ...) only your
</span><br>
<span class="quotelev1">&gt;         environment can tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      What do you get from these commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      which mpirun
</span><br>
<span class="quotelev1">&gt;                      which mpif90
</span><br>
<span class="quotelev1">&gt;                      which mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      I never built WRF here (but other people here use it).
</span><br>
<span class="quotelev1">&gt;                      Which input do you provide to the command that
</span><br>
<span class="quotelev1">&gt;         generates the
</span><br>
<span class="quotelev1">&gt;                      configure
</span><br>
<span class="quotelev1">&gt;                      script that you sent before?
</span><br>
<span class="quotelev1">&gt;                      Maybe the full command line will shed some light on
</span><br>
<span class="quotelev1">&gt;         the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      I hope this helps,
</span><br>
<span class="quotelev1">&gt;                      Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      On 04/14/2014 03:11 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev1">&gt;                      to get help :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic
</span><br>
<span class="quotelev1">&gt;                      &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                            Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                            On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         (jsquyres)
</span><br>
<span class="quotelev1">&gt;                            &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                If you didn't use Open MPI, then this is
</span><br>
<span class="quotelev1">&gt;         the wrong
</span><br>
<span class="quotelev1">&gt;                      mailing list
</span><br>
<span class="quotelev1">&gt;                                for you.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                (this is the Open MPI users' support
</span><br>
<span class="quotelev1">&gt;         mailing list)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                On Apr 14, 2014, at 2:58 PM, Djordje Romanic
</span><br>
<span class="quotelev1">&gt;                      &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                                &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev2">&gt;                                 &gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff
</span><br>
<span class="quotelev1">&gt;         Squyres
</span><br>
<span class="quotelev1">&gt;                      (jsquyres)
</span><br>
<span class="quotelev1">&gt;                                &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;                                 &gt; This can also happen when you compile your
</span><br>
<span class="quotelev1">&gt;                      application with
</span><br>
<span class="quotelev1">&gt;                                one MPI implementation (e.g., Open MPI),
</span><br>
<span class="quotelev1">&gt;         but then
</span><br>
<span class="quotelev1">&gt;                      mistakenly use
</span><br>
<span class="quotelev1">&gt;                                the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a
</span><br>
<span class="quotelev1">&gt;         different MPI
</span><br>
<span class="quotelev1">&gt;                      implementation
</span><br>
<span class="quotelev1">&gt;                                (e.g., MPICH).
</span><br>
<span class="quotelev2">&gt;                                 &gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt; On Apr 14, 2014, at 2:32 PM, Djordje
</span><br>
<span class="quotelev1">&gt;         Romanic
</span><br>
<span class="quotelev1">&gt;                                &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;                                 &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; I compiled it with: x86_64 Linux,
</span><br>
<span class="quotelev1">&gt;         gfortran
</span><br>
<span class="quotelev1">&gt;                      compiler with
</span><br>
<span class="quotelev1">&gt;                                gcc   (dmpar). dmpar - distributed memory
</span><br>
<span class="quotelev1">&gt;         option.
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; Attached is the self-generated
</span><br>
<span class="quotelev1">&gt;         configuration
</span><br>
<span class="quotelev1">&gt;                      file. The
</span><br>
<span class="quotelev1">&gt;                                architecture specification settings start
</span><br>
<span class="quotelev1">&gt;         at line
</span><br>
<span class="quotelev1">&gt;                      107. I didn't
</span><br>
<span class="quotelev1">&gt;                                use Open MPI (shared memory option).
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM,
</span><br>
<span class="quotelev1">&gt;         Dave Goodell
</span><br>
<span class="quotelev1">&gt;                      (dgoodell)
</span><br>
<span class="quotelev1">&gt;                                &lt;dgoodell_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dgoodell_at_[hidden]&gt; &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dgoodell_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dgoodell_at_[hidden]&gt; &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dgoodell_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; On Apr 14, 2014, at 12:15 PM,
</span><br>
<span class="quotelev1">&gt;         Djordje Romanic
</span><br>
<span class="quotelev1">&gt;                                &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt; When I start wrf with mpirun -np 4
</span><br>
<span class="quotelev1">&gt;                      ./wrf.exe, I get this:
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;                      ------------------------------____-------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;                      ------------------------------____-------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt; This indicates that it is not using 4
</span><br>
<span class="quotelev1">&gt;                      processors, but 1.
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;                                 &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; It could be that you compiled WRF with a
</span><br>
<span class="quotelev1">&gt;                      different MPI
</span><br>
<span class="quotelev1">&gt;                                implementation than you are using to run
</span><br>
<span class="quotelev1">&gt;         it (e.g.,
</span><br>
<span class="quotelev1">&gt;                      MPICH vs.
</span><br>
<span class="quotelev1">&gt;                                Open MPI).
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt; -Dave
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev3">&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev1">&gt;         ___________________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24207.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
