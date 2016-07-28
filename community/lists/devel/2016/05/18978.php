<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 11:17:56 2016" -->
<!-- isoreceived="20160515151756" -->
<!-- sent="Sun, 15 May 2016 11:17:54 -0400" -->
<!-- isosent="20160515151754" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="CAHXxYDgyDT++sDXep2ShAXtjQ28513Xwr=GCTwedQ9GfJi27vA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vnZ1d0XMGe6EYoyEGReTDry-3bc68O3+RNRfb-wU_6bQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-15 11:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Setting -mca mpi_add_procs_cutoff 1024 indeed makes a difference to the
<br>
output, as follows:
<br>
<p>With -mca mpi_add_procs_cutoff 1024:
<br>
reachable =     0x1
<br>
(Note that add_procs was called once and the value of 'reachable is
<br>
correct')
<br>
<p>Without -mca mpi_add_procs_cutoff 1024
<br>
reachable =     0x0
<br>
reachable = NULL
<br>
reachable = NULL
<br>
(Note that add_procs() was caklled three times and the value of 'reachable'
<br>
seems wrong.
<br>
<p>The program does run correctly in either case. The program listing is as
<br>
below (note that I have removed output from the program itself in the above
<br>
reporting.)
<br>
<p>The code that prints 'reachable' is as follows:
<br>
<p>if (reachable == NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;reachable = NULL\n&quot;);
<br>
else
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;reachable = &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; reachable-&gt;array_size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\t0x%llu&quot;, reachable-&gt;bitmap[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n\n&quot;);
<br>
}
<br>
return OPAL_SUCCESS;
<br>
<p>And the code for the test program is as follows:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int world_size, world_rank, name_len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(hostname, &amp;name_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;,
<br>
hostname, world_rank, world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (world_rank == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strcpy(buf, &quot;haha!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Sun, May 15, 2016 at 10:49 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At first glance, that seems a bit odd...
</span><br>
<span class="quotelev1">&gt; are you sure you correctly print the reachable bitmap ?
</span><br>
<span class="quotelev1">&gt; I would suggest you add some instrumentation to understand what happens
</span><br>
<span class="quotelev1">&gt; (e.g., printf before opal_bitmap_set_bit() and other places that prevent
</span><br>
<span class="quotelev1">&gt; this from happening)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one more thing ...
</span><br>
<span class="quotelev1">&gt; now, master default behavior is
</span><br>
<span class="quotelev1">&gt; mpirun --mca mpi_add_procs_cutoff 0 ...
</span><br>
<span class="quotelev1">&gt; you might want to try
</span><br>
<span class="quotelev1">&gt; mpirun --mca mpi_add_procs_cutoff 1024 ...
</span><br>
<span class="quotelev1">&gt; and see if things make more sense.
</span><br>
<span class="quotelev1">&gt; if it helps, and iirc, there is a parameter so a btl can report it does
</span><br>
<span class="quotelev1">&gt; not support cutoff.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for jumping in to help again. Actually, I had already tried some
</span><br>
<span class="quotelev2">&gt;&gt; of your suggestions before asking for help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have several interconnects that can run both openib and tcp BTL. To
</span><br>
<span class="quotelev2">&gt;&gt; simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where mpitest is a small program that does MPI_Send()/MPI_Recv() on a
</span><br>
<span class="quotelev2">&gt;&gt; small string, and then does an MPI_Barrier(). The program does work as
</span><br>
<span class="quotelev2">&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I put a printf on the last line of mca_tcp_add_procs() to print the value
</span><br>
<span class="quotelev2">&gt;&gt; of 'reachable'. What I saw was that the value was always 0 when it was
</span><br>
<span class="quotelev2">&gt;&gt; invoked for Send()/Recv() and the pointer itself was NULL when invoked for
</span><br>
<span class="quotelev2">&gt;&gt; Barrier()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Next I looked at pml_ob1_add_procs(), where the call chain starts, and
</span><br>
<span class="quotelev2">&gt;&gt; found that it initializes and passes an opal_bitmap_t reachable down the
</span><br>
<span class="quotelev2">&gt;&gt; call chain, but the resulting value is not used later in the code (the
</span><br>
<span class="quotelev2">&gt;&gt; memory is simply freed later).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That, coupled with the fact that I am trying to imitate what the other
</span><br>
<span class="quotelev2">&gt;&gt; BTL implementations are doing, yet in mca_bml_r2_endpoint_add_btl() by BTL
</span><br>
<span class="quotelev2">&gt;&gt; is not being picked up, left me puzzled. Please note that the interconnect
</span><br>
<span class="quotelev2">&gt;&gt; that I am developing for is on a different cluster (than where I ran the
</span><br>
<span class="quotelev2">&gt;&gt; above test for TCP BTL.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
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
<span class="quotelev2">&gt;&gt; On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is where the reachable bitmap is set, and I guess this is what you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are looking for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep in mind that if several btl can be used, the one with the higher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exclusivity is used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can simply force your btl and self, and the ob1 pml, so you do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to worry about other btl exclusivity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been struggling with this issue for a while and figured it might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be a good idea to ask for help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; obviously I am not setting it up right, because this routine is not finding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quit ageing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18977.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
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
