<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 09:16:37 2007" -->
<!-- isoreceived="20070831131637" -->
<!-- sent="Fri, 31 Aug 2007 09:15:56 -0400" -->
<!-- isosent="20070831131556" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Port Range" -->
<!-- id="9682CB2B-0AE5-4695-B0E1-8EA48C21D5A7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="01A1E637-06E1-4C3C-A5C5-DBCD4B6AB333_at_pitt.edu" -->
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
<strong>Date:</strong> 2007-08-31 09:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Previous message:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2007, at 9:07 AM, James Conway wrote:
<br>
<p><span class="quotelev1">&gt; The patch for limiting the port range used by OpenMPI sounds useful.
</span><br>
<span class="quotelev1">&gt; This *is* an issue with firewalls. For a dedicated cluster behind a
</span><br>
<span class="quotelev1">&gt; firewall that's ok, but for harnessing available hardware (eg, Mac
</span><br>
<span class="quotelev1">&gt; OSX systems) in the wee hours its not. Gets my vote!
</span><br>
<p>Note that restricting TCP ports will not allow OMPI to be used  
<br>
between clusters that have a firewall between them.  There are other  
<br>
issues involved, such as public IP address mirrors, etc.
<br>
<p>George's patch *may* allow OMPI to be used when a per-host firewall  
<br>
restricts which ports may be used, as long as all hosts are allowed  
<br>
unfettered access to the incoming port range.
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
<li><strong>Next message:</strong> <a href="3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Previous message:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3966.php">James Conway: "Re: [OMPI users] OpenMPI and Port Range"</a>
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
