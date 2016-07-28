<?
$subject_val = "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 08:40:06 2009" -->
<!-- isoreceived="20090818124006" -->
<!-- sent="Tue, 18 Aug 2009 14:39:58 +0200" -->
<!-- isosent="20090818123958" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple" -->
<!-- id="b88e40560908180539r1d6c5a4aw36849194b04d27fd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C11D0E86-37D5-425C-8D26-65B7358B7C5C_at_cisco.com" -->
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
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 08:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I've solved my problem:
<br>
<p>in the previous code the arguments of the MPI_Comm_spawn_multiple where
<br>
filled only by the &quot;root&quot; process not by all the process in the group. Now
<br>
all the ranks have all that information and the spawn is done correctly.
<br>
But I read on <a href="http://www.mpi-forum.org/docs/mpi21-report/node203.htm">http://www.mpi-forum.org/docs/mpi21-report/node203.htm</a> that
<br>
those information are significant only at root.
<br>
In any case now it works.
<br>
<p>Thanks,
<br>
Federico
<br>
<p><p><p>2009/8/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2009, at 5:12 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In the info object I only set the &quot;host&quot; key (after creatig the object
</span><br>
<span class="quotelev2">&gt;&gt; with the MPI_Info_create).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've modified my code to leave out that request and created the array of
</span><br>
<span class="quotelev2">&gt;&gt; Info object as an array of MPI_INFO_NULL but the problem is still the same.
</span><br>
<span class="quotelev2">&gt;&gt; The error is thrown only when running with more than one process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I send you a short program for testing it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have a short program that can replicate the problem, yes, that would
</span><br>
<span class="quotelev1">&gt; be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
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
