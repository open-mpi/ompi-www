<?
$subject_val = "Re: [OMPI users] False positive from valgrind in sec_basic.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 00:52:56 2014" -->
<!-- isoreceived="20140522045256" -->
<!-- sent="Wed, 21 May 2014 21:52:54 -0700" -->
<!-- isosent="20140522045254" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] False positive from valgrind in sec_basic.c" -->
<!-- id="CAMJJpkXUwaFvVQUCzR-DmqZ4Ojnrqho-fArWStA476ss6Vjm8Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3DD35A37-F110-4B69-9153-C47DFBE84179_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-22 00:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24452.php">Bibrak Qamar: "[OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is more subtle that described here. It's a vectorization problem
<br>
and frankly it should appear on all loop-based string operations and
<br>
for most compilers (confirmed with gcc, clang and icc). The proposed
<br>
patch is merely a band-aid ...
<br>
<p>More info @ <a href="https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760">https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760</a>.
<br>
A better fix for this issue will be to add &quot;-fno-builtin-strdup&quot; to
<br>
your CFLAGS when compiling Open MPI.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Wed, May 21, 2014 at 5:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Wow, that is hilarious. I see no problem with adding the extra characters :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scheduled it for 1.8.2 (copied you on ticket)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 21, 2014, at 3:29 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running under valgrind, I get warnings from each MPI process at MPI_Init time.  The warnings come from function sec_basic.c at lines 70 and 71 (openmpi v1.8.1):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            my_cred.credential = strdup(&quot;12345&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;            my_cred.size = strlen(my_cred.credential)+1;  // include the NULL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is because strdup(3c) and strlen(3c) are apparently optimized to use 4-byte integer loads to speed up the copy and search operations, and &quot;overrun&quot; the malloced area.  (In fact, since malloc tends to pad allocations, it is safe.  But valgrind doesn't know that.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the &quot;12345&quot; appears to be a dummy string, would it be ok to add a couple of additional characters in the strdup call to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            my_cred.credential = strdup(&quot;1234567&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This gives an 8 byte string (counting the NULL) and quiets valgrind down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Walter
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24452.php">Bibrak Qamar: "[OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24450.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
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
