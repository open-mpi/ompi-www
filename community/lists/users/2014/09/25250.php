<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 15:01:33 2014" -->
<!-- isoreceived="20140903190133" -->
<!-- sent="Wed, 3 Sep 2014 12:01:05 -0700" -->
<!-- isosent="20140903190105" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="FC300E0B-D1BB-45B8-97D8-A8650D81B6E8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S8QpmaoVY3=Kr6hnoUrgfz7R=JVNMtivsOQ1C4sEmS2dQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 15:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25251.php">Nico Schlömer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Previous message:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25263.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Matt - that does indeed resolve the &quot;how&quot; question :-)
<br>
<p>We'll talk internally about how best to resolve the issue. We could, of course, add a flag to indicate &quot;we are using a shellscript version of srun&quot; so we know to quote things, but it would mean another thing that the user would have to do (as opposed to just running out-of-the-box).
<br>
<p>If we quote everything by default, then we have to modify our parser to strip the quotes when someone isn't using a script wrapper or else the system gets in trouble - but Jeff is concerned about us stripping things by default in case a user specifies an MCA param value that actually begins/ends with quotes. I'm not sure that's a valid use-case, but we'll debate it.
<br>
<p>Either way, we'll give you a solution.
<br>
Ralph
<br>
<p><p>On Sep 3, 2014, at 6:27 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep 2, 2014 at 8:38 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Matt: Random thought -- is your &quot;srun&quot; a shell script, perchance?  (it shouldn't be, but perhaps there's some kind of local override...?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph's point on the call today is that it doesn't matter *how* this problem is happening.  It *is* happening to real users, and so we need to account for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it really bothers me that we don't understand *how/why* this is happening (e.g., is this OMPI's fault somehow?  I don't think so, but then again, we don't understand how it's happening).  *Somewhere* in there, a shell is getting invoked.  But &quot;srun&quot; shouldn't be invoking a shell on the remote side -- it should be directly fork/exec'ing the tokens with no shell interpretation at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just saw this, sorry. Our srun is indeed a shell script. It seems to be a wrapper around the regular srun that runs a --task-prolog. What it does...that's beyond my ken, but I could ask. My guess is that it probably does something that helps keep our old PBS scripts running (sets $PBS_NODEFILE, say). We used to run PBS but switched to SLURM recently. The admins would, of course, prefer all future scripts be SLURM-native scripts, but there are a lot of production runs that uses many, many PBS scripts. Converting that would need slow, careful QC to make sure any &quot;pure SLURM&quot; versions act as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25248.php">http://www.open-mpi.org/community/lists/users/2014/09/25248.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25251.php">Nico Schlömer: "[OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<li><strong>Previous message:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25263.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
