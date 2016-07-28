<?
$subject_val = "Re: [OMPI users] False positive from valgrind in sec_basic.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 06:37:12 2014" -->
<!-- isoreceived="20140522103712" -->
<!-- sent="Thu, 22 May 2014 10:37:11 +0000" -->
<!-- isosent="20140522103711" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] False positive from valgrind in sec_basic.c" -->
<!-- id="835BDC73-97A0-4466-B5A4-FB6384773C23_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXUwaFvVQUCzR-DmqZ4Ojnrqho-fArWStA476ss6Vjm8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] False positive from valgrind in sec_basic.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-22 06:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24455.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would a better solution be something like:
<br>
<p>char default_credential[8] = &quot;12345&quot;;
<br>
char *bar = strdup(default_credential)
<br>
<p>?
<br>
<p><p>On May 22, 2014, at 12:52 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is more subtle that described here. It's a vectorization problem
</span><br>
<span class="quotelev1">&gt; and frankly it should appear on all loop-based string operations and
</span><br>
<span class="quotelev1">&gt; for most compilers (confirmed with gcc, clang and icc). The proposed
</span><br>
<span class="quotelev1">&gt; patch is merely a band-aid ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More info @ <a href="https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760">https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760</a>.
</span><br>
<span class="quotelev1">&gt; A better fix for this issue will be to add &quot;-fno-builtin-strdup&quot; to
</span><br>
<span class="quotelev1">&gt; your CFLAGS when compiling Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 21, 2014 at 5:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Wow, that is hilarious. I see no problem with adding the extra characters :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scheduled it for 1.8.2 (copied you on ticket)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 21, 2014, at 3:29 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running under valgrind, I get warnings from each MPI process at MPI_Init time.  The warnings come from function sec_basic.c at lines 70 and 71 (openmpi v1.8.1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           my_cred.credential = strdup(&quot;12345&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           my_cred.size = strlen(my_cred.credential)+1;  // include the NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is because strdup(3c) and strlen(3c) are apparently optimized to use 4-byte integer loads to speed up the copy and search operations, and &quot;overrun&quot; the malloced area.  (In fact, since malloc tends to pad allocations, it is safe.  But valgrind doesn't know that.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the &quot;12345&quot; appears to be a dummy string, would it be ok to add a couple of additional characters in the strdup call to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           my_cred.credential = strdup(&quot;1234567&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This gives an 8 byte string (counting the NULL) and quiets valgrind down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Walter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24455.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
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
