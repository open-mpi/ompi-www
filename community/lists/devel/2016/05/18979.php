<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 11:22:25 2016" -->
<!-- isoreceived="20160515152225" -->
<!-- sent="Sun, 15 May 2016 11:22:24 -0400" -->
<!-- isosent="20160515152224" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="CAHXxYDgkubdu7DK5EN59EbhBobfk+RQZ=F+jX8cfVzbzAkkvrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDgyDT++sDXep2ShAXtjQ28513Xwr=GCTwedQ9GfJi27vA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-15 11:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I accidentally pressed 'Send' before I was done writing the last
<br>
mail. What I wanted to ask was what is the parameter mpi_add_procs_cutoff
<br>
and why adding it seems to make a difference in the code path but not in
<br>
the end result of the program? How would it help me debug my problem?
<br>
<p>Thank you
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Sun, May 15, 2016 at 11:17 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting -mca mpi_add_procs_cutoff 1024 indeed makes a difference to the
</span><br>
<span class="quotelev1">&gt; output, as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With -mca mpi_add_procs_cutoff 1024:
</span><br>
<span class="quotelev1">&gt; reachable =     0x1
</span><br>
<span class="quotelev1">&gt; (Note that add_procs was called once and the value of 'reachable is
</span><br>
<span class="quotelev1">&gt; correct')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without -mca mpi_add_procs_cutoff 1024
</span><br>
<span class="quotelev1">&gt; reachable =     0x0
</span><br>
<span class="quotelev1">&gt; reachable = NULL
</span><br>
<span class="quotelev1">&gt; reachable = NULL
</span><br>
<span class="quotelev1">&gt; (Note that add_procs() was caklled three times and the value of
</span><br>
<span class="quotelev1">&gt; 'reachable' seems wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program does run correctly in either case. The program listing is as
</span><br>
<span class="quotelev1">&gt; below (note that I have removed output from the program itself in the above
</span><br>
<span class="quotelev1">&gt; reporting.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code that prints 'reachable' is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (reachable == NULL)
</span><br>
<span class="quotelev1">&gt;     printf(&quot;reachable = NULL\n&quot;);
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;reachable = &quot;);
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; reachable-&gt;array_size; i++)
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\t0x%llu&quot;, reachable-&gt;bitmap[i]);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the code for the test program is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev1">&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 15, 2016 at 10:49 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first glance, that seems a bit odd...
</span><br>
<span class="quotelev2">&gt;&gt; are you sure you correctly print the reachable bitmap ?
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest you add some instrumentation to understand what happens
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., printf before opal_bitmap_set_bit() and other places that prevent
</span><br>
<span class="quotelev2">&gt;&gt; this from happening)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one more thing ...
</span><br>
<span class="quotelev2">&gt;&gt; now, master default behavior is
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca mpi_add_procs_cutoff 0 ...
</span><br>
<span class="quotelev2">&gt;&gt; you might want to try
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca mpi_add_procs_cutoff 1024 ...
</span><br>
<span class="quotelev2">&gt;&gt; and see if things make more sense.
</span><br>
<span class="quotelev2">&gt;&gt; if it helps, and iirc, there is a parameter so a btl can report it does
</span><br>
<span class="quotelev2">&gt;&gt; not support cutoff.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for jumping in to help again. Actually, I had already tried some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of your suggestions before asking for help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have several interconnects that can run both openib and tcp BTL. To
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./mpitest
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where mpitest is a small program that does MPI_Send()/MPI_Recv() on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small string, and then does an MPI_Barrier(). The program does work as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I put a printf on the last line of mca_tcp_add_procs() to print the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of 'reachable'. What I saw was that the value was always 0 when it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was invoked for Send()/Recv() and the pointer itself was NULL when invoked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for Barrier()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Next I looked at pml_ob1_add_procs(), where the call chain starts, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found that it initializes and passes an opal_bitmap_t reachable down the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call chain, but the resulting value is not used later in the code (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory is simply freed later).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That, coupled with the fact that I am trying to imitate what the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL implementations are doing, yet in mca_bml_r2_endpoint_add_btl() by BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not being picked up, left me puzzled. Please note that the interconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I am developing for is on a different cluster (than where I ran the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above test for TCP BTL.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again
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
<span class="quotelev3">&gt;&gt;&gt; On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is where the reachable bitmap is set, and I guess this is what you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are looking for.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; keep in mind that if several btl can be used, the one with the higher
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exclusivity is used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can simply force your btl and self, and the ob1 pml, so you do not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have to worry about other btl exclusivity.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have been struggling with this issue for a while and figured it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; might be a good idea to ask for help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; obviously I am not setting it up right, because this routine is not finding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18978.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18980.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
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
