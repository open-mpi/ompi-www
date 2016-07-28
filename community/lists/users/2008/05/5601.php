<?
$subject_val = "Re: [OMPI users] machines swapping in running job[Scanned]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 10:48:08 2008" -->
<!-- isoreceived="20080505144808" -->
<!-- sent="Mon, 5 May 2008 10:47:47 -0400" -->
<!-- isosent="20080505144747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machines swapping in running job[Scanned]" -->
<!-- id="097A4781-B980-4AC4-8C32-52221C3B632B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480E0DE2.2090809_at_ocf.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] machines swapping in running job[Scanned]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 10:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5602.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arif --
<br>
<p>Sorry for the delay in replying.
<br>
<p>Believe it or not, almost this exact issue just came up with the IBM  
<br>
Benchmark Center; they were using Open MPI with MPIRandomAccess and  
<br>
experiencing problems with running out of memory.  We didn't get a  
<br>
full set of data and experiments run; it was somewhat odd that the  
<br>
problem seemed to happen most often with the Intel compilers  
<br>
(preliminary tests shows that we couldn't replicate the problem with  
<br>
the gcc compiler on the same problem size).
<br>
<p>However, the IBM Benchmark Center engineers were able to get  
<br>
successful runs in by using the btl_openib_free_list_max MCA  
<br>
parameter.  This parameter essentially limits how much space the  
<br>
lowest-level IB driver in OMPI uses for fragment lists (it's actually  
<br>
fairly complex as to what it exactly does and how it helps in this  
<br>
situation -- insert &quot;waving hands&quot; image here...).  This parameter  
<br>
defaults to &quot;infinite&quot;.  Setting it to a finite value can allow  
<br>
MPIRandomAccess to complete; I believe that the IBC engineers used  
<br>
values of 2000 and 4000 for their systems.
<br>
<p><p><p><p>On Apr 22, 2008, at 12:10 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a similar problem last year with IMB when the the job would just
</span><br>
<span class="quotelev1">&gt; hang on a PowerPC cluster, for which Jeff Sqyres gave me many pointers
</span><br>
<span class="quotelev1">&gt; to change paramaters to fix the problem. Now with another cluster  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; am building the IMB job hangs in the same place and also the  
</span><br>
<span class="quotelev1">&gt; machines in
</span><br>
<span class="quotelev1">&gt; the cluster start swapping at the time of the hang. Following from  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; Jeff suggested I have tried the following mca paramaters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_flags=1
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_timeout=20
</span><br>
<span class="quotelev1">&gt; mpool_base_verbose=1
</span><br>
<span class="quotelev1">&gt; mpool_base_use_mem_hooks=1
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit=3072
</span><br>
<span class="quotelev1">&gt; #btl_openib_eager_limit=4096
</span><br>
<span class="quotelev1">&gt; btl_openib_max_send_size=12288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After setting these paramaters, the machines swapped, but a lot less
</span><br>
<span class="quotelev1">&gt; than before and got a lot further in the run and ran to completion.  
</span><br>
<span class="quotelev1">&gt; Are
</span><br>
<span class="quotelev1">&gt; there any further suggestions on paramaters that can be tweaked to get
</span><br>
<span class="quotelev1">&gt; these machines not to swap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also having the same swapping issue when running the HPCC  
</span><br>
<span class="quotelev1">&gt; benchmark
</span><br>
<span class="quotelev1">&gt; when it reaches the MPIRandomAccess where  it swaps on all machines  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; we can no longer access them and therefore we have to reboot the  
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS: SLES 10
</span><br>
<span class="quotelev1">&gt; Kernel: 2.6.16.46-0.12-smp
</span><br>
<span class="quotelev1">&gt; OFED release: 1.3
</span><br>
<span class="quotelev1">&gt; openmpi: 1.2.5 and 1.2.6 using btl openib
</span><br>
<span class="quotelev1">&gt; Switch: TopSpin
</span><br>
<span class="quotelev1">&gt; SM: on TopSpin switch
</span><br>
<span class="quotelev1">&gt; Ulimit has been set to unlimited as suggested in the FAQ
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing to note, Both jobs run with no problems using TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Arif Ali
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mobile: +44 (0)7970 148 122
</span><br>
<span class="quotelev1">&gt; DDI:    +44 (0)114 257 2240
</span><br>
<span class="quotelev1">&gt; Office: +44 (0)114 257 2200
</span><br>
<span class="quotelev1">&gt; Fax:    +44 (0)114 257 0022
</span><br>
<span class="quotelev1">&gt; Email:  aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support Phone:   +44 (0)845 702 3829
</span><br>
<span class="quotelev1">&gt; Support E-mail:  support_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skype:  arif_ali80
</span><br>
<span class="quotelev1">&gt; MSN:    aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email is confidential in that it is intended for the exclusive
</span><br>
<span class="quotelev1">&gt; attention of the addressee(s) indicated. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, this email should not be read or disclosed to any other
</span><br>
<span class="quotelev1">&gt; person. Please notify the sender immediately and delete this email  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; your computer system. Any opinions expressed are not necessarily those
</span><br>
<span class="quotelev1">&gt; of the company from which this email was sent and, whilst to the  
</span><br>
<span class="quotelev1">&gt; best of
</span><br>
<span class="quotelev1">&gt; our knowledge no viruses or defects exist, no responsibility can be
</span><br>
<span class="quotelev1">&gt; accepted for any loss or damage arising from its receipt or subsequent
</span><br>
<span class="quotelev1">&gt; use of this email.
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
<li><strong>Next message:</strong> <a href="5602.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
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
