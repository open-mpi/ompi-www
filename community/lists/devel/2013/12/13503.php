<?
$subject_val = "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 18:27:46 2013" -->
<!-- isoreceived="20131219232746" -->
<!-- sent="Thu, 19 Dec 2013 15:27:44 -0800" -->
<!-- isosent="20131219232744" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6" -->
<!-- id="CAAvDA15ZLULvXdPa6v1aSJOGPQhTM0RAS21vnHrn7ucSe9M+8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 18:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13502.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When building 1.7.4rc1 on OpenBSD-5 and NetBSD-6 (both amd64) I see what
<br>
appears to be the same three errors (&quot;make&quot; output  at end of this email)
<br>
on both platforms.
<br>
<p>All three syntax errors appears to be collisions on the symbol if_mtu:
<br>
<p>-bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.h | grep -w -e 182
<br>
&nbsp;&nbsp;&nbsp;182  OPAL_DECLSPEC int opal_ifindextomtu(int if_index, int *if_mtu);
<br>
-bash-4.2$ cat -n openmpi-1.7.4rc1/opal/mca/if/if.h | grep -w -e 98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;98      int                 if_mtu;
<br>
-bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.c | grep -w -e 482
<br>
&nbsp;&nbsp;&nbsp;482  int opal_ifindextomtu(int if_index, int *if_mtu)
<br>
<p>-bash-4.2$ grep if_mtu  /usr/include/net/if.h
<br>
#define if_mtu          if_data.ifi_mtu                        \
<br>
<p><p>-Paul
<br>
<p>OpenBSD:
<br>
-bash-4.2$ uname -a
<br>
OpenBSD pcp-j-16.my.domain 5.3 GENERIC.MP#62 amd64
<br>
-bash-4.2$ gcc --version
<br>
gcc (GCC) 4.2.1 20070719
<br>
<p>Making all in keyval
<br>
&nbsp;&nbsp;LEX      keyval_lex.c
<br>
&nbsp;&nbsp;CC       keyval_lex.lo
<br>
&nbsp;&nbsp;CCLD     libopalutilkeyval.la
<br>
&nbsp;&nbsp;CC       fd.lo
<br>
&nbsp;&nbsp;CC       arch.lo
<br>
&nbsp;&nbsp;CC       argv.lo
<br>
&nbsp;&nbsp;CC       basename.lo
<br>
&nbsp;&nbsp;CC       cmd_line.lo
<br>
&nbsp;&nbsp;CC       crc.lo
<br>
&nbsp;&nbsp;CC       convert.lo
<br>
&nbsp;&nbsp;CC       daemon_init.lo
<br>
&nbsp;&nbsp;CC       error.lo
<br>
&nbsp;&nbsp;CC       few.lo
<br>
&nbsp;&nbsp;CC       if.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/util/if.c:74:
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/util/if.h:182:
<br>
error: expected ';', ',' or ')' before '.' token
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/mca/if/base/base.h:18,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/util/if.c:81:
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/mca/if/if.h:98:
<br>
error: expected ':', ',', ';', '}' or '__attribute__' before '.' token
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/openmpi-1.7.4rc1/opal/util/if.c:482:
<br>
error: expected ';', ',' or ')' before '.' token
<br>
*** Error 1 in opal/util (Makefile:1642 'if.lo': @echo &quot;  CC      &quot;
<br>
if.lo;depbase=`echo if.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; /bin/sh ...)
<br>
*** Error 1 in opal/util (Makefile:1731 'all-recursive')
<br>
*** Error 1 in opal (Makefile:2039 'all-recursive')
<br>
*** Error 1 in /home/phargrov/OMPI/openmpi-1.7.4rc1-openbsd5-amd64/BLD
<br>
(Makefile:1572 'all-recursive')
<br>
<p>NetBSD:
<br>
<p>-bash-4.2$ uname -a
<br>
NetBSD pcp-j-18 6.1 NetBSD 6.1 (GENERIC) amd64
<br>
-bash-4.2$ gcc --version
<br>
gcc (NetBSD nb2 20110806) 4.5.3
<br>
<p><p>Making all in keyval
<br>
&nbsp;&nbsp;CC       keyval_lex.lo
<br>
&nbsp;&nbsp;CCLD     libopalutilkeyval.la
<br>
&nbsp;&nbsp;CC       fd.lo
<br>
&nbsp;&nbsp;CC       arch.lo
<br>
&nbsp;&nbsp;CC       argv.lo
<br>
&nbsp;&nbsp;CC       basename.lo
<br>
&nbsp;&nbsp;CC       cmd_line.lo
<br>
&nbsp;&nbsp;CC       crc.lo
<br>
&nbsp;&nbsp;CC       convert.lo
<br>
&nbsp;&nbsp;CC       daemon_init.lo
<br>
&nbsp;&nbsp;CC       error.lo
<br>
&nbsp;&nbsp;CC       few.lo
<br>
&nbsp;&nbsp;CC       if.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/util/if.c:74:0:
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/util/if.h:182:56:
<br>
error: expected ';', ',' or ')' before '.' token
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/mca/if/base/base.h:18:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/util/if.c:81:
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/mca/if/if.h:98:25:
<br>
error: expected ':', ',', ';', '}' or '__attribute__' before '.' token
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-netbsd6-amd64/openmpi-1.7.4rc1/opal/util/if.c:482:42:
<br>
error: expected ';', ',' or ')' before '.' token
<br>
*** Error code 1
<br>
<p>Stop.
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13502.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
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
