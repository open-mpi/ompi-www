<?
$subject_val = "Re: [OMPI users] intermittent node file error running with torque/maui integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 12:48:52 2013" -->
<!-- isoreceived="20130920164852" -->
<!-- sent="Fri, 20 Sep 2013 12:48:50 -0400" -->
<!-- isosent="20130920164850" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent node file error running with torque/maui integration" -->
<!-- id="1447BBC7-E459-44FA-AC2F-A93EC6D6CA41_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="523C6F2B.60401_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent node file error running with torque/maui integration<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 12:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2013, at 11:52 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Noam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could it be that Torque, or probably more likely NFS,
</span><br>
<span class="quotelev1">&gt; is too slow to create/make available the PBS_NODEFILE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What if you insert a &quot;sleep 2&quot;,
</span><br>
<span class="quotelev1">&gt; or whatever number of seconds you want,
</span><br>
<span class="quotelev1">&gt; before the mpiexec command line?
</span><br>
<span class="quotelev1">&gt; Or maybe better, a &quot;ls -l $PBS_NODEFILE; cat $PBS_NODEFILE&quot;,
</span><br>
<span class="quotelev1">&gt; just to make sure the file it is available and
</span><br>
<span class="quotelev1">&gt; filled with the node list, before mpiexec takes over?
</span><br>
<p>I don't see how NFS could be involved, since it's on a local filesystem.
<br>
As for adding a sleep, I already tried that - if the file doesn't exist, I sleep a few 
<br>
seconds and check again, and in every case if it's not there to begin with it's not
<br>
there the second time either.  And this all doesn't explain the very
<br>
mysterious even more infrequent situation where I can cat the file, but
<br>
mpirun can't find it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
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
