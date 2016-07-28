<?
$subject_val = "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 15:20:44 2012" -->
<!-- isoreceived="20120216202044" -->
<!-- sent="Thu, 16 Feb 2012 12:20:35 -0800" -->
<!-- isosent="20120216202035" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]" -->
<!-- id="4F3D6513.8020803_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 15:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Reply:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After seeing some odd behaviors in a build of the trunk last night, I 
<br>
took a closer look at the configure probe for -fvisibility support and 
<br>
found that recent changes where applied incompletely/incorrectly.  What 
<br>
is currently in opal/config/opal_check_visibility.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LINK_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__attribute__((visibility(&quot;default&quot;))) int foo;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]],[[fprintf(stderr, &quot;Hello, world\n&quot;);]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test -s conftest.err],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$GREP -iq visibility conftest.err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If we find &quot;visibility&quot; in the stderr, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# assume it doesn't work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$?&quot; = &quot;0&quot;], [opal_add=])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>Here is a dissection of the args to AC_LINK_IFELSE:
<br>
arg1: AC_LANG_PROGRAM
<br>
arg2: action-on-success is EMPTY
<br>
arg3: action-on-failure is an AS_IF
<br>
<p>Unfortunately that is incorrect in 3 ways:
<br>
<p>Error #1:
<br>
The AS_IF belongs as arg2 (where there is an empty &quot;[]&quot; now).
<br>
That is because the intent of that logic is to &quot;double check&quot; a 
<br>
successful link to check the stderr for &quot;visibility&quot;.
<br>
The idea there is that warnings like &quot;unknown attribute visibility 
<br>
ignored&quot; will be treated as a fail.
<br>
That was the case in the &quot;original&quot; (r22138) version of the logic as well.
<br>
<p>However, it appears that this logic has been broken since r23923 when 
<br>
Jeff recoded AC_TRY_LINK to AC_LINK_IFELSE in Oct 2010.
<br>
Those changes failed to account for the fact that LINK_IFELSE takes 1 
<br>
argument for the PROGRAM where TRY_LINK has separate INCLUDE and BODY 
<br>
arguments.  That lead to the unintended movement of the 
<br>
AS_IF[...grep...] logic from the on-success to the on-failure slots, and 
<br>
nothing has been the same since.
<br>
<p>Error #2:
<br>
action-on-failure should be another instance of &quot;[opal_add=]&quot;, do avoid 
<br>
using visibility if the link test failed.
<br>
This had survived r23923 as a &quot;extra&quot; 4th argument to AC_LINK_IFELSE, 
<br>
and was later removed.
<br>
This error leads to use of -fvisiblity on compilers that totally failed 
<br>
to compile or link the test!
<br>
<p>Error #3:
<br>
Missing include of stdio.h leads some compilers to fail the test 
<br>
unnecessarily.
<br>
Unlike the other 2 problems, this leads to REJECTING visibility even 
<br>
though it is working (except that error #2 currently hides this).
<br>
<p>These problems, which I previously detailed in off-list emails to Jeff, 
<br>
apparently got lost in the rush to get hwloc-1.3.2 out the door.
<br>
Here is the relatively simple correction:
<br>
<p>--- ompi-trunk/opal/config/opal_check_visibility.m4     (revision 25941)
<br>
+++ ompi-trunk/opal/config/opal_check_visibility.m4     (working copy)
<br>
@@ -56,15 +56,15 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if $CC supports $opal_add])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LINK_IFELSE([AC_LANG_PROGRAM([[
<br>
+            #include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__attribute__((visibility(&quot;default&quot;))) int foo;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]],[[fprintf(stderr, &quot;Hello, world\n&quot;);]])],
<br>
-            [],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test -s conftest.err],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$GREP -iq visibility conftest.err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If we find &quot;visibility&quot; in the stderr, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# assume it doesn't work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$?&quot; = &quot;0&quot;], [opal_add=])])
<br>
-            ])
<br>
+            ], [opal_add=])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$opal_add&quot; = &quot;&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])])
<br>
<p>&lt;digression&gt;
<br>
Just to confuse things, the instance of OPAL_CHECK_VISIBLITY in the 
<br>
libevent2013 configure is getting the result right &quot;by accident&quot;.
<br>
In that case the CFLAGS give more verbose warnings and the LINK fails 
<br>
(due to missing stdio.h), while yielding &quot;visibility&quot; in the warning 
<br>
message:
<br>
<span class="quotelev1">&gt; conftest.c(87): remark #1418: external definition with no prior 
</span><br>
<span class="quotelev1">&gt; declaration
</span><br>
<span class="quotelev1">&gt;               __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
&lt;/digression&gt;
<br>
<p>Unfortunately, the incorrect logic made it into hwloc-1.3.2.
<br>
So, I'd suggest fixing this in OMPI's embedded hwloc and hwloc's trunk also.
<br>
<p>My sincere apologies for not having caught this in the hwloc-1.3.2 
<br>
testing where Jeff and I thought we had this issue fixed.
<br>
I don't know for sure how I missed re-testing the final cut, but can 
<br>
only guess that I left --disable-visibility in my testing scripts.
<br>
<p>-Paul &quot;thorough testing is a double-edged sword&quot; Hargrove
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>Reply:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
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
