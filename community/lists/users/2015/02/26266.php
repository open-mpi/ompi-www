<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 10:27:10 2015" -->
<!-- isoreceived="20150203152710" -->
<!-- sent="Tue, 3 Feb 2015 15:26:33 +0000" -->
<!-- isosent="20150203152633" -->
<!-- name="Burns, Andrew J CTR (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C337177D0382_at_ucolhpkl.easf.csd.disa.mil" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57oc9H+PCQ197N5+rbeweJyQY1v3hFpYCmsUWqE+hpkSnOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 10:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26265.php">Ralph Castain: "Re: [OMPI users] prob in running two mpi merged program"</a>
<li><strong>In reply to:</strong> <a href="26265.php">Ralph Castain: "Re: [OMPI users] prob in running two mpi merged program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p>If I could venture a guess, it sounds like you are trying to merge two separate programs into one executable and run them in parallel 
<br>
via MPI.
<br>
<p>The problem sounds like an issue where your program starts in parallel but then changes back to serial while the program is still 
<br>
executing.
<br>
<p>I can't be entirely sure without looking at the code itself.
<br>
<p>One guess is that MPI_Finalize is in the wrong location. Finalize should be called to end the parallel section and move the program 
<br>
back to serial. Typically this means that Finalize will be very close to the last line of the program.
<br>
<p>It may also be possible that with the way your program is structured, the effect is effectively serial since only one core is 
<br>
processing at any given moment. This may be due to extensive use of barrier or similar functions.
<br>
<p>Andrew Burns
<br>
Lockheed Martin
<br>
Software Engineer
<br>
410-306-0409
<br>
ARL DSRC
<br>
andrew.j.burns2_at_[hidden]
<br>
andrew.j.burns35.ctr_at_[hidden]
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, February 03, 2015 9:05 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] prob in running two mpi merged program
<br>
<p>I'm afraid I don't quite understand what you are saying, so let's see if I can clarify. You have two fortran MPI programs. You start 
<br>
one using &quot;mpiexec&quot;. You then start the other one as a singleton - i.e., you just run &quot;myapp&quot; without using mpiexec. The two apps are 
<br>
attempting to execute an MPI_Connect/accept so they can &quot;join&quot;.
<br>
<p>Is that correct? You mention MPICH in your statement about one of the procs - are you using MPICH or Open MPI? If the latter, which 
<br>
version are you using?
<br>
<p>Ralph
<br>
<p><p>On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;ashfaq226_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take my greetings. I am new in mpi usage. I have problems in parallel run, when two fortran mpi programs are merged to one 
<br>
executable. If these two are separate, then they are running parallel.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One program has used spmd and another one  has used mpich header directly.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other issue is that while trying to run the above mentioned merged program in mpi, it's first started with separate parallel 
<br>
instances of same step and then after some steps it becomes serial.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please help me in this regards
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ashfaq
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph.D Student
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dept. of Meteorology
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26264.php">http://www.open-mpi.org/community/lists/users/2015/02/26264.php</a>
<br>
<p><p><p><p>Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26266/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26265.php">Ralph Castain: "Re: [OMPI users] prob in running two mpi merged program"</a>
<li><strong>In reply to:</strong> <a href="26265.php">Ralph Castain: "Re: [OMPI users] prob in running two mpi merged program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
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
