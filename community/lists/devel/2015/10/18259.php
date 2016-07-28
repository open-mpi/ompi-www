<?
$subject_val = "Re: [OMPI devel] How is session dir used?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 12:15:29 2015" -->
<!-- isoreceived="20151023161529" -->
<!-- sent="Fri, 23 Oct 2015 18:15:22 +0200 (CEST)" -->
<!-- isosent="20151023161522" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is session dir used?" -->
<!-- id="2053440453.3501790.1445616922009.JavaMail.zimbra_at_zimbra.xlab.si" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FE8FC915-E71B-460E-BF7A-E8B35E235396_at_open-mpi.org" -->
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
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 12:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Previous message:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; From: &quot;Justin Cinkelj&quot; &lt;justin.cinkelj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 23, 2015 5:59:43 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] How is session dir used?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shared memory file is used by mpi_program only, and not by orted, I guess.
</span><br>
<span class="quotelev1">&gt; Then it should be enough to just create the directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OMPI_MCA_orte_local_daemon_uri is no longer used? But wireshark shows
</span><br>
<span class="quotelev1">&gt; communication over that IP:port.
</span><br>
<p>Since I'm using <a href="https://github.com/open-mpi/ompi-release">https://github.com/open-mpi/ompi-release</a>, v1.10.
<br>
You are talking about <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>.
<br>
The v1.10.1 is comming soon, it will include that changes too?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, October 23, 2015 4:34:44 PM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] How is session dir used?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The session dir is also used by the shared memory system for its backing
</span><br>
<span class="quotelev2">&gt; &gt; file, so you may need it if you plan to run more than one proc in a VM.
</span><br>
<span class="quotelev2">&gt; &gt; This
</span><br>
<span class="quotelev2">&gt; &gt; has been one of the sticking points for VM/container-based operations.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As for the orted: your description is pretty close. The socket you mention
</span><br>
<span class="quotelev2">&gt; &gt; no
</span><br>
<span class="quotelev2">&gt; &gt; longer exists - instead, there is one used by the PMIx client-server. It&#226;&#128;&#153;s
</span><br>
<span class="quotelev2">&gt; &gt; a
</span><br>
<span class="quotelev2">&gt; &gt; Unix-domain socket, and the rendezvous file is in the session dir tree. You
</span><br>
<span class="quotelev2">&gt; &gt; might look in the orte/orted/pmix directory to see what the daemon is doing
</span><br>
<span class="quotelev2">&gt; &gt; to support the individual client. Specifically, the daemon needs to pass
</span><br>
<span class="quotelev2">&gt; &gt; down the location of every proc, so you&#226;&#128;&#153;d need to figure out what that
</span><br>
<span class="quotelev2">&gt; &gt; means
</span><br>
<span class="quotelev2">&gt; &gt; when you are using container and/or VMs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Oct 22, 2015, at 11:45 AM, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Normally, mpi_run starts via ssh on remote node orted process, and orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; start mpi_program via fork+exec.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orted and mpi_program communicate via:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - environment variables (ok, that's on-time setup only, but still)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - pipes (only one, right? - it is close-on-exec by child).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - file descriptors, mpi_program stdin/out/err are redirected in orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; between fork and exec.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - socket (only one?), mpi_program connects to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OMPI_MCA_orte_local_daemon_uri
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - session dir (OMPI_FILE_LOCATION)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (did I miss anything - or, how much?)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; How is session dir used? I saw check for aborted file (so that orted can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; figure out if child died?). Is there any other use of that dir?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can I just ignore it, if I try to run orted on host, and mpi_program in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; container/virtual machine?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18245.php">http://www.open-mpi.org/community/lists/devel/2015/10/18245.php</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18257.php">http://www.open-mpi.org/community/lists/devel/2015/10/18257.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Previous message:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18260.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
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
