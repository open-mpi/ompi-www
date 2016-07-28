<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 14:59:47 2009" -->
<!-- isoreceived="20090123195947" -->
<!-- sent="Fri, 23 Jan 2009 14:59:41 -0500" -->
<!-- isosent="20090123195941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="E6700ADD-489F-4DBE-A066-2201D9F4C310_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fd21f64d0901230627h38239c0enc6a737bbb40c6afe_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 14:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7809.php">Frank Kahle: "[OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, OMPI v1.3 is much better that registered memory usage than the  
<br>
1.2 series.  We introduced some new things, to include being able to  
<br>
specify exactly what receive queues you want.  See:
<br>
<p>...gaaah!  It's not on our FAQ yet.  :-(
<br>
<p>The main idea is that there is a new MCA parameter for the openib BTL:  
<br>
btl_openib_receive_queues.  It takes a colon-delimited string listing  
<br>
one or more receive queues of specific sizes and characteristics.  For  
<br>
now, all processes in the job *must* use the same string.  You can  
<br>
specify three kinds of receive queues:
<br>
<p>- P: per-peer queues
<br>
- S: shared receive queues
<br>
- X: XRC queues (with OFED 1.4 and later with specific Mellanox  
<br>
hardware)
<br>
<p>Here's a copy-n-paste of our help file describing the format of each:
<br>
<p>Per-peer receive queues require between 1 and 5 parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Buffer size in bytes (mandatory)
<br>
&nbsp;&nbsp;&nbsp;2. Number of buffers (optional; defaults to 8)
<br>
&nbsp;&nbsp;&nbsp;3. Low buffer count watermark (optional; defaults to (num_buffers /  
<br>
2))
<br>
&nbsp;&nbsp;&nbsp;4. Credit window size (optional; defaults to (low_watermark / 2))
<br>
&nbsp;&nbsp;&nbsp;5. Number of buffers reserved for credit messages (optional;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to (num_buffers*2-1)/credit_window)
<br>
<p>&nbsp;&nbsp;&nbsp;Example: P,128,256,128,16
<br>
&nbsp;&nbsp;&nbsp;- 128 byte buffers
<br>
&nbsp;&nbsp;&nbsp;- 256 buffers to receive incoming MPI messages
<br>
&nbsp;&nbsp;&nbsp;- When the number of available buffers reaches 128, re-post 128 more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers to reach a total of 256
<br>
&nbsp;&nbsp;&nbsp;- If the number of available credits reaches 16, send an explicit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;credit message to the sender
<br>
&nbsp;&nbsp;&nbsp;- Defaulting to ((256 * 2) - 1) / 16 = 31; this many buffers are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reserved for explicit credit messages
<br>
<p>Shared receive queues can take between 1 and 4 parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Buffer size in bytes (mandatory)
<br>
&nbsp;&nbsp;&nbsp;2. Number of buffers (optional; defaults to 16)
<br>
&nbsp;&nbsp;&nbsp;3. Low buffer count watermark (optional; defaults to (num_buffers /  
<br>
2))
<br>
&nbsp;&nbsp;&nbsp;4. Maximum number of outstanding sends a sender can have (optional;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to (low_watermark / 4)
<br>
<p>&nbsp;&nbsp;&nbsp;Example: S,1024,256,128,32
<br>
&nbsp;&nbsp;&nbsp;- 1024 byte buffers
<br>
&nbsp;&nbsp;&nbsp;- 256 buffers to receive incoming MPI messages
<br>
&nbsp;&nbsp;&nbsp;- When the number of available buffers reaches 128, re-post 128 more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers to reach a total of 256
<br>
&nbsp;&nbsp;&nbsp;- A sender will not send to a peer unless it has less than 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding sends to that peer.
<br>
<p>IIRC, &quot;X&quot; takes the same parameters as &quot;S&quot;...?  Note that if you you  
<br>
*any* XRC queues, then *all* of your queues must be XRC.
<br>
<p>OMPI defaults to a btl_receive_queues value that may be specific to  
<br>
your hardware.  For example, connectx defaults to the following value:
<br>
<p>shell$ ompi_info --param btl openib --parsable | grep receive_queues
<br>
mca:btl:openib:param:btl_openib_receive_queues:value:P, 
<br>
128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
<br>
mca:btl:openib:param:btl_openib_receive_queues:data_source:default value
<br>
mca:btl:openib:param:btl_openib_receive_queues:status:writable
<br>
mca:btl:openib:param:btl_openib_receive_queues:help:Colon-delimited,  
<br>
comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
<br>
mca:btl:openib:param:btl_openib_receive_queues:deprecated:no
<br>
<p>Hope that helps!
<br>
<p><p><p><p>On Jan 23, 2009, at 9:27 AM, Igor Kozin wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gabriele,
</span><br>
<span class="quotelev1">&gt; it might be that your message size is too large for available memory  
</span><br>
<span class="quotelev1">&gt; per node.
</span><br>
<span class="quotelev1">&gt; I had a problem with IMB when I was not able to run to completion  
</span><br>
<span class="quotelev1">&gt; Alltoall on N=128, ppn=8 on our cluster with 16 GB per node. You'd  
</span><br>
<span class="quotelev1">&gt; think 16 GB is quite a lot but when you do the maths:
</span><br>
<span class="quotelev1">&gt; 2* 4 MB * 128 procs * 8 procs/node = 8 GB/node plus you need to  
</span><br>
<span class="quotelev1">&gt; double because of buffering. I was told by Mellanox (our cards are  
</span><br>
<span class="quotelev1">&gt; ConnectX cards) that they introduced XRC in OFED 1.3 in addition to  
</span><br>
<span class="quotelev1">&gt; Share Receive Queue which should reduce memory foot print but I have  
</span><br>
<span class="quotelev1">&gt; not tested this yet.
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt; 2009/1/23 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi Igor,
</span><br>
<span class="quotelev1">&gt; My message size is 4096kb and i have 4 procs per core.
</span><br>
<span class="quotelev1">&gt; There isn't any difference using different algorithms..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/1/23 Igor Kozin &lt;i.n.kozin_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; what is your message size and the number of cores per node?
</span><br>
<span class="quotelev2">&gt; &gt; is there any difference using different algorithms?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2009/1/23 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i would like to understand why, if i run over 512 procs or more, my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; code stops over mpi collective, also with little send buffer. All
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors are locked into call, doing nothing. But, if i add
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Barrier  after MPI collective, it works! I run over Infiniband
</span><br>
<span class="quotelev3">&gt; &gt;&gt; net.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I know many people with this strange problem, i think there is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; strange interaction between Infiniband and OpenMPI that causes it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Jan 23, 2009, at 6:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I've noted that OpenMPI has an asynchronous behaviour in the  
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; calls.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; The processors, doesn't wait that other procs arrives in the  
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; That is correct.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; processors in the jobs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Can you describe what exactly you mean?  The MPI spec  
</span><br>
<span class="quotelev1">&gt; specifically
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; allows
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; this behavior; OMPI made specific design choices and  
</span><br>
<span class="quotelev1">&gt; optimizations to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; support this behavior.  FWIW, I'd be pretty surprised if any  
</span><br>
<span class="quotelev1">&gt; optimized
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; implementation defaults to fully synchronous collective  
</span><br>
<span class="quotelev1">&gt; operations.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Is there an OpenMPI parameter to lock all process in the  
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; call until is finished? Otherwise  i have to insert many  
</span><br>
<span class="quotelev1">&gt; MPI_Barrier
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; in my code and it is very tedious and strange..
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; As you have notes, MPI_Barrier is the *only* collective  
</span><br>
<span class="quotelev1">&gt; operation that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; guarantees to have any synchronization properties (and it's a  
</span><br>
<span class="quotelev1">&gt; fairly
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; weak
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; guarantee at that; no process will exit the barrier until every  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; has
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; entered the barrier -- but there's no guarantee that all  
</span><br>
<span class="quotelev1">&gt; processes leave
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; barrier at the same time).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Why do you need your processes to exit collective operations at  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; time?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Parallel programmer
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7809.php">Frank Kahle: "[OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7854.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
