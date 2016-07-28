<?
$subject_val = "Re: [OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 11:43:30 2012" -->
<!-- isoreceived="20120306164330" -->
<!-- sent="Tue, 6 Mar 2012 11:43:24 -0500" -->
<!-- isosent="20120306164324" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="99C0B820-0CA7-40F2-B593-9ECF499F18CD_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="07C0FF24-13B6-4E68-B403-D1B09ADC19E7_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scatter+Group Communicator Issue<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 11:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>In reply to:</strong> <a href="18695.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Timothy
<br>
<p>There is no call to MPI_Finalize in the program.
<br>
Would this be the problem?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On Mar 6, 2012, at 10:19 AM, Timothy Stitt wrote:
<br>
<p><span class="quotelev1">&gt; Will definitely try that. Thanks for the suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, I need to be able to scatter values from a sender to a subset of ranks (as I scale my production code, I don't want to use MPI_COMM_WORLD, as the receiver list will be quite small) without the receivers knowing if they are to receive something in advance of the scatter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for any help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2012, at 10:17 AM, &lt;nadia.derbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since MPI_Comm_create sets the created communicator to MPI_COMM_NULL for the processes that are not in the group , may be preceding your collectives by a: 
</span><br>
<span class="quotelev2">&gt;&gt; if (MPI_COMM_NULL != new_comm) { 
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;your collective&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; } 
</span><br>
<span class="quotelev2">&gt;&gt; could be enough. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But may be I'm wrong: I'll let the specialists answer. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards, 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden] wrote on 03/06/2012 02:32:03 PM:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A : Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date : 03/06/2012 02:32 PM 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Objet : Re: [OMPI users] Scatter+Group Communicator Issue 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Envoy&#233; par : users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Nadia, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the reply. This is were my confusion with the scatter 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; command comes in. I was really hoping that MPI_Scatter would 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; automagically ignore the ranks that are not part of the group 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; communicator, since this test code is part of something more 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; complicated were many sub-communicators are created over various 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; combinations of ranks, and used in various collective routines. Do I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; really have to filter out manually the non-communicator ranks before
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I call the scatter...it would be really nice if the scatter command 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; was 'smart' enough to do this for me by looking at the communicator 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that is passed to the routine. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks again, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tim. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 6, 2012, at 8:28 AM, &lt;nadia.derbey_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Isn't it because you're calling MPI_Scatter() even on rank 2 which 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is not part of your new_comm? 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nadia 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users-bounces_at_[hidden] wrote on 03/06/2012 01:52:06 PM:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; A : &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Date : 03/06/2012 01:52 PM 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Objet : [OMPI users] Scatter+Group Communicator Issue 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Envoy&#233; par : users-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I am scratching my head over what I think should be a relatively 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; simple group communicator operation. I am hoping some kind person 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; can put me out of my misery and figure out what I'm doing wrong. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Basically, I am trying to scatter a set of values to a subset of 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; process ranks (hence the need for a group communicator). When I run 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; the sample code over 4 processes (and scattering to 3 processes), I 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; am getting a group-communicator related error in the scatter operation:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [stats.crc.nd.edu:29285] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [stats.crc.nd.edu:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERRORS_ARE_FATAL (your MPI job 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; will now abort)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;  Complete - Rank           1
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;  Complete - Rank           0
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;  Complete - Rank           3
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The actual test code is below:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; program scatter_bug
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   use mpi
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   implicit none
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   integer :: ierr,my_rank,procValues(3),procRanks(3)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   integer :: in_cnt,orig_group,new_group,new_comm,out
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   procRanks=(/0,1,3/)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   procValues=(/0,434,268/)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   in_cnt=3
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;      
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   ! Create sub-communicator
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_COMM_GROUP(MPI_COMM_WORLD, orig_group, ierr)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_Group_incl(orig_group, in_cnt, procRanks, new_group, ierr)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_COMM_CREATE(MPI_COMM_WORLD, new_group, new_comm, ierr)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;      
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   call MPI_SCATTER(procValues, 1, MPI_INTEGER, out, 1, MPI_INTEGER, 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 0, new_comm, ierr);
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   print *,&quot;Complete - Rank&quot;, my_rank
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; end program scatter_bug
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks in advance for any advice you can give.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Regards.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Tim.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;ATT00001..txt&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tim Stitt PhD (User Support Manager).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Center for Research Computing | University of Notre Dame | 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tstitt_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt">http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Stitt PhD (User Support Manager).
</span><br>
<span class="quotelev1">&gt; Center for Research Computing | University of Notre Dame | 
</span><br>
<span class="quotelev1">&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden] 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Previous message:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>In reply to:</strong> <a href="18695.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18699.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
