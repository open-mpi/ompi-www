<?
$subject_val = "Re: [OMPI users] Processes always rank 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 09:24:42 2010" -->
<!-- isoreceived="20100708132442" -->
<!-- sent="Thu, 8 Jul 2010 09:24:54 -0400" -->
<!-- isosent="20100708132454" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes always rank 0" -->
<!-- id="83C796E3-9124-4BDB-87C5-16CAD1CA25B0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C35CCA2.7060600_at_fu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes always rank 0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 09:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13535.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually, systems like yours (that have executables named &quot;mpirun.openmpi&quot; and &quot;mpirun.lam&quot; and so on) have some kind of system for selecting what the system default MPI should be.  It should then set a bunch of sym links to make the &quot;simple&quot; names point to the &quot;specific&quot; names.  For example, if you select Open MPI as the system default, it should make a sym link from mpirun to mpirun.openmpi, mpicc to mpicc.openmpi, ...etc.
<br>
<p>I don't know what the specific commands are for your system, but google around under Linux topics for &quot;alternatives&quot;.  That might lead you in the right direction.
<br>
<p>If you want to prove that OMPI is running across multiple machines, you might want to try running non-MPI executables, such as &quot;mpirun -machinefile machines hostname&quot; (where hostname(1) is a normal Linux executable that prints your hostname).
<br>
<p><p>On Jul 8, 2010, at 9:03 AM, Oliver Stolpe wrote:
<br>
<p><span class="quotelev1">&gt; You were right, it was linked to the lam compiler. I didn't find the
</span><br>
<span class="quotelev1">&gt; open mpi compiler on the system, though.
</span><br>
<span class="quotelev1">&gt; Now I downloaded and compiled the current stable version of openmpi.
</span><br>
<span class="quotelev1">&gt; That worked. I had to make symbolic links to the exectuables so that the
</span><br>
<span class="quotelev1">&gt; system won't get confused with the old mpi install that I can't access
</span><br>
<span class="quotelev1">&gt; to deinstall.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now when I use my current host only as machine, it works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mympicc mpitest.c -o mpitest &amp;&amp; mympirun -np 3 -machinefile machines
</span><br>
<span class="quotelev1">&gt; mpitest
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 2 of 3
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 3
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 1 of 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get it run on multiple machines, I had to give an absolute path to
</span><br>
<span class="quotelev1">&gt; the running binary:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/bude/ocs/openmpi/bin/mpirun -np 8 -machinefile machines mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ocs_at_frost:~$ /home/bude/ocs/openmpi/bin/mpirun -np 8 -machinefile
</span><br>
<span class="quotelev1">&gt; machines mpitest
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 3 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello, World. I am 6 of 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yay! Works as it should (I think so, can I prove it somewhere that he
</span><br>
<span class="quotelev1">&gt; really executes the instances on the machines?)! Thanks everybody. This
</span><br>
<span class="quotelev1">&gt; is not the most elegant solution but it works eventually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Oliver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Lam and open mpi are two different mpi implementations. Lam came before open mpi; we stopped developing lam years ago.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lamboot is a lam-specific command. It has no analogue in open mpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Orterun is open mpi's mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;From a quick look at your paths and whatnot, its not immediately obvious how you are mixing lam and open mpi, but somehow you are. You need to disentangle them and entirely use open mpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps your mpicc is sym linked to the lam mpicc (instead of the open mpi mpicc)...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -jms
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thu Jul 08 06:13:43 2010
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Processes always rank 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I thought this is OpenMPI what I was using. I do not have permission to
</span><br>
<span class="quotelev2">&gt; &gt; install something, only in my home directory. All tutorials I found
</span><br>
<span class="quotelev2">&gt; &gt; started the environment with the lamboot command. Whats the difference
</span><br>
<span class="quotelev2">&gt; &gt; using only OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ whereis openmpi
</span><br>
<span class="quotelev2">&gt; &gt; openmpi: /etc/openmpi /usr/lib/openmpi /usr/lib64/openmpi /usr/share/openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; :/usr/lib/openmpi/lib:/usr/lib64/openmpi/lib:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ whereis mpirun
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: /usr/bin/mpirun.mpich /usr/bin/mpirun /usr/bin/mpirun.lam
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/mpirun.openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ll /usr/bin/mpirun
</span><br>
<span class="quotelev2">&gt; &gt; lrwxrwxrwx 1 root root 24 14. Aug 2008  /usr/bin/mpirun -&gt; /usr/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ll /usr/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt; -rwxr-xr-x 1 root root 39280 25. Aug 2008  /usr/bin/orterun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ll /usr/bin/mpirun.openmpi
</span><br>
<span class="quotelev2">&gt; &gt; lrwxrwxrwx 1 root root 7  5. Sep 2008  /usr/bin/mpirun.openmpi -&gt; orterun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run mpirun without starting the environment by using lamboot, it
</span><br>
<span class="quotelev2">&gt; &gt; says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ocs_at_frost:~$ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -np 1 -machinefile
</span><br>
<span class="quotelev2">&gt; &gt; machines ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that there is no lamd running on the host frost.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This indicates that the LAM/MPI runtime environment is not operating.
</span><br>
<span class="quotelev2">&gt; &gt; The LAM/MPI runtime environment is necessary for MPI programs to run
</span><br>
<span class="quotelev2">&gt; &gt; (the MPI program tired to invoke the &quot;MPI_Init&quot; function).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
</span><br>
<span class="quotelev2">&gt; &gt; environment.  See the LAM/MPI documentation for how to invoke
</span><br>
<span class="quotelev2">&gt; &gt; &quot;lamboot&quot; across multiple machines.
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt; Oliver
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you're just starting with MPI, is there any chance you can upgrade to Open MPI instead of LAM/MPI?  All of the LAM/MPI developers moved to Open MPI years ago.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ann/lib:/home/bude/ocs/fann
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 8, 2010, at 6:01 AM, Oliver Stolpe wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello there,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have a problem setting up MPI/LAM. Here we go:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I start lam with the lamboot command successfully:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ lamboot -v hostnames
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n0 (frost)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n1 (hurricane)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n2 (hail)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n3 (fog)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n4 (rain)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: booting n5 (thunder)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;11960&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ok, all is fine. I test a command (hostname in this case):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun -v --hostfile hostnames hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thunder
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; frost
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hurricane
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hail
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Works. I write a hello world program for testing:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     unsigned int rank;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     unsigned int size;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     printf(&quot;Hello, World. I am %u of %u\n&quot;, rank, size);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I compile and run it:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpicc -o mpitest mpitest.c &amp;&amp; mpirun -v --hostfile hostnames ./mpitest
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello, World. I am 0 of 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; And I don't get it why everyone has the rank 0 and the size is only 1. I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; followed many tutorials and i proved it right many times. Does anyone
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; has an idea?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oliver
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Some infos:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ lamboot -v
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;12088&gt; ssi:boot:base:linear: booting n0 (localhost)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; n-1&lt;12088&gt; ssi:boot:base:linear: finished
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ocs_at_frost:~$ lamboot -V
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; LAM 7.1.2/MPI 2 C++/ROMIO - Indiana University
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     Arch:        x86_64-pc-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     Prefix:        /usr/lib/lam
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     Configured by:    buildd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     Configured on:    Sun Apr  6 01:43:15 UTC 2008
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     Configure host:    excelsior
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     SSI rpi:    crtcp lamd sysv tcp usysv
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpirun -V
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun (Open MPI) 1.2.7rc2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ mpicc -v
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Target: x86_64-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Configured with: ../src/configure -v --with-pkgversion='Debian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4.3.2-1.1' --with-bugurl=file:///usr/share/doc/gcc-4.3/README.Bugs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-shared --with-system-zlib --libexecdir=/usr/lib
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --without-included-gettext --enable-threads=posix --enable-nls
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-gxx-include-dir=/usr/include/c++/4.3 --program-suffix=-4.3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-clocale=gnu --enable-libstdcxx-debug --enable-objc-gc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-mpfr --enable-cld --enable-checking=release
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gcc version 4.3.2 (Debian 4.3.2-1.1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;  
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13535.php">Oliver Stolpe: "Re: [OMPI users] Processes always rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13536.php">Reuti: "Re: [OMPI users] Processes always rank 0"</a>
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
