<?
$subject_val = "[OMPI users] RE :  Problems with MPI_Init_Thread(...)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 08:37:28 2011" -->
<!-- isoreceived="20110919123728" -->
<!-- sent="Mon, 19 Sep 2011 08:37:23 -0400" -->
<!-- isosent="20110919123723" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] RE :  Problems with MPI_Init_Thread(...)" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006E2_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1316420142.16387.YahooMailNeo_at_web29616.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] RE :  Problems with MPI_Init_Thread(...)<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 08:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>In reply to:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Reply:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>You need to call MPI_Init before calling MPI_Init_thread.
<br>
<p>According to <a href="http://cw.squyres.com/columns/2004-02-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2004-02-CW-MPI-Mechanic.pdf</a> (Past MPI Mechanic Columns written by Jeff Squyres)
<br>
only 3 functions that can be called before calling MPI_Init and they are:
<br>
<p>- MPI_Initialized
<br>
- MPI_Finalized
<br>
- MPI_Get_version
<br>
<p>This information is also listed in Section 8.7 (page 291) in the MPI 2.2 book ( <a href="http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report.pdf">http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report.pdf</a> ).
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
<br>
<p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de devendra rai [rai.devendra_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 19 septembre 2011 04:15
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] Problems with MPI_Init_Thread(...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am building an application which uses MPI_Ssend(...) and MPI_Recv(...) in threads. So, there is more than one thread which invokes MPI functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on Jeff's inputs, I rebuilt open-mpi with threads support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-threads=yes --with-threads=posix ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the above line would do the magic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, I learnt that I need to request thread support when initializing MPI application using MPI_Init_thread(...). This is my code fragment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank;
</span><br>
<span class="quotelev1">&gt; int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt; int provided_thread_support;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support, &amp;provided_thread_support);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I build my application, and run it on 3 nodes. However, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:[Morpheus.OTZ:9910] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did read some online examples, and API documentations, and nothing says that I will need to call MPI_Init(...) *followed by* MPI_Init_thread(...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have open-mpi 1.4.3 from open-mpi official site, running on Linux kernel 2.6.37.6-0.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not understand why this error is happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, the next question is, Am I required to MPI_Init_thread everytime I create a new thread? If yes, will this call be the first line in the thread?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would be nice if someone can throw some pointers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra Rai
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>In reply to:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Reply:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
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
