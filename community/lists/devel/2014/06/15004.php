<?
$subject_val = "Re: [OMPI devel] iallgather failures with coll ml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 17:47:21 2014" -->
<!-- isoreceived="20140611214721" -->
<!-- sent="Wed, 11 Jun 2014 15:47:19 -0600" -->
<!-- isosent="20140611214719" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iallgather failures with coll ml" -->
<!-- id="20140611214719.GK93892_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3604701DF8B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iallgather failures with coll ml<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-11 17:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15005.php">Gilles Gouaillardet: "[OMPI devel] false positive mtt error on v1.8"</a>
<li><strong>Previous message:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>In reply to:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Never seen that happen. Let me see what is going
<br>
on. Probably a problem with one of the pending coll/ml patches that
<br>
haven't made it into 1.8.
<br>
<p>-Nathan
<br>
<p>On Wed, Jun 11, 2014 at 01:39:24PM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt;    Hearing no response, I assume this is not a known issue so I submitted
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/4709">https://svn.open-mpi.org/trac/ompi/ticket/4709</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Nathan, is this something that you can look at?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf
</span><br>
<span class="quotelev1">&gt;    vandeVaart
</span><br>
<span class="quotelev1">&gt;    Sent: Friday, June 06, 2014 1:55 PM
</span><br>
<span class="quotelev1">&gt;    To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Subject: [OMPI devel] iallgather failures with coll ml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On the trunk, I am seeing failures of the ibm tests iallgather and
</span><br>
<span class="quotelev1">&gt;    iallgather_in_place.  Is this a known issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ mpirun --mca btl self,sm,tcp --mca coll ml,basic,libnbc --host
</span><br>
<span class="quotelev1">&gt;    drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4
</span><br>
<span class="quotelev1">&gt;    iallgather
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [**ERROR**]: MPI_COMM_WORLD rank 0, file iallgather.c:77:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    bad answer (0) at index 1 of 4 (should be 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [**ERROR**]: MPI_COMM_WORLD rank 1, file iallgather.c:77:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    bad answer (0) at index 1 of 4 (should be 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Interestingly, there is an MCA param to disable it in coll ml which allows
</span><br>
<span class="quotelev1">&gt;    the test to pass.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ mpirun --mca coll_ml_disable_allgather 1 --mca btl self,sm,tcp --mca
</span><br>
<span class="quotelev1">&gt;    coll ml,basic,libnbc --host
</span><br>
<span class="quotelev1">&gt;    drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 -np 4
</span><br>
<span class="quotelev1">&gt;    iallgather
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ echo $?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt;    of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15004/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15005.php">Gilles Gouaillardet: "[OMPI devel] false positive mtt error on v1.8"</a>
<li><strong>Previous message:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<li><strong>In reply to:</strong> <a href="15003.php">Rolf vandeVaart: "Re: [OMPI devel] iallgather failures with coll ml"</a>
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
