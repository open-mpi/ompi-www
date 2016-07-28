<?
$subject_val = "Re: [OMPI devel] Ssh tunnelling broken in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 12:55:04 2008" -->
<!-- isoreceived="20080402165504" -->
<!-- sent="Wed, 02 Apr 2008 10:54:50 -0600" -->
<!-- isosent="20080402165450" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ssh tunnelling broken in trunk?" -->
<!-- id="C419167A.CEEA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DD406BAE-5E65-44A9-A43E-5DFF31E08EFA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ssh tunnelling broken in trunk?<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 12:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3627.php">George Bosilca: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3627.php">George Bosilca: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3630.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3630.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I remember that someone had found a bug that caused orte_debug_flag to not
<br>
get properly set (local var covering over a global one) - could be that your
<br>
tmp-public branch doesn't have that patch in it.
<br>
<p>You might try updating to the latest trunk
<br>
<p><p>On 4/2/08 10:41 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm using this feature on the trunk with the version from yesterday.
</span><br>
<span class="quotelev1">&gt; It works without problems ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2008, at 12:14 PM, Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 02 April 2008 11:07:18 am Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are these r numbers relevant on the /tmp-public branch, or the trunk?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I pulled it out of the command used to update the branch, which was:
</span><br>
<span class="quotelev2">&gt;&gt; svn merge -r 17590:17917 <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the cpc tmp branch, it happened at r17920.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 2, 2008, at 11:59 AM, Jon Mason wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I regressed my tree and it looks like it happened between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17590:17917
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 10:22:52 am Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am noticing that ssh seems to be broken on trunk (and my cpc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; branch, as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it is based on trunk).  When I try to use xterm and gdb to debug, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; successfully get 1 xterm.  I have tried this on 2 different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; setups.  I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; successfully get the xterm's on the 1.2 svn branch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am running the following command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --n 2 --host vic12,vic20 -mca btl tcp,self -d xterm -e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gdb /usr/mpi/gcc/openmpi-1.2-svn/tests/IMB-3.0/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is anyone else seeing this problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3627.php">George Bosilca: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3627.php">George Bosilca: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3630.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3630.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
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
