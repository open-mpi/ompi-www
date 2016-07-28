<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 17:05:51 2007" -->
<!-- isoreceived="20070403210551" -->
<!-- sent="Tue, 3 Apr 2007 17:05:15 -0400" -->
<!-- isosent="20070403210515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun failed for machines not in the same subnet." -->
<!-- id="59CB7BDA-AEAD-4810-A1A3-096D1C7F5019_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="515C1EEC6C326C4C8822294F0A73E6A205727138_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
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
<strong>Date:</strong> 2007-04-03 17:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do your different subnets violate the assumptions listed here?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>We have not implemented any workarounds to say &quot;subnet X is routable  
<br>
to subnet Y&quot; because no one had asked for them.  Such workarounds are  
<br>
possible, of course, but I don't know what kind of timeframe we would  
<br>
be able to implement them in.  Contributions would always be  
<br>
accepted!  :-)
<br>
<p>Probably the easiest workaround would be a top-level MCA parameter  
<br>
that effectively tells OMPI to assume that *all* TCP addresses are  
<br>
routable to each other.  That might not be too difficult to implement.
<br>
<p><p>On Apr 3, 2007, at 4:11 PM, Xie, Hugh wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the follow error message while running: 'mpirun -v -np 2
</span><br>
<span class="quotelev1">&gt; -machinefile hosts.txt testc.x'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same commands works if the content in hosts.txt is in same subnet.
</span><br>
<span class="quotelev1">&gt; Once I switch to hosts in different subnet, it stop working. I am  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; ompi 1.2.
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
</span><br>
<span class="quotelev1">&gt; - - - - - - - - - -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is intended only for the personal and confidential use  
</span><br>
<span class="quotelev1">&gt; of the designated recipient(s) named above.  If you are not the  
</span><br>
<span class="quotelev1">&gt; intended recipient of this message you are hereby notified that any  
</span><br>
<span class="quotelev1">&gt; review, dissemination, distribution or copying of this message is  
</span><br>
<span class="quotelev1">&gt; strictly prohibited.  This communication is for information  
</span><br>
<span class="quotelev1">&gt; purposes only and should not be regarded as an offer to sell or as  
</span><br>
<span class="quotelev1">&gt; a solicitation of an offer to buy any financial product, an  
</span><br>
<span class="quotelev1">&gt; official confirmation of any transaction, or as an official  
</span><br>
<span class="quotelev1">&gt; statement of Lehman Brothers.  Email transmission cannot be  
</span><br>
<span class="quotelev1">&gt; guaranteed to be secure or error-free.  Therefore, we do not  
</span><br>
<span class="quotelev1">&gt; represent that this information is complete or accurate and it  
</span><br>
<span class="quotelev1">&gt; should not be relied upon as such.  All information is subject to  
</span><br>
<span class="quotelev1">&gt; change without notice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; IRS Circular 230 Disclosure:
</span><br>
<span class="quotelev1">&gt; Please be advised that any discussion of U.S. tax matters contained  
</span><br>
<span class="quotelev1">&gt; within this communication (including any attachments) is not  
</span><br>
<span class="quotelev1">&gt; intended or written to be used and cannot be used for the purpose  
</span><br>
<span class="quotelev1">&gt; of (i) avoiding U.S. tax related penalties or (ii) promoting,  
</span><br>
<span class="quotelev1">&gt; marketing or recommending to another party any transaction or  
</span><br>
<span class="quotelev1">&gt; matter addressed herein.
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
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
