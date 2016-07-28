<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:44:34 2016" -->
<!-- isoreceived="20160317144434" -->
<!-- sent="Thu, 17 Mar 2016 14:44:31 +0000" -->
<!-- isosent="20160317144431" -->
<!-- name="Bland, Wesley" -->
<!-- email="wesley.bland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="5D0A24F1-C4E8-4CF7-BE40-E543A2A43758_at_intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25FB4B05-5ADD-482D-ABAF-CFF7477081B2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault tolerant feature in Open MPI<br>
<strong>From:</strong> Bland, Wesley (<em>wesley.bland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Presumably Adaptive MPI would allow you to do that. I don&#226;&#128;&#153;t know all the details of how that works there though.
<br>

<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, March 17, 2016 at 9:17 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Fault tolerant feature in Open MPI
<br>

<br>
Just to clarify: I am not aware of any MPI that will allow you to relocate a process while it is running. You have to checkpoint the job, terminate it, and then restart the entire thing with the desired process on the new node.
<br>

<br>

<br>
On Mar 16, 2016, at 3:15 AM, Husen R &lt;hus3nr_at_[hidden]&lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
<br>

<br>
In the case of MPI application (not gromacs), How do I relocate MPI application from one node to another node while it is running ?
<br>
I'm sorry, as far as I know the ompi-restart command is used to restart application, based on checkpoint file, once the application already terminated (no longer running).
<br>
Thanks
<br>
regards,
<br>
Husen
<br>

<br>
On Wed, Mar 16, 2016 at 4:29 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
<br>
Just checkpoint-restart the app to relocate. The overhead will be lower than trying to do with MPI.
<br>

<br>
Jeff
<br>

<br>

<br>
On Wednesday, March 16, 2016, Husen R &lt;hus3nr_at_[hidden]&lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
<br>
Hi Jeff,
<br>
Thanks for the reply.
<br>
After consulting the Gromacs docs, as you suggested, Gromacs already supports checkpoint/restart. thanks for the suggestion.
<br>

<br>
Previously, I asked about checkpoint/restart in Open MPI because I want to checkpoint MPI Application and restart/migrate it while it is running.
<br>
For the example, I run MPI application in node A,B and C in a cluster and I want to migrate process running in node A to other node, let's say to node C.
<br>
is there a way to do this with open MPI ? thanks.
<br>
Regards,
<br>
Husen
<br>

<br>

<br>

<br>
On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
Why do you need OpenMPI to do this? Molecular dynamics trajectories are trivial to checkpoint and restart at the application level. I'm sure Gromacs already supports this. Please consult the Gromacs docs or user support for details.
<br>

<br>
Jeff
<br>

<br>

<br>
On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
<br>
Dear Open MPI Users,
<br>

<br>
Does the current stable release of Open MPI (v1.10 series) support fault tolerant feature ?
<br>
I got the information from Open MPI FAQ that The checkpoint/restart support was last released as part of the v1.6 series.
<br>
I just want to make sure about this.
<br>
and by the way, does Open MPI able to checkpoint or restart mpi application/GROMACS automatically ?
<br>
Please, I really need help.
<br>
Regards,
<br>

<br>
Husen
<br>

<br>

<br>
--
<br>
Jeff Hammond
<br>
jeff.science_at_[hidden]
<br>
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>
<br>

<br>

<br>

<br>
--
<br>
Jeff Hammond
<br>
jeff.science_at_[hidden]&lt;mailto:jeff.science_at_[hidden]&gt;
<br>
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28710.php">http://www.open-mpi.org/community/lists/users/2016/03/28710.php</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
