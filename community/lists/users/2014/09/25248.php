<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 09:27:24 2014" -->
<!-- isoreceived="20140903132724" -->
<!-- sent="Wed, 3 Sep 2014 09:27:03 -0400" -->
<!-- isosent="20140903132703" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="CAFb48S8QpmaoVY3=Kr6hnoUrgfz7R=JVNMtivsOQ1C4sEmS2dQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4ECBF12E-BFE3-48B6-97F8-02BFA790C04C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 09:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25247.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25263.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 2, 2014 at 8:38 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Matt: Random thought -- is your &quot;srun&quot; a shell script, perchance?  (it
</span><br>
<span class="quotelev1">&gt; shouldn't be, but perhaps there's some kind of local override...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph's point on the call today is that it doesn't matter *how* this
</span><br>
<span class="quotelev1">&gt; problem is happening.  It *is* happening to real users, and so we need to
</span><br>
<span class="quotelev1">&gt; account for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it really bothers me that we don't understand *how/why* this is
</span><br>
<span class="quotelev1">&gt; happening (e.g., is this OMPI's fault somehow?  I don't think so, but then
</span><br>
<span class="quotelev1">&gt; again, we don't understand how it's happening).  *Somewhere* in there, a
</span><br>
<span class="quotelev1">&gt; shell is getting invoked.  But &quot;srun&quot; shouldn't be invoking a shell on the
</span><br>
<span class="quotelev1">&gt; remote side -- it should be directly fork/exec'ing the tokens with no shell
</span><br>
<span class="quotelev1">&gt; interpretation at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff,
<br>
<p>Just saw this, sorry. Our srun is indeed a shell script. It seems to be a
<br>
wrapper around the regular srun that runs a --task-prolog. What it
<br>
does...that's beyond my ken, but I could ask. My guess is that it probably
<br>
does something that helps keep our old PBS scripts running (sets
<br>
$PBS_NODEFILE, say). We used to run PBS but switched to SLURM recently. The
<br>
admins would, of course, prefer all future scripts be SLURM-native scripts,
<br>
but there are a lot of production runs that uses many, many PBS scripts.
<br>
Converting that would need slow, careful QC to make sure any &quot;pure SLURM&quot;
<br>
versions act as expected.
<br>
<p>Matt
<br>
<p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25247.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25235.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25250.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25263.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
