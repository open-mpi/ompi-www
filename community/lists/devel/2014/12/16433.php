<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 06:29:33 2014" -->
<!-- isoreceived="20141204112933" -->
<!-- sent="Thu, 4 Dec 2014 11:29:32 +0000" -->
<!-- isosent="20141204112932" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="B32494C4-1D21-4578-8131-5E291B25AFDA_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2Qj5qeywE77BMN6Vy3oWf52kZjGrP_AjDMh4WGsxjhLvBDgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 06:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16432.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16432.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2014, at 11:35 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Jeff, I must admit that I don't completely understand how your fix work. Can you explan me why this veriant was failing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=&quot;-I$srcdir/opal/libltdl/&quot;
</span><br>
<span class="quotelev1">&gt; AC_EGREP_HEADER([lt_dladvise_init], [$srcdir/opal/libltdl/ltdl.h]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while the new one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=&quot;-I$srcdir -I$srcdir/opal/libltdl/&quot;
</span><br>
<span class="quotelev1">&gt; AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
</span><br>
<span class="quotelev1">&gt;                          [OPAL_HAVE_LTDL_ADVISE=1])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there additional header files that are included in conftest.c and has to be reached through $srcdir?
</span><br>

<br>
No, it was simpler than that: &quot;.&quot; (i.e., $srcdir in a non-VPATH build) is not necessarily in the default include search path for &lt;&gt; files (which is what AC_EGREP_HEADER uses).  For example:
<br>

<br>
-----
<br>
[3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
<br>
$ cat test.c
<br>
#include &lt;./opal/libltdl/ltdl.h&gt;
<br>
[3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
<br>
$ gcc -E test.c &gt; /dev/null
<br>
test.c:1:33: fatal error: ./opal/libltdl/ltdl.h: No such file or directory
<br>
&nbsp;#include &lt;./opal/libltdl/ltdl.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
-----
<br>

<br>
Notice that if I don't have -I. (i.e., -I$srcdir), the above compilation fails because it can't find &lt;./opal/libltdl/ltdl.h&gt;.
<br>

<br>
But if I add -I., then the file can be found:
<br>

<br>
-----
<br>
[3:24] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
<br>
$ gcc -E test.c -I. &gt; /dev/null
<br>
[3:25] savbu-usnic-a:~/g/ompi (topic/master-libfabric&#226;&#151;&#143;)
<br>
$ echo $status
<br>
0
<br>
-----
<br>

<br>
And since we're -I$srcdir, there's no need to include $srcdir in the filename.  Indeed, if $srcdir==., then adding it in the filename is harmless.  But if $srcdir=/path/to/somewhere, it's actually a problem.  Regardless, $srcdir should no longer be in the filename.
<br>

<br>
The part I forgot was that your version of libtool also requires some sub header files in the $srcdir/opal/libltdl tree, so a -I for that also needs to be there.
<br>

<br>
Make sense?
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16432.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16432.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
