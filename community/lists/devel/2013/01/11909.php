<?
$subject_val = "Re: [OMPI devel] use of stat() during malloc initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 16:24:40 2013" -->
<!-- isoreceived="20130109212440" -->
<!-- sent="Wed, 9 Jan 2013 21:24:34 +0000" -->
<!-- isosent="20130109212434" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] use of stat() during malloc initialization" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380AFD7F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50ED918A.2040203_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] use of stat() during malloc initialization<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 16:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11910.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>In reply to:</strong> <a href="11907.php">Phil Carns: "[OMPI devel] use of stat() during malloc initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Reply:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Phil.  Good analysis.
<br>
<p>You can thank OFED for this horribleness, BTW.  :-)  Since OFED hardware requires memory registration, and since that registration is expensive, MPI implementations cache registered memory to alleviate the re-registration costs for repeated memory usage.  But MPI doesn't allocate user buffers, so MPI doesn't get notified when users free their buffers, meaning that MPI's internal cache gets out of sync with reality.  Hence, MPI implementations are forced to do horrid workaround like you found to find out when applications free buffers that may be cached.  Ugh.  Go knock your local OFED developer and tell them to give us a notification mechanism so that we don't have to do these horrid workarounds.  :-)
<br>
<p>Regardless, I think your suggestion is fine (replace stat with access).
<br>
<p>Can you confirm that the attached patch works for you?
<br>
<p><p>On Jan 9, 2013, at 10:49 AM, Phil Carns &lt;carns_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a developer on the Darshan project (<a href="http://www.mcs.anl.gov/darshan">http://www.mcs.anl.gov/darshan</a>), which provides a set of lightweight wrappers to characterize the I/O access patterns of MPI applications.  Darshan can operate on static or dynamic executables.  As you might expect, it uses the LD_PRELOAD mechanism to intercept I/O calls like open(), read(), write() and stat() on dynamic executables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We recently received an unusual bug report (courtesy of Myriam Botalla) when Darshan is used in LD_PRELOAD mode with Open MPI 1.6.3, however. When Darshan intercepts a function call via LD_PRELOAD, it must use dlsym() to locate the &quot;real&quot; underlying function to invoke.  dlsym() in turn uses the calloc() function internally.  In most cases this is fine, but Open MPI actually makes its first stat() call within the malloc initialization hook (opal_memory_linux_malloc_init_hook()) before the malloc() and its related functions have been configured.  Darshan therefore (indirectly) triggers a segfault because it intercepts those stat() calls but can't find the real stat() function without using malloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is some more detailed information about this issue, including a stack trace, in this mailing list thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.mcs.anl.gov/pipermail/darshan-users/2013-January/000131.html">http://lists.mcs.anl.gov/pipermail/darshan-users/2013-January/000131.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking a little more closely at the opal_memory_linux_malloc_init_hook() function, it looks like the struct stat output argument from stat() is being ignored in all cases.  Open MPI is just checking the stat() return code to determine if the files in question exist or not.  Taking that into account, would it be possible to make a minor change in Open MPI to replace these instances:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    stat(&quot;some_filename&quot;, &amp;st)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    access(&quot;some_filename&quot;, F_OK)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the opal_memory_linux_malloc_init_hook() function?  There is a slight technical advantage to the change in that access() is lighter weight than stat() on some systems (and it might arguably make the intent  of the calls a little clearer), but of course my main motivation here is to have Open MPI use a function that is less likely to be intercepted by I/O tracing tools before a malloc implementation has been initialized.  Technically it is possible to work around this in Darshan itself by checking the arguments passed in to stat() and using a workaround path for this case, but this isn't a very safe solution in the long run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your time and consideration,
</span><br>
<span class="quotelev1">&gt; -Phil
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11909/stat-to-access.diff">stat-to-access.diff</a>
</ul>
<!-- attachment="stat-to-access.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11910.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>In reply to:</strong> <a href="11907.php">Phil Carns: "[OMPI devel] use of stat() during malloc initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Reply:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
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
