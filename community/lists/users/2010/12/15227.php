<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 27 17:32:52 2010" -->
<!-- isoreceived="20101227223252" -->
<!-- sent="Mon, 27 Dec 2010 17:32:42 -0500" -->
<!-- isosent="20101227223242" -->
<!-- name="Grismer, Matthew J Civ USAF AFMC AFRL/RBAT" -->
<!-- email="Matthew.Grismer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="2B00361EE3107A4F88383EC1B041DC9A07DF404F_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0A2B98.1070002_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI_Put/Get correctly?<br>
<strong>From:</strong> Grismer, Matthew J Civ USAF AFMC AFRL/RBAT (<em>Matthew.Grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-27 17:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I decided to try and isolate the issue, and created two example test
<br>
programs
<br>
that appear to highlight an issue
<br>
with Open MPI; both die when I run them on 2 processors.  I am pretty
<br>
certain
<br>
the first (putoneway.f90) should work, as I am only doing a single put from
<br>
one processor to a second processor; the target processor is doing nothing
<br>
with the window'ed array that is receiving the data. My guess is the problem
<br>
lies in the indexed datatypes that I am using for both the origin and
<br>
target.
<br>
<p>The second case (putbothways.f90) closely mirrors what I am actually trying
<br>
to do in my code, that is have each processor put into the other processors
<br>
window'ed array at the same time.  So, each process is sending from and
<br>
receiving into the same array at the same time, with no overlap in the sent
<br>
and received data.  Once again I'm using indexed data types for both the
<br>
origin and target.
<br>
<p>To build:  mpif90 putoneway.f90
<br>
To run:  mpiexec -np 2 a.out
<br>
<p>Matt
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of James Dinan
<br>
Sent: Thursday, December 16, 2010 10:09 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
<br>
<p>On 12/16/2010 08:34 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Additionally, since MPI-3 is updating the semantics of the one-sided
</span><br>
<span class="quotelev1">&gt; stuff, it might be worth waiting for all those clarifications before
</span><br>
<span class="quotelev1">&gt; venturing into the MPI one-sided realm.  One-sided semantics are much
</span><br>
<span class="quotelev1">&gt; more subtle and complex than two-sided semantics.
</span><br>
<p>Hi Jeff,
<br>
<p>I don't think we should give users the hope that MPI-3 RMA will be out
<br>
tomorrow.  The RMA revisions are still in proposal form and need work.
<br>
Realistically speaking, we might be able to get this accepted into the
<br>
standard within a year and it will be another year before
<br>
implementations catch up.  If users need one-sided now, they should use
<br>
the MPI-2 one-sided API.
<br>
<p>MPI-3 RMA extends MPI-2 RMA and will be backward compatible, so anything
<br>
you write now will still work.  It's still unclear to me whether MPI-3's
<br>
RMA semantics will be the leap forward in usability we have hoped for.
<br>
We are trying to make it more flexible, but there will likely still be
<br>
tricky parts due to portability and performance concerns.
<br>
<p>So, my advice: don't be scared of MPI-2.  I agree, it's complicated, but
<br>
once you get acclimated it's not that bad.  Really.  :)
<br>
<p>Best,
<br>
&nbsp;~Jim.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15227/putbothways.f90">putbothways.f90</a>
</ul>
<!-- attachment="putbothways.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15227/putoneway.f90">putoneway.f90</a>
</ul>
<!-- attachment="putoneway.f90" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15227/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15228.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15226.php">David Zhang: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15234.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
