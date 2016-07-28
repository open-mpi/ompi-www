<?
$subject_val = "Re: [OMPI devel] about r32685";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 22:48:25 2014" -->
<!-- isoreceived="20140909024825" -->
<!-- sent="Mon, 8 Sep 2014 19:47:51 -0700" -->
<!-- isosent="20140909024751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about r32685" -->
<!-- id="71DF8ECD-14DA-47B9-9774-184BD833B343_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="540E4EB3.20705_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-08 22:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll have to let Brice comment on the config change. All I can say is that &quot;tolower&quot; on my CentOS box is defined in &lt;ctype.h&gt;, and that has to be included in the misc.h header.
<br>
<p><p>On Sep 8, 2014, at 5:49 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noted Ralph commited r32685 in order to fix a problem with Intel
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt; The very similar issue occurs with clang 3.2 (gcc and clang 3.4 are ok
</span><br>
<span class="quotelev1">&gt; for me)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imho, the root cause is in the hwloc configure.
</span><br>
<span class="quotelev1">&gt; in this case, configure fails to detect strncasecmp is part of the C
</span><br>
<span class="quotelev1">&gt; include files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in order to achieve this, the conftest.1.c program is compiled and a
</span><br>
<span class="quotelev1">&gt; failure means that
</span><br>
<span class="quotelev1">&gt; strncasecmp is supported since it is declared in some C include files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc and clang 3.4 both fail to compile this program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592: warning: data definition has no type or storage class
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592: error: conflicting types for &#145;strncasecmp&#146;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ clang --version
</span><br>
<span class="quotelev1">&gt; clang version 3.4 (tags/RELEASE_34/final)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev1">&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev1">&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev1">&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592:8: error: conflicting types for 'strncasecmp'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:540:12: note: previous declaration is here
</span><br>
<span class="quotelev1">&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:596:19: error: too many arguments to function call,
</span><br>
<span class="quotelev1">&gt; expected
</span><br>
<span class="quotelev1">&gt; 3, have 10
</span><br>
<span class="quotelev1">&gt; strncasecmp(1,2,3,4,5,6,7,8,9,10);
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~ ^~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; 1 warning and 2 errors generated.
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but clang 3.2 and icc simply issue a warning and no error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ clang --version
</span><br>
<span class="quotelev1">&gt; clang version 3.2 (tags/RELEASE_32/final)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; $ clang -c /tmp/conftest.1.c ; echo $?
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
</span><br>
<span class="quotelev1">&gt; [-Wimplicit-int]
</span><br>
<span class="quotelev1">&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev1">&gt; ^~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; /tmp/conftest.1.c:592:8: warning: incompatible redeclaration of library
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; 'strncasecmp'
</span><br>
<span class="quotelev1">&gt; /usr/include/string.h:540:12: note: 'strncasecmp' is a builtin with type
</span><br>
<span class="quotelev1">&gt; 'int
</span><br>
<span class="quotelev1">&gt; (const char *, const char *, size_t)'
</span><br>
<span class="quotelev1">&gt; extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; 2 warnings generated.
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ icc -c conftest.1.c ; echo $?
</span><br>
<span class="quotelev1">&gt; conftest.1.c(592): warning #77: this declaration has no storage class or
</span><br>
<span class="quotelev1">&gt; type specifier
</span><br>
<span class="quotelev1">&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.1.c(592): warning #147: declaration is incompatible with &quot;int
</span><br>
<span class="quotelev1">&gt; strncasecmp(const char *, const char *, size_t={unsigned long})&quot;
</span><br>
<span class="quotelev1">&gt; (declared at line 540 of &quot;/usr/include/string.h&quot;)
</span><br>
<span class="quotelev1">&gt; strncasecmp(int,long,int,long,int,long,int,long,int,long);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached hwloc_config.patch is used in order to make the test
</span><br>
<span class="quotelev1">&gt; program slightly different (conftest.2.c) and it does fail with all the
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said, r32685 might not be reversed since in the case
</span><br>
<span class="quotelev1">&gt; strncasecmp is not supported by the system (i do not even know if such
</span><br>
<span class="quotelev1">&gt; os exist)
</span><br>
<span class="quotelev1">&gt; ctype.h must be #include'd in order to get the prototype of the
</span><br>
<span class="quotelev1">&gt; tolower() function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please review the hwloc_config.patch and comment ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;conftest.1.c&gt;&lt;hwloc_config.patch&gt;&lt;conftest.2.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15775.php">http://www.open-mpi.org/community/lists/devel/2014/09/15775.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<li><strong>In reply to:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15777.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
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
