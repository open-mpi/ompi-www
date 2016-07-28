<?
$subject_val = "Re: [OMPI users] False positive from valgrind in sec_basic.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 20:37:23 2014" -->
<!-- isoreceived="20140522003723" -->
<!-- sent="Wed, 21 May 2014 17:34:53 -0700" -->
<!-- isosent="20140522003453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] False positive from valgrind in sec_basic.c" -->
<!-- id="3DD35A37-F110-4B69-9153-C47DFBE84179_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="537D28C8.7010708_at_earthlink.net" -->
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
<strong>Date:</strong> 2014-05-21 20:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, that is hilarious. I see no problem with adding the extra characters :-)
<br>
<p>Scheduled it for 1.8.2 (copied you on ticket)
<br>
<p><p>On May 21, 2014, at 3:29 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running under valgrind, I get warnings from each MPI process at MPI_Init time.  The warnings come from function sec_basic.c at lines 70 and 71 (openmpi v1.8.1):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            my_cred.credential = strdup(&quot;12345&quot;);
</span><br>
<span class="quotelev1">&gt;            my_cred.size = strlen(my_cred.credential)+1;  // include the NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is because strdup(3c) and strlen(3c) are apparently optimized to use 4-byte integer loads to speed up the copy and search operations, and &quot;overrun&quot; the malloced area.  (In fact, since malloc tends to pad allocations, it is safe.  But valgrind doesn't know that.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the &quot;12345&quot; appears to be a dummy string, would it be ok to add a couple of additional characters in the strdup call to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            my_cred.credential = strdup(&quot;1234567&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gives an 8 byte string (counting the NULL) and quiets valgrind down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter
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
<li><strong>Next message:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>In reply to:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Reply:</strong> <a href="24451.php">George Bosilca: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
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
