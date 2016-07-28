<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 11:31:59 2007" -->
<!-- isoreceived="20071012153159" -->
<!-- sent="Fri, 12 Oct 2007 11:31:40 -0400" -->
<!-- isosent="20071012153140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect" -->
<!-- id="29FB75FA-834A-4641-84A8-3DDFDEC3C217_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1192187402.S.5486.21940.webmail16.rediffmail.com.1192192686.15739_at_webmail.rediffmail.com" -->
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
<strong>Date:</strong> 2007-10-12 11:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2007, at 8:38 AM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt; Yes, the buffer was being re-used. No we didnt try to benchmark it  
</span><br>
<span class="quotelev1">&gt; with netpipe and other stuffs. But the program was pretty simple.  
</span><br>
<span class="quotelev1">&gt; Do you think, I need to test it with bigger chunks (&gt;8MB) for  
</span><br>
<span class="quotelev1">&gt; communication.?
</span><br>
<span class="quotelev1">&gt; We also tried manipulating eager_limit and min_rdma_sze, but no  
</span><br>
<span class="quotelev1">&gt; success.
</span><br>
<p>It really depends on exactly what your application is doing.  If you  
<br>
re-use your buffers, then mpi_leave_pinned should help at least  
<br>
some.  But if the cost of communication is dwarfed by the rest of the  
<br>
app, then all this tuning won't make much of a difference.
<br>
<p>Here's a picture of Open MPI's MCA parameters w.r.t. the openib BTL  
<br>
and the ob1 PML (we changed some names and ordering between the v1.2  
<br>
series and what will become the v1.3 series -- both are shown below)  
<br>
-- hopefully this will help you understand what those MCA parameters  
<br>
are for:
<br>
<p><p>

<p>
The meanings of the 3 phases are explained in this pager: http:// 
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
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4203/ob1-params.pdf">ob1-params.pdf</a>
</ul>
<!-- attachment="ob1-params.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4204.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
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
