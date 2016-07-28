<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 16:17:16 2008" -->
<!-- isoreceived="20080331201716" -->
<!-- sent="Mon, 31 Mar 2008 16:17:11 -0400" -->
<!-- isosent="20080331201711" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="C6628F2D-AF2E-4DA3-BDD6-1C97CA189AEC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A05E55D2-58B6-4A14-8CD5-CFB3A9FA2A19_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Session directories in $HOME?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 16:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3590.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3587.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Commit r18046 restore exactly the same logic as it was before r18037.  
<br>
It redirects everything to /tmp is no special environment variable is  
<br>
set.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2008, at 4:09 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Taking a quick look at the commits it seems that r18037 looks like
</span><br>
<span class="quotelev1">&gt; the most likely cause of this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previously the session directory was forced to &quot;/tmp&quot; if no
</span><br>
<span class="quotelev1">&gt; environment variables were set. This revision removes this logic and
</span><br>
<span class="quotelev1">&gt; uses the opal_tmp_directory(). Though I agree with this change, I
</span><br>
<span class="quotelev1">&gt; think the logic for selecting the TMP directory should be extended to
</span><br>
<span class="quotelev1">&gt; use '/tmp' if it exists. If it does not then the home directory
</span><br>
<span class="quotelev1">&gt; should be a fine last alternative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does that sound as a solution? This would prevent us from
</span><br>
<span class="quotelev1">&gt; unexpectedly changing our running behavior in user environments in
</span><br>
<span class="quotelev1">&gt; which none of those variables are set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 4:01 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nope. None of those environment variables are defined. Should they
</span><br>
<span class="quotelev2">&gt;&gt; be? It would seem that the last part of the logic should be (re-)
</span><br>
<span class="quotelev2">&gt;&gt; extended to use /tmp if it exists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked over the code and I don't see any problems with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_home_directory ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    str = &quot;.&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So does anyone know why the session directories are in $HOME  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of /tmp?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3591/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3590.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3587.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3592.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
