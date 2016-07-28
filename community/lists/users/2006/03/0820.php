<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 07:15:03 2006" -->
<!-- isoreceived="20060310121503" -->
<!-- sent="Fri, 10 Mar 2006 13:13:17 +0100" -->
<!-- isosent="20060310121317" -->
<!-- name="Cezary Sliwa" -->
<!-- email="sliwa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]" -->
<!-- id="44116D5D.1080608_at_blue.cft.edu.pl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8C5AB196-B8B4-4510-B765-5A61FF8E87E9_at_open-mpi.org" -->
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
<strong>From:</strong> Cezary Sliwa (<em>sliwa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 07:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; One additional question: are you using TCP as your communications  
</span><br>
<span class="quotelev1">&gt; network, and if so, do either of the nodes that you are running on  
</span><br>
<span class="quotelev1">&gt; have more than one TCP NIC?  We recently fixed a bug for situations  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, precisely.
<br>
<span class="quotelev1">&gt; where at least one node in on multiple TCP networks, not all of which  
</span><br>
<span class="quotelev1">&gt; were shared by the nodes where the peer MPI processes were running.   
</span><br>
<span class="quotelev1">&gt; If this situation describes your network setup (e.g., a cluster where  
</span><br>
<span class="quotelev1">&gt; the head node has a public and a private network, and where the  
</span><br>
<span class="quotelev1">&gt; cluster nodes only have a private network -- and your MPI process was  
</span><br>
<span class="quotelev1">&gt; running on the head node and a compute node), can you try upgrading  
</span><br>
<span class="quotelev1">&gt; to the latest 1.0.2 release candidate tarball:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thank you, I will try.
<br>
<p>Cezary Sliwa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0826.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
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
