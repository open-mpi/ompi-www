<?
$subject_val = "Re: [OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 21:35:52 2014" -->
<!-- isoreceived="20141212023552" -->
<!-- sent="Fri, 12 Dec 2014 11:36:05 +0900" -->
<!-- isosent="20141212023605" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI inside MPI (still)" -->
<!-- id="548A5495.7090000_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGs3GVYCMVUXFgE9RfKqKEurWz4BhvT65D3izVR5EJKj+1Mwyw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 21:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>can you try something like
<br>
call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name')
<br>
<p>-i start with an empty environment
<br>
that being said, you might need to set a few environment variables
<br>
manually :
<br>
env -i PATH=/bin ...
<br>
<p>and that being also said, this &quot;trick&quot; could be just a bad idea :
<br>
you might be using a scheduler, and if you empty the environment, the
<br>
scheduler
<br>
will not be aware of the &quot;inside&quot; run.
<br>
<p>on top of that, invoking system might fail depending on the interconnect
<br>
you use.
<br>
<p>Bottom line, i believe Ralph's reply is still valid, even if five years
<br>
have passed :
<br>
changing your workflow, or using MPI_Comm_spawn is a much better approach.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/12 11:22, Alex A. Schmidt wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding to this previous post
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25966.php">Alex A. Schmidt: "[OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25968.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
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
