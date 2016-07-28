<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 09:50:23 2015" -->
<!-- isoreceived="20150206145023" -->
<!-- sent="Fri, 6 Feb 2015 17:50:16 +0300" -->
<!-- isosent="20150206145016" -->
<!-- name="Muhammad Ashfaqur Rahman" -->
<!-- email="ashfaq226_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)" -->
<!-- id="CAFQZe_=7XMg4M78z+daS9bmf6M7YUJJHqO7XinLm2uncrYkQ9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DEE37B508E36B64285856EEA9FC0C337177D05BB_at_ucolhpkl.easf.csd.disa.mil" -->
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
<strong>Date:</strong> 2015-02-06 09:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26295.php">Tabrez Ali: "[OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>In reply to:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Andrew Burns,
<br>
Many thanks for your correct understanding and descriptive suggestion.
<br>
I have now changed the FLAGS of one program for not to take any MPI tags,
<br>
i.e., switched off MPI. And then for the another set kept open for MPI
<br>
options.
<br>
After that call the MPI_Initialize to the beginning of Main program
<br>
(aadmn.F here) and call MPI_Finalize containing program (clmstop.F90 here)
<br>
at the end part.
<br>
After compilation it is still serial.
<br>
I have attached here the FILES containing MPI calling and Makefile for your
<br>
kind consideration.
<br>
<p>Regards
<br>
Ashfaq
<br>
<p>On Thu, Feb 5, 2015 at 8:25 PM, Burns, Andrew J CTR (US) &lt;
<br>
andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, I think I may get what's going on. I think you're calling one mpi
</span><br>
<span class="quotelev1">&gt; capable program from within another mpi program. What you
</span><br>
<span class="quotelev1">&gt; have to do is assume that the program that is being called already had
</span><br>
<span class="quotelev1">&gt; MPI_Init called and that MPI_Finalize will be called after
</span><br>
<span class="quotelev1">&gt; the program returns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example (pseudocode for brevity):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int x;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int p2result = Program2(x, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Bcast(p2result, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int Program2(int x, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int returnval;
</span><br>
<span class="quotelev1">&gt;   MPI_AllReduce(&amp;returnval, x, comm);
</span><br>
<span class="quotelev1">&gt;   return returnval;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the second program were to be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int Program2(int x, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init();
</span><br>
<span class="quotelev1">&gt;   int returnval;
</span><br>
<span class="quotelev1">&gt;   MPI_AllReduce(&amp;returnval, x, comm);
</span><br>
<span class="quotelev1">&gt;   return returnval;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program would return to serial when MPI_Finalize is first called,
</span><br>
<span class="quotelev1">&gt; potentially throwing several errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Andrew Burns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Muhammad
</span><br>
<span class="quotelev1">&gt; Ashfaqur Rahman
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 04, 2015 3:42 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] prob in running two mpi merged program
</span><br>
<span class="quotelev1">&gt; (UNCLASSIFIED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Andrew Burns,
</span><br>
<span class="quotelev1">&gt; Thank you for your ideas. Your guess is partly correct, I am trying to
</span><br>
<span class="quotelev1">&gt; merge two sets of programs into one executable and then run
</span><br>
<span class="quotelev1">&gt; in mpi.
</span><br>
<span class="quotelev1">&gt; As per your suggestion, I have omitted the MPI_Finalize from of one set.
</span><br>
<span class="quotelev1">&gt; And also commented the MPI_Barrier in some parts.
</span><br>
<span class="quotelev1">&gt; But still it is serial.
</span><br>
<span class="quotelev1">&gt; For your idea: attached here Makefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Ashfaq
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 6:26 PM, Burns, Andrew J CTR (US) &lt;
</span><br>
<span class="quotelev1">&gt; andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt;         Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If I could venture a guess, it sounds like you are trying to merge
</span><br>
<span class="quotelev1">&gt; two separate programs into one executable and run them in
</span><br>
<span class="quotelev1">&gt; parallel
</span><br>
<span class="quotelev1">&gt;         via MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The problem sounds like an issue where your program starts in
</span><br>
<span class="quotelev1">&gt; parallel but then changes back to serial while the program is
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt;         executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I can't be entirely sure without looking at the code itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         One guess is that MPI_Finalize is in the wrong location. Finalize
</span><br>
<span class="quotelev1">&gt; should be called to end the parallel section and move the
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt;         back to serial. Typically this means that Finalize will be very
</span><br>
<span class="quotelev1">&gt; close to the last line of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It may also be possible that with the way your program is
</span><br>
<span class="quotelev1">&gt; structured, the effect is effectively serial since only one core
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;         processing at any given moment. This may be due to extensive use
</span><br>
<span class="quotelev1">&gt; of barrier or similar functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Andrew Burns
</span><br>
<span class="quotelev1">&gt;         Lockheed Martin
</span><br>
<span class="quotelev1">&gt;         Software Engineer
</span><br>
<span class="quotelev1">&gt;         410-306-0409
</span><br>
<span class="quotelev1">&gt;         ARL DSRC
</span><br>
<span class="quotelev1">&gt;         andrew.j.burns2_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         andrew.j.burns35.ctr_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----Original Message-----
</span><br>
<span class="quotelev1">&gt;         From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Ralph Castain
</span><br>
<span class="quotelev1">&gt;         Sent: Tuesday, February 03, 2015 9:05 AM
</span><br>
<span class="quotelev1">&gt;         To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] prob in running two mpi merged program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm afraid I don't quite understand what you are saying, so let's
</span><br>
<span class="quotelev1">&gt; see if I can clarify. You have two fortran MPI programs.
</span><br>
<span class="quotelev1">&gt; You start
</span><br>
<span class="quotelev1">&gt;         one using &quot;mpiexec&quot;. You then start the other one as a singleton -
</span><br>
<span class="quotelev1">&gt; i.e., you just run &quot;myapp&quot; without using mpiexec. The two
</span><br>
<span class="quotelev1">&gt; apps are
</span><br>
<span class="quotelev1">&gt;         attempting to execute an MPI_Connect/accept so they can &quot;join&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Is that correct? You mention MPICH in your statement about one of
</span><br>
<span class="quotelev1">&gt; the procs - are you using MPICH or Open MPI? If the
</span><br>
<span class="quotelev1">&gt; latter, which
</span><br>
<span class="quotelev1">&gt;         version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;
</span><br>
<span class="quotelev1">&gt; ashfaq226_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Dear All,
</span><br>
<span class="quotelev1">&gt;                 Take my greetings. I am new in mpi usage. I have problems
</span><br>
<span class="quotelev1">&gt; in parallel run, when two fortran mpi programs are merged
</span><br>
<span class="quotelev1">&gt; to one
</span><br>
<span class="quotelev1">&gt;         executable. If these two are separate, then they are running
</span><br>
<span class="quotelev1">&gt; parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 One program has used spmd and another one  has used mpich
</span><br>
<span class="quotelev1">&gt; header directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Other issue is that while trying to run the above
</span><br>
<span class="quotelev1">&gt; mentioned merged program in mpi, it's first started with separate
</span><br>
<span class="quotelev1">&gt; parallel
</span><br>
<span class="quotelev1">&gt;         instances of same step and then after some steps it becomes serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Please help me in this regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Ashfaq
</span><br>
<span class="quotelev1">&gt;                 Ph.D Student
</span><br>
<span class="quotelev1">&gt;                 Dept. of Meteorology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post:
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
<span class="quotelev1">&gt;         Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt;         Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26266.php">http://www.open-mpi.org/community/lists/users/2015/02/26266.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26293.php">http://www.open-mpi.org/community/lists/users/2015/02/26293.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26296/aadmn.F">aadmn.F</a>
</ul>
<!-- attachment="aadmn.F" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26296/clminitialize.F90">clminitialize.F90</a>
</ul>
<!-- attachment="clminitialize.F90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26296/clmstop.F90">clmstop.F90</a>
</ul>
<!-- attachment="clmstop.F90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26296/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26295.php">Tabrez Ali: "[OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>In reply to:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
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
