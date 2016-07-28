<?
$subject_val = "Re: [OMPI users] OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 19:35:52 2014" -->
<!-- isoreceived="20141213003552" -->
<!-- sent="Sat, 13 Dec 2014 09:35:42 +0900" -->
<!-- isosent="20141213003542" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI inside MPI (still)" -->
<!-- id="9759op7cwhlvu69g74me1wo6.1418430942255_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] MPI inside MPI (still)" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 19:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25973.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>You need MPI_Comm_disconnect at least.
<br>
I am not sure if this is 100% correct nor working.
<br>
<p>If you are using third party apps, why dont you do something like
<br>
system(&quot;env -i qsub ...&quot;)
<br>
with the right options to make qsub blocking or you manually wait for the end of the job ?
<br>
<p>That looks like a much cleaner and simpler approach to me.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>&quot;Alex A. Schmidt&quot; &lt;aas_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ok, I believe I have a simple toy app running as I think it should:
</span><br>
<span class="quotelev1">&gt;'n' parent processes running under mpi_comm_world, each one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;spawning its own 'm' child processes (each child group work 
</span><br>
<span class="quotelev1">&gt;together nicely, returning the expected result for an mpi_allreduce call).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now, as I mentioned before, the apps I want to run in the spawned 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;processes are third party mpi apps and I don't think it will be possible 
</span><br>
<span class="quotelev1">&gt;to exchange messages with them from my app. So, I do I tell 
</span><br>
<span class="quotelev1">&gt;when the spawned processes have finnished running? All I have to work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;with is the intercommunicator returned from the mpi_comm_spawn call...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-12 2:42 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Well, yes, I guess....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'll do tests with the real third party apps and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;These are huge quantum chemistry codes (dftb+, siesta and Gaussian)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;which greatly benefits from a parallel environment. My code is just
</span><br>
<span class="quotelev1">&gt;a front end to use those, but since we have a lot of data to process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it also benefits from a parallel environment. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-12 2:30 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;just to make sure ...
</span><br>
<span class="quotelev1">&gt;this is the behavior you expected, right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/12/12 13:27, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, Ok, very nice! When I excute do rank=1,3 call MPI_Comm_spawn('hello_world',' ',5,MPI_INFO_NULL,rank,MPI_COMM_WORLD,my_intercomm,MPI_ERRCODES_IGNORE,status) enddo I do get 15 instances of the 'hello_world' app running: 5 for each parent rank 1, 2 and 3. Thanks a lot, Gilles. Best regargs, Alex 2014-12-12 1:32 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;: Alex, just ask MPI_Comm_spawn to start (up to) 5 tasks via the maxprocs parameter : int MPI_Comm_spawn(char *command, char *argv[], int maxprocs, MPI_Info info, int root, MPI_Comm comm, MPI_Comm *intercomm, int array_of_errcodes[]) INPUT PARAMETERS maxprocs - maximum number of processes to start (integer, significant only at root) Cheers, Gilles On 2014/12/12 12:23, Alex A. Schmidt wrote: Hello Gilles, Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!! call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2 hello_world' &quot;) did produce the expected result with a simple openmi &quot;hello_world&quot; code I wrote. I might be harder though with the real third party app I have in mind. And I realize getting passed over a job scheduler with this approach might not work at all... I have looked at the MPI_Comm_spawn call but I failed to understand how it could help here. For instance, can I use it to launch an mpi app with the option &quot;-n 5&quot; ? Alex 2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;: Alex, can you try something like call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name') -i start with an empty environment that being said, you might need to set a few environment variables manually : env -i PATH=/bin ... and that being also said, this &quot;trick&quot; could be just a bad idea : you might be using a scheduler, and if you empty the environment, the scheduler will not be aware of the &quot;inside&quot; run. on top of that, invoking system might fail depending on the interconnect you use. Bottom line, i believe Ralph's reply is still valid, even if five years have passed : changing your workflow, or using MPI_Comm_spawn is a much better approach. Cheers, Gilles On 2014/12/12 11:22, Alex A. Schmidt wrote: Dear OpenMPI users, Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009, I wonder if the reply from Ralph Castain is still valid. My need is similar but quite simpler: to make a system call from an openmpi fortran application to run a third party openmpi application. I don't need to exchange mpi messages with the application. I just need to read the resulting output file generated by it. I have tried to do the following system call from my fortran openmpi code: call system(&quot;sh -c 'mpirun -n 2 app_name&quot;) but I get ********************************************************** Open MPI does not support recursive calls of mpirun ********************************************************** Is there a way to make this work? Best regards, Alex _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a> _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a> _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25968.php">http://www.open-mpi.org/community/lists/users/2014/12/25968.php</a> _______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25969.php">http://www.open-mpi.org/community/lists/users/2014/12/25969.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25970.php">http://www.open-mpi.org/community/lists/users/2014/12/25970.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25971.php">http://www.open-mpi.org/community/lists/users/2014/12/25971.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25973.php">Alex A. Schmidt: "Re: [OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="25975.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] MPI inside MPI (still)"</a>
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
