<?
$subject_val = "Re: [OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 19:02:32 2015" -->
<!-- isoreceived="20150417230232" -->
<!-- sent="Fri, 17 Apr 2015 16:02:28 -0700" -->
<!-- isosent="20150417230228" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interaction with slurm 14.11" -->
<!-- id="ECD26945-313F-4662-9DAC-A3677AD33AC7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFNyhX=0R=bR4qaR2pmCOTVQ_FvnZknQsTBh1AJy4xaVJLimgQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-17 19:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17262.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 17, 2015, at 3:54 PM, David Singleton &lt;david.b.singleton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 18, 2015 at 6:27 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem here appears to be that the new (--export=NONE) behavior means that $PATH and/or $LD_LIBRARY_PATH are not propagated, and thus orted could not be found.
</span><br>
<span class="quotelev1">&gt; I believe you can configure Open MPI with --enable-mpirun-prefix-by-default to resolve the reported &quot;orted: No such file or directory&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like --prefix, --enable-mpirun-prefix-by-default and fullpath mpirun are all handled the same way - they just add to PATH and LD_LIBRARY_PATH.  But since they are not propagated, this doesn't help.
</span><br>
<p>This is correct - they only get propagated in rsh/ssh environments as we then have a method for doing so. We can&#226;&#128;&#153;t propagate them in Slurm - you either have to add the paths to your shell startup script, or ask Slurm to forward them for you.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17260.php">http://www.open-mpi.org/community/lists/devel/2015/04/17260.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17262.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17260.php">David Singleton: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
