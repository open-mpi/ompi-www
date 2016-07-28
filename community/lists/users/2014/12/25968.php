<?
$subject_val = "Re: [OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 22:23:39 2014" -->
<!-- isoreceived="20141212032339" -->
<!-- sent="Fri, 12 Dec 2014 01:23:37 -0200" -->
<!-- isosent="20141212032337" -->
<!-- name="Alex A. Schmidt" -->
<!-- email="aas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI inside MPI (still)" -->
<!-- id="CAGs3GVYmPJbs=Vps1X0U+0VK0KZgko0FBLOdiBUpbjv4UpJzZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548A5495.7090000_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI inside MPI (still)<br>
<strong>From:</strong> Alex A. Schmidt (<em>aas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 22:23:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles,
<br>
<p>Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!!
<br>
<p>call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2
<br>
hello_world' &quot;)
<br>
<p>did produce the expected result with a simple openmi &quot;hello_world&quot; code I
<br>
wrote.
<br>
<p>I might be harder though with the real third party app I have in mind. And
<br>
I realize
<br>
getting passed over a job scheduler with this approach might not work at
<br>
all...
<br>
<p>I have looked at the MPI_Comm_spawn call but I failed to understand how it
<br>
could help here. For instance, can I use it to launch an mpi app with the
<br>
option &quot;-n 5&quot; ?
<br>
<p>Alex
<br>
<p>2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
<br>
<span class="quotelev1">&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you try something like
</span><br>
<span class="quotelev1">&gt; call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -i start with an empty environment
</span><br>
<span class="quotelev1">&gt; that being said, you might need to set a few environment variables
</span><br>
<span class="quotelev1">&gt; manually :
</span><br>
<span class="quotelev1">&gt; env -i PATH=/bin ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that being also said, this &quot;trick&quot; could be just a bad idea :
</span><br>
<span class="quotelev1">&gt; you might be using a scheduler, and if you empty the environment, the
</span><br>
<span class="quotelev1">&gt; scheduler
</span><br>
<span class="quotelev1">&gt; will not be aware of the &quot;inside&quot; run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on top of that, invoking system might fail depending on the interconnect
</span><br>
<span class="quotelev1">&gt; you use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bottom line, i believe Ralph's reply is still valid, even if five years
</span><br>
<span class="quotelev1">&gt; have passed :
</span><br>
<span class="quotelev1">&gt; changing your workflow, or using MPI_Comm_spawn is a much better approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/12/12 11:22, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
</span><br>
<span class="quotelev1">&gt; I wonder if the reply
</span><br>
<span class="quotelev1">&gt; from Ralph Castain is still valid. My need is similar but quite simpler:
</span><br>
<span class="quotelev1">&gt; to make a system call from an openmpi fortran application to run a
</span><br>
<span class="quotelev1">&gt; third party openmpi application. I don't need to exchange mpi messages
</span><br>
<span class="quotelev1">&gt; with the application. I just need to read the resulting output file
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; by it. I have tried to do the following system call from my fortran openmpi
</span><br>
<span class="quotelev1">&gt; code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call system(&quot;sh -c 'mpirun -n 2 app_name&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI does not support recursive calls of mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to make this work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25967.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25969.php">Gilles Gouaillardet: "Re: [OMPI users] MPI inside MPI (still)"</a>
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
