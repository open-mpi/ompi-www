<?
$subject_val = "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 17:00:08 2012" -->
<!-- isoreceived="20120216220008" -->
<!-- sent="Thu, 16 Feb 2012 17:00:02 -0500" -->
<!-- isosent="20120216220002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]" -->
<!-- id="AD270693-3203-47EF-8675-86D3E7305CB9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3D6513.8020803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 17:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!
<br>
<p>Many thanks -- I'll apply this in all the right places...
<br>
<p><p>On Feb 16, 2012, at 3:20 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After seeing some odd behaviors in a build of the trunk last night, I took a closer look at the configure probe for -fvisibility support and found that recent changes where applied incompletely/incorrectly.  What is currently in opal/config/opal_check_visibility.m4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        AC_LINK_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;            __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
<span class="quotelev1">&gt;            ]],[[fprintf(stderr, &quot;Hello, world\n&quot;);]])],
</span><br>
<span class="quotelev1">&gt;            [],
</span><br>
<span class="quotelev1">&gt;            [AS_IF([test -s conftest.err],
</span><br>
<span class="quotelev1">&gt;                   [$GREP -iq visibility conftest.err
</span><br>
<span class="quotelev1">&gt;                    # If we find &quot;visibility&quot; in the stderr, then
</span><br>
<span class="quotelev1">&gt;                    # assume it doesn't work
</span><br>
<span class="quotelev1">&gt;                    AS_IF([test &quot;$?&quot; = &quot;0&quot;], [opal_add=])])
</span><br>
<span class="quotelev1">&gt;            ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a dissection of the args to AC_LINK_IFELSE:
</span><br>
<span class="quotelev1">&gt; arg1: AC_LANG_PROGRAM
</span><br>
<span class="quotelev1">&gt; arg2: action-on-success is EMPTY
</span><br>
<span class="quotelev1">&gt; arg3: action-on-failure is an AS_IF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately that is incorrect in 3 ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error #1:
</span><br>
<span class="quotelev1">&gt; The AS_IF belongs as arg2 (where there is an empty &quot;[]&quot; now).
</span><br>
<span class="quotelev1">&gt; That is because the intent of that logic is to &quot;double check&quot; a successful link to check the stderr for &quot;visibility&quot;.
</span><br>
<span class="quotelev1">&gt; The idea there is that warnings like &quot;unknown attribute visibility ignored&quot; will be treated as a fail.
</span><br>
<span class="quotelev1">&gt; That was the case in the &quot;original&quot; (r22138) version of the logic as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it appears that this logic has been broken since r23923 when Jeff recoded AC_TRY_LINK to AC_LINK_IFELSE in Oct 2010.
</span><br>
<span class="quotelev1">&gt; Those changes failed to account for the fact that LINK_IFELSE takes 1 argument for the PROGRAM where TRY_LINK has separate INCLUDE and BODY arguments.  That lead to the unintended movement of the AS_IF[...grep...] logic from the on-success to the on-failure slots, and nothing has been the same since.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error #2:
</span><br>
<span class="quotelev1">&gt; action-on-failure should be another instance of &quot;[opal_add=]&quot;, do avoid using visibility if the link test failed.
</span><br>
<span class="quotelev1">&gt; This had survived r23923 as a &quot;extra&quot; 4th argument to AC_LINK_IFELSE, and was later removed.
</span><br>
<span class="quotelev1">&gt; This error leads to use of -fvisiblity on compilers that totally failed to compile or link the test!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error #3:
</span><br>
<span class="quotelev1">&gt; Missing include of stdio.h leads some compilers to fail the test unnecessarily.
</span><br>
<span class="quotelev1">&gt; Unlike the other 2 problems, this leads to REJECTING visibility even though it is working (except that error #2 currently hides this).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These problems, which I previously detailed in off-list emails to Jeff, apparently got lost in the rush to get hwloc-1.3.2 out the door.
</span><br>
<span class="quotelev1">&gt; Here is the relatively simple correction:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/config/opal_check_visibility.m4     (revision 25941)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/config/opal_check_visibility.m4     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -56,15 +56,15 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         AC_MSG_CHECKING([if $CC supports $opal_add])
</span><br>
<span class="quotelev1">&gt;         AC_LINK_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +            #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;             __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
<span class="quotelev1">&gt;             ]],[[fprintf(stderr, &quot;Hello, world\n&quot;);]])],
</span><br>
<span class="quotelev1">&gt; -            [],
</span><br>
<span class="quotelev1">&gt;             [AS_IF([test -s conftest.err],
</span><br>
<span class="quotelev1">&gt;                    [$GREP -iq visibility conftest.err
</span><br>
<span class="quotelev1">&gt;                     # If we find &quot;visibility&quot; in the stderr, then
</span><br>
<span class="quotelev1">&gt;                     # assume it doesn't work
</span><br>
<span class="quotelev1">&gt;                     AS_IF([test &quot;$?&quot; = &quot;0&quot;], [opal_add=])])
</span><br>
<span class="quotelev1">&gt; -            ])
</span><br>
<span class="quotelev1">&gt; +            ], [opal_add=])
</span><br>
<span class="quotelev1">&gt;         AS_IF([test &quot;$opal_add&quot; = &quot;&quot;],
</span><br>
<span class="quotelev1">&gt;               [AC_MSG_RESULT([no])],
</span><br>
<span class="quotelev1">&gt;               [AC_MSG_RESULT([yes])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;digression&gt;
</span><br>
<span class="quotelev1">&gt; Just to confuse things, the instance of OPAL_CHECK_VISIBLITY in the libevent2013 configure is getting the result right &quot;by accident&quot;.
</span><br>
<span class="quotelev1">&gt; In that case the CFLAGS give more verbose warnings and the LINK fails (due to missing stdio.h), while yielding &quot;visibility&quot; in the warning message:
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c(87): remark #1418: external definition with no prior declaration
</span><br>
<span class="quotelev2">&gt;&gt;              __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
<span class="quotelev1">&gt; &lt;/digression&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, the incorrect logic made it into hwloc-1.3.2.
</span><br>
<span class="quotelev1">&gt; So, I'd suggest fixing this in OMPI's embedded hwloc and hwloc's trunk also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My sincere apologies for not having caught this in the hwloc-1.3.2 testing where Jeff and I thought we had this issue fixed.
</span><br>
<span class="quotelev1">&gt; I don't know for sure how I missed re-testing the final cut, but can only guess that I left --disable-visibility in my testing scripts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul &quot;thorough testing is a double-edged sword&quot; Hargrove
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10463.php">Paul H. Hargrove: "[OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
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
