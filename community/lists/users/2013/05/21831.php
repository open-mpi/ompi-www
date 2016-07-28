<?
$subject_val = "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 17:14:12 2013" -->
<!-- isoreceived="20130501211412" -->
<!-- sent="Wed, 1 May 2013 17:14:06 -0400" -->
<!-- isosent="20130501211406" -->
<!-- name="Thomas Watson" -->
<!-- email="exascale.system_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to reduce Isend &amp;amp; Irecv bandwidth?" -->
<!-- id="CAKj9NDn7m41xrR5b0sfyt5u+MkSnVxKAatk6JFMjSfe+8b7=wQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51817117.50307_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Thomas Watson (<em>exascale.system_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 17:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21830.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21830.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thanks for your suggestion!
<br>
<p>The problem of this two-phased data exchange is as follows. Each rank can
<br>
have data blocks that will be exchanged to potentially all other ranks. So
<br>
if a rank needs to tell all the other ranks about which blocks to receive,
<br>
it would require an all-to-all collective communication during phase one
<br>
(e.g., MPI_Gatherallv). Because such collective communication is blocking
<br>
in current stable OpenMPI (MPI-2), it would have a negative impact on
<br>
scalability of the application, especially when we have a large number of
<br>
MPI ranks. This negative impact would not be compensated by the bandwidth
<br>
saved :-)
<br>
<p>What I really need is something like this: Isend sets count to 0 if a block
<br>
is not dirty. On the receiving side, MPI_Waitall deallocates the
<br>
corresponding Irecv request immediately and sets the Irecv request handle
<br>
to MPI_REQUEST_NULL as if it were a normal Irecv. I am wondering if someone
<br>
could confirm this behavior with me? I could do an experiment on this too...
<br>
<p>Regards,
<br>
<p>Jacky
<br>
<p><p><p><p>On Wed, May 1, 2013 at 3:46 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maybe start the data exchange by sending a (presumably short)
</span><br>
<span class="quotelev1">&gt; list/array/index-function of the dirty/not-dirty blocks status
</span><br>
<span class="quotelev1">&gt; (say, 0=not-dirty,1=dirty),
</span><br>
<span class="quotelev1">&gt; then putting if conditionals before the Isend/Irecv so that only
</span><br>
<span class="quotelev1">&gt; dirty blocks are exchanged?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/01/2013 01:28 PM, Thomas Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a program where each MPI rank hosts a set of data blocks. After
</span><br>
<span class="quotelev2">&gt;&gt; doing computation over *some of* its local data blocks, each MPI rank
</span><br>
<span class="quotelev2">&gt;&gt; needs to exchange data with other ranks. Note that the computation may
</span><br>
<span class="quotelev2">&gt;&gt; involve only a subset of the data blocks on a MPI rank. The data
</span><br>
<span class="quotelev2">&gt;&gt; exchange is achieved at each MPI rank through Isend and Irecv and then
</span><br>
<span class="quotelev2">&gt;&gt; Waitall to complete the requests. Each pair of Isend and Irecv exchanges
</span><br>
<span class="quotelev2">&gt;&gt; a corresponding pair of data blocks at different ranks. Right now, we do
</span><br>
<span class="quotelev2">&gt;&gt; Isend/Irecv for EVERY block!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The idea is that because the computation at a rank may only involves a
</span><br>
<span class="quotelev2">&gt;&gt; subset of blocks, we could mark those blocks as dirty during the
</span><br>
<span class="quotelev2">&gt;&gt; computation. And to reduce data exchange bandwidth, we could only
</span><br>
<span class="quotelev2">&gt;&gt; exchanges those *dirty* pairs across ranks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is: if a rank does not compute on a block 'm', and if it
</span><br>
<span class="quotelev2">&gt;&gt; does not call Isend for 'm', then the receiving rank must somehow know
</span><br>
<span class="quotelev2">&gt;&gt; this and either a) does not call Irecv for 'm' as well, or b) let Irecv
</span><br>
<span class="quotelev2">&gt;&gt; for 'm' fail gracefully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My questions are:
</span><br>
<span class="quotelev2">&gt;&gt; 1. how Irecv will behave (actually how MPI_Waitall will behave) if the
</span><br>
<span class="quotelev2">&gt;&gt; corresponding Isend is missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. If we still post Isend for 'm', but because we really do not need to
</span><br>
<span class="quotelev2">&gt;&gt; send any data for 'm', can I just set a &quot;flag&quot; in Isend so that
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitall on the receiving side will &quot;cancel&quot; the corresponding Irecv
</span><br>
<span class="quotelev2">&gt;&gt; immediately? For example, I can set the count in Isend to 0, and on the
</span><br>
<span class="quotelev2">&gt;&gt; receiving side, when MPI_Waitall see a message with empty payload, it
</span><br>
<span class="quotelev2">&gt;&gt; reclaims the corresponding Irecv? In my code, the correspondence between
</span><br>
<span class="quotelev2">&gt;&gt; a pair of Isend and Irecv is established by a matching TAG.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jacky
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21830.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21830.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21832.php">Gus Correa: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
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
