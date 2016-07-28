<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 16:09:33 2008" -->
<!-- isoreceived="20080331200933" -->
<!-- sent="Mon, 31 Mar 2008 16:09:24 -0400" -->
<!-- isosent="20080331200924" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="660DD19A-34E5-4B75-9CBA-9D094573D16C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="38D9633D-98BA-4E91-A351-2EF1B24813B3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-03-31 16:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3587.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TMPDIR and TMP are standard on Unix. If they are not defined ... one  
<br>
cannot guess where the temporary files should be located.  
<br>
Unfortunately, if we start using the /tmp directly we might make the  
<br>
wrong guess.
<br>
<p>What mktemp is returning on your system ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2008, at 4:01 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Nope. None of those environment variables are defined. Should they
</span><br>
<span class="quotelev1">&gt; be? It would seem that the last part of the logic should be (re-)
</span><br>
<span class="quotelev1">&gt; extended to use /tmp if it exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I looked over the code and I don't see any problems with the
</span><br>
<span class="quotelev2">&gt;&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by
</span><br>
<span class="quotelev2">&gt;&gt; opal_home_directory ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;        if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;            if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;                if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev2">&gt;&gt;                    str = &quot;.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So does anyone know why the session directories are in $HOME instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of /tmp?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3588/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3587.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3585.php">Josh Hursey: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
