<?
$subject_val = "[OMPI devel] vt-integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 22:47:57 2007" -->
<!-- isoreceived="20071127034757" -->
<!-- sent="Mon, 26 Nov 2007 22:47:45 -0500" -->
<!-- isosent="20071127034745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] vt-integration" -->
<!-- id="ECD760D6-BDA7-4799-A0A2-7399A265253C_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] vt-integration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-26 22:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2666.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>Previous message:</strong> <a href="2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, VT fails to compile on OS X Leopard (10.5.1).
<br>
<p>- Is there a way to remove the anonymous variadic macros?
<br>
- open64, creat64, etc. do not appear to exist on OS X.
<br>
<p>I don't know if you want to go through the work of supporting OS X or  
<br>
not -- if not, we should put in appropriate controls so that VT will  
<br>
&quot;turn itself off&quot; when it detects that it is on a system that does not  
<br>
support what it needs (e.g., open64, creat64, ...etc.).
<br>
<p>Here's the output from a build on OS X 10.5.1:
<br>
<p>Making all in vtlib
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
<br>
otflib -I../extlib/otf/otflib      -DBINDIR=\&quot;/Users/jsquyres/bogus/bin 
<br>
\&quot; -DDATADIR=\&quot;/Users/jsquyres/bogus/share/vampirtrace\&quot; -DRFG   - 
<br>
DVT_IOWRAP  -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing- 
<br>
prototypes -Wstrict-prototypes -Wcomment -pedantic -Wno-long-double - 
<br>
Werror-implicit-function-declaration -finline-functions -fno-strict- 
<br>
aliasing  -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o  
<br>
vt_iowrap.o vt_iowrap.c
<br>
In file included from vt_iowrap.c:32:
<br>
vt_iowrap.h:239:20: warning: anonymous variadic macros were introduced  
<br>
in C99
<br>
vt_iowrap.h:282:43: warning: anonymous variadic macros were introduced  
<br>
in C99
<br>
vt_iowrap.h:328:33: warning: anonymous variadic macros were introduced  
<br>
in C99
<br>
vt_iowrap.h:335:38: warning: anonymous variadic macros were introduced  
<br>
in C99
<br>
vt_iowrap.c: In function &#145;open&#146;:
<br>
vt_iowrap.c:170: warning: &#145;mode_t&#146; is promoted to &#145;int&#146; when passed  
<br>
through &#145;...&#146;
<br>
vt_iowrap.c:170: warning: (so you should pass &#145;int&#146; not &#145;mode_t&#146; to  
<br>
&#145;va_arg&#146;)
<br>
vt_iowrap.c:170: note: if this code is reached, the program will abort
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:193: warning: no previous prototype for &#145;open64&#146;
<br>
vt_iowrap.c: In function &#145;open64&#146;:
<br>
vt_iowrap.c:204: warning: &#145;mode_t&#146; is promoted to &#145;int&#146; when passed  
<br>
through &#145;...&#146;
<br>
vt_iowrap.c:204: note: if this code is reached, the program will abort
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:249: warning: no previous prototype for &#145;creat64&#146;
<br>
vt_iowrap.c:368: error: syntax error before &#145;lseek64&#146;
<br>
vt_iowrap.c:368: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:369: warning: return type defaults to &#145;int&#146;
<br>
vt_iowrap.c:369: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: In function &#145;lseek64&#146;:
<br>
vt_iowrap.c:371: error: &#145;off64_t&#146; undeclared (first use in this  
<br>
function)
<br>
vt_iowrap.c:371: error: (Each undeclared identifier is reported only  
<br>
once
<br>
vt_iowrap.c:371: error: for each function it appears in.)
<br>
vt_iowrap.c:371: error: syntax error before &#145;ret&#146;
<br>
vt_iowrap.c:376: error: implicit declaration of function &#145;off64_t&#146;
<br>
vt_iowrap.c:376: error: syntax error before &#145;)&#146; token
<br>
vt_iowrap.c:383: error: &#145;ret&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:383: error: syntax error before &#145;)&#146; token
<br>
vt_iowrap.c:385: error: &#145;fd&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:389: warning: control reaches end of non-void function
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:542: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:543: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: In function &#145;pread64&#146;:
<br>
vt_iowrap.c:550: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:550: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c:550: error: &#145;fd&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:550: error: &#145;buf&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:550: error: &#145;count&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:550: error: &#145;offset&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:557: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:557: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:567: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:568: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: In function &#145;pwrite64&#146;:
<br>
vt_iowrap.c:575: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:575: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c:575: error: &#145;fd&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:575: error: &#145;buf&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:575: error: &#145;count&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:575: error: &#145;offset&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:582: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:582: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:617: warning: no previous prototype for &#145;fopen64&#146;
<br>
vt_iowrap.c:743: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:744: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: In function &#145;fseeko64&#146;:
<br>
vt_iowrap.c:751: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:751: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c:751: error: &#145;stream&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:751: error: &#145;offset&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:751: error: &#145;whence&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:760: error: syntax error before &#145;off64_t&#146;
<br>
vt_iowrap.c:760: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: At top level:
<br>
vt_iowrap.c:815: warning: type defaults to &#145;int&#146; in declaration of  
<br>
&#145;fpos64_t&#146;
<br>
vt_iowrap.c:815: error: syntax error before &#145;*&#146; token
<br>
vt_iowrap.c:815: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c: In function &#145;fsetpos64&#146;:
<br>
vt_iowrap.c:822: warning: type defaults to &#145;int&#146; in declaration of  
<br>
&#145;fpos64_t&#146;
<br>
vt_iowrap.c:822: error: syntax error before &#145;*&#146; token
<br>
vt_iowrap.c:822: warning: function declaration isn&#146;t a prototype
<br>
vt_iowrap.c:822: error: &#145;stream&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:822: error: &#145;pos&#146; undeclared (first use in this function)
<br>
vt_iowrap.c:831: warning: type defaults to &#145;int&#146; in declaration of  
<br>
&#145;fpos64_t&#146;
<br>
vt_iowrap.c:831: error: syntax error before &#145;*&#146; token
<br>
vt_iowrap.c:831: warning: function declaration isn&#146;t a prototype
<br>
make[5]: *** [vt_iowrap.o] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
[22:44] beezle:~/svn/vt-integration %
<br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2666.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>Previous message:</strong> <a href="2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
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
