<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 10:50:39 2016" -->
<!-- isoreceived="20160405145039" -->
<!-- sent="Tue, 5 Apr 2016 16:50:37 +0200" -->
<!-- isosent="20160405145037" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="5703D0BD.5000408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E721F964DFCE0143863414635137A1C72076DF0D_at_CRSMSX101.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 10:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More comments about individual changes below.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; add-ifndef-guard-around-gnu-source.patch
</span><br>
<span class="quotelev1">&gt; diff --git a/config/hwloc.m4 b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; index f249713..855244d 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; @@ -486,7 +486,9 @@ EOF])
</span><br>
<span class="quotelev1">&gt;      # program_invocation_name and __progname may be available but not exported in headers
</span><br>
<span class="quotelev1">&gt;      AC_MSG_CHECKING([for program_invocation_name])
</span><br>
<span class="quotelev1">&gt;      AC_TRY_LINK([
</span><br>
<span class="quotelev1">&gt; -		#define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; +		#ifndef _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; +		# define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; +		#endif
</span><br>
<span class="quotelev1">&gt;  		#include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt;  		#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  		extern char *program_invocation_name;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>This one is applied (not pushed yet).
<br>
<p><span class="quotelev1">&gt; use-ac-check-decl.patch
</span><br>
<span class="quotelev1">&gt; diff --git a/config/hwloc.m4 b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; index 855244d..49955a6 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; @@ -367,7 +367,7 @@ EOF])
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([ctype.h])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_FUNCS([strncasecmp], [
</span><br>
<span class="quotelev1">&gt; -      _HWLOC_CHECK_DECL([strncasecmp], [
</span><br>
<span class="quotelev1">&gt; +      AC_CHECK_DECLS([strncasecmp], [
</span><br>
<span class="quotelev1">&gt;  	AC_DEFINE([HWLOC_HAVE_DECL_STRNCASECMP], [1], [Define to 1 if function `strncasecmp' is declared by system headers])
</span><br>
<span class="quotelev1">&gt;        ])
</span><br>
<span class="quotelev1">&gt;      ])
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>Samuel pushed a better fix (already in master, I'll backport to v1.11.x
<br>
after checking the configure logs on our regression platform)
<br>
<p><span class="quotelev1">&gt; windows-compatibility-changes.patch
</span><br>
<span class="quotelev1">&gt; diff --git a/config/hwloc.m4 b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; index 49955a6..12230e1 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; @@ -362,7 +362,7 @@ EOF])
</span><br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([unistd.h])
</span><br>
<span class="quotelev1">&gt; -    AC_CHECK_HEADERS([dirent.h])
</span><br>
<span class="quotelev1">&gt; +    AC_CHECK_HEADERS([dirent.h], [hwloc_have_dirent=yes])
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([strings.h])
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([ctype.h])
</span><br>
<p>I am dropping the dirent changes and just disabling hwloc-ps entirely on
<br>
Windows.
<br>
<p><span class="quotelev1">&gt; +    AC_CHECK_LIB([user32], [PostQuitMessage], [hwloc_have_user32=&quot;yes&quot;])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The user32 part is applied.
<br>
<p><p><span class="quotelev1">&gt; @@ -381,6 +381,21 @@ static __hwloc_inline int hwloc_strncasecmp(const char *s1, const char *s2, size
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +static __hwloc_inline int hwloc_strcasecmp(const char *s1, const char *s2)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_HAVE_DECL_STRCASECMP
</span><br>
<span class="quotelev1">&gt; +  return strcasecmp(s1, s2);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +  while (1) {
</span><br>
<span class="quotelev1">&gt; +    char c1 = tolower(*s1), c2 = tolower(*s2);
</span><br>
<span class="quotelev1">&gt; +    if (!c1 || !c2 || c1 != c2)
</span><br>
<span class="quotelev1">&gt; +      return c1-c2;
</span><br>
<span class="quotelev1">&gt; +    s1++; s2++;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  static __hwloc_inline hwloc_obj_type_t hwloc_cache_type_by_depth_type(unsigned depth, hwloc_obj_cache_type_t type)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (type == HWLOC_OBJ_CACHE_INSTRUCTION) {
</span><br>
<span class="quotelev1">&gt; @@ -407,4 +422,25 @@ static __hwloc_inline int hwloc_obj_type_is_io (hwloc_obj_type_t type)
</span><br>
<span class="quotelev1">&gt;    return type &gt;= HWLOC_OBJ_BRIDGE &amp;&amp; type &lt;= HWLOC_OBJ_OS_DEVICE;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_WIN_SYS
</span><br>
<span class="quotelev1">&gt; +#  ifndef HAVE_SSIZE_T
</span><br>
<span class="quotelev1">&gt; +typedef SSIZE_T ssize_t;
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#  ifndef HAVE_SNPRINTF
</span><br>
<span class="quotelev1">&gt; +#    define snprintf hwloc_snprintf
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#  if !HAVE_DECL_STRTOULL &amp;&amp; !defined(HAVE_STRTOULL)
</span><br>
<span class="quotelev1">&gt; +#    define strtoull _strtoui64
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#  if !HAVE_DECL_S_ISREG
</span><br>
<span class="quotelev1">&gt; +#    define S_ISREG(mode) (mode &amp; _S_IFREG)
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#  if !HAVE_DECL_S_ISDIR
</span><br>
<span class="quotelev1">&gt; +#    define S_ISDIR(mode) (mode &amp; _S_IFDIR)
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#  ifndef HAVE_STRCASECMP
</span><br>
<span class="quotelev1">&gt; +#    define strcasecmp hwloc_strcasecmp
</span><br>
<span class="quotelev1">&gt; +#  endif
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_PRIVATE_MISC_H */
</span><br>
<p>Overall this looks OK.
<br>
<p>In the MSVC project under contrib/windows/, we use a hardwired
<br>
hwloc_config.h which says:
<br>
typedef SSIZE_T ssize_t;
<br>
#define snprintf _snprintf
<br>
#define strcasecmp _stricmp
<br>
#define strncasecmp _strnicmp
<br>
#define strdup _strdup
<br>
#define strtoull _strtoui64
<br>
#define strtoll _strtoi64
<br>
#define S_ISREG(m) ((m)&amp;_S_IFREG)
<br>
#define S_ISDIR( m ) (((m) &amp; S_IFMT) == S_IFDIR)
<br>
#define putenv _putenv
<br>
<p>strncasecmp and strtoll don't seem needed anymore.
<br>
<p>For strdup and putenv, my MSVC fails with &quot;The POSIX name for this item
<br>
is deprecated. Instead use the ISO C++ conformant name: _foo.&quot;
<br>
I wonder why you didn't have this problem?
<br>
<p>Is _stricmp() OK instead of your code for hwloc_strcasecmp() ?
<br>
<p>Don't you have S_IFMT and S_IFREG/DIR without _ prefix?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4781.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
