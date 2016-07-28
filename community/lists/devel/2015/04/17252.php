<?
$subject_val = "Re: [OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 16:13:53 2015" -->
<!-- isoreceived="20150417201353" -->
<!-- sent="Fri, 17 Apr 2015 13:13:49 -0700" -->
<!-- isosent="20150417201349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interaction with slurm 14.11" -->
<!-- id="AD5C5D6D-99CC-4AA6-9A93-672FCB45C81F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFNyhXkBmuzpiCHjY5GLfTu2CfBYNmcayBQ8MY0uEyRjNgbWTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] interaction with slurm 14.11<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 16:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17251.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17236.php">David Singleton: "[OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;but what if a user -doesn&#226;&#128;&#153;t- want their environment forwarded? Seems presumptuous of us to arbitrarily decide to do so on their behalf.
<br>
<p><p><span class="quotelev1">&gt; On Apr 16, 2015, at 7:42 PM, David Singleton &lt;david.b.singleton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our site effectively runs all slurm jobs with sbatch --export=NONE ...  and creates the necessary environment inside the batch script.  After upgading to 14.11,  OpenMPI mpirun jobs hit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-04-15T08:53:54+08:00 nod0138 slurmstepd[3122]: error: execve(): orted: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue appears to be that, as of 14.11, srun now recognizes --export=NONE and, more importantly, the SLURM_EXPORT_ENV=NONE set in the jobs environment if you submit with sbatch --export=NONE .   The simple workaround is to unset SLURM_EXPORT_ENV before mpirun.  Possibly mpirun should add --export=ALL to its srun commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17236.php">http://www.open-mpi.org/community/lists/devel/2015/04/17236.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17251.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17236.php">David Singleton: "[OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
