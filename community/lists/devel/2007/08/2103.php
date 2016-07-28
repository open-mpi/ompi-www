<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 09:48:56 2007" -->
<!-- isoreceived="20070810134856" -->
<!-- sent="Fri, 10 Aug 2007 06:47:55 -0700" -->
<!-- isosent="20070810134755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace within OpenMPI" -->
<!-- id="FC4C9DD4-EE72-4DC8-A5AC-A4437A697D25_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200708101454.12751.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2007-08-10 09:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2104.php">Jeff Squyres: "[OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2102.php">Andreas Kn&#252;pfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2102.php">Andreas Kn&#252;pfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2007, at 5:54 AM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; Finally, VampirTrace is usable from within OpenMPI. From the
</span><br>
<span class="quotelev1">&gt; tmp/vt-integration/ repository you can get an extended OMPI version:
</span><br>
<p>Thanks for doing this.  Although I promised to help, I've had zero  
<br>
time to do so recently.  :-(
<br>
<p><span class="quotelev1">&gt; #&gt; svn co <a href="http://svn.open-mpi.org/svn/ompi/tmp/vt-integration">http://svn.open-mpi.org/svn/ompi/tmp/vt-integration</a>
</span><br>
<span class="quotelev1">&gt; #&gt; cd vt-integration
</span><br>
<span class="quotelev1">&gt; #&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; #&gt; ./configure --prefix=/tmp/openmpi_with_vampirtrace/
</span><br>
<span class="quotelev1">&gt; #&gt; make
</span><br>
<span class="quotelev1">&gt; #&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you should be able to compile a small MPI example with 'mpicc'  
</span><br>
<span class="quotelev1">&gt; and run it
</span><br>
<span class="quotelev1">&gt; with 'mpirun'. Now simply change 'mpicc' to 'mpicc-vt'. The run  
</span><br>
<span class="quotelev1">&gt; command is
</span><br>
<span class="quotelev1">&gt; still the default 'mpirun'. If you run the new executable again  
</span><br>
<span class="quotelev1">&gt; you'll find
</span><br>
<span class="quotelev1">&gt; an 'a.otf' file plus 'a.0.def' plus some 'a.*.events' files. Some  
</span><br>
<span class="quotelev1">&gt; files may
</span><br>
<span class="quotelev1">&gt; have a '.z' suffix which is optional (additional zlib compression).
</span><br>
<p>Sweet.
<br>
<p><span class="quotelev1">&gt; There are a few issues left however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - we need to add a ''---disable-vampirtrace&quot; configure parameter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - So far, the configure option '--platform=optimized' makes  
</span><br>
<span class="quotelev1">&gt; vampirtrace use
</span><br>
<span class="quotelev1">&gt; the same very strict compiler warnings as openmpi. thus, it will  
</span><br>
<span class="quotelev1">&gt; stop with an
</span><br>
<span class="quotelev1">&gt; error because of &quot;-Werror'.
</span><br>
<span class="quotelev1">&gt; we'll check this but so far without '--platform=optimized'  
</span><br>
<span class="quotelev1">&gt; everything is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Sometimes vampirtrace detects another installed MPI lib and wants  
</span><br>
<span class="quotelev1">&gt; to link it
</span><br>
<span class="quotelev1">&gt; which results in linker errors when building your mpi app. This is  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev1">&gt; vampirtrace is configured and build before mpi is ready, which is  
</span><br>
<span class="quotelev1">&gt; unusual.
</span><br>
<span class="quotelev1">&gt; this is another thing for us to fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 'make dist' seems to work fine including all necessary  
</span><br>
<span class="quotelev1">&gt; vampirtrace files.
</span><br>
<span class="quotelev1">&gt; maybe this needs to be tested, however
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - updating the included vampirtrace version should be as simple as  
</span><br>
<span class="quotelev1">&gt; extracting
</span><br>
<span class="quotelev1">&gt; a new tarball in the subdir 'tracing'. we  could even check + fetch  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; latest tarball via wget when one does 'make update-vampirtrace in
</span><br>
<span class="quotelev1">&gt; subdir 'tracing'. what's your opinion?
</span><br>
<p>It might be easier to just allow compiling / linking against a VT  
<br>
that is outside of the OMPI tree.
<br>
<p><span class="quotelev1">&gt; - we need an new configure option which simply passes special optionto
</span><br>
<span class="quotelev1">&gt; vampirtrace's configure script
</span><br>
<p>We'll probably also want to put VT into the /vendor branch (per  
<br>
<a href="http://svnbook.red-bean.com/nightly/en/svn">http://svnbook.red-bean.com/nightly/en/svn</a>- 
<br>
book.html#svn.advanced.vendorbr).
<br>
<p><span class="quotelev1">&gt; So much for the most important issues. If you're interested please  
</span><br>
<span class="quotelev1">&gt; try it and
</span><br>
<span class="quotelev1">&gt; send us your results. @Jeff, can we give read access to the
</span><br>
<span class="quotelev1">&gt; tmp/vt-integration/ subtree of SVN?
</span><br>
<p>I think I set the SVN privs right; the public should now be able to  
<br>
read this directory.
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
<li><strong>Next message:</strong> <a href="2104.php">Jeff Squyres: "[OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2102.php">Andreas Kn&#252;pfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2102.php">Andreas Kn&#252;pfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
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
