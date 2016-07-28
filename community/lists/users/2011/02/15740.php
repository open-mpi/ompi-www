<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 16:08:11 2011" -->
<!-- isoreceived="20110224210811" -->
<!-- sent="Thu, 24 Feb 2011 16:08:06 -0500" -->
<!-- isosent="20110224210806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="CD68BB64-A4D0-4E40-87F7-11391BDB76D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF06E515B6586_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 16:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15741.php">George Bosilca: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15738.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2011, at 2:59 PM, Henderson, Brent wrote:
<br>
<p><span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; They really can't be all SLURM_PROCID=0 - that is supposed to be unique for the job - right?  It appears that the SLURM_PROCID is inherited from the orted parent - which makes a fair amount of sense given how things are launched.  
</span><br>
<p>That's correct, and I can agree with your sentiment.  
<br>
<p>However, our design goals were to provide a consistent *Open MPI* experience across different launchers. Providing native access to the actual underlying launcher was a secondary goal.  Balancing those two, you can see why we chose the model we did: our orted provides  (nearly) the same functionality across all environments.  
<br>
<p>In SLURM's case, we propagate a [seemingly] non-sensical SLURM_PROCID values to the individual processes, but only if you are making an assumption about how Open MPI is using SLURM's launcher.
<br>
<p>More specifically, our goal is to provide consistent *Open MPI information* (e.g., through the OMPI_COMM_WORLD* env variables) -- not emulate what SLURM would have done if MPI processes had been launched individually through srun.  Even more specifically: we don't think that the exact underlying launching mechanism that OMPI uses is of interest to most users; we encourage them to use our portable mechanisms that work even if they move to another cluster with a different launcher.  Admittedly, that does make it a little more challenging if you have to support multiple MPI implementations, and although that's an important consideration to us, it's not our first priority.
<br>
<p><span class="quotelev1">&gt; Now to answer the other question - why are there some variables missing.  It appears that when the orted processes are launched - via srun but only one per node, it is a subset of the main allocation and thus some of the environment variables are not the same (or missing entirely) as compared to launching them directly with srun on the full allocation.  This also makes sense to me at some level, so I'm at peace with it now.  :)
</span><br>
<p>Ah, good.
<br>
<p><span class="quotelev1">&gt; Last thing before I go.  Please let me apologize for not being clear on what I disagreed with Ralph about in my last note.  Clearly he nailed the orted launching process and spelled it out very clearly, but I don't believe that HP-MPI is not doing anything special to copy/fix up the SLURM environment variables.  Hopefully that was clear by the body of that message.  
</span><br>
<p>No worries; you were perfectly clear.  Thanks!
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
<li><strong>Next message:</strong> <a href="15741.php">George Bosilca: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15738.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
