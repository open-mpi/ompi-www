<?
$subject_val = "Re: [OMPI users] OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 20:43:45 2014" -->
<!-- isoreceived="20141213014345" -->
<!-- sent="Fri, 12 Dec 2014 23:43:43 -0200" -->
<!-- isosent="20141213014343" -->
<!-- name="Alex A. Schmidt" -->
<!-- email="aas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI inside MPI (still)" -->
<!-- id="CAGs3GVadWpteZm8Oqt3SeMxOUWNmEBdoxZNYqNobmjCcn8oqdA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9759op7cwhlvu69g74me1wo6.1418430942255_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI inside MPI (still)<br>
<strong>From:</strong> Alex A. Schmidt (<em>aas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 20:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25974.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25974.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25977.php">Reuti: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>MPI_comm_disconnect seem to work but not quite.
<br>
The call to it returns almost immediatly while
<br>
the spawn processes keep piling up in the background
<br>
until they are all done...
<br>
<p>I think system('env -i qsub...') to launch the third party apps
<br>
would take the execution of every call back to the scheduler
<br>
queue. How would I track each one for their completion?
<br>
<p>Alex
<br>
<p>2014-12-12 22:35 GMT-02:00 Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need MPI_Comm_disconnect at least.
</span><br>
<span class="quotelev1">&gt; I am not sure if this is 100% correct nor working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using third party apps, why dont you do something like
</span><br>
<span class="quotelev1">&gt; system(&quot;env -i qsub ...&quot;)
</span><br>
<span class="quotelev1">&gt; with the right options to make qsub blocking or you manually wait for the
</span><br>
<span class="quotelev1">&gt; end of the job ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks like a much cleaner and simpler approach to me.
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
<span class="quotelev1">&gt; &quot;Alex A. Schmidt&quot; &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I believe I have a simple toy app running as I think it should:
</span><br>
<span class="quotelev1">&gt; 'n' parent processes running under mpi_comm_world, each one
</span><br>
<span class="quotelev1">&gt; spawning its own 'm' child processes (each child group work
</span><br>
<span class="quotelev1">&gt; together nicely, returning the expected result for an mpi_allreduce call).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, as I mentioned before, the apps I want to run in the spawned
</span><br>
<span class="quotelev1">&gt; processes are third party mpi apps and I don't think it will be possible
</span><br>
<span class="quotelev1">&gt; to exchange messages with them from my app. So, I do I tell
</span><br>
<span class="quotelev1">&gt; when the spawned processes have finnished running? All I have to work
</span><br>
<span class="quotelev1">&gt; with is the intercommunicator returned from the mpi_comm_spawn call...
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
<span class="quotelev1">&gt; 2014-12-12 2:42 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, yes, I guess....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll do tests with the real third party apps and let you know.
</span><br>
<span class="quotelev2">&gt;&gt; These are huge quantum chemistry codes (dftb+, siesta and Gaussian)
</span><br>
<span class="quotelev2">&gt;&gt; which greatly benefits from a parallel environment. My code is just
</span><br>
<span class="quotelev2">&gt;&gt; a front end to use those, but since we have a lot of data to process
</span><br>
<span class="quotelev2">&gt;&gt; it also benefits from a parallel environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-12 2:30 GMT-02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just to make sure ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is the behavior you expected, right ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/12 13:27, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, very nice!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I excute
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do rank=1,3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call  MPI_Comm_spawn('hello_world','
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ',5,MPI_INFO_NULL,rank,MPI_COMM_WORLD,my_intercomm,MPI_ERRCODES_IGNORE,status)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enddo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do get 15 instances of the 'hello_world' app running: 5 for each parent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1, 2 and 3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot, Gilles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regargs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-12-12 1:32 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just ask MPI_Comm_spawn to start (up to) 5 tasks via the maxprocs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int MPI_Comm_spawn(char *command, char *argv[], int maxprocs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info info,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          int root, MPI_Comm comm, MPI_Comm *intercomm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          int array_of_errcodes[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INPUT PARAMETERS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        maxprocs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               - maximum number of processes to start (integer, significant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only at root)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/12 12:23, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_world' &quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did produce the expected result with a simple openmi &quot;hello_world&quot; code I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I might be harder though with the real third party app I have in mind. And
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I realize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting passed over a job scheduler with this approach might not work at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have looked at the MPI_Comm_spawn call but I failed to understand how it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could help here. For instance, can I use it to launch an mpi app with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option &quot;-n 5&quot; ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you try something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name')
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -i start with an empty environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, you might need to set a few environment variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env -i PATH=/bin ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that being also said, this &quot;trick&quot; could be just a bad idea :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you might be using a scheduler, and if you empty the environment, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will not be aware of the &quot;inside&quot; run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on top of that, invoking system might fail depending on the interconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bottom line, i believe Ralph's reply is still valid, even if five years
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have passed :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changing your workflow, or using MPI_Comm_spawn is a much better approach.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/12 11:22, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if the reply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from Ralph Castain is still valid. My need is similar but quite simpler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to make a system call from an openmpi fortran application to run a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; third party openmpi application. I don't need to exchange mpi messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the application. I just need to read the resulting output file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by it. I have tried to do the following system call from my fortran openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call system(&quot;sh -c 'mpirun -n 2 app_name&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI does not support recursive calls of mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to make this work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25968.php">http://www.open-mpi.org/community/lists/users/2014/12/25968.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25969.php">http://www.open-mpi.org/community/lists/users/2014/12/25969.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25970.php">http://www.open-mpi.org/community/lists/users/2014/12/25970.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25971.php">http://www.open-mpi.org/community/lists/users/2014/12/25971.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25974.php">http://www.open-mpi.org/community/lists/users/2014/12/25974.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25974.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25974.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25976.php">George Bosilca: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25977.php">Reuti: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
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
