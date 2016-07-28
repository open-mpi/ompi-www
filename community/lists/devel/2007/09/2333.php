<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 13:23:52 2007" -->
<!-- isoreceived="20070919172352" -->
<!-- sent="Wed, 19 Sep 2007 10:23:50 -0700" -->
<!-- isosent="20070919172350" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="[OMPI devel] FreeBSD Support?" -->
<!-- id="46F15B26.9050901_at_cs.ubc.ca" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 13:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2334.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi. I have been trying to build the latest ompi-trunk (as of yesterday)
<br>
svn snapshot (r16158) of OpenMPI on a FreeBSD 6.2 machine and have run
<br>
into 3 build problems. I was curious if anyone else has encountered
<br>
these errors and if they are being addressed.
<br>
<p>Problem 1
<br>
---------
<br>
When running the autogen.sh script as non-root, I see the following error:
<br>
*************************************************************************
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Running GNU tools
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] autom4te --language=m4sh ompi_get_version.m4sh -o
<br>
ompi_get_version.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] aclocal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
<br>
AM_PATH_GLIB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
<br>
aclocal'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8:   or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] autoheader
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** Adjusting libtool for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++ patching for pathscale multi-line output (LT 1.5.x)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] libtoolize --automake --copy --ltdl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Moving libltdl to opal/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** Updating Automake version in libltdl package
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] aclocal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acinclude.m4:6405: the serial number must appear before any 	macro
<br>
definition
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
<br>
AM_PATH_GLIB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
<br>
aclocal'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/share/aclocal/glib.m4:8:   or see
<br>
<a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] automake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Running] autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;autom4te-2.61: cannot open configure: Permission denied
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
-------------------------------------------------------------------------
<br>
*************************************************************************
<br>
<p>After some searching, it would appear that this is an autoconf issue
<br>
that crops up in FreeBSD but, for whatever reason, not in Linux. A quick
<br>
workaround is to add: `chmod -vr u+w *` just before autogen issues the
<br>
`run_and_check $ompi_autoconf` command on line 438.
<br>
<p><p>Problem 2:
<br>
----------
<br>
After correcting the autogen.sh script, running it and then running
<br>
configure with --prefix=some_directory as a parameter, it was time to
<br>
`make all install.` Following is console output:
<br>
<p>************************************************************************
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -MT opal_pty.lo -MD -MP -MF
<br>
.deps/opal_pty.Tpo -c opal_pty.c  -fPIC -DPIC -o .libs/opal_pty.o
<br>
opal_pty.c: In function `opal_openpty':
<br>
opal_pty.c:127: error: implicit declaration of function `openpty'
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/opal.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk.
<br>
***********************************************************************
<br>
<p>&nbsp;It would seem that openpty needs to have libutil.h included on a
<br>
freeBSD machine. I added a quick #ifdef/#include of libutil.h in
<br>
opal/util/opal_pty.c and restarted make.
<br>
<p>Problem 3:
<br>
----------
<br>
Compilation made it a little further this time around, but began
<br>
complaining about ompi/mpi/f77/strings.h. More console output:
<br>
<p>***********************************************************************
<br>
gcc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include
<br>
-I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../.. -g
<br>
-Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
<br>
-Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -MT attr_fn_f.lo -MD -MP -MF
<br>
.deps/attr_fn_f.Tpo -c attr_fn_f.c  -fPIC -DPIC -o .libs/attr_fn_f.o
<br>
In file included from /usr/include/string.h:49,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../opal/include/opal_config_bottom.h:365,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../opal/include/opal_config.h:1432,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../ompi/include/ompi_config.h:26,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from attr_fn_f.c:20:
<br>
./strings.h:43: error: syntax error before &quot;int&quot;
<br>
./strings.h:59: error: syntax error before &quot;int&quot;
<br>
./strings.h:78: error: syntax error before &quot;int&quot;
<br>
./strings.h:94: error: syntax error before &quot;int&quot;
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk/ompi.
<br>
*** Error code 1
<br>
<p>Stop in /usr/home/kmroz/work/ompi-trunk.
<br>
***********************************************************************
<br>
<p>I ended up changing function declarations in ompi/mpi/f77/strings.h from
<br>
'OMPI_DECLSPEC int function_name()' to simply 'int function_name()'
<br>
which also appears to be how it was done in the last stable (v1.2.3)
<br>
release. This final change allowed make to complete.
<br>
<p><pre>
---
Please note, these errors were seen in ompi-trunk (r16158). The current
stable release (v1.2.3) as well as the pre-release (v1.2.4) do NOT
exhibit any of these problems when compiled on FreeBSD 6.2.
One final note: running autogen.sh on a linux machine followed by
configure/make on freeBSD was also attempted to see if some of the
source or build scripts were being generated incorrectly on FreeBSD.
However, this yielded the same errors with ompi-trunk as mentioned above.
Any ideas?
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2334.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
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
