<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 09:30:03 2007" -->
<!-- isoreceived="20071019133003" -->
<!-- sent="Fri, 19 Oct 2007 15:29:59 +0200" -->
<!-- isosent="20071019132959" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which alternative to OpenMPI should I choose?" -->
<!-- id="4718B157.9000201_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97250201-4157-4D23-A026-3398FAC4048A_at_cisco.com" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 09:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 18, 2007, at 9:24 AM, Marcin Skoczylas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yoinks -- OMPI is determining that it can't use the TCP BTL to reach  
</span><br>
<span class="quotelev1">&gt; other hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; /I assume this could be because of:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ /sbin/route
</span><br>
<span class="quotelev2">&gt;&gt; Kernel IP routing table
</span><br>
<span class="quotelev2">&gt;&gt; Destination     Gateway         Genmask         Flags Metric Ref     
</span><br>
<span class="quotelev2">&gt;&gt; Use
</span><br>
<span class="quotelev2">&gt;&gt; Iface
</span><br>
<span class="quotelev2">&gt;&gt; 192.125.17.0    *               255.255.255.0   U     0       
</span><br>
<span class="quotelev2">&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.12.0    *               255.255.255.0   U     0       
</span><br>
<span class="quotelev2">&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev2">&gt;&gt; 161.254.0.0     *               255.255.0.0     U     0       
</span><br>
<span class="quotelev2">&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev2">&gt;&gt; default         192.125.17.1    0.0.0.0         UG    0       
</span><br>
<span class="quotelev2">&gt;&gt; 0        0 eth1
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.125 -- is that supposed to be a private address?  If so, that's  
</span><br>
<span class="quotelev1">&gt; not really the Right way to do things...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Actually the configuration here is quite strange, this is not a private 
<br>
address. The head node sits on a public address from 192.125.17.0 net 
<br>
(routable from outside), workers are on 192.168.12.0
<br>
<p><span class="quotelev2">&gt;&gt; So &quot;narrowly scoped netmasks&quot; which (as it's written in the FAQ)  
</span><br>
<span class="quotelev2">&gt;&gt; are not
</span><br>
<span class="quotelev2">&gt;&gt; supported in the OpenMPI. I asked for a workaround on this newsgroup
</span><br>
<span class="quotelev2">&gt;&gt; some time ago - but no answer uptill now. So my question is: what
</span><br>
<span class="quotelev2">&gt;&gt; alternative should I choose that will work in such configuration?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We haven't put in a workaround because (to be blunt) we either forgot  
</span><br>
<span class="quotelev1">&gt; about it and/or not enough people have asked for it.  Sorry.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It probably wouldn't be too hard to put in an MCA parameter to say  
</span><br>
<span class="quotelev1">&gt; &quot;don't do netmask comparisons; just assume that every IP address is  
</span><br>
<span class="quotelev1">&gt; reachable by every other IP address.&quot;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Would be really great! I hope it's not so complicated to add.
<br>
<p><span class="quotelev1">&gt; George -- did you mention that you were working on this at one point?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Do you
</span><br>
<span class="quotelev2">&gt;&gt; have some experience in other MPI implementations, for example LamMPI?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAM/MPI should be able to work just fine in this environment; it  
</span><br>
<span class="quotelev1">&gt; doesn't do any kind of reachability computations like Open MPI does  
</span><br>
<span class="quotelev1">&gt; -- it blindly assumes that every MPI process is reachable by every  
</span><br>
<span class="quotelev1">&gt; other MPI process.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Firstly I'm going to have some discussion with administrators here to do 
<br>
some more checks... and then I'll try to use LamMPI. The thing is that 
<br>
I'm not familiar with it at all, I was always using OpenMPI instead. 
<br>
Hope the configuration is as easy as in the OpenMPI and will work 
<br>
without root account.
<br>
<p>Thank you for your help!
<br>
<p>regards, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
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
