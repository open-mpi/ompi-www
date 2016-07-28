<?
$subject_val = "Re: [OMPI users] mpicc problems finding libraries (mostly)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  2 09:18:52 2007" -->
<!-- isoreceived="20070102141852" -->
<!-- sent="Tue, 2 Jan 2007 09:18:33 -0500" -->
<!-- isosent="20070102141833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc problems finding libraries (mostly)" -->
<!-- id="84D1F09B-5BA6-4D4A-B42F-9CD395175511_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D4C7B248_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>Date:</strong> 2007-01-02 09:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="../../2006/12/2405.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>In reply to:</strong> <a href="../../2006/12/2394.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Welcome back from the holidays!  I'll try to catch up on the right- 
<br>
before-the-holidays e-mail this today...
<br>
<p><p>On Dec 21, 2006, at 6:07 PM, Dennis McRitchie wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build openmpi so that mpicc does not require me to  
</span><br>
<span class="quotelev1">&gt; set up
</span><br>
<span class="quotelev1">&gt; the compiler's environment, and so that any executables built with  
</span><br>
<span class="quotelev1">&gt; mpicc
</span><br>
<span class="quotelev1">&gt; can run without my having to point LD_LIBRARY_PATH to the openmpi lib
</span><br>
<p>We had not really considered this use-case before.  The current  
<br>
assumption (as you undoubtedly figured out) is that on the node where  
<br>
you're invoking OMPI commands, the PATH/LD_LIBRARY_PATH has been  
<br>
setup properly.
<br>
<p>I'm not saying that we can't change this; I'm just trying to give you  
<br>
the rationale for why the wrappers are the way they [currently] are.
<br>
<p><span class="quotelev1">&gt; directory. I made some unsuccessful attempts to accomplish this  
</span><br>
<span class="quotelev1">&gt; (which I
</span><br>
<span class="quotelev1">&gt; describe below), but after building openmpi using the Intel  
</span><br>
<span class="quotelev1">&gt; compiler, I
</span><br>
<span class="quotelev1">&gt; found the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When typing &quot;&lt;path-to-mpicc&gt;/mpicc -showme&quot; I get:
</span><br>
<span class="quotelev1">&gt; &lt;path-to-mpicc&gt;/mpicc: error while loading shared libraries:  
</span><br>
<span class="quotelev1">&gt; libsvml.so:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then set LD_LIBRARY_PATH to point to the Intel compiler  
</span><br>
<span class="quotelev1">&gt; libraries, and
</span><br>
<span class="quotelev1">&gt; now &quot;-showme&quot; works, and returns:
</span><br>
<span class="quotelev1">&gt; icc -I/usr/local/openmpi-1.1.2-intel/include
</span><br>
<span class="quotelev1">&gt; -I/usr/local/openmpi-1.1.2-intel/include/openmpi -pthread
</span><br>
<span class="quotelev1">&gt; -L/usr/local/openmpi-1.1.2-intel/lib -L/usr/ofed/lib -L/usr/ofed/lib64
</span><br>
<span class="quotelev1">&gt; -lmpi -lorte -lopal -libverbs -lrt -lpbs -lnsl -lutil
</span><br>
<p>This behavior reflects the current assumption (above).
<br>
<p><span class="quotelev1">&gt; However...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) When typing &quot;&lt;path-to-mpicc&gt;/mpicc hello.c&quot; I now get:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; The Open MPI wrapper compiler was unable to find the specified  
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; icc in your PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this compiler was either specified at configure time or in
</span><br>
<span class="quotelev1">&gt; one of several possible environment variables.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, this is due to the fact that -showme indicates that mpicc
</span><br>
<span class="quotelev1">&gt; invokes &quot;icc&quot; instead of &quot;&lt;path-to-icc&gt;/icc&quot;. If I now set up the PATH
</span><br>
<span class="quotelev1">&gt; to the Intel compiler, it works. However...
</span><br>
<p>Mmm.  Yes.  Also a good point; another working assumption is that  
<br>
you're setup for your compiler as well (re: PATH, LD_LIBRARY_PATH,  
<br>
LM_LICENSE_FILE, ...etc.).  OMPI *does* save the absolute pathname of  
<br>
the compiler, but we had shied away from using it in the wrappers by  
<br>
default for a few reasons:
<br>
<p>1. You may not have the compiler installed in the same location on  
<br>
all nodes.
<br>
<p>2. There may be other factors that need to be setup in the  
<br>
environment (such as an env variable containing a license file) that  
<br>
the wrapper compilers are not currently setup to handle.
<br>
<p>3. As you noted later, users can specify an absolute path name in CC,  
<br>
CXX (and friends) to configure and that propagates through.  Hence,  
<br>
users have the choice of specifying the full pathname if they want  
<br>
to; OMPI's current setup allows you to do it either way.
<br>
<p>Additionally, be aware that the wrapper compilers are configurable  
<br>
via a text file.  Check out this section of the FAQ: <a href="http://www.open">http://www.open</a>- 
<br>
mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0
<br>
<p><span class="quotelev1">&gt; 3) When I try to run the executable thus created, I get:
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi.so.0: cannot  
</span><br>
<span class="quotelev1">&gt; open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now need to set LD_LIBRARY_PATH to point to the openmpi lib  
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<p>Correct.  The mpirun --prefix option may help here, though (and its  
<br>
synonym -- providing a full absolute path to mpirun).
<br>
<p><span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid problems (1) and (2), I built openmpi with:
</span><br>
<span class="quotelev1">&gt; export CC=/opt/intel/cce/latest/bin/icc
</span><br>
<span class="quotelev1">&gt; export CXX=/opt/intel/cce/latest/bin/icpc
</span><br>
<span class="quotelev1">&gt; export F77=/opt/intel/fce/latest/bin/ifort
</span><br>
<span class="quotelev1">&gt; export FC=/opt/intel/fce/latest/bin/ifort
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;-Wl,-rpath,/opt/intel/cce/latest/lib,-rpath,/opt/intel/fce/ 
</span><br>
<span class="quotelev1">&gt; late
</span><br>
<span class="quotelev1">&gt; st/lib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But while this satisfied the configure script and all its tests, it  
</span><br>
<span class="quotelev1">&gt; did
</span><br>
<span class="quotelev1">&gt; not produce the results I hoped for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid problem (3), I added the following option to configure:
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-Wl,-rpath,/usr/local/openmpi-1.1.2-intel/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was hoping &quot;-showme&quot; would add this to its parameters, but no such
</span><br>
<span class="quotelev1">&gt; luck. Looking at the build output, it seems that the
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags parameter seems to be parsed differently  
</span><br>
<span class="quotelev1">&gt; from how
</span><br>
<span class="quotelev1">&gt; LDFLAGS gets parsed, and I get a compilation line:
</span><br>
<span class="quotelev1">&gt; /opt/intel/cce/latest/bin/icc -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/opt/intel/cce/latest/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/intel/fce/latest/lib -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopal.so -lnsl -lutil -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/local/openmpi-1.1.2-intel/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that the rpath preceding the openmpi lib directory is specified
</span><br>
<span class="quotelev1">&gt; as &quot;--rpath&quot;, which is probably why it is ignored. Is this perhaps a
</span><br>
<span class="quotelev1">&gt; bug?
</span><br>
<p>Hmm.  I'd have to trace into why that happens; that's pretty weird.   
<br>
We put the --with-wrapper-*flags [almost] directly into the wrapper  
<br>
compiler config text files, so there shouldn't be much  
<br>
transmorgification happening there (the only changes I see is a check  
<br>
for uniqueness among the flags -- I could be missing something; it's  
<br>
pretty tangled configure/m4 code).
<br>
<p>I was actually unable to reproduce this behavior in the 1.1 and 1.2  
<br>
series -- the Right flags ended up in the wrapper config file (i.e.,  
<br>
&quot;-Wl,-rpath,/usr/local/openmpi-1.1.2-intel/lib&quot;).  :-(
<br>
<p><span class="quotelev1">&gt; Can you help me accomplish any or all of these goals?
</span><br>
<p>Your best bet is probably to manually modify the wrapper config file(s).
<br>
<p>I can imagine the possibility of making some of the OMPI commands be  
<br>
linked statically (upon demand, of course -- so it would be optional  
<br>
-- and back-end libraries and compilers would have to support it as  
<br>
well) to avoid problem (1), but I'd need to talk to some of the other  
<br>
OMPI developers first to make sure I'm not missing something.  Our  
<br>
build system is so flexible and has to adapt to so many systems that  
<br>
it can be pretty subtle sometimes...
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="../../2006/12/2405.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>In reply to:</strong> <a href="../../2006/12/2394.php">Dennis McRitchie: "[OMPI users] mpicc problems finding libraries (mostly)"</a>
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
