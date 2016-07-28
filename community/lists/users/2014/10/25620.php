<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 14:30:01 2014" -->
<!-- isoreceived="20141027183001" -->
<!-- sent="Mon, 27 Oct 2014 11:29:57 -0700" -->
<!-- isosent="20141027182957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers" -->
<!-- id="EB4A3239-97AB-453C-84B7-8F342040124E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 14:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>In reply to:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I just tested with the Intel 15 compilers on Mac 10.10 and it works fine, so apparently the problem has been fixed. You should be able to upgrade to the 15 versions, so that might be the best solution
<br>
<p><p><span class="quotelev1">&gt; On Oct 27, 2014, at 11:06 AM, Bosler, Peter Andrew &lt;pabosle_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good morning,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>In reply to:</strong> <a href="25618.php">Bosler, Peter Andrew: "[OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
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
