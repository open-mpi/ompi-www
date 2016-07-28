<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 19:51:02 2007" -->
<!-- isoreceived="20070216005102" -->
<!-- sent="Thu, 15 Feb 2007 18:51:01 -0600 (CST)" -->
<!-- isosent="20070216005101" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling mpptest using OpenMPI" -->
<!-- id="Pine.LNX.4.58.0702151847480.3729_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.44.0702151633160.3099-100000_at_van.jrtad.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 19:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as mpicc is working, try configuring mpptest as
<br>
<p>mpptest/configure MPICC=&lt;OpenMPI-install-dir&gt;/bin/mpicc
<br>
<p>or
<br>
<p>mpptest/configure  --with-mpich=&lt;OpenMPI-install-dir&gt;
<br>
<p>A.Chan
<br>
<p>On Thu, 15 Feb 2007, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Thanks for your response, I eventually figured it out, here is the
</span><br>
<span class="quotelev1">&gt; only way I got mpptest to compile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;$HOME/openmpi_`uname -m`/lib&quot;
</span><br>
<span class="quotelev1">&gt; CC=&quot;$HOME/openmpi_`uname -m`/bin/mpicc&quot; ./configure --with-mpi=&quot;$HOME/openmpi_`uname -m`&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, yes I know I should use the mpicc wrapper and all (I do RTFM :P ) but
</span><br>
<span class="quotelev1">&gt; mpptest is less than cooperative and hasn't been updated lately AFAIK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll keep you posted on some results as I get some results out (testing
</span><br>
<span class="quotelev1">&gt; TCP/IP as well as the HyperTransport on a Tyan Beast). Up to now, LAM-MPI
</span><br>
<span class="quotelev1">&gt; seems less efficient at async communications and shows no improovments
</span><br>
<span class="quotelev1">&gt; with persistant communications under TCP/IP. OpenMPI, on the other hand,
</span><br>
<span class="quotelev1">&gt; seems more efficient using persistant communications when in a
</span><br>
<span class="quotelev1">&gt; HyperTransport (shmem) environment... I know I am crossing many test
</span><br>
<span class="quotelev1">&gt; boudaries but I will post some PNGs of my results (as well as how I got to
</span><br>
<span class="quotelev1">&gt; them ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 15 Feb 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think you want to add $HOME/openmpi_`uname -m`/lib to your
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH.  This should allow executables created by mpicc (or
</span><br>
<span class="quotelev2">&gt; &gt; any derivation thereof, such as extracting flags via showme) to find
</span><br>
<span class="quotelev2">&gt; &gt; the Right shared libraries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let us know if that works for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we do recommend using the wrapper compilers over extracting the
</span><br>
<span class="quotelev2">&gt; &gt; flags via --showme whenever possible (it's just simpler and should do
</span><br>
<span class="quotelev2">&gt; &gt; what you need).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 15, 2007, at 3:38 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have been attempting to compile mpptest on my nodes in vain. Here
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is my current setup:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Openmpi is in &quot;$HOME/openmpi_`uname -m`&quot; which translates to &quot;/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; export/home/eric/openmpi_i686/&quot;. I tried the following approaches
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (you can see some of these were out of desperation):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CFLAGS=`mpicc --showme:compile` LDFLAGS=`mpicc --showme:link` ./
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Configure fails on:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking whether the C compiler works... configure: error: cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run C compiled programs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The log shows that:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./a.out: error while loading shared libraries: liborte.so.0: cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CC=&quot;/export/home/eric/openmpi_i686/bin/mpicc&quot; ./configure --with-
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Same problems as above...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; LDFLAGS=&quot;$HOME/openmpi_`uname -m`/lib&quot; ./configure --with-mpi=$HOME/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi_`uname -m`
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Configure fails on:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking for C compiler default output file name... configure:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And...finally (not that all of this was done in the presented order):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --with-mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Which ends with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking for library containing MPI_Init... no
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: error: Could not find MPI library
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anyone can help me with this one...?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Note that LAM-MPI is also installed on these systems...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2713.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
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
