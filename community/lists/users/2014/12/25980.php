<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 19:52:35 2014" -->
<!-- isoreceived="20141214005235" -->
<!-- sent="Sat, 13 Dec 2014 19:52:33 -0500" -->
<!-- isosent="20141214005233" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)" -->
<!-- id="CAMJJpkUtR6Dhp0kOsgSAN1ZnDW6EBgL9dCEPrHkTbnArLOj+5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGs3GVaELNdJos=z6bewb95k_tBCS89doiXuHNgxxzXt7AHhpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-13 19:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25981.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25979.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25979.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_disconnect should be a local operation, there is no reason for it
<br>
to deadlock. I looked at the code and everything is local with the
<br>
exception of a call to PMIX.FENCE. Can you attach to your deadlocked
<br>
processes and confirm that they are stopped in the pmix.fence?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Sat, Dec 13, 2014 at 8:47 AM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I was calling mpi_comm_disconnect on the group comm handler, not
</span><br>
<span class="quotelev1">&gt; on the intercomm handler returned from the spawn call as it should be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, calling the disconnect on the intercomm handler does halt the spwaner
</span><br>
<span class="quotelev1">&gt; side but the wait is never completed since, as George points out, there is
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; disconnect call being made on the spawnee side.... and that brings me back
</span><br>
<span class="quotelev1">&gt; to the beginning of the problem since, being a third party app, that call
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; never be there. I guess an mpi wrapper to deal with that could be made for
</span><br>
<span class="quotelev1">&gt; the app, but I fell the wrapper itself, at the end, would face the same
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; we face right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application is a genetic algorithm code that search optimal
</span><br>
<span class="quotelev1">&gt; configuration
</span><br>
<span class="quotelev1">&gt; (minimum or maximum energy) of cluster of atoms. The work flow bottleneck
</span><br>
<span class="quotelev1">&gt; is the calculation of the cluster energy. For the cases which an analytical
</span><br>
<span class="quotelev1">&gt; potential is available the calculation can be made internally and the
</span><br>
<span class="quotelev1">&gt; workload
</span><br>
<span class="quotelev1">&gt; is distributed among slaves nodes from a master node. This is also done
</span><br>
<span class="quotelev1">&gt; when an analytical potential is not available and the energy calculation
</span><br>
<span class="quotelev1">&gt; must
</span><br>
<span class="quotelev1">&gt; be done externally by a quantum chemistry code like dftb+, siesta and
</span><br>
<span class="quotelev1">&gt; Gaussian.
</span><br>
<span class="quotelev1">&gt; So far, we have been running these codes in serial mode. No need to say
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; we could do a lot better if they could be executed in parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with DMRAA but it seems to be the right choice to deal
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; job schedulers as it covers the ones I am interested in (pbs/torque and
</span><br>
<span class="quotelev1">&gt; loadlever).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-12-13 7:49 GMT-02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George is right about the semantic
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However i am surprised it returns immediatly...
</span><br>
<span class="quotelev2">&gt;&gt; That should either work or hang imho
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The second point is no more mpi related, and is batch manager specific.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will likely find a submit parameter to make the command block until
</span><br>
<span class="quotelev2">&gt;&gt; the job completes. Or you can write your own wrapper.
</span><br>
<span class="quotelev2">&gt;&gt; Or you can retrieve the jobid and qstat periodically to get the job state.
</span><br>
<span class="quotelev2">&gt;&gt; If an api is available, this is also an option.
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
<span class="quotelev2">&gt;&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You have to call MPI_Comm_disconnect on both sides of the
</span><br>
<span class="quotelev2">&gt;&gt; intercommunicator. On the spawner processes you should call it on the
</span><br>
<span class="quotelev2">&gt;&gt; intercom, while on the spawnees you should call it on the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_get_parent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2014, at 20:43 , Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_comm_disconnect seem to work but not quite.
</span><br>
<span class="quotelev2">&gt;&gt; The call to it returns almost immediatly while
</span><br>
<span class="quotelev2">&gt;&gt; the spawn processes keep piling up in the background
</span><br>
<span class="quotelev2">&gt;&gt; until they are all done...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think system('env -i qsub...') to launch the third party apps
</span><br>
<span class="quotelev2">&gt;&gt; would take the execution of every call back to the scheduler
</span><br>
<span class="quotelev2">&gt;&gt; queue. How would I track each one for their completion?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-12 22:35 GMT-02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need MPI_Comm_disconnect at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure if this is 100% correct nor working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are using third party apps, why dont you do something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system(&quot;env -i qsub ...&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the right options to make qsub blocking or you manually wait for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the end of the job ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That looks like a much cleaner and simpler approach to me.
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
<span class="quotelev3">&gt;&gt;&gt; &quot;Alex A. Schmidt&quot; &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I believe I have a simple toy app running as I think it should:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'n' parent processes running under mpi_comm_world, each one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawning its own 'm' child processes (each child group work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together nicely, returning the expected result for an mpi_allreduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, as I mentioned before, the apps I want to run in the spawned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are third party mpi apps and I don't think it will be possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to exchange messages with them from my app. So, I do I tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the spawned processes have finnished running? All I have to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with is the intercommunicator returned from the mpi_comm_spawn call...
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
<span class="quotelev3">&gt;&gt;&gt; 2014-12-12 2:42 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, yes, I guess....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll do tests with the real third party apps and let you know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These are huge quantum chemistry codes (dftb+, siesta and Gaussian)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which greatly benefits from a parallel environment. My code is just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a front end to use those, but since we have a lot of data to process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it also benefits from a parallel environment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2014-12-12 2:30 GMT-02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just to make sure ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this is the behavior you expected, right ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2014/12/12 13:27, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok, very nice!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I excute
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do rank=1,3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     call  MPI_Comm_spawn('hello_world','
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ',5,MPI_INFO_NULL,rank,MPI_COMM_WORLD,my_intercomm,MPI_ERRCODES_IGNORE,status)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; enddo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do get 15 instances of the 'hello_world' app running: 5 for each parent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 1, 2 and 3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks a lot, Gilles.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regargs,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2014-12-12 1:32 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just ask MPI_Comm_spawn to start (up to) 5 tasks via the maxprocs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        int MPI_Comm_spawn(char *command, char *argv[], int maxprocs,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Info info,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          int root, MPI_Comm comm, MPI_Comm *intercomm,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          int array_of_errcodes[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; INPUT PARAMETERS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        maxprocs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               - maximum number of processes to start (integer, significant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only at root)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2014/12/12 12:23, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hello_world' &quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; did produce the expected result with a simple openmi &quot;hello_world&quot; code I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I might be harder though with the real third party app I have in mind. And
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I realize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; getting passed over a job scheduler with this approach might not work at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have looked at the MPI_Comm_spawn call but I failed to understand how it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could help here. For instance, can I use it to launch an mpi app with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option &quot;-n 5&quot; ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Alex,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can you try something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name')
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -i start with an empty environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that being said, you might need to set a few environment variables
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manually :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; env -i PATH=/bin ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and that being also said, this &quot;trick&quot; could be just a bad idea :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you might be using a scheduler, and if you empty the environment, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; scheduler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will not be aware of the &quot;inside&quot; run.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on top of that, invoking system might fail depending on the interconnect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bottom line, i believe Ralph's reply is still valid, even if five years
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have passed :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changing your workflow, or using MPI_Comm_spawn is a much better approach.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2014/12/12 11:22, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wonder if the reply
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from Ralph Castain is still valid. My need is similar but quite simpler:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to make a system call from an openmpi fortran application to run a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; third party openmpi application. I don't need to exchange mpi messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the application. I just need to read the resulting output file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; generated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by it. I have tried to do the following system call from my fortran openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call system(&quot;sh -c 'mpirun -n 2 app_name&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI does not support recursive calls of mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to make this work?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25968.php">http://www.open-mpi.org/community/lists/users/2014/12/25968.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25969.php">http://www.open-mpi.org/community/lists/users/2014/12/25969.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25970.php">http://www.open-mpi.org/community/lists/users/2014/12/25970.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25971.php">http://www.open-mpi.org/community/lists/users/2014/12/25971.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25974.php">http://www.open-mpi.org/community/lists/users/2014/12/25974.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25975.php">http://www.open-mpi.org/community/lists/users/2014/12/25975.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25978.php">http://www.open-mpi.org/community/lists/users/2014/12/25978.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25979.php">http://www.open-mpi.org/community/lists/users/2014/12/25979.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25981.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="25979.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25979.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
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
