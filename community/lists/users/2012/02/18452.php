<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 06:14:03 2012" -->
<!-- isoreceived="20120214111403" -->
<!-- sent="Tue, 14 Feb 2012 06:13:58 -0500" -->
<!-- isosent="20120214111358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="1B3317FC-DE2B-4761-9A89-93C589657291_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F391DA1.2297.5DC1FE48_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 06:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18451.php">Jeff Squyres: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2012, at 2:26 PM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I tried to run the same test of ring_c from standard examples in 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.4.3 distribution. If I ran as you described from the 
</span><br>
<span class="quotelev1">&gt; command line, it worked without any problem with sm btl 
</span><br>
<span class="quotelev1">&gt; included(with --mca btl self,sm,openib). However, if I use sm 
</span><br>
<span class="quotelev1">&gt; btl(with --mca btl self,sm,openib), and ran ring_c from an in-house 
</span><br>
<span class="quotelev1">&gt; script, it showed the same issue as I described in my previous 
</span><br>
<span class="quotelev1">&gt; email, it will hang at MPI_Init(...) call. I think this issue is related to 
</span><br>
<span class="quotelev1">&gt; some environmental setting in the script. Do you have any hints, 
</span><br>
<span class="quotelev1">&gt; any prerequisite of system environmental configuration to work with 
</span><br>
<span class="quotelev1">&gt; sm btl layer in Open MPI?
</span><br>
<p>There actually aren't too many tunables in the sm BTL itself.
<br>
<p>Can you share the script that you're using to launch Open MPI?
<br>
<p>If not, can you share the output of &quot;env | grep OMPI&quot; from your script, perhaps on the line before you launch mpirun?
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
<li><strong>Next message:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18451.php">Jeff Squyres: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
