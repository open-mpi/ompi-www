<?
$subject_val = "Re: [OMPI users] Multicast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:13:09 2008" -->
<!-- isoreceived="20081210151309" -->
<!-- sent="Wed, 10 Dec 2008 10:13:03 -0500" -->
<!-- isosent="20081210151303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multicast?" -->
<!-- id="7A1B5AD3-B6FA-44A8-8BB7-0A2F2F73B852_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCCE568D-AFE7-4BFC-9477-941880602433_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multicast?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2008, at 9:49 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Is OpenMPI using Multicast for things like MPI_Bcast() ?
</span><br>
<p>Not today.  There have been some experiments with it, but nothing yet.
<br>
<p><span class="quotelev1">&gt; Some simple tests of really old versions (1.0.2) showed binary tree  
</span><br>
<span class="quotelev1">&gt; type performance, while latter versions gave me the same run time no  
</span><br>
<span class="quotelev1">&gt; matter how many CPU's I used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus this lead me to believe that something like multicast is in  
</span><br>
<span class="quotelev1">&gt; use.  Is it?
</span><br>
<p><p>That's an interesting result.  It should depend on factors such as the  
<br>
number of MPI processes you use, the size of the message, the layout  
<br>
on the hosts/network, etc.
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
<li><strong>Next message:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
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
