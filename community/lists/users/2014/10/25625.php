<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 08:37:43 2014" -->
<!-- isoreceived="20141028123743" -->
<!-- sent="Tue, 28 Oct 2014 12:37:42 +0000" -->
<!-- isosent="20141028123742" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers" -->
<!-- id="EB33190F-4A2C-4A22-B354-A0DD9A0A42FD_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D073E550.1B62%pabosle_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 08:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like your intel compiler installation is broken -- these types of &quot;present but not compilable&quot; kinds of errors usually indicate that the compiler itself has some kind of local conflict that is unrelated to Open MPI (that's why we put those tests in OMPI's configure -- so that we can detect such problems early/during configure vs. during the build of Open MPI itself).
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Oct 27, 2014, at 2:06 PM, Bosler, Peter Andrew &lt;pabosle_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to build OpenMPI with the Intel 14.01 compilers with the following configure line
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.8.3/intel-14.01 CC=icc CXX=icpc FC=ifort
</span><br>
<span class="quotelev1">&gt; On a 6-core 3.5 GHz Intel Xeon E5 Mac Pro running Mac OS X 10.9.5.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure outputs a pthread error, complaining that different threads don&#146;t have the same PID.
</span><br>
<span class="quotelev1">&gt; I also get the same error with OpenMPI 1.8.2 and the Intel compilers.   
</span><br>
<span class="quotelev1">&gt; I was able to build OpenMPI 1.8.3 with both LLVM 5.1 and GCC 4.9 so something is going wrong with the Intel compilers threading interface.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, OpenMPI 1.8.3 and the Intel 14.01 compilers work fine on my Macbook pro : same OS, different CPU (2.8 Ghz Intel Core i7), same configure line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an environment variable or configure option that I need to set to avoid this error on the Mac Pro?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pete Bosler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. The specific warnings and error from openmpi-1.8.3/configure are the following (and the whole output file is attached):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#133; Lots of output &#133;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ulimit.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ulimit.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ulimit.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ulimit.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ulimit.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
</span><br>
<span class="quotelev1">&gt; configure: WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt; &#133; Lots more output &#133;
</span><br>
<span class="quotelev1">&gt; checking if threads have different pids (pthreads on linux)... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: This version of Open MPI only supports environments where
</span><br>
<span class="quotelev1">&gt; configure: WARNING: threads have the same PID.  Please use an older version of
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI if you need support on systems with different
</span><br>
<span class="quotelev1">&gt; configure: WARNING: PIDs for threads in the same process.  Open MPI 1.4.x
</span><br>
<span class="quotelev1">&gt; configure: WARNING: supports such systems, as does at least some versions the
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI 1.5.x series.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;configureOMPI-1.8.3-Intel-14.01.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25618.php">http://www.open-mpi.org/community/lists/users/2014/10/25618.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25626.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init seems to hang, but works after a, minute or two"</a>
<li><strong>Previous message:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
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
