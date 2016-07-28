<?
$subject_val = "[OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 15:15:12 2010" -->
<!-- isoreceived="20101215201512" -->
<!-- sent="Wed, 15 Dec 2010 15:15:01 -0500" -->
<!-- isosent="20101215201501" -->
<!-- name="Grismer, Matthew J Civ USAF AFMC AFRL/RBAT" -->
<!-- email="Matthew.Grismer_at_[hidden]" -->
<!-- subject="[OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="2B00361EE3107A4F88383EC1B041DC9A07D6EA24_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Using MPI_Put/Get correctly?<br>
<strong>From:</strong> Grismer, Matthew J Civ USAF AFMC AFRL/RBAT (<em>Matthew.Grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 15:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15144.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to modify the communication routines in our code to use
<br>
MPI_Put's instead of sends and receives.  This worked fine for several
<br>
variable Put's, but now I have one that is causing seg faults. Reading
<br>
through the MPI documentation it is not clear to me if what I am doing
<br>
is permissible or not.  Basically, the question is this - if I have
<br>
defined all of an array as a window on each processor, can I PUT data
<br>
from that array to remote processes at the same time as the remote
<br>
processes are PUTing into the local copy, assuming no overlaps of any of
<br>
the PUTs?
<br>
<p>Here are the details if that doesn't make sense.  I have a (Fortran)
<br>
array QF(6,2,N) on each processor, where N could be a very large number
<br>
(100,000). I create a window QFWIN on the entire array on all the
<br>
processors.  I define MPI_Type_indexed &quot;sending&quot; datatypes (QFSND) with
<br>
block lengths of 6 that send from QF(1,1,*), and MPI_Type_indexed
<br>
&quot;receiving&quot; datatypes (QFREC) with block lengths of 6 the receive into
<br>
QF(1,2,*).  Here * is non-repeating set of integers up to N.  I create
<br>
groups of processors that communicate, where these groups will all
<br>
exchange QF data, PUTing local QF(1,1,*) to remote QF(1,2,*).  So,
<br>
processor 1 is PUTing QF data to processors 2,3,4 at the same time 2,3,4
<br>
are putting their QF data to 1, and so on.  Processors 2,3,4 are PUTing
<br>
into non-overlapping regions of QF(1,2,*) on 1, and 1 is PUTing from
<br>
QF(1,1,*) to 2,3,4, and so on.  So, my calls look like this on each
<br>
processor:
<br>
<p>assertion = 0
<br>
call MPI_Win_post(group, assertion, QFWIN, ierr)
<br>
call MPI_Win_start(group, assertion, QFWIN, ierr)
<br>
<p>do I=1,neighbors
<br>
&nbsp;&nbsp;call MPI_Put(QF, 1, QFSND(I), NEIGHBOR(I), 0, 1, QFREC(I), QFWIN,
<br>
ierr)
<br>
end do
<br>
<p>call MPI_Win_complete(QFWIN,ierr)
<br>
call MPI_Win_wait(QFWIN,ierr)
<br>
<p>Note I did define QFREC locally on each processor to properly represent
<br>
where the data was going on the remote processors.  The error value
<br>
ierr=0 after MPI_Win_post, MPI_Win_start, MPI_Put, and MPI_Win_complete,
<br>
and the code seg faults in MPI_Win_wait.
<br>
<p>I'm using Open MPI 1.4.3 on Mac OS X 10.6.5, built with Intel XE (12.0)
<br>
compilers, and running on just 2 (internal) processors of my Mac Pro.
<br>
The code ran normally with this configuration up until the point I put
<br>
the above in.  Several other communications with MPI_Put similar to the
<br>
above work fine, though the windows are only on a subset of the
<br>
communicated array, and the origin data is being PUT from part of the
<br>
array that is not within the window.
<br>
_____________________________________________________
<br>
Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15144.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
