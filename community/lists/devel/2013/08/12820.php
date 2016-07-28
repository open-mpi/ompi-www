<?
$subject_val = "[OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 09:18:39 2013" -->
<!-- isoreceived="20130829131839" -->
<!-- sent="Thu, 29 Aug 2013 09:18:38 -0400" -->
<!-- isosent="20130829131838" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="[OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS" -->
<!-- id="CANFHntDjUpTms=035ygaK6a31TW9r90Hc28wvg5VOFGRuK9AUg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 09:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have the following runtime error while running Java MPI jobs. I have
<br>
check the previous answers to the mailing list regarding this issue.
<br>
<p>The solutions were to install libtool and configure-compile-and-install
<br>
openmpi again this time with the latest version of
<br>
<p>m4
<br>
autoconfig
<br>
automake
<br>
libtools
<br>
and flex
<br>
<p>I did all that but again the same issue that it can't load the libraries.
<br>
Any remedies?
<br>
<p><p><p>-bash-3.2$ mpirun -np 2 java Hello
<br>
[compute-0-21.local:14205] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
<br>
JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
<br>
[compute-0-21.local:14204] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
<br>
JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[48748,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>-Bibrak
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Reply:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
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
