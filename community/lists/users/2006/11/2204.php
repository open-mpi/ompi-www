<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 16:30:41 2006" -->
<!-- isoreceived="20061121213041" -->
<!-- sent="Tue, 21 Nov 2006 16:31:21 -0500" -->
<!-- isosent="20061121213121" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] removing hard-coded paths from OpenMPI shared	libraries" -->
<!-- id="45637029.8060100_at_fluent.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3A645291-9D27-4556-A085-254305BAF673_at_cisco.com" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 16:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2199.php">Adam Young: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the response:
<br>
<p><span class="quotelev1">&gt; mpirun --prefix /otherdir ...
</span><br>
<p><span class="quotelev1">&gt; This might be good enough to do what you need.
</span><br>
<p>I don't think this will work (or is all that is needed to work).  We are 
<br>
actually already using the --prefix option to mpirun and still run into 
<br>
the problem.
<br>
<p>When fluent is distributed, we typically package/distribute all the 
<br>
runtime MPI files that it needs so that the application is 
<br>
self-contained.  The distribution directory for the MPIs is different 
<br>
from where the MPIs were originally built/installed (and will definitely 
<br>
be different still when the user installs the application).   We use the 
<br>
common approach of setting LD_LIBRARY_PATH (or --prefix or other) in a 
<br>
runtime wrapper script to reflect the final installation location and to 
<br>
pick shared libraries at runtime.   Thus, the application (and the MPI) 
<br>
can be infinitely redistributed/installed and still function.  Some MPIs 
<br>
have a runtime-settable environment variable to define the final MPI 
<br>
installation location.  For instance, HP-MPI use MPI_ROOT to define the 
<br>
installation location.
<br>
<p>OpenMPI seems to be a little different because the final installation 
<br>
location seems to be fixed at compile time.   When the libraries are 
<br>
compiled, the installation location is encoded into the OpenMPI shared 
<br>
libraries by the use of --rpath during linking (it's encode into 
<br>
libmpi.so and many shared libs under lib/openmpi).  Thus, the 
<br>
installation doesn't seem to be able to be moved after it is originally 
<br>
installed.
<br>
<p>For many users this works out well, but an option to build openMPI so 
<br>
that it has the flexibility to be moved would be very nice :-).   I was 
<br>
able to play with the libtool file to get most of OpenMPI to build 
<br>
without --rpath (I think ompi_info didn't build), so there may not be 
<br>
too much involved.  Whomever setup the shared library part of the build 
<br>
process may know exactly what is needed.  I can share what I've done if 
<br>
it helps.
<br>
<p>-Patrick 
<br>
<p><p><p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;This is certainly the default for GNU Libtool-build shared libraries  
</span><br>
<span class="quotelev1">&gt;(such as Open MPI).  Ralf W -- is there a way to disable this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As a sidenote, we added the &quot;--prefix&quot; option to mpirun to be able to  
</span><br>
<span class="quotelev1">&gt;override the LD_LIBRARY_PATH on remote nodes for circumstances like  
</span><br>
<span class="quotelev1">&gt;this.  For example, say you build/install to /somedir, but then  
</span><br>
<span class="quotelev1">&gt;distribute Open MPI and the user installs it to /otherdir.  I know  
</span><br>
<span class="quotelev1">&gt;almost nothing about Fluent :-(, but do you wrap the call to mpirun  
</span><br>
<span class="quotelev1">&gt;in a script/executable somewhere?  Such that you could hide:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	mpirun --prefix /otherdir ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This might be good enough to do what you need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Would that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 20, 2006, at 2:54 PM, Patrick Jessee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello.  I'm wondering if anyone knows of a way to get OpenMPI to  
</span><br>
<span class="quotelev2">&gt;&gt;compile shared libraries without hard-coding the installation  
</span><br>
<span class="quotelev2">&gt;&gt;directory in them.  After compiling and installing OpenMPI, the  
</span><br>
<span class="quotelev2">&gt;&gt;shared libraries have the installation libraries hard-coded in  
</span><br>
<span class="quotelev2">&gt;&gt;them.  For instance:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;$ ldd libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt;       liborte.so.0 =&gt; /usr/local/fluent/develop/multiport4.4/ 
</span><br>
<span class="quotelev2">&gt;&gt;packages/lnamd64/openmpi/openmpi-1.1.2/lib/liborte.so.0  
</span><br>
<span class="quotelev2">&gt;&gt;(0x0000002a956ea000)
</span><br>
<span class="quotelev2">&gt;&gt;       libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000002a95852000)
</span><br>
<span class="quotelev2">&gt;&gt;       libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000002a95968000)
</span><br>
<span class="quotelev2">&gt;&gt;       libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000002a95a6c000)
</span><br>
<span class="quotelev2">&gt;&gt;       libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
</span><br>
<span class="quotelev2">&gt;&gt;(0x0000002a95bc4000)
</span><br>
<span class="quotelev2">&gt;&gt;       libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000002a95cd8000)
</span><br>
<span class="quotelev2">&gt;&gt;       libopal.so.0 =&gt; /usr/local/fluent/develop/multiport4.4/ 
</span><br>
<span class="quotelev2">&gt;&gt;packages/lnamd64/openmpi/openmpi-1.1.2/lib/libopal.so.0  
</span><br>
<span class="quotelev2">&gt;&gt;(0x0000002a95f00000)
</span><br>
<span class="quotelev2">&gt;&gt;       /lib64/ld-linux-x86-64.so.2 (0x000000552aaaa000)
</span><br>
<span class="quotelev2">&gt;&gt;       libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000002a9605a000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In the above, &quot;/usr/local/fluent/develop/multiport4.4/packages/ 
</span><br>
<span class="quotelev2">&gt;&gt;lnamd64/openmpi/openmpi-1.1.2/lib&quot; is hardcoded into libmpi.so  
</span><br>
<span class="quotelev2">&gt;&gt;using --rpath when libmpi.so is compiled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This is problematic because the installation cannot be moved after  
</span><br>
<span class="quotelev2">&gt;&gt;it is installed.  It is often useful to compile/install libraries  
</span><br>
<span class="quotelev2">&gt;&gt;on one machine and then move the libraries to a different location  
</span><br>
<span class="quotelev2">&gt;&gt;on other machines (of course, LD_LIBRARY_PATH or some means then  
</span><br>
<span class="quotelev2">&gt;&gt;needs to be used to pick up libs are runtime).  This relocation is  
</span><br>
<span class="quotelev2">&gt;&gt;also useful when redistributing the MPI installation with an  
</span><br>
<span class="quotelev2">&gt;&gt;application.  The hard-coded paths prohibit this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I've tried to modify the &quot;--rpath&quot; argument in libtool and opal/ 
</span><br>
<span class="quotelev2">&gt;&gt;libltdl/libtool, but have not gotten this to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Has anyone else had experience with this?  (I'm building OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt;1.1.2 on linux x86_64.)  Thanks in advance for any potential help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;pj.vcf&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Adam Moody: "[OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2196.php">Jeff Squyres: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2199.php">Adam Young: "Re: [OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
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
