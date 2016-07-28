<?
$subject_val = "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 15 11:54:38 2013" -->
<!-- isoreceived="20131215165438" -->
<!-- sent="Sun, 15 Dec 2013 11:54:17 -0500" -->
<!-- isosent="20131215165417" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Test suite of openMPI 1.7.3 fails" -->
<!-- id="7A85524A-8C4D-49BC-80F0-5C39D3790F55_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20131212183145.GE6335_at_paradies.suse.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Test suite of openMPI 1.7.3 fails<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-15 11:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13434.php">Ralph Castain: "[OMPI devel] Assigned cpu list"</a>
<li><strong>In reply to:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Philipp,
<br>
<p>Thanks for providing the config file. Based on it&#146;s content I was able to replicate your issue. You just unearthed a huge bug in our atomic support and handling, one that will take some time to get fixed completely. Meanwhile, I have pushed a partial fix in the trunk (29915, 29916).
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Dec 12, 2013, at 13:31 , Philipp Thomas &lt;pth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * Jeff Squyres (jsquyres) (jsquyres_at_[hidden]) [20131211 21:01]:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the opal_config.h file from your build tree?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will help us look into what's going on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that it doesn't seem to be dependent on the build architecture as it
</span><br>
<span class="quotelev1">&gt; fails at the same spot for all Archs that openSUSE supports (i586, x86-64,
</span><br>
<span class="quotelev1">&gt; armv6l, armv7l ppc, ppc64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Philipp
</span><br>
<span class="quotelev1">&gt; &lt;opal_config.h&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13434.php">Ralph Castain: "[OMPI devel] Assigned cpu list"</a>
<li><strong>In reply to:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
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
