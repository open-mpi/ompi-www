<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 20:27:07 2011" -->
<!-- isoreceived="20110225012707" -->
<!-- sent="Thu, 24 Feb 2011 18:25:55 -0700" -->
<!-- isosent="20110225012555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="AANLkTimcj9QVx_T-54H-rzNydrKaLr8S76F9sSzF5wDZ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD68BB64-A4D0-4E40-87F7-11391BDB76D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM environment variables at runtime<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 20:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15741.php">George Bosilca: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15736.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I wasn't clear earlier - I don't know anything about how HP-MPI
<br>
works. I was only theorizing that perhaps they did something different that
<br>
results in some other slurm vars showing up in Brent's tests. From Brent's
<br>
comments, I guess they don't - but they launch jobs in a different manner
<br>
that results in some difference in the slurm envars seen by application
<br>
procs.
<br>
<p>I don't believe we have a bug in OMPI. What we have is behavior that
<br>
reflects how the proc is launched. If an app has integrated itself tightly
<br>
with slurm, then OMPI may not be a good choice - or they can try the
<br>
&quot;slurm-direct&quot; launch method in 1.5 and see if that meets their needs.
<br>
<p>There may be something going on with slurm 2.2.x - as I've said before,
<br>
slurm makes major changes in even minor releases, and trying to track them
<br>
is a nearly impossible task, especially as many of these features are
<br>
configuration dependent. What we have in OMPI is the level of slurm
<br>
integration required by the three DOE weapons labs as (a) they represent the
<br>
largest component of the very small slurm community, and (b) in the past,
<br>
they provided the majority of the slurm integration effort within ompi. It
<br>
works as they need it to, given the way they configure slurm (which may not
<br>
be how others do).
<br>
<p>I'm always willing to help other slurm users, but within the guidelines
<br>
expressed in an earlier thread - the result must be driven by the DOE
<br>
weapons lab's requirements, and cannot interfere with their usage models.
<br>
<p>As for slurm_procid - if an application is looking for it, it sounds like
<br>
that OMPI may not be a good choice for them. Under OMPI, slurm does not see
<br>
the application procs and has no idea they exist. Slurm's knowledge of an
<br>
OMPI job is limited solely to the daemons. This has tradeoffs, as most
<br>
design decisions do - in the case of the DOE labs, the tradeoffs were judged
<br>
favorable...at least, as far as LANL was concerned, and they were my boss
<br>
when I wrote the code :-) At LLNL's request, I did create the ability to run
<br>
jobs directly under srun - but as Jeff noted, with reduced capability.
<br>
<p>Hope that helps clarify what is in the code, and why. I'm not sure what
<br>
motivated the original question, but hopefully ompi's slurm support is a
<br>
little bit clearer?
<br>
<p>Ralph
<br>
<p><p><p><p>On Thu, Feb 24, 2011 at 2:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 24, 2011, at 2:59 PM, Henderson, Brent wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [snip]
</span><br>
<span class="quotelev2">&gt; &gt; They really can't be all SLURM_PROCID=0 - that is supposed to be unique
</span><br>
<span class="quotelev1">&gt; for the job - right?  It appears that the SLURM_PROCID is inherited from the
</span><br>
<span class="quotelev1">&gt; orted parent - which makes a fair amount of sense given how things are
</span><br>
<span class="quotelev1">&gt; launched.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's correct, and I can agree with your sentiment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, our design goals were to provide a consistent *Open MPI*
</span><br>
<span class="quotelev1">&gt; experience across different launchers. Providing native access to the actual
</span><br>
<span class="quotelev1">&gt; underlying launcher was a secondary goal.  Balancing those two, you can see
</span><br>
<span class="quotelev1">&gt; why we chose the model we did: our orted provides  (nearly) the same
</span><br>
<span class="quotelev1">&gt; functionality across all environments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In SLURM's case, we propagate a [seemingly] non-sensical SLURM_PROCID
</span><br>
<span class="quotelev1">&gt; values to the individual processes, but only if you are making an assumption
</span><br>
<span class="quotelev1">&gt; about how Open MPI is using SLURM's launcher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, our goal is to provide consistent *Open MPI information*
</span><br>
<span class="quotelev1">&gt; (e.g., through the OMPI_COMM_WORLD* env variables) -- not emulate what SLURM
</span><br>
<span class="quotelev1">&gt; would have done if MPI processes had been launched individually through
</span><br>
<span class="quotelev1">&gt; srun.  Even more specifically: we don't think that the exact underlying
</span><br>
<span class="quotelev1">&gt; launching mechanism that OMPI uses is of interest to most users; we
</span><br>
<span class="quotelev1">&gt; encourage them to use our portable mechanisms that work even if they move to
</span><br>
<span class="quotelev1">&gt; another cluster with a different launcher.  Admittedly, that does make it a
</span><br>
<span class="quotelev1">&gt; little more challenging if you have to support multiple MPI implementations,
</span><br>
<span class="quotelev1">&gt; and although that's an important consideration to us, it's not our first
</span><br>
<span class="quotelev1">&gt; priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now to answer the other question - why are there some variables missing.
</span><br>
<span class="quotelev1">&gt;  It appears that when the orted processes are launched - via srun but only
</span><br>
<span class="quotelev1">&gt; one per node, it is a subset of the main allocation and thus some of the
</span><br>
<span class="quotelev1">&gt; environment variables are not the same (or missing entirely) as compared to
</span><br>
<span class="quotelev1">&gt; launching them directly with srun on the full allocation.  This also makes
</span><br>
<span class="quotelev1">&gt; sense to me at some level, so I'm at peace with it now.  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Last thing before I go.  Please let me apologize for not being clear on
</span><br>
<span class="quotelev1">&gt; what I disagreed with Ralph about in my last note.  Clearly he nailed the
</span><br>
<span class="quotelev1">&gt; orted launching process and spelled it out very clearly, but I don't believe
</span><br>
<span class="quotelev1">&gt; that HP-MPI is not doing anything special to copy/fix up the SLURM
</span><br>
<span class="quotelev1">&gt; environment variables.  Hopefully that was clear by the body of that
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No worries; you were perfectly clear.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15743.php">Ole Widar Saastad: "[OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15741.php">George Bosilca: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15736.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
