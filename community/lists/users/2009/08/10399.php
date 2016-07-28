<?
$subject_val = "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 09:24:11 2009" -->
<!-- isoreceived="20090818132411" -->
<!-- sent="Tue, 18 Aug 2009 07:24:05 -0600" -->
<!-- isosent="20090818132405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple" -->
<!-- id="71d2d8cc0908180624g6c2fbc62y65a10467ebd80c64_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b88e40560908180539r1d6c5a4aw36849194b04d27fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 09:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10400.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
????
<br>
<p>Only the root process needs to provide the info keys for spawning anything.
<br>
If that isn't correct, then we have a bug.
<br>
<p>Could you send us a code snippet that shows what you were doing?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>2009/8/18 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I think I've solved my problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the previous code the arguments of the MPI_Comm_spawn_multiple where
</span><br>
<span class="quotelev1">&gt; filled only by the &quot;root&quot; process not by all the process in the group. Now
</span><br>
<span class="quotelev1">&gt; all the ranks have all that information and the spawn is done correctly.
</span><br>
<span class="quotelev1">&gt; But I read on <a href="http://www.mpi-forum.org/docs/mpi21-report/node203.htm">http://www.mpi-forum.org/docs/mpi21-report/node203.htm</a> that
</span><br>
<span class="quotelev1">&gt; those information are significant only at root.
</span><br>
<span class="quotelev1">&gt; In any case now it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/8/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2009, at 5:12 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  In the info object I only set the &quot;host&quot; key (after creatig the object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the MPI_Info_create).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've modified my code to leave out that request and created the array of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Info object as an array of MPI_INFO_NULL but the problem is still the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error is thrown only when running with more than one process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I send you a short program for testing it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have a short program that can replicate the problem, yes, that
</span><br>
<span class="quotelev2">&gt;&gt; would be great.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10400.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
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
