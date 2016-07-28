<?
$subject_val = "Re: [OMPI users] Problem with the receive buffer size?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  7 06:51:42 2010" -->
<!-- isoreceived="20100907105142" -->
<!-- sent="Tue, 7 Sep 2010 06:34:33 -0400" -->
<!-- isosent="20100907103433" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with the receive buffer size?" -->
<!-- id="DFBE4A7E-51C3-4E2A-9C54-06D7DEB56C5D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="755826.42341.qm_at_web24813.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with the receive buffer size?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-07 06:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Previous message:</strong> <a href="14182.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings"</a>
<li><strong>In reply to:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're using the stl, you should probably be using boost.MPI. Memory usage within the stl is tricky. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Sep 4, 2010, at 9:57 AM, dbbmyx-franzxaver_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some problems with my mpi-project.
</span><br>
<span class="quotelev1">&gt; I try to send some information from one process to another one. To realize this I use the Issend and the Iprobe and Ireceive Operation.
</span><br>
<span class="quotelev1">&gt; When using the Issend and the Ireceive operation I use the MPI_CHAR datatype because I try to send/receive a serialized object as a std::string. This works for most operations. But when I send a larger string it seems to be that only a part of it is received at the other process. The Iprobe operation set the size of the message correctly. But the receiving string ist not as large as the sending one.
</span><br>
<span class="quotelev1">&gt; Is there any size-limits at the buffers? Is it possible to change the buffer-size?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am thankful for all your informations
</span><br>
<span class="quotelev1">&gt; Greetings Franz Xaver
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<li><strong>Previous message:</strong> <a href="14182.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings"</a>
<li><strong>In reply to:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
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
