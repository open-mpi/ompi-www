<?
$subject_val = "Re: [OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 18:54:36 2015" -->
<!-- isoreceived="20150417225436" -->
<!-- sent="Sat, 18 Apr 2015 08:54:35 +1000" -->
<!-- isosent="20150417225435" -->
<!-- name="David Singleton" -->
<!-- email="david.b.singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interaction with slurm 14.11" -->
<!-- id="CAFNyhX=0R=bR4qaR2pmCOTVQ_FvnZknQsTBh1AJy4xaVJLimgQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> David Singleton (<em>david.b.singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 18:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Apr 18, 2015 at 6:27 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem here appears to be that the new (--export=NONE) behavior means
</span><br>
<span class="quotelev1">&gt; that $PATH and/or $LD_LIBRARY_PATH are not propagated, and thus orted could
</span><br>
<span class="quotelev1">&gt; not be found.
</span><br>
<span class="quotelev1">&gt; I believe you can configure Open MPI with
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default to resolve the reported &quot;orted: No such
</span><br>
<span class="quotelev1">&gt; file or directory&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It looks like --prefix, --enable-mpirun-prefix-by-default and fullpath
<br>
mpirun are all handled the same way - they just add to PATH and
<br>
LD_LIBRARY_PATH.  But since they are not propagated, this doesn't help.
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
