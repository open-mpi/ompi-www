<?
$subject_val = "Re: [OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 16:27:22 2015" -->
<!-- isoreceived="20150417202722" -->
<!-- sent="Fri, 17 Apr 2015 13:27:16 -0700" -->
<!-- isosent="20150417202716" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interaction with slurm 14.11" -->
<!-- id="CAAvDA14Scqyj_kMDBBRyv_KLAOOBrdOzaPRxmF8z2x-t+QYaWw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD5C5D6D-99CC-4AA6-9A93-672FCB45C81F_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 16:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17256.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17254.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I think David's concern is that because Slurm has changed their default
<br>
behavior, Open MPI's default behavior has changed as well.
<br>
The request (on which I have no opinion) appears to be that ORTE make an
<br>
explicit request for the behavior that was the previous default in Slurm.
<br>
That would ensure that the behavior of Open MPI remains independent of the
<br>
Slurm version.
<br>
<p>David,
<br>
<p>The problem here appears to be that the new (--export=NONE) behavior means
<br>
that $PATH and/or $LD_LIBRARY_PATH are not propagated, and thus orted could
<br>
not be found.
<br>
I believe you can configure Open MPI with --enable-mpirun-prefix-by-default
<br>
to resolve the reported &quot;orted: No such file or directory&quot;
<br>
<p>-Paul
<br>
<p>On Fri, Apr 17, 2015 at 1:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...but what if a user -doesn't- want their environment forwarded? Seems
</span><br>
<span class="quotelev1">&gt; presumptuous of us to arbitrarily decide to do so on their behalf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 16, 2015, at 7:42 PM, David Singleton &lt;
</span><br>
<span class="quotelev1">&gt; david.b.singleton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our site effectively runs all slurm jobs with sbatch --export=NONE ...
</span><br>
<span class="quotelev1">&gt; and creates the necessary environment inside the batch script.  After
</span><br>
<span class="quotelev1">&gt; upgading to 14.11,  OpenMPI mpirun jobs hit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-04-15T08:53:54+08:00 nod0138 slurmstepd[3122]: error: execve():
</span><br>
<span class="quotelev1">&gt; orted: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue appears to be that, as of 14.11, srun now recognizes
</span><br>
<span class="quotelev1">&gt; --export=NONE and, more importantly, the SLURM_EXPORT_ENV=NONE set in the
</span><br>
<span class="quotelev1">&gt; jobs environment if you submit with sbatch --export=NONE .   The simple
</span><br>
<span class="quotelev1">&gt; workaround is to unset SLURM_EXPORT_ENV before mpirun.  Possibly mpirun
</span><br>
<span class="quotelev1">&gt; should add --export=ALL to its srun commands.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17236.php">http://www.open-mpi.org/community/lists/devel/2015/04/17236.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17252.php">http://www.open-mpi.org/community/lists/devel/2015/04/17252.php</a>
</span><br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17256.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17254.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
