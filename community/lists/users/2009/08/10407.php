<?
$subject_val = "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 10:48:54 2009" -->
<!-- isoreceived="20090818144854" -->
<!-- sent="Tue, 18 Aug 2009 08:48:49 -0600" -->
<!-- isosent="20090818144849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple" -->
<!-- id="71d2d8cc0908180748s5434b8a7q707a75839e07f175_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908180734g4ce55349u6ec25b0f1a1fdc7_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-18 10:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW: I did see one issue in your program. In the program that isn't working,
<br>
you declare the various input arrays for MPI_Comm_spawn_multiple, but only
<br>
the manager rank=0 ever initializes them. Thus, the other manager ranks were
<br>
passing random garbage down to the function.
<br>
<p>Even though only the root process looks at those params, it still shouldn't
<br>
be random garbage just from a programming standpoint. At the least, set them
<br>
to NULL or something.
<br>
<p><p><p>On Tue, Aug 18, 2009 at 8:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; By any chance did you have the flag on to check MPI parameters? I think we
</span><br>
<span class="quotelev1">&gt; have a bug in there that might be causing what you saw, but it would only be
</span><br>
<span class="quotelev1">&gt; active if you had requested that OMPI check parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/8/18 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's is you've done: the worker program spawned and the two versions of
</span><br>
<span class="quotelev2">&gt;&gt; the manager that call the spawning.
</span><br>
<span class="quotelev2">&gt;&gt; I you find something wrong please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;    Federico
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/8/18 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ????
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only the root process needs to provide the info keys for spawning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything. If that isn't correct, then we have a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you send us a code snippet that shows what you were doing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/8/18 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I've solved my problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the previous code the arguments of the MPI_Comm_spawn_multiple where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; filled only by the &quot;root&quot; process not by all the process in the group. Now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the ranks have all that information and the spawn is done correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I read on <a href="http://www.mpi-forum.org/docs/mpi21-report/node203.htmthat">http://www.mpi-forum.org/docs/mpi21-report/node203.htmthat</a> those information are significant only at root.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In any case now it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2009/8/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 18, 2009, at 5:12 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  In the info object I only set the &quot;host&quot; key (after creatig the object
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with the MPI_Info_create).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've modified my code to leave out that request and created the array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of Info object as an array of MPI_INFO_NULL but the problem is still the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The error is thrown only when running with more than one process.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do I send you a short program for testing it?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you have a short program that can replicate the problem, yes, that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be great.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
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
