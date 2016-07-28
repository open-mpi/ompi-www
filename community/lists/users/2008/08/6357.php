<?
$subject_val = "Re: [OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 05:53:37 2008" -->
<!-- isoreceived="20080816095337" -->
<!-- sent="Sat, 16 Aug 2008 11:53:32 +0200 (CEST)" -->
<!-- isosent="20080816095332" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with alltoall with ppn=8" -->
<!-- id="Pine.LNX.4.63.0808161143520.24965_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC86E164E4091C4D88A62DADB4AC6479014CA6AE_at_exchange06.fed.cclrc.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 05:53:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>Previous message:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
<li><strong>In reply to:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 15 Aug 2008, Kozin, I \(Igor\) wrote:
<br>
<p><span class="quotelev1">&gt; Hello, I would really appreciate any advice on troubleshooting/tuning 
</span><br>
<span class="quotelev1">&gt; Open MPI over ConnectX. More details about our setup can be found here 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52">http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52</a> 
</span><br>
<span class="quotelev1">&gt; Single process per node (ppn=1) seems to be fine (the results for IMB 
</span><br>
<span class="quotelev1">&gt; can be found here 
</span><br>
<p>This behaviour happens on all Mellanox devices. I have been in contact 
<br>
with them to in get more information about it, but never got a convincing 
<br>
answer. According to Mellanox it happened because my Infinihost III Lx was 
<br>
not designed for a system with 8 cores in total, it should not happen with 
<br>
Infinihost III Ex or ConnectX.
<br>
<p>As you noticed, it also happens with ConnectX, and I can confirm it also 
<br>
happens on systems with only 4 cores total. However, the problem is less 
<br>
severe with ConnectX than with Infinihost III.
<br>
<p>The solution for me has been to sell QLogic rather than Mellanox to 
<br>
customers who need good AllToAll.
<br>
<p>Dani&#235;l
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>Previous message:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
<li><strong>In reply to:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
