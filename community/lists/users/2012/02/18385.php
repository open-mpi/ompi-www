<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 07:33:51 2012" -->
<!-- isoreceived="20120203123351" -->
<!-- sent="Fri, 3 Feb 2012 07:33:46 -0500" -->
<!-- isosent="20120203123346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="1562ECF9-799B-42EF-B3E7-4CD60E73FEF3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1328268487.27121.YahooMailNeo_at_web161703.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 07:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18386.php">James Torossian: "[OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2012, at 6:28 AM, adrian sabou wrote:
<br>
<p><span class="quotelev1">&gt; You were right about iptables being very complex. It seems that uninstalling it completly did the trick. All my Send / Receive operations now complete as they should. Just one more question. Will uninstalling iptables have any undesired effects on my Linux cluster?
</span><br>
<p>It means you have no firewalling on your cluster.  This is basically a local policy decision on your part.  I know Linux admins who swear by iptables and would never run without it.  I know other Linux admins who think it's completely unnecessary (and can be replaced with things like appropriate ssh host controls, NAT, switch-level policies, etc.).  
<br>
<p>You should probably read more about firewalls and security and make a local decision for yourself.
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
<li><strong>Next message:</strong> <a href="18386.php">James Torossian: "[OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
