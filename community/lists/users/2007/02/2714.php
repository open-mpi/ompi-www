<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 16 06:51:07 2007" -->
<!-- isoreceived="20070216115107" -->
<!-- sent="Fri, 16 Feb 2007 06:50:55 -0500" -->
<!-- isosent="20070216115055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling mpptest using OpenMPI" -->
<!-- id="E861B4F5-D40F-4E32-BDAE-3D6D0F98F6CD_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200702160012.40767.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-16 06:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you try one of the later nightly 1.2 tarballs?  We just fixed a  
<br>
shared memory race condition, for example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.2/">http://www.open-mpi.org/nightly/v1.2/</a>
<br>
<p><p>On Feb 16, 2007, at 12:12 AM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hello devs,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thought I would let you know there seems to be a problem with  
</span><br>
<span class="quotelev1">&gt; 1.2b3r13112 when running the &quot;bisection&quot; test on a Tyan VX50  
</span><br>
<span class="quotelev1">&gt; machine (the 8 DualCore model with 32Gigs of RAM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI was compiled with (as seen from config.log):
</span><br>
<span class="quotelev1">&gt; configure:116866: running /bin/sh './configure'  CFLAGS=&quot;-O3 - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -pthread&quot;  
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=&quot; &quot; FFLAGS=&quot;&quot; LDFLAGS=&quot; &quot; --enable-shared --disable- 
</span><br>
<span class="quotelev1">&gt; static  --prefix=/export/livia/home/parallel/eric/openmpi_x86_64 -- 
</span><br>
<span class="quotelev1">&gt; with-mpi=open_mpi --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPPTEST (1.3c) was compiled with:
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...which, for some reason, works fine on that system that doesn't  
</span><br>
<span class="quotelev1">&gt; have any other MPI implementation (ie: doesn't have LAM-MPI as per  
</span><br>
<span class="quotelev1">&gt; this thread).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I ran a few tests but this one ran for over it's allowed time  
</span><br>
<span class="quotelev1">&gt; (1800 seconds and was going over 50minutes...) and was up to 16Gigs  
</span><br>
<span class="quotelev1">&gt; of RAM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orterun -np 9 ./perftest-1.3c/mpptest -max_run_time 1800 -bisect - 
</span><br>
<span class="quotelev1">&gt; size 0 4096 1 -gnuplot -fname HyperTransport/ 
</span><br>
<span class="quotelev1">&gt; Global_bisect_0_4096_1.gpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to CTRL-\ the process as CTRL-C wasn't sufficient. 2 mpptest  
</span><br>
<span class="quotelev1">&gt; processes and 1 orterun process were using 100% CPU ou of of the 16  
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If any of this can be indicative of an OpenMPI bug and if I can  
</span><br>
<span class="quotelev1">&gt; help in tracking it down, don't hesitate to ask for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, finally, Anthony, thanks for the MPICC and --with-mpich  
</span><br>
<span class="quotelev1">&gt; pointers, I will try those to simplify the build process!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le jeudi 15 f&#233;vrier 2007 19:51, Anthony Chan a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As long as mpicc is working, try configuring mpptest as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpptest/configure MPICC=&lt;OpenMPI-install-dir&gt;/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpptest/configure  --with-mpich=&lt;OpenMPI-install-dir&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A.Chan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 15 Feb 2007, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	Thanks for your response, I eventually figured it out, here is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only way I got mpptest to compile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=&quot;$HOME/openmpi_`uname -m`/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=&quot;$HOME/openmpi_`uname -m`/bin/mpicc&quot; ./configure --with- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi=&quot;$HOME/openmpi_`uname -m`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, yes I know I should use the mpicc wrapper and all (I do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTFM :P ) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpptest is less than cooperative and hasn't been updated lately  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AFAIK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll keep you posted on some results as I get some results out  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP/IP as well as the HyperTransport on a Tyan Beast). Up to now,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAM-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems less efficient at async communications and shows no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improovments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with persistant communications under TCP/IP. OpenMPI, on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other hand,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems more efficient using persistant communications when in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HyperTransport (shmem) environment... I know I am crossing many test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boudaries but I will post some PNGs of my results (as well as how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them ;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 15 Feb 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think you want to add $HOME/openmpi_`uname -m`/lib to your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH.  This should allow executables created by mpicc  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any derivation thereof, such as extracting flags via showme) to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the Right shared libraries.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let us know if that works for you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, we do recommend using the wrapper compilers over  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extracting the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags via --showme whenever possible (it's just simpler and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what you need).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 15, 2007, at 3:38 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have been attempting to compile mpptest on my nodes in vain.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is my current setup:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Openmpi is in &quot;$HOME/openmpi_`uname -m`&quot; which translates to &quot;/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export/home/eric/openmpi_i686/&quot;. I tried the following approaches
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (you can see some of these were out of desperation):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CFLAGS=`mpicc --showme:compile` LDFLAGS=`mpicc --showme:link` ./
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Configure fails on:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking whether the C compiler works... configure: error: cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run C compiled programs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The log shows that:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: liborte.so.0:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC=&quot;/export/home/eric/openmpi_i686/bin/mpicc&quot; ./configure --with-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Same problems as above...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LDFLAGS=&quot;$HOME/openmpi_`uname -m`/lib&quot; ./configure --with-mpi= 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $HOME/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Configure fails on:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking for C compiler default output file name... configure:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And...finally (not that all of this was done in the presented  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; order):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --with-mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Which ends with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking for library containing MPI_Init... no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure: error: Could not find MPI library
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyone can help me with this one...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note that LAM-MPI is also installed on these systems...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt; T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt; C. (514) 710-0517
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
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
