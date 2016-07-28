<?
$subject_val = "[OMPI devel] progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 12:06:44 2009" -->
<!-- isoreceived="20091124170644" -->
<!-- sent="Tue, 24 Nov 2009 12:06:39 -0500" -->
<!-- isosent="20091124170639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] progress threads" -->
<!-- id="A9C0D4F1-5158-4DFB-A36C-E5F334E8C9F0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] progress threads<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 12:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<li><strong>Previous message:</strong> <a href="7142.php">Jeff Squyres: "[OMPI devel] SC09 OMPI-related slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<li><strong>Reply:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the call today, I've added a Big Hairy Warning if you --enable- 
<br>
progress-threads.  It's a configure change, so I'll &quot;sleep 6h; svn  
<br>
ci ....&quot;.
<br>
<p>Note that I can't compile the trunk right now if --enable-progress- 
<br>
threads is used:
<br>
<p>&nbsp;&nbsp;&nbsp;CC     base/io_base_request.lo
<br>
base/io_base_request.c:254: error: syntax error before &quot;progress_thread&quot;
<br>
base/io_base_request.c:254: warning: type defaults to `int' in  
<br>
declaration of `progress_thread'
<br>
base/io_base_request.c:254: error: ISO C forbids data definition with  
<br>
no type or storage class
<br>
base/io_base_request.c: In function `mca_io_base_request_progress_init':
<br>
base/io_base_request.c:291: error: `opal_thread_t_class' undeclared  
<br>
(first use in this function)
<br>
base/io_base_request.c:291: error: (Each undeclared identifier is  
<br>
reported only once
<br>
base/io_base_request.c:291: error: for each function it appears in.)
<br>
base/io_base_request.c:293: error: request for member `t_run' in  
<br>
something not a structure or union
<br>
base/io_base_request.c:294: error: request for member `t_arg' in  
<br>
something not a structure or union
<br>
base/io_base_request.c: In function `mca_io_base_request_progress_add':
<br>
base/io_base_request.c:309: error: implicit declaration of function  
<br>
`opal_thread_start'
<br>
base/io_base_request.c: In function `mca_io_base_request_progress_fini':
<br>
base/io_base_request.c:340: error: implicit declaration of function  
<br>
`opal_thread_join'
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<li><strong>Previous message:</strong> <a href="7142.php">Jeff Squyres: "[OMPI devel] SC09 OMPI-related slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
<li><strong>Reply:</strong> <a href="7144.php">Barrett, Brian W: "Re: [OMPI devel] progress threads"</a>
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
