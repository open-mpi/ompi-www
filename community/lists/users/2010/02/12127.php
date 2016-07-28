<?
$subject_val = "Re: [OMPI users] MPi Abort verbosity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 05:28:14 2010" -->
<!-- isoreceived="20100224102814" -->
<!-- sent="Wed, 24 Feb 2010 11:28:08 +0100" -->
<!-- isosent="20100224102808" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPi Abort verbosity" -->
<!-- id="3a37617f1002240228h2a8c2f53nf81a7b96c0d9c40_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1267004255.2685.27.camel_at_frecb000730" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPi Abort verbosity<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 05:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12126.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12126.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadia,
<br>
<p>thanks for quick reply.
<br>
<p>But i suppose that parameter is 0 by default. Suppose i have the follw
<br>
output:
<br>
<p>- ------------------------------
<br>
--------------------------------------------
<br>
- --&gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
<br>
with errorcode 4. &lt;--
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
- --------------------------------------------------------------------------
<br>
Inside my_mpi_err_handler
<br>
Inside my_mpi_err_handler
<br>
I am 0 and we are in 2
<br>
I am 1 and we are in 2
<br>
- --------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 3773 on
<br>
node nb-user exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
- --------------------------------------------------------------------------
<br>
- --
<br>
<p>I would like to see only this:
<br>
<p>- --&gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
<br>
with errorcode 4. &lt;--
<br>
<p>And nothing else. Is it possible?
<br>
<p>I can upgrade my OpenMPI if necessary.
<br>
<p>Thanks.
<br>
<p><p>2010/2/24 Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Wed, 2010-02-24 at 09:55 +0100, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Openmpi users and developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i have a question about MPI_Abort error message. I have a program
</span><br>
<span class="quotelev2">&gt; &gt; written in C++. Is there a way to decrease a verbosity of this error?
</span><br>
<span class="quotelev2">&gt; &gt; When this function is called, openmpi prints many information like
</span><br>
<span class="quotelev2">&gt; &gt; stack trace, rank of processor who called MPI_Abort ecc.. But i'm
</span><br>
<span class="quotelev2">&gt; &gt; interesting just called rank. Is it possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting the mca parameter &quot;mpi_abort_print_stack&quot; to 0 makes the stack
</span><br>
<span class="quotelev1">&gt; not printed out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using openmpi 1.2.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... well, don't know if it's available in that release...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12126.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12126.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12128.php">jody: "Re: [OMPI users] MPi Abort verbosity"</a>
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
