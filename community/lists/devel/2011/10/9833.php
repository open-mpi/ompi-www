<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 06:23:44 2011" -->
<!-- isoreceived="20111018102344" -->
<!-- sent="Tue, 18 Oct 2011 06:23:39 -0400" -->
<!-- isosent="20111018102339" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build" -->
<!-- id="5D3F4EDB-EA2D-44B0-AB0A-1A6ACDA7749D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="039.59bf18646027c72e6f7f78e25e4552f4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-18 06:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Previous message:</strong> <a href="9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Maybe reply:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Reply:</strong> <a href="9835.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry -
<br>
<p>Did #2887 fix this already?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Oct 18, 2011, at 6:19 AM, &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; #2888: base.h inclusion breaks Solaris build
</span><br>
<span class="quotelev1">&gt; --------------------+----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  tdd      |      Owner:  tdd
</span><br>
<span class="quotelev1">&gt;    Type:  defect   |     Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  blocker  |  Milestone:  Open MPI 1.5.5
</span><br>
<span class="quotelev1">&gt; Version:  trunk    |   Keywords:
</span><br>
<span class="quotelev1">&gt; --------------------+----------------------------
</span><br>
<span class="quotelev1">&gt; #2887 breaks the Solaris build because opal/sys/timer.h and
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/base/base.h cause a redeclaration error for opal_timer_t.
</span><br>
<span class="quotelev1">&gt; This is a similar issue we saw with r25157 that r25170 fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2888">https://svn.open-mpi.org/trac/ompi/ticket/2888</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Previous message:</strong> <a href="9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Maybe reply:</strong> <a href="9834.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>Reply:</strong> <a href="9835.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
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
