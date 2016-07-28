<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 12:56:35 2006" -->
<!-- isoreceived="20061031175635" -->
<!-- sent="Tue, 31 Oct 2006 10:56:28 -0700" -->
<!-- isosent="20061031175628" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [openib-general] psm.h not found" -->
<!-- id="45478E4C.8090909_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFC93A9F7C.A9C9E3B7-ON86257218.005F3B4F-86257218.005F7432_at_us.ibm.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 12:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/11/1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Gleb Natapov: "Re: [OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
&nbsp;
<br>
I have copied this to the Open MPI devel list as this is an Open MPI 
<br>
specific question.
<br>
The PSM MTL in Open MPI does not use the OpenIB verbs api at all. 
<br>
Instead it makes use of the PSM library from QLogic. If you are using 
<br>
the InfiniPath adapter you should be able to use PSM with Open MPI. I 
<br>
would point you toward QLogic support to obtain this library.
<br>
<p>Thanks,
<br>
<p>Galen M. Shipman
<br>
Los Alamos National Labs
<br>
<p><p>Mike Aho wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find psm.h which header file mtl_psm.h calls out in ompi v1.2 
</span><br>
<span class="quotelev1">&gt;  12372.  Any hints on where I would get that?  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Mike
</span><br>
<span class="quotelev1">&gt; Michael E. Aho
</span><br>
<span class="quotelev1">&gt; Roadrunner Communications Stack Interconnect Lead
</span><br>
<span class="quotelev1">&gt; MS:  45E/015-2 (Office D116)
</span><br>
<span class="quotelev1">&gt; Rochester, MN   55901-7829
</span><br>
<span class="quotelev1">&gt; Phone (507) 253-6222, TL 553-6222
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;openib-general mailing list
</span><br>
<span class="quotelev1">&gt;openib-general_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/11/1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Gleb Natapov: "Re: [OMPI devel] MCA_BTL_DES_FLAGS_PRIORITY  usage"</a>
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
