<?
$subject_val = "Re: [OMPI users] 50% performance reduction due toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 19:29:18 2009" -->
<!-- isoreceived="20090623232918" -->
<!-- sent="Tue, 23 Jun 2009 19:29:11 -0400" -->
<!-- isosent="20090623232911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using Infiniband" -->
<!-- id="DD07F0F7-644C-495C-8A15-EA6193E5F8FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1245799549.5089.31.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using Infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 19:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You mentioned that you only have a binary for your executable.  Was it  
<br>
compiled / linked against v1.3.2?
<br>
<p>We did not introduce ABI compatibility until v1.3.2 -- if the  
<br>
executable was compiled/linked against any version prior to that, it's  
<br>
pure luck that it works with the 1.3.2 shared libraries at all.
<br>
<p><p>On Jun 23, 2009, at 7:25 PM, Jim Kress ORG wrote:
<br>
<p><span class="quotelev1">&gt; This is what I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_master ~]# ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt; [root_at_master ~]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-06-23 at 18:51 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; openib (OpenFabrics) plugin is installed
</span><br>
<span class="quotelev2">&gt; &gt; and at least marginally opera
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
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
