<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 13:06:41 2010" -->
<!-- isoreceived="20100611170641" -->
<!-- sent="Fri, 11 Jun 2010 13:06:37 -0400" -->
<!-- isosent="20100611170637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="989BA22C-E6FC-4D33-9106-83C9DF0ACE80_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="377CA7C6-99F7-448E-9DA4-48CC6C98652A_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 13:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8103.php">Leo P.: "[OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
<li><strong>Previous message:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2010, at 12:53 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; The idea was one large memory segment for all processes and it wasn't unlinked after complete attach so that we could have spawned procs also use shmem (which never worked, of course).  So I think we could unlink during init at this point..
</span><br>
<p>I could have sworn that we decided that long ago and added the unlink.
<br>
<p>Probably we *did* reach that conclusion long ago, but never actually got around to adding the unlink.  Sam and I are still in that code area now; we might as well add the unlink while we're there.
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
<li><strong>Next message:</strong> <a href="8103.php">Leo P.: "[OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
<li><strong>Previous message:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
