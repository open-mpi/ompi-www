<?
$subject_val = "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 07:39:38 2009" -->
<!-- isoreceived="20090627113938" -->
<!-- sent="Sat, 27 Jun 2009 07:39:30 -0400" -->
<!-- isosent="20090627113930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call" -->
<!-- id="85FD6771-7D20-41C4-895D-3446B0F9F7EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090627014652.GA2976_at_tosh2egg.wr.niftyegg.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 07:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>Previous message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>In reply to:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the web archives, the user posted a similar question on the  
<br>
OpenFabrics list and had their question answered by someone from QLogic.
<br>
<p><p>On Jun 26, 2009, at 9:46 PM, Nifty Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jun 25, 2009 at 10:29:39AM -0700, D'Auria, Raffaella wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;    I have been encountering a fatal type &quot;error polling LP CQ with  
</span><br>
<span class="quotelev1">&gt; status
</span><br>
<span class="quotelev2">&gt; &gt;    RETRY EXCEEDED ERROR status number 12&quot; whenever I try to run a  
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev2">&gt; &gt;    MPI code (see below) that performs an AlltoAll call.
</span><br>
<span class="quotelev2">&gt; &gt;    We are running the OpenMPI 1.3.2 stack on top of the OFED 1.4.1  
</span><br>
<span class="quotelev1">&gt; stack.
</span><br>
<span class="quotelev2">&gt; &gt;    Our cluster is composed of mostly Mellanox HCAs (MT_03B0140001)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;    some Qlogic (InfiniPath_QLE724) cards.
</span><br>
<span class="quotelev2">&gt; &gt;    The problem manifests itself as soon as the size of the vector,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev2">&gt; &gt;    components are being swapped between processes with the all to  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev2">&gt; &gt;    call, is equal or larger than 68MB.
</span><br>
<span class="quotelev2">&gt; &gt;    Please note that I have this problem only when at least one of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    computational nodes in the host list of mpiexec is a node with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    qlogic card InfiniPath_QLE724.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at btl flags....
</span><br>
<span class="quotelev1">&gt; It is possible that the InfiniPath_QLE7240 fast transport path for  
</span><br>
<span class="quotelev1">&gt; MPI is not
</span><br>
<span class="quotelev1">&gt; connecting to the Mellanox HCA.   The default fast path for cards
</span><br>
<span class="quotelev1">&gt; like the QLE7240 use the PSM library that Mellanox does not know  
</span><br>
<span class="quotelev1">&gt; about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun man page hints at this but does not divulge what btl is
</span><br>
<span class="quotelev1">&gt; and how to expore the modular component archecture (MCA).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;         T o m  M i t c h e l l
</span><br>
<span class="quotelev1">&gt;         Found me a new hat, now what?
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>Previous message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>In reply to:</strong> <a href="9737.php">Nifty Tom Mitchell: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call"</a>
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
