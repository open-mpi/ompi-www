<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 16:12:06 2016" -->
<!-- isoreceived="20160604201206" -->
<!-- sent="Sun, 5 Jun 2016 05:11:55 +0900" -->
<!-- isosent="20160604201155" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkUQwg6ahk-GAYxt958k8JK=oa3hFYW9uP_nC9QFV21ndQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D7B82384-2E09-4419-8BAE-531D5B7A38CC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Seldom deadlock in mpirun<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 16:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19073.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19073.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 4, 2016 at 11:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; He can try adding &quot;-mca state_base_verbose 5&#226;&#128;&#157;, but if we are failing to
</span><br>
<span class="quotelev1">&gt; catch sigchld, I&#226;&#128;&#153;m not sure what debugging info is going to help resolve
</span><br>
<span class="quotelev1">&gt; that problem. These aren&#226;&#128;&#153;t even fast-running apps, so there was plenty of
</span><br>
<span class="quotelev1">&gt; time to register for the signal prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I vaguely recollect that we have occasionally seen this on Mac before and
</span><br>
<span class="quotelev1">&gt; it had something to do with oddness in sigchld handling&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Assuming sigchld has some oddness on OSX. Why is then mpirun deadlocking
<br>
instead of quitting which will then allow the OS to clean all children?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 4, 2016, at 7:01 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Meh.  Ok.  Should George run with some verbose level to get more info?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 4, 2016, at 6:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Neither of those threads have anything to do with catching the sigchld
</span><br>
<span class="quotelev1">&gt; - threads 4-5 are listening for OOB and PMIx connection requests. It looks
</span><br>
<span class="quotelev1">&gt; more like mpirun thought it had picked everything up and has begun shutting
</span><br>
<span class="quotelev1">&gt; down, but I can&#226;&#128;&#153;t really tell for certain.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 4, 2016, at 6:29 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jun 3, 2016, at 11:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; After finalize. As I said in my original email I se all the output
</span><br>
<span class="quotelev1">&gt; the application is generating, and all processes (which are local as this
</span><br>
<span class="quotelev1">&gt; happens on my laptop) are in zombie mode (Z+). This basically means whoever
</span><br>
<span class="quotelev1">&gt; was supposed to get the SIGCHLD, didn't do it's job of cleaning them up.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ah -- so perhaps threads 1,2,3 are red herrings: the real problem here
</span><br>
<span class="quotelev1">&gt; is that the parent didn't catch the child exits (which presumably should
</span><br>
<span class="quotelev1">&gt; have been caught in threads 4 or 5).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph: is there any state from threads 4 or 5 that would be helpful to
</span><br>
<span class="quotelev1">&gt; examine to see if they somehow missed catching children exits?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19070.php">http://www.open-mpi.org/community/lists/devel/2016/06/19070.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19071.php">http://www.open-mpi.org/community/lists/devel/2016/06/19071.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19072.php">http://www.open-mpi.org/community/lists/devel/2016/06/19072.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19073.php">http://www.open-mpi.org/community/lists/devel/2016/06/19073.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19073.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19073.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19075.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
