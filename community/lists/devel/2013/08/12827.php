<?
$subject_val = "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 08:47:13 2013" -->
<!-- isoreceived="20130830124713" -->
<!-- sent="Fri, 30 Aug 2013 08:47:11 -0400" -->
<!-- isosent="20130830124711" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS" -->
<!-- id="CANFHntDjVHfzXaJiLKP1JtpXFj3CYvBLEiNGG1kh7ne=GFsUyw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37568568-F00E-4990-A16C-EDB1E4FF959A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-30 08:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12828.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so it happens to be that installing lt_dladvise package (libltdl) using yum
<br>
is quite easy a task but I don't have sudo powers.
<br>
<p>I found the following other solution, i.e. to distribute libltdl with the a
<br>
package (here package will be openmpi - which means that I have to change
<br>
to aclocal.m4 of openmpi)
<br>
<p><a href="http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html">http://www.gnu.org/software/libtool/manual/html_node/Distributing-libltdl.html</a>
<br>
<p>Should I do that or is there any other way?
<br>
<p>Thanks
<br>
Bibrak
<br>
<p><p>On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m4
</span><br>
<span class="quotelev1">&gt; autoconfig
</span><br>
<span class="quotelev1">&gt; automake
</span><br>
<span class="quotelev1">&gt; libtools
</span><br>
<span class="quotelev1">&gt; and flex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did all that but again the same issue that it can't load the libraries.
</span><br>
<span class="quotelev1">&gt; Any remedies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev1">&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bibrak
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p>On Thu, Aug 29, 2013 at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; you need to install the lt_dladvise package as well
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2013, at 6:18 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following runtime error while running Java MPI jobs. I have
</span><br>
<span class="quotelev1">&gt; check the previous answers to the mailing list regarding this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The solutions were to install libtool and configure-compile-and-install
</span><br>
<span class="quotelev1">&gt; openmpi again this time with the latest version of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m4
</span><br>
<span class="quotelev1">&gt; autoconfig
</span><br>
<span class="quotelev1">&gt; automake
</span><br>
<span class="quotelev1">&gt; libtools
</span><br>
<span class="quotelev1">&gt; and flex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did all that but again the same issue that it can't load the libraries.
</span><br>
<span class="quotelev1">&gt; Any remedies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -np 2 java Hello
</span><br>
<span class="quotelev1">&gt; [compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; [compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[48748,1],1]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bibrak
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12828.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
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
