<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:17:24 2016" -->
<!-- isoreceived="20160317141724" -->
<!-- sent="Thu, 17 Mar 2016 07:17:04 -0700" -->
<!-- isosent="20160317141704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="25FB4B05-5ADD-482D-ABAF-CFF7477081B2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACPfdUsmQdh9Y8g-hv4bo8ffAGeaZ2W3chn0wB+tZ9k6kVcDhQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28710.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify: I am not aware of any MPI that will allow you to relocate a process while it is running. You have to checkpoint the job, terminate it, and then restart the entire thing with the desired process on the new node.
<br>
<p><p><span class="quotelev1">&gt; On Mar 16, 2016, at 3:15 AM, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the case of MPI application (not gromacs), How do I relocate MPI application from one node to another node while it is running ?
</span><br>
<span class="quotelev1">&gt; I'm sorry, as far as I know the ompi-restart command is used to restart application, based on checkpoint file, once the application already terminated (no longer running).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Husen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2016 at 4:29 PM, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Just checkpoint-restart the app to relocate. The overhead will be lower than trying to do with MPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, March 16, 2016, Husen R &lt;hus3nr_at_[hidden] &lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After consulting the Gromacs docs, as you suggested, Gromacs already supports checkpoint/restart. thanks for the suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previously, I asked about checkpoint/restart in Open MPI because I want to checkpoint MPI Application and restart/migrate it while it is running.
</span><br>
<span class="quotelev1">&gt; For the example, I run MPI application in node A,B and C in a cluster and I want to migrate process running in node A to other node, let's say to node C.
</span><br>
<span class="quotelev1">&gt; is there a way to do this with open MPI ? thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Husen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Why do you need OpenMPI to do this? Molecular dynamics trajectories are trivial to checkpoint and restart at the application level. I'm sure Gromacs already supports this. Please consult the Gromacs docs or user support for details. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear Open MPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the current stable release of Open MPI (v1.10 series) support fault tolerant feature ?
</span><br>
<span class="quotelev1">&gt; I got the information from Open MPI FAQ that The checkpoint/restart support was last released as part of the v1.6 series. 
</span><br>
<span class="quotelev1">&gt; I just want to make sure about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and by the way, does Open MPI able to checkpoint or restart mpi application/GROMACS automatically ? 
</span><br>
<span class="quotelev1">&gt; Please, I really need help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Husen 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28710.php">http://www.open-mpi.org/community/lists/users/2016/03/28710.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28732.php">Gilles Gouaillardet: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28710.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Reply:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
