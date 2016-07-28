<?
$subject_val = "[OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 15:21:31 2013" -->
<!-- isoreceived="20130125202131" -->
<!-- sent="Fri, 25 Jan 2013 15:21:26 -0500" -->
<!-- isosent="20130125202126" -->
<!-- name="Jeremy McCaslin" -->
<!-- email="jomccaslin_at_[hidden]" -->
<!-- subject="[OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE" -->
<!-- id="CAMfhe-si3Wg0L=HVpzQbNEgfF0mYp4zvPDM_1F9Qo70R0Yw7eg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE<br>
<strong>From:</strong> Jeremy McCaslin (<em>jomccaslin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 15:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11991.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I am trying to figure out the most appropriate MPI calls for a certain
<br>
portion of my code.  I will describe the situation here:
<br>
<p><p>Each cell (i,j) of my array A is being updated by a calculation that
<br>
depends on the values of 1 or 2 of the 4 possible neighbors A(i+1,j),
<br>
A(i-1,j), A(i,j+1), and A(i,j-1).  Say, for example,
<br>
A(i,j)=A(i-1,j)*A(i,j-1).  The thing is, the values of the neighbors
<br>
A(i-1,j) and A(i,j-1) cannot be used until an auxiliary array B has been
<br>
updated from 0 to 1.  The values B(i-1,j) and B(i,j-1) are changed from 0
<br>
-&gt; 1 after the values A(i-1,j) and A(i,j-1) have been communicated to the
<br>
proc that contains cell (i,j), as cells (i-1,j) and (i,j-1) belong to
<br>
different procs.  Here is pseudocode for how I have the algorithm
<br>
implemented (in fortran):
<br>
<p><p>do while (B(ii,jj,kk).eq.0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (probe_for_message(i0,j0,k0,this_sc)) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_ibuf(1)=my_ibuf(1)+1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A(i0,j0,k0)=this_sc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B(i0,j0,k0)=1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>end do
<br>
<p><p>The function 'probe_for_message' uses an 'MPI_IPROBE' to see if
<br>
'MPI_ANY_SOURCE' has a message for my current proc.  If there is a message,
<br>
the function returns a true logical and calls 'MPI_RECV', receiving
<br>
(i0,j0,k0,this_sc) from the proc that has the message.  This works!  My
<br>
concern is that I am probing repeatedly inside the while loop until I
<br>
receive a message from a proc such that ii=i0, jj=j0, kk=k0.  I could
<br>
potentially call MPI_IPROBE many many times before this happens... and I'm
<br>
worried that this is a messy way of doing this.  Could I &quot;break&quot; the mpi
<br>
probe call?  Are there MPI routines that would allow me to accomplish the
<br>
same thing in a more formal or safer way?  Maybe a persistent communication
<br>
or something?  For very large computations with many procs, I am observing
<br>
a hanging situation which I suspect may be due to this.  I observe it when
<br>
using openmpi-1.4.4, and the hanging seems to disappear if I use mvapich.
<br>
&nbsp;Any suggestions/comments would be greatly appreciated.  Thanks so much!
<br>
<p><pre>
-- 
JM
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11991.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<li><strong>Reply:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
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
