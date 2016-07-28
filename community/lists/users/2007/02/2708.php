<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 19:40:05 2007" -->
<!-- isoreceived="20070216004005" -->
<!-- sent="Thu, 15 Feb 2007 16:40:00 -0800 (PST)" -->
<!-- isosent="20070216004000" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling mpptest using OpenMPI" -->
<!-- id="Pine.LNX.4.44.0702151633160.3099-100000_at_van.jrtad.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="695E4B13-6D85-4E29-BF91-8F370D81D0D9_at_cisco.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 19:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your response, I eventually figured it out, here is the 
<br>
only way I got mpptest to compile:
<br>
<p>export LD_LIBRARY_PATH=&quot;$HOME/openmpi_`uname -m`/lib&quot;
<br>
CC=&quot;$HOME/openmpi_`uname -m`/bin/mpicc&quot; ./configure --with-mpi=&quot;$HOME/openmpi_`uname -m`&quot;
<br>
<p>And, yes I know I should use the mpicc wrapper and all (I do RTFM :P ) but 
<br>
mpptest is less than cooperative and hasn't been updated lately AFAIK.
<br>
<p>I'll keep you posted on some results as I get some results out (testing 
<br>
TCP/IP as well as the HyperTransport on a Tyan Beast). Up to now, LAM-MPI 
<br>
seems less efficient at async communications and shows no improovments 
<br>
with persistant communications under TCP/IP. OpenMPI, on the other hand, 
<br>
seems more efficient using persistant communications when in a 
<br>
HyperTransport (shmem) environment... I know I am crossing many test 
<br>
boudaries but I will post some PNGs of my results (as well as how I got to 
<br>
them ;)
<br>
<p>Eric
<br>
<p>On Thu, 15 Feb 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think you want to add $HOME/openmpi_`uname -m`/lib to your  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.  This should allow executables created by mpicc (or  
</span><br>
<span class="quotelev1">&gt; any derivation thereof, such as extracting flags via showme) to find  
</span><br>
<span class="quotelev1">&gt; the Right shared libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let us know if that works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we do recommend using the wrapper compilers over extracting the  
</span><br>
<span class="quotelev1">&gt; flags via --showme whenever possible (it's just simpler and should do  
</span><br>
<span class="quotelev1">&gt; what you need).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2007, at 3:38 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been attempting to compile mpptest on my nodes in vain. Here  
</span><br>
<span class="quotelev2">&gt; &gt; is my current setup:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Openmpi is in &quot;$HOME/openmpi_`uname -m`&quot; which translates to &quot;/ 
</span><br>
<span class="quotelev2">&gt; &gt; export/home/eric/openmpi_i686/&quot;. I tried the following approaches  
</span><br>
<span class="quotelev2">&gt; &gt; (you can see some of these were out of desperation):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=`mpicc --showme:compile` LDFLAGS=`mpicc --showme:link` ./ 
</span><br>
<span class="quotelev2">&gt; &gt; configure
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configure fails on:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking whether the C compiler works... configure: error: cannot  
</span><br>
<span class="quotelev2">&gt; &gt; run C compiled programs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The log shows that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./a.out: error while loading shared libraries: liborte.so.0: cannot  
</span><br>
<span class="quotelev2">&gt; &gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CC=&quot;/export/home/eric/openmpi_i686/bin/mpicc&quot; ./configure --with- 
</span><br>
<span class="quotelev2">&gt; &gt; mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same problems as above...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; LDFLAGS=&quot;$HOME/openmpi_`uname -m`/lib&quot; ./configure --with-mpi=$HOME/ 
</span><br>
<span class="quotelev2">&gt; &gt; openmpi_`uname -m`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configure fails on:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking for C compiler default output file name... configure:  
</span><br>
<span class="quotelev2">&gt; &gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And...finally (not that all of this was done in the presented order):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --with-mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which ends with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking for library containing MPI_Init... no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Could not find MPI library
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone can help me with this one...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that LAM-MPI is also installed on these systems...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
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
