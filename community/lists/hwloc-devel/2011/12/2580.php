<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 17:02:46 2011" -->
<!-- isoreceived="20111208220246" -->
<!-- sent="Thu, 8 Dec 2011 17:02:41 -0500" -->
<!-- isosent="20111208220241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025" -->
<!-- id="07C86B65-3354-4A22-9650-95812741DDFC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112082146.pB8Lk8U3001594_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 17:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Rayson Ho: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>Reply:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>There might be a way to test for this in configure.  What if we added a AC_CONFIG_COMMANDS (i.e., commands that run at the end of config.status -- after the libtool shell script is created) that try to use the generated libtool script to compile something with libnuma?
<br>
<p>This test can run if libnuma was previously found to be &quot;working&quot; in earlier configure tests.  Meaning: hwloc expects libnuma to compile/link successfully.  
<br>
<p>This test can compile/link a trivial application that uses a libnuma API call.  If it fails to link, we can reasonably assume that the generated libtool script was trying to link in a way that is not supported by libnuma (e.g., we can even check $enable_static / $enable_shared), and then fail with a decent error message.
<br>
<p>What do you think?
<br>
<p>(I don't have time ATM to code this up, but it sounds possible...)
<br>
<p><p>On Dec 8, 2011, at 4:46 PM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-08 16:46:08 EST (Thu, 08 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 4025
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4025">https://svn.open-mpi.org/trac/hwloc/changeset/4025</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add --disable-libnuma option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a workaround for distro that don't ship static libnuma.
</span><br>
<span class="quotelev1">&gt; Configure is happy if only the dynamic libnuma is available,
</span><br>
<span class="quotelev1">&gt; but static linking would then fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch also errors out if --enable-libnuma is given
</span><br>
<span class="quotelev1">&gt; but libnuma cannot be found.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS                     |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/config/hwloc.m4          |    53 +++++++++++++++++++++++++-------------- 
</span><br>
<span class="quotelev1">&gt;   trunk/config/hwloc_internal.m4 |     5 +++                                     
</span><br>
<span class="quotelev1">&gt;   3 files changed, 40 insertions(+), 19 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS	2011-12-08 16:46:08 EST (Thu, 08 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -46,6 +46,7 @@
</span><br>
<span class="quotelev1">&gt; * Add hwloc-distances utility to list distances.
</span><br>
<span class="quotelev1">&gt; * Add more NVIDIA CUDA helpers in cuda.h and cudart.h to find hwloc objects
</span><br>
<span class="quotelev1">&gt;   corresponding to CUDA devices.
</span><br>
<span class="quotelev1">&gt; +* Add --disable-libnuma configure option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 1.3.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc.m4	2011-12-08 16:46:08 EST (Thu, 08 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -486,25 +486,6 @@
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_HEADERS([sys/utsname.h])
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_FUNCS([uname])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    # set_mempolicy and mbind support   
</span><br>
<span class="quotelev1">&gt; -    AC_CHECK_HEADERS([numaif.h], [
</span><br>
<span class="quotelev1">&gt; -      AC_CHECK_LIB([numa], [set_mempolicy], [
</span><br>
<span class="quotelev1">&gt; -	enable_set_mempolicy=yes
</span><br>
<span class="quotelev1">&gt; -	AC_SUBST([HWLOC_LINUX_LIBNUMA_LIBS], [&quot;-lnuma&quot;])
</span><br>
<span class="quotelev1">&gt; -	AC_DEFINE([HWLOC_HAVE_SET_MEMPOLICY], [1], [Define to 1 if set_mempolicy is available.])
</span><br>
<span class="quotelev1">&gt; -      ])
</span><br>
<span class="quotelev1">&gt; -      AC_CHECK_LIB([numa], [mbind], [
</span><br>
<span class="quotelev1">&gt; -	enable_mbind=yes
</span><br>
<span class="quotelev1">&gt; -	AC_SUBST([HWLOC_LINUX_LIBNUMA_LIBS], [&quot;-lnuma&quot;])
</span><br>
<span class="quotelev1">&gt; -	AC_DEFINE([HWLOC_HAVE_MBIND], [1], [Define to 1 if mbind is available.])
</span><br>
<span class="quotelev1">&gt; -      ])
</span><br>
<span class="quotelev1">&gt; -      AC_CHECK_LIB([numa], [migrate_pages], [
</span><br>
<span class="quotelev1">&gt; -	enable_migrate_pages=yes
</span><br>
<span class="quotelev1">&gt; -	AC_SUBST([HWLOC_LINUX_LIBNUMA_LIBS], [&quot;-lnuma&quot;])
</span><br>
<span class="quotelev1">&gt; -	AC_DEFINE([HWLOC_HAVE_MIGRATE_PAGES], [1], [Define to 1 if migrate_pages is available.])
</span><br>
<span class="quotelev1">&gt; -      ])
</span><br>
<span class="quotelev1">&gt; -    ])
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_HEADERS([pthread_np.h])
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_DECLS([pthread_setaffinity_np],,[:],[[
</span><br>
<span class="quotelev1">&gt;       #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev1">&gt; @@ -524,6 +505,40 @@
</span><br>
<span class="quotelev1">&gt;       AC_DEFINE([HWLOC_HAVE_PTHREAD_GETTHRDS_NP], 1, `Define to 1 if you have pthread_getthrds_np')
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    # Linux libnuma support
</span><br>
<span class="quotelev1">&gt; +    hwloc_linux_libnuma_happy=no
</span><br>
<span class="quotelev1">&gt; +    if test &quot;x$enable_libnuma&quot; != &quot;xno&quot;; then
</span><br>
<span class="quotelev1">&gt; +        hwloc_linux_libnuma_happy=yes
</span><br>
<span class="quotelev1">&gt; +        AC_CHECK_HEADERS([numaif.h], [
</span><br>
<span class="quotelev1">&gt; +            AC_CHECK_LIB([numa], [numa_available], [HWLOC_LINUX_LIBNUMA_LIBS=&quot;-lnuma&quot;], [hwloc_linux_libnuma_happy=no])
</span><br>
<span class="quotelev1">&gt; +        ], [hwloc_linux_libnuma_happy=no])
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST(HWLOC_LINUX_LIBNUMA_LIBS)
</span><br>
<span class="quotelev1">&gt; +    # If we asked for Linux libnuma support but couldn't deliver, fail
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$enable_libnuma&quot; = &quot;yes&quot; -a &quot;$hwloc_linux_libnuma_happy&quot; = &quot;no&quot;],
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_WARN([Specified --enable-libnuma switch, but could not])
</span><br>
<span class="quotelev1">&gt; +           AC_MSG_WARN([find appropriate support])
</span><br>
<span class="quotelev1">&gt; +           AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev1">&gt; +    if test &quot;x$hwloc_linux_libnuma_happy&quot; = &quot;xyes&quot;; then
</span><br>
<span class="quotelev1">&gt; +      tmp_save_LIBS=&quot;$LIBS&quot;
</span><br>
<span class="quotelev1">&gt; +      LIBS=&quot;$LIBS $HWLOC_LINUX_LIBNUMA_LIBS&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      AC_CHECK_LIB([numa], [set_mempolicy], [
</span><br>
<span class="quotelev1">&gt; +	enable_set_mempolicy=yes
</span><br>
<span class="quotelev1">&gt; +	AC_DEFINE([HWLOC_HAVE_SET_MEMPOLICY], [1], [Define to 1 if set_mempolicy is available.])
</span><br>
<span class="quotelev1">&gt; +      ])
</span><br>
<span class="quotelev1">&gt; +      AC_CHECK_LIB([numa], [mbind], [
</span><br>
<span class="quotelev1">&gt; +	enable_mbind=yes
</span><br>
<span class="quotelev1">&gt; +	AC_DEFINE([HWLOC_HAVE_MBIND], [1], [Define to 1 if mbind is available.])
</span><br>
<span class="quotelev1">&gt; +      ])
</span><br>
<span class="quotelev1">&gt; +      AC_CHECK_LIB([numa], [migrate_pages], [
</span><br>
<span class="quotelev1">&gt; +	enable_migrate_pages=yes
</span><br>
<span class="quotelev1">&gt; +	AC_DEFINE([HWLOC_HAVE_MIGRATE_PAGES], [1], [Define to 1 if migrate_pages is available.])
</span><br>
<span class="quotelev1">&gt; +      ])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      LIBS=&quot;$tmp_save_LIBS&quot;
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     # PCI support
</span><br>
<span class="quotelev1">&gt;     hwloc_pci_happy=no
</span><br>
<span class="quotelev1">&gt;     if test &quot;x$enable_pci&quot; != &quot;xno&quot;; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc_internal.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc_internal.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc_internal.m4	2011-12-08 16:46:08 EST (Thu, 08 Dec 2011)
</span><br>
<span class="quotelev1">&gt; @@ -65,6 +65,11 @@
</span><br>
<span class="quotelev1">&gt;                   AS_HELP_STRING([--disable-pci],
</span><br>
<span class="quotelev1">&gt;                                  [Disable the PCI device discovery using libpci]))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    # Linux libnuma
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_ENABLE([libnuma],
</span><br>
<span class="quotelev1">&gt; +                  AS_HELP_STRING([--disable-libnuma],
</span><br>
<span class="quotelev1">&gt; +                                 [Disable the Linux libnuma]))
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; ])dnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Rayson Ho: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>Reply:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
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
