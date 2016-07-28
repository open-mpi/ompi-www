<?
$subject_val = "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 16:14:38 2013" -->
<!-- isoreceived="20130514201438" -->
<!-- sent="Tue, 14 May 2013 20:14:33 +0000" -->
<!-- isosent="20130514201433" -->
<!-- name="Damien Kick" -->
<!-- email="dkick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE" -->
<!-- id="7364AB234369D348AE1CEBC1A86132DB949F51_at_SVLITMX02.shoretel.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="7E4C1A80-563F-42F1-B77A-0CEF506A18F4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Damien Kick (<em>dkick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 16:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2013, at 3:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2013, at 12:56 PM, Damien Kick &lt;dkick_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2013, at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem is that comm_accept isn't thread safe in 1.6 series - we have a devel branch that might solve it, but is still under evaluation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So then probably the only way to implement an MPI server which handles multiple concurrent clients with Open MPI 1.6.4 is to use multiple processes to handle each client connection, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or introduce your own thread protection around the comm_accept call
</span><br>
<p>Hmm &#133; but won't that cause other problems when the call to MPI_Comm_accept blocks while we're still holding the mutex?  There doesn't seem to be an option to MPI_Comm_accept to timeout nor does there seem to be a variant of MPI_Probe to allow for a non-blocking accept.  Am I missing something?  One more question, too (and thanks for all your help), I don't see anything in the man page for MPI_Comm_accept which mentions iterations with signals.  Is there a reliable behavior in this context, i.e. return an error from MPI_Comm_accept and set errno to EINTR?  Would the C++ binding throw an exception?
<br>
<p>&lt;pause/&gt; I suppose that one could use MPI_Comm_join to have &quot;normal socket code&quot; handle connections without worrying about blocking the rest of MPI and then only introduce a mutex when we know we're reading to MPI_Comm_join.
<br>
<p>________________________________
<br>
<p>This e-mail and any attachments are confidential. If it is not intended for you, please notify the sender, and please erase and ignore the contents.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21904.php">Hayato KUNIIE: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
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
