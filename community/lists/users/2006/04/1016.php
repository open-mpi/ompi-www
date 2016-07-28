<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 14:47:32 2006" -->
<!-- isoreceived="20060411184732" -->
<!-- sent="Tue, 11 Apr 2006 12:47:28 -0600" -->
<!-- isosent="20060411184728" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="793BE40A-9DE7-4DBF-906D-0F3B5DA99E15_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCC9F5AE-BD33-4DB5-8C18-2F03A6FF57D7_at_open-mpi.org" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 14:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>In reply to:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect that to get this to work for bproc, then we will have to  
<br>
build mpirun as 64-bit and the library as 32-bit.  That's because a  
<br>
32-bit compiled mpirun calls functions in the 32-bit /usr/lib/ 
<br>
libbroc.so which don't appear to function when the system is booted  
<br>
64-bit.
<br>
<p>Of course that would mean we need heterogeneous support to run on a  
<br>
single homogeneous system!  Will this work on the 1.0 branch?
<br>
<p>An alternative worth thinking about is to bypass the library calls  
<br>
and start processes using a system() call to invoke the bpsh  
<br>
command.  This is a 64-bit executable linked with /usr/lib64/ 
<br>
libbproc.so and which successfully launches both 32- and 64-bit  
<br>
executables.
<br>
<p>I'm currently trying to solve the same issue for LA-MPI :(
<br>
<p>David
<br>
<p><p>On Apr 10, 2006, at 9:18 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 10, 2006, at 11:07 AM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (flashc 105%) mpiexec -n 4 ./send4
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open: /
</span><br>
<span class="quotelev2">&gt;&gt; lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/
</span><br>
<span class="quotelev2">&gt;&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_linux.so) (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev2">&gt;&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; bproc_nodelist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem now looks like /lib/libc.so.6 is not longer available.
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, it is available on the compiler nodes but it cannot be found
</span><br>
<span class="quotelev2">&gt;&gt; on the backend nodes - whoops!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, that's interesting.  Is this on a bproc platform?  If so, you
</span><br>
<span class="quotelev1">&gt; might be best off configuring with either --enable-static or --
</span><br>
<span class="quotelev1">&gt; disable-dlopen.  Either one will prevent components from loading,
</span><br>
<span class="quotelev1">&gt; which doesn't seem to always work well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, it looks like at least one of the components has a different
</span><br>
<span class="quotelev1">&gt; libc its linked against than the others.  This makes me think that
</span><br>
<span class="quotelev1">&gt; perhaps you have some old components from a previous build in your
</span><br>
<span class="quotelev1">&gt; tree.  You might want to completely remove your installation prefix
</span><br>
<span class="quotelev1">&gt; (or lib/openmpi in your installation prefix) and run make install  
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you no longer seeing the errors about epoll?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other problem is that the -m32 flag didn't make it into mpicc for
</span><br>
<span class="quotelev2">&gt;&gt; some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is expected behavior.  There are going to be more and more cases
</span><br>
<span class="quotelev1">&gt; where Open MPI provides one wrapper compiler that does the right
</span><br>
<span class="quotelev1">&gt; thing whether the user passes in -m32 / -m64 (or any of the vendor
</span><br>
<span class="quotelev1">&gt; options for doing the same thing).  So it will be increasingly
</span><br>
<span class="quotelev1">&gt; impossible for us to know what to add (but as Jeff said, you can tell
</span><br>
<span class="quotelev1">&gt; configure to always add -m32 to the wrapper compilers if you want).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>In reply to:</strong> <a href="0996.php">Brian Barrett: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1017.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
