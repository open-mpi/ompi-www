<?
$subject_val = "Re: [OMPI devel] opal_config_bottom.h question again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:09:03 2014" -->
<!-- isoreceived="20140804160903" -->
<!-- sent="Mon, 4 Aug 2014 09:08:43 -0700" -->
<!-- isosent="20140804160843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_config_bottom.h question again" -->
<!-- id="B984AFAB-707E-4A71-B650-56AD9CBFCEB6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05ACCA60_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 12:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the issue is actually in opal/util/malloc.h, Howard. I noticed this while looking around this weekend - someone included opal_config.h in the malloc.h file even though it explicitly says &quot;DON'T DO THIS&quot;  in that header file.
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
<p><p>On Aug 4, 2014, at 9:00 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As I said last week, I&#146;m noticing now that on my opensuse 13.1 system and gcc 4.8.1, when I do a fresh
</span><br>
<span class="quotelev1">&gt; checkout of trunk ompi and try to build, without any configure options,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mca_base_mpool_frame.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; does not compile.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The reason is there is a conflict in opal_config_bottom.h and the contents of malloc.h,
</span><br>
<span class="quotelev1">&gt; which for my system is pulled in by the preprocessor.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I undefine HAVE_MALLOC_H in this file, the code compiles fine.  Alternatively,
</span><br>
<span class="quotelev1">&gt; one can also move the malloc.h include prior to the opal_config.h include and things
</span><br>
<span class="quotelev1">&gt; work.  Alternatively, one can add the OPAL_DISABLE_ENABLE_MEM_DEBUG define
</span><br>
<span class="quotelev1">&gt; as in mpool_base_lookup.c , and the compile problem similarly goes away.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;d like to check in a fix for this.  I&#146;d prefer to just move the std include files ahead
</span><br>
<span class="quotelev1">&gt; of the opal_config.h include.  I&#146;d like to do this today unless someone objects.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m somewhat surprised I&#146;m the only one seeing this though.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15495.php">http://www.open-mpi.org/community/lists/devel/2014/08/15495.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15496/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15497.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
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
