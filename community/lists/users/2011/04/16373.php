<?
$subject_val = "Re: [OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:49:10 2011" -->
<!-- isoreceived="20110428124910" -->
<!-- sent="Thu, 28 Apr 2011 08:49:05 -0400" -->
<!-- isosent="20110428124905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="33AB5DBB-8261-47DB-81EF-C985A3A6979E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A623D3A-242F-4D8E-B5BD-9F9B38178AC9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI out of band TCP retry exceeded<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 08:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16374.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2011, at 8:45 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What lead you to conclude 1.2.8?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
</span><br>
<p>His command line has &quot;1.2.8&quot; in it.
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
<li><strong>Next message:</strong> <a href="16374.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16376.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
