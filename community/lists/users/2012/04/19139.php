<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 13:00:26 2012" -->
<!-- isoreceived="20120425170026" -->
<!-- sent="Wed, 25 Apr 2012 13:00:21 -0400" -->
<!-- isosent="20120425170021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="1D6E1376-A961-4E17-BC34-704A87D263AD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EE82019-C058-45F6-9DD7-EF40EBB65911_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 13:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19140.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 12:51 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sounds rather bizarre. Do you have lstopo on your machine? Might be useful to see the output of that so we can understand what it thinks the topology is like as this underpins the binding code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The -nooversubscribe option is a red herring here - it has nothing to do with the problem, nor will it help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: if you aren't adding --bind-to-core, then OMPI isn't launching your process on any specific core at all - we are simply launching it on the node. It sounds to me like your code is incorrectly identifying &quot;sharing&quot; when a process isn't bound to a specific core.
</span><br>
<p>+1
<br>
<p>Put differently: if you're not binding your processes to processor cores, then it's quite likely/possible that multiple processes *are* running on the same processor cores, at least intermittently, because the OS is allowed to migrate processes to whatever processor cores it wants to.
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
<li><strong>Next message:</strong> <a href="19140.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
