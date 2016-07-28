<?
$subject_val = "Re: [OMPI users] intermittent node file error running with torque/maui integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 13:39:31 2013" -->
<!-- isoreceived="20130920173931" -->
<!-- sent="Fri, 20 Sep 2013 13:39:29 -0400" -->
<!-- isosent="20130920173929" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent node file error running with torque/maui integration" -->
<!-- id="523C8851.4030309_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1447BBC7-E459-44FA-AC2F-A93EC6D6CA41_at_nrl.navy.mil" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 13:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/20/2013 12:48 PM, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2013, at 11:52 AM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Noam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could it be that Torque, or probably more likely NFS,
</span><br>
<span class="quotelev2">&gt;&gt; is too slow to create/make available the PBS_NODEFILE?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if you insert a &quot;sleep 2&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; or whatever number of seconds you want,
</span><br>
<span class="quotelev2">&gt;&gt; before the mpiexec command line?
</span><br>
<span class="quotelev2">&gt;&gt; Or maybe better, a &quot;ls -l $PBS_NODEFILE; cat $PBS_NODEFILE&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; just to make sure the file it is available and
</span><br>
<span class="quotelev2">&gt;&gt; filled with the node list, before mpiexec takes over?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how NFS could be involved, since it's on a local filesystem.
</span><br>
<span class="quotelev1">&gt; As for adding a sleep, I already tried that - if the file doesn't exist, I sleep a few
</span><br>
<span class="quotelev1">&gt; seconds and check again, and in every case if it's not there to begin with it's not
</span><br>
<span class="quotelev1">&gt; there the second time either.  And this all doesn't explain the very
</span><br>
<span class="quotelev1">&gt; mysterious even more infrequent situation where I can cat the file, but
</span><br>
<span class="quotelev1">&gt; mpirun can't find it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Noam
<br>
<p>I only read the full email exchange after I sent my message.
<br>
Now I read it is not over NFS but local.
<br>
Still a communication delay (which can be non-deterministic)
<br>
between pbs_server and the local pbs_mom on the node could be
<br>
behind the problem (say, if the server authorizes the
<br>
node to start the job first, then second it copies over the
<br>
node file over, which may take some time,
<br>
depending on the network traffic).
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>In reply to:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
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
