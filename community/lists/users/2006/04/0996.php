<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 11:18:56 2006" -->
<!-- isoreceived="20060410151856" -->
<!-- sent="Mon, 10 Apr 2006 11:18:55 -0400" -->
<!-- isosent="20060410151855" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="CCC9F5AE-BD33-4DB5-8C18-2F03A6FF57D7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7EE20A96-3638-44AF-A043-591AC890E6B5_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-10 11:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0997.php">Charles Williams: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>In reply to:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2006, at 11:07 AM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; (flashc 105%) mpiexec -n 4 ./send4
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open: /
</span><br>
<span class="quotelev1">&gt; lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/
</span><br>
<span class="quotelev1">&gt; scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so) (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [flashc.lanl.gov:09921] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; libbproc.so.4: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; bproc_nodelist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem now looks like /lib/libc.so.6 is not longer available.
</span><br>
<span class="quotelev1">&gt; Indeed, it is available on the compiler nodes but it cannot be found
</span><br>
<span class="quotelev1">&gt; on the backend nodes - whoops!
</span><br>
<p>Well, that's interesting.  Is this on a bproc platform?  If so, you  
<br>
might be best off configuring with either --enable-static or -- 
<br>
disable-dlopen.  Either one will prevent components from loading,  
<br>
which doesn't seem to always work well.
<br>
<p>Also, it looks like at least one of the components has a different  
<br>
libc its linked against than the others.  This makes me think that  
<br>
perhaps you have some old components from a previous build in your  
<br>
tree.  You might want to completely remove your installation prefix  
<br>
(or lib/openmpi in your installation prefix) and run make install again.
<br>
<p>Are you no longer seeing the errors about epoll?
<br>
<p><span class="quotelev1">&gt; The other problem is that the -m32 flag didn't make it into mpicc for
</span><br>
<span class="quotelev1">&gt; some reason.
</span><br>
<p>This is expected behavior.  There are going to be more and more cases  
<br>
where Open MPI provides one wrapper compiler that does the right  
<br>
thing whether the user passes in -m32 / -m64 (or any of the vendor  
<br>
options for doing the same thing).  So it will be increasingly  
<br>
impossible for us to know what to add (but as Jeff said, you can tell  
<br>
configure to always add -m32 to the wrapper compilers if you want).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0997.php">Charles Williams: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="0995.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteronplatform"</a>
<li><strong>In reply to:</strong> <a href="0993.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
