<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 11:50:01 2010" -->
<!-- isoreceived="20100816155001" -->
<!-- sent="Mon, 16 Aug 2010 08:51:22 -0700" -->
<!-- isosent="20100816155122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="FD352AAC-85D6-419E-8F94-F71AE4766051_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281729190.22705.12.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 11:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2010, at 12:53 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; I'm using mpirun and the nodes are all on the same machin (a 8 cpu box
</span><br>
<span class="quotelev1">&gt; with an intel i7).  coresize is unlimited:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) unlimited
</span><br>
<p>That looks good.
<br>
<p>In reviewing the email thread, it's not entirely clear: are you calling abort() or MPI_Abort()?  MPI_Abort() won't drop a core file.  abort() should.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="14036.php">Eugene Loh: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
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
