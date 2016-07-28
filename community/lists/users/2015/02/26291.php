<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 15:41:49 2015" -->
<!-- isoreceived="20150204204149" -->
<!-- sent="Wed, 4 Feb 2015 23:41:48 +0300" -->
<!-- isosent="20150204204148" -->
<!-- name="Muhammad Ashfaqur Rahman" -->
<!-- email="ashfaq226_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)" -->
<!-- id="CAFQZe_=5=fCEM7rsYp-hyGxFr9=EK+9ABLjC1n-d9mAakBEtOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DEE37B508E36B64285856EEA9FC0C337177D0382_at_ucolhpkl.easf.csd.disa.mil" -->
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
<strong>From:</strong> Muhammad Ashfaqur Rahman (<em>ashfaq226_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-04 15:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Andrew Burns,
<br>
Thank you for your ideas. Your guess is partly correct, I am trying to
<br>
merge two sets of programs into one executable and then run in mpi.
<br>
As per your suggestion, I have omitted the MPI_Finalize from of one set.
<br>
And also commented the MPI_Barrier in some parts.
<br>
But still it is serial.
<br>
For your idea: attached here Makefile.
<br>
<p>Regards
<br>
Ashfaq
<br>
<p><p>On Tue, Feb 3, 2015 at 6:26 PM, Burns, Andrew J CTR (US) &lt;
<br>
andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I could venture a guess, it sounds like you are trying to merge two
</span><br>
<span class="quotelev1">&gt; separate programs into one executable and run them in parallel
</span><br>
<span class="quotelev1">&gt; via MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem sounds like an issue where your program starts in parallel but
</span><br>
<span class="quotelev1">&gt; then changes back to serial while the program is still
</span><br>
<span class="quotelev1">&gt; executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't be entirely sure without looking at the code itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One guess is that MPI_Finalize is in the wrong location. Finalize should
</span><br>
<span class="quotelev1">&gt; be called to end the parallel section and move the program
</span><br>
<span class="quotelev1">&gt; back to serial. Typically this means that Finalize will be very close to
</span><br>
<span class="quotelev1">&gt; the last line of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may also be possible that with the way your program is structured, the
</span><br>
<span class="quotelev1">&gt; effect is effectively serial since only one core is
</span><br>
<span class="quotelev1">&gt; processing at any given moment. This may be due to extensive use of
</span><br>
<span class="quotelev1">&gt; barrier or similar functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew Burns
</span><br>
<span class="quotelev1">&gt; Lockheed Martin
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; 410-306-0409
</span><br>
<span class="quotelev1">&gt; ARL DSRC
</span><br>
<span class="quotelev1">&gt; andrew.j.burns2_at_[hidden]
</span><br>
<span class="quotelev1">&gt; andrew.j.burns35.ctr_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 03, 2015 9:05 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] prob in running two mpi merged program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't quite understand what you are saying, so let's see if I
</span><br>
<span class="quotelev1">&gt; can clarify. You have two fortran MPI programs. You start
</span><br>
<span class="quotelev1">&gt; one using &quot;mpiexec&quot;. You then start the other one as a singleton - i.e.,
</span><br>
<span class="quotelev1">&gt; you just run &quot;myapp&quot; without using mpiexec. The two apps are
</span><br>
<span class="quotelev1">&gt; attempting to execute an MPI_Connect/accept so they can &quot;join&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct? You mention MPICH in your statement about one of the
</span><br>
<span class="quotelev1">&gt; procs - are you using MPICH or Open MPI? If the latter, which
</span><br>
<span class="quotelev1">&gt; version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;
</span><br>
<span class="quotelev1">&gt; ashfaq226_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Dear All,
</span><br>
<span class="quotelev1">&gt;         Take my greetings. I am new in mpi usage. I have problems in
</span><br>
<span class="quotelev1">&gt; parallel run, when two fortran mpi programs are merged to one
</span><br>
<span class="quotelev1">&gt; executable. If these two are separate, then they are running parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         One program has used spmd and another one  has used mpich header
</span><br>
<span class="quotelev1">&gt; directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Other issue is that while trying to run the above mentioned merged
</span><br>
<span class="quotelev1">&gt; program in mpi, it's first started with separate parallel
</span><br>
<span class="quotelev1">&gt; instances of same step and then after some steps it becomes serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Please help me in this regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Ashfaq
</span><br>
<span class="quotelev1">&gt;         Ph.D Student
</span><br>
<span class="quotelev1">&gt;         Dept. of Meteorology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26264.php">http://www.open-mpi.org/community/lists/users/2015/02/26264.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26266.php">http://www.open-mpi.org/community/lists/users/2015/02/26266.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26291/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
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
