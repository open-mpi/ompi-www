<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 17:18:06 2007" -->
<!-- isoreceived="20070403211806" -->
<!-- sent="Tue, 3 Apr 2007 17:18:01 -0400" -->
<!-- isosent="20070403211801" -->
<!-- name="Xie, Hugh" -->
<!-- email="hugh.xie_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun failed for machines not in the same subnet." -->
<!-- id="515C1EEC6C326C4C8822294F0A73E6A20572713A_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59CB7BDA-AEAD-4810-A1A3-096D1C7F5019_at_cisco.com" -->
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
<strong>From:</strong> Xie, Hugh (<em>hugh.xie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 17:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that workaround you purposed would resolve this problem.
<br>
&nbsp;
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Tuesday, April 03, 2007 5:05 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Mpirun failed for machines not in the same
<br>
subnet.
<br>
<p>Do your different subnets violate the assumptions listed here?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>We have not implemented any workarounds to say &quot;subnet X is routable to
<br>
subnet Y&quot; because no one had asked for them.  Such workarounds are
<br>
possible, of course, but I don't know what kind of timeframe we would be
<br>
able to implement them in.  Contributions would always be accepted!  :-)
<br>
<p>Probably the easiest workaround would be a top-level MCA parameter that
<br>
effectively tells OMPI to assume that *all* TCP addresses are routable
<br>
to each other.  That might not be too difficult to implement.
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
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have forgotten a 
</span><br>
<span class="quotelev1">&gt; component (such as &quot;self&quot;) in the list of usable components.
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
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have forgotten a 
</span><br>
<span class="quotelev1">&gt; component (such as &quot;self&quot;) in the list of usable components.
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
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process 
</span><br>
<span class="quotelev1">&gt; is likely to abort.  There are many reasons that a parallel process 
</span><br>
<span class="quotelev1">&gt; can fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<p><span class="quotelev1">&gt; here's some additional information (which may only be relevant to an 
</span><br>
<span class="quotelev1">&gt; Open MPI
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
<span class="quotelev1">&gt; using ompi 1.2.
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
<span class="quotelev1">&gt; This message is intended only for the personal and confidential use of
</span><br>
<p><span class="quotelev1">&gt; the designated recipient(s) named above.  If you are not the intended 
</span><br>
<span class="quotelev1">&gt; recipient of this message you are hereby notified that any review, 
</span><br>
<span class="quotelev1">&gt; dissemination, distribution or copying of this message is strictly 
</span><br>
<span class="quotelev1">&gt; prohibited.  This communication is for information purposes only and 
</span><br>
<span class="quotelev1">&gt; should not be regarded as an offer to sell or as a solicitation of an 
</span><br>
<span class="quotelev1">&gt; offer to buy any financial product, an official confirmation of any 
</span><br>
<span class="quotelev1">&gt; transaction, or as an official statement of Lehman Brothers.  Email 
</span><br>
<span class="quotelev1">&gt; transmission cannot be guaranteed to be secure or error-free.  
</span><br>
<span class="quotelev1">&gt; Therefore, we do not represent that this information is complete or 
</span><br>
<span class="quotelev1">&gt; accurate and it should not be relied upon as such.  All information is
</span><br>
<p><span class="quotelev1">&gt; subject to change without notice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; IRS Circular 230 Disclosure:
</span><br>
<span class="quotelev1">&gt; Please be advised that any discussion of U.S. tax matters contained 
</span><br>
<span class="quotelev1">&gt; within this communication (including any attachments) is not intended 
</span><br>
<span class="quotelev1">&gt; or written to be used and cannot be used for the purpose of (i) 
</span><br>
<span class="quotelev1">&gt; avoiding U.S. tax related penalties or (ii) promoting, marketing or 
</span><br>
<span class="quotelev1">&gt; recommending to another party any transaction or matter addressed 
</span><br>
<span class="quotelev1">&gt; herein.
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
This message is intended only for the personal and confidential use of the designated recipient(s) named above.  If you are not the intended recipient of this message you are hereby notified that any review, dissemination, distribution or copying of this message is strictly prohibited.  This communication is for information purposes only and should not be regarded as an offer to sell or as a solicitation of an offer to buy any financial product, an official confirmation of any transaction, or as an official statement of Lehman Brothers.  Email transmission cannot be guaranteed to be secure or error-free.  Therefore, we do not represent that this information is complete or accurate and it should not be relied upon as such.  All information is subject to change without notice.
--------
IRS Circular 230 Disclosure:
Please be advised that any discussion of U.S. tax matters contained within this communication (including any attachments) is not intended or written to be used and cannot be used for the purpose of (i) avoiding U.S. tax related penalties or (ii) promoting, marketing or recommending to another party any transaction or matter addressed herein.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Reply:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
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
