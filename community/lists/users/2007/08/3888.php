<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 20 08:37:41 2007" -->
<!-- isoreceived="20070820123741" -->
<!-- sent="Mon, 20 Aug 2007 14:37:44 +0200" -->
<!-- isosent="20070820123744" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process termination problem" -->
<!-- id="200708201437.44478.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.tw7tkycmhvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-20 08:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="3882.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
instead of doing dirty with the library you could try to register a cleanup 
<br>
function with atexit.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Sven 
<br>
<p>On Friday 17 August 2007 19:59, Daniel Sp&#229;ngberg wrote:
<br>
<span class="quotelev1">&gt; Dear George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the best way is to call MPI_Abort. However, this forces the  
</span><br>
<span class="quotelev1">&gt; user to modify the code, which I already have suggested. But their  
</span><br>
<span class="quotelev1">&gt; application is not calling exit directly, I merely wrote the simplest code  
</span><br>
<span class="quotelev1">&gt; that demonstrates the problem. Their application is a Fortran program and  
</span><br>
<span class="quotelev1">&gt; during file IO, when something bad happens, the fortran runtime (pgi)  
</span><br>
<span class="quotelev1">&gt; calls exit (and sometimes _exit for some reason). The file IO is only done  
</span><br>
<span class="quotelev1">&gt; in one process. I have told them to try to add ERR=linelo,END=lineno,  
</span><br>
<span class="quotelev1">&gt; where the code at lineno calls MPI_Abort. This has not happened yet.  
</span><br>
<span class="quotelev1">&gt; Nevertheless, openmpi does not terminate the application when one of  
</span><br>
<span class="quotelev1">&gt; processes exits without MPI_Finalize, contrary to the content of mpirun  
</span><br>
<span class="quotelev1">&gt; man-page. I have currently &quot;solved&quot; the problem by writing a .so that is  
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD:ed, checking whether MPI_Finalize is indeed called between  
</span><br>
<span class="quotelev1">&gt; MPI_Init and exit/_exit. I'd rather not keep this &quot;solution&quot; for too long.  
</span><br>
<span class="quotelev1">&gt; If it is indeed so that the mpirun man-page is wrong and the code right,  
</span><br>
<span class="quotelev1">&gt; I'd rather push the proper error-handling solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 17 Aug 2007 18:25:17 +0200, George Bosilca &lt;bosilca_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The MPI standard state that the correct way to abort/kill an MPI
</span><br>
<span class="quotelev2">&gt; &gt; application is using the MPI_Abort function. Except, if you're doing
</span><br>
<span class="quotelev2">&gt; &gt; some kind of fault tolerance stuff, there is no reason to end one of
</span><br>
<span class="quotelev2">&gt; &gt; your MPI processes via exit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 16, 2007, at 12:04 PM, Daniel Sp&#229;ngberg wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear Open-MPI user list members,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am currently having a user with an application where one of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI-processes die, but the openmpi-system does not kill the rest of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since the mpirun man page states the following I would expect it to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; take
</span><br>
<span class="quotelev3">&gt; &gt;&gt; care of killing the application if a process exits without calling
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Finalize:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Process Termination / Signal Handling
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         During  the run of an MPI application, if any rank dies
</span><br>
<span class="quotelev3">&gt; &gt;&gt; abnormally
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (either exiting before invoking MPI_FINALIZE, or dying as the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         result of a signal), mpirun will print out an error message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; kill the rest of the MPI application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The following test program demonstrates the behaviour (program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hangs until
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it is killed by the user or batch system):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #define RANK_DEATH 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    int rank;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    sleep(10);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if (rank==RANK_DEATH)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      exit(1);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    sleep(10);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    return 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have tested this on openmpi 1.2.1 as well as the latest stable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.2.3. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; am on Linux x86_64.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this a bug, or are there some flags I can use to force the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun (or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orted, or...) to kill the whole MPI program when this happens?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If one of the application processes die from a signal (I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tested SEGV
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and FPE) rather than just exiting the whole application is indeed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; killed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="3882.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3889.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
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
