<?
$subject_val = "Re: [OMPI users] False positive from valgrind in sec_basic.c";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 24 09:48:53 2014" -->
<!-- isoreceived="20140524134853" -->
<!-- sent="Sat, 24 May 2014 06:48:49 -0700" -->
<!-- isosent="20140524134849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] False positive from valgrind in sec_basic.c" -->
<!-- id="86C2ED88-B142-428E-A17A-FC3CD45CF033_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="835BDC73-97A0-4466-B5A4-FB6384773C23_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-24 09:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24478.php">Alain Miniussi: "[OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>In reply to:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the answer is &quot;no&quot;, Jeff - at least, that didn't solve it for folks on the bug tracker cited by George. Setting the CFLAGS seemed the only solution until valgrind resolves the issue, and since that bug is a couple of years old with no further activity, it seems unlikely that will happen.
<br>
<p>Note that this only impacts valgrind, not actual operation. Hence, I'm inclined to add the CFLAG recommendation to our valgrind FAQ and leave it at that for now as I'm not sure how else we can resolve the problem - getting all our strdup's to align on 4-byte boundaries would be an impossible task.
<br>
<p><p>On May 22, 2014, at 3:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would a better solution be something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char default_credential[8] = &quot;12345&quot;;
</span><br>
<span class="quotelev1">&gt; char *bar = strdup(default_credential)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 22, 2014, at 12:52 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is more subtle that described here. It's a vectorization problem
</span><br>
<span class="quotelev2">&gt;&gt; and frankly it should appear on all loop-based string operations and
</span><br>
<span class="quotelev2">&gt;&gt; for most compilers (confirmed with gcc, clang and icc). The proposed
</span><br>
<span class="quotelev2">&gt;&gt; patch is merely a band-aid ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More info @ <a href="https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760">https://bugs.launchpad.net/ubuntu/+source/valgrind/+bug/852760</a>.
</span><br>
<span class="quotelev2">&gt;&gt; A better fix for this issue will be to add &quot;-fno-builtin-strdup&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; your CFLAGS when compiling Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 21, 2014 at 5:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wow, that is hilarious. I see no problem with adding the extra characters :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scheduled it for 1.8.2 (copied you on ticket)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 21, 2014, at 3:29 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When running under valgrind, I get warnings from each MPI process at MPI_Init time.  The warnings come from function sec_basic.c at lines 70 and 71 (openmpi v1.8.1):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          my_cred.credential = strdup(&quot;12345&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          my_cred.size = strlen(my_cred.credential)+1;  // include the NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is because strdup(3c) and strlen(3c) are apparently optimized to use 4-byte integer loads to speed up the copy and search operations, and &quot;overrun&quot; the malloced area.  (In fact, since malloc tends to pad allocations, it is safe.  But valgrind doesn't know that.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since the &quot;12345&quot; appears to be a dummy string, would it be ok to add a couple of additional characters in the strdup call to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          my_cred.credential = strdup(&quot;1234567&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This gives an 8 byte string (counting the NULL) and quiets valgrind down.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Walter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="24478.php">Alain Miniussi: "[OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>In reply to:</strong> <a href="24454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
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
