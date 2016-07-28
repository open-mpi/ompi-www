<?
$subject_val = "Re: [OMPI users] Open MPI dynamic data structure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 17:51:20 2010" -->
<!-- isoreceived="20101020215120" -->
<!-- sent="Wed, 20 Oct 2010 17:46:42 -0400" -->
<!-- isosent="20101020214642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI dynamic data structure error" -->
<!-- id="01110777-1283-4D88-AA94-23F238E89024_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w4617C2DC29C6B6C6EEB7C1CB5B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI dynamic data structure error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 17:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you want to use the STL with MPI, your best bet is the boost.mpi library.
<br>
<p><p><p>On Oct 19, 2010, at 4:40 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to design a data structure to transfer data between nodes on Open MPI system. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some elements of the the structure has dynamic size. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef struct{
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; double data1;
</span><br>
<span class="quotelev1">&gt; vector&lt;double&gt; dataVec; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; } myDataType;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The size of the dataVec depends on some intermidiate computing results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I only declear it as the above myDataType, I think, only a pointer is transfered. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the data receiver try to access the elements of vector&lt;double&gt; dataVec, it got 
</span><br>
<span class="quotelev1">&gt; segmentation fault error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I also need to use the myDataType to declear other data structures. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; such as vector&lt;myDataType&gt; newDataVec;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot declear myDataType in a function , sucjh as main(), I got errors: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; main.cpp:200: error: main(int, char**)::myDataType; uses local type main(int, char**)::myDataType;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oct. 19 2010
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14499.php">Jack Bryan: "[OMPI users] Open MPI dynamic data structure error"</a>
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
