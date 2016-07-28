<?
$subject_val = "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 14:29:57 2014" -->
<!-- isoreceived="20140826182957" -->
<!-- sent="Tue, 26 Aug 2014 14:29:55 -0400" -->
<!-- isosent="20140826182955" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAMJJpkW_JgQXJdJjQhSHjmcgn6tU6+hD34=vFHg+DoGWqYsC5Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwA5mBvT=-tt48ajVpuD9oOCep-q_mgvHLetzjiW3BU1dA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 14:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15716.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard clearly states (in 8.7.1 Allowing User Functions at
<br>
Process Termination) that the mechanism you describe is only allowed on
<br>
MPI_COMM_SELF. The most relevant part starts at line 14.
<br>
<p>George.
<br>
<p><p><p>On Tue, Aug 26, 2014 at 11:20 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Another issue while testing 1.8.2 (./configure --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please look at the following code. I'm duplicating COMM_WORLD and
</span><br>
<span class="quotelev1">&gt; composing the dupe on it. The attribute free function is written to
</span><br>
<span class="quotelev1">&gt; Comm_free the duped comm and deallocate memory. However, the run fails
</span><br>
<span class="quotelev1">&gt; with the error you can see at the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO, this is a bug. This way of managing duplicated communicator
</span><br>
<span class="quotelev1">&gt; contexts is quite common in parallel libraries. Moreover, In the MPI 3
</span><br>
<span class="quotelev1">&gt; standard, page 364, lines 11 and 12, it says:
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; For example, MPI is &#226;&#128;&#156;active&#226;&#128;&#157; in callback functions that are invoked
</span><br>
<span class="quotelev1">&gt; during MPI_FINALIZE.
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, if I replace WORLD -&gt; SELF in the code below, I do not
</span><br>
<span class="quotelev1">&gt; get the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat finalize.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int free_comm(MPI_Comm comm, int k, void *v, void *xs)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_free((MPI_Comm *)v);
</span><br>
<span class="quotelev1">&gt;   free(v);
</span><br>
<span class="quotelev1">&gt;   return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int keyval;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm base,*comm;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_create_keyval(MPI_COMM_NULL_COPY_FN, free_comm, &amp;keyval, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   base = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;   comm = (MPI_Comm *)malloc(sizeof(MPI_Comm));
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_dup(base, comm);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_set_attr(base, keyval, comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc finalize.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; *** The MPI_Comm_free() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [kw2060:14603] Local abort after MPI_FINALIZE completed successfully;
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that
</span><br>
<span class="quotelev1">&gt; all other processes were killed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15712.php">http://www.open-mpi.org/community/lists/devel/2014/08/15712.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15716.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
