<?
$subject_val = "Re: [OMPI devel] about r32685";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 02:02:51 2014" -->
<!-- isoreceived="20140909060251" -->
<!-- sent="Tue, 09 Sep 2014 15:02:55 +0900" -->
<!-- isosent="20140909060255" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about r32685" -->
<!-- id="540E980F.7050205_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="540E9069.3080009_at_inria.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 02:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15778.php">Brice Goglin: "Re: [OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Brice Goglin: "Re: [OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>the goal of the test is to check whether a function declaration is
<br>
already present
<br>
in one of the header.
<br>
in order to achieve this, the test will redeclare the function with an
<br>
absurd prototype :
<br>
<p>strncasecmp(int,long,int,long,int,long,int,long,int,long);
<br>
<p>/* by the way, there is no prototype for the returned value if any */
<br>
<p>the test *assumes* the compiler will fail with an error if the function
<br>
is re-declared with a different prototype.
<br>
this asumption is just wrong (well, at least with clang 3.2 and intel
<br>
compilers)
<br>
<p>my patch redeclares the function as a variable instead of a function
<br>
with a different prototype,
<br>
and this leads to a failure with gnu, (all) clang and intel compilers
<br>
(this is all i could test so far)
<br>
<p>as long as the _HWLOC_CHECK_DECL is invoked on a function and not on a
<br>
global variable,
<br>
i do not think my patch can break anything.
<br>
<p>an other option could be to use the preprocessor and grep :
<br>
$CC -E conftest.1.c | egrep -q '[[:space:]]+strncasecmp[[:space:]]+'
<br>
but i do not believe this is the way to go ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/09/09 14:30, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The strange configure check comes from this commit
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/6a9299ce9d1cb1c13b3b346fe6fdfed2df75c672">https://github.com/open-mpi/hwloc/commit/6a9299ce9d1cb1c13b3b346fe6fdfed2df75c672</a>
</span><br>
<span class="quotelev1">&gt; Are you sure your patch won't break something else?
</span><br>
<span class="quotelev1">&gt; I'll ask Pavan what he thinks about your patch.
</span><br>
<span class="quotelev1">&gt; I agree that it's crazy we don't find strncasecmp on some Linux boxes
</span><br>
<span class="quotelev1">&gt; but this detection code is already a mess so I'd rather no change it again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09/09/2014 04:56, Gilles Gouaillardet a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok, let me clarify my point :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tolower() is invoked in :
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/src/misc.c
</span><br>
<span class="quotelev2">&gt;&gt; and ctype.h is already #include'd in this file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tolower() is also invoked in :
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/hwloc/hwloc191/hwloc/include/private/misc.h
</span><br>
<span class="quotelev2">&gt;&gt; *only* if HWLOC_HAVE_DECL_STRNCASECMP is not #define'd :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static __hwloc_inline int hwloc_strncasecmp(const char *s1, const char
</span><br>
<span class="quotelev2">&gt;&gt; *s2, size_t n)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HWLOC_HAVE_DECL_STRNCASECMP
</span><br>
<span class="quotelev2">&gt;&gt;   return strncasecmp(s1, s2, n);
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;   while (n) {
</span><br>
<span class="quotelev2">&gt;&gt;     char c1 = tolower(*s1), c2 = tolower(*s2);
</span><br>
<span class="quotelev2">&gt;&gt;     if (!c1 || !c2 || c1 != c2)
</span><br>
<span class="quotelev2">&gt;&gt;       return c1-c2;
</span><br>
<span class="quotelev2">&gt;&gt;     n--; s1++; s2++;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my point was that on your CentOS box, HWLOC_HAVE_DECL_STRNCASECMP
</span><br>
<span class="quotelev2">&gt;&gt; *should* have been #define'd by configure,
</span><br>
<span class="quotelev2">&gt;&gt; even if you are using intel or clang 3.2 compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/09/09 11:47, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll have to let Brice comment on the config change. All I can say is that &quot;tolower&quot; on my CentOS box is defined in &lt;ctype.h&gt;, and that has to be included in the misc.h header.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 8, 2014, at 5:49 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph and Brice,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i noted Ralph commited r32685 in order to fix a problem with Intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The very similar issue occurs with clang 3.2 (gcc and clang 3.4 are ok
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for me)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; imho, the root cause is in the hwloc configure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in this case, configure fails to detect strncasecmp is part of the C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in order to achieve this, the conftest.1.c program is compiled and a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failure means that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp is supported since it is declared in some C include files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc and clang 3.4 both fail to compile this program :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gcc -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592: warning: data definition has no type or storage class
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592: error: conflicting types for &#145;strncasecmp&#146;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ clang --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clang version 3.4 (tags/RELEASE_34/final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Target: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592:8: error: conflicting types for 'strncasecmp'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/include/string.h:540:12: note: previous declaration is here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:596:19: error: too many arguments to function call,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3, have 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(1,2,3,4,5,6,7,8,9,10);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~~~~~~~~~~~ ^~~~~~~~~~~~~~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 warning and 2 errors generated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but clang 3.2 and icc simply issue a warning and no error :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ clang --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clang version 3.2 (tags/RELEASE_32/final)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/conftest.1.c:592:8: warning: incompatible redeclaration of library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'strncasecmp'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/include/string.h:540:12: note: 'strncasecmp' is a builtin with type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (const char *, const char *, size_t)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 warnings generated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ icc -c conftest.1.c ; echo $?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conftest.1.c(592): warning #77: this declaration has no storage class or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type specifier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conftest.1.c(592): warning #147: declaration is incompatible with &quot;int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(const char *, const char *, size_t={unsigned long})&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (declared at line 540 of &quot;/usr/include/string.h&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the attached hwloc_config.patch is used in order to make the test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program slightly different (conftest.2.c) and it does fail with all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that being said, r32685 might not be reversed since in the case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strncasecmp is not supported by the system (i do not even know if such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; os exist)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ctype.h must be #include'd in order to get the prototype of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tolower() function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you please review the hwloc_config.patch and comment ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;conftest.1.c&gt;&lt;hwloc_config.patch&gt;&lt;conftest.2.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15775.php">http://www.open-mpi.org/community/lists/devel/2014/09/15775.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15776.php">http://www.open-mpi.org/community/lists/devel/2014/09/15776.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15777.php">http://www.open-mpi.org/community/lists/devel/2014/09/15777.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15778.php">http://www.open-mpi.org/community/lists/devel/2014/09/15778.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15780.php">Gilles Gouaillardet: "[OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15778.php">Brice Goglin: "Re: [OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Brice Goglin: "Re: [OMPI devel] about r32685"</a>
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
