<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 14:16:14 2007" -->
<!-- isoreceived="20071018181614" -->
<!-- sent="Thu, 18 Oct 2007 14:15:44 -0400" -->
<!-- isosent="20071018181544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which alternative to OpenMPI should I choose?" -->
<!-- id="97250201-4157-4D23-A026-3398FAC4048A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47175E89.5070703_at_lnl.infn.it" -->
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
<strong>Date:</strong> 2007-10-18 14:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>In reply to:</strong> <a href="4244.php">Marcin Skoczylas: "[OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2007, at 9:24 AM, Marcin Skoczylas wrote:
<br>
<p><span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<p>Yoinks -- OMPI is determining that it can't use the TCP BTL to reach  
<br>
other hosts.
<br>
<p><span class="quotelev1">&gt; /I assume this could be because of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /sbin/route
</span><br>
<span class="quotelev1">&gt; Kernel IP routing table
</span><br>
<span class="quotelev1">&gt; Destination     Gateway         Genmask         Flags Metric Ref     
</span><br>
<span class="quotelev1">&gt; Use
</span><br>
<span class="quotelev1">&gt; Iface
</span><br>
<span class="quotelev1">&gt; 192.125.17.0    *               255.255.255.0   U     0       
</span><br>
<span class="quotelev1">&gt; 0        0 eth1
</span><br>
<span class="quotelev1">&gt; 192.168.12.0    *               255.255.255.0   U     0       
</span><br>
<span class="quotelev1">&gt; 0        0 eth1
</span><br>
<span class="quotelev1">&gt; 161.254.0.0     *               255.255.0.0     U     0       
</span><br>
<span class="quotelev1">&gt; 0        0 eth1
</span><br>
<span class="quotelev1">&gt; default         192.125.17.1    0.0.0.0         UG    0       
</span><br>
<span class="quotelev1">&gt; 0        0 eth1
</span><br>
<p>192.125 -- is that supposed to be a private address?  If so, that's  
<br>
not really the Right way to do things...
<br>
<p><span class="quotelev1">&gt; So &quot;narrowly scoped netmasks&quot; which (as it's written in the FAQ)  
</span><br>
<span class="quotelev1">&gt; are not
</span><br>
<span class="quotelev1">&gt; supported in the OpenMPI. I asked for a workaround on this newsgroup
</span><br>
<span class="quotelev1">&gt; some time ago - but no answer uptill now. So my question is: what
</span><br>
<span class="quotelev1">&gt; alternative should I choose that will work in such configuration?
</span><br>
<p>We haven't put in a workaround because (to be blunt) we either forgot  
<br>
about it and/or not enough people have asked for it.  Sorry.  :-(
<br>
<p>It probably wouldn't be too hard to put in an MCA parameter to say  
<br>
&quot;don't do netmask comparisons; just assume that every IP address is  
<br>
reachable by every other IP address.&quot;
<br>
<p>George -- did you mention that you were working on this at one point?
<br>
<p><span class="quotelev1">&gt; Do you
</span><br>
<span class="quotelev1">&gt; have some experience in other MPI implementations, for example LamMPI?
</span><br>
<p>LAM/MPI should be able to work just fine in this environment; it  
<br>
doesn't do any kind of reachability computations like Open MPI does  
<br>
-- it blindly assumes that every MPI process is reachable by every  
<br>
other MPI process.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>In reply to:</strong> <a href="4244.php">Marcin Skoczylas: "[OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4255.php">Marcin Skoczylas: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
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
