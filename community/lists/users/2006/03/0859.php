<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 08:26:28 2006" -->
<!-- isoreceived="20060315132628" -->
<!-- sent="Wed, 15 Mar 2006 08:26:22 -0500" -->
<!-- isosent="20060315132622" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)" -->
<!-- id="1A48E393-8ED4-42BE-95A8-74F0E01DDE39_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C03D2D39.2B9%ccurry_at_numenta.com" -->
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
<strong>Date:</strong> 2006-03-15 08:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2006, at 5:32 AM, Charlie Curry wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone had luck building OpenMPI as a universal binary on Mac  
</span><br>
<span class="quotelev1">&gt; OS X?
</span><br>
<span class="quotelev1">&gt; The only trouble shows up when trying to build opal's asm sub-module.
</span><br>
<span class="quotelev1">&gt; If there is an official solution, could you mail it to me, as I've  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev1">&gt; forced to use a really ugly &quot;compile twice and lipo&quot; step.
</span><br>
<p>At present, it's the compile twice and lipo.  We're actively talking  
<br>
to Apple about how to make it possible to build Open MPI directly as  
<br>
a Universal Binary, but there are some stumbling blocks in the  
<br>
process, among them the fact that Apple decided that C++ bool should  
<br>
have different size and alignment on PPC and i386 versions of Mac OS  
<br>
X and the assembly issue you ran into.  It is unlikely that there is  
<br>
an easy workaround in the build system right now - we're going to  
<br>
have to add code specifically to support this setup.
<br>
<p>If it's any help, there is a script in &lt;srcdir&gt;/contrib/dist/macosx/  
<br>
that will take an Open MPI tarball and produce a .pkg installer of a  
<br>
Universal Binary of Open MPI.  It still uses lipo, but it's less  
<br>
typing ;).  The parameters to configure and architectures built can  
<br>
be tweaked with some changes to the first couple lines of the script.
<br>
<p>Now for the bad news...  Open MPI 1.0.1 can not run at all in a  
<br>
heterogeneous environment.  The run-time has been fixed in the  
<br>
upcoming Open MPI 1.0.2 release, so the run-time can run in  
<br>
heterogeneous environments with the same word size (ie all 32 bit or  
<br>
all 64 bit), but the MPI layer is not endian clean.  So you would  
<br>
have to compile your application just for ppc or just for i386 and  
<br>
never mix the two in the same job.
<br>
<p>We hope that Open MPI 1.1, which should be released sometime in the  
<br>
first half of 2006, will properly support heterogeneous  
<br>
environments.  This includes mixed 32 bit / 64 bit run-time  
<br>
environment and machines with different endianness.  Presently, this  
<br>
is all implemented (but lightly tested) with the exception of the MPI  
<br>
datatype layer, which is not yet endian clean.
<br>
<p><p>Brian
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
<li><strong>Next message:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
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
