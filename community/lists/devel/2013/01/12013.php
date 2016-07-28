<?
$subject_val = "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 07:32:27 2013" -->
<!-- isoreceived="20130126123227" -->
<!-- sent="Sat, 26 Jan 2013 12:32:20 +0000" -->
<!-- isosent="20130126123220" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CB7459_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMfhe-si3Wg0L=HVpzQbNEgfF0mYp4zvPDM_1F9Qo70R0Yw7eg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-26 07:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12014.php">Jan Engelhardt: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<li><strong>In reply to:</strong> <a href="11990.php">Jeremy McCaslin: "[OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First off, 1.4.4 is fairly ancient.  You might want to try upgrading to 1.6.3.
<br>
<p>Second, you might want to use non-blocking receives for B such that you can MPI_WAITALL, or perhaps MPI_WAITSOME or MPI_WAITANY to wait for some/all of the values to arrive in B.  This keeps any looping down in MPI (i.e., as close to the hardware as possible).
<br>
<p><p>On Jan 25, 2013, at 3:21 PM, Jeremy McCaslin &lt;jomccaslin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to figure out the most appropriate MPI calls for a certain portion of my code.  I will describe the situation here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each cell (i,j) of my array A is being updated by a calculation that depends on the values of 1 or 2 of the 4 possible neighbors A(i+1,j), A(i-1,j), A(i,j+1), and A(i,j-1).  Say, for example, A(i,j)=A(i-1,j)*A(i,j-1).  The thing is, the values of the neighbors A(i-1,j) and A(i,j-1) cannot be used until an auxiliary array B has been updated from 0 to 1.  The values B(i-1,j) and B(i,j-1) are changed from 0 -&gt; 1 after the values A(i-1,j) and A(i,j-1) have been communicated to the proc that contains cell (i,j), as cells (i-1,j) and (i,j-1) belong to different procs.  Here is pseudocode for how I have the algorithm implemented (in fortran):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do while (B(ii,jj,kk).eq.0)
</span><br>
<span class="quotelev1">&gt;      if (probe_for_message(i0,j0,k0,this_sc)) then
</span><br>
<span class="quotelev1">&gt;           my_ibuf(1)=my_ibuf(1)+1
</span><br>
<span class="quotelev1">&gt;           A(i0,j0,k0)=this_sc
</span><br>
<span class="quotelev1">&gt;           B(i0,j0,k0)=1
</span><br>
<span class="quotelev1">&gt;      end if
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The function 'probe_for_message' uses an 'MPI_IPROBE' to see if 'MPI_ANY_SOURCE' has a message for my current proc.  If there is a message, the function returns a true logical and calls 'MPI_RECV', receiving (i0,j0,k0,this_sc) from the proc that has the message.  This works!  My concern is that I am probing repeatedly inside the while loop until I receive a message from a proc such that ii=i0, jj=j0, kk=k0.  I could potentially call MPI_IPROBE many many times before this happens... and I'm worried that this is a messy way of doing this.  Could I &quot;break&quot; the mpi probe call?  Are there MPI routines that would allow me to accomplish the same thing in a more formal or safer way?  Maybe a persistent communication or something?  For very large computations with many procs, I am observing a hanging situation which I suspect may be due to this.  I observe it when using openmpi-1.4.4, and the hanging seems to disappear if I use mvapich.  Any suggestions/comments would be greatly appreciated.  Thanks so much!
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
<li><strong>Next message:</strong> <a href="12014.php">Jan Engelhardt: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<li><strong>In reply to:</strong> <a href="11990.php">Jeremy McCaslin: "[OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
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
