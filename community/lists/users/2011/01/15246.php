<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 11:35:44 2011" -->
<!-- isoreceived="20110103163544" -->
<!-- sent="Mon, 3 Jan 2011 09:35:28 -0700" -->
<!-- isosent="20110103163528" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="F681C8BB-35FD-49FB-B42B-687B604B7D11_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A07E39AB4_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 11:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15245.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt -
<br>
<p>There's a known bug in the datatype engine of Open MPI 1.5 that breaks MPI One-sided when used with user-defined datatypes.  Unfortunately, I don't have a timetable as to when it will be fixed.
<br>
<p>Brian
<br>
<p>On Jan 3, 2011, at 9:18 AM, Grismer,	Matthew J Civ USAF AFMC AFRL/RBAT wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately correcting the integer type for the displacement does not fix
</span><br>
<span class="quotelev1">&gt; the problem in my code, argh! So, thinking this might have something to do
</span><br>
<span class="quotelev1">&gt; with the large arrays and amount of data being passed in the actual code, I
</span><br>
<span class="quotelev1">&gt; modified my example (attached putbothways2.f90) so that the array sizes and
</span><br>
<span class="quotelev1">&gt; amount of data swapped are nearly identical to the code giving me the issue.
</span><br>
<span class="quotelev1">&gt; I also filled the array that is shared with random data, instead of 0's and
</span><br>
<span class="quotelev1">&gt; 1's, to ensure nothing special was happening due to the simple, uniform
</span><br>
<span class="quotelev1">&gt; data. Unfortunately, the example works great, but my actual code still seg
</span><br>
<span class="quotelev1">&gt; faults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the summary is the example code that uses MPI_Put calls with indexed
</span><br>
<span class="quotelev1">&gt; datatypes to swap data between 2 processors works without issue, while the
</span><br>
<span class="quotelev1">&gt; actual code that communicates in the same manner fails.  The only difference
</span><br>
<span class="quotelev1">&gt; is the actual code allocates many other arrays, which are communicated in
</span><br>
<span class="quotelev1">&gt; various ways (sends, puts, broadcasts, etc).  I checked and re-checked all
</span><br>
<span class="quotelev1">&gt; the argument lists associated with the indexed data, window, and puts;
</span><br>
<span class="quotelev1">&gt; everything looks correct.  Any thoughts or suggestions on how to proceed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Grismer,Matthew J Civ USAF AFMC AFRL/RBAT
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 29, 2010 1:42 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone correctly pointed out the bug in my examples.  In the MPI_Put I
</span><br>
<span class="quotelev1">&gt; pass a 0 as the displacement, however, the argument must be of type
</span><br>
<span class="quotelev1">&gt; integer (kind=MPI_ADDRESS_KIND), which is NOT the default integer type.
</span><br>
<span class="quotelev1">&gt; Replacing the 0 with the correct integer type fixes both examples.  Now
</span><br>
<span class="quotelev1">&gt; to see if it fixes the actual code I am having difficulty with...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Grismer,Matthew J Civ USAF AFMC AFRL/RBAT
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 27, 2010 5:33 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decided to try and isolate the issue, and created two example test
</span><br>
<span class="quotelev1">&gt; programs
</span><br>
<span class="quotelev1">&gt; that appear to highlight an issue
</span><br>
<span class="quotelev1">&gt; with Open MPI; both die when I run them on 2 processors.  I am pretty
</span><br>
<span class="quotelev1">&gt; certain
</span><br>
<span class="quotelev1">&gt; the first (putoneway.f90) should work, as I am only doing a single put
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; one processor to a second processor; the target processor is doing
</span><br>
<span class="quotelev1">&gt; nothing
</span><br>
<span class="quotelev1">&gt; with the window'ed array that is receiving the data. My guess is the
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; lies in the indexed datatypes that I am using for both the origin and
</span><br>
<span class="quotelev1">&gt; target.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second case (putbothways.f90) closely mirrors what I am actually
</span><br>
<span class="quotelev1">&gt; trying
</span><br>
<span class="quotelev1">&gt; to do in my code, that is have each processor put into the other
</span><br>
<span class="quotelev1">&gt; processors
</span><br>
<span class="quotelev1">&gt; window'ed array at the same time.  So, each process is sending from and
</span><br>
<span class="quotelev1">&gt; receiving into the same array at the same time, with no overlap in the
</span><br>
<span class="quotelev1">&gt; sent
</span><br>
<span class="quotelev1">&gt; and received data.  Once again I'm using indexed data types for both the
</span><br>
<span class="quotelev1">&gt; origin and target.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To build:  mpif90 putoneway.f90
</span><br>
<span class="quotelev1">&gt; To run:  mpiexec -np 2 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of James Dinan
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, December 16, 2010 10:09 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/16/2010 08:34 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, since MPI-3 is updating the semantics of the one-sided
</span><br>
<span class="quotelev2">&gt;&gt; stuff, it might be worth waiting for all those clarifications before
</span><br>
<span class="quotelev2">&gt;&gt; venturing into the MPI one-sided realm.  One-sided semantics are much
</span><br>
<span class="quotelev2">&gt;&gt; more subtle and complex than two-sided semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we should give users the hope that MPI-3 RMA will be out
</span><br>
<span class="quotelev1">&gt; tomorrow.  The RMA revisions are still in proposal form and need work.
</span><br>
<span class="quotelev1">&gt; Realistically speaking, we might be able to get this accepted into the
</span><br>
<span class="quotelev1">&gt; standard within a year and it will be another year before
</span><br>
<span class="quotelev1">&gt; implementations catch up.  If users need one-sided now, they should use
</span><br>
<span class="quotelev1">&gt; the MPI-2 one-sided API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI-3 RMA extends MPI-2 RMA and will be backward compatible, so anything
</span><br>
<span class="quotelev1">&gt; you write now will still work.  It's still unclear to me whether MPI-3's
</span><br>
<span class="quotelev1">&gt; RMA semantics will be the leap forward in usability we have hoped for.
</span><br>
<span class="quotelev1">&gt; We are trying to make it more flexible, but there will likely still be
</span><br>
<span class="quotelev1">&gt; tricky parts due to portability and performance concerns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, my advice: don't be scared of MPI-2.  I agree, it's complicated, but
</span><br>
<span class="quotelev1">&gt; once you get acclimated it's not that bad.  Really.  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; ~Jim.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &lt;putbothways2.f90&gt;&lt;smime.p7s&gt;&lt;ATT00002..txt&gt;
</span><br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15245.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15247.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
