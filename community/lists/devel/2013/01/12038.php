<?
$subject_val = "Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 18:19:59 2013" -->
<!-- isoreceived="20130128231959" -->
<!-- sent="Mon, 28 Jan 2013 23:19:52 +0000" -->
<!-- isosent="20130128231952" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CB98FA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMfhe-sHLGiXHj9FXh3YJeVw1faRnTb7Txu2BkJYxZS69C53iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 18:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a reason you're using buffered sends?  They're generally pretty evil:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil/">http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil/</a>
<br>
<p>FWIW, you can probably install Open MPI 1.6.3 yourself -- you can just install it under $HOME, or some other directory that is available on all compute nodes.  Then just set your PATH and LD_LIBRARY_PATH to point to your install instead of the system install.
<br>
<p>This would at least let you know if upgrading to 1.6.3 will fix your issue.
<br>
<p><p><p>On Jan 28, 2013, at 12:22 PM, Jeremy McCaslin &lt;jomccaslin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the feedback.  I actually just changed the repeated probing for a message to a blocking MPI_RECV, as the processor waiting to receive does nothing but repeatedly probe until the message is there anyway.  This also works, and it makes more sense to do it this way.  However, this did not fix my hanging issue.  I am wondering if it has something to do with the size of my buffer used in MPI_BUFFER_ATTACH.  I believe I am following the proper MPI_BSEND_OVERHEAD protocol.  I am waiting on the admins to install openmpi-1.6.3, and hoping that maybe this will fix my issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 26, 2013 at 7:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; First off, 1.4.4 is fairly ancient.  You might want to try upgrading to 1.6.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, you might want to use non-blocking receives for B such that you can MPI_WAITALL, or perhaps MPI_WAITSOME or MPI_WAITANY to wait for some/all of the values to arrive in B.  This keeps any looping down in MPI (i.e., as close to the hardware as possible).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2013, at 3:21 PM, Jeremy McCaslin &lt;jomccaslin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to figure out the most appropriate MPI calls for a certain portion of my code.  I will describe the situation here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Each cell (i,j) of my array A is being updated by a calculation that depends on the values of 1 or 2 of the 4 possible neighbors A(i+1,j), A(i-1,j), A(i,j+1), and A(i,j-1).  Say, for example, A(i,j)=A(i-1,j)*A(i,j-1).  The thing is, the values of the neighbors A(i-1,j) and A(i,j-1) cannot be used until an auxiliary array B has been updated from 0 to 1.  The values B(i-1,j) and B(i,j-1) are changed from 0 -&gt; 1 after the values A(i-1,j) and A(i,j-1) have been communicated to the proc that contains cell (i,j), as cells (i-1,j) and (i,j-1) belong to different procs.  Here is pseudocode for how I have the algorithm implemented (in fortran):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; do while (B(ii,jj,kk).eq.0)
</span><br>
<span class="quotelev2">&gt; &gt;      if (probe_for_message(i0,j0,k0,this_sc)) then
</span><br>
<span class="quotelev2">&gt; &gt;           my_ibuf(1)=my_ibuf(1)+1
</span><br>
<span class="quotelev2">&gt; &gt;           A(i0,j0,k0)=this_sc
</span><br>
<span class="quotelev2">&gt; &gt;           B(i0,j0,k0)=1
</span><br>
<span class="quotelev2">&gt; &gt;      end if
</span><br>
<span class="quotelev2">&gt; &gt; end do
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The function 'probe_for_message' uses an 'MPI_IPROBE' to see if 'MPI_ANY_SOURCE' has a message for my current proc.  If there is a message, the function returns a true logical and calls 'MPI_RECV', receiving (i0,j0,k0,this_sc) from the proc that has the message.  This works!  My concern is that I am probing repeatedly inside the while loop until I receive a message from a proc such that ii=i0, jj=j0, kk=k0.  I could potentially call MPI_IPROBE many many times before this happens... and I'm worried that this is a messy way of doing this.  Could I &quot;break&quot; the mpi probe call?  Are there MPI routines that would allow me to accomplish the same thing in a more formal or safer way?  Maybe a persistent communication or something?  For very large computations with many procs, I am observing a hanging situation which I suspect may be due to this.  I observe it when using openmpi-1.4.4, and the hanging seems to disappear if I use mvapich.  Any suggestions/comments would be greatly ap!
</span><br>
<span class="quotelev1">&gt;  preciated.  Thanks so much!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; JM _______________________________________________
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; JM _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
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
