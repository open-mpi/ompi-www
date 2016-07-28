<?
$subject_val = "Re: [OMPI devel] Deprecated call in sharedfp framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 13:01:49 2014" -->
<!-- isoreceived="20141024170149" -->
<!-- sent="Fri, 24 Oct 2014 17:01:39 +0000" -->
<!-- isosent="20141024170139" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deprecated call in sharedfp framework" -->
<!-- id="311F410D-3525-4FAA-BE4C-66D871F3A564_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="69317162-65DC-436C-AB08-D3045E0A42FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deprecated call in sharedfp framework<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 13:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar -- can you have a look?
<br>
<p><p>On Oct 24, 2014, at 12:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m not sure who owns that framework, but I&#146;m seeing this warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c:159:5: warning: 'sem_init' is deprecated (declared at /usr/include/sys/semaphore.h:55) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;      if(sem_init(&amp;sm_offset_ptr-&gt;mutex, 1, 1) != -1){
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_close':
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c:214:13: warning: 'sem_destroy' is deprecated (declared at /usr/include/sys/semaphore.h:53) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;              sem_destroy(&amp;file_data-&gt;sm_offset_ptr-&gt;mutex);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with gcc (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16088.php">http://www.open-mpi.org/community/lists/devel/2014/10/16088.php</a>
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
<li><strong>Next message:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
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
