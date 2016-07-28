<?
$subject_val = "Re: [OMPI devel] opal_config_bottom.h question again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:24:31 2014" -->
<!-- isoreceived="20140804162431" -->
<!-- sent="Mon, 4 Aug 2014 16:24:29 +0000" -->
<!-- isosent="20140804162429" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_config_bottom.h question again" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACCA87_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B984AFAB-707E-4A71-B650-56AD9CBFCEB6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_config_bottom.h question again<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 12:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Nope that doesn't fix the problem I'm hitting.   I tried to build the opmi trunk
<br>
on a system with a much older gcc compiler (4.4.7) and it compiled :)!  But
<br>
I'd like to be able to compile opmi with a newer gcc like the one on my opensuse
<br>
13.1 box.
<br>
<p>The preprocessor is pulling in the system malloc.h and that's where things blow up:
<br>
<p>&nbsp;&nbsp;CC       base/mpool_base_frame.lo
<br>
In file included from ../../../opal/include/opal_config.h:2750:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/mpool_base_frame.c:21:
<br>
../../../opal/include/opal_config_bottom.h:381:38: error: expected declaration specifiers or '...' before '(' token
<br>
#    define malloc(size) opal_malloc((size), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from base/mpool_base_frame.c:28:0:
<br>
/usr/include/malloc.h:38:1: error: expected declaration specifiers or '...' before string constant
<br>
extern void *malloc (size_t __size) __THROW __attribute_malloc__ __wur;
<br>
^
<br>
/usr/include/malloc.h:38:1: error: expected declaration specifiers or '...' before numeric constant
<br>
In file included from ../../../opal/include/opal_config.h:2750:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/mpool_base_frame.c:21:
<br>
../../../opal/include/opal_config_bottom.h:385:48: error: expected declaration specifiers or '...' before '(' token
<br>
#    define calloc(nmembers, size) opal_calloc((nmembers), (size), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../opal/include/opal_config_bottom.h:385:60: error: expected declaration specifiers or '...' before '(' token
<br>
#    define calloc(nmembers, size) opal_calloc((nmembers), (size), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from base/mpool_base_frame.c:28:0:
<br>
/usr/include/malloc.h:41:1: error: expected declaration specifiers or '...' before string constant
<br>
extern void *calloc (size_t __nmemb, size_t __size)
<br>
^
<br>
/usr/include/malloc.h:41:1: error: expected declaration specifiers or '...' before numeric constant
<br>
In file included from ../../../opal/include/opal_config.h:2750:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/mpool_base_frame.c:21:
<br>
../../../opal/include/opal_config_bottom.h:389:45: error: expected declaration specifiers or '...' before '(' token
<br>
#    define realloc(ptr, size) opal_realloc((ptr), (size), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../opal/include/opal_config_bottom.h:389:52: error: expected declaration specifiers or '...' before '(' token
<br>
#    define realloc(ptr, size) opal_realloc((ptr), (size), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from base/mpool_base_frame.c:28:0:
<br>
/usr/include/malloc.h:49:1: error: expected declaration specifiers or '...' before string constant
<br>
extern void *realloc (void *__ptr, size_t __size)
<br>
^
<br>
/usr/include/malloc.h:49:1: error: expected declaration specifiers or '...' before numeric constant
<br>
In file included from ../../../opal/include/opal_config.h:2750:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/mpool_base_frame.c:21:
<br>
../../../opal/include/opal_config_bottom.h:393:33: error: expected declaration specifiers or '...' before '(' token
<br>
#    define free(ptr) opal_free((ptr), __FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from base/mpool_base_frame.c:28:0:
<br>
/usr/include/malloc.h:53:1: error: expected declaration specifiers or '...' before string constant
<br>
extern void free (void *__ptr) __THROW;
<br>
^
<br>
/usr/include/malloc.h:53:1: error: expected declaration specifiers or '...' before numeric constant
<br>
<p><p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, August 04, 2014 10:09 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] opal_config_bottom.h question again
<br>
<p>I believe the issue is actually in opal/util/malloc.h, Howard. I noticed this while looking around this weekend - someone included opal_config.h in the malloc.h file even though it explicitly says &quot;DON'T DO THIS&quot;  in that header file.
<br>
<p>#ifndef OPAL_MALLOC_H
<br>
#define OPAL_MALLOC_H
<br>
<p>#include &quot;opal_config.h&quot;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>/*
<br>
&nbsp;* THIS FILE CANNOT INCLUDE ANY OTHER OPAL HEADER FILES!!!
<br>
&nbsp;*
<br>
&nbsp;* It is included via &lt;opal_config_bottom.h&gt;.  Hence, it should not
<br>
&nbsp;* include ANY other files, nor should it include &quot;opal_config.h&quot;.
<br>
&nbsp;*
<br>
&nbsp;*/
<br>
<p>Don't know why someone did that, but you might see if it fixes your problem
<br>
<p><p>On Aug 4, 2014, at 9:00 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&lt;mailto:howardp_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi Folks,
<br>
<p>As I said last week, I'm noticing now that on my opensuse 13.1 system and gcc 4.8.1, when I do a fresh
<br>
checkout of trunk ompi and try to build, without any configure options,
<br>
<p>mca_base_mpool_frame.c
<br>
<p>does not compile.
<br>
<p>The reason is there is a conflict in opal_config_bottom.h and the contents of malloc.h,
<br>
which for my system is pulled in by the preprocessor.
<br>
<p>If I undefine HAVE_MALLOC_H in this file, the code compiles fine.  Alternatively,
<br>
one can also move the malloc.h include prior to the opal_config.h include and things
<br>
work.  Alternatively, one can add the OPAL_DISABLE_ENABLE_MEM_DEBUG define
<br>
as in mpool_base_lookup.c , and the compile problem similarly goes away.
<br>
<p>I'd like to check in a fix for this.  I'd prefer to just move the std include files ahead
<br>
of the opal_config.h include.  I'd like to do this today unless someone objects.
<br>
<p>I'm somewhat surprised I'm the only one seeing this though.
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15495.php">http://www.open-mpi.org/community/lists/devel/2014/08/15495.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
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
