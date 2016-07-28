<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 08:33:49 2013" -->
<!-- isoreceived="20131219133349" -->
<!-- sent="Thu, 19 Dec 2013 08:33:46 -0500" -->
<!-- isosent="20131219133346" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="2A5ED293-1BAC-45AE-9C1A-1C9F6070D245_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131218221935.GK7636_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 08:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23230.php">Martin Siegert: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23224.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2013, at 5:19 PM, Martin Siegert &lt;siegert_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for figuring this out. Does this work for 1.6.x as well?
</span><br>
<span class="quotelev1">&gt; The FAQ <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt; covers versions 1.2.x to 1.5.x. 
</span><br>
<span class="quotelev1">&gt; Does 1.6.x support mpi_paffinity_alone = 1 ?
</span><br>
<span class="quotelev1">&gt; I set this in openmpi-mca-params.conf but
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ompi_info | grep affinity
</span><br>
<span class="quotelev1">&gt;          MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does not give any indication that this is actually used.
</span><br>
<p>I never checked actual bindings with hwloc-ps or anything like that,
<br>
but as far as I can tell, 1.6.4 had consistently high performance when I
<br>
used mpi_paffinity_alone=1, and slowdowns of up to a factor of ~2
<br>
when I didn't.  1.7.3 with the old kernel never showed extreme slowdowns,
<br>
but we didn't benchmark it carefully, so it's conceivable it had minor
<br>
(same factor of 2) slowdowns.  With the new kernel 1.7.3 would
<br>
show slowdowns between a factor of 2 and maybe 20 (paffinity definitely
<br>
did nothing) , and &quot;--bind-to core&quot; restored consistent performance.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23253/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23230.php">Martin Siegert: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23224.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
