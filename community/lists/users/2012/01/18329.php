<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 04:34:43 2012" -->
<!-- isoreceived="20120131093443" -->
<!-- sent="Tue, 31 Jan 2012 10:34:29 +0100" -->
<!-- isosent="20120131093429" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="4F27B5A5.5060609_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=dc53Gocm=hCpDQjezX_3euZC2jheumsHhmdBJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 04:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just would like to give you an update on this issue.
<br>
Since we are using OpenMPI-1.4.4, we cannot reproduce it anymore.
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p><p>On 09/29/2010 06:01 AM, Nysal Jan wrote:
<br>
<span class="quotelev1">&gt; Hi Eloi,
</span><br>
<span class="quotelev1">&gt; We discussed this issue during the weekly developer meeting &amp; there 
</span><br>
<span class="quotelev1">&gt; were no further suggestions, apart from checking the driver and 
</span><br>
<span class="quotelev1">&gt; firmware levels. The consensus was that it would be better if you 
</span><br>
<span class="quotelev1">&gt; could take this up directly with your IB vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 27, 2010 at 8:14 PM, Eloi Gaudry &lt;eg_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:eg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please find enclosed the requested check outputs (using
</span><br>
<span class="quotelev1">&gt;     -output-filename stdout.tag.null option).
</span><br>
<span class="quotelev1">&gt;     I'm displaying frag-&gt;hdr-&gt;tag here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Monday 27 September 2010 16:29:12 Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Eloi, sorry can you print out frag-&gt;hdr-&gt;tag?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Unfortunately from your last email I think it will still all have
</span><br>
<span class="quotelev2">&gt;     &gt; non-zero values.
</span><br>
<span class="quotelev2">&gt;     &gt; If that ends up being the case then there must be something odd
</span><br>
<span class="quotelev1">&gt;     with the
</span><br>
<span class="quotelev2">&gt;     &gt; descriptor pointer to the fragment.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --td
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Terry,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Please find enclosed the requested check outputs (using
</span><br>
<span class="quotelev1">&gt;     -output-filename
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; stdout.tag.null option).
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; For information, Nysal In his first message referred to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; ompi/mca/pml/ob1/pml_ob1_hdr.h and said that hdr-&gt;tg value was
</span><br>
<span class="quotelev1">&gt;     wrnong on
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; receiving side. #define MCA_PML_OB1_HDR_TYPE_MATCH    
</span><br>
<span class="quotelev1">&gt;     (MCA_BTL_TAG_PML
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; + 1)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_RNDV      (MCA_BTL_TAG_PML + 2)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_RGET      (MCA_BTL_TAG_PML + 3)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;  #define MCA_PML_OB1_HDR_TYPE_ACK       (MCA_BTL_TAG_PML + 4)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_NACK      (MCA_BTL_TAG_PML + 5)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_FRAG      (MCA_BTL_TAG_PML + 6)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_GET       (MCA_BTL_TAG_PML + 7)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;  #define MCA_PML_OB1_HDR_TYPE_PUT       (MCA_BTL_TAG_PML + 8)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_PML_OB1_HDR_TYPE_FIN       (MCA_BTL_TAG_PML + 9)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; and in ompi/mca/btl/btl.h
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; #define MCA_BTL_TAG_PML             0x40
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; On Monday 27 September 2010 14:36:59 Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; I am thinking checking the value of *frag-&gt;hdr right before
</span><br>
<span class="quotelev1">&gt;     the return
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; in the post_send function in
</span><br>
<span class="quotelev1">&gt;     ompi/mca/btl/openib/btl_openib_endpoint.h.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; It is line 548 in the trunk
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/openib/btl">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/openib/btl</a>_
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; ope nib_endpoint.h#548
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; Do you have any patch that I could apply to be able to do so
</span><br>
<span class="quotelev1">&gt;     ? I'm
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; remotely working on a cluster (with a terminal) and I cannot
</span><br>
<span class="quotelev1">&gt;     use any
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; parallel debugger or sequential debugger (with a call to
</span><br>
<span class="quotelev1">&gt;     xterm...). I
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; can track frag-&gt;hdr-&gt;tag value in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c::handle_wc in the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; SEND/RDMA_WRITE case, but this is all I can think of alone.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; You'll find a stacktrace (receive side) in this thread (10th
</span><br>
<span class="quotelev1">&gt;     or 11th
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; message) but it might be pointless.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt; On Monday 27 September 2010 11:43:55 Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; So it sounds like coalescing is not your issue and that the
</span><br>
<span class="quotelev1">&gt;     problem
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; has something to do with the queue sizes.  It would be
</span><br>
<span class="quotelev1">&gt;     helpful if we
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; could detect the hdr-&gt;tag == 0 issue on the sending side
</span><br>
<span class="quotelev1">&gt;     and get at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; least a stack trace.  There is something really odd going
</span><br>
<span class="quotelev1">&gt;     on here.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; I'm sorry to say that I might have missed a point here.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; I've lately been relaunching all previously failing
</span><br>
<span class="quotelev1">&gt;     computations with
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; the message coalescing feature being switched off, and I
</span><br>
<span class="quotelev1">&gt;     saw the same
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; hdr-&gt;tag=0 error several times, always during a collective
</span><br>
<span class="quotelev1">&gt;     call
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; (MPI_Comm_create, MPI_Allreduce and MPI_Broadcast, so
</span><br>
<span class="quotelev1">&gt;     far). And as
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; soon as I switched to the peer queue option I was
</span><br>
<span class="quotelev1">&gt;     previously using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; (--mca btl_openib_receive_queues P,65536,256,192,128
</span><br>
<span class="quotelev1">&gt;     instead of using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; --mca btl_openib_use_message_coalescing 0), all
</span><br>
<span class="quotelev1">&gt;     computations ran
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; flawlessly.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; As for the reproducer, I've already tried to write
</span><br>
<span class="quotelev1">&gt;     something but I
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; haven't succeeded so far at reproducing the hdr-&gt;tag=0
</span><br>
<span class="quotelev1">&gt;     issue with it.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt; On 24/09/2010 18:37, Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; You were right, the error indeed seems to come from the
</span><br>
<span class="quotelev1">&gt;     message
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; coalescing feature. If I turn it off using the &quot;--mca
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_use_message_coalescing 0&quot;, I'm not able to
</span><br>
<span class="quotelev1">&gt;     observe the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;hdr-&gt;tag=0&quot; error.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; There are some trac requests associated to very similar
</span><br>
<span class="quotelev1">&gt;     error
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (<a href="https://svn.open-mpi.org/trac/ompi/search?q=coalescing">https://svn.open-mpi.org/trac/ompi/search?q=coalescing</a>)
</span><br>
<span class="quotelev1">&gt;     but they
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; are all closed (except
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2352">https://svn.open-mpi.org/trac/ompi/ticket/2352</a> that might be
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; related), aren't they ? What would you suggest Terry ?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; Interesting, though it looks to me like the segv in
</span><br>
<span class="quotelev1">&gt;     ticket 2352
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; would have happened on the send side instead of the
</span><br>
<span class="quotelev1">&gt;     receive side
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; like you have.  As to what to do next it would be really
</span><br>
<span class="quotelev1">&gt;     nice to
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; have some sort of reproducer that we can try and debug
</span><br>
<span class="quotelev1">&gt;     what is
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; really going on.  The only other thing to do without a
</span><br>
<span class="quotelev1">&gt;     reproducer
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; is to inspect the code on the send side to figure out
</span><br>
<span class="quotelev1">&gt;     what might
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; make it generate at 0 hdr-&gt;tag.  Or maybe instrument the
</span><br>
<span class="quotelev1">&gt;     send side
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; to stop when it is about ready to send a 0 hdr-&gt;tag and
</span><br>
<span class="quotelev1">&gt;     see if we
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; can see how the code got there.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; I might have some cycles to look at this Monday.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 24 September 2010 16:00:26 Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, I haven't tried any other values than
</span><br>
<span class="quotelev1">&gt;     P,65536,256,192,128
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; yet.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The reason why is quite simple. I've been reading and
</span><br>
<span class="quotelev1">&gt;     reading
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; again this thread to understand the
</span><br>
<span class="quotelev1">&gt;     btl_openib_receive_queues
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; meaning and I can't figure out why the default values
</span><br>
<span class="quotelev1">&gt;     seem to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; induce the hdr-
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tag=0 issue
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     (<a href="http://www.open-mpi.org/community/lists/users/2009/01/7808.php">http://www.open-mpi.org/community/lists/users/2009/01/7808.php</a>)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yeah, the size of the fragments and number of them
</span><br>
<span class="quotelev1">&gt;     really should
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not cause this issue.  So I too am a little perplexed
</span><br>
<span class="quotelev1">&gt;     about it.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you think that the default shared received queue
</span><br>
<span class="quotelev1">&gt;     parameters
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are erroneous for this specific Mellanox card ? Any
</span><br>
<span class="quotelev1">&gt;     help on
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; finding the proper parameters would actually be much
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't necessarily think it is the queue size for a
</span><br>
<span class="quotelev1">&gt;     specific card
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but more so the handling of the queues by the BTL when
</span><br>
<span class="quotelev1">&gt;     using
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; certain sizes. At least that is one gut feel I have.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In my mind the tag being 0 is either something below
</span><br>
<span class="quotelev1">&gt;     OMPI is
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; polluting the data fragment or OMPI's internal protocol
</span><br>
<span class="quotelev1">&gt;     is some
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; how getting messed up.  I can imagine (no empirical
</span><br>
<span class="quotelev1">&gt;     data here)
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the queue sizes could change how the OMPI protocol sets
</span><br>
<span class="quotelev1">&gt;     things
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; up. Another thing may be the coalescing feature in the
</span><br>
<span class="quotelev1">&gt;     openib BTL
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which tries to gang multiple messages into one packet when
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; resources are running low.   I can see where changing
</span><br>
<span class="quotelev1">&gt;     the queue
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sizes might affect the coalescing. So, it might be
</span><br>
<span class="quotelev1">&gt;     interesting to
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; turn off the coalescing.  You can do that by setting &quot;--mca
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_use_message_coalescing 0&quot; in your mpirun line.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If that doesn't solve the issue then obviously there
</span><br>
<span class="quotelev1">&gt;     must be
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; something else going on :-).
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note, the reason I am interested in this is I am seeing
</span><br>
<span class="quotelev1">&gt;     a similar
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error condition (hdr-&gt;tag == 0) on a development
</span><br>
<span class="quotelev1">&gt;     system.  Though
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my failing case fails with np=8 using the connectivity test
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program which is mainly point to point and there are not a
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; significant amount of data transfers going on either.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 24 September 2010 14:27:07 you wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That is interesting.  So does the number of processes
</span><br>
<span class="quotelev1">&gt;     affect
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; your runs any.  The times I've seen hdr-&gt;tag be 0
</span><br>
<span class="quotelev1">&gt;     usually has
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; been due to protocol issues.  The tag should never be
</span><br>
<span class="quotelev1">&gt;     0.  Have
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you tried to do other receive_queue settings other
</span><br>
<span class="quotelev1">&gt;     than the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; default and the one you mention.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I wonder if you did a combination of the two receive
</span><br>
<span class="quotelev1">&gt;     queues
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; causes a failure or not.  Something like
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; P,128,256,192,128:P,65536,256,192,128
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am wondering if it is the first queuing definition
</span><br>
<span class="quotelev1">&gt;     causing the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issue or possibly the SRQ defined in the default.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The messages being send/received can be of any size,
</span><br>
<span class="quotelev1">&gt;     but the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error seems to happen more often with small messages
</span><br>
<span class="quotelev1">&gt;     (as an int
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; being broadcasted or allreduced). The failing
</span><br>
<span class="quotelev1">&gt;     communication
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; differs from one run to another, but some spots are
</span><br>
<span class="quotelev1">&gt;     more likely
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be failing than another. And as far as I know,
</span><br>
<span class="quotelev1">&gt;     there are
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; always located next to a small message (an int being
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; broadcasted for instance) communication. Other typical
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; messages size are
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10k but can be very much larger.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've been checking the hca being used, its' from
</span><br>
<span class="quotelev1">&gt;     mellanox (with
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vendor_part_id=26428). There is no receive_queues
</span><br>
<span class="quotelev1">&gt;     parameters
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; associated to it.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $ cat
</span><br>
<span class="quotelev1">&gt;     share/openmpi/mca-btl-openib-device-params.ini as well:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   # A.k.a. ConnectX
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [Mellanox Hermon]
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   vendor_id =
</span><br>
<span class="quotelev1">&gt;     0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   vendor_part_id =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;     25408,25418,25428,26418,26428,25448,26438,26448,26468,26478,2
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   64 88 use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mtu = 2048
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   max_inline_data = 128
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [..]
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ompi_info --param btl openib --parsable | grep
</span><br>
<span class="quotelev1">&gt;     receive_queues
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      mca:btl:openib:param:btl_openib_receive_queues:value:P,128,256
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  ,1 92 ,128
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  :S
</span><br>
<span class="quotelev1">&gt;     ,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      mca:btl:openib:param:btl_openib_receive_queues:data_source:def
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  au lt value
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      mca:btl:openib:param:btl_openib_receive_queues:status:writable
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      mca:btl:openib:param:btl_openib_receive_queues:help:Colon-deli
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mi t ed, comma delimited list of receive queues:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      mca:btl:openib:param:btl_openib_receive_queues:deprecated:no
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was wondering if these parameters (automatically
</span><br>
<span class="quotelev1">&gt;     computed at
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl init for what I understood) were not
</span><br>
<span class="quotelev1">&gt;     incorrect in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some way and I plugged some others values:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;P,65536,256,192,128&quot; (someone on the list used that
</span><br>
<span class="quotelev1">&gt;     values
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when encountering a different issue) . Since that, I
</span><br>
<span class="quotelev1">&gt;     haven't
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; been able to observe the segfault (occuring as
</span><br>
<span class="quotelev1">&gt;     hrd-&gt;tag = 0 in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:2881) yet.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/pp_fr/st03230/EG/Softs/openmpi-custom-1.4.2/bin/
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday 23 September 2010 23:33:48 Terry Dontje
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi, I am curious about your problem.  Can you
</span><br>
<span class="quotelev1">&gt;     tell me what
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; size of job it is?  Does it always fail on the same
</span><br>
<span class="quotelev1">&gt;     bcast,  or
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same process?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nysal,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your suggestions.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm now able to get the checksum computed and
</span><br>
<span class="quotelev1">&gt;     redirected to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stdout, thanks (I forgot the  &quot;-mca
</span><br>
<span class="quotelev1">&gt;     pml_base_verbose 5&quot;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option, you were right). I haven't been able to
</span><br>
<span class="quotelev1">&gt;     observe the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault (with hdr-&gt;tag=0) so far (when
</span><br>
<span class="quotelev1">&gt;     using pml
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; csum) but I 'll let you know when I am.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've got two others question, which may be related
</span><br>
<span class="quotelev1">&gt;     to the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error observed:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1/ does the maximum number of MPI_Comm that can be
</span><br>
<span class="quotelev1">&gt;     handled by
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI somehow depends on the btl being used
</span><br>
<span class="quotelev1">&gt;     (i.e. if I'm
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using openib, may I use the same number of
</span><br>
<span class="quotelev1">&gt;     MPI_Comm object as
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with tcp) ? Is there something as MPI_COMM_MAX in
</span><br>
<span class="quotelev1">&gt;     OpenMPI ?
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2/ the segfaults only appears during a mpi
</span><br>
<span class="quotelev1">&gt;     collective call,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with very small message (one int is being
</span><br>
<span class="quotelev1">&gt;     broadcast, for
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instance) ; i followed the guidelines given at
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://icl.cs.utk.edu/open">http://icl.cs.utk.edu/open</a>-
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     mpi/faq/?category=openfabrics#ib-small-message-rdma but the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; debug-build of OpenMPI asserts if I use a
</span><br>
<span class="quotelev1">&gt;     different min-size
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that 255. Anyway, if I deactivate eager_rdma, the
</span><br>
<span class="quotelev1">&gt;     segfaults
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; remains. Does the openib btl handle very small message
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; differently (even with eager_rdma
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; deactivated) than tcp ?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Others on the list does coalescing happen with
</span><br>
<span class="quotelev1">&gt;     non-eager_rdma?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If so then that would possibly be one difference
</span><br>
<span class="quotelev1">&gt;     between the
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl and tcp aside from the actual protocol used.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  is there a way to make sure that large messages
</span><br>
<span class="quotelev1">&gt;     and small
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  messages are handled the same way ?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you mean so they all look like eager messages?
</span><br>
<span class="quotelev1">&gt;      How large
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of messages are we talking about here 1K, 1M or 10M?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 17 September 2010 17:57:17 Nysal Jan wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Create a debug build of OpenMPI (--enable-debug)
</span><br>
<span class="quotelev1">&gt;     and while
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running with the csum PML add &quot;-mca
</span><br>
<span class="quotelev1">&gt;     pml_base_verbose 5&quot; to
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the command line. This will print the checksum
</span><br>
<span class="quotelev1">&gt;     details for
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; each fragment sent over the wire. I'm guessing it
</span><br>
<span class="quotelev1">&gt;     didnt
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; catch anything because the BTL failed. The checksum
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; verification is done in the PML, which the BTL
</span><br>
<span class="quotelev1">&gt;     calls via a
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback function. In your case the PML callback
</span><br>
<span class="quotelev1">&gt;     is never
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; called because the hdr-&gt;tag is invalid. So enabling
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checksum tracing also might not be of much use.
</span><br>
<span class="quotelev1">&gt;     Is it the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; first Bcast that fails or the nth Bcast and what
</span><br>
<span class="quotelev1">&gt;     is the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; message size? I'm not sure what could be the
</span><br>
<span class="quotelev1">&gt;     problem at
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this moment. I'm afraid you will have to debug
</span><br>
<span class="quotelev1">&gt;     the BTL to
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; find out more.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --Nysal
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Sep 17, 2010 at 4:39 PM, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     &lt;eg_at_[hidden] &lt;mailto:eg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nysal,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for your response.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've been unable so far to write a test case
</span><br>
<span class="quotelev1">&gt;     that could
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; illustrate the hdr-&gt;tag=0 error.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, I'm only observing this issue when
</span><br>
<span class="quotelev1">&gt;     running an
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internode computation involving infiniband
</span><br>
<span class="quotelev1">&gt;     hardware from
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox (MT25418, ConnectX IB DDR, PCIe 2.0
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2.5GT/s, rev a0) with our time-domain software.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I checked, double-checked, and rechecked again
</span><br>
<span class="quotelev1">&gt;     every MPI
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use performed during a parallel computation and
</span><br>
<span class="quotelev1">&gt;     I couldn't
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; find any error so far. The fact that the very
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same parallel computation run flawlessly when
</span><br>
<span class="quotelev1">&gt;     using tcp
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (and disabling openib support) might seem to
</span><br>
<span class="quotelev1">&gt;     indicate that
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the issue is somewhere located inside the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl or at the hardware/driver level.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've just used the &quot;-mca pml csum&quot; option and I
</span><br>
<span class="quotelev1">&gt;     haven't
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; seen any related messages (when hdr-&gt;tag=0 and the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segfaults occurs). Any suggestion ?
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 17 September 2010 16:03:34 Nysal Jan
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry for the delay in response. I haven't read
</span><br>
<span class="quotelev1">&gt;     the entire
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; email thread, but do you have a test case which can
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reproduce this error? Without that it will be
</span><br>
<span class="quotelev1">&gt;     difficult to
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nail down the cause. Just to clarify, I do not
</span><br>
<span class="quotelev1">&gt;     work for an
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; iwarp vendor. I can certainly try to reproduce
</span><br>
<span class="quotelev1">&gt;     it on an IB
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; system. There is also a PML called csum, you
</span><br>
<span class="quotelev1">&gt;     can use it
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; via &quot;-mca pml csum&quot;, which will checksum the
</span><br>
<span class="quotelev1">&gt;     MPI messages
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and verify it at the receiver side for any data
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; corruption. You can try using it to see if it
</span><br>
<span class="quotelev1">&gt;     is able
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; catch anything.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --Nysal
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Sep 16, 2010 at 3:48 PM, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     &lt;eg_at_[hidden] &lt;mailto:eg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Nysal,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm sorry to intrrupt, but I was wondering if
</span><br>
<span class="quotelev1">&gt;     you had a
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; chance to look
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this error.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Company Phone:   +32 10 487 959
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: Eloi Gaudry &lt;eg_at_[hidden] &lt;mailto:eg_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: Wed, 15 Sep 2010 16:27:43 +0200
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] [openib] segfault
</span><br>
<span class="quotelev1">&gt;     when using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl Hi,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was wondering if anybody got a chance to
</span><br>
<span class="quotelev1">&gt;     have a look at
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this issue.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 18 August 2010 09:16:26 Eloi
</span><br>
<span class="quotelev1">&gt;     Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please find enclosed the output
</span><br>
<span class="quotelev1">&gt;     (valgrind.out.gz) from
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/openmpi-debug-1.4.2/bin/orterun -np 2 --host
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pbn11,pbn10 --mca
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib,self --display-map --verbose --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev1">&gt;     btl_openib_want_fork_support 0
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -tag-output /opt/valgrind-3.5.0/bin/valgrind
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --tool=memcheck
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --suppressions=/opt/openmpi-debug-1.4.2/share/openmpi/o
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pen mp i- valgrind.supp
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --suppressions=./suppressions.python.supp
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/actran/bin/actranpy_mp ...
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 17 August 2010 09:32:53 Eloi
</span><br>
<span class="quotelev1">&gt;     Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Monday 16 August 2010 19:14:47 Jeff
</span><br>
<span class="quotelev1">&gt;     Squyres wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 16, 2010, at 10:05 AM, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I did run our application through valgrind
</span><br>
<span class="quotelev1">&gt;     but it
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; couldn't find any &quot;Invalid write&quot;: there
</span><br>
<span class="quotelev1">&gt;     is a bunch
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of &quot;Invalid read&quot; (I'm using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.4.2
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the suppression file), &quot;Use of
</span><br>
<span class="quotelev1">&gt;     uninitialized
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bytes&quot; and &quot;Conditional jump depending on
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uninitialized bytes&quot; in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; routines. Some of them are located in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c. I'll send you an
</span><br>
<span class="quotelev1">&gt;     output of
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; valgrind shortly.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A lot of them in btl_openib_* are to be
</span><br>
<span class="quotelev1">&gt;     expected --
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenFabrics uses OS-bypass methods for some
</span><br>
<span class="quotelev1">&gt;     of its
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; memory, and therefore valgrind is unaware
</span><br>
<span class="quotelev1">&gt;     of them (and
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; therefore incorrectly marks them as
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uninitialized).
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would it  help if i use the upcoming 1.5
</span><br>
<span class="quotelev1">&gt;     version of
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi ? i
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; read
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a huge effort has been done to clean-up the
</span><br>
<span class="quotelev1">&gt;     valgrind
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; output ? but maybe that this doesn't concern
</span><br>
<span class="quotelev1">&gt;     this btl
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (for the reasons you mentionned).
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Another question, you said that the
</span><br>
<span class="quotelev1">&gt;     callback function
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pointer
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; never be 0. But can the tag be null
</span><br>
<span class="quotelev1">&gt;     (hdr-&gt;tag) ?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The tag is not a pointer -- it's just an
</span><br>
<span class="quotelev1">&gt;     integer.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was worrying that its value could not be null.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll send a valgrind output soon (i need to
</span><br>
<span class="quotelev1">&gt;     build
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libpython without pymalloc first).
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 16/08/2010 18:22, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Odd; the values of the callback function
</span><br>
<span class="quotelev1">&gt;     pointer
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; should never
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This seems to suggest some kind of memory
</span><br>
<span class="quotelev1">&gt;     corruption
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is occurring.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if it's possible, because
</span><br>
<span class="quotelev1">&gt;     the stack
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trace looks like you're calling through
</span><br>
<span class="quotelev1">&gt;     python, but
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; can you run this application through
</span><br>
<span class="quotelev1">&gt;     valgrind, or
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some other memory-checking debugger?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 10, 2010, at 7:15 AM, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sorry, i just forgot to add the values
</span><br>
<span class="quotelev1">&gt;     of the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parameters:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print reg-&gt;cbdata
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $1 = (void *) 0x0
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print openib_btl-&gt;super
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $2 = {btl_component = 0x2b341edd7380,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_eager_limit =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12288,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_rndv_eager_limit = 12288,
</span><br>
<span class="quotelev1">&gt;     btl_max_send_size =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 65536, btl_rdma_pipeline_send_length =
</span><br>
<span class="quotelev1">&gt;     1048576,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_rdma_pipeline_frag_size = 1048576,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_min_rdma_pipeline_size
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   = 1060864, btl_exclusivity = 1024,
</span><br>
<span class="quotelev1">&gt;     btl_latency =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   10, btl_bandwidth = 800, btl_flags = 310,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_add_procs =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   0x2b341eb8ee47&lt;mca_btl_openib_add_procs&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_del_procs =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   0x2b341eb90156&lt;mca_btl_openib_del_procs&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_register = 0, btl_finalize =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   0x2b341eb93186&lt;mca_btl_openib_finalize&gt;,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_alloc
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   =
</span><br>
<span class="quotelev1">&gt;     0x2b341eb90a3e&lt;mca_btl_openib_alloc&gt;, btl_free
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   = 0x2b341eb91400&lt;mca_btl_openib_free&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_prepare_src =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;     0x2b341eb91813&lt;mca_btl_openib_prepare_src&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_prepare_dst
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;     0x2b341eb91f2e&lt;mca_btl_openib_prepare_dst&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_send =
</span><br>
<span class="quotelev1">&gt;     0x2b341eb94517&lt;mca_btl_openib_send&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_sendi =
</span><br>
<span class="quotelev1">&gt;     0x2b341eb9340d&lt;mca_btl_openib_sendi&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_put =
</span><br>
<span class="quotelev1">&gt;     0x2b341eb94660&lt;mca_btl_openib_put&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_get =
</span><br>
<span class="quotelev1">&gt;     0x2b341eb94c4e&lt;mca_btl_openib_get&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_dump =
</span><br>
<span class="quotelev1">&gt;     0x2b341acd45cb&lt;mca_btl_base_dump&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_mpool = 0xf3f4110,
</span><br>
<span class="quotelev1">&gt;     btl_register_error =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;     0x2b341eb90565&lt;mca_btl_openib_register_error_cb&gt;,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   btl_ft_event
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   0x2b341eb952e7&lt;mca_btl_openib_ft_event&gt;}
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print hdr-&gt;tag
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $3 = 0 '\0'
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print des
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $4 = (mca_btl_base_descriptor_t *) 0xf4a6700
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print reg-&gt;cbfunc
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $5 = (mca_btl_base_module_recv_cb_fn_t) 0
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 10 August 2010 16:04:08 Eloi
</span><br>
<span class="quotelev1">&gt;     Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of a core file
</span><br>
<span class="quotelev1">&gt;     generated during
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fault observed during a collective call
</span><br>
<span class="quotelev1">&gt;     (using
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib):
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00002aedbc4e05f4 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; frag=0x190d9700, byte_len=18) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:2881 #2
</span><br>
<span class="quotelev1">&gt;     0x00002aedbc4e25e2
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in handle_wc (device=0x19024ac0, cq=0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wc=0x7ffff279ce90) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:3178 #3
</span><br>
<span class="quotelev1">&gt;      0x00002aedbc4e2e9d
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; poll_device
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (device=0x19024ac0, count=2) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:3318
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00002aedbc4e34b8 in progress_one_device
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (device=0x19024ac0)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at btl_openib_component.c:3426 #5
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00002aedbc4e3561 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component_progress () at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:3451
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00002aedb8b22ab8 in opal_progress () at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; runtime/opal_progress.c:207 #7
</span><br>
<span class="quotelev1">&gt;     0x00002aedb859f497
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in opal_condition_wait (c=0x2aedb888ccc0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; m=0x2aedb888cd20) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../opal/threads/condition.h:99 #8
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00002aedb859fa31 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_request_default_wait_all
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (count=2,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; requests=0x7ffff279d0e0, statuses=0x0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; request/req_wait.c:262 #9
</span><br>
<span class="quotelev1">&gt;     0x00002aedbd7559ad in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_coll_tuned_allreduce_intra_recursivedoubling
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; count=1, dtype=0x6788220, op=0x6787a20,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm=0x19d81ff0, module=0x19d82b20) at
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #10 0x00002aedbd7514f7 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; count=1, dtype=0x6788220, op=0x6787a20,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm=0x19d81ff0, module=0x19d82b20) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:63
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #11 0x00002aedb85c7792 in PMPI_Allreduce
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (sendbuf=0x7ffff279d444,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; recvbuf=0x7ffff279d440, count=1,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; datatype=0x6788220,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; op=0x6787a20,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm=0x19d81ff0) at pallreduce.c:102 #12
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x0000000004387dbf
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FEMTown::MPI::Allreduce
</span><br>
<span class="quotelev1">&gt;     (sendbuf=0x7ffff279d444,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; recvbuf=0x7ffff279d440, count=1,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; datatype=0x6788220,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; op=0x6787a20,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comm=0x19d81ff0) at stubs.cpp:626 #13
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x0000000004058be8 in
</span><br>
<span class="quotelev1">&gt;     FEMTown::Domain::align (itf=
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     {&lt;FEMTown::Boost::shared_base_ptr&lt;FEMTown::Domain::Int
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             er fa ce&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; = {_vptr.shared_base_ptr =
</span><br>
<span class="quotelev1">&gt;     0x7ffff279d620, ptr_ =
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {px = 0x199942a4, pn = {pi_ =
</span><br>
<span class="quotelev1">&gt;     0x6}}},&lt;No data
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fields&gt;}) at interface.cpp:371 #14
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000000040cb858 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     FEMTown::Field::detail::align_itfs_and_neighbhors
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (dim=2,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; set={px
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; = 0x7ffff279d780, pn = {pi_ =
</span><br>
<span class="quotelev1">&gt;     0x2f279d640}},
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check_info=@0x7ffff279d7f0) at
</span><br>
<span class="quotelev1">&gt;     check.cpp:63 #15
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000000040cbfa8
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in FEMTown::Field::align_elements
</span><br>
<span class="quotelev1">&gt;     (set={px =
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x7ffff279d950, pn
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {pi_ = 0x66e08d0}},
</span><br>
<span class="quotelev1">&gt;     check_info=@0x7ffff279d7f0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check.cpp:159 #16 0x00000000039acdd4 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyField_align_elements (self=0x0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; args=0x2aaab0765050, kwds=0x19d2e950) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check.cpp:31 #17
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x0000000001fbf76d in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FEMTown::Main::ExErrCatch&lt;_object*
</span><br>
<span class="quotelev1">&gt;     (*)(_object*,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _object*, _object*)&gt;::exec&lt;_object&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (this=0x7ffff279dc20, s=0x0,
</span><br>
<span class="quotelev1">&gt;     po1=0x2aaab0765050,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; po2=0x19d2e950) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     /home/qa/svntop/femtown/modules/main/py/exception.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hp p: 463
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #18
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000000039acc82 in
</span><br>
<span class="quotelev1">&gt;     PyField_align_elements_ewrap
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (self=0x0,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; args=0x2aaab0765050, kwds=0x19d2e950) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check.cpp:39 #19 0x00000000044093a0 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalFrameEx (f=0x19b52e90,
</span><br>
<span class="quotelev1">&gt;     throwflag=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;) at Python/ceval.c:3921 #20
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x000000000440aae9 in PyEval_EvalCodeEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (co=0x2aaab754ad50, globals=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; locals=&lt;value optimized out&gt;, args=0x3,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; argcount=1, kws=0x19ace4a0, kwcount=2,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; defs=0x2aaab75e4800, defcount=2,
</span><br>
<span class="quotelev1">&gt;     closure=0x0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #21 0x0000000004408f58 in
</span><br>
<span class="quotelev1">&gt;     PyEval_EvalFrameEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f=0x19ace2d0, throwflag=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:3802 #22
</span><br>
<span class="quotelev1">&gt;     0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab7550120,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     locals=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;, args=0x7, argcount=1,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kws=0x19acc418, kwcount=3,
</span><br>
<span class="quotelev1">&gt;     defs=0x2aaab759e958,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; defcount=6, closure=0x0) at
</span><br>
<span class="quotelev1">&gt;     Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #23 0x0000000004408f58 in
</span><br>
<span class="quotelev1">&gt;     PyEval_EvalFrameEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f=0x19acc1c0, throwflag=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:3802 #24
</span><br>
<span class="quotelev1">&gt;     0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab8b5e738,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     locals=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;, args=0x6, argcount=1,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kws=0x19abd328, kwcount=5,
</span><br>
<span class="quotelev1">&gt;     defs=0x2aaab891b7e8,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; defcount=3, closure=0x0) at
</span><br>
<span class="quotelev1">&gt;     Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #25 0x0000000004408f58 in
</span><br>
<span class="quotelev1">&gt;     PyEval_EvalFrameEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f=0x19abcea0, throwflag=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:3802 #26
</span><br>
<span class="quotelev1">&gt;     0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab3eb4198,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     locals=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;, args=0xb, argcount=1,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kws=0x19a89df0, kwcount=10, defs=0x0,
</span><br>
<span class="quotelev1">&gt;     defcount=0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; closure=0x0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:2968 #27
</span><br>
<span class="quotelev1">&gt;     0x0000000004408f58 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalFrameEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f=0x19a89c40, throwflag=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:3802 #28
</span><br>
<span class="quotelev1">&gt;     0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab3eb4288,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     locals=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;, args=0x1, argcount=0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kws=0x19a89330, kwcount=0,
</span><br>
<span class="quotelev1">&gt;     defs=0x2aaab8b66668,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; defcount=1, closure=0x0) at
</span><br>
<span class="quotelev1">&gt;     Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #29 0x0000000004408f58 in
</span><br>
<span class="quotelev1">&gt;     PyEval_EvalFrameEx
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (f=0x19a891b0, throwflag=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized out&gt;) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:3802 #30
</span><br>
<span class="quotelev1">&gt;     0x000000000440aae9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab8b6a738,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     locals=&lt;value
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized out&gt;, args=0x0, argcount=0,
</span><br>
<span class="quotelev1">&gt;     kws=0x0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kwcount=0, defs=0x0, defcount=0,
</span><br>
<span class="quotelev1">&gt;     closure=0x0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #31 0x000000000440ac02 in PyEval_EvalCode
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (co=0x1902f9b0, globals=0x0,
</span><br>
<span class="quotelev1">&gt;     locals=0x190d9700) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/ceval.c:522 #32
</span><br>
<span class="quotelev1">&gt;     0x000000000442853c in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PyRun_StringFlags (str=0x192fd3d8
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;DIRECT.Actran.main()&quot;, start=&lt;value
</span><br>
<span class="quotelev1">&gt;     optimized
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; out&gt;, globals=0x192213d0,
</span><br>
<span class="quotelev1">&gt;     locals=0x192213d0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flags=0x0) at Python/pythonrun.c:1335 #33
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x0000000004429690 in
</span><br>
<span class="quotelev1">&gt;     PyRun_SimpleStringFlags
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (command=0x192fd3d8 &quot;DIRECT.Actran.main()&quot;,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; flags=0x0) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Python/pythonrun.c:957 #34
</span><br>
<span class="quotelev1">&gt;     0x0000000001fa1cf9 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FEMTown::Python::FEMPy::run_application
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (this=0x7ffff279f650)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at fempy.cpp:873 #35 0x000000000434ce99 in
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FEMTown::Main::Batch::run
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (this=0x7ffff279f650) at batch.cpp:374 #36
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x0000000001f9aa25
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in main (argc=8, argv=0x7ffff279fa48) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; main.cpp:10 (gdb) f 1 #1
</span><br>
<span class="quotelev1">&gt;      0x00002aedbc4e05f4 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_handle_incoming
</span><br>
<span class="quotelev1">&gt;     (openib_btl=0x1902f9b0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ep=0x1908a1c0, frag=0x190d9700,
</span><br>
<span class="quotelev1">&gt;     byte_len=18) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:2881 2881
</span><br>
<span class="quotelev1">&gt;     reg-&gt;cbfunc(
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev1">&gt;     reg-&gt;cbdata
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; );
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Current language: auto; currently c
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00002aedbc4e05f4 in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_handle_incoming
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; frag=0x190d9700, byte_len=18) at
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_component.c:2881 2881
</span><br>
<span class="quotelev1">&gt;     reg-&gt;cbfunc(
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev1">&gt;     reg-&gt;cbdata
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; );
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) l 2876
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2877      
</span><br>
<span class="quotelev1">&gt;      if(OPAL_LIKELY(!(is_credit_msg =
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is_credit_message(frag)))) { 2878      
</span><br>
<span class="quotelev1">&gt;          /*
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; call registered callback */
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2879          
</span><br>
<span class="quotelev1">&gt;      mca_btl_active_message_callback_t*
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reg; 2880            reg =
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_btl_base_active_message_trigger +
</span><br>
<span class="quotelev1">&gt;     hdr-&gt;tag;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2881 reg-&gt;cbfunc(&amp;openib_btl-&gt;super,
</span><br>
<span class="quotelev1">&gt;     hdr-&gt;tag,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; des, reg-&gt;cbdata ); 2882
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if(MCA_BTL_OPENIB_RDMA_FRAG(frag)) { 2883
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cqp
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (hdr-&gt;credits&gt;&gt;  11)&amp;  0x0f;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2884                hdr-&gt;credits&amp;= 0x87ff;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2885            } else {
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 16 July 2010 16:01:02 Eloi
</span><br>
<span class="quotelev1">&gt;     Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Edgar,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only difference I could observed
</span><br>
<span class="quotelev1">&gt;     was that the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault appeared sometimes
</span><br>
<span class="quotelev1">&gt;     later
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; during the parallel computation.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm running out of idea here. I wish I
</span><br>
<span class="quotelev1">&gt;     could use
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &quot;--mca
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tuned&quot; with &quot;--mca self,sm,tcp&quot; so
</span><br>
<span class="quotelev1">&gt;     that I could
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check that the issue is not somehow
</span><br>
<span class="quotelev1">&gt;     limited to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the tuned collective routines.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday 15 July 2010 17:24:24
</span><br>
<span class="quotelev1">&gt;     Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 7/15/2010 10:18 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hi edgar,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for the tips, I'm gonna try
</span><br>
<span class="quotelev1">&gt;     this option
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as well.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault i'm observing always
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; happened during a collective
</span><br>
<span class="quotelev1">&gt;     communication
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; indeed... does it basically
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switch
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collective communication to basic
</span><br>
<span class="quotelev1">&gt;     mode, right ?
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sorry for my ignorance, but what's a
</span><br>
<span class="quotelev1">&gt;     NCA ?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sorry, I meant to type HCA (InifinBand
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; networking card)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday 15 July 2010 16:20:54
</span><br>
<span class="quotelev1">&gt;     Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you could try first to use the
</span><br>
<span class="quotelev1">&gt;     algorithms in
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the basic
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; module,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; e.g.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np x --mca coll basic ./mytest
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and see whether this makes a
</span><br>
<span class="quotelev1">&gt;     difference. I
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; used to
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; observe
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sometimes a (similar ?) problem in
</span><br>
<span class="quotelev1">&gt;     the openib
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl triggered from the tuned collective
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component, in cases where the ofed
</span><br>
<span class="quotelev1">&gt;     libraries
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were installed but no NCA was found
</span><br>
<span class="quotelev1">&gt;     on a node.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It used to work however with the basic
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 7/15/2010 3:08 AM, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hi Rolf,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unfortunately, i couldn't get rid
</span><br>
<span class="quotelev1">&gt;     of that
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; annoying segmentation fault when
</span><br>
<span class="quotelev1">&gt;     selecting
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; another bcast algorithm. i'm now
</span><br>
<span class="quotelev1">&gt;     going to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; replace MPI_Bcast with a naive
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; implementation (using MPI_Send and
</span><br>
<span class="quotelev1">&gt;     MPI_Recv)
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and see if
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; helps.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 14 July 2010 10:59:53
</span><br>
<span class="quotelev1">&gt;     Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for your input. You're
</span><br>
<span class="quotelev1">&gt;     right, I miss
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the coll_tuned_use_dynamic_rules
</span><br>
<span class="quotelev1">&gt;     option.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll check if I the segmentation
</span><br>
<span class="quotelev1">&gt;     fault
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; disappears when
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the basic bcast linear algorithm
</span><br>
<span class="quotelev1">&gt;     using the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; proper command line you provided.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 13 July 2010 20:39:59 Rolf
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vandeVaart
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Eloi:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To select the different bcast
</span><br>
<span class="quotelev1">&gt;     algorithms,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you need to add an extra mca
</span><br>
<span class="quotelev1">&gt;     parameter
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that tells the library to use
</span><br>
<span class="quotelev1">&gt;     dynamic
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; selection. --mca
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One way to make sure you are
</span><br>
<span class="quotelev1">&gt;     typing this in
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correctly is
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use it with ompi_info.  Do the
</span><br>
<span class="quotelev1">&gt;     following:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info -mca
</span><br>
<span class="quotelev1">&gt;     coll_tuned_use_dynamic_rules
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 --param
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You should see lots of output
</span><br>
<span class="quotelev1">&gt;     with all the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different algorithms that can be
</span><br>
<span class="quotelev1">&gt;     selected
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for the various collectives.
</span><br>
<span class="quotelev1">&gt;     Therefore,
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you need this:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev1">&gt;     coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 07/13/10 11:28, Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've found that &quot;--mca
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_bcast_algorithm 1&quot;
</span><br>
<span class="quotelev1">&gt;     allowed to
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switch to the basic linear
</span><br>
<span class="quotelev1">&gt;     algorithm.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway whatever the algorithm
</span><br>
<span class="quotelev1">&gt;     used, the
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault remains.
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does anyone could give some
</span><br>
<span class="quotelev1">&gt;     advice on ways
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; diagnose
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issue I'm facing ?
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Monday 12 July 2010 10:53:58
</span><br>
<span class="quotelev1">&gt;     Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm focusing on the MPI_Bcast
</span><br>
<span class="quotelev1">&gt;     routine
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that seems to randomly
</span><br>
<span class="quotelev1">&gt;     segfault when
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the openib btl. I'd
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; like
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; know if there is any way to
</span><br>
<span class="quotelev1">&gt;     make OpenMPI
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switch to
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different algorithm than the
</span><br>
<span class="quotelev1">&gt;     default one
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; being selected for MPI_Bcast.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 02 July 2010
</span><br>
<span class="quotelev1">&gt;     11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm observing a random
</span><br>
<span class="quotelev1">&gt;     segmentation
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fault during
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internode parallel
</span><br>
<span class="quotelev1">&gt;     computation involving
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and OpenMPI-1.4.2 (the same
</span><br>
<span class="quotelev1">&gt;     issue can be
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Report bugs to
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/hel">http://www.open-mpi.org/community/hel</a>
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    p/ [pbn08:02624] ***
</span><br>
<span class="quotelev1">&gt;     Process received
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    signal *** [pbn08:02624]
</span><br>
<span class="quotelev1">&gt;     Signal:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal code:
</span><br>
<span class="quotelev1">&gt;     Address
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    not mapped
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Failing at
</span><br>
<span class="quotelev1">&gt;     address:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    (nil) [pbn08:02624] [ 0]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;     [0x349540e4c0]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** End of error
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    ***
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    sh: line 1:  2624
</span><br>
<span class="quotelev1">&gt;     Segmentation fault
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/R
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ed Ha tE L\ -5 \/ x 86 _6 4\
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin\/actranpy_mp
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/Re
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dH at EL -5 /x 86 _ 64 /A c
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tran_11.0.rc2.41872'
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3D
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; re al _m 4_ n2 .d a t'
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ' '--mem=3200' '--threads=1'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--errorlevel=FATAL'
</span><br>
<span class="quotelev1">&gt;     '--t_max=0.1'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--parallel=domain'
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I choose not to use the
</span><br>
<span class="quotelev1">&gt;     openib btl
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (by using --mca btl
</span><br>
<span class="quotelev1">&gt;     self,sm,tcp on the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command line, for instance),
</span><br>
<span class="quotelev1">&gt;     I don't
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encounter any problem and the
</span><br>
<span class="quotelev1">&gt;     parallel
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation runs flawlessly.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to get some help
</span><br>
<span class="quotelev1">&gt;     to be
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; able: - to diagnose the issue I'm
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; facing with the openib btl -
</span><br>
<span class="quotelev1">&gt;     understand
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; why this issue is observed
</span><br>
<span class="quotelev1">&gt;     only when
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the openib btl and not when using
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; self,sm,tcp
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any help would be very much
</span><br>
<span class="quotelev1">&gt;     appreciated.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The outputs of ompi_info and the
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure scripts of OpenMPI are
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; enclosed to this email, and some
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; information
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the infiniband drivers as
</span><br>
<span class="quotelev1">&gt;     well.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the command line used
</span><br>
<span class="quotelev1">&gt;     when
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launching a
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    $NPROCESS --hostfile
</span><br>
<span class="quotelev1">&gt;     host.list --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl openib,sm,self,tcp
</span><br>
<span class="quotelev1">&gt;      --display-map
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --verbose --version --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_want_fork_support
</span><br>
<span class="quotelev1">&gt;     0 [...]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the command line used if
</span><br>
<span class="quotelev1">&gt;     not using infiniband:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    $NPROCESS --hostfile
</span><br>
<span class="quotelev1">&gt;     host.list --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt;      --display-map --verbose
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --version
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_want_fork_support
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     __________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; __ __ _
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Free Field Technologies
</span><br>
<span class="quotelev1">&gt;     Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev1">&gt;     Company Phone:   +32 10 487 959
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
*Eloi Gaudry*
Senior Product and Development Engineer -- HPC &amp; IT Manager
Company phone: 	+32 10 45 12 26 	Direct line: 	+32 10 49 51 47
Company fax: 	+32 10 45 46 26 	Email: 	eloi.gaudry_at_[hidden]
Website: 	www.fft.be &lt;<a href="http://www.fft.be">http://www.fft.be</a>&gt; 	
	
	FFT logo &lt;<a href="http://www.fft.be">http://www.fft.be</a>&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18329/ligne.jpg" alt="ligne.jpg">
<!-- attachment="ligne.jpg" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18329/FFT_logo.jpg" alt="FFT_logo.jpg">
<!-- attachment="FFT_logo.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
