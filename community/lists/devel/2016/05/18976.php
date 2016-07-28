<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:38:00 2016" -->
<!-- isoreceived="20160515143800" -->
<!-- sent="Sun, 15 May 2016 10:37:59 -0400" -->
<!-- isosent="20160515143759" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="CAHXxYDh9FL2T-Zveahq8txpXKR5hZaNgzyyyeoL-Z8jzQ9Qh0w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vQXF4vZjA_FL67VzFqBc3t80UYdenayzy=a30UrTR+=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Process connectivity map<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-15 10:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Thanks for jumping in to help again. Actually, I had already tried some of
<br>
your suggestions before asking for help.
<br>
<p>I have several interconnects that can run both openib and tcp BTL. To
<br>
simplify things, I explicitly mentioned TCP:
<br>
<p>mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp ./mpitest
<br>
<p>where mpitest is a small program that does MPI_Send()/MPI_Recv() on a small
<br>
string, and then does an MPI_Barrier(). The program does work as expected.
<br>
<p>I put a printf on the last line of mca_tcp_add_procs() to print the value
<br>
of 'reachable'. What I saw was that the value was always 0 when it was
<br>
invoked for Send()/Recv() and the pointer itself was NULL when invoked for
<br>
Barrier()
<br>
<p>Next I looked at pml_ob1_add_procs(), where the call chain starts, and
<br>
found that it initializes and passes an opal_bitmap_t reachable down the
<br>
call chain, but the resulting value is not used later in the code (the
<br>
memory is simply freed later).
<br>
<p>That, coupled with the fact that I am trying to imitate what the other BTL
<br>
implementations are doing, yet in mca_bml_r2_endpoint_add_btl() by BTL is
<br>
not being picked up, left me puzzled. Please note that the interconnect
<br>
that I am developing for is on a different cluster (than where I ran the
<br>
above test for TCP BTL.)
<br>
<p>Thanks again
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev1">&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev1">&gt; this is where the reachable bitmap is set, and I guess this is what you
</span><br>
<span class="quotelev1">&gt; are looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; keep in mind that if several btl can be used, the one with the higher
</span><br>
<span class="quotelev1">&gt; exclusivity is used
</span><br>
<span class="quotelev1">&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev1">&gt; you can simply force your btl and self, and the ob1 pml, so you do not
</span><br>
<span class="quotelev1">&gt; have to worry about other btl exclusivity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been struggling with this issue for a while and figured it might
</span><br>
<span class="quotelev2">&gt;&gt; be a good idea to ask for help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev2">&gt;&gt; obviously I am not setting it up right, because this routine is not finding
</span><br>
<span class="quotelev2">&gt;&gt; the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
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
