<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 00:36:07 2016" -->
<!-- isoreceived="20160516043607" -->
<!-- sent="Mon, 16 May 2016 13:36:00 +0900" -->
<!-- isosent="20160516043600" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="0913ed6c-3e0e-cf5f-6489-5e2643c6d0cb_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDgkubdu7DK5EN59EbhBobfk+RQZ=F+jX8cfVzbzAkkvrA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 00:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i cannot reproduce this behavior.
<br>
<p>note mca_btl_tcp_add_procs is invoked once per tcp component (e.g. once 
<br>
per physical NIC)
<br>
<p>so you might want to explicitly select one nic
<br>
<p>mpirun --mca btl_tcp_if_include xxx ...
<br>
<p>my printf output are the same and regardless the mpi_add_procs_cutoff value
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 5/16/2016 12:22 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Sorry, I accidentally pressed 'Send' before I was done writing the 
</span><br>
<span class="quotelev1">&gt; last mail. What I wanted to ask was what is the parameter 
</span><br>
<span class="quotelev1">&gt; mpi_add_procs_cutoff and why adding it seems to make a difference in 
</span><br>
<span class="quotelev1">&gt; the code path but not in the end result of the program? How would it 
</span><br>
<span class="quotelev1">&gt; help me debug my problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and 
</span><br>
<span class="quotelev1">&gt; quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 15, 2016 at 11:17 AM, dpchoudh . &lt;dpchoudh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Setting -mca mpi_add_procs_cutoff 1024 indeed makes a difference
</span><br>
<span class="quotelev1">&gt;     to the output, as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     With -mca mpi_add_procs_cutoff 1024:
</span><br>
<span class="quotelev1">&gt;     reachable =     0x1
</span><br>
<span class="quotelev1">&gt;     (Note that add_procs was called once and the value of 'reachable
</span><br>
<span class="quotelev1">&gt;     is correct')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Without -mca mpi_add_procs_cutoff 1024
</span><br>
<span class="quotelev1">&gt;     reachable =     0x0
</span><br>
<span class="quotelev1">&gt;     reachable = NULL
</span><br>
<span class="quotelev1">&gt;     reachable = NULL
</span><br>
<span class="quotelev1">&gt;     (Note that add_procs() was caklled three times and the value of
</span><br>
<span class="quotelev1">&gt;     'reachable' seems wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The program does run correctly in either case. The program listing
</span><br>
<span class="quotelev1">&gt;     is as below (note that I have removed output from the program
</span><br>
<span class="quotelev1">&gt;     itself in the above reporting.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The code that prints 'reachable' is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (reachable == NULL)
</span><br>
<span class="quotelev1">&gt;         printf(&quot;reachable = NULL\n&quot;);
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         int i;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;reachable = &quot;);
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; reachable-&gt;array_size; i++)
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\t0x%llu&quot;, reachable-&gt;bitmap[i]);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     And the code for the test program is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;         char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev1">&gt;     processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;         if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;     MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;         strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The surgeon general advises you to eat right, exercise regularly
</span><br>
<span class="quotelev1">&gt;     and quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Sun, May 15, 2016 at 10:49 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         At first glance, that seems a bit odd...
</span><br>
<span class="quotelev1">&gt;         are you sure you correctly print the reachable bitmap ?
</span><br>
<span class="quotelev1">&gt;         I would suggest you add some instrumentation to understand
</span><br>
<span class="quotelev1">&gt;         what happens
</span><br>
<span class="quotelev1">&gt;         (e.g., printf before opal_bitmap_set_bit() and other places
</span><br>
<span class="quotelev1">&gt;         that prevent this from happening)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         one more thing ...
</span><br>
<span class="quotelev1">&gt;         now, master default behavior is
</span><br>
<span class="quotelev1">&gt;         mpirun --mca mpi_add_procs_cutoff 0 ...
</span><br>
<span class="quotelev1">&gt;         you might want to try
</span><br>
<span class="quotelev1">&gt;         mpirun --mca mpi_add_procs_cutoff 1024 ...
</span><br>
<span class="quotelev1">&gt;         and see if things make more sense.
</span><br>
<span class="quotelev1">&gt;         if it helps, and iirc, there is a parameter so a btl can
</span><br>
<span class="quotelev1">&gt;         report it does not support cutoff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks for jumping in to help again. Actually, I had
</span><br>
<span class="quotelev1">&gt;             already tried some of your suggestions before asking for help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I have several interconnects that can run both openib and
</span><br>
<span class="quotelev1">&gt;             tcp BTL. To simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl
</span><br>
<span class="quotelev1">&gt;             self.tcp ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             where mpitest is a small program that does
</span><br>
<span class="quotelev1">&gt;             MPI_Send()/MPI_Recv() on a small string, and then does an
</span><br>
<span class="quotelev1">&gt;             MPI_Barrier(). The program does work as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I put a printf on the last line of mca_tcp_add_procs() to
</span><br>
<span class="quotelev1">&gt;             print the value of 'reachable'. What I saw was that the
</span><br>
<span class="quotelev1">&gt;             value was always 0 when it was invoked for Send()/Recv()
</span><br>
<span class="quotelev1">&gt;             and the pointer itself was NULL when invoked for Barrier()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Next I looked at pml_ob1_add_procs(), where the call chain
</span><br>
<span class="quotelev1">&gt;             starts, and found that it initializes and passes an
</span><br>
<span class="quotelev1">&gt;             opal_bitmap_t reachable down the call chain, but the
</span><br>
<span class="quotelev1">&gt;             resulting value is not used later in the code (the memory
</span><br>
<span class="quotelev1">&gt;             is simply freed later).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             That, coupled with the fact that I am trying to imitate
</span><br>
<span class="quotelev1">&gt;             what the other BTL implementations are doing, yet in
</span><br>
<span class="quotelev1">&gt;             mca_bml_r2_endpoint_add_btl() by BTL is not being picked
</span><br>
<span class="quotelev1">&gt;             up, left me puzzled. Please note that the interconnect
</span><br>
<span class="quotelev1">&gt;             that I am developing for is on a different cluster (than
</span><br>
<span class="quotelev1">&gt;             where I ran the above test for TCP BTL.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks again
</span><br>
<span class="quotelev1">&gt;             Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;             regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;             &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 did you check the add_procs callbacks ?
</span><br>
<span class="quotelev1">&gt;                 (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev1">&gt;                 this is where the reachable bitmap is set, and I guess
</span><br>
<span class="quotelev1">&gt;                 this is what you are looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 keep in mind that if several btl can be used, the one
</span><br>
<span class="quotelev1">&gt;                 with the higher exclusivity is used
</span><br>
<span class="quotelev1">&gt;                 (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev1">&gt;                 you can simply force your btl and self, and the ob1
</span><br>
<span class="quotelev1">&gt;                 pml, so you do not have to worry about other btl
</span><br>
<span class="quotelev1">&gt;                 exclusivity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Sunday, May 15, 2016, dpchoudh .
</span><br>
<span class="quotelev1">&gt;                 &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     I have been struggling with this issue for a while
</span><br>
<span class="quotelev1">&gt;                     and figured it might be a good idea to ask for help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Where (in the code path) is the connectivity map
</span><br>
<span class="quotelev1">&gt;                     created?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     I can see that it is *used* in
</span><br>
<span class="quotelev1">&gt;                     mca_bml_r2_endpoint_add_btl(), but obviously I am
</span><br>
<span class="quotelev1">&gt;                     not setting it up right, because this routine is
</span><br>
<span class="quotelev1">&gt;                     not finding the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Thanks in advance
</span><br>
<span class="quotelev1">&gt;                     Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     The surgeon general advises you to eat right,
</span><br>
<span class="quotelev1">&gt;                     exercise regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 Subscription:
</span><br>
<span class="quotelev1">&gt;                 <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18979.php">http://www.open-mpi.org/community/lists/devel/2016/05/18979.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18979.php">dpchoudh .: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
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
