<?
$subject_val = "Re: [OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 11:46:35 2012" -->
<!-- isoreceived="20120306164635" -->
<!-- sent="Tue, 6 Mar 2012 11:46:27 -0500" -->
<!-- isosent="20120306164627" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="03846B8B-0132-4D2E-9F3B-4289A236E7E0_at_nd.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="99C0B820-0CA7-40F2-B593-9ECF499F18CD_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2012-03-06 11:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus,
<br>
<p>That was a transcription error on my part to email. The Finalize is in the actual code I used.
<br>
<p>Thanks,
<br>
<p>Tim.
<br>
<p>On Mar 6, 2012, at 11:43 AM, Gustavo Correa wrote:
<br>
<p>Hi Timothy
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
<p>Will definitely try that. Thanks for the suggestion.
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
&nbsp;&nbsp;&lt;your collective&gt;
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
De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&lt;mailto:Timothy.Stitt.9_at_[hidden]&gt;&gt;
A : Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Date : 03/06/2012 02:32 PM
Objet : Re: [OMPI users] Scatter+Group Communicator Issue
Envoy&#233; par : users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
Hi Nadia,
Thanks for the reply. This is were my confusion with the scatter
command comes in. I was really hoping that MPI_Scatter would
automagically ignore the ranks that are not part of the group
communicator, since this test code is part of something more
complicated were many sub-communicators are created over various
combinations of ranks, and used in various collective routines. Do I
really have to filter out manually the non-communicator ranks before
I call the scatter...it would be really nice if the scatter command
was 'smart' enough to do this for me by looking at the communicator
that is passed to the routine.
Thanks again,
Tim.
On Mar 6, 2012, at 8:28 AM, &lt;nadia.derbey_at_[hidden]&lt;mailto:nadia.derbey_at_[hidden]&gt;&gt; wrote:
Isn't it because you're calling MPI_Scatter() even on rank 2 which
is not part of your new_comm?
Regards,
Nadia
users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; wrote on 03/06/2012 01:52:06 PM:
De : Timothy Stitt &lt;Timothy.Stitt.9_at_[hidden]&lt;mailto:Timothy.Stitt.9_at_[hidden]&gt;&gt;
A : &quot;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Date : 03/06/2012 01:52 PM
Objet : [OMPI users] Scatter+Group Communicator Issue
Envoy&#233; par : users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
Hi all,
I am scratching my head over what I think should be a relatively
simple group communicator operation. I am hoping some kind person
can put me out of my misery and figure out what I'm doing wrong.
Basically, I am trying to scatter a set of values to a subset of
process ranks (hence the need for a group communicator). When I run
the sample code over 4 processes (and scattering to 3 processes), I
am getting a group-communicator related error in the scatter operation:
[stats.crc.nd.edu:29285] *** An error occurred in MPI_Scatter
[stats.crc.nd.edu:29285] *** on communicator MPI_COMM_WORLD
[stats.crc.nd.edu:29285] *** MPI_ERR_COMM: invalid communicator
[stats.crc.nd.edu:29285] *** MPI_ERRORS_ARE_FATAL (your MPI job
will now abort)
Complete - Rank           1
Complete - Rank           0
Complete - Rank           3
The actual test code is below:
program scatter_bug
 use mpi
 implicit none
 integer :: ierr,my_rank,procValues(3),procRanks(3)
 integer :: in_cnt,orig_group,new_group,new_comm,out
 call MPI_INIT(ierr)
 call MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
 procRanks=(/0,1,3/)
 procValues=(/0,434,268/)
 in_cnt=3
 ! Create sub-communicator
 call MPI_COMM_GROUP(MPI_COMM_WORLD, orig_group, ierr)
 call MPI_Group_incl(orig_group, in_cnt, procRanks, new_group, ierr)
 call MPI_COMM_CREATE(MPI_COMM_WORLD, new_group, new_comm, ierr)
 call MPI_SCATTER(procValues, 1, MPI_INTEGER, out, 1, MPI_INTEGER,
0, new_comm, ierr);
 print *,&quot;Complete - Rank&quot;, my_rank
end program scatter_bug
Thanks in advance for any advice you can give.
Regards.
Tim.
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&lt;ATT00001..txt&gt;
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email:
tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt">http://www.open-mpi.org/mailman/listinfo.cgi/users<ATT00001..txt</a>&gt;
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18700.php">Dave Love: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18698.php">Gustavo Correa: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Reply:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
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
