<?
$subject_val = "Re: [OMPI devel] configure fails on the trunk since r31390";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 04:34:18 2014" -->
<!-- isoreceived="20140415083418" -->
<!-- sent="Tue, 15 Apr 2014 11:34:16 +0300" -->
<!-- isosent="20140415083416" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure fails on the trunk since r31390" -->
<!-- id="CAAO1KybuX+rYoB-DWE1LTHP-6fdv__A4Yvt2CisSNEro3UWwVg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1A9644B-70D8-4491-8470-1A85EADCB431_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure fails on the trunk since r31390<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 04:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>In reply to:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fixed in r31392
<br>
sorry about that.
<br>
<p><p>On Tue, Apr 15, 2014 at 8:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There really isn't any need to open tickets when things like this happen.
</span><br>
<span class="quotelev1">&gt; A simple note to devel is usually considered adequate. The problem will
</span><br>
<span class="quotelev1">&gt; either be repaired by the responsible organization when they return to
</span><br>
<span class="quotelev1">&gt; work, or we will revert the offending commit if the fix is going to take
</span><br>
<span class="quotelev1">&gt; awhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The best solution in most cases is to simply roll your local repo back to
</span><br>
<span class="quotelev1">&gt; a point before the offending commit until it gets fixed. These things
</span><br>
<span class="quotelev1">&gt; happen, though not frequently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 8:03 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as reported in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4521">https://svn.open-mpi.org/trac/ompi/ticket/4521</a>, configure
</span><br>
<span class="quotelev1">&gt; fails on the trunk :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since r31390 &lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt;,
</span><br>
<span class="quotelev1">&gt; configure fails on the trunk because oshmem/include/pshmem.h.in in
</span><br>
<span class="quotelev1">&gt; missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i believe r31390 &lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt;should have moved the profiling api from oshmem/include/
</span><br>
<span class="quotelev1">&gt; shmem.h.in into oshmem/include/pshmem.h.in. instead, r31390&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/31390">https://svn.open-mpi.org/trac/ompi/changeset/31390</a>&gt;simply removed all the profiling api and did not include oshmem/include/
</span><br>
<span class="quotelev1">&gt; pshmem.h.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am now trying to rebuild oshmem/include/pshmem.h.in in order to get
</span><br>
<span class="quotelev1">&gt; things work again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14525.php">http://www.open-mpi.org/community/lists/devel/2014/04/14525.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14526.php">http://www.open-mpi.org/community/lists/devel/2014/04/14526.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>In reply to:</strong> <a href="14526.php">Ralph Castain: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
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
