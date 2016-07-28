<?
$subject_val = "Re: [OMPI devel] How is session dir used?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 10:34:50 2015" -->
<!-- isoreceived="20151023143450" -->
<!-- sent="Fri, 23 Oct 2015 07:34:44 -0700" -->
<!-- isosent="20151023143444" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is session dir used?" -->
<!-- id="FE8FC915-E71B-460E-BF7A-E8B35E235396_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56292EDB.7040300_at_xlab.si" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is session dir used?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 10:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18259.php">Justin Cinkelj: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18259.php">Justin Cinkelj: "Re: [OMPI devel] How is session dir used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The session dir is also used by the shared memory system for its backing file, so you may need it if you plan to run more than one proc in a VM. This has been one of the sticking points for VM/container-based operations.
<br>
<p>As for the orted: your description is pretty close. The socket you mention no longer exists - instead, there is one used by the PMIx client-server. It&#226;&#128;&#153;s a Unix-domain socket, and the rendezvous file is in the session dir tree. You might look in the orte/orted/pmix directory to see what the daemon is doing to support the individual client. Specifically, the daemon needs to pass down the location of every proc, so you&#226;&#128;&#153;d need to figure out what that means when you are using container and/or VMs.
<br>
<p><p><span class="quotelev1">&gt; On Oct 22, 2015, at 11:45 AM, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Normally, mpi_run starts via ssh on remote node orted process, and orted
</span><br>
<span class="quotelev1">&gt; start mpi_program via fork+exec.
</span><br>
<span class="quotelev1">&gt; orted and mpi_program communicate via:
</span><br>
<span class="quotelev1">&gt; - environment variables (ok, that's on-time setup only, but still)
</span><br>
<span class="quotelev1">&gt; - pipes (only one, right? - it is close-on-exec by child).
</span><br>
<span class="quotelev1">&gt; - file descriptors, mpi_program stdin/out/err are redirected in orted
</span><br>
<span class="quotelev1">&gt; between fork and exec.
</span><br>
<span class="quotelev1">&gt; - socket (only one?), mpi_program connects to OMPI_MCA_orte_local_daemon_uri
</span><br>
<span class="quotelev1">&gt; - session dir (OMPI_FILE_LOCATION)
</span><br>
<span class="quotelev1">&gt; (did I miss anything - or, how much?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How is session dir used? I saw check for aborted file (so that orted can
</span><br>
<span class="quotelev1">&gt; figure out if child died?). Is there any other use of that dir?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I just ignore it, if I try to run orted on host, and mpi_program in
</span><br>
<span class="quotelev1">&gt; container/virtual machine?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18245.php">http://www.open-mpi.org/community/lists/devel/2015/10/18245.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18259.php">Justin Cinkelj: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18259.php">Justin Cinkelj: "Re: [OMPI devel] How is session dir used?"</a>
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
