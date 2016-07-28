<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 12:13:14 2009" -->
<!-- isoreceived="20090330161314" -->
<!-- sent="Mon, 30 Mar 2009 12:12:31 -0400" -->
<!-- isosent="20090330161231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="EFEF2B06-E3D0-455D-BB5B-8CF164D52379_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0903300843q13a8710bpaad76367e1d0a8b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Generic Type<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 12:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2009, at 11:43 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev1">&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev1">&gt; elements, like MPI_INT or MPI_DOUBLE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What datatype argument are you giving to MPI_GATHER -- MPI_BYTE?
<br>
<p><span class="quotelev1">&gt; I've noted that i can retrieve
</span><br>
<span class="quotelev1">&gt; this information by ompi_datatype_t-&gt; name field, but i think isn't
</span><br>
<span class="quotelev1">&gt; portable. Is there aMPI function that does this check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You're correct that ompi_datatype_t-&gt;name is an internal field; it's  
<br>
not part of the public MPI API.
<br>
<p>MPI will likely only be able to report back to you the datatype that  
<br>
you specified in the call to MPI_GATHER.
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
<li><strong>Next message:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
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
