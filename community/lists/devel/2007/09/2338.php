<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 18:11:44 2007" -->
<!-- isoreceived="20070919221144" -->
<!-- sent="Wed, 19 Sep 2007 18:11:22 -0400" -->
<!-- isosent="20070919221122" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="46F19E8A.6090601_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F15B26.9050901_at_cs.ubc.ca" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 18:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>In reply to:</strong> <a href="2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Karol,
<br>
<p>Thanks for the reports.
<br>
<p>I cannot help with the first problem. Maybe someone else can.
<br>
<p>Problem 2: I have committed your suggested fix in r16163.
<br>
<p>As for the third problem, this is very strange. It looks like what is 
<br>
happening is that we are in the ompi/mpi/f77 directory compiling a .c 
<br>
file. This includes ompi_config.h, which includes ompi_config_bottom.h, 
<br>
which then includes string.h (/usr/include/string.h). So far so good.
<br>
<p>Here is where it gets nasty. On FreeBSD, /usr/include/string.h includes 
<br>
strings.h in some cases. But there is a strings.h in the ompi/mpi/f77 
<br>
directory, so that is getting included instead of the proper 
<br>
/usr/include/strings.h.
<br>
<p>I suppose we could rename our strings.h to f77_strings.h, or something 
<br>
similar. Does anyone have an opinion on this?
<br>
<p>When you compiled v1.2.3 and the v1.2.4 prerelease, did you compile from 
<br>
a tarball or a subversion checkout? I ask because it looks like the 
<br>
above problem will only happen when the developer debugging code is 
<br>
enabled, which is the default when building from a subversion checkout.
<br>
<p>Thanks again for your reports,
<br>
<p>Tim
<br>
<p>Karol Mroz wrote:
<br>
<span class="quotelev1">&gt; Hi. I have been trying to build the latest ompi-trunk (as of yesterday)
</span><br>
<span class="quotelev1">&gt; svn snapshot (r16158) of OpenMPI on a FreeBSD 6.2 machine and have run
</span><br>
<span class="quotelev1">&gt; into 3 build problems. I was curious if anyone else has encountered
</span><br>
<span class="quotelev1">&gt; these errors and if they are being addressed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem 1
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; When running the autogen.sh script as non-root, I see the following error:
</span><br>
<span class="quotelev1">&gt; *************************************************************************
</span><br>
<span class="quotelev1">&gt; 	*** Running GNU tools
</span><br>
<span class="quotelev1">&gt; 	[Running] autom4te --language=m4sh ompi_get_version.m4sh -o
</span><br>
<span class="quotelev1">&gt; ompi_get_version.sh
</span><br>
<span class="quotelev1">&gt; 	[Running] aclocal
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
</span><br>
<span class="quotelev1">&gt; AM_PATH_GLIB
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
</span><br>
<span class="quotelev1">&gt; aclocal'
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8:   or see
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt; 	[Running] autoheader
</span><br>
<span class="quotelev1">&gt; 	** Adjusting libtool for OMPI :-(
</span><br>
<span class="quotelev1">&gt; 	   ++ patching for pathscale multi-line output (LT 1.5.x)
</span><br>
<span class="quotelev1">&gt; 	[Running] autoconf
</span><br>
<span class="quotelev1">&gt; 	[Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev1">&gt; 	   -- Moving libltdl to opal/
</span><br>
<span class="quotelev1">&gt; 	** Updating Automake version in libltdl package
</span><br>
<span class="quotelev1">&gt; 	   [Running] aclocal
</span><br>
<span class="quotelev1">&gt; 	acinclude.m4:6405: the serial number must appear before any 	macro
</span><br>
<span class="quotelev1">&gt; definition
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
</span><br>
<span class="quotelev1">&gt; AM_PATH_GLIB
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
</span><br>
<span class="quotelev1">&gt; aclocal'
</span><br>
<span class="quotelev1">&gt; 	/usr/local/share/aclocal/glib.m4:8:   or see
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt; 	   [Running] automake
</span><br>
<span class="quotelev1">&gt; 	   [Running] autoconf
</span><br>
<span class="quotelev1">&gt; 	autom4te-2.61: cannot open configure: Permission denied
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some searching, it would appear that this is an autoconf issue
</span><br>
<span class="quotelev1">&gt; that crops up in FreeBSD but, for whatever reason, not in Linux. A quick
</span><br>
<span class="quotelev1">&gt; workaround is to add: `chmod -vr u+w *` just before autogen issues the
</span><br>
<span class="quotelev1">&gt; `run_and_check $ompi_autoconf` command on line 438.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem 2:
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; After correcting the autogen.sh script, running it and then running
</span><br>
<span class="quotelev1">&gt; configure with --prefix=some_directory as a parameter, it was time to
</span><br>
<span class="quotelev1">&gt; `make all install.` Following is console output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ************************************************************************
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -MT opal_pty.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/opal_pty.Tpo -c opal_pty.c  -fPIC -DPIC -o .libs/opal_pty.o
</span><br>
<span class="quotelev1">&gt; opal_pty.c: In function `opal_openpty':
</span><br>
<span class="quotelev1">&gt; opal_pty.c:127: error: implicit declaration of function `openpty'
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk.
</span><br>
<span class="quotelev1">&gt; ***********************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  It would seem that openpty needs to have libutil.h included on a
</span><br>
<span class="quotelev1">&gt; freeBSD machine. I added a quick #ifdef/#include of libutil.h in
</span><br>
<span class="quotelev1">&gt; opal/util/opal_pty.c and restarted make.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem 3:
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; Compilation made it a little further this time around, but began
</span><br>
<span class="quotelev1">&gt; complaining about ompi/mpi/f77/strings.h. More console output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***********************************************************************
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../.. -g
</span><br>
<span class="quotelev1">&gt; -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev1">&gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -MT attr_fn_f.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/attr_fn_f.Tpo -c attr_fn_f.c  -fPIC -DPIC -o .libs/attr_fn_f.o
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/string.h:49,
</span><br>
<span class="quotelev1">&gt;                  from ../../../opal/include/opal_config_bottom.h:365,
</span><br>
<span class="quotelev1">&gt;                  from ../../../opal/include/opal_config.h:1432,
</span><br>
<span class="quotelev1">&gt;                  from ../../../ompi/include/ompi_config.h:26,
</span><br>
<span class="quotelev1">&gt;                  from attr_fn_f.c:20:
</span><br>
<span class="quotelev1">&gt; ./strings.h:43: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; ./strings.h:59: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; ./strings.h:78: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; ./strings.h:94: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/kmroz/work/ompi-trunk.
</span><br>
<span class="quotelev1">&gt; ***********************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ended up changing function declarations in ompi/mpi/f77/strings.h from
</span><br>
<span class="quotelev1">&gt; 'OMPI_DECLSPEC int function_name()' to simply 'int function_name()'
</span><br>
<span class="quotelev1">&gt; which also appears to be how it was done in the last stable (v1.2.3)
</span><br>
<span class="quotelev1">&gt; release. This final change allowed make to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note, these errors were seen in ompi-trunk (r16158). The current
</span><br>
<span class="quotelev1">&gt; stable release (v1.2.3) as well as the pre-release (v1.2.4) do NOT
</span><br>
<span class="quotelev1">&gt; exhibit any of these problems when compiled on FreeBSD 6.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One final note: running autogen.sh on a linux machine followed by
</span><br>
<span class="quotelev1">&gt; configure/make on freeBSD was also attempted to see if some of the
</span><br>
<span class="quotelev1">&gt; source or build scripts were being generated incorrectly on FreeBSD.
</span><br>
<span class="quotelev1">&gt; However, this yielded the same errors with ompi-trunk as mentioned above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>In reply to:</strong> <a href="2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2339.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
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
