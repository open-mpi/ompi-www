<?
$subject_val = "Re: [OMPI users] MPI-IO, providing buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 11:07:37 2009" -->
<!-- isoreceived="20091219160737" -->
<!-- sent="Sat, 19 Dec 2009 11:07:31 -0500" -->
<!-- isosent="20091219160731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO, providing buffers" -->
<!-- id="3A54EE68-80A3-4906-BE48-F4670BFB2729_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0912171123560.21531_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO, providing buffers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-19 11:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Previous message:</strong> <a href="11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11565.php">Ricardo Reis: "[OMPI users] MPI-IO, providing buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Reply:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, sorry -- there are no &quot;buffered&quot; variants of the MPI_FILE_* functions like there are with point-to-point communications.  So when you do MPI_FILE_WRITE (for example), it'll be directly using the buffer that you pass to it (which is almost always what you want, anyway -- &quot;buffered&quot; modes of communication just force an extra copy, and therefore potentially lower performance).
<br>
<p>That being said, if you need an extra copy so that you can start a non-blocking file operation and then free the old buffer, then you can make a copy yourself and allow the original buffer to be freed.
<br>
<p><p><p>On Dec 17, 2009, at 6:25 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I have a doubt. I'm starting using MPI-IO and was wondering if I can use
</span><br>
<span class="quotelev1">&gt; the MPI_BUFFER_ATTACH to provide the necessary IO buffer (or will it use
</span><br>
<span class="quotelev1">&gt; the array I'm passing the MPI_Write...??)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   many thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt;   Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Previous message:</strong> <a href="11608.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11565.php">Ricardo Reis: "[OMPI users] MPI-IO, providing buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Reply:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
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
