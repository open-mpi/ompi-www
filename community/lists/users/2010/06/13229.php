<?
$subject_val = "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  5 07:53:00 2010" -->
<!-- isoreceived="20100605115300" -->
<!-- sent="Sat, 5 Jun 2010 07:52:40 -0400" -->
<!-- isosent="20100605115240" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to connect to a server using MX MTL with TCP" -->
<!-- id="3C7F9F32-1CC5-4415-8A5F-65CA34C777BF_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D96C3B9C12B4C4A9BD31761B4F824104610D906FF_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to connect to a server using MX MTL with TCP<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-05 07:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13230.php">lauren: "[OMPI users] Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>In reply to:</strong> <a href="13227.php">Audet, Martin: "[OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13285.php">Jeff Squyres: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13285.php">Jeff Squyres: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2010, at 7:18 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi OpenMPI_Users and OpenMPI_Developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unable to connect a client application using MPI_Comm_connect() to a server job (the server job calls MPI_Open_port() before calling by MPI_Comm_accept()) when the server job uses MX MTL (although it works without problems when the server uses MX BTL). The server job runs on a cluster connected to a Myrinet 10G network (MX 1.2.11) in addition to an ordinary Ethernet network. The client runs on a different machine, not connected to the Myrinet network but accessible via the Ethernet network.
</span><br>
<p>Hi Martin,
<br>
<p>I do not think this is a supported scenario. George or Jeff can correct me, but when you use the MX MTL you are using the pml cm and not the pml ob1. The BTLs are part of ob1. When using the MX MTL, it cannot use the TCP BTL.
<br>
<p>You only solution would be to use the MX BTL.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13230.php">lauren: "[OMPI users] Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>In reply to:</strong> <a href="13227.php">Audet, Martin: "[OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13285.php">Jeff Squyres: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13285.php">Jeff Squyres: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
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
