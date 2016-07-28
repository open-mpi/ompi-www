<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 10:13:51 2016" -->
<!-- isoreceived="20160419141351" -->
<!-- sent="Tue, 19 Apr 2016 14:13:48 +0000" -->
<!-- isosent="20160419141348" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="CBF34FD3-13C5-44AE-B855-DB5222747895_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="37142D5FC373A846ACE4F75AA11EA84D4C9FC18F_at_DITKA.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 10:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="28939.php">Dorier, Matthieu: "[OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2016, at 9:18 AM, Dorier, Matthieu &lt;mdorier_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to know how OpenMPI implements MPI_Bcast. And if different implementations are provided, how one is selected.
</span><br>
<p>This is a fairly complicated topic.  This old paper is the foundation for how Open MPI works (it's a bit different these days, but the basic concepts described in this paper are still mostly relevant):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/papers/ics-2004/">https://www.open-mpi.org/papers/ics-2004/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="28939.php">Dorier, Matthieu: "[OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
