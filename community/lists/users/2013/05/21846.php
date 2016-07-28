<?
$subject_val = "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 22:44:43 2013" -->
<!-- isoreceived="20130502024443" -->
<!-- sent="Wed, 1 May 2013 22:44:38 -0400" -->
<!-- isosent="20130502024438" -->
<!-- name="Thomas Watson" -->
<!-- email="exascale.system_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to reduce Isend &amp;amp; Irecv bandwidth?" -->
<!-- id="CAKj9NDmAKeHj=0K9=Qbz_fr-2PJuntmYz06CSJaJ97s1puXPng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C7C2F8B3-5FFF-4001-A1FC-1D83ECDBAA75_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?<br>
<strong>From:</strong> Thomas Watson (<em>exascale.system_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 22:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21847.php">John Chludzinski: "[OMPI users] Message queue in MPI?"</a>
<li><strong>Previous message:</strong> <a href="21845.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21845.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Aurelien,
<br>
<p>Excellent! Point 2) is exactly what I need - no data is actually sent and
<br>
Irecv completes normally.
<br>
<p>Thanks!
<br>
<p>Jacky
<br>
<p><p>On Wed, May 1, 2013 at 6:29 PM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jacky,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If you do not post a matching send, the wait(all) on the recv will
</span><br>
<span class="quotelev1">&gt; stall forever.
</span><br>
<span class="quotelev1">&gt; 2. You can match a recv(count, tag, src) with a send(0, tag, dst). The
</span><br>
<span class="quotelev1">&gt; recv will complete, the status can be inspected to verify how many bytes
</span><br>
<span class="quotelev1">&gt; have actually been received. It is illegal to send more than what count can
</span><br>
<span class="quotelev1">&gt; hold at the receiver, but it is perfectly fine to send less.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it helps,
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 1 mai 2013 &#224; 18:05, Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Thomas/Jacky
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe using MPI_Probe (and maybe also MPI_Cancel)
</span><br>
<span class="quotelev2">&gt; &gt; to probe the message size,
</span><br>
<span class="quotelev2">&gt; &gt; and receive only those with size&gt;0?
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I'm just code-guessing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 05/01/2013 05:14 PM, Thomas Watson wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your suggestion!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem of this two-phased data exchange is as follows. Each rank
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can have data blocks that will be exchanged to potentially all other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ranks. So if a rank needs to tell all the other ranks about which blocks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to receive, it would require an all-to-all collective communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt; during phase one (e.g., MPI_Gatherallv). Because such collective
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication is blocking in current stable OpenMPI (MPI-2), it would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have a negative impact on scalability of the application, especially
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when we have a large number of MPI ranks. This negative impact would not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be compensated by the bandwidth saved :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What I really need is something like this: Isend sets count to 0 if a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; block is not dirty. On the receiving side, MPI_Waitall deallocates the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; corresponding Irecv request immediately and sets the Irecv request
</span><br>
<span class="quotelev3">&gt; &gt;&gt; handle to MPI_REQUEST_NULL as if it were a normal Irecv. I am wondering
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if someone could confirm this behavior with me? I could do an experiment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on this too...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jacky
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, May 1, 2013 at 3:46 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Maybe start the data exchange by sending a (presumably short)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    list/array/index-function of the dirty/not-dirty blocks status
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    (say, 0=not-dirty,1=dirty),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    then putting if conditionals before the Isend/Irecv so that only
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    dirty blocks are exchanged?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I hope this helps,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    On 05/01/2013 01:28 PM, Thomas Watson wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        I have a program where each MPI rank hosts a set of data blocks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        After
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        doing computation over *some of* its local data blocks, each MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        rank
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        needs to exchange data with other ranks. Note that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        computation may
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        involve only a subset of the data blocks on a MPI rank. The data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        exchange is achieved at each MPI rank through Isend and Irecv
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        and then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Waitall to complete the requests. Each pair of Isend and Irecv
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        exchanges
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        a corresponding pair of data blocks at different ranks. Right
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        now, we do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Isend/Irecv for EVERY block!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        The idea is that because the computation at a rank may only
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        involves a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        subset of blocks, we could mark those blocks as dirty during the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        computation. And to reduce data exchange bandwidth, we could only
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        exchanges those *dirty* pairs across ranks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        The problem is: if a rank does not compute on a block 'm', and
</span><br>
<span class="quotelev1">&gt; if it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        does not call Isend for 'm', then the receiving rank must
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        somehow know
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        this and either a) does not call Irecv for 'm' as well, or b)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        let Irecv
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        for 'm' fail gracefully.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        My questions are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        1. how Irecv will behave (actually how MPI_Waitall will behave)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        if the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        corresponding Isend is missing?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        2. If we still post Isend for 'm', but because we really do not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        need to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        send any data for 'm', can I just set a &quot;flag&quot; in Isend so that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Waitall on the receiving side will &quot;cancel&quot; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        corresponding Irecv
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        immediately? For example, I can set the count in Isend to 0, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        receiving side, when MPI_Waitall see a message with empty
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        payload, it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        reclaims the corresponding Irecv? In my code, the correspondence
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        between
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        a pair of Isend and Irecv is established by a matching TAG.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Jacky
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        _________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    _________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Researcher at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 309b
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 9375
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21847.php">John Chludzinski: "[OMPI users] Message queue in MPI?"</a>
<li><strong>Previous message:</strong> <a href="21845.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21845.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
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
