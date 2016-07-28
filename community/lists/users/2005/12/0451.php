<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 23 23:41:51 2005" -->
<!-- isoreceived="20051224044151" -->
<!-- sent="Fri, 23 Dec 2005 23:41:49 -0500" -->
<!-- isosent="20051224044149" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] High Virtual Memory" -->
<!-- id="D0C501CA-60BD-4B12-B9A5-99F5383F5B4E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50598.82.67.159.21.1135260956.squirrel_at_mis.onera.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-23 23:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 22, 2005, at 9:15 AM, Christophe Peyret wrote:
<br>
<p><span class="quotelev1">&gt; I have compiled and install openmpi-1.0.1 on MacOSX Tiger 10.4.3.  
</span><br>
<span class="quotelev1">&gt; It has
</span><br>
<span class="quotelev1">&gt; been configured to works with xfl_r and xlf95_r. I just change few  
</span><br>
<span class="quotelev1">&gt; lines
</span><br>
<span class="quotelev1">&gt; of the xlf.cfg in order to build open-mpi as mentioned on the mail- 
</span><br>
<span class="quotelev1">&gt; list :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI uses the fortran compiler to link a C program in order to test
</span><br>
<span class="quotelev1">&gt; the size of LOGICAL, etc. To get it to work with xlf, I had to add
</span><br>
<span class="quotelev1">&gt; -lSystemStubs to the gcc_libs entry for f77 in /etc/opt/ibmcmp/xlf/ 
</span><br>
<span class="quotelev1">&gt; 8.1/
</span><br>
<span class="quotelev1">&gt; xlf.cfg.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also compile my program using mpif90 and it works !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, when I launch my program with open-mpi, The difference between  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; real and virtual memories is about 600 MO while I have only 50 MO  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; lam-7.1.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking for a solution to reduce that 'too' high level of virtual
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<p>Open MPI does (currently) use slightly more memory that LAM/MPI due  
<br>
to some choices we made in tradeoffs between memory usage and  
<br>
performance.  The bulk of the difference, however, is due to  
<br>
differences in shared memory communication and the default component  
<br>
build mode.
<br>
<p>LAM/MPI uses System V shared memory for shared memory communication.   
<br>
Mac OS X defaults to allowing only 4MB of SysV shared memory per user  
<br>
at any one time, so LAM/MPI allocates only that small chunk for all  
<br>
its shared memory communication.  Open MPI, on the other hand, uses  
<br>
mmap'ed files for shared memory communication.  Since the limits on  
<br>
mmaped files are much higher than SysV shared memory (basically, the  
<br>
limits of the virtual memory space), we default to using 512MB of  
<br>
space for shared memory communication.  This can be tweaked by  
<br>
setting the MCA parameter mpool_sm_size (argument is number of bytes).
<br>
<p>LAM/MPI defaults to building static libraries, with all components  
<br>
linked into the static libraries.  Since the linker only &quot;brings in&quot;  
<br>
the parts of libmpi.a actually needed for your application and most  
<br>
people only use a small portion of MPI, this can result in a  
<br>
reasonable amount of libmpi.a and liblam.a never being linked into  
<br>
your application.  Open MPI, on the other hand, defaults to building  
<br>
shared libraries, with all components loaded at runtime.  The linker  
<br>
always maps the entirety of the shared library into virtual memory  
<br>
(although not all of it is loaded into physical memory).  The  
<br>
dynamically loaded components each have about 1MB of overhead that is  
<br>
not there when components are linked into libmpi.{a,so} directly.   
<br>
You can enable static libraries for Open MPI (which will cause the  
<br>
build system to link components directly into libmpi.a) with the  
<br>
configure options --enable-static --disable-shared.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
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
