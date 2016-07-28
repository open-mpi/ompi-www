<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 09:52:57 2011" -->
<!-- isoreceived="20110602135257" -->
<!-- sent="Thu, 2 Jun 2011 15:52:52 +0200" -->
<!-- isosent="20110602135252" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="BANLkTiktnVtWhpG3Ls6CQTjR0XNdeUXFug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikoSq3wLcJrPoQtQ0_9xD=3-s+A6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fake Modex<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-02 09:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9290.php">Hugo Meyer: "[OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9290.php">Hugo Meyer: "[OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again.
<br>
<p>My actual problem is that i don't know where is the struct that has the
<br>
information that is used to send messages to the procs.
<br>
<p>Something like:
<br>
<p>Rank       URI
<br>
0             21222:tcp:192.168.1.1:1250
<br>
1             21223:tcp:192.168.1.2:1250
<br>
.....          .....
<br>
<p><p>Because what i need is to update it when i move a process from its original
<br>
site, is there something like this??
<br>
<p>Thanks a lot.
<br>
<p>Hugo
<br>
<p>2011/5/31 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm needing some help to restart the communication with a process that i
</span><br>
<span class="quotelev1">&gt; restore in a different node. My situation is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process fails and it's restored in another node succesfully from a
</span><br>
<span class="quotelev1">&gt; previous checkpoint that i sent there. Now, when a process try to send a
</span><br>
<span class="quotelev1">&gt; message to this restored process it will fail, or at least, it will be
</span><br>
<span class="quotelev1">&gt; locked in *ompi_request_wait_completion. *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; So, when this happens i have to send a message to the daemon of the sender
</span><br>
<span class="quotelev1">&gt; that will have the uri of where the process has been restored and answer to
</span><br>
<span class="quotelev1">&gt; the proc with this and it will update this info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, i need to know where in the code i can capture this attempt to send and
</span><br>
<span class="quotelev1">&gt; then send the message to his daemon and where and how i can update this info
</span><br>
<span class="quotelev1">&gt; to send the message to the right place (Same rank but new uri).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to do it in this way to avoid a collective communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you give me a hand on this, it will be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9290.php">Hugo Meyer: "[OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/05/9290.php">Hugo Meyer: "[OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
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
