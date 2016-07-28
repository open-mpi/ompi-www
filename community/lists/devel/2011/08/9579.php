<?
$subject_val = "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 09:06:28 2011" -->
<!-- isoreceived="20110802130628" -->
<!-- sent="Tue, 2 Aug 2011 09:06:23 -0400" -->
<!-- isosent="20110802130623" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;The MPI_Init() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="CAANzjE=wQvXve5aJF1-OUbQ3vQiD528RHKhUQLWUCrUVWQgcLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E2A1611.6080701_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 09:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>Previous message:</strong> <a href="9578.php">Xin He: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9542.php">Paul H. Hargrove: "[OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report. We should probably cleanup the reporting of
<br>
this type of error. I think someone was looking into the &quot;*** The
<br>
MPI_Init() function was called before MPI_INIT was invoked.&quot; issue
<br>
since it came up in a different bug report.
<br>
<p>But I'll file a ticket on this so when we get back into the code we
<br>
can try to address it.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2841">https://svn.open-mpi.org/trac/ompi/ticket/2841</a>
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p>On Fri, Jul 22, 2011 at 8:30 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The output below resulted from an attempt to start a job w/checkpoint
</span><br>
<span class="quotelev1">&gt; support when the BLCR kernel modules were not loaded on then node (&quot;pilot
</span><br>
<span class="quotelev1">&gt; error&quot;). &#160;The mistake is mine, but I am reporting this because there appears
</span><br>
<span class="quotelev1">&gt; to be more going on in the output than probable should be - &#160;the following 2
</span><br>
<span class="quotelev1">&gt; lines in particular struck me as almost humorous, but clearly incorrect:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the command and full output. &#160;This is OMPI-1.5.3 on Linux/x86.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix $HOME/obj-pcp-j/cr_mpirun-j-5+6/INSTALL -host pcp-j-6
</span><br>
<span class="quotelev1">&gt; --mca btl ^openib -am ft-enable-cr -np 1 ./ring
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. &#160;There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. &#160;This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt; &#160;--&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [pcp-j-6:29247] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.5.3/orte/runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [pcp-j-6:29247] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. &#160;There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. &#160;This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; &#160;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory &#160; &#160; Fax: +1-510-486-6900
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>Previous message:</strong> <a href="9578.php">Xin He: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9542.php">Paul H. Hargrove: "[OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
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
