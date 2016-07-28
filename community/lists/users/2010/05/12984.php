<?
$subject_val = "Re: [OMPI users] About the correct use of DIET_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  8 23:38:53 2010" -->
<!-- isoreceived="20100509033853" -->
<!-- sent="Sun, 9 May 2010 05:36:14 +0200" -->
<!-- isosent="20100509033614" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About the correct use of DIET_Finalize()" -->
<!-- id="201005090536.14343.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="23B072C2-FFA8-4496-8488-7AA90E830D0E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About the correct use of DIET_Finalize()<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-08 23:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, I forgot a MPI_Finalize() in a #ifdef the line before...
<br>
Thank you!
<br>
<p>Le Friday 07 May 2010 15:26:28 Jeff Squyres, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; The error message is telling you that you have invoked MPI_Finalize more
</span><br>
<span class="quotelev1">&gt; than once n a single process.  The issue is that you can't do that -- you
</span><br>
<span class="quotelev1">&gt; should only invoke MPI_Finalize exactly once in a given process.  It's not
</span><br>
<span class="quotelev1">&gt; an issue of ongoing communications when you invoke MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's ok for different MPI processes to invoke MPI_Finalize at different
</span><br>
<span class="quotelev1">&gt; times; Open MPI should figure that out without problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you should also be able to invoke the MPI_Finalized function to see
</span><br>
<span class="quotelev1">&gt; if MPI_Finalize has already been invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2010, at 12:54 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My parallel application ends when each process receives a msg, done in an
</span><br>
<span class="quotelev2">&gt; &gt; async way (but my question still arise if sync comm were used, see the
</span><br>
<span class="quotelev2">&gt; &gt; ref to the manpage). Senders call MPI_Finalize() after a call to
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait() and receivers call MPI_Finalize() after having received the
</span><br>
<span class="quotelev2">&gt; &gt; message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; An execution gives me that all proc finish as planned but I obtain the
</span><br>
<span class="quotelev2">&gt; &gt; following errors (times the number of processor used)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;         With openMPI 1.4.2 compiled with gcc-4.5 on a Quad-Core AMD
</span><br>
<span class="quotelev2">&gt; &gt; Opteron(tm) Processor 8356
</span><br>
<span class="quotelev2">&gt; &gt; *** The MPI_Finalize() function was called after MPI_FINALIZE was
</span><br>
<span class="quotelev2">&gt; &gt; invoked. *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt; &gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; Abort after MPI_FINALIZE completed successfully; not able to guarantee
</span><br>
<span class="quotelev2">&gt; &gt; that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         With openMPI 1.4.1 (debian package), Intel(R) Core(TM)2 Duo CPU  
</span><br>
<span class="quotelev2">&gt; &gt;   P9600 *** An error occurred in MPI_Finalize
</span><br>
<span class="quotelev2">&gt; &gt; *** after MPI was finalized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; Abort after MPI_FINALIZE completed successfully; not able to guarantee
</span><br>
<span class="quotelev2">&gt; &gt; that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think it comes from the fact that, as mentionned in the man of
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize():
</span><br>
<span class="quotelev2">&gt; &gt;         For  example,  a successful return from a blocking communication
</span><br>
<span class="quotelev2">&gt; &gt; opera- tion or from MPI_Wait or MPI_Test means that the communication is 
</span><br>
<span class="quotelev2">&gt; &gt; com- pleted by the user and the buffer can be reused, but does not
</span><br>
<span class="quotelev2">&gt; &gt; guarantee that the local process has no more work to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nonetheless, if MPI_Finaliaze() is called before that the exchange of
</span><br>
<span class="quotelev2">&gt; &gt; messages really takes place, receivers wouldn't call their
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize(), but would just be issuing an abort thing, no?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, I'm perplex. When do I know when my proc can make the call to
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize() and obtain an execution without error messages?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for any help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .Yves.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
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
