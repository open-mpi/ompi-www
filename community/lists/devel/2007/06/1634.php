<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 11:37:21 2007" -->
<!-- isoreceived="20070607153721" -->
<!-- sent="Thu, 7 Jun 2007 11:37:03 -0400" -->
<!-- isosent="20070607153703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] request help debugging openmpi on openib/ipath" -->
<!-- id="96978269-DB91-433C-9C9D-709C2B7564E0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1180653904.3407.447.camel_at_brick.pathscale.com" -->
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
<strong>Date:</strong> 2007-06-07 11:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2007, at 7:25 PM, Ralph Campbell wrote:
<br>
<p><span class="quotelev1">&gt; I can run the Intel MPI benchmarks OK at np=2 but at np=4,
</span><br>
<span class="quotelev1">&gt; it hangs.
</span><br>
<p>Bummer.
<br>
<p><span class="quotelev1">&gt; If I change /usr/share/openmpi/mca-btl-openib-hca-params.ini
</span><br>
<span class="quotelev1">&gt; [QLogic InfiniPath]
</span><br>
<span class="quotelev1">&gt; use_eager_rdma = 0
</span><br>
<p>FYI, you can change such values on the command line and/or  
<br>
environment -- see <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
<br>
category=tuning#setting-mca-params.  The MCA parameter in question is  
<br>
btl_openib_use_eager_rdma.
<br>
<p><span class="quotelev1">&gt; Then, it gets much farther before hanging on 2MB+ messages.
</span><br>
<span class="quotelev1">&gt; If I create .openmpi/mca-params.conf with
</span><br>
<span class="quotelev1">&gt; min_rdma_size = 2147483648
</span><br>
<span class="quotelev1">&gt; The benchmark completes reliably.
</span><br>
<p>Yoinks.  I assume you mean btl_openib_min_rdma_size, right?  (note  
<br>
that the name slightly changed for the upcoming 1.3 [i.e., the SVN  
<br>
trunk]; although the old name is deprecated, it'll still work)
<br>
<p><span class="quotelev1">&gt; When the hang happens, the ipath driver thinks all the posted
</span><br>
<span class="quotelev1">&gt; work requests and completion entries have been generated
</span><br>
<span class="quotelev1">&gt; and openmpi seems to think they haven't all completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone point me to the code where RDMA write is polled
</span><br>
<span class="quotelev1">&gt; on the destination node?
</span><br>
<p>All the OFA code in OMPI is in ompi/mca/btl/openib (i.e., the  
<br>
&quot;openib&quot; BTL plugin).
<br>
<p>The completion polling occurs in btl_openib_component.c, in two main  
<br>
functions: btl_openib_component_progress() and  
<br>
btl_openib_module_progress().  The component progress function mainly  
<br>
checks for eager RDMA progress; if there are none (per your setting  
<br>
use_eager_rdma to 0), it'll fall through to the module progress()  
<br>
function.  There's one module &quot;instance&quot; for each HCA port, so we  
<br>
basically loop over checking each module (port).
<br>
<p>Galen tells me that it may be a little more subtle than this, such as  
<br>
an ordering issue -- he's going to reply with more detail shortly.
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
<li><strong>Next message:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
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
