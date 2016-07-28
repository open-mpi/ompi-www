<?
$subject_val = "Re: [OMPI devel] Process connectivity map";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 21:11:13 2016" -->
<!-- isoreceived="20160517011113" -->
<!-- sent="Mon, 16 May 2016 18:11:08 -0700" -->
<!-- isosent="20160517011108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process connectivity map" -->
<!-- id="58BBCA2A-189B-4410-94F9-0BF188EAB292_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="47974699-a17b-f3f6-c09f-a2c9abef226b_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 21:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18990.php">Gilles Gouaillardet: "[OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Previous message:</strong> <a href="18988.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18988.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are welcome to raise the question of default mapping behavior on master yet again, but please do so on a separate thread so we can make sense of it.
<br>
<p>Note that I will not be making more modifications of that behavior, so if someone feels strongly that they want it to change, please go ahead and do so. I&#146;m tired of chasing this tiger&#146;s tail.
<br>
<p><p><span class="quotelev1">&gt; On May 16, 2016, at 5:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the confusion, what i observed was a consequence of something else ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host n0,n1 -np 4 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* n0 and n1 have 16 cores each */
</span><br>
<span class="quotelev1">&gt; runs 4 instances of a.out on n0 (and nothing on n1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i run with -np 32, then 16 tasks run on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with v2.x, the --oversubscribe option is needed and 2 tasks run on each node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is this really the intended behavior on master ?
</span><br>
<span class="quotelev1">&gt; i mean, i am fine with detecting the number of slots automatically so --oversubscribe is not needed up to 32 tasks. my point is, shouldn't we have a different mapping policy in this case ? for example, allocate the tasks round robin, or allocate &lt;total number of slots&gt; / &lt;number of slots per node&gt; consecutive tasks per node ?
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
<span class="quotelev1">&gt; On 5/17/2016 1:13 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; add_procs is always called at least once. This is how we set up shared
</span><br>
<span class="quotelev2">&gt;&gt; memory communication. It will then be invoked on-demand for non-local
</span><br>
<span class="quotelev2">&gt;&gt; peers with the reachability argument set to NULL (because the bitmask
</span><br>
<span class="quotelev2">&gt;&gt; doesn't provide any benefit when adding only 1 peer).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 17, 2016 at 12:00:38AM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    this is not what I observed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (tcp btl, 2 to 4 nodes with one task per node, cutoff=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    the add_procs of the tcp btl is invoked once with the 4 tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I checked the sources and found cutoff only controls if the modex is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    invoked once for all at init, or on demand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On Monday, May 16, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      We changed the way BTL add_procs is invoked on master and v2.x for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      scalability reasons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      In short: add_procs is only invoked the first time you talk to a given
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      peer.  The cutoff switch is an override to that -- if the sizeof
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      COMM_WORLD is less than the cutoff, we revert to the old behavior of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      calling add_procs for all procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      As for why one BTL would be chosen over another, be sure to look at not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      only the priority of the component/module, but also the exclusivity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      level.  In short, only BTLs with the same exclusivity level will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      considered (e.g., this is how we exclude TCP when using HPC-class
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      networks), and then the BTL modules with the highest priority will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      used for a given peer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; On May 16, 2016, at 7:19 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; it seems I misunderstood some things ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; add_procs is always invoked, regardless the cutoff value.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; cutoff is used to retrieve processes info via the modex &quot;on demand&quot; vs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      at init time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Please someone correct me and/or elaborate if needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; On Monday, May 16, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; &lt;mailto:gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; i cannot reproduce this behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; note mca_btl_tcp_add_procs is invoked once per tcp component (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      once per physical NIC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; so you might want to explicitly select one nic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; mpirun --mca btl_tcp_if_include xxx ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; my printf output are the same and regardless the mpi_add_procs_cutoff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; On 5/16/2016 12:22 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Sorry, I accidentally pressed 'Send' before I was done writing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      last mail. What I wanted to ask was what is the parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpi_add_procs_cutoff and why adding it seems to make a difference in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      code path but not in the end result of the program? How would it help me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      debug my problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Thank you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      quit ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; On Sun, May 15, 2016 at 11:17 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; &lt;mailto:dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Setting -mca mpi_add_procs_cutoff 1024 indeed makes a difference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the output, as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; With -mca mpi_add_procs_cutoff 1024:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; reachable =     0x1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; (Note that add_procs was called once and the value of 'reachable is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      correct')
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Without -mca mpi_add_procs_cutoff 1024
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; reachable =     0x0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; reachable = NULL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; reachable = NULL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; (Note that add_procs() was caklled three times and the value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      'reachable' seems wrong.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The program does run correctly in either case. The program listing is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      as below (note that I have removed output from the program itself in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      above reporting.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The code that prints 'reachable' is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; if (reachable == NULL)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;reachable = NULL\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     int i;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;reachable = &quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     for (i = 0; i &lt; reachable-&gt;array_size; i++)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;\t0x%llu&quot;, reachable-&gt;bitmap[i]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; And the code for the test program is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      quit ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; On Sun, May 15, 2016 at 10:49 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; At first glance, that seems a bit odd...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; are you sure you correctly print the reachable bitmap ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; I would suggest you add some instrumentation to understand what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      happens
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; (e.g., printf before opal_bitmap_set_bit() and other places that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      prevent this from happening)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; one more thing ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; now, master default behavior is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; mpirun --mca mpi_add_procs_cutoff 0 ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; you might want to try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; mpirun --mca mpi_add_procs_cutoff 1024 ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; and see if things make more sense.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; if it helps, and iirc, there is a parameter so a btl can report it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      does not support cutoff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; &lt;mailto:dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Thanks for jumping in to help again. Actually, I had already tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      some of your suggestions before asking for help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; I have several interconnects that can run both openib and tcp BTL. To
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      simplify things, I explicitly mentioned TCP:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca pml ob1 -mca btl self.tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ./mpitest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; where mpitest is a small program that does MPI_Send()/MPI_Recv() on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      small string, and then does an MPI_Barrier(). The program does work as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; I put a printf on the last line of mca_tcp_add_procs() to print the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      value of 'reachable'. What I saw was that the value was always 0 when it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      was invoked for Send()/Recv() and the pointer itself was NULL when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      invoked for Barrier()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Next I looked at pml_ob1_add_procs(), where the call chain starts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      and found that it initializes and passes an opal_bitmap_t reachable down
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the call chain, but the resulting value is not used later in the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (the memory is simply freed later).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; That, coupled with the fact that I am trying to imitate what the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      other BTL implementations are doing, yet in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_bml_r2_endpoint_add_btl() by BTL is not being picked up, left me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      puzzled. Please note that the interconnect that I am developing for is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      on a different cluster (than where I ran the above test for TCP BTL.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      quit ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; On Sun, May 15, 2016 at 10:20 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; did you check the add_procs callbacks ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; (e.g. mca_btl_tcp_add_procs() for the tcp btl)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; this is where the reachable bitmap is set, and I guess this is what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      you are looking for.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; keep in mind that if several btl can be used, the one with the higher
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      exclusivity is used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; (e.g. tcp is never used if openib is available)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; you can simply force your btl and self, and the ob1 pml, so you do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      not have to worry about other btl exclusivity.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; On Sunday, May 15, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; &lt;mailto:dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Hello all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; I have been struggling with this issue for a while and figured it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      might be a good idea to ask for help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Where (in the code path) is the connectivity map created?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; I can see that it is *used* in mca_bml_r2_endpoint_add_btl(), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      obviously I am not setting it up right, because this routine is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      finding the BTL corresponding to my interconnect.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      quit ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18975.php">http://www.open-mpi.org/community/lists/devel/2016/05/18975.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18977.php">http://www.open-mpi.org/community/lists/devel/2016/05/18977.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;      &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18979.php">http://www.open-mpi.org/community/lists/devel/2016/05/18979.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18979.php">http://www.open-mpi.org/community/lists/devel/2016/05/18979.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18981.php">http://www.open-mpi.org/community/lists/devel/2016/05/18981.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18981.php">http://www.open-mpi.org/community/lists/devel/2016/05/18981.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18982.php">http://www.open-mpi.org/community/lists/devel/2016/05/18982.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18982.php">http://www.open-mpi.org/community/lists/devel/2016/05/18982.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18983.php">http://www.open-mpi.org/community/lists/devel/2016/05/18983.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18983.php">http://www.open-mpi.org/community/lists/devel/2016/05/18983.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18986.php">http://www.open-mpi.org/community/lists/devel/2016/05/18986.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/05/18986.php">http://www.open-mpi.org/community/lists/devel/2016/05/18986.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18988.php">http://www.open-mpi.org/community/lists/devel/2016/05/18988.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18990.php">Gilles Gouaillardet: "[OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Previous message:</strong> <a href="18988.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>In reply to:</strong> <a href="18988.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
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
