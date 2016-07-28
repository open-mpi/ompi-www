<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 08:21:21 2007" -->
<!-- isoreceived="20070322122121" -->
<!-- sent="Thu, 22 Mar 2007 08:21:07 -0400" -->
<!-- isosent="20070322122107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] portability of the executables compiled with OpenMPI" -->
<!-- id="0D8AFD86-82FE-498F-A747-6B841D7C7833_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1BD5ACAC-5959-4476-9D39-7731B565C1BB_at_ieee.org" -->
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
<strong>Date:</strong> 2007-03-22 08:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2007, at 5:02 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; I would like to hear just how portable an executable compiled against
</span><br>
<span class="quotelev1">&gt; OpenMPI shared libraries should be.
</span><br>
<p>This is a hard question to answer:
<br>
<p>1. We have not done this explicit kind of testing.
<br>
2. Open MPI's libmpi.so itself is plain vanilla C.  If you have an  
<br>
application that is already portable, linking it against Open MPI  
<br>
should not cause it to be less portable.
<br>
3. Open MPI, however, can use many support libraries (e.g., libmosal  
<br>
in your previous mail).  This myriad of extra libraries may create  
<br>
difficulties in creating a truly portable application.
<br>
<p>The best practices that I have seen have been:
<br>
<p>- start with an application that itself is already portable (without  
<br>
MPI)
<br>
- compile everything 100% static
<br>
<p>But this has drawbacks as well -- consider if you link in libmosal.a  
<br>
to your MPI application and then take it to another system that has a  
<br>
slightly different version of VAPI (e.g., a kernel interface  
<br>
changed).  Although your application will load and start running  
<br>
(i.e., no runtime linker resolution failures), it may fail in  
<br>
unpredictable ways later because the libmosal.a in your application  
<br>
calls down to the kernel in ways that are unsupported by the VAPI/ 
<br>
libmosal on the current system.
<br>
<p>Make sense?
<br>
<p>This is unfortunately not an MPI (or Open MPI) specific issue; it's a  
<br>
larger problem of creating truly portable software.  To have a better  
<br>
chance of success, you probably want to ensure that all relevant  
<br>
points of interaction between your application and the outside system  
<br>
are either the same version or &quot;compatible enough&quot;.
<br>
<p>- high-speed networking support libraries
<br>
- resource manager support libraries
<br>
- libc
<br>
- ...etc.
<br>
<p>Specifically, even though you won't be looking for .so's at runtime,  
<br>
you need to ensure that the way the .a's compiled into your  
<br>
application interact with the system is either the same way or &quot;close  
<br>
enough&quot; to how the corresponding support libraries work on the target  
<br>
machine.
<br>
<p>All this being said, Open MPI did try to take steps in its design to  
<br>
be able to effect more portability (e.g., for ISV's).  Theoretically  
<br>
-- we have not explicitly tested this -- the following setup may  
<br>
provide a better degree of portability:
<br>
<p>- have the same version of Open MPI available on each machine,  
<br>
compiled against whatever support libraries are relevant on that  
<br>
machine (using plugins, not --enable-static).
<br>
<p>- compile your application *dynamically* against Open MPI.  Note that  
<br>
some of the upper-level configuration of Open MPI must be either the  
<br>
same or &quot;close enough&quot; between machines such that runtime linking  
<br>
will work properly (e.g., don't use a 32 bit libmpi on one machine  
<br>
and a 64 bit libmpi on another, etc.  There's more details here, but  
<br>
you get the general idea)
<br>
<p>- ensure that other (non-MPI-related) interaction points in your  
<br>
application are the same or &quot;close enough&quot; to be portable
<br>
<p>By linking dynamically against Open MPI (which is plain vanilla C),  
<br>
the application will only be looking for Open MPI's plain C support  
<br>
libraries -- not the other support libraries (such as libmosal),  
<br>
because those are linked against OMPI's plugins -- not libmpi.so  
<br>
(etc.).  This design effectively takes MPI out of the portability  
<br>
equation.
<br>
<p>That's the theory, anyway.  :-)
<br>
<p>I skipped many nit-picky details, so I'm sure there will be issues to  
<br>
figure out.  But *in theory*, it's possible...
<br>
<p><span class="quotelev1">&gt; I'm compiling on a Debian Linux system with dual 1.3 GHz AMD Opterons
</span><br>
<span class="quotelev1">&gt; per node and an internal network of dual gigabit ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm planning on a SUSE Linux Enterprise Server 9 system with dual 3.6
</span><br>
<span class="quotelev1">&gt; GHz Intel Xeon EM64T per node and an internal network using Myrinet.
</span><br>
<p>I can't speak for how portable Myrinet support libraries are...   
<br>
Myricom?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2809.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2876.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
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
