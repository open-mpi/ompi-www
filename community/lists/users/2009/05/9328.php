<?
$subject_val = "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 14:35:58 2009" -->
<!-- isoreceived="20090513183558" -->
<!-- sent="Wed, 13 May 2009 14:35:52 -0400" -->
<!-- isosent="20090513183552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
<!-- id="37D2B1F8-CF02-4A9E-85B6-D5821EA80566_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="903609.89630.qm_at_web58204.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 14:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9329.php">Åke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Previous message:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2009, at 2:33 PM, Le Duy Khanh wrote:
<br>
<p><span class="quotelev1">&gt; Wow, that's great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You mean that PMPI_* is totally/functionally similar to MPI_*,  
</span><br>
<span class="quotelev1">&gt; right ?
</span><br>
<p>They are actually aliases of each other in Open MPI.  See the  
<br>
profiling chapter in the MPI spec; it's intended that you can  
<br>
intercept the MPI_* calls and then call the &quot;real&quot; functions by  
<br>
invoking their PMPI_* counterparts to effect the real functionality.
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
<li><strong>Next message:</strong> <a href="9329.php">Åke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Previous message:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9327.php">Le Duy Khanh: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
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
