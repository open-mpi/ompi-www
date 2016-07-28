<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 14 06:10:11 2015" -->
<!-- isoreceived="20150214111011" -->
<!-- sent="Sat, 14 Feb 2015 14:10:10 +0300" -->
<!-- isosent="20150214111010" -->
<!-- name="Muhammad Ashfaqur Rahman" -->
<!-- email="ashfaq226_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)" -->
<!-- id="CAFQZe_kW7WYPtSKzxXj1edgwG3+tqA72CLgd4xZ900eA7vhRuw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DEE37B508E36B64285856EEA9FC0C337177D065F_at_ucolhpkl.easf.csd.disa.mil" -->
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
<strong>Date:</strong> 2015-02-14 06:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>In reply to:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Andrew Burns,
<br>
Many thanks to you for providing steps to check my programs. The combined
<br>
program is now running parallel. But the values from one of the program are
<br>
appearing as NaN. The possible reason may be the MPI_COMM_WORLD. I am still
<br>
trying to sort it out. I have attached here the related files and outputs
<br>
for your kind suggestions:
<br>
<p>Regards
<br>
Ashfaq
<br>
<p>On Fri, Feb 6, 2015 at 6:35 PM, Burns, Andrew J CTR (US) &lt;
<br>
andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The placing of clminitialize and clmstop feel a little awkward, but it
</span><br>
<span class="quotelev1">&gt; doesn't look like they would break the program. If you were
</span><br>
<span class="quotelev1">&gt; calling MPI_Init more than once it would throw an error and if Finalize
</span><br>
<span class="quotelev1">&gt; were called early in clmstop the only serial section would
</span><br>
<span class="quotelev1">&gt; be the deallocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One other thought is to ensure that you are properly launching the program
</span><br>
<span class="quotelev1">&gt; as multicore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The command should be similar to as follows (where NPROCS is the number of
</span><br>
<span class="quotelev1">&gt; cores being used):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n NPROCS ./program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you were to launch the program with simply &quot;./program&quot; it would run as
</span><br>
<span class="quotelev1">&gt; serial. It would also run as serial if you were to call
</span><br>
<span class="quotelev1">&gt; &quot;mpirun ./program&quot; since no number of processes are specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the program is properly launched in parallel and then converts to
</span><br>
<span class="quotelev1">&gt; serial, you should be able to track down the location where
</span><br>
<span class="quotelev1">&gt; this happens by inserting some core polling similar to the following
</span><br>
<span class="quotelev1">&gt; pseudocode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (i = 0; i &lt; numprocs; ++i)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   if (i = coreid)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     print(&quot;core &quot;, id, &quot; out of &quot;, numprocs)
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier()
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will want to check all of the calls inside the main loop to ensure
</span><br>
<span class="quotelev1">&gt; that none of them call finalize.
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
<span class="quotelev1">&gt; Sent: Friday, February 06, 2015 9:50 AM
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
<span class="quotelev1">&gt; Many thanks for your correct understanding and descriptive suggestion.
</span><br>
<span class="quotelev1">&gt; I have now changed the FLAGS of one program for not to take any MPI tags,
</span><br>
<span class="quotelev1">&gt; i.e., switched off MPI. And then for the another set kept
</span><br>
<span class="quotelev1">&gt; open for MPI options.
</span><br>
<span class="quotelev1">&gt; After that call the MPI_Initialize to the beginning of Main program
</span><br>
<span class="quotelev1">&gt; (aadmn.F here) and call MPI_Finalize containing program
</span><br>
<span class="quotelev1">&gt; (clmstop.F90 here) at the end part.
</span><br>
<span class="quotelev1">&gt; After compilation it is still serial.
</span><br>
<span class="quotelev1">&gt; I have attached here the FILES containing MPI calling and Makefile for
</span><br>
<span class="quotelev1">&gt; your kind consideration.
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
<span class="quotelev1">&gt; On Thu, Feb 5, 2015 at 8:25 PM, Burns, Andrew J CTR (US) &lt;
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
<span class="quotelev1">&gt;         Okay, I think I may get what's going on. I think you're calling
</span><br>
<span class="quotelev1">&gt; one mpi capable program from within another mpi program.
</span><br>
<span class="quotelev1">&gt; What you
</span><br>
<span class="quotelev1">&gt;         have to do is assume that the program that is being called already
</span><br>
<span class="quotelev1">&gt; had MPI_Init called and that MPI_Finalize will be called
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt;         the program returns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Example (pseudocode for brevity):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int main()
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;           MPI_Init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int x;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int p2result = Program2(x, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_Bcast(p2result, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int Program2(int x, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;           int returnval;
</span><br>
<span class="quotelev1">&gt;           MPI_AllReduce(&amp;returnval, x, comm);
</span><br>
<span class="quotelev1">&gt;           return returnval;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If the second program were to be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int Program2(int x, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;           MPI_Init();
</span><br>
<span class="quotelev1">&gt;           int returnval;
</span><br>
<span class="quotelev1">&gt;           MPI_AllReduce(&amp;returnval, x, comm);
</span><br>
<span class="quotelev1">&gt;           return returnval;
</span><br>
<span class="quotelev1">&gt;           MPI_Finalize()
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The program would return to serial when MPI_Finalize is first
</span><br>
<span class="quotelev1">&gt; called, potentially throwing several errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -Andrew Burns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----Original Message-----
</span><br>
<span class="quotelev1">&gt;         From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Muhammad Ashfaqur Rahman
</span><br>
<span class="quotelev1">&gt;         Sent: Wednesday, February 04, 2015 3:42 PM
</span><br>
<span class="quotelev1">&gt;         To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] prob in running two mpi merged program
</span><br>
<span class="quotelev1">&gt; (UNCLASSIFIED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Dear Andrew Burns,
</span><br>
<span class="quotelev1">&gt;         Thank you for your ideas. Your guess is partly correct, I am
</span><br>
<span class="quotelev1">&gt; trying to merge two sets of programs into one executable and
</span><br>
<span class="quotelev1">&gt; then run
</span><br>
<span class="quotelev1">&gt;         in mpi.
</span><br>
<span class="quotelev1">&gt;         As per your suggestion, I have omitted the MPI_Finalize from of
</span><br>
<span class="quotelev1">&gt; one set. And also commented the MPI_Barrier in some parts.
</span><br>
<span class="quotelev1">&gt;         But still it is serial.
</span><br>
<span class="quotelev1">&gt;         For your idea: attached here Makefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards
</span><br>
<span class="quotelev1">&gt;         Ashfaq
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Tue, Feb 3, 2015 at 6:26 PM, Burns, Andrew J CTR (US) &lt;
</span><br>
<span class="quotelev1">&gt; andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt;                 Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 If I could venture a guess, it sounds like you are trying
</span><br>
<span class="quotelev1">&gt; to merge two separate programs into one executable and run
</span><br>
<span class="quotelev1">&gt; them in
</span><br>
<span class="quotelev1">&gt;         parallel
</span><br>
<span class="quotelev1">&gt;                 via MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 The problem sounds like an issue where your program starts
</span><br>
<span class="quotelev1">&gt; in parallel but then changes back to serial while the
</span><br>
<span class="quotelev1">&gt; program is
</span><br>
<span class="quotelev1">&gt;         still
</span><br>
<span class="quotelev1">&gt;                 executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I can't be entirely sure without looking at the code
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 One guess is that MPI_Finalize is in the wrong location.
</span><br>
<span class="quotelev1">&gt; Finalize should be called to end the parallel section and
</span><br>
<span class="quotelev1">&gt; move the
</span><br>
<span class="quotelev1">&gt;         program
</span><br>
<span class="quotelev1">&gt;                 back to serial. Typically this means that Finalize will be
</span><br>
<span class="quotelev1">&gt; very close to the last line of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 It may also be possible that with the way your program is
</span><br>
<span class="quotelev1">&gt; structured, the effect is effectively serial since only
</span><br>
<span class="quotelev1">&gt; one core
</span><br>
<span class="quotelev1">&gt;         is
</span><br>
<span class="quotelev1">&gt;                 processing at any given moment. This may be due to
</span><br>
<span class="quotelev1">&gt; extensive use of barrier or similar functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Andrew Burns
</span><br>
<span class="quotelev1">&gt;                 Lockheed Martin
</span><br>
<span class="quotelev1">&gt;                 Software Engineer
</span><br>
<span class="quotelev1">&gt;                 410-306-0409
</span><br>
<span class="quotelev1">&gt;                 ARL DSRC
</span><br>
<span class="quotelev1">&gt;                 andrew.j.burns2_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 andrew.j.burns35.ctr_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 -----Original Message-----
</span><br>
<span class="quotelev1">&gt;                 From: users [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt;                 Sent: Tuesday, February 03, 2015 9:05 AM
</span><br>
<span class="quotelev1">&gt;                 To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;                 Subject: Re: [OMPI users] prob in running two mpi merged
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I'm afraid I don't quite understand what you are saying,
</span><br>
<span class="quotelev1">&gt; so let's see if I can clarify. You have two fortran MPI
</span><br>
<span class="quotelev1">&gt; programs.
</span><br>
<span class="quotelev1">&gt;         You start
</span><br>
<span class="quotelev1">&gt;                 one using &quot;mpiexec&quot;. You then start the other one as a
</span><br>
<span class="quotelev1">&gt; singleton - i.e., you just run &quot;myapp&quot; without using mpiexec.
</span><br>
<span class="quotelev1">&gt; The two
</span><br>
<span class="quotelev1">&gt;         apps are
</span><br>
<span class="quotelev1">&gt;                 attempting to execute an MPI_Connect/accept so they can
</span><br>
<span class="quotelev1">&gt; &quot;join&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Is that correct? You mention MPICH in your statement about
</span><br>
<span class="quotelev1">&gt; one of the procs - are you using MPICH or Open MPI? If
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;         latter, which
</span><br>
<span class="quotelev1">&gt;                 version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;
</span><br>
<span class="quotelev1">&gt; ashfaq226_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Dear All,
</span><br>
<span class="quotelev1">&gt;                         Take my greetings. I am new in mpi usage. I have
</span><br>
<span class="quotelev1">&gt; problems in parallel run, when two fortran mpi programs are
</span><br>
<span class="quotelev1">&gt; merged
</span><br>
<span class="quotelev1">&gt;         to one
</span><br>
<span class="quotelev1">&gt;                 executable. If these two are separate, then they are
</span><br>
<span class="quotelev1">&gt; running parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         One program has used spmd and another one  has
</span><br>
<span class="quotelev1">&gt; used mpich header directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Other issue is that while trying to run the above
</span><br>
<span class="quotelev1">&gt; mentioned merged program in mpi, it's first started with
</span><br>
<span class="quotelev1">&gt; separate
</span><br>
<span class="quotelev1">&gt;         parallel
</span><br>
<span class="quotelev1">&gt;                 instances of same step and then after some steps it
</span><br>
<span class="quotelev1">&gt; becomes serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Please help me in this regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Ashfaq
</span><br>
<span class="quotelev1">&gt;                         Ph.D Student
</span><br>
<span class="quotelev1">&gt;                         Dept. of Meteorology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;                         users mailing list
</span><br>
<span class="quotelev1">&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                         Link to this post:
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
<span class="quotelev1">&gt;                 Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt;                 Caveats: NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26293.php">http://www.open-mpi.org/community/lists/users/2015/02/26293.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26300.php">http://www.open-mpi.org/community/lists/users/2015/02/26300.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>




<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/output.txt">output.txt</a>
</ul>
<!-- attachment="output.txt" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/aadmn.F">aadmn.F</a>
</ul>
<!-- attachment="aadmn.F" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/dadmn.F">dadmn.F</a>
</ul>
<!-- attachment="dadmn.F" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/initialize.F">initialize.F</a>
</ul>
<!-- attachment="initialize.F" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26327/program_off.F90">program_off.F90</a>
</ul>
<!-- attachment="program_off.F90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>In reply to:</strong> <a href="26300.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
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
