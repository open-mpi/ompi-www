<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 18:53:16 2007" -->
<!-- isoreceived="20070215235316" -->
<!-- sent="Thu, 15 Feb 2007 18:52:59 -0500" -->
<!-- isosent="20070215235259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling mpptest using OpenMPI" -->
<!-- id="695E4B13-6D85-4E29-BF91-8F370D81D0D9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200702151538.45513.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2007-02-15 18:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you want to add $HOME/openmpi_`uname -m`/lib to your  
<br>
LD_LIBRARY_PATH.  This should allow executables created by mpicc (or  
<br>
any derivation thereof, such as extracting flags via showme) to find  
<br>
the Right shared libraries.
<br>
<p>Let us know if that works for you.
<br>
<p>FWIW, we do recommend using the wrapper compilers over extracting the  
<br>
flags via --showme whenever possible (it's just simpler and should do  
<br>
what you need).
<br>
<p><p>On Feb 15, 2007, at 3:38 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been attempting to compile mpptest on my nodes in vain. Here  
</span><br>
<span class="quotelev1">&gt; is my current setup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Openmpi is in &quot;$HOME/openmpi_`uname -m`&quot; which translates to &quot;/ 
</span><br>
<span class="quotelev1">&gt; export/home/eric/openmpi_i686/&quot;. I tried the following approaches  
</span><br>
<span class="quotelev1">&gt; (you can see some of these were out of desperation):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CFLAGS=`mpicc --showme:compile` LDFLAGS=`mpicc --showme:link` ./ 
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure fails on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... configure: error: cannot  
</span><br>
<span class="quotelev1">&gt; run C compiled programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The log shows that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: liborte.so.0: cannot  
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=&quot;/export/home/eric/openmpi_i686/bin/mpicc&quot; ./configure --with- 
</span><br>
<span class="quotelev1">&gt; mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same problems as above...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;$HOME/openmpi_`uname -m`/lib&quot; ./configure --with-mpi=$HOME/ 
</span><br>
<span class="quotelev1">&gt; openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure fails on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... configure:  
</span><br>
<span class="quotelev1">&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And...finally (not that all of this was done in the presented order):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi=$HOME/openmpi_`uname -m`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which ends with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for library containing MPI_Init... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: Could not find MPI library
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone can help me with this one...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that LAM-MPI is also installed on these systems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
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
<li><strong>Next message:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2708.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
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
