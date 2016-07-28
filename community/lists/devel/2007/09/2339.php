<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 18:19:19 2007" -->
<!-- isoreceived="20070919221919" -->
<!-- sent="Wed, 19 Sep 2007 15:19:15 -0700" -->
<!-- isosent="20070919221915" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="46F1A063.6080506_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F19E8A.6090601_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-09-19 18:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Tim. Thanks for the reply.
<br>
<p>v1.2.3 and v1.2.4rc1 were both compiled, without problems, from tarballs.
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Karol,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot help with the first problem. Maybe someone else can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem 2: I have committed your suggested fix in r16163.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the third problem, this is very strange. It looks like what is 
</span><br>
<span class="quotelev1">&gt; happening is that we are in the ompi/mpi/f77 directory compiling a .c 
</span><br>
<span class="quotelev1">&gt; file. This includes ompi_config.h, which includes ompi_config_bottom.h, 
</span><br>
<span class="quotelev1">&gt; which then includes string.h (/usr/include/string.h). So far so good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is where it gets nasty. On FreeBSD, /usr/include/string.h includes 
</span><br>
<span class="quotelev1">&gt; strings.h in some cases. But there is a strings.h in the ompi/mpi/f77 
</span><br>
<span class="quotelev1">&gt; directory, so that is getting included instead of the proper 
</span><br>
<span class="quotelev1">&gt; /usr/include/strings.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose we could rename our strings.h to f77_strings.h, or something 
</span><br>
<span class="quotelev1">&gt; similar. Does anyone have an opinion on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you compiled v1.2.3 and the v1.2.4 prerelease, did you compile from 
</span><br>
<span class="quotelev1">&gt; a tarball or a subversion checkout? I ask because it looks like the 
</span><br>
<span class="quotelev1">&gt; above problem will only happen when the developer debugging code is 
</span><br>
<span class="quotelev1">&gt; enabled, which is the default when building from a subversion checkout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for your reports,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Karol Mroz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi. I have been trying to build the latest ompi-trunk (as of yesterday)
</span><br>
<span class="quotelev2">&gt;&gt; svn snapshot (r16158) of OpenMPI on a FreeBSD 6.2 machine and have run
</span><br>
<span class="quotelev2">&gt;&gt; into 3 build problems. I was curious if anyone else has encountered
</span><br>
<span class="quotelev2">&gt;&gt; these errors and if they are being addressed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Problem 1
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; When running the autogen.sh script as non-root, I see the following error:
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; 	*** Running GNU tools
</span><br>
<span class="quotelev2">&gt;&gt; 	[Running] autom4te --language=m4sh ompi_get_version.m4sh -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; 	[Running] aclocal
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
</span><br>
<span class="quotelev2">&gt;&gt; AM_PATH_GLIB
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
</span><br>
<span class="quotelev2">&gt;&gt; aclocal'
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8:   or see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev2">&gt;&gt; 	[Running] autoheader
</span><br>
<span class="quotelev2">&gt;&gt; 	** Adjusting libtool for OMPI :-(
</span><br>
<span class="quotelev2">&gt;&gt; 	   ++ patching for pathscale multi-line output (LT 1.5.x)
</span><br>
<span class="quotelev2">&gt;&gt; 	[Running] autoconf
</span><br>
<span class="quotelev2">&gt;&gt; 	[Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev2">&gt;&gt; 	   -- Moving libltdl to opal/
</span><br>
<span class="quotelev2">&gt;&gt; 	** Updating Automake version in libltdl package
</span><br>
<span class="quotelev2">&gt;&gt; 	   [Running] aclocal
</span><br>
<span class="quotelev2">&gt;&gt; 	acinclude.m4:6405: the serial number must appear before any 	macro
</span><br>
<span class="quotelev2">&gt;&gt; definition
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8: warning: underquoted 	definition of
</span><br>
<span class="quotelev2">&gt;&gt; AM_PATH_GLIB
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8:   run info 	'(automake)Extending
</span><br>
<span class="quotelev2">&gt;&gt; aclocal'
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/local/share/aclocal/glib.m4:8:   or see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev2">&gt;&gt; 	   [Running] automake
</span><br>
<span class="quotelev2">&gt;&gt; 	   [Running] autoconf
</span><br>
<span class="quotelev2">&gt;&gt; 	autom4te-2.61: cannot open configure: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After some searching, it would appear that this is an autoconf issue
</span><br>
<span class="quotelev2">&gt;&gt; that crops up in FreeBSD but, for whatever reason, not in Linux. A quick
</span><br>
<span class="quotelev2">&gt;&gt; workaround is to add: `chmod -vr u+w *` just before autogen issues the
</span><br>
<span class="quotelev2">&gt;&gt; `run_and_check $ompi_autoconf` command on line 438.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Problem 2:
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; After correcting the autogen.sh script, running it and then running
</span><br>
<span class="quotelev2">&gt;&gt; configure with --prefix=some_directory as a parameter, it was time to
</span><br>
<span class="quotelev2">&gt;&gt; `make all install.` Following is console output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;  gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev2">&gt;&gt; -I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev2">&gt;&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt;&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -MT opal_pty.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; .deps/opal_pty.Tpo -c opal_pty.c  -fPIC -DPIC -o .libs/opal_pty.o
</span><br>
<span class="quotelev2">&gt;&gt; opal_pty.c: In function `opal_openpty':
</span><br>
<span class="quotelev2">&gt;&gt; opal_pty.c:127: error: implicit declaration of function `openpty'
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal/util.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/opal.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk.
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It would seem that openpty needs to have libutil.h included on a
</span><br>
<span class="quotelev2">&gt;&gt; freeBSD machine. I added a quick #ifdef/#include of libutil.h in
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/opal_pty.c and restarted make.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Problem 3:
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; Compilation made it a little further this time around, but began
</span><br>
<span class="quotelev2">&gt;&gt; complaining about ompi/mpi/f77/strings.h. More console output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../.. -g
</span><br>
<span class="quotelev2">&gt;&gt; -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
</span><br>
<span class="quotelev2">&gt;&gt; -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt;&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -MT attr_fn_f.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; .deps/attr_fn_f.Tpo -c attr_fn_f.c  -fPIC -DPIC -o .libs/attr_fn_f.o
</span><br>
<span class="quotelev2">&gt;&gt; In file included from /usr/include/string.h:49,
</span><br>
<span class="quotelev2">&gt;&gt;                  from ../../../opal/include/opal_config_bottom.h:365,
</span><br>
<span class="quotelev2">&gt;&gt;                  from ../../../opal/include/opal_config.h:1432,
</span><br>
<span class="quotelev2">&gt;&gt;                  from ../../../ompi/include/ompi_config.h:26,
</span><br>
<span class="quotelev2">&gt;&gt;                  from attr_fn_f.c:20:
</span><br>
<span class="quotelev2">&gt;&gt; ./strings.h:43: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ./strings.h:59: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ./strings.h:78: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ./strings.h:94: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi/f77.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi/mpi.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk/ompi.
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stop in /usr/home/kmroz/work/ompi-trunk.
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ended up changing function declarations in ompi/mpi/f77/strings.h from
</span><br>
<span class="quotelev2">&gt;&gt; 'OMPI_DECLSPEC int function_name()' to simply 'int function_name()'
</span><br>
<span class="quotelev2">&gt;&gt; which also appears to be how it was done in the last stable (v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt; release. This final change allowed make to complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please note, these errors were seen in ompi-trunk (r16158). The current
</span><br>
<span class="quotelev2">&gt;&gt; stable release (v1.2.3) as well as the pre-release (v1.2.4) do NOT
</span><br>
<span class="quotelev2">&gt;&gt; exhibit any of these problems when compiled on FreeBSD 6.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One final note: running autogen.sh on a linux machine followed by
</span><br>
<span class="quotelev2">&gt;&gt; configure/make on freeBSD was also attempted to see if some of the
</span><br>
<span class="quotelev2">&gt;&gt; source or build scripts were being generated incorrectly on FreeBSD.
</span><br>
<span class="quotelev2">&gt;&gt; However, this yielded the same errors with ompi-trunk as mentioned above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Brian Barrett: "Re: [OMPI devel] FreeBSD Support?"</a>
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
