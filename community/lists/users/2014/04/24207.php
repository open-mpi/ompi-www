<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 16:09:34 2014" -->
<!-- isoreceived="20140415200934" -->
<!-- sent="Tue, 15 Apr 2014 16:09:12 -0400" -->
<!-- isosent="20140415200912" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDcGw=ekj-SiFPSzCFPegHmDsAvaCOSRGh2OyUJtPDzO6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534D89AD.3010804_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-04-15 16:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the instructions that you gave me I actually managed to setup the one
<br>
that was already installed. I followed commands that you sent me and I made
<br>
it work. It is an MPICH MPI. I feel somewhat bad not to installing Open
<br>
MPI, but I think I will in a couple of weeks. I have to finish some
<br>
simulation in WRF (so I wouldn't like to experiment now) and after that I
<br>
could play and install Open MPI.
<br>
<p>Thanks so much for this explanation about MPI and OpenMP. I am
<br>
meteorologist and I like to consider myself as a theoretical meteorologist
<br>
that with area of expertise in dynamic of the atmosphere and climatology.
<br>
Therefore, this high-level numerical computing is challenging for me. You
<br>
gave an excellent explanation of it and sites are really good (easy
<br>
readable, not some journal papers). I will spend the rest of day reading
<br>
this to get better understanding of it.
<br>
<p>By the way, I attended the WRF tutorial and they said that there are no
<br>
many WRF experiments on using MPI + OpenMP, but the one that they did show
<br>
that there is no much improvement in running WRF in that mode. Moreover,
<br>
many times, they said, it is more efficient to run it just using MPI. At
<br>
that point I didn't know what they were talking about, but now I actually
<br>
do.
<br>
<p><p>On Tue, Apr 15, 2014 at 3:34 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is great news.
</span><br>
<span class="quotelev1">&gt; Congrats for making it work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just out of curiosity: What did the trick?
</span><br>
<span class="quotelev1">&gt; Did you install Open MPI from source, or did you sort out
</span><br>
<span class="quotelev1">&gt; the various MPI flavors which were previously installed on your system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the challenge is to add OpenMP and run WRF
</span><br>
<span class="quotelev1">&gt; in hybrid mode just for fun!  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Parallel computing, MPI, and OpenMP, tutorials at LLNL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/parallel_comp/">https://computing.llnl.gov/tutorials/parallel_comp/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/openMP/">https://computing.llnl.gov/tutorials/openMP/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ch. 5 in the first tutorial gives an outline of the various
</span><br>
<span class="quotelev1">&gt; parallel programming models, and the basic ideas behind MPI and OpenMP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wild guesses based on other models (climate, not weather):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely WRF uses the domain decomposition technique to solve
</span><br>
<span class="quotelev1">&gt; the dynamics' PDEs, exchanging sub-domain boundary data via MPI.
</span><br>
<span class="quotelev1">&gt; [Besides the dynamics, each process will also
</span><br>
<span class="quotelev1">&gt; compute thermodynamics, radiation effects, etc,
</span><br>
<span class="quotelev1">&gt; which may also require data exchange with neighbors.]
</span><br>
<span class="quotelev1">&gt; Each MPI process takes care of/computes on a subdomain,
</span><br>
<span class="quotelev1">&gt; and exchanges boundary data with those processes assigned
</span><br>
<span class="quotelev1">&gt; to neighbor subdomains, with the whole group contributing to
</span><br>
<span class="quotelev1">&gt; solve the PDEs in the global domain.
</span><br>
<span class="quotelev1">&gt; [This uses MPI point-to-point functions like MPI_Send/MPI_Recv.]
</span><br>
<span class="quotelev1">&gt; There may be some additional global calculations also, say,
</span><br>
<span class="quotelev1">&gt; to ensure conservation of mass, energy, momentum, etc,
</span><br>
<span class="quotelev1">&gt; which may involve all MPI processes.
</span><br>
<span class="quotelev1">&gt; [This may use MPI collective functions like MPI_Reduce.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Domain_decomposition_methods">http://en.wikipedia.org/wiki/Domain_decomposition_methods</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides, WRF  probably can split computation on
</span><br>
<span class="quotelev1">&gt; loops across different threads via OpenMP.
</span><br>
<span class="quotelev1">&gt; [Well, there is more to OpenMP than just loop splitting,
</span><br>
<span class="quotelev1">&gt; but loop splitting is the most common.]
</span><br>
<span class="quotelev1">&gt; You need to provide physical processors for those threads,
</span><br>
<span class="quotelev1">&gt; which is typically done by setting the environment variable
</span><br>
<span class="quotelev1">&gt; OMP_NUM_THREADS (e.g. in bash: 'export OMP_NUM_THREADS=4').
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In hybrid (MPI + OpenMP mode) you use both, but must be careful
</span><br>
<span class="quotelev1">&gt; to provide enough processors for all MPI processes and OpenMP threads.
</span><br>
<span class="quotelev1">&gt; Say, for 3 MPI processes, each one launching two OpenMP threads,
</span><br>
<span class="quotelev1">&gt; you could do (if you turned both on when you configured WRF):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 ./wrf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for a total of 6 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Better not oversubscribe processors.
</span><br>
<span class="quotelev1">&gt; If your computer has 4 cores, use -np 2 instead of 3 in the lines above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a small number of processors (and/or a small global domain), you will
</span><br>
<span class="quotelev1">&gt; probably get better performance if you assign
</span><br>
<span class="quotelev1">&gt; all processors to MPI processes, and simply do not use OpenMP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, if you do:
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; mpiexec -np 4 ./wrf.exe
</span><br>
<span class="quotelev1">&gt; WRF will run in MPI mode, even if you configured it hybrid.
</span><br>
<span class="quotelev1">&gt; [At least this is what it is supposed to do.]
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
<span class="quotelev1">&gt; On 04/15/2014 01:59 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is working now. It shows:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; starting wrf task            0  of            4
</span><br>
<span class="quotelev2">&gt;&gt;   starting wrf task            1  of            4
</span><br>
<span class="quotelev2">&gt;&gt;   starting wrf task            2  of            4
</span><br>
<span class="quotelev2">&gt;&gt;   starting wrf task            3  of            4
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Thank you so much!!! You helped me a lot! Finally :) And plus I know the
</span><br>
<span class="quotelev2">&gt;&gt; difference between OpenMP and Open MPI (well, to be honest not
</span><br>
<span class="quotelev2">&gt;&gt; completely, but more than i knew before). :D
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 15, 2014 at 11:57 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;locate mpirun&quot; shows items labled &quot;intel&quot;, &quot;mpich&quot;, and &quot;openmpi&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     maybe more.
</span><br>
<span class="quotelev2">&gt;&gt;     Is it Ubuntu or Debian?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Anyway, if you got this mess from somebody else,
</span><br>
<span class="quotelev2">&gt;&gt;     instead of sorting it out,
</span><br>
<span class="quotelev2">&gt;&gt;     it may save you time and headaches installing Open MPI from
</span><br>
<span class="quotelev2">&gt;&gt;     source.
</span><br>
<span class="quotelev2">&gt;&gt;     Since it is a single machine, there are no worries about
</span><br>
<span class="quotelev2">&gt;&gt;     having an homogeneous installation for several computers (which
</span><br>
<span class="quotelev2">&gt;&gt;     could be done if needed, though).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     0. Make sure you have gcc, g++, and gfortran installed,
</span><br>
<span class="quotelev2">&gt;&gt;     including any &quot;devel&quot; packages that may exist.
</span><br>
<span class="quotelev2">&gt;&gt;     [apt-get or yum should tell you]
</span><br>
<span class="quotelev2">&gt;&gt;     If something is missing, install it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1. Download the Open MPI (a.k.a OMPI) tarball to a work directory
</span><br>
<span class="quotelev2">&gt;&gt;     of your choice,
</span><br>
<span class="quotelev2">&gt;&gt;     say /home/djordje/inst/openmpi/1.8 (create the directory if needed),
</span><br>
<span class="quotelev2">&gt;&gt;     and untar the tarball (tar -jxvf ...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__software/ompi/v1.8/">http://www.open-mpi.org/__software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2. Configure it to be installed in yet another directory under
</span><br>
<span class="quotelev2">&gt;&gt;     your home, say /home/djordje/sw/openmpi/1.8 (with --prefix).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     cd /home/djordje/inst/openmpi/1.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure --prefix=/home/djordje/sw/__openmpi/1.8 CC=gcc, CXX=g++,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [Not sure if with 1.8 there is a separate F77 interface, if there is
</span><br>
<span class="quotelev2">&gt;&gt;     add F77=gfortran to the configure command line above.
</span><br>
<span class="quotelev2">&gt;&gt;     Also, I am using OMPI 1.6.5,
</span><br>
<span class="quotelev2">&gt;&gt;     but my recollection is that Jeff would phase off mpif90 and mpif77 in
</span><br>
<span class="quotelev2">&gt;&gt;     favor of a single mpifortran of sorts.  Please check the OMPI README
</span><br>
<span class="quotelev2">&gt;&gt;     file.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Then do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     make
</span><br>
<span class="quotelev2">&gt;&gt;     make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     3. Setup your environment variables PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;     to point to *this* Open MPI installation ahead of anything else.
</span><br>
<span class="quotelev2">&gt;&gt;     This is easily done in your .bashrc or .tcshrc/.cshrc file,
</span><br>
<span class="quotelev2">&gt;&gt;     depending on which shell you use
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     .bashrc :
</span><br>
<span class="quotelev2">&gt;&gt;     export PATH=/home/djordje/sw/openmpi/__1.8/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;     export
</span><br>
<span class="quotelev2">&gt;&gt;     LD_LIBRARY_PATH=/home/djordje/__sw/openmpi/1.8/lib:$LD___LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     .tcshrc/.cshrc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     setenv PATH /home/djordje/sw/openmpi/1.8/__bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;     setenv LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;     /home/djordje/sw/openmpi/1.8/__lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     4. Logout, login again (or open a new terminal), and check if you
</span><br>
<span class="quotelev2">&gt;&gt;     get the right mpirun, etc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;     which mpif90
</span><br>
<span class="quotelev2">&gt;&gt;     which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     They should point to items in /home/djordje/sw/openmpi/1.8/__bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     5. Rebuild WRF from scratch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     6. Check if WRF got the libraries right:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ldd wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This should show mpi libraries in /home/djordje/sw/openmpi/1.8/__lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     7. Run WRF
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 4 wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 04/14/2014 08:21 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks for this guys. I think I might have two MPI implementations
</span><br>
<span class="quotelev2">&gt;&gt;         installed because 'locate mpirun' gives (see bold lines) :
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------__-----------
</span><br>
<span class="quotelev2">&gt;&gt;         /etc/alternatives/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         /etc/alternatives/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         */home/djordje/Build_WRF/__LIBRARIES/mpich/bin/mpirun*
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/
</span><br>
<span class="quotelev2">&gt;&gt; 4.__1.1.036/linux-x86_64/bin/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin/mpirun">http://4.1.1.036/linux-x86_64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/bin/mpirun">http://4.1.1.036/linux-x86___64/bin/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin/mpirun">http://4.1.1.036/linux-x86_64/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/
</span><br>
<span class="quotelev2">&gt;&gt; 4.__1.1.036/linux-x86_64/bin64/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin64/mpirun">http://4.1.1.036/linux-x86_64/bin64/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/bin64/mpirun">http://4.1.1.036/linux-x86___64/bin64/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/bin64/mpirun">http://4.1.1.036/linux-x86_64/bin64/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/
</span><br>
<span class="quotelev2">&gt;&gt; 4.__1.1.036/linux-x86_64/ia32/bin/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/ia32/bin/mpirun">http://4.1.1.036/linux-x86_64/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/ia32/bin/mpirun">http://4.1.1.036/linux-x86___64/ia32/bin/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/ia32/bin/mpirun">http://4.1.1.036/linux-x86_64/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/intel/
</span><br>
<span class="quotelev2">&gt;&gt; 4.__1.1.036/linux-x86_64/intel64/__bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/intel64/bin/mpirun">http://4.1.1.036/linux-x86_64/intel64/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86___64/intel64/bin/mpirun">http://4.1.1.036/linux-x86___64/intel64/bin/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://4.1.1.036/linux-x86_64/intel64/bin/mpirun">http://4.1.1.036/linux-x86_64/intel64/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/__1.4.3/linux-x86_64-2.3.4/gnu4.__5/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/__1.4.3/linux-x86_64-2.3.4/gnu4.__5/share/man/man1/mpirun.1
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/__1.6.4/linux-x86_64-2.3.4/gnu4.__6/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/__1.6.4/linux-x86_64-2.3.4/gnu4.__6/share/man/man1/mpirun.1
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2</a>&lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/</a>
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/</a>
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux</a>___
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/lib/linux</a>___
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/</a>
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/">http://8.2.0.0/linux64_2.6-__x86-glibc_2.3.4/share/man/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/">http://8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/</a>
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/bin/mpirun.__mpich2</a>&lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun</a>&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/__mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/</a>
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/bin/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/</a>
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.mpich2&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_amd64/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/__linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/ia32/lib/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/</a>
</span><br>
<span class="quotelev2">&gt;&gt; linux_ia32/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux</a>___
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; amd64/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux___ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/lib/linux</a>___
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux</a>_
</span><br>
<span class="quotelev2">&gt;&gt; ia32/libmpirun.so&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/djordje/StarCCM/Install/__STAR-CCM+8.06.007/mpi/__platform/
</span><br>
<span class="quotelev2">&gt;&gt; 8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/__man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/</a>
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/">http://8.3.0.2/linux64_2.6-__x86-glibc_2.3.4/share/man/</a>__
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/">http://8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/</a>
</span><br>
<span class="quotelev2">&gt;&gt; man1/mpirun.1.gz&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         */usr/bin/mpirun*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/bin/mpirun.openmpi
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib/openmpi/include/__openmpi/ompi/runtime/__mpiruntime.h
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/share/man/man1/mpirun.1.__gz
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/share/man/man1/mpirun.__openmpi.1.gz
</span><br>
<span class="quotelev2">&gt;&gt;         /var/lib/dpkg/alternatives/__mpirun
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------__-----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         This is a single machine. I actually just got it... another user
</span><br>
<span class="quotelev2">&gt;&gt;         used it
</span><br>
<span class="quotelev2">&gt;&gt;         for 1-2 years.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Is this a possible cause of the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Regards,
</span><br>
<span class="quotelev2">&gt;&gt;         Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Mon, Apr 14, 2014 at 7:06 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;__&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Apologies for stirring even more the confusion by mispelling
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;Open MPI&quot; as &quot;OpenMPI&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;OMPI&quot; doesn't help either, because all OpenMP environment
</span><br>
<span class="quotelev2">&gt;&gt;              variables and directives start with &quot;OMP&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;              Maybe associating the names to
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;message passing&quot; vs. &quot;threads&quot; would help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Djordje:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              'which mpif90' etc show everything in /usr/bin.
</span><br>
<span class="quotelev2">&gt;&gt;              So, very likely they were installed from packages
</span><br>
<span class="quotelev2">&gt;&gt;              (yum, apt-get, rpm ...),right?
</span><br>
<span class="quotelev2">&gt;&gt;              Have you tried something like
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;yum list |grep mpi&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              to see what you have?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              As Dave, Jeff and Tom said, this may be a mixup of different
</span><br>
<span class="quotelev2">&gt;&gt;              MPI implementations at compilation (mpicc mpif90) and
</span><br>
<span class="quotelev2">&gt;&gt;         runtime (mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;              That is common, you may have different MPI implementations
</span><br>
<span class="quotelev2">&gt;&gt;         installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Other possibilities that may tell what MPI you have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt;              mpif90 --show
</span><br>
<span class="quotelev2">&gt;&gt;              mpicc --show
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Yet another:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              locate mpirun
</span><br>
<span class="quotelev2">&gt;&gt;              locate mpif90
</span><br>
<span class="quotelev2">&gt;&gt;              locate mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              The ldd didn't show any MPI libraries, maybe they are
</span><br>
<span class="quotelev2">&gt;&gt;         static libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              An alternative is to install Open MPI from source,
</span><br>
<span class="quotelev2">&gt;&gt;              and put it in a non-system directory
</span><br>
<span class="quotelev2">&gt;&gt;              (not /usr/bin, not /usr/local/bin, etc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Is this a single machine or a cluster?
</span><br>
<span class="quotelev2">&gt;&gt;              Or perhaps a set of PCs that you have access to?
</span><br>
<span class="quotelev2">&gt;&gt;              If it is a cluster, do you have access to a filesystem that
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;              shared across the cluster?
</span><br>
<span class="quotelev2">&gt;&gt;              On clusters typically /home is shared, often via NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              On 04/14/2014 05:15 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Maybe we should rename OpenMP to be something less
</span><br>
<span class="quotelev2">&gt;&gt;         confusing --
</span><br>
<span class="quotelev2">&gt;&gt;                  perhaps something totally unrelated, perhaps even
</span><br>
<span class="quotelev2">&gt;&gt;         non-sensical.
</span><br>
<span class="quotelev2">&gt;&gt;                  That'll end lots of confusion!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  My vote: OpenMP --&gt; SharkBook
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  It's got a ring to it, doesn't it?  And it sounds
</span><br>
<span class="quotelev2">&gt;&gt; fearsome!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  On Apr 14, 2014, at 5:04 PM, &quot;Elken, Tom&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;tom.elken_at_[hidden] &lt;mailto:tom.elken_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  &lt;mailto:tom.elken_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:tom.elken_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      That&#226;&#128;&#153;s OK.  Many of us make that mistake, though
</span><br>
<span class="quotelev2">&gt;&gt;         often as a
</span><br>
<span class="quotelev2">&gt;&gt;                      typo.
</span><br>
<span class="quotelev2">&gt;&gt;                      One thing that helps is that the correct spelling
</span><br>
<span class="quotelev2">&gt;&gt;         of Open
</span><br>
<span class="quotelev2">&gt;&gt;                      MPI has a space in it,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              but OpenMP does not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      If not aware what OpenMP is, here is a link:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      What makes it more confusing is that more and more
</span><br>
<span class="quotelev2">&gt;&gt;         apps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              offer the option of running in a hybrid mode, such as WRF,
</span><br>
<span class="quotelev2">&gt;&gt;              with OpenMP threads running over MPI ranks with the same
</span><br>
<span class="quotelev2">&gt;&gt;         executable.
</span><br>
<span class="quotelev2">&gt;&gt;              And sometimes that MPI is Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;                      -Tom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      From: users [mailto:users-bounces_at_open-____mpi.org
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users-bounces_at_open-__mpi.org&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:users-bounces_at_open-__mpi.org
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf Of Djordje
</span><br>
<span class="quotelev2">&gt;&gt;                      Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                      Sent: Monday, April 14, 2014 1:28 PM
</span><br>
<span class="quotelev2">&gt;&gt;                      To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;                      Subject: Re: [OMPI users] mpirun runs in serial
</span><br>
<span class="quotelev2">&gt;&gt;         even I set
</span><br>
<span class="quotelev2">&gt;&gt;                      np to several processors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      OK guys... Thanks for all this info. Frankly, I
</span><br>
<span class="quotelev2">&gt;&gt;         didn't know
</span><br>
<span class="quotelev2">&gt;&gt;                      these diferences between OpenMP and OpenMPI. The
</span><br>
<span class="quotelev2">&gt;&gt;         commands:
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpif90
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;                      give,
</span><br>
<span class="quotelev2">&gt;&gt;                      /usr/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                      /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;                      /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;                      respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      A tutorial on how to compile WRF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (<a href="http://www.mmm.ucar.edu/wrf/____OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/____OnLineTutorial/compilation</a>_
</span><br>
<span class="quotelev2">&gt;&gt; ____tutorial.php
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation</a>___
</span><br>
<span class="quotelev2">&gt;&gt; tutorial.php&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/__OnLineTutorial/compilation</a>___
</span><br>
<span class="quotelev2">&gt;&gt; tutorial.php
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation</a>_
</span><br>
<span class="quotelev2">&gt;&gt; tutorial.php&gt;&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      provides a test program to test MPI. I ran the
</span><br>
<span class="quotelev2">&gt;&gt;         program and
</span><br>
<span class="quotelev2">&gt;&gt;                      it gave me the output of successful run, which is:
</span><br>
<span class="quotelev2">&gt;&gt;                      ------------------------------____---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      C function called by Fortran
</span><br>
<span class="quotelev2">&gt;&gt;                      Values are xx = 2.00 and ii = 1
</span><br>
<span class="quotelev2">&gt;&gt;                      status = 2
</span><br>
<span class="quotelev2">&gt;&gt;                      SUCCESS test 2 fortran + c + netcdf + mpi
</span><br>
<span class="quotelev2">&gt;&gt;                      ------------------------------____---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      It uses mpif90 and mpicc for compiling. Below is
</span><br>
<span class="quotelev2">&gt;&gt;         the output
</span><br>
<span class="quotelev2">&gt;&gt;                      of 'ldd ./wrf.exe':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libpthread.so.0 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      /lib/x86_64-linux-gnu/____libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;         (0x00007f4d160ab000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libgfortran.so.3 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      /usr/lib/x86_64-linux-gnu/____libgfortran.so.3
</span><br>
<span class="quotelev2">&gt;&gt;                      (0x00007f4d15d94000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.
</span><br>
<span class="quotelev2">&gt;&gt; ____6
</span><br>
<span class="quotelev2">&gt;&gt;                      (0x00007f4d15a97000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libgcc_s.so.1 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /lib/x86_64-linux-gnu/libgcc_____s.so.1
</span><br>
<span class="quotelev2">&gt;&gt;                      (0x00007f4d15881000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.
</span><br>
<span class="quotelev2">&gt;&gt; ____6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      (0x00007f4d154c1000)
</span><br>
<span class="quotelev2">&gt;&gt;                            /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; (0x00007f4d162e8000)
</span><br>
<span class="quotelev2">&gt;&gt;                            libquadmath.so.0 =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      /usr/lib/x86_64-linux-gnu/____libquadmath.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      (0x00007f4d1528a000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;__&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;                      Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      Your WRF configure file seems to use mpif90 and
</span><br>
<span class="quotelev2">&gt;&gt;         mpicc (line
</span><br>
<span class="quotelev2">&gt;&gt;                      115 &amp; following).
</span><br>
<span class="quotelev2">&gt;&gt;                      In addition, it also seems to have DISABLED OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; (NO
</span><br>
<span class="quotelev2">&gt;&gt;                      TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                      (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev2">&gt;&gt;                      So, it looks like to me your intent was to compile
</span><br>
<span class="quotelev2">&gt;&gt;         with MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      Whether it is THIS MPI (OpenMPI) or another MPI
</span><br>
<span class="quotelev2">&gt;&gt;         (say MPICH,
</span><br>
<span class="quotelev2">&gt;&gt;                      or MVAPICH,
</span><br>
<span class="quotelev2">&gt;&gt;                      or Intel MPI, or Cray, or ...) only your
</span><br>
<span class="quotelev2">&gt;&gt;         environment can tell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      What do you get from these commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpif90
</span><br>
<span class="quotelev2">&gt;&gt;                      which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      I never built WRF here (but other people here use
</span><br>
<span class="quotelev2">&gt;&gt; it).
</span><br>
<span class="quotelev2">&gt;&gt;                      Which input do you provide to the command that
</span><br>
<span class="quotelev2">&gt;&gt;         generates the
</span><br>
<span class="quotelev2">&gt;&gt;                      configure
</span><br>
<span class="quotelev2">&gt;&gt;                      script that you sent before?
</span><br>
<span class="quotelev2">&gt;&gt;                      Maybe the full command line will shed some light on
</span><br>
<span class="quotelev2">&gt;&gt;         the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;                      Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On 04/14/2014 03:11 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev2">&gt;&gt;                      to get help :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                            &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                If you didn't use Open MPI, then this is
</span><br>
<span class="quotelev2">&gt;&gt;         the wrong
</span><br>
<span class="quotelev2">&gt;&gt;                      mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                                for you.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                (this is the Open MPI users' support
</span><br>
<span class="quotelev2">&gt;&gt;         mailing list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                On Apr 14, 2014, at 2:58 PM, Djordje
</span><br>
<span class="quotelev2">&gt;&gt; Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff
</span><br>
<span class="quotelev2">&gt;&gt;         Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                      (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                                &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt; This can also happen when you compile
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt;                      application with
</span><br>
<span class="quotelev2">&gt;&gt;                                one MPI implementation (e.g., Open MPI),
</span><br>
<span class="quotelev2">&gt;&gt;         but then
</span><br>
<span class="quotelev2">&gt;&gt;                      mistakenly use
</span><br>
<span class="quotelev2">&gt;&gt;                                the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a
</span><br>
<span class="quotelev2">&gt;&gt;         different MPI
</span><br>
<span class="quotelev2">&gt;&gt;                      implementation
</span><br>
<span class="quotelev2">&gt;&gt;                                (e.g., MPICH).
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt; On Apr 14, 2014, at 2:32 PM, Djordje
</span><br>
<span class="quotelev2">&gt;&gt;         Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                                &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                                 &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; I compiled it with: x86_64 Linux,
</span><br>
<span class="quotelev2">&gt;&gt;         gfortran
</span><br>
<span class="quotelev2">&gt;&gt;                      compiler with
</span><br>
<span class="quotelev2">&gt;&gt;                                gcc   (dmpar). dmpar - distributed memory
</span><br>
<span class="quotelev2">&gt;&gt;         option.
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; Attached is the self-generated
</span><br>
<span class="quotelev2">&gt;&gt;         configuration
</span><br>
<span class="quotelev2">&gt;&gt;                      file. The
</span><br>
<span class="quotelev2">&gt;&gt;                                architecture specification settings start
</span><br>
<span class="quotelev2">&gt;&gt;         at line
</span><br>
<span class="quotelev2">&gt;&gt;                      107. I didn't
</span><br>
<span class="quotelev2">&gt;&gt;                                use Open MPI (shared memory option).
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM,
</span><br>
<span class="quotelev2">&gt;&gt;         Dave Goodell
</span><br>
<span class="quotelev2">&gt;&gt;                      (dgoodell)
</span><br>
<span class="quotelev2">&gt;&gt;                                &lt;dgoodell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dgoodell_at_[hidden]&gt; &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dgoodell_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dgoodell_at_[hidden]&gt; &lt;mailto:dgoodell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dgoodell_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; On Apr 14, 2014, at 12:15 PM,
</span><br>
<span class="quotelev2">&gt;&gt;         Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;                                &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt; When I start wrf with mpirun -np 4
</span><br>
<span class="quotelev2">&gt;&gt;                      ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ____-------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                          1
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                          1
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                          1
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;  starting wrf task            0  of
</span><br>
<span class="quotelev2">&gt;&gt;                          1
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ____-------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt; This indicates that it is not using
</span><br>
<span class="quotelev2">&gt;&gt; 4
</span><br>
<span class="quotelev2">&gt;&gt;                      processors, but 1.
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;                                 &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; It could be that you compiled WRF
</span><br>
<span class="quotelev2">&gt;&gt; with a
</span><br>
<span class="quotelev2">&gt;&gt;                      different MPI
</span><br>
<span class="quotelev2">&gt;&gt;                                implementation than you are using to run
</span><br>
<span class="quotelev2">&gt;&gt;         it (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;                      MPICH vs.
</span><br>
<span class="quotelev2">&gt;&gt;                                Open MPI).
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt; -Dave
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                                 &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ___________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24206.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
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
