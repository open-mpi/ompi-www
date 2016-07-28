<?
$subject_val = "Re: [OMPI devel] Deprecated call in sharedfp framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 17:05:03 2014" -->
<!-- isoreceived="20141024210503" -->
<!-- sent="Fri, 24 Oct 2014 14:04:33 -0700" -->
<!-- isosent="20141024210433" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deprecated call in sharedfp framework" -->
<!-- id="CAAvDA16sZCQ5JaLK+L0sb8dpLt0S=h+ks1PgKCmV7QV3XdbbYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="544ABA4D.4080002_at_cs.uh.edu" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 17:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can shed some light on these warnings.
<br>
<p>sem_init() and sem_destroy() are POSIX-defined interfaces for UNNAMED
<br>
semaphores.
<br>
There are also POSX interfaces, sem_{open,close,unlink}(), that operate on
<br>
NAMED semaphores.
<br>
See for more info:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html">http://pubs.opengroup.org/onlinepubs/009695399/basedefs/semaphore.h.html</a>
<br>
<p>According to the following link Mac OSX only implements the NAMED
<br>
semaphores and I would guess they are now deprecating the ones that just
<br>
return -1 and set errno=ENOSYS:
<br>
&nbsp;&nbsp;<a href="http://stackoverflow.com/questions/1413785/sem-init-on-os-x">http://stackoverflow.com/questions/1413785/sem-init-on-os-x</a>
<br>
<p>-Paul
<br>
<p><p>On Fri, Oct 24, 2014 at 1:45 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, will have a look at it next week.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar -- can you have a look?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 24, 2014, at 12:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm not sure who owns that framework, but I'm seeing this warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sharedfp_sm_file_open.c:159:5: warning: 'sem_init' is deprecated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (declared at /usr/include/sys/semaphore.h:55)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [-Wdeprecated-declarations]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if(sem_init(&amp;sm_offset_ptr-&gt;mutex, 1, 1) != -1){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_close':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sharedfp_sm_file_open.c:214:13: warning: 'sem_destroy' is deprecated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (declared at /usr/include/sys/semaphore.h:53)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [-Wdeprecated-declarations]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               sem_destroy(&amp;file_data-&gt;sm_offset_ptr-&gt;mutex);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with gcc (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community/lists/devel/2014/10/16088.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/">http://www.open-mpi.org/community/lists/devel/2014/10/</a>
</span><br>
<span class="quotelev1">&gt; 16090.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>In reply to:</strong> <a href="16090.php">Edgar Gabriel: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16092.php">Ralph Castain: "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
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
