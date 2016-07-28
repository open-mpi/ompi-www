<?
$subject_val = "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 18:05:09 2013" -->
<!-- isoreceived="20130501220509" -->
<!-- sent="Wed, 01 May 2013 18:05:04 -0400" -->
<!-- isosent="20130501220504" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to reduce Isend &amp;amp; Irecv bandwidth?" -->
<!-- id="51819190.3000304_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKj9NDn7m41xrR5b0sfyt5u+MkSnVxKAatk6JFMjSfe+8b7=wQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 18:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21831.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21831.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas/Jacky
<br>
<p>Maybe using MPI_Probe (and maybe also MPI_Cancel)
<br>
to probe the message size,
<br>
and receive only those with size&gt;0?
<br>
Anyway, I'm just code-guessing.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On 05/01/2013 05:14 PM, Thomas Watson wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your suggestion!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem of this two-phased data exchange is as follows. Each rank
</span><br>
<span class="quotelev1">&gt; can have data blocks that will be exchanged to potentially all other
</span><br>
<span class="quotelev1">&gt; ranks. So if a rank needs to tell all the other ranks about which blocks
</span><br>
<span class="quotelev1">&gt; to receive, it would require an all-to-all collective communication
</span><br>
<span class="quotelev1">&gt; during phase one (e.g., MPI_Gatherallv). Because such collective
</span><br>
<span class="quotelev1">&gt; communication is blocking in current stable OpenMPI (MPI-2), it would
</span><br>
<span class="quotelev1">&gt; have a negative impact on scalability of the application, especially
</span><br>
<span class="quotelev1">&gt; when we have a large number of MPI ranks. This negative impact would not
</span><br>
<span class="quotelev1">&gt; be compensated by the bandwidth saved :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I really need is something like this: Isend sets count to 0 if a
</span><br>
<span class="quotelev1">&gt; block is not dirty. On the receiving side, MPI_Waitall deallocates the
</span><br>
<span class="quotelev1">&gt; corresponding Irecv request immediately and sets the Irecv request
</span><br>
<span class="quotelev1">&gt; handle to MPI_REQUEST_NULL as if it were a normal Irecv. I am wondering
</span><br>
<span class="quotelev1">&gt; if someone could confirm this behavior with me? I could do an experiment
</span><br>
<span class="quotelev1">&gt; on this too...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jacky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 1, 2013 at 3:46 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe start the data exchange by sending a (presumably short)
</span><br>
<span class="quotelev1">&gt;     list/array/index-function of the dirty/not-dirty blocks status
</span><br>
<span class="quotelev1">&gt;     (say, 0=not-dirty,1=dirty),
</span><br>
<span class="quotelev1">&gt;     then putting if conditionals before the Isend/Irecv so that only
</span><br>
<span class="quotelev1">&gt;     dirty blocks are exchanged?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/01/2013 01:28 PM, Thomas Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have a program where each MPI rank hosts a set of data blocks.
</span><br>
<span class="quotelev1">&gt;         After
</span><br>
<span class="quotelev1">&gt;         doing computation over *some of* its local data blocks, each MPI
</span><br>
<span class="quotelev1">&gt;         rank
</span><br>
<span class="quotelev1">&gt;         needs to exchange data with other ranks. Note that the
</span><br>
<span class="quotelev1">&gt;         computation may
</span><br>
<span class="quotelev1">&gt;         involve only a subset of the data blocks on a MPI rank. The data
</span><br>
<span class="quotelev1">&gt;         exchange is achieved at each MPI rank through Isend and Irecv
</span><br>
<span class="quotelev1">&gt;         and then
</span><br>
<span class="quotelev1">&gt;         Waitall to complete the requests. Each pair of Isend and Irecv
</span><br>
<span class="quotelev1">&gt;         exchanges
</span><br>
<span class="quotelev1">&gt;         a corresponding pair of data blocks at different ranks. Right
</span><br>
<span class="quotelev1">&gt;         now, we do
</span><br>
<span class="quotelev1">&gt;         Isend/Irecv for EVERY block!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The idea is that because the computation at a rank may only
</span><br>
<span class="quotelev1">&gt;         involves a
</span><br>
<span class="quotelev1">&gt;         subset of blocks, we could mark those blocks as dirty during the
</span><br>
<span class="quotelev1">&gt;         computation. And to reduce data exchange bandwidth, we could only
</span><br>
<span class="quotelev1">&gt;         exchanges those *dirty* pairs across ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The problem is: if a rank does not compute on a block 'm', and if it
</span><br>
<span class="quotelev1">&gt;         does not call Isend for 'm', then the receiving rank must
</span><br>
<span class="quotelev1">&gt;         somehow know
</span><br>
<span class="quotelev1">&gt;         this and either a) does not call Irecv for 'm' as well, or b)
</span><br>
<span class="quotelev1">&gt;         let Irecv
</span><br>
<span class="quotelev1">&gt;         for 'm' fail gracefully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         My questions are:
</span><br>
<span class="quotelev1">&gt;         1. how Irecv will behave (actually how MPI_Waitall will behave)
</span><br>
<span class="quotelev1">&gt;         if the
</span><br>
<span class="quotelev1">&gt;         corresponding Isend is missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2. If we still post Isend for 'm', but because we really do not
</span><br>
<span class="quotelev1">&gt;         need to
</span><br>
<span class="quotelev1">&gt;         send any data for 'm', can I just set a &quot;flag&quot; in Isend so that
</span><br>
<span class="quotelev1">&gt;         MPI_Waitall on the receiving side will &quot;cancel&quot; the
</span><br>
<span class="quotelev1">&gt;         corresponding Irecv
</span><br>
<span class="quotelev1">&gt;         immediately? For example, I can set the count in Isend to 0, and
</span><br>
<span class="quotelev1">&gt;         on the
</span><br>
<span class="quotelev1">&gt;         receiving side, when MPI_Waitall see a message with empty
</span><br>
<span class="quotelev1">&gt;         payload, it
</span><br>
<span class="quotelev1">&gt;         reclaims the corresponding Irecv? In my code, the correspondence
</span><br>
<span class="quotelev1">&gt;         between
</span><br>
<span class="quotelev1">&gt;         a pair of Isend and Irecv is established by a matching TAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Jacky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21831.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21831.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21833.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
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
