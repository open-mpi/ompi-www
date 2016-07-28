<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  3 18:42:10 2013" -->
<!-- isoreceived="20131003224210" -->
<!-- sent="Fri, 4 Oct 2013 00:42:07 +0200" -->
<!-- isosent="20131003224207" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; failure in opal_datatype_test (v1.6.5)" -->
<!-- id="25AE5DB4-E792-4788-A700-51044B4843BF_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F919737_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-03 18:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13046.php">Christopher Samuel: "[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Previous message:</strong> <a href="13044.php">Jeff Squyres (jsquyres): "[OMPI devel] Repeated SVN commit email"</a>
<li><strong>In reply to:</strong> <a href="13043.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13093.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output seems normal, there is no indication of anything weird happening. Also I tried to reproduce the error with other icc versions to no avail.
<br>
<p>Syed,
<br>
<p>Can you run the test in debug mode inside gdb? When the segfault happen please get the stack trace (gdb command where or bt) and send it to me.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>On Oct 3, 2013, at 13:06 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this thread on the users list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thread starts here:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2013/09/22682.php">http://www.open-mpi.org/community/lists/users/2013/09/22682.php</a>
</span><br>
<span class="quotelev1">&gt;    Relevant messages start here:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2013/09/22725.php">http://www.open-mpi.org/community/lists/users/2013/09/22725.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a zip file from the user experiencing a failure in &quot;make check&quot; in opal_datatype_test.  I think he may have run &quot;make -j X check&quot; because the output is a little jumbled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unable to replicate the error on RHEL6/icc 14.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you see this kind of failure before in opal_datatype_test / have any idea how the error indicated in the output can happen?
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
<span class="quotelev1">&gt; &lt;testlog.zip&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13046.php">Christopher Samuel: "[OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Previous message:</strong> <a href="13044.php">Jeff Squyres (jsquyres): "[OMPI devel] Repeated SVN commit email"</a>
<li><strong>In reply to:</strong> <a href="13043.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13093.php">George Bosilca: "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
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
