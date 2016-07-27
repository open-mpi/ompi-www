<?
$subject_val = "Re: [hwloc-devel] stop embedding libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 11:04:45 2013" -->
<!-- isoreceived="20130514150445" -->
<!-- sent="Tue, 14 May 2013 17:04:38 +0200" -->
<!-- isosent="20130514150438" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] stop embedding libltdl" -->
<!-- id="51925286.5080602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51922EC1.1080200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] stop embedding libltdl<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 11:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5615)"</a>
<li><strong>Previous message:</strong> <a href="3742.php">Brice Goglin: "Re: [hwloc-devel] stop embedding libltdl"</a>
<li><strong>In reply to:</strong> <a href="3742.php">Brice Goglin: "Re: [hwloc-devel] stop embedding libltdl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good on different distribs and versions of libltdl so I think I'll
<br>
commit that tomorrow unless somebody complains.
<br>
<p>Brice
<br>
<p>Debian 6.0.6   ltdl = 2.2.6b-2
<br>
Debian 7.0      2.4.2-1.2
<br>
Ubuntu 8.04     1.5.26-1ubuntu1
<br>
Ubuntu 12.04    2.4.2-1ubuntu1
<br>
Centos 5.9      1.5.22-7.el5_4
<br>
Centos 6.3      2.2.6-15.5.el6
<br>
Fedora 17       2.4.2-3.1.fc17
<br>
OpenBSD 5.2     2.4.2
<br>
FreeBSD 9.1     2.4.2
<br>
NetBSD 6.0.1    2.2.6b
<br>
<p><p><p><p>Le 14/05/2013 14:32, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Here's a patch that seems to work. I stole the code that libtool.m4
</span><br>
<span class="quotelev1">&gt; uses to find ltdl dependencies, put it inside a new
</span><br>
<span class="quotelev1">&gt; HWLOC_CHECK_LTDL_DEPS that stores these dependencies in
</span><br>
<span class="quotelev1">&gt; HWLOC_LIBS_PRIVATE. It properly adds -ldl on Linux and nothing on FreeBSD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rest of the patch is similar to Jeff's, with things moved inside
</span><br>
<span class="quotelev1">&gt; HWLOC_SETUP_CORE.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 14/05/2013 10:27, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I am reviving this thread since I interrupted it to discuss &quot;enabling
</span><br>
<span class="quotelev2">&gt;&gt; plugins vs embedding hwloc&quot; (1) but we didn't close the discussion
</span><br>
<span class="quotelev2">&gt;&gt; about &quot;not embedding libltdl anymore&quot; (2).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We committed a fix for (1) that (sometimes) generates tarballs
</span><br>
<span class="quotelev2">&gt;&gt; without src/libltdl directory. It doesn't always happen, I don't
</span><br>
<span class="quotelev2">&gt;&gt; understand why, but it certainly makes those tarballs unusable
</span><br>
<span class="quotelev2">&gt;&gt; (configure complains that a Makefile.in is missing). My original
</span><br>
<span class="quotelev2">&gt;&gt; patch for (1) fixed the problem, but (2) is a better way to avoid any
</span><br>
<span class="quotelev2">&gt;&gt; such issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The patch below does pretty much what we need, except putting the
</span><br>
<span class="quotelev2">&gt;&gt; right ltdl static libs in hwloc.pc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am going to look at this before releasing v1.7.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 08/05/2013 02:47, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How's this patch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only question I have is: how do we figure out what libraries to put in the .pc file in the --disable-shared --enable-static case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2013, at 8:24 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Jeff Squyres (jsquyres), le Wed 08 May 2013 02:21:02 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; On May 7, 2013, at 6:25 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; I don't have anything against this. What was the reason for not using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; the default/system libltdl in OMPI? libtool was buggy when you started
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; using it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; I neglected to answer this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Yes, plus libltdl grew new functionality that we needed (global/local symbol visibility).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; We might be getting to the point soon where we can rely on the installed libltdl to be new enough everywhere, but we haven't had that conversation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; We could already check that the installed version is new enough for our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; needs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Samuel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Jeff Squyres jsquyres_at_[hidden] For corporate legal information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no-embed-libltdl.diff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- configure.ac	(revision 5606)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ configure.ac	(working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -168,30 +168,25 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AM_DISABLE_STATIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LT_LANG([C])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LTDL_INIT([recursive convenience])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AC_CONFIG_FILES([src/libltdl/Makefile])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -# Workarounds for libtool LT_CONFIG_H bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#CPPFLAGS=&quot;$CPPFLAGS -I$HWLOC_top_builddir&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AC_CONFIG_COMMANDS_PRE([LT_CONFIG_H=`expr &quot;$LT_CONFIG_H&quot; : '.*/\(.*\)'`])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# If we want plugins, look for ltdl.h and libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LIBLTDL=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AS_IF([test &quot;$enable_plugins&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      [AC_CHECK_HEADER([ltdl.h], [],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          [AC_MSG_WARN([Plugin support requested, but could not find ltdl.h])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +           AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       AC_CHECK_LIB([ltdl], [lt_dlopenext], [],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          [AC_MSG_WARN([Plugin support requested, but could not find libltdl])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +           AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AC_SUBST(LIBLTDL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Add libltdl static-build dependencies to hwloc.pc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if test &quot;x$hwloc_have_plugins&quot; = xyes; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  if test &quot;x$with_included_ltdl&quot; = xno; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    HWLOC_LIBS_PRIVATE=&quot;$HWLOC_LIBS_PRIVATE $LIBLTDL&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  # JMS What to put here for static builds?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    HWLOC_LIBS_PRIVATE=&quot;$HWLOC_LIBS_PRIVATE $lt_cv_dlopen_libs&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -# Is ltdl included?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -HWLOC_LTDL_SUBDIR=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AS_IF([test &quot;x$with_included_ltdl&quot; = xyes],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      [HWLOC_LIBLTDL_SUBDIR=libltdl])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AC_SUBST(HWLOC_LIBLTDL_SUBDIR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -dnl AM_CONDITIONAL([HWLOC_LTDL_INCLUDED], [test &quot;x$with_included_ltdl&quot; = xyes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Party on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_OUTPUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- src	(revision 5606)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ src	(working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Property changes on: src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ___________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: svn:ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -1,5 +1,4 ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  .deps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Makefile.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Makefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static-components.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: src/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- src/Makefile.am	(revision 5606)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ src/Makefile.am	(working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -207,8 +207,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AM_CPPFLAGS += $(LTDLINCL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libhwloc_la_LDFLAGS += -export-dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libhwloc_la_LIBADD = $(LIBLTDL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -libhwloc_la_DEPENDENCIES = $(LTDLDEPS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -SUBDIRS = $(HWLOC_LIBLTDL_SUBDIR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Embedded library (note the lack of a .so version number -- that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5615)"</a>
<li><strong>Previous message:</strong> <a href="3742.php">Brice Goglin: "Re: [hwloc-devel] stop embedding libltdl"</a>
<li><strong>In reply to:</strong> <a href="3742.php">Brice Goglin: "Re: [hwloc-devel] stop embedding libltdl"</a>
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
