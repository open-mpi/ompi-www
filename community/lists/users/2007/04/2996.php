<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 17:29:59 2007" -->
<!-- isoreceived="20070403212959" -->
<!-- sent="Tue, 3 Apr 2007 17:29:17 -0400" -->
<!-- isosent="20070403212917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun failed for machines not in the same subnet." -->
<!-- id="ADF8BEAF-1EEC-47B7-BFF0-34AAE4C90CB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="515C1EEC6C326C4C8822294F0A73E6A20572713A_at_njpcmg1exms317.leh.lbcorp.lehman.com" -->
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
<strong>Date:</strong> 2007-04-03 17:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have filed a ticket for this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/972">https://svn.open-mpi.org/trac/ompi/ticket/972</a>
<br>
<p><p>On Apr 3, 2007, at 5:18 PM, Xie, Hugh wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that workaround you purposed would resolve this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 03, 2007 5:05 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mpirun failed for machines not in the same
</span><br>
<span class="quotelev1">&gt; subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do your different subnets violate the assumptions listed here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have not implemented any workarounds to say &quot;subnet X is  
</span><br>
<span class="quotelev1">&gt; routable to
</span><br>
<span class="quotelev1">&gt; subnet Y&quot; because no one had asked for them.  Such workarounds are
</span><br>
<span class="quotelev1">&gt; possible, of course, but I don't know what kind of timeframe we  
</span><br>
<span class="quotelev1">&gt; would be
</span><br>
<span class="quotelev1">&gt; able to implement them in.  Contributions would always be  
</span><br>
<span class="quotelev1">&gt; accepted!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably the easiest workaround would be a top-level MCA parameter  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; effectively tells OMPI to assume that *all* TCP addresses are routable
</span><br>
<span class="quotelev1">&gt; to each other.  That might not be too difficult to implement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2007, at 4:11 PM, Xie, Hugh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the follow error message while running: 'mpirun -v -np 2
</span><br>
<span class="quotelev2">&gt;&gt; -machinefile hosts.txt testc.x'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have forgotten a
</span><br>
<span class="quotelev2">&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have forgotten a
</span><br>
<span class="quotelev2">&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt;&gt; is likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev2">&gt;&gt; can fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same commands works if the content in hosts.txt is in same  
</span><br>
<span class="quotelev2">&gt;&gt; subnet.
</span><br>
<span class="quotelev2">&gt;&gt; Once I switch to hosts in different subnet, it stop working. I am
</span><br>
<span class="quotelev2">&gt;&gt; using ompi 1.2.
</span><br>
<span class="quotelev2">&gt;&gt; Please help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
</span><br>
<span class="quotelev2">&gt;&gt; - - - - - - - - - -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This message is intended only for the personal and confidential  
</span><br>
<span class="quotelev2">&gt;&gt; use of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the designated recipient(s) named above.  If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient of this message you are hereby notified that any review,
</span><br>
<span class="quotelev2">&gt;&gt; dissemination, distribution or copying of this message is strictly
</span><br>
<span class="quotelev2">&gt;&gt; prohibited.  This communication is for information purposes only and
</span><br>
<span class="quotelev2">&gt;&gt; should not be regarded as an offer to sell or as a solicitation of an
</span><br>
<span class="quotelev2">&gt;&gt; offer to buy any financial product, an official confirmation of any
</span><br>
<span class="quotelev2">&gt;&gt; transaction, or as an official statement of Lehman Brothers.  Email
</span><br>
<span class="quotelev2">&gt;&gt; transmission cannot be guaranteed to be secure or error-free.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, we do not represent that this information is complete or
</span><br>
<span class="quotelev2">&gt;&gt; accurate and it should not be relied upon as such.  All  
</span><br>
<span class="quotelev2">&gt;&gt; information is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subject to change without notice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------
</span><br>
<span class="quotelev2">&gt;&gt; IRS Circular 230 Disclosure:
</span><br>
<span class="quotelev2">&gt;&gt; Please be advised that any discussion of U.S. tax matters contained
</span><br>
<span class="quotelev2">&gt;&gt; within this communication (including any attachments) is not intended
</span><br>
<span class="quotelev2">&gt;&gt; or written to be used and cannot be used for the purpose of (i)
</span><br>
<span class="quotelev2">&gt;&gt; avoiding U.S. tax related penalties or (ii) promoting, marketing or
</span><br>
<span class="quotelev2">&gt;&gt; recommending to another party any transaction or matter addressed
</span><br>
<span class="quotelev2">&gt;&gt; herein.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2995.php">Xie, Hugh: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
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
