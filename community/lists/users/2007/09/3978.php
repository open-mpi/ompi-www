<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 21:02:00 2007" -->
<!-- isoreceived="20070906010200" -->
<!-- sent="Wed, 5 Sep 2007 21:01:11 -0400" -->
<!-- isosent="20070906010111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process termination problem" -->
<!-- id="4991DF9B-FB51-40B8-B084-A0F63B798251_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.txczyaqohvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 21:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3889.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I opened <a href="https://svn.open-mpi.org/trac/ompi/ticket/1144">https://svn.open-mpi.org/trac/ompi/ticket/1144</a> to track this  
<br>
issue.
<br>
<p>On Aug 20, 2007, at 9:04 AM, Daniel Sp&#229;ngberg wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sven,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought about doing that and experimented a bit as well, but  
</span><br>
<span class="quotelev1">&gt; there are
</span><br>
<span class="quotelev1">&gt; some problems then: I need to relink the users code, registering an  
</span><br>
<span class="quotelev1">&gt; atexit
</span><br>
<span class="quotelev1">&gt; function is tricky from the fortran code, and I still need to know  
</span><br>
<span class="quotelev1">&gt; whether
</span><br>
<span class="quotelev1">&gt; MPI_Finalize (and as it turns out MPI_Init as well, otherwise there's
</span><br>
<span class="quotelev1">&gt; problems with things like call system) has been called before my  
</span><br>
<span class="quotelev1">&gt; atexit
</span><br>
<span class="quotelev1">&gt; routine is called...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 20 Aug 2007 14:37:44 +0200, Sven Stork &lt;stork_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; instead of doing dirty with the library you could try to register a
</span><br>
<span class="quotelev2">&gt;&gt; cleanup
</span><br>
<span class="quotelev2">&gt;&gt; function with atexit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   Sven
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 17 August 2007 19:59, Daniel Sp&#229;ngberg wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that the best way is to call MPI_Abort. However, this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forces the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user to modify the code, which I already have suggested. But their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application is not calling exit directly, I merely wrote the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simplest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that demonstrates the problem. Their application is a Fortran  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during file IO, when something bad happens, the fortran runtime  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (pgi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls exit (and sometimes _exit for some reason). The file IO is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in one process. I have told them to try to add  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERR=linelo,END=lineno,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the code at lineno calls MPI_Abort. This has not happened yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nevertheless, openmpi does not terminate the application when one of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes exits without MPI_Finalize, contrary to the content of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; man-page. I have currently &quot;solved&quot; the problem by writing a .so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_PRELOAD:ed, checking whether MPI_Finalize is indeed called  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init and exit/_exit. I'd rather not keep this &quot;solution&quot; for too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it is indeed so that the mpirun man-page is wrong and the code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd rather push the proper error-handling solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 17 Aug 2007 18:25:17 +0200, George Bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MPI standard state that the correct way to abort/kill an MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application is using the MPI_Abort function. Except, if you're  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some kind of fault tolerance stuff, there is no reason to end  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your MPI processes via exit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 16, 2007, at 12:04 PM, Daniel Sp&#229;ngberg wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Open-MPI user list members,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am currently having a user with an application where one of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI-processes die, but the openmpi-system does not kill the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rest of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since the mpirun man page states the following I would expect  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; take
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; care of killing the application if a process exits without calling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Process Termination / Signal Handling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         During  the run of an MPI application, if any rank dies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; abnormally
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (either exiting before invoking MPI_FINALIZE, or dying as the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         result of a signal), mpirun will print out an error  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kill the rest of the MPI application.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The following test program demonstrates the behaviour (program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hangs until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it is killed by the user or batch system):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define RANK_DEATH 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    int rank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    sleep(10);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    if (rank==RANK_DEATH)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      exit(1);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    sleep(10);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have tested this on openmpi 1.2.1 as well as the latest stable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.3. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; am on Linux x86_64.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this a bug, or are there some flags I can use to force the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun (or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orted, or...) to kill the whole MPI program when this happens?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If one of the application processes die from a signal (I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tested SEGV
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and FPE) rather than just exiting the whole application is indeed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; killed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3889.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Process termination problem"</a>
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
