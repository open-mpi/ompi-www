<?
$subject_val = "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 01:53:50 2013" -->
<!-- isoreceived="20130902055350" -->
<!-- sent="Mon, 2 Sep 2013 01:53:48 -0400" -->
<!-- isosent="20130902055348" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS" -->
<!-- id="CANFHntBixpex_xaXh-ni84SWpWZChKSPpusFrtWtUnS-t9Rm7g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F847F48_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-02 01:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes you are right, it does distribute the ltdl in the source library. But
<br>
isn't it installed by default when OpenMPI is installed?
<br>
<p><p><p><p>On Sat, Aug 31, 2013 at 7:20 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I'm not sure what you're asking -- Open MPI already distributes with the
</span><br>
<span class="quotelev1">&gt; libltdl library included in the source tarball...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2013, at 7:47 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; so it happens to be that installing lt_dladvise package (libltdl) using
</span><br>
<span class="quotelev1">&gt; yum is quite easy a task but I don't have sudo powers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found the following other solution, i.e. to distribute libltdl with
</span><br>
<span class="quotelev1">&gt; the a package (here package will be openmpi - which means that I have to
</span><br>
<span class="quotelev1">&gt; change to aclocal.m4 of openmpi)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html">http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should I do that or is there any other way?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtools
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and flex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did all that but again the same issue that it can't load the
</span><br>
<span class="quotelev1">&gt; libraries. Any remedies?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Bibrak
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak Qamar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtools
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and flex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did all that but again the same issue that it can't load the
</span><br>
<span class="quotelev1">&gt; libraries. Any remedies?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Bibrak
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Bibrak Qamar
<br>
<p><p><p>On Sat, Aug 31, 2013 at 7:20 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I'm not sure what you're asking -- Open MPI already distributes with the
</span><br>
<span class="quotelev1">&gt; libltdl library included in the source tarball...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2013, at 7:47 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; so it happens to be that installing lt_dladvise package (libltdl) using
</span><br>
<span class="quotelev1">&gt; yum is quite easy a task but I don't have sudo powers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found the following other solution, i.e. to distribute libltdl with
</span><br>
<span class="quotelev1">&gt; the a package (here package will be openmpi - which means that I have to
</span><br>
<span class="quotelev1">&gt; change to aclocal.m4 of openmpi)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html">http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should I do that or is there any other way?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtools
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and flex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did all that but again the same issue that it can't load the
</span><br>
<span class="quotelev1">&gt; libraries. Any remedies?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Bibrak
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak Qamar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; m4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtools
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and flex
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did all that but again the same issue that it can't load the
</span><br>
<span class="quotelev1">&gt; libraries. Any remedies?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Bibrak
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
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
