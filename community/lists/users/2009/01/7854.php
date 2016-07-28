<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 05:10:20 2009" -->
<!-- isoreceived="20090127101020" -->
<!-- sent="Tue, 27 Jan 2009 11:10:14 +0100" -->
<!-- isosent="20090127101014" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="3a37617f0901270210k159ba9a7q1dce2e3619edcc07_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6700ADD-489F-4DBE-A066-2201D9F4C310_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 05:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7808.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow! Great and useful explanation.
<br>
Thanks Jeff .
<br>
<p>2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; FWIW, OMPI v1.3 is much better that registered memory usage than the 1.2
</span><br>
<span class="quotelev1">&gt; series.  We introduced some new things, to include being able to specify
</span><br>
<span class="quotelev1">&gt; exactly what receive queues you want.  See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...gaaah!  It's not on our FAQ yet.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main idea is that there is a new MCA parameter for the openib BTL:
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues.  It takes a colon-delimited string listing one or
</span><br>
<span class="quotelev1">&gt; more receive queues of specific sizes and characteristics.  For now, all
</span><br>
<span class="quotelev1">&gt; processes in the job *must* use the same string.  You can specify three
</span><br>
<span class="quotelev1">&gt; kinds of receive queues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - P: per-peer queues
</span><br>
<span class="quotelev1">&gt; - S: shared receive queues
</span><br>
<span class="quotelev1">&gt; - X: XRC queues (with OFED 1.4 and later with specific Mellanox hardware)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a copy-n-paste of our help file describing the format of each:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per-peer receive queues require between 1 and 5 parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. Buffer size in bytes (mandatory)
</span><br>
<span class="quotelev1">&gt;  2. Number of buffers (optional; defaults to 8)
</span><br>
<span class="quotelev1">&gt;  3. Low buffer count watermark (optional; defaults to (num_buffers / 2))
</span><br>
<span class="quotelev1">&gt;  4. Credit window size (optional; defaults to (low_watermark / 2))
</span><br>
<span class="quotelev1">&gt;  5. Number of buffers reserved for credit messages (optional;
</span><br>
<span class="quotelev1">&gt;     defaults to (num_buffers*2-1)/credit_window)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Example: P,128,256,128,16
</span><br>
<span class="quotelev1">&gt;  - 128 byte buffers
</span><br>
<span class="quotelev1">&gt;  - 256 buffers to receive incoming MPI messages
</span><br>
<span class="quotelev1">&gt;  - When the number of available buffers reaches 128, re-post 128 more
</span><br>
<span class="quotelev1">&gt;    buffers to reach a total of 256
</span><br>
<span class="quotelev1">&gt;  - If the number of available credits reaches 16, send an explicit
</span><br>
<span class="quotelev1">&gt;    credit message to the sender
</span><br>
<span class="quotelev1">&gt;  - Defaulting to ((256 * 2) - 1) / 16 = 31; this many buffers are
</span><br>
<span class="quotelev1">&gt;    reserved for explicit credit messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shared receive queues can take between 1 and 4 parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. Buffer size in bytes (mandatory)
</span><br>
<span class="quotelev1">&gt;  2. Number of buffers (optional; defaults to 16)
</span><br>
<span class="quotelev1">&gt;  3. Low buffer count watermark (optional; defaults to (num_buffers / 2))
</span><br>
<span class="quotelev1">&gt;  4. Maximum number of outstanding sends a sender can have (optional;
</span><br>
<span class="quotelev1">&gt;     defaults to (low_watermark / 4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Example: S,1024,256,128,32
</span><br>
<span class="quotelev1">&gt;  - 1024 byte buffers
</span><br>
<span class="quotelev1">&gt;  - 256 buffers to receive incoming MPI messages
</span><br>
<span class="quotelev1">&gt;  - When the number of available buffers reaches 128, re-post 128 more
</span><br>
<span class="quotelev1">&gt;    buffers to reach a total of 256
</span><br>
<span class="quotelev1">&gt;  - A sender will not send to a peer unless it has less than 32
</span><br>
<span class="quotelev1">&gt;    outstanding sends to that peer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, &quot;X&quot; takes the same parameters as &quot;S&quot;...?  Note that if you you *any*
</span><br>
<span class="quotelev1">&gt; XRC queues, then *all* of your queues must be XRC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI defaults to a btl_receive_queues value that may be specific to your
</span><br>
<span class="quotelev1">&gt; hardware.  For example, connectx defaults to the following value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info --param btl openib --parsable | grep receive_queues
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_receive_queues:value:P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_receive_queues:data_source:default value
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_receive_queues:status:writable
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_receive_queues:help:Colon-delimited, comma
</span><br>
<span class="quotelev1">&gt; delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_receive_queues:deprecated:no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 9:27 AM, Igor Kozin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gabriele,
</span><br>
<span class="quotelev2">&gt;&gt; it might be that your message size is too large for available memory per
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt; I had a problem with IMB when I was not able to run to completion Alltoall
</span><br>
<span class="quotelev2">&gt;&gt; on N=128, ppn=8 on our cluster with 16 GB per node. You'd think 16 GB is
</span><br>
<span class="quotelev2">&gt;&gt; quite a lot but when you do the maths:
</span><br>
<span class="quotelev2">&gt;&gt; 2* 4 MB * 128 procs * 8 procs/node = 8 GB/node plus you need to double
</span><br>
<span class="quotelev2">&gt;&gt; because of buffering. I was told by Mellanox (our cards are ConnectX cards)
</span><br>
<span class="quotelev2">&gt;&gt; that they introduced XRC in OFED 1.3 in addition to Share Receive Queue
</span><br>
<span class="quotelev2">&gt;&gt; which should reduce memory foot print but I have not tested this yet.
</span><br>
<span class="quotelev2">&gt;&gt; HTH,
</span><br>
<span class="quotelev2">&gt;&gt; Igor
</span><br>
<span class="quotelev2">&gt;&gt; 2009/1/23 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Igor,
</span><br>
<span class="quotelev2">&gt;&gt; My message size is 4096kb and i have 4 procs per core.
</span><br>
<span class="quotelev2">&gt;&gt; There isn't any difference using different algorithms..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/1/23 Igor Kozin &lt;i.n.kozin_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; what is your message size and the number of cores per node?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is there any difference using different algorithms?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2009/1/23 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; i would like to understand why, if i run over 512 procs or more, my
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; code stops over mpi collective, also with little send buffer. All
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; processors are locked into call, doing nothing. But, if i add
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_Barrier  after MPI collective, it works! I run over Infiniband
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; net.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I know many people with this strange problem, i think there is a
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; strange interaction between Infiniband and OpenMPI that causes it.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Jan 23, 2009, at 6:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; I've noted that OpenMPI has an asynchronous behaviour in the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; collective
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; calls.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; The processors, doesn't wait that other procs arrives in the call.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; That is correct.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; processors in the jobs.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Can you describe what exactly you mean?  The MPI spec specifically
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; allows
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; this behavior; OMPI made specific design choices and optimizations to
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; support this behavior.  FWIW, I'd be pretty surprised if any
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; optimized
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; implementation defaults to fully synchronous collective operations.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Is there an OpenMPI parameter to lock all process in the collective
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; call until is finished? Otherwise  i have to insert many MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; in my code and it is very tedious and strange..
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; As you have notes, MPI_Barrier is the *only* collective operation
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; that
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; guarantees to have any synchronization properties (and it's a fairly
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; weak
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; guarantee at that; no process will exit the barrier until every
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; process
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; has
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; entered the barrier -- but there's no guarantee that all processes
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; leave
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; barrier at the same time).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Why do you need your processes to exit collective operations at the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; same
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; time?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Parallel programmer
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7855.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7808.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
