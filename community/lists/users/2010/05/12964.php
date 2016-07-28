<?
$subject_val = "Re: [OMPI users] About the correct use of DIET_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 09:26:43 2010" -->
<!-- isoreceived="20100507132643" -->
<!-- sent="Fri, 7 May 2010 09:26:28 -0400" -->
<!-- isosent="20100507132628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About the correct use of DIET_Finalize()" -->
<!-- id="23B072C2-FFA8-4496-8488-7AA90E830D0E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201005070654.20513.yves.caniou_at_ens-lyon.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 09:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>In reply to:</strong> <a href="12954.php">Yves Caniou: "[OMPI users] About the correct use of DIET_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Reply:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error message is telling you that you have invoked MPI_Finalize more than once n a single process.  The issue is that you can't do that -- you should only invoke MPI_Finalize exactly once in a given process.  It's not an issue of ongoing communications when you invoke MPI_Finalize.
<br>
<p>It's ok for different MPI processes to invoke MPI_Finalize at different times; Open MPI should figure that out without problem.
<br>
<p>FWIW, you should also be able to invoke the MPI_Finalized function to see if MPI_Finalize has already been invoked.
<br>
<p><p>On May 7, 2010, at 12:54 AM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My parallel application ends when each process receives a msg, done in an
</span><br>
<span class="quotelev1">&gt; async way (but my question still arise if sync comm were used, see the ref to 
</span><br>
<span class="quotelev1">&gt; the manpage). Senders call MPI_Finalize() after a call to MPI_Wait() and
</span><br>
<span class="quotelev1">&gt; receivers call MPI_Finalize() after having received the message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An execution gives me that all proc finish as planned but I obtain the
</span><br>
<span class="quotelev1">&gt; following errors (times the number of processor used)
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;         With openMPI 1.4.2 compiled with gcc-4.5 on a Quad-Core AMD Opteron(tm)
</span><br>
<span class="quotelev1">&gt; Processor 8356
</span><br>
<span class="quotelev1">&gt; *** The MPI_Finalize() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; Abort after MPI_FINALIZE completed successfully; not able to guarantee that
</span><br>
<span class="quotelev1">&gt; all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         With openMPI 1.4.1 (debian package), Intel(R) Core(TM)2 Duo CPU     P9600
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Finalize
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; Abort after MPI_FINALIZE completed successfully; not able to guarantee that
</span><br>
<span class="quotelev1">&gt; all other processes were killed!
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it comes from the fact that, as mentionned in the man of
</span><br>
<span class="quotelev1">&gt; MPI_Finalize():
</span><br>
<span class="quotelev1">&gt;         For  example,  a successful return from a blocking communication opera-
</span><br>
<span class="quotelev1">&gt;        tion or from MPI_Wait or MPI_Test means that the communication is  com-
</span><br>
<span class="quotelev1">&gt;        pleted by the user and the buffer can be reused, but does not guarantee
</span><br>
<span class="quotelev1">&gt;        that the local process has no more work to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nonetheless, if MPI_Finaliaze() is called before that the exchange of messages
</span><br>
<span class="quotelev1">&gt; really takes place, receivers wouldn't call their MPI_Finalize(), but would
</span><br>
<span class="quotelev1">&gt; just be issuing an abort thing, no?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I'm perplex. When do I know when my proc can make the call to
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() and obtain an execution without error messages?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for any help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12963.php">Jeff Squyres: "Re: [OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>In reply to:</strong> <a href="12954.php">Yves Caniou: "[OMPI users] About the correct use of DIET_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Reply:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
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
