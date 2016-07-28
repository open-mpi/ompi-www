<?
$subject_val = "Re: [OMPI devel] Open MPI session directory location";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 10:40:33 2008" -->
<!-- isoreceived="20080527144033" -->
<!-- sent="Tue, 27 May 2008 08:40:06 -0600" -->
<!-- isosent="20080527144006" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI session directory location" -->
<!-- id="C4617966.D8D5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C46177A6.D8D0%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI session directory location<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 10:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">Jeff Squyres: "Re: [OMPI devel] Does Open MPI class exist?"</a>
<li><strong>Previous message:</strong> <a href="4038.php">Gleb Natapov: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>In reply to:</strong> <a href="4037.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Jeff Squyres: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Reply:</strong> <a href="4045.php">Jeff Squyres: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem (I think). A recent change was made to ompi_info so it no
<br>
longer calls orte_init. As a result, none of the ORTE-level params (i.e.,
<br>
those params registered outside of ORTE frameworks) are being reported.
<br>
<p>I'll chat with Jeff and see how we resolve the problem.
<br>
<p><p>On 5/27/08 8:32 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It &quot;should&quot; be visible now....not sure why it isn't. It conforms to the
</span><br>
<span class="quotelev1">&gt; naming rules and -used- to be reported by ompi_info...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/27/08 8:31 AM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make that &quot;ompi_info&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We need to make that visible via orte_info.
</span><br>
<span class="quotelev2">&gt;&gt; I thought this was done at some point, perhaps it got overwritten?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2008, at 10:27 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca orte_tmpdir_base foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/27/08 8:24 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Is there a way to change where Open MPI creates session
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't find mca parameter that specifies this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">Jeff Squyres: "Re: [OMPI devel] Does Open MPI class exist?"</a>
<li><strong>Previous message:</strong> <a href="4038.php">Gleb Natapov: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>In reply to:</strong> <a href="4037.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Jeff Squyres: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Reply:</strong> <a href="4045.php">Jeff Squyres: "Re: [OMPI devel] Open MPI session directory location"</a>
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
