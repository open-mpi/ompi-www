<?
$subject_val = "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 17:53:56 2008" -->
<!-- isoreceived="20080820215356" -->
<!-- sent="Wed, 20 Aug 2008 16:53:50 -0500" -->
<!-- isosent="20080820215350" -->
<!-- name="C.Y. Lee" -->
<!-- email="cylee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11) Address not mapped (1)" -->
<!-- id="af6a296b0808201453q3dcd86aexdf320ce96bdfcf24_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Segmentation fault (11) Address not mapped (1)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11) Address not mapped (1)<br>
<strong>From:</strong> C.Y. Lee (<em>cylee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 17:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6401.php">Richard Treumann: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Maybe in reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turned out it was the fftw package that was not installed perfectly.
<br>
I used the fftw package that came with QE as suggested and all went fine.
<br>
Thanks a lot.
<br>
<p>CY
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date: Sat, 16 Aug 2008 07:57:58 -0400
<br>
Subject: Re: [OMPI users] Segmentation fault (11) Address not mapped (1)
<br>
It's not entirely clear that this means that it is a bug in Open MPI --
<br>
there's not really enough information here to say where the problem is.  All
<br>
that is clear is that a seg fault is happening somewhere in LAPACK.
<br>
<p>FWIW, I don't see MPI in the call stack of the segv at all.  This doesn't
<br>
definitively mean that MPI is not involved, but it does suggest that the bug
<br>
is elsewhere.  You might want to run this under a debugger or examine the
<br>
generated corefiles to see exactly what the problem was.
<br>
<p><p>On Aug 15, 2008, at 1:03 PM, C.Y. Lee wrote:
<br>
<p><p>All,
<br>
<p>I had a similar problem as James described in an earlier message:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/07/6204.php">http://www.open-mpi.org/community/lists/users/2008/07/6204.php</a>
<br>
While he was able to recompile openmpi to solve the problem, I had no luck
<br>
with my RedHat Enterprise 5 system.
<br>
Here are two other threads with similar issues regarding openmpi on Ubuntu
<br>
and OSX which were solved:
<br>
<a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
<br>
<a href="http://www.somewhereville.com/?cat=55">http://www.somewhereville.com/?cat=55</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6401.php">Richard Treumann: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Maybe in reply to:</strong> <a href="6348.php">C.Y. Lee: "[OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
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
