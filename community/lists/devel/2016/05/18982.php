<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 10:51:18 2016" -->
<!-- isoreceived="20160516145118" -->
<!-- sent="Mon, 16 May 2016 14:51:15 +0000" -->
<!-- isosent="20160516145115" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="E50CAAEE-C5DE-48FA-A882-D9A601940D79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tX8z=o6y7J8iL=Hh51yb_2OLrd_j=HjNx_s0MR7aV+Dw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 10:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We changed the way BTL add_procs is invoked on master and v2.x for scalability reasons.
<br>
<p>In short: add_procs is only invoked the first time you talk to a given peer.  The cutoff switch is an override to that -- if the sizeof COMM_WORLD is less than the cutoff, we revert to the old behavior of calling add_procs for all procs.
<br>
<p>As for why one BTL would be chosen over another, be sure to look at not only the priority of the component/module, but also the exclusivity level.  In short, only BTLs with the same exclusivity level will be considered (e.g., this is how we exclude TCP when using HPC-class networks), and then the BTL modules with the highest priority will be used for a given peer.
<br>
<p><p><span class="quotelev1">&gt; On May 16, 2016, at 7:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it seems I misunderstood some things ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; add_procs is always invoked, regardless the cutoff value.
</span><br>
<span class="quotelev1">&gt; cutoff is used to retrieve processes info via the modex &quot;on demand&quot; vs at init time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please someone correct me and/or elaborate if needed
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
<span class="quotelev1">&gt; On Monday, May 16, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; i cannot reproduce this behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; note mca_btl_tcp_add_procs is invoked once per tcp component (e.g. once per physical NIC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so you might want to explicitly select one nic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include xxx ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my printf output are the same and regardless the mpi_add_procs_cutoff value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 5/16/2016 12:22 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I accidentally pressed 'Send' before I was done writing the last mail. What I wanted to ask was what is the parameter mpi_add_procs_cutoff and why adding it seems to make a difference in the code path but not in the end result of the program? How would it help me debug my problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 15, 2016 at 11:17 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Setting -mca mpi_add_procs_cutoff 1024 indeed makes a difference to the output, as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With -mca mpi_add_procs_cutoff 1024:
</span><br>
<span class="quotelev2">&gt;&gt; reachable =     0x1
</span><br>
<span class="quotelev2">&gt;&gt; (Note that add_procs was called once and the value of 'reachable is correct')
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without -mca mpi_add_procs_cutoff 1024
</span><br>
<span class="quotelev2">&gt;&gt; reachable =     0x0
</span><br>
<span class="quotelev2">&gt;&gt; reachable = NULL
</span><br>
<span class="quotelev2">&gt;&gt; reachable = NULL
</span><br>
<span class="quotelev2">&gt;&gt; (Note that add_procs() was caklled three times and the value of 'reachable' seems wrong.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program does run correctly in either case. The program listing is as below (note that I have removed output from the program itself in the above reporting.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code that prints 'reachable' is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if (reachable == NULL)
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;reachable = NULL\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int i;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;reachable = &quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     for (i = 0; i &lt; reachable-&gt;array_size; i++)
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;\t0x%llu&quot;, reachable-&gt;bitmap[i]);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the code for the test program is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     strcpy(buf, &quot;haha!&quot;); 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 15, 2016 at 10:49 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; At first glance, that seems a bit odd...
</span><br>
<span class="quotelev2">&gt;&gt; are you sure you correctly print the reachable bitmap ?
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest you add some instrumentation to understand what happens
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., printf before opal_bitmap_set_bit() and other places that prevent this from happening)
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
<span class="quotelev2">&gt;&gt; if it helps, and iirc, there is a parameter so a btl can report it does not support cutoff.
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
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for jumping in to help again. Actually, I had already tried some of your suggestions before asking for help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have several interconnects that can run both openib and tcp BTL. To simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where mpitest is a small program that does MPI_Send()/MPI_Recv() on a small string, and then does an MPI_Barrier(). The program does work as expected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I put a printf on the last line of mca_tcp_add_procs() to print the value of 'reachable'. What I saw was that the value was always 0 when it was invoked for Send()/Recv() and the pointer itself was NULL when invoked for Barrier()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Next I looked at pml_ob1_add_procs(), where the call chain starts, and found that it initializes and passes an opal_bitmap_t reachable down the call chain, but the resulting value is not used later in the code (the memory is simply freed later).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That, coupled with the fact that I am trying to imitate what the other BTL implementations are doing, yet in mca_bml_r2_endpoint_add_btl() by BTL is not being picked up, left me puzzled. Please note that the interconnect that I am developing for is on a different cluster (than where I ran the above test for TCP BTL.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev2">&gt;&gt; this is where the reachable bitmap is set, and I guess this is what you are looking for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; keep in mind that if several btl can be used, the one with the higher exclusivity is used
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev2">&gt;&gt; you can simply force your btl and self, and the ob1 pml, so you do not have to worry about other btl exclusivity.
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
<span class="quotelev2">&gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have been struggling with this issue for a while and figured it might be a good idea to ask for help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but obviously I am not setting it up right, because this routine is not finding the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18979.php">http://www.open-mpi.org/community/lists/devel/2016/05/18979.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18981.php">http://www.open-mpi.org/community/lists/devel/2016/05/18981.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18981.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Reply:</strong> <a href="18983.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
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
