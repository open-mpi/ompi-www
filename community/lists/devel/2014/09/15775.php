<?
$subject_val = "[OMPI devel] about r32685";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 20:49:52 2014" -->
<!-- isoreceived="20140909004952" -->
<!-- sent="Tue, 09 Sep 2014 09:49:55 +0900" -->
<!-- isosent="20140909004955" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] about r32685" -->
<!-- id="540E4EB3.20705_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] about r32685<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-08 20:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15774.php">Gilles Gouaillardet: "[OMPI devel] f08 bindings and weak symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Brice,
<br>
<p>i noted Ralph commited r32685 in order to fix a problem with Intel
<br>
compilers.
<br>
The very similar issue occurs with clang 3.2 (gcc and clang 3.4 are ok
<br>
for me)
<br>
<p>imho, the root cause is in the hwloc configure.
<br>
in this case, configure fails to detect strncasecmp is part of the C
<br>
include files.
<br>
<p>in order to achieve this, the conftest.1.c program is compiled and a
<br>
failure means that
<br>
strncasecmp is supported since it is declared in some C include files.
<br>
<p>gcc and clang 3.4 both fail to compile this program :
<br>
<p>$ gcc -c /tmp/conftest.1.c ; echo $?
<br>
/tmp/conftest.1.c:592: warning: data definition has no type or storage class
<br>
/tmp/conftest.1.c:592: error: conflicting types for &#145;strncasecmp&#146;
<br>
1
<br>
<p>$ clang --version
<br>
clang version 3.4 (tags/RELEASE_34/final)
<br>
Target: x86_64-redhat-linux-gnu
<br>
Thread model: posix
<br>
$ clang -c /tmp/conftest.1.c ; echo $?
<br>
/tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
<br>
[-Wimplicit-int]
<br>
strncasecmp(int,long,int,long,int,long,int,long,int,long);
<br>
^~~~~~~~~~~
<br>
/tmp/conftest.1.c:592:8: error: conflicting types for 'strncasecmp'
<br>
/usr/include/string.h:540:12: note: previous declaration is here
<br>
extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
<br>
^
<br>
/tmp/conftest.1.c:596:19: error: too many arguments to function call,
<br>
expected
<br>
3, have 10
<br>
strncasecmp(1,2,3,4,5,6,7,8,9,10);
<br>
~~~~~~~~~~~ ^~~~~~~~~~~~~~
<br>
1 warning and 2 errors generated.
<br>
1
<br>
<p><p>but clang 3.2 and icc simply issue a warning and no error :
<br>
<p>$ clang --version
<br>
clang version 3.2 (tags/RELEASE_32/final)
<br>
Target: x86_64-unknown-linux-gnu
<br>
Thread model: posix
<br>
$ clang -c /tmp/conftest.1.c ; echo $?
<br>
/tmp/conftest.1.c:592:8: warning: type specifier missing, defaults to 'int'
<br>
[-Wimplicit-int]
<br>
strncasecmp(int,long,int,long,int,long,int,long,int,long);
<br>
^~~~~~~~~~~
<br>
/tmp/conftest.1.c:592:8: warning: incompatible redeclaration of library
<br>
function
<br>
'strncasecmp'
<br>
/usr/include/string.h:540:12: note: 'strncasecmp' is a builtin with type
<br>
'int
<br>
(const char *, const char *, size_t)'
<br>
extern int strncasecmp (__const char *__s1, __const char *__s2, size_t __n)
<br>
^
<br>
2 warnings generated.
<br>
0
<br>
<p>$ icc -c conftest.1.c ; echo $?
<br>
conftest.1.c(592): warning #77: this declaration has no storage class or
<br>
type specifier
<br>
strncasecmp(int,long,int,long,int,long,int,long,int,long);
<br>
^
<br>
<p>conftest.1.c(592): warning #147: declaration is incompatible with &quot;int
<br>
strncasecmp(const char *, const char *, size_t={unsigned long})&quot;
<br>
(declared at line 540 of &quot;/usr/include/string.h&quot;)
<br>
strncasecmp(int,long,int,long,int,long,int,long,int,long);
<br>
^
<br>
<p>0
<br>
<p><p>the attached hwloc_config.patch is used in order to make the test
<br>
program slightly different (conftest.2.c) and it does fail with all the
<br>
compilers.
<br>
<p><p>that being said, r32685 might not be reversed since in the case
<br>
strncasecmp is not supported by the system (i do not even know if such
<br>
os exist)
<br>
ctype.h must be #include'd in order to get the prototype of the
<br>
tolower() function.
<br>
<p><p>could you please review the hwloc_config.patch and comment ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>


<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15775/conftest.1.c">conftest.1.c</a>
</ul>
<!-- attachment="conftest.1.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15775/hwloc_config.patch">hwloc_config.patch</a>
</ul>
<!-- attachment="hwloc_config.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15775/conftest.2.c">conftest.2.c</a>
</ul>
<!-- attachment="conftest.2.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15774.php">Gilles Gouaillardet: "[OMPI devel] f08 bindings and weak symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
<li><strong>Reply:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI devel] about r32685"</a>
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
