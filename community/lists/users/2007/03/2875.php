<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 08:46:00 2007" -->
<!-- isoreceived="20070322124600" -->
<!-- sent="Thu, 22 Mar 2007 08:45:50 -0400" -->
<!-- isosent="20070322124550" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] portability of the executables compiled with OpenMPI" -->
<!-- id="680EB8D3-E6B1-4E4E-8CF1-E84168E0061E_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="887BEF03-FDAE-47C4-836C-F5C9BAECF5D8_at_cisco.com" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 08:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2007, at 7:55 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 15, 2007, at 12:18 PM, Michael wrote:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; Situation: I'm compiling my code locally on a machine with just
</span><br>
<span class="quotelev2">&gt;&gt; ethernet interfaces and OpenMPI 1.1.2 that I built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I attempt to run that executable on a HPC machine with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.2 and InfiniBand interfaces I get messages about &quot;can't find
</span><br>
<span class="quotelev2">&gt;&gt; libmosal.so.0.0&quot; -- I'm certain this wasn't happening earlier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can compile on this machine and run on it, even though there is no
</span><br>
<span class="quotelev2">&gt;&gt; libmosal.* in my path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 --showme on this system gives me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/compiler/intel/compiler91/x86_64/bin/ifort -I/opt/mpi/x86_64/
</span><br>
<span class="quotelev2">&gt;&gt; intel/9.1/openmpi-1.1.4/include -pthread -I/opt/mpi/x86_64/intel/9.1/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.4/lib -L/opt/mpi/x86_64/intel/9.1/openmpi-1.1.4/lib -L/
</span><br>
<span class="quotelev2">&gt;&gt; opt/gm/lib64 -lmpi_f90 -lmpi -lorte -lopal -lgm -lvapi -lmosal -lrt -
</span><br>
<span class="quotelev2">&gt;&gt; lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on this output, I assume you have configured OMPI with either --
</span><br>
<span class="quotelev1">&gt; enable-static or otherwise including all plugins in libmpi.so, right?
</span><br>
<p>No, I did not configure OpenMPI on this machine.  I believe OpenMPI  
<br>
was configured not static by the installers based on the messages and  
<br>
the dependency on the missing libraries.
<br>
<p>The issue was that some of the 1000+ nodes on this major HPC machine  
<br>
were missing libraries needed for OpenMPI but because of the low  
<br>
usage of OpenMPI I'm the first to discover the problem.  For whatever  
<br>
reason these libraries are not on the front-end machines that feed  
<br>
the main system.  It's always nice running OpenMPI on your own  
<br>
machine but not everyone can always do that.
<br>
<p>The way I read my experience is that OpenMPI's libmpi.so depends on  
<br>
different libraries on different machines, this means that if you  
<br>
don't compile static you can compile on a machine that does not have  
<br>
libraries for expensive interfaces and run on another machine with  
<br>
those expensive interfaces -- that's what I'm am doing now successfully.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
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
