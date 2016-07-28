<?
$subject_val = "Re: [OMPI devel] Deprecated call in sharedfp framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 17:06:35 2014" -->
<!-- isoreceived="20141024210635" -->
<!-- sent="Fri, 24 Oct 2014 14:06:32 -0700" -->
<!-- isosent="20141024210632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deprecated call in sharedfp framework" -->
<!-- id="0F44CE41-EBDA-49DA-83FA-70FCFDF89319_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16sZCQ5JaLK+L0sb8dpLt0S=h+ks1PgKCmV7QV3XdbbYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 17:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, those warnings were seen on a Mac running Yosemite.
<br>
<p><span class="quotelev1">&gt; On Oct 24, 2014, at 2:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can shed some light on these warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sem_init() and sem_destroy() are POSIX-defined interfaces for UNNAMED semaphores.
</span><br>
<span class="quotelev1">&gt; There are also POSX interfaces, sem_{open,close,unlink}(), that operate on NAMED semaphores.
</span><br>
<span class="quotelev1">&gt; See for more info:
</span><br>
<span class="quotelev1">&gt;    <a href="http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html">http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html</a> &lt;<a href="http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html">http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the following link Mac OSX only implements the NAMED semaphores and I would guess they are now deprecating the ones that just return -1 and set errno=ENOSYS:
</span><br>
<span class="quotelev1">&gt;   <a href="http://stackoverflow.com/questions/1413785/sem-init-on-os-x">http://stackoverflow.com/questions/1413785/sem-init-on-os-x</a> &lt;<a href="http://stackoverflow.com/questions/1413785/sem-init-on-os-x">http://stackoverflow.com/questions/1413785/sem-init-on-os-x</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 24, 2014 at 1:45 PM, Edgar Gabriel &lt;gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, will have a look at it next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/24/2014 12:01 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; Edgar -- can you have a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 24, 2014, at 12:04 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m not sure who owns that framework, but I&#146;m seeing this warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c:159:5: warning: 'sem_init' is deprecated (declared at /usr/include/sys/semaphore.h:55) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;       if(sem_init(&amp;sm_offset_ptr-&gt;mutex, 1, 1) != -1){
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_close':
</span><br>
<span class="quotelev1">&gt; sharedfp_sm_file_open.c:214:13: warning: 'sem_destroy' is deprecated (declared at /usr/include/sys/semaphore.h:53) [-Wdeprecated-declarations]
</span><br>
<span class="quotelev1">&gt;               sem_destroy(&amp;file_data-&gt;sm_offset_ptr-&gt;mutex);
</span><br>
<span class="quotelev1">&gt;               ^
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16088.php">http://www.open-mpi.org/community/lists/devel/2014/10/16088.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16088.php">http://www.open-mpi.org/community/lists/devel/2014/10/16088.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> &lt;<a href="http://pstl.cs.uh.edu/">http://pstl.cs.uh.edu/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;                  Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16090.php">http://www.open-mpi.org/community/lists/devel/2014/10/16090.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16090.php">http://www.open-mpi.org/community/lists/devel/2014/10/16090.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16091.php">http://www.open-mpi.org/community/lists/devel/2014/10/16091.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16091.php">Paul Hargrove: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
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
