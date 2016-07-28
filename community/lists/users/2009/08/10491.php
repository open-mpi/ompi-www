<?
$subject_val = "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 16:21:31 2009" -->
<!-- isoreceived="20090826202131" -->
<!-- sent="Wed, 26 Aug 2009 16:20:17 -0400" -->
<!-- isosent="20090826202017" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects" -->
<!-- id="OF0BC70DDF.BEE0726D-ON8525761E.006E3D12-8525761E.006FC573_at_goodyear.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E68425B1-7004-48A6-9B6A-5D11907200C5_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Using%20OPENMPI%20configured%20for%20MX,%20GM%20and%20OPENIB%20interconnects"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-26 16:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see.  My one script for all clusters calls
<br>
<p>mpirun --mca btl openib,mx,gm,tcp,sm,self ....
<br>
<p>so I'd need to add some logic above the mpirun line to figure out what
<br>
cluster I am on to setup the correct  mpirun line.
<br>
<p>still seems like I should be able to do the mpirun line I have and just
<br>
tell me what it found, not what it can't find.
<br>
<p>thanks for the workaround...
<br>
<p>-tom
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scott Atchley                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;atchley_at_[hidden]                                             
<br>
<span class="quotelev1">             &gt;                                                          To 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                          cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Using OPENMPI      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08/26/2009 03:57          configured for MX,   GM and OPENIB  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PM                        interconnects                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>On Aug 26, 2009, at 3:41 PM, twurgl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; When, for example, I run on an IB cluster, I get warning messages
</span><br>
<span class="quotelev1">&gt; about not
</span><br>
<span class="quotelev1">&gt; finding GM NICS and another transport will be used etc.
</span><br>
<span class="quotelev1">&gt; And warnings about mca btl mx components not found etc.  It DOES run
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; IB, but it never says that in the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'd like is to not get warnings about what I don't have on the
</span><br>
<span class="quotelev1">&gt; cluster
</span><br>
<span class="quotelev1">&gt; in question and instead get a note that says it found the IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this already possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or can I at least suppress the warnings for the not-found
</span><br>
<span class="quotelev1">&gt; interconnects?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<p>You can use:
<br>
<p>$ mpirun -mca pml ob1 -mca mx,sm,self ...
<br>
<p>when running with MX. Substitute gm or ib when running on those
<br>
networks.
<br>
<p>It may still fail over to TCP. To avoid that, you could run:
<br>
<p>$ mpirun -mca pml ob1 -mca ^mx,^ib,^tcp ...
<br>
<p>to tell it to run on anything (GM, shared memory and self) except MX,
<br>
IB, and TCP.
<br>
<p>You probably do not need -mca pml ob1, but that will prevent the MX
<br>
MTL from trying to start as well.
<br>
<p>Scott
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Previous message:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10490.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>Reply:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
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
