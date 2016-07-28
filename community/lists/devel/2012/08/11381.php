<?
$subject_val = "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 17:02:02 2012" -->
<!-- isoreceived="20120806210202" -->
<!-- sent="Mon, 6 Aug 2012 17:01:57 -0400" -->
<!-- isosent="20120806210157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)" -->
<!-- id="E414B9A4-4384-4823-92E8-AFA591322DC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2007795541.317426.1344024185661.JavaMail.mail_at_webmail11" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 17:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>In reply to:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem; I missed updating a variable in my patch.  I verified this by just configuring OMPI on my Mac the same way you did (or something close to it):
<br>
<p>./configure --disable-mpi-fortran CC=clang CXX=clang++ CFLAGS=&quot;-Os -w -pipe -march=native -Xclang -target-feature -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include&quot; ...
<br>
<p>With my new patch (below), this now works properly -- both -Xclangs are preserved. I'll go commit this to the OMPI SVN trunk and bring it over to v1.6 and v1.7.
<br>
<p>Index: opal/config/opal_functions.m4
<br>
===================================================================
<br>
--- opal/config/opal_functions.m4	(revision 26954)
<br>
+++ opal/config/opal_functions.m4	(working copy)
<br>
@@ -271,6 +271,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_i=&quot;`expr $ompi_i + 1`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;
<br>
+    # Check for special cases where we do want to allow repeated
<br>
+    # arguments (per
<br>
+    # <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11362.php">http://www.open-mpi.org/community/lists/devel/2012/08/11362.php</a>).
<br>
+
<br>
+    case $val in
<br>
+    -Xclang)  
<br>
+            ompi_found=0 
<br>
+            ompi_i=`expr $ompi_count + 1`
<br>
+            ;;
<br>
+    esac
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If we didn't find the token, add it to the &quot;array&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ompi_found&quot; = &quot;0&quot;; then
<br>
<p><p>On Aug 3, 2012, at 4:03 PM, P. Martin wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the config.log from 1.6.1rc2.  My previous email was
</span><br>
<span class="quotelev1">&gt; the config.log from 1.6.0.  Sorry about that.  Also my setup is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; autoconf 2.69
</span><br>
<span class="quotelev1">&gt; automake 1.12.2
</span><br>
<span class="quotelev1">&gt; libtool 2.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:11649: checking if /usr/bin/clang supports -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; configure:11665: /usr/bin/clang -c -DNDEBUG -Os -w -pipe -march=native -Xclang -target-feature -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11665: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11672: result: yes
</span><br>
<span class="quotelev1">&gt; configure:11756: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure:11890: checking if /usr/bin/clang supports __builtin_expect
</span><br>
<span class="quotelev1">&gt; configure:11907: /usr/bin/clang -o conftest -DNDEBUG -Os -w -pipe -march=native -Xclang -Xclang -aes -Qunused-arguments -mmacosx-version-min=10.8 -finline-functions -fno-strict-aliasing -isystem /usr/local/include -L/usr/local/lib conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; error: unknown argument: '-Xclang'
</span><br>
<span class="quotelev1">&gt; configure:11907: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11382.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11380.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>In reply to:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
