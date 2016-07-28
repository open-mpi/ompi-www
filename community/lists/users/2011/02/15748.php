<?
$subject_val = "Re: [OMPI users] Problems with mpicc-wrapper-data.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 10:07:52 2011" -->
<!-- isoreceived="20110225150752" -->
<!-- sent="Fri, 25 Feb 2011 10:07:47 -0500" -->
<!-- isosent="20110225150747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with mpicc-wrapper-data.txt" -->
<!-- id="57D8B3F1-54C3-4C39-90C1-51D49AFAF9AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1298643683.6143.89.camel_at_pyren.uio.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with mpicc-wrapper-data.txt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 10:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
<li><strong>In reply to:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the entire contents of /site/VERSIONS/openmpi-1.4.3.intel.test/share/openmpi/mpicc-wrapper-data.txt?
<br>
<p><p>On Feb 25, 2011, at 9:21 AM, Ole Widar Saastad wrote:
<br>
<p><span class="quotelev1">&gt; I get the follwing error (it is more like a waring, the mpicc produce
</span><br>
<span class="quotelev1">&gt; output):
</span><br>
<span class="quotelev1">&gt; [olews_at_login-0-1 $ /site/VERSIONS/openmpi-1.4.3.intel.test/bin/mpicc
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:14689] keyval parser: error 1 reading file /site/VERSIONS/openmpi-1.4.3.intel.test/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev1">&gt;  # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt; gcc: no input files
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The /site/VERSIONS/openmpi-1.4.3.intel.test/share/openmpi/mpicc-wrapper-data.txt is read, verified by chaning it and noticing it's effect. It works fint, but many users are quite unhappy wit this error. I have used strace to see that all the characters get read (322 from strace and 322 from wc).
</span><br>
<span class="quotelev1">&gt; It looks like there is something internal in the executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a fix for apparently bug ? I searched the mailing list, but
</span><br>
<span class="quotelev1">&gt; most information I got was of the type configure/make clean/make/make
</span><br>
<span class="quotelev1">&gt; install and this is something I have tried before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Background :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have several installations of OpenMPI installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They reside at (showing mpicc location) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.2.8.gnu/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.2.8.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.3.3.gnu/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.3.3.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.3.3.intel.ipath/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.3.3.pgi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.1.gnu/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.1.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.2.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.gnu/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.gnu32/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.intel.test/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.open64/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.3.pgi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.intel/bin/mpicc
</span><br>
<span class="quotelev1">&gt; /site/VERSIONS/openmpi-1.4.intel.icc/bin/mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With corresponding modules to set up the correct path and library path.
</span><br>
<span class="quotelev1">&gt; set modulefile [lrange [split [module-info name] {/}] 0 0]
</span><br>
<span class="quotelev1">&gt; set apphome    /site/VERSIONS/openmpi-1.4.3.intel.test
</span><br>
<span class="quotelev1">&gt; set appname    OpenMPI
</span><br>
<span class="quotelev1">&gt; set appurl     <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module-whatis   &quot;A High Performance Message Passing Library&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; setenv          MPI_TYPE          openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prepend-path    PATH            $apphome/bin
</span><br>
<span class="quotelev1">&gt; prepend-path    LD_LIBRARY_PATH $apphome/lib
</span><br>
<span class="quotelev1">&gt; prepend-path    LD_LIBRARY_PATH $apphome/lib/openmpi
</span><br>
<span class="quotelev1">&gt; prepend-path    MANPATH         $apphome/share/man
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ole W. Saastad, dr. scient.
</span><br>
<span class="quotelev1">&gt; Scientific Computing Group, USIT, University of Oslo
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc.uio.no">http://hpc.uio.no</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15747.php">Jeff Squyres: "Re: [OMPI users] Fatal error while running the code"</a>
<li><strong>In reply to:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
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
