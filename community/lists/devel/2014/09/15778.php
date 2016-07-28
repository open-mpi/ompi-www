<?
$subject_val = "Re: [OMPI devel] about r32685";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 01:30:24 2014" -->
<!-- isoreceived="20140909053024" -->
<!-- sent="Tue, 09 Sep 2014 07:30:17 +0200" -->
<!-- isosent="20140909053017" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about r32685" -->
<!-- id="540E9069.3080009_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="540E6C55.7030003_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about r32685<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 01:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>The strange configure check comes from this commit
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="https://github.com/open-mpi/hwloc/commit/6a9299ce9d1cb1c13b3b346fe6fdfed2df75c672">https://github.com/open-mpi/hwloc/commit/6a9299ce9d1cb1c13b3b346fe6fdfed2df75c672</a>
<br>
Are you sure your patch won't break something else?
<br>
I'll ask Pavan what he thinks about your patch.
<br>
I agree that it's crazy we don't find strncasecmp on some Linux boxes
<br>
but this detection code is already a mess so I'd rather no change it again.
<br>
<p>Brice
<br>
<p><p><p>Le 09/09/2014 04:56, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, let me clarify my point :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tolower() is invoked in :
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/src/misc.c
</span><br>
<span class="quotelev1">&gt; and ctype.h is already #include'd in this file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tolower() is also invoked in :
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/misc.h
</span><br>
<span class="quotelev1">&gt; *only* if HWLOC_HAVE_DECL_STRNCASECMP is not #define'd :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __hwloc_inline int hwloc_strncasecmp(const char *s1, const char
</span><br>
<span class="quotelev1">&gt; *s2, size_t n)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_HAVE_DECL_STRNCASECMP
</span><br>
<span class="quotelev1">&gt;   return strncasecmp(s1, s2, n);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;   while (n) {
</span><br>
<span class="quotelev1">&gt;     char c1 = tolower(*s1), c2 = tolower(*s2);
</span><br>
<span class="quotelev1">&gt;     if (!c1 || !c2 || c1 != c2)
</span><br>
<span class="quotelev1">&gt;       return c1-c2;
</span><br>
<span class="quotelev1">&gt;     n--; s1++; s2++;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my point was that on your CentOS box, HWLOC_HAVE_DECL_STRNCASECMP
</span><br>
<span class="quotelev1">&gt; *should* have been #define'd by configure,
</span><br>
<span class="quotelev1">&gt; even if you are using intel or clang 3.2 compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/09/09 11:47, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to let Brice comment on the config change. All I can say is that &quot;tolower&quot; on my CentOS box is defined in &lt;ctype.h&gt;, and that has to be included in the misc.h header.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 8, 2014, at 5:49 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i noted Ralph commited r32685 in order to fix a problem with Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The very similar issue occurs with clang 3.2 (gcc and clang 3.4 are ok
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for me)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imho, the root cause is in the hwloc configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case, configure fails to detect strncasecmp is part of the C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in order to achieve this, the conftest.1.c program is compiled and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure means that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp is supported since it is declared in some C include files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc and clang 3.4 both fail to compile this program :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592: warning: data definition has no type or storage class
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592: error: conflicting types for &#145;strncasecmp&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ clang --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang version 3.4 (tags/RELEASE_34/final)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592:8: error: conflicting types for 'strncasecmp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:540:12: note: previous declaration is here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:596:19: error: too many arguments to function call,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3, have 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(1,2,3,4,5,6,7,8,9,10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~~~~~~~~~~~ ^~~~~~~~~~~~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 warning and 2 errors generated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but clang 3.2 and icc simply issue a warning and no error :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ clang --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clang version 3.2 (tags/RELEASE_32/final)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: incompatible redeclaration of library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'strncasecmp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/string.h:540:12: note: 'strncasecmp' is a builtin with type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (const char *, const char *, size_t)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 warnings generated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ icc -c conftest.1.c ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.1.c(592): warning #77: this declaration has no storage class or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type specifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.1.c(592): warning #147: declaration is incompatible with &quot;int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(const char *, const char *, size_t={unsigned long})&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (declared at line 540 of &quot;/usr/include/string.h&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the attached hwloc_config.patch is used in order to make the test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program slightly different (conftest.2.c) and it does fail with all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, r32685 might not be reversed since in the case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncasecmp is not supported by the system (i do not even know if such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; os exist)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ctype.h must be #include'd in order to get the prototype of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tolower() function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please review the hwloc_config.patch and comment ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;conftest.1.c&gt;&lt;hwloc_config.patch&gt;&lt;conftest.2.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15775.php">http://www.open-mpi.org/community/lists/devel/2014/09/15775.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15776.php">http://www.open-mpi.org/community/lists/devel/2014/09/15776.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15777.php">http://www.open-mpi.org/community/lists/devel/2014/09/15777.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
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
