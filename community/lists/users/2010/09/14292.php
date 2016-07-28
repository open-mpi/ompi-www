<?
$subject_val = "Re: [OMPI users] Question about Asynchronous collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 10:01:04 2010" -->
<!-- isoreceived="20100923140104" -->
<!-- sent="Thu, 23 Sep 2010 16:00:58 +0200" -->
<!-- isosent="20100923140058" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about Asynchronous collectives" -->
<!-- id="AANLkTikiYUC-A-9QMjWPzf18dc8imLgkHVrqCGBKG5S9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42723AED-EFEA-434E-AAD5-29C8B7135738_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about Asynchronous collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 10:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm,
<br>
<p>to be sure, if i have one processor who does:
<br>
<p>MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
<br>
MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
<br>
<p>it means that i can't have another process who does the follow:
<br>
<p>MPI_IBcast(MPI_COMM_WORLD, request_2) // firt Bcast for another process
<br>
MPI_IBcast(MPI_COMM_WORLD, request_1) // second Bcast for another process
<br>
<p>Because first Bcast of second process matches with first Bcast of first
<br>
process, and it's wrong.
<br>
<p>Is it right?
<br>
<p><p><p>2010/9/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Sep 23, 2010, at 6:28 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm studing the interfaces of new collective routines in next MPI-3, and
</span><br>
<span class="quotelev1">&gt; i've read that new collectives haven't any tag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So all collective operations must follow the ordering rules for
</span><br>
<span class="quotelev1">&gt; collective calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From what i understand, this means that i can't use:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_2) // second Bcast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, not quite right.  You can have multiple outstanding ibcast's -- they'll
</span><br>
<span class="quotelev1">&gt; just be satisfied in the same order in all participating MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; but is it possible to do this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IBcast(MPI_COMM_WORLD, request_1) // first Bcast
</span><br>
<span class="quotelev2">&gt; &gt; MPI_IReducet(MPI_COMM_WORLD, request_2) // othwer collective
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct -- this is also possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More generally, you can have multiple outstanding non-blocking collectives
</span><br>
<span class="quotelev1">&gt; on a single communicator -- it doesn't matter if they are the same or
</span><br>
<span class="quotelev1">&gt; different collective operations. They will each be unique instances and will
</span><br>
<span class="quotelev1">&gt; be satisfied in order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Reply:</strong> <a href="14293.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
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
