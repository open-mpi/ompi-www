<?
$subject_val = "Re: [OMPI devel] Deprecated call in sharedfp framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 16:45:14 2014" -->
<!-- isoreceived="20141024204514" -->
<!-- sent="Fri, 24 Oct 2014 15:45:01 -0500" -->
<!-- isosent="20141024204501" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deprecated call in sharedfp framework" -->
<!-- id="544ABA4D.4080002_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="311F410D-3525-4FAA-BE4C-66D871F3A564_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 16:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, will have a look at it next week.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 10/24/2014 12:01 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Edgar -- can you have a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 24, 2014, at 12:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m not sure who owns that framework, but I&#146;m seeing this warning:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
</span><br>
<span class="quotelev2">&gt;&gt; sharedfp_sm_file_open.c:159:5: warning: 'sem_init' is deprecated (declared at /usr/include/sys/semaphore.h:55) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev2">&gt;&gt;       if(sem_init(&amp;sm_offset_ptr-&gt;mutex, 1, 1) != -1){
</span><br>
<span class="quotelev2">&gt;&gt;       ^
</span><br>
<span class="quotelev2">&gt;&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_close':
</span><br>
<span class="quotelev2">&gt;&gt; sharedfp_sm_file_open.c:214:13: warning: 'sem_destroy' is deprecated (declared at /usr/include/sys/semaphore.h:53) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev2">&gt;&gt;               sem_destroy(&amp;file_data-&gt;sm_offset_ptr-&gt;mutex);
</span><br>
<span class="quotelev2">&gt;&gt;               ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with gcc (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16088.php">http://www.open-mpi.org/community/lists/devel/2014/10/16088.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
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
