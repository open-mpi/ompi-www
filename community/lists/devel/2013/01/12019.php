<?
$subject_val = "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:22:35 2013" -->
<!-- isoreceived="20130128172235" -->
<!-- sent="Mon, 28 Jan 2013 12:22:30 -0500" -->
<!-- isosent="20130128172230" -->
<!-- name="Jeremy McCaslin" -->
<!-- email="jomccaslin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE" -->
<!-- id="CAMfhe-sHLGiXHj9FXh3YJeVw1faRnTb7Txu2BkJYxZS69C53iA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CB7459_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE<br>
<strong>From:</strong> Jeremy McCaslin (<em>jomccaslin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 12:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the feedback.  I actually just changed the repeated probing
<br>
for a message to a blocking MPI_RECV, as the processor waiting to receive
<br>
does nothing but repeatedly probe until the message is there anyway.  This
<br>
also works, and it makes more sense to do it this way.  However, this did
<br>
not fix my hanging issue.  I am wondering if it has something to do with
<br>
the size of my buffer used in MPI_BUFFER_ATTACH.  I believe I am following
<br>
the proper MPI_BSEND_OVERHEAD protocol.  I am waiting on the admins to
<br>
install openmpi-1.6.3, and hoping that maybe this will fix my issue.
<br>
<p>On Sat, Jan 26, 2013 at 7:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; First off, 1.4.4 is fairly ancient.  You might want to try upgrading to
</span><br>
<span class="quotelev1">&gt; 1.6.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, you might want to use non-blocking receives for B such that you
</span><br>
<span class="quotelev1">&gt; can MPI_WAITALL, or perhaps MPI_WAITSOME or MPI_WAITANY to wait for
</span><br>
<span class="quotelev1">&gt; some/all of the values to arrive in B.  This keeps any looping down in MPI
</span><br>
<span class="quotelev1">&gt; (i.e., as close to the hardware as possible).
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
<span class="quotelev2">&gt; &gt; I am trying to figure out the most appropriate MPI calls for a certain
</span><br>
<span class="quotelev1">&gt; portion of my code.  I will describe the situation here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Each cell (i,j) of my array A is being updated by a calculation that
</span><br>
<span class="quotelev1">&gt; depends on the values of 1 or 2 of the 4 possible neighbors A(i+1,j),
</span><br>
<span class="quotelev1">&gt; A(i-1,j), A(i,j+1), and A(i,j-1).  Say, for example,
</span><br>
<span class="quotelev1">&gt; A(i,j)=A(i-1,j)*A(i,j-1).  The thing is, the values of the neighbors
</span><br>
<span class="quotelev1">&gt; A(i-1,j) and A(i,j-1) cannot be used until an auxiliary array B has been
</span><br>
<span class="quotelev1">&gt; updated from 0 to 1.  The values B(i-1,j) and B(i,j-1) are changed from 0
</span><br>
<span class="quotelev1">&gt; -&gt; 1 after the values A(i-1,j) and A(i,j-1) have been communicated to the
</span><br>
<span class="quotelev1">&gt; proc that contains cell (i,j), as cells (i-1,j) and (i,j-1) belong to
</span><br>
<span class="quotelev1">&gt; different procs.  Here is pseudocode for how I have the algorithm
</span><br>
<span class="quotelev1">&gt; implemented (in fortran):
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
<span class="quotelev2">&gt; &gt; The function 'probe_for_message' uses an 'MPI_IPROBE' to see if
</span><br>
<span class="quotelev1">&gt; 'MPI_ANY_SOURCE' has a message for my current proc.  If there is a message,
</span><br>
<span class="quotelev1">&gt; the function returns a true logical and calls 'MPI_RECV', receiving
</span><br>
<span class="quotelev1">&gt; (i0,j0,k0,this_sc) from the proc that has the message.  This works!  My
</span><br>
<span class="quotelev1">&gt; concern is that I am probing repeatedly inside the while loop until I
</span><br>
<span class="quotelev1">&gt; receive a message from a proc such that ii=i0, jj=j0, kk=k0.  I could
</span><br>
<span class="quotelev1">&gt; potentially call MPI_IPROBE many many times before this happens... and I'm
</span><br>
<span class="quotelev1">&gt; worried that this is a messy way of doing this.  Could I &quot;break&quot; the mpi
</span><br>
<span class="quotelev1">&gt; probe call?  Are there MPI routines that would allow me to accomplish the
</span><br>
<span class="quotelev1">&gt; same thing in a more formal or safer way?  Maybe a persistent communication
</span><br>
<span class="quotelev1">&gt; or something?  For very large computations with many procs, I am observing
</span><br>
<span class="quotelev1">&gt; a hanging situation which I suspect may be due to this.  I observe it when
</span><br>
<span class="quotelev1">&gt; using openmpi-1.4.4, and the hanging seems to disappear if I use mvapich.
</span><br>
<span class="quotelev1">&gt;  Any suggestions/comments would be greatly ap!
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
JM
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call	to MPI_IPROBE"</a>
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
