<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:49:55 2016" -->
<!-- isoreceived="20160515144955" -->
<!-- sent="Sun, 15 May 2016 23:49:54 +0900" -->
<!-- isosent="20160515144954" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="CAAkFZ5vnZ1d0XMGe6EYoyEGReTDry-3bc68O3+RNRfb-wU_6bQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDh9FL2T-Zveahq8txpXKR5hZaNgzyyyeoL-Z8jzQ9Qh0w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-15 10:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At first glance, that seems a bit odd...
<br>
are you sure you correctly print the reachable bitmap ?
<br>
I would suggest you add some instrumentation to understand what happens
<br>
(e.g., printf before opal_bitmap_set_bit() and other places that prevent
<br>
this from happening)
<br>
<p>one more thing ...
<br>
now, master default behavior is
<br>
mpirun --mca mpi_add_procs_cutoff 0 ...
<br>
you might want to try
<br>
mpirun --mca mpi_add_procs_cutoff 1024 ...
<br>
and see if things make more sense.
<br>
if it helps, and iirc, there is a parameter so a btl can report it does not
<br>
support cutoff.
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for jumping in to help again. Actually, I had already tried some of
</span><br>
<span class="quotelev1">&gt; your suggestions before asking for help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have several interconnects that can run both openib and tcp BTL. To
</span><br>
<span class="quotelev1">&gt; simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where mpitest is a small program that does MPI_Send()/MPI_Recv() on a
</span><br>
<span class="quotelev1">&gt; small string, and then does an MPI_Barrier(). The program does work as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I put a printf on the last line of mca_tcp_add_procs() to print the value
</span><br>
<span class="quotelev1">&gt; of 'reachable'. What I saw was that the value was always 0 when it was
</span><br>
<span class="quotelev1">&gt; invoked for Send()/Recv() and the pointer itself was NULL when invoked for
</span><br>
<span class="quotelev1">&gt; Barrier()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next I looked at pml_ob1_add_procs(), where the call chain starts, and
</span><br>
<span class="quotelev1">&gt; found that it initializes and passes an opal_bitmap_t reachable down the
</span><br>
<span class="quotelev1">&gt; call chain, but the resulting value is not used later in the code (the
</span><br>
<span class="quotelev1">&gt; memory is simply freed later).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That, coupled with the fact that I am trying to imitate what the other BTL
</span><br>
<span class="quotelev1">&gt; implementations are doing, yet in mca_bml_r2_endpoint_add_btl() by BTL is
</span><br>
<span class="quotelev1">&gt; not being picked up, left me puzzled. Please note that the interconnect
</span><br>
<span class="quotelev1">&gt; that I am developing for is on a different cluster (than where I ran the
</span><br>
<span class="quotelev1">&gt; above test for TCP BTL.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev2">&gt;&gt; this is where the reachable bitmap is set, and I guess this is what you
</span><br>
<span class="quotelev2">&gt;&gt; are looking for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; keep in mind that if several btl can be used, the one with the higher
</span><br>
<span class="quotelev2">&gt;&gt; exclusivity is used
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev2">&gt;&gt; you can simply force your btl and self, and the ob1 pml, so you do not
</span><br>
<span class="quotelev2">&gt;&gt; have to worry about other btl exclusivity.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','dpchoudh_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been struggling with this issue for a while and figured it might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be a good idea to ask for help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obviously I am not setting it up right, because this routine is not finding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quit ageing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18976.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
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
