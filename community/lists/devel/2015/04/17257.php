<?
$subject_val = "Re: [OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 17:55:47 2015" -->
<!-- isoreceived="20150417215547" -->
<!-- sent="Fri, 17 Apr 2015 14:55:43 -0700" -->
<!-- isosent="20150417215543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interaction with slurm 14.11" -->
<!-- id="0F531B02-8093-443D-A2BB-3D5402E84575_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14Scqyj_kMDBBRyv_KLAOOBrdOzaPRxmF8z2x-t+QYaWw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-17 17:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17256.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 17, 2015, at 1:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think David's concern is that because Slurm has changed their default behavior, Open MPI's default behavior has changed as well.
</span><br>
<span class="quotelev1">&gt; The request (on which I have no opinion) appears to be that ORTE make an explicit request for the behavior that was the previous default in Slurm.
</span><br>
<span class="quotelev1">&gt; That would ensure that the behavior of Open MPI remains independent of the Slurm version.
</span><br>
<p>Understood. However, my comment stands. Open MPI&#146;s behavior has not changed at all - Slurm&#146;s has. I&#146;m willing to give them their due that they made this decision for a valid reason, and I suspect communicated it in their NEWS in the release. I&#146;m not about to override their settings under the covers.
<br>
<p>As noted below and in the initial note, the users and sys admins can easily obtain the desired behavior by changing Slurm settings or using appropriate OMPI configure and/or cmd line options. I see no reason for making a change to the code.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem here appears to be that the new (--export=NONE) behavior means that $PATH and/or $LD_LIBRARY_PATH are not propagated, and thus orted could not be found.
</span><br>
<span class="quotelev1">&gt; I believe you can configure Open MPI with --enable-mpirun-prefix-by-default to resolve the reported &quot;orted: No such file or directory&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 17, 2015 at 1:13 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm&#133;but what if a user -doesn&#146;t- want their environment forwarded? Seems presumptuous of us to arbitrarily decide to do so on their behalf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 16, 2015, at 7:42 PM, David Singleton &lt;david.b.singleton_at_[hidden] &lt;mailto:david.b.singleton_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our site effectively runs all slurm jobs with sbatch --export=NONE ...  and creates the necessary environment inside the batch script.  After upgading to 14.11,  OpenMPI mpirun jobs hit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-04-15T08:53:54+08:00 nod0138 slurmstepd[3122]: error: execve(): orted: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue appears to be that, as of 14.11, srun now recognizes --export=NONE and, more importantly, the SLURM_EXPORT_ENV=NONE set in the jobs environment if you submit with sbatch --export=NONE .   The simple workaround is to unset SLURM_EXPORT_ENV before mpirun.  Possibly mpirun should add --export=ALL to its srun commands.
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17236.php">http://www.open-mpi.org/community/lists/devel/2015/04/17236.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17236.php">http://www.open-mpi.org/community/lists/devel/2015/04/17236.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17252.php">http://www.open-mpi.org/community/lists/devel/2015/04/17252.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17252.php">http://www.open-mpi.org/community/lists/devel/2015/04/17252.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17255.php">http://www.open-mpi.org/community/lists/devel/2015/04/17255.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17256.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
