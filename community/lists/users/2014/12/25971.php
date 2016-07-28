<?
$subject_val = "Re: [OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 23:30:37 2014" -->
<!-- isoreceived="20141212043037" -->
<!-- sent="Fri, 12 Dec 2014 13:30:51 +0900" -->
<!-- isosent="20141212043051" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI inside MPI (still)" -->
<!-- id="548A6F7B.7090607_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGs3GVYWEB_w7ysQ15A_33_6A2e_hLgxCxXgU+_D8PZCpP4Ttg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-11 23:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25970.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25970.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>just to make sure ...
<br>
this is the behavior you expected, right ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/12 13:27, Alex A. Schmidt wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, very nice!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I excute
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do rank=1,3
</span><br>
<span class="quotelev1">&gt;     call  MPI_Comm_spawn('hello_world','
</span><br>
<span class="quotelev1">&gt; ',5,MPI_INFO_NULL,rank,MPI_COMM_WORLD,my_intercomm,MPI_ERRCODES_IGNORE,status)
</span><br>
<span class="quotelev1">&gt; enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do get 15 instances of the 'hello_world' app running: 5 for each parent
</span><br>
<span class="quotelev1">&gt; rank 1, 2 and 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot, Gilles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regargs,
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
<span class="quotelev1">&gt; 2014-12-12 1:32 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; just ask MPI_Comm_spawn to start (up to) 5 tasks via the maxprocs
</span><br>
<span class="quotelev2">&gt;&gt; parameter :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        int MPI_Comm_spawn(char *command, char *argv[], int maxprocs,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info info,
</span><br>
<span class="quotelev2">&gt;&gt;                          int root, MPI_Comm comm, MPI_Comm *intercomm,
</span><br>
<span class="quotelev2">&gt;&gt;                          int array_of_errcodes[])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; INPUT PARAMETERS
</span><br>
<span class="quotelev2">&gt;&gt;        maxprocs
</span><br>
<span class="quotelev2">&gt;&gt;               - maximum number of processes to start (integer, significant
</span><br>
<span class="quotelev2">&gt;&gt; only at root)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/12 12:23, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2
</span><br>
<span class="quotelev2">&gt;&gt; hello_world' &quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did produce the expected result with a simple openmi &quot;hello_world&quot; code I
</span><br>
<span class="quotelev2">&gt;&gt; wrote.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I might be harder though with the real third party app I have in mind. And
</span><br>
<span class="quotelev2">&gt;&gt; I realize
</span><br>
<span class="quotelev2">&gt;&gt; getting passed over a job scheduler with this approach might not work at
</span><br>
<span class="quotelev2">&gt;&gt; all...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have looked at the MPI_Comm_spawn call but I failed to understand how it
</span><br>
<span class="quotelev2">&gt;&gt; could help here. For instance, can I use it to launch an mpi app with the
</span><br>
<span class="quotelev2">&gt;&gt; option &quot;-n 5&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you try something like
</span><br>
<span class="quotelev2">&gt;&gt; call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name')
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -i start with an empty environment
</span><br>
<span class="quotelev2">&gt;&gt; that being said, you might need to set a few environment variables
</span><br>
<span class="quotelev2">&gt;&gt; manually :
</span><br>
<span class="quotelev2">&gt;&gt; env -i PATH=/bin ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and that being also said, this &quot;trick&quot; could be just a bad idea :
</span><br>
<span class="quotelev2">&gt;&gt; you might be using a scheduler, and if you empty the environment, the
</span><br>
<span class="quotelev2">&gt;&gt; scheduler
</span><br>
<span class="quotelev2">&gt;&gt; will not be aware of the &quot;inside&quot; run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on top of that, invoking system might fail depending on the interconnect
</span><br>
<span class="quotelev2">&gt;&gt; you use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bottom line, i believe Ralph's reply is still valid, even if five years
</span><br>
<span class="quotelev2">&gt;&gt; have passed :
</span><br>
<span class="quotelev2">&gt;&gt; changing your workflow, or using MPI_Comm_spawn is a much better approach.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/12 11:22, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the reply
</span><br>
<span class="quotelev2">&gt;&gt; from Ralph Castain is still valid. My need is similar but quite simpler:
</span><br>
<span class="quotelev2">&gt;&gt; to make a system call from an openmpi fortran application to run a
</span><br>
<span class="quotelev2">&gt;&gt; third party openmpi application. I don't need to exchange mpi messages
</span><br>
<span class="quotelev2">&gt;&gt; with the application. I just need to read the resulting output file
</span><br>
<span class="quotelev2">&gt;&gt; generated
</span><br>
<span class="quotelev2">&gt;&gt; by it. I have tried to do the following system call from my fortran openmpi
</span><br>
<span class="quotelev2">&gt;&gt; code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call system(&quot;sh -c 'mpirun -n 2 app_name&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI does not support recursive calls of mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to make this work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25968.php">http://www.open-mpi.org/community/lists/users/2014/12/25968.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25969.php">http://www.open-mpi.org/community/lists/users/2014/12/25969.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25970.php">http://www.open-mpi.org/community/lists/users/2014/12/25970.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25970.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25970.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25972.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
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
