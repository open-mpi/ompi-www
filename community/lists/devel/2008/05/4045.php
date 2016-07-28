<?
$subject_val = "Re: [OMPI devel] Open MPI session directory location";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 15:57:27 2008" -->
<!-- isoreceived="20080527195727" -->
<!-- sent="Tue, 27 May 2008 15:57:18 -0400" -->
<!-- isosent="20080527195718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI session directory location" -->
<!-- id="D4F546C7-C6F8-4E1B-B4CC-1F90CB063040_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4617966.D8D5%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 15:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Greg Watson: "[OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4039.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Reply:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops, sorry.
<br>
<p>We were having problems with the memory allocator when ompi_info  
<br>
called orte_init().  I think it might be best to call the ORTE MCA  
<br>
registration function directly...
<br>
<p><p>On May 27, 2008, at 10:40 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; I see the problem (I think). A recent change was made to ompi_info  
</span><br>
<span class="quotelev1">&gt; so it no
</span><br>
<span class="quotelev1">&gt; longer calls orte_init. As a result, none of the ORTE-level params  
</span><br>
<span class="quotelev1">&gt; (i.e.,
</span><br>
<span class="quotelev1">&gt; those params registered outside of ORTE frameworks) are being  
</span><br>
<span class="quotelev1">&gt; reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll chat with Jeff and see how we resolve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/27/08 8:32 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It &quot;should&quot; be visible now....not sure why it isn't. It conforms to  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; naming rules and -used- to be reported by ompi_info...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/27/08 8:31 AM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Make that &quot;ompi_info&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We need to make that visible via orte_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought this was done at some point, perhaps it got overwritten?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 27, 2008, at 10:27 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca orte_tmpdir_base foo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 5/27/08 8:24 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Is there a way to change where Open MPI creates session
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can't find mca parameter that specifies this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Greg Watson: "[OMPI devel] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Jeff Squyres: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4039.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
<li><strong>Reply:</strong> <a href="4056.php">Ralph H Castain: "Re: [OMPI devel] Open MPI session directory location"</a>
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
