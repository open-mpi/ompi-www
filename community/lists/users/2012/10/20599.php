<?
$subject_val = "Re: [OMPI users] bug (?) opal_path_access incorrect call";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 10:11:26 2012" -->
<!-- isoreceived="20121031141126" -->
<!-- sent="Wed, 31 Oct 2012 07:11:19 -0700" -->
<!-- isosent="20121031141119" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug (?) opal_path_access incorrect call" -->
<!-- id="B59F0C6D-9D33-4953-8492-C8CB2C3858E4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5090E7B3.3070802_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug (?) opal_path_access incorrect call<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 10:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20600.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20598.php">Ralph Castain: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>In reply to:</strong> <a href="20596.php">marco atzeri: "[OMPI users] bug (?) opal_path_access incorrect call"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - you are quite correct. Thanks for chasing this down!!
<br>
<p>On Oct 31, 2012, at 1:56 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; looking on a solution for
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20495.php">http://www.open-mpi.org/community/lists/users/2012/10/20495.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed that the issue disappears on 1.6.2 with the patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --- opal/util/path.c~   2012-04-03 16:29:52.000000000 +0200
</span><br>
<span class="quotelev1">&gt; +++ opal/util/path.c    2012-10-30 20:31:43.772749400 +0100
</span><br>
<span class="quotelev1">&gt; @@ -82,7 +82,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If absolute path is given, return it without searching. */
</span><br>
<span class="quotelev1">&gt;     if( opal_path_is_absolute(fname) ) {
</span><br>
<span class="quotelev1">&gt; -        return opal_path_access(fname, &quot;&quot;, mode);
</span><br>
<span class="quotelev1">&gt; +        return opal_path_access(fname, NULL , mode);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Initialize. */
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For what I can see on the function body, the test on path
</span><br>
<span class="quotelev1">&gt; is expecting path to be a null pointer and not a
</span><br>
<span class="quotelev1">&gt; pointer to an empty strings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; char *opal_path_access(char *fname, char *path, int mode)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    char *fullpath = NULL;
</span><br>
<span class="quotelev1">&gt;    struct stat buf;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Allocate space for the full pathname. */
</span><br>
<span class="quotelev1">&gt;    if (NULL == path) {
</span><br>
<span class="quotelev1">&gt;        fullpath = opal_os_path(false, fname, NULL);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        fullpath = opal_os_path(false, path, fname, NULL);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    if (NULL == fullpath)
</span><br>
<span class="quotelev1">&gt;        return NULL;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<li><strong>Next message:</strong> <a href="20600.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20598.php">Ralph Castain: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>In reply to:</strong> <a href="20596.php">marco atzeri: "[OMPI users] bug (?) opal_path_access incorrect call"</a>
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
