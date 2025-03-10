<?
$subject_val = "Re: [OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 10:19:29 2012" -->
<!-- isoreceived="20120306151929" -->
<!-- sent="Tue, 6 Mar 2012 10:19:24 -0500" -->
<!-- isosent="20120306151924" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="07C0FF24-13B6-4E68-B403-D1B09ADC19E7_at_nd.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF910D7905.8DEB3D7D-ONC12579B9.0053C556-C12579B9.00546390_at_bull.net" -->
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
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 10:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will definitely try that. Thanks for the suggestion.
<br>
<p>Basically, I need to be able to scatter values from a sender to a subset of ranks (as I scale my production code, I don't want to use MPI_COMM_WORLD, as the receiver list will be quite small) without the receivers knowing if they are to receive something in advance of the scatter.
<br>
<p>Thanks again for any help,
<br>
<p>Tim.
<br>
<p>On Mar 6, 2012, at 10:17 AM, &lt;nadia.derbey_at_[hidden]&lt;mailto:nadia.derbey_at_[hidden]&gt;&gt; wrote:
<br>
<p>Tim,
<br>
<p>Since MPI_Comm_create sets the created communicator to MPI_COMM_NULL for the processes that are not in the group , may be preceding your collectives by a:
<br>
if (MPI_COMM_NULL != new_comm) {
<br>
&nbsp;&nbsp;&nbsp;&lt;your collective&gt;
<br>
}
<br>
could be enough.
<br>
<p>But may be I'm wrong: I'll let the specialists answer.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
--
Nadia Derbey
users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; wrote on 03/06/2012 02:32:03 PM:
&gt; De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&lt;mailto:Timothy.Stitt.9_at_[hidden]&gt;&gt;
&gt; A : Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
&gt; Date : 03/06/2012 02:32 PM
&gt; Objet : Re: [OMPI users] Scatter+Group Communicator Issue
&gt; Envoy&#233; par : users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
&gt;
&gt; Hi Nadia,
&gt;
&gt; Thanks for the reply. This is were my confusion with the scatter
&gt; command comes in. I was really hoping that MPI_Scatter would
&gt; automagically ignore the ranks that are not part of the group
&gt; communicator, since this test code is part of something more
&gt; complicated were many sub-communicators are created over various
&gt; combinations of ranks, and used in various collective routines. Do I
&gt; really have to filter out manually the non-communicator ranks before
&gt; I call the scatter...it would be really nice if the scatter command
&gt; was 'smart' enough to do this for me by looking at the communicator
&gt; that is passed to the routine.
&gt;
&gt; Thanks again,
&gt;
&gt; Tim.
&gt;
&gt; On Mar 6, 2012, at 8:28 AM, &lt;nadia.derbey_at_[hidden]&lt;mailto:nadia.derbey_at_[hidden]&gt;&gt; wrote:
&gt;
&gt; Isn't it because you're calling MPI_Scatter() even on rank 2 which
&gt; is not part of your new_comm?
&gt;
&gt; Regards,
&gt; Nadia
&gt;
&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; wrote on 03/06/2012 01:52:06 PM:
&gt;
&gt; &gt; De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&lt;mailto:Timothy.Stitt.9_at_[hidden]&gt;&gt;
&gt; &gt; A : &quot;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
&gt; &gt; Date : 03/06/2012 01:52 PM
&gt; &gt; Objet : [OMPI users] Scatter+Group Communicator Issue
&gt; &gt; Envoy&#233; par : users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
&gt; &gt;
&gt; &gt; Hi all,
&gt; &gt;
&gt; &gt; I am scratching my head over what I think should be a relatively
&gt; &gt; simple group communicator operation. I am hoping some kind person
&gt; &gt; can put me out of my misery and figure out what I'm doing wrong.
&gt; &gt;
&gt; &gt; Basically, I am trying to scatter a set of values to a subset of
&gt; &gt; process ranks (hence the need for a group communicator). When I run
&gt; &gt; the sample code over 4 processes (and scattering to 3 processes), I
&gt; &gt; am getting a group-communicator related error in the scatter operation:
&gt; &gt;
&gt; &gt; &gt; [stats.crc.nd.edu:29285] *** An error occurred in MPI_Scatter
&gt; &gt; &gt; [stats.crc.nd.edu:29285] *** on communicator MPI_COMM_WORLD
&gt; &gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERR_COMM: invalid communicator
&gt; &gt; &gt; [stats.crc.nd.edu:29285] *** MPI_ERRORS_ARE_FATAL (your MPI job
&gt; &gt; will now abort)
&gt; &gt; &gt;  Complete - Rank           1
&gt; &gt; &gt;  Complete - Rank           0
&gt; &gt; &gt;  Complete - Rank           3
&gt; &gt;
&gt; &gt; The actual test code is below:
&gt; &gt;
&gt; &gt; program scatter_bug
&gt; &gt;
&gt; &gt;   use mpi
&gt; &gt;
&gt; &gt;   implicit none
&gt; &gt;
&gt; &gt;   integer :: ierr,my_rank,procValues(3),procRanks(3)
&gt; &gt;   integer :: in_cnt,orig_group,new_group,new_comm,out
&gt; &gt;
&gt; &gt;   call MPI_INIT(ierr)
&gt; &gt;   call MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
&gt; &gt;
&gt; &gt;   procRanks=(/0,1,3/)
&gt; &gt;   procValues=(/0,434,268/)
&gt; &gt;   in_cnt=3
&gt; &gt;
&gt; &gt;   ! Create sub-communicator
&gt; &gt;   call MPI_COMM_GROUP(MPI_COMM_WORLD, orig_group, ierr)
&gt; &gt;   call MPI_Group_incl(orig_group, in_cnt, procRanks, new_group, ierr)
&gt; &gt;   call MPI_COMM_CREATE(MPI_COMM_WORLD, new_group, new_comm, ierr)
&gt; &gt;
&gt; &gt;   call MPI_SCATTER(procValues, 1, MPI_INTEGER, out, 1, MPI_INTEGER,
&gt; &gt; 0, new_comm, ierr);
&gt; &gt;
&gt; &gt;   print *,&quot;Complete - Rank&quot;, my_rank
&gt; &gt;
&gt; &gt; end program scatter_bug
&gt; &gt;
&gt; &gt; Thanks in advance for any advice you can give.
&gt; &gt;
&gt; &gt; Regards.
&gt; &gt;
&gt; &gt; Tim.
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &lt;ATT00001..txt&gt;
&gt;
&gt; Tim Stitt PhD (User Support Manager).
&gt; Center for Research Computing | University of Notre Dame |
&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email:
&gt; tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt">http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt</a>&gt;
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18696.php">Dave Love: "[OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>Reply:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
