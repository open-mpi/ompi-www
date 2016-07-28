<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 12:25:19 2015" -->
<!-- isoreceived="20150205172519" -->
<!-- sent="Thu, 5 Feb 2015 17:25:16 +0000" -->
<!-- isosent="20150205172516" -->
<!-- name="Burns, Andrew J CTR (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C337177D05BB_at_ucolhpkl.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFQZe_=5=fCEM7rsYp-hyGxFr9=EK+9ABLjC1n-d9mAakBEtOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 12:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p>Okay, I think I may get what's going on. I think you're calling one mpi capable program from within another mpi program. What you
<br>
have to do is assume that the program that is being called already had MPI_Init called and that MPI_Finalize will be called after
<br>
the program returns.
<br>
<p>Example (pseudocode for brevity):
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;MPI_Init();
<br>
<p>&nbsp;&nbsp;int x;
<br>
<p>&nbsp;&nbsp;int p2result = Program2(x, comm);
<br>
<p>&nbsp;&nbsp;MPI_Bcast(p2result, comm);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>int Program2(int x, MPI_Comm comm)
<br>
{
<br>
&nbsp;&nbsp;int returnval;
<br>
&nbsp;&nbsp;MPI_AllReduce(&amp;returnval, x, comm);
<br>
&nbsp;&nbsp;return returnval;
<br>
}
<br>
<p><p><p>If the second program were to be:
<br>
<p>int Program2(int x, MPI_Comm comm)
<br>
{
<br>
&nbsp;&nbsp;MPI_Init();
<br>
&nbsp;&nbsp;int returnval;
<br>
&nbsp;&nbsp;MPI_AllReduce(&amp;returnval, x, comm);
<br>
&nbsp;&nbsp;return returnval;
<br>
&nbsp;&nbsp;MPI_Finalize()
<br>
}
<br>
<p>The program would return to serial when MPI_Finalize is first called, potentially throwing several errors.
<br>
<p>-Andrew Burns
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Muhammad Ashfaqur Rahman
<br>
Sent: Wednesday, February 04, 2015 3:42 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)
<br>
<p>Dear Andrew Burns,
<br>
Thank you for your ideas. Your guess is partly correct, I am trying to merge two sets of programs into one executable and then run
<br>
in mpi.
<br>
As per your suggestion, I have omitted the MPI_Finalize from of one set. And also commented the MPI_Barrier in some parts. 
<br>
But still it is serial.
<br>
For your idea: attached here Makefile.
<br>
<p><p>Regards
<br>
Ashfaq
<br>
&nbsp;
<br>
<p>On Tue, Feb 3, 2015 at 6:26 PM, Burns, Andrew J CTR (US) &lt;andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Classification: UNCLASSIFIED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caveats: NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If I could venture a guess, it sounds like you are trying to merge two separate programs into one executable and run them in
<br>
parallel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The problem sounds like an issue where your program starts in parallel but then changes back to serial while the program is
<br>
still
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;executing.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can't be entirely sure without looking at the code itself.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One guess is that MPI_Finalize is in the wrong location. Finalize should be called to end the parallel section and move the
<br>
program
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;back to serial. Typically this means that Finalize will be very close to the last line of the program.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It may also be possible that with the way your program is structured, the effect is effectively serial since only one core
<br>
is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processing at any given moment. This may be due to extensive use of barrier or similar functions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andrew Burns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lockheed Martin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Software Engineer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;410-306-0409
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARL DSRC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;andrew.j.burns2_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;andrew.j.burns35.ctr_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----Original Message-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Tuesday, February 03, 2015 9:05 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] prob in running two mpi merged program
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm afraid I don't quite understand what you are saying, so let's see if I can clarify. You have two fortran MPI programs.
<br>
You start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one using &quot;mpiexec&quot;. You then start the other one as a singleton - i.e., you just run &quot;myapp&quot; without using mpiexec. The two
<br>
apps are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attempting to execute an MPI_Connect/accept so they can &quot;join&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is that correct? You mention MPICH in your statement about one of the procs - are you using MPICH or Open MPI? If the
<br>
latter, which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;version are you using?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ralph
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;ashfaq226_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take my greetings. I am new in mpi usage. I have problems in parallel run, when two fortran mpi programs are merged
<br>
to one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;executable. If these two are separate, then they are running parallel.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One program has used spmd and another one  has used mpich header directly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other issue is that while trying to run the above mentioned merged program in mpi, it's first started with separate
<br>
parallel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instances of same step and then after some steps it becomes serial.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please help me in this regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ashfaq
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph.D Student
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dept. of Meteorology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26264.php">http://www.open-mpi.org/community/lists/users/2015/02/26264.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Classification: UNCLASSIFIED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caveats: NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26266.php">http://www.open-mpi.org/community/lists/users/2015/02/26266.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p>Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26293/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
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
