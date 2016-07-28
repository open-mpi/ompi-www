<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 13:30:28 2009" -->
<!-- isoreceived="20090224183028" -->
<!-- sent="Tue, 24 Feb 2009 13:30:22 -0500" -->
<!-- isosent="20090224183022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer" -->
<!-- id="84713330-4FF7-4A38-989C-5F046B9DF978_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45F09016-FD96-4347-9F8F-538AC4AE3ED3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 13:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8187.php">Ricardo Fernández-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 1:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The minimpi(.py) Python module loads the minimpiext(.c) module and  
</span><br>
<span class="quotelev2">&gt;&gt; calls
</span><br>
<span class="quotelev2">&gt;&gt; its minimpiext.init() method (defined in minimpiext.c) which in turn
</span><br>
<span class="quotelev2">&gt;&gt; calls MPI_Init(). &quot;minimpiext.c&quot; is linked against libmpi. Libmpi is
</span><br>
<span class="quotelev2">&gt;&gt; loaded as soon as Python evaluates &quot;import minimpi&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, ok.  I wonder if you're not building properly.  -lmpi is not  
</span><br>
<span class="quotelev1">&gt; usually suffucient to build an Open MPI application; we hide a bunch  
</span><br>
<span class="quotelev1">&gt; of flags inside mpicc you can see via mpicc --showme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does one add more ldflags to your setup.py script?
</span><br>
<p><p>Never mind; a few quick google searches and I found the  
<br>
extra_linker_args python param.  That turned out to be a red herring,  
<br>
anyway.
<br>
<p>The issue is that Python is apparently dlopen'ing libmpi in a private  
<br>
scope.  Specifically, if I &quot;strace python&quot; and type in &quot;import  
<br>
minimpi&quot;, I see the following go by:
<br>
<p>-----
<br>
open(&quot;/home/jsquyres/bogus/lib/libmpi.so.0&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0P\241\1\0&quot;...,  
<br>
832) = 832
<br>
fstat(5, {st_mode=S_IFREG|0755, st_size=799503, ...}) = 0
<br>
mmap(NULL, 1690760, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,  
<br>
0) = 0x2a987f6000
<br>
-----
<br>
<p>Which I think corresponds to calling dlopen() without RTLD_GLOBAL.
<br>
<p>The problem is that Open MPI is also built upon plugins.  And OMPI's  
<br>
plugins use symbols in OMPI's libraries.  Hence, when we dynamically  
<br>
load OMPI's plugins, they need to be able to resolve some symbols with  
<br>
symbols that can be found in the process.  Hence, if libmpi is loaded  
<br>
in a private scope, and then libmpi turns around and calls dlopen() to  
<br>
open a plugin, libmpi's symbols (and libopen-rte and libopen-pal) are  
<br>
not available to the plugin.  Hence, the plugin fails to load.  This  
<br>
error propagates up the stack and MPI_INIT eventually fails.
<br>
<p>You have some possible workarounds:
<br>
<p>- We recommended to the PyMPI author a while ago that he add his own  
<br>
dlopen() of libmpi before calling MPI_INIT, but specifically using  
<br>
RTLD_GLOBAL, so that the library is opened in the global process space  
<br>
(not a private space in the process).  Then libmpi's (and friends)  
<br>
symbols will be available to its plugins.  If you're unhappy with the  
<br>
non-portability of dlopen, try lt_dlopen_advise() -- it's a portable  
<br>
version that is linked inside Open MPI.
<br>
<p>- Another option is to configure/compile Open MPI with &quot;--disable- 
<br>
dlopen&quot; or &quot;--enable-static --disable-shared&quot; configure options.   
<br>
Either of these options will cause Open MPI to slurp all of its  
<br>
plugins up into libmpi (etc) and not dynamically open them at run- 
<br>
time, thereby avoiding the problem of Python opening libmpi in a  
<br>
private scope.
<br>
<p>- Get Python to give you the possibility of opening dependent  
<br>
libraries in the global scope.  This may be somewhat controversial;  
<br>
there are good reasons to open plugins in private scopes.  But I have  
<br>
to imagine that OMPI is not the only python extension out there that  
<br>
wants to open plugins of its own; other such projects should be  
<br>
running into similar issues.
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
<li><strong>Next message:</strong> <a href="8187.php">Ricardo Fernández-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
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
