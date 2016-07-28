<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 11:38:39 2007" -->
<!-- isoreceived="20071012153839" -->
<!-- sent="Fri, 12 Oct 2007 11:38:13 -0400" -->
<!-- isosent="20071012153813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect" -->
<!-- id="AC37ECFA-8C08-46AA-89DA-54BC37EB2FAE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29FB75FA-834A-4641-84A8-3DDFDEC3C217_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 11:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4205.php">Richard Graham: "[OMPI users] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The mailing list snipped off the end of my mail -- here's the rest of  
<br>
what I said:
<br>
<p>The meanings of the 3 phases are explained in this pager: http://
<br>
www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols.
<br>
<p>If you use the mpi_leave_pinned parameter and Open MPI is able to
<br>
leave your entire buffer registered, it should give the best
<br>
performance in OMPI v1.2.4 because it should be able to do a single
<br>
RDMA PUT to transfer the majority of the message (after the first
<br>
time, of course).
<br>
<p><p><p>On Oct 12, 2007, at 11:31 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 12, 2007, at 8:38 AM, Neeraj Chourasia wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the buffer was being re-used. No we didnt try to benchmark it  
</span><br>
<span class="quotelev2">&gt;&gt; with netpipe and other stuffs. But the program was pretty simple.  
</span><br>
<span class="quotelev2">&gt;&gt; Do you think, I need to test it with bigger chunks (&gt;8MB) for  
</span><br>
<span class="quotelev2">&gt;&gt; communication.?
</span><br>
<span class="quotelev2">&gt;&gt; We also tried manipulating eager_limit and min_rdma_sze, but no  
</span><br>
<span class="quotelev2">&gt;&gt; success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It really depends on exactly what your application is doing.  If  
</span><br>
<span class="quotelev1">&gt; you re-use your buffers, then mpi_leave_pinned should help at least  
</span><br>
<span class="quotelev1">&gt; some.  But if the cost of communication is dwarfed by the rest of  
</span><br>
<span class="quotelev1">&gt; the app, then all this tuning won't make much of a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a picture of Open MPI's MCA parameters w.r.t. the openib BTL  
</span><br>
<span class="quotelev1">&gt; and the ob1 PML (we changed some names and ordering between the  
</span><br>
<span class="quotelev1">&gt; v1.2 series and what will become the v1.3 series -- both are shown  
</span><br>
<span class="quotelev1">&gt; below) -- hopefully this will help you understand what those MCA  
</span><br>
<span class="quotelev1">&gt; parameters are for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ob1-params.pdf&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="4205.php">Richard Graham: "[OMPI users] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
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
