<?
$subject_val = "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 21:47:05 2009" -->
<!-- isoreceived="20090627014705" -->
<!-- sent="Fri, 26 Jun 2009 18:46:52 -0700" -->
<!-- isosent="20090627014652" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call" -->
<!-- id="20090627014652.GA2976_at_tosh2egg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43F64E86355A744E9D51506B6C6783B904C36160_at_EM2.ad.ucla.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and	AlltoAll call<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 21:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9736.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9718.php">D'Auria, Raffaella: "[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>Reply:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 25, 2009 at 10:29:39AM -0700, D'Auria, Raffaella wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Dear All,
</span><br>
<span class="quotelev1">&gt;    I have been encountering a fatal type &quot;error polling LP CQ with status
</span><br>
<span class="quotelev1">&gt;    RETRY EXCEEDED ERROR status number 12&quot; whenever I try to run a simple
</span><br>
<span class="quotelev1">&gt;    MPI code (see below) that performs an AlltoAll call.
</span><br>
<span class="quotelev1">&gt;    We are running the OpenMPI 1.3.2 stack on top of the OFED 1.4.1 stack.
</span><br>
<span class="quotelev1">&gt;    Our cluster is composed of mostly Mellanox HCAs (MT_03B0140001) and
</span><br>
<span class="quotelev1">&gt;    some Qlogic (InfiniPath_QLE724) cards.
</span><br>
<span class="quotelev1">&gt;    The problem manifests itself as soon as the size of the vector, which
</span><br>
<span class="quotelev1">&gt;    components are being swapped between processes with the all to all
</span><br>
<span class="quotelev1">&gt;    call, is equal or larger than 68MB.
</span><br>
<span class="quotelev1">&gt;    Please note that I have this problem only when at least one of the
</span><br>
<span class="quotelev1">&gt;    computational nodes in the host list of mpiexec is a node with the
</span><br>
<span class="quotelev1">&gt;    qlogic card InfiniPath_QLE724.
</span><br>
<p>Look at btl flags....
<br>
It is possible that the InfiniPath_QLE7240 fast transport path for MPI is not
<br>
connecting to the Mellanox HCA.   The default fast path for cards 
<br>
like the QLE7240 use the PSM library that Mellanox does not know about.
<br>
<p>The mpirun man page hints at this but does not divulge what btl is 
<br>
and how to expore the modular component archecture (MCA).
<br>
<p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9736.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9718.php">D'Auria, Raffaella: "[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>Reply:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
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
