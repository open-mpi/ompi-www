<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 14:32:44 2016" -->
<!-- isoreceived="20160405183244" -->
<!-- sent="Tue, 5 Apr 2016 18:32:28 +0000" -->
<!-- isosent="20160405183228" -->
<!-- name="Peyton, Jonathan L" -->
<!-- email="jonathan.l.peyton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="E721F964DFCE0143863414635137A1C72076EFCC_at_CRSMSX101.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5703D0BD.5000408_at_inria.fr" -->
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
<strong>From:</strong> Peyton, Jonathan L (<em>jonathan.l.peyton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 14:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-1095-gf683068)"</a>
<li><strong>Previous message:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This one is applied (not pushed yet).
</span><br>
Great!
<br>
<p><span class="quotelev1">&gt; Samuel pushed a better fix
</span><br>
<span class="quotelev1">&gt; I am dropping the dirent changes and just disabling hwloc-ps entirely on Windows.
</span><br>
<span class="quotelev1">&gt; The user32 part is applied.
</span><br>
This sounds good to me.
<br>
<p><span class="quotelev1">&gt; For strdup and putenv, my MSVC fails with &quot;The POSIX name for this item is deprecated. Instead use the ISO C++ conformant name: _foo.&quot;
</span><br>
<span class="quotelev1">&gt; I wonder why you didn't have this problem?
</span><br>
I got warnings instead of errors.  Did you compile with -WX?
<br>
<p><span class="quotelev1">&gt; Is _stricmp() OK instead of your code for hwloc_strcasecmp() ?
</span><br>
Yes this seems fine.
<br>
<p><span class="quotelev1">&gt; strncasecmp and strtoll don't seem needed anymore.
</span><br>
It seems strncasecmp has been replaced inside the source files as hwloc_strncasecmp() (except linux/solaris files) and strtoll isn't called anywhere.
<br>
<p><span class="quotelev1">&gt; Don't you have S_IFMT and S_IFREG/DIR without _ prefix?
</span><br>
I sure do.  I had only seen _S_IFREG and _S_IFDIR in the MSDN documentation: <a href="https://msdn.microsoft.com/en-us/library/14h5k7ff.aspx">https://msdn.microsoft.com/en-us/library/14h5k7ff.aspx</a>
<br>
<p>-- Johnny
<br>
<p>From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Tuesday, April 5, 2016 9:51 AM
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
Subject: Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.
<br>
<p>More comments about individual changes below.
<br>
<p>add-ifndef-guard-around-gnu-source.patch
<br>
<p>diff --git a/config/hwloc.m4 b/config/hwloc.m4
<br>
<p>index f249713..855244d 100644
<br>
<p>--- a/config/hwloc.m4
<br>
<p>+++ b/config/hwloc.m4
<br>
<p>@@ -486,7 +486,9 @@ EOF])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# program_invocation_name and __progname may be available but not exported in headers
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for program_invocation_name])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_LINK([
<br>
<p>-        #define _GNU_SOURCE
<br>
<p>+        #ifndef _GNU_SOURCE
<br>
<p>+        # define _GNU_SOURCE
<br>
<p>+        #endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;errno.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern char *program_invocation_name;
<br>
<p>[...]
<br>
<p>This one is applied (not pushed yet).
<br>
<p><p>use-ac-check-decl.patch
<br>
<p>diff --git a/config/hwloc.m4 b/config/hwloc.m4
<br>
<p>index 855244d..49955a6 100644
<br>
<p>--- a/config/hwloc.m4
<br>
<p>+++ b/config/hwloc.m4
<br>
<p>@@ -367,7 +367,7 @@ EOF])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([ctype.h])
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_FUNCS([strncasecmp], [
<br>
<p>-      _HWLOC_CHECK_DECL([strncasecmp], [
<br>
<p>+      AC_CHECK_DECLS([strncasecmp], [
<br>
<p>&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_DECL_STRNCASECMP], [1], [Define to 1 if function `strncasecmp' is declared by system headers])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>[...]
<br>
<p>Samuel pushed a better fix (already in master, I'll backport to v1.11.x after checking the configure logs on our regression platform)
<br>
<p><p>windows-compatibility-changes.patch
<br>
<p>diff --git a/config/hwloc.m4 b/config/hwloc.m4
<br>
<p>index 49955a6..12230e1 100644
<br>
<p>--- a/config/hwloc.m4
<br>
<p>+++ b/config/hwloc.m4
<br>
<p>@@ -362,7 +362,7 @@ EOF])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([unistd.h])
<br>
<p>-    AC_CHECK_HEADERS([dirent.h])
<br>
<p>+    AC_CHECK_HEADERS([dirent.h], [hwloc_have_dirent=yes])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([strings.h])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([ctype.h])
<br>
<p>I am dropping the dirent changes and just disabling hwloc-ps entirely on Windows.
<br>
<p><p><p>+    AC_CHECK_LIB([user32], [PostQuitMessage], [hwloc_have_user32=&quot;yes&quot;])
<br>
<p><p><p>The user32 part is applied.
<br>
<p><p><p><p>@@ -381,6 +381,21 @@ static __hwloc_inline int hwloc_strncasecmp(const char *s1, const char *s2, size
<br>
<p>&nbsp;#endif
<br>
<p>&nbsp;}
<br>
<p><p><p>+static __hwloc_inline int hwloc_strcasecmp(const char *s1, const char *s2)
<br>
<p>+{
<br>
<p>+#ifdef HWLOC_HAVE_DECL_STRCASECMP
<br>
<p>+  return strcasecmp(s1, s2);
<br>
<p>+#else
<br>
<p>+  while (1) {
<br>
<p>+    char c1 = tolower(*s1), c2 = tolower(*s2);
<br>
<p>+    if (!c1 || !c2 || c1 != c2)
<br>
<p>+      return c1-c2;
<br>
<p>+    s1++; s2++;
<br>
<p>+  }
<br>
<p>+  return 0;
<br>
<p>+#endif
<br>
<p>+}
<br>
<p>+
<br>
<p>&nbsp;static __hwloc_inline hwloc_obj_type_t hwloc_cache_type_by_depth_type(unsigned depth, hwloc_obj_cache_type_t type)
<br>
<p>&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;if (type == HWLOC_OBJ_CACHE_INSTRUCTION) {
<br>
<p>@@ -407,4 +422,25 @@ static __hwloc_inline int hwloc_obj_type_is_io (hwloc_obj_type_t type)
<br>
<p>&nbsp;&nbsp;&nbsp;return type &gt;= HWLOC_OBJ_BRIDGE &amp;&amp; type &lt;= HWLOC_OBJ_OS_DEVICE;
<br>
<p>&nbsp;}
<br>
<p><p><p>+#ifdef HWLOC_WIN_SYS
<br>
<p>+#  ifndef HAVE_SSIZE_T
<br>
<p>+typedef SSIZE_T ssize_t;
<br>
<p>+#  endif
<br>
<p>+#  ifndef HAVE_SNPRINTF
<br>
<p>+#    define snprintf hwloc_snprintf
<br>
<p>+#  endif
<br>
<p>+#  if !HAVE_DECL_STRTOULL &amp;&amp; !defined(HAVE_STRTOULL)
<br>
<p>+#    define strtoull _strtoui64
<br>
<p>+#  endif
<br>
<p>+#  if !HAVE_DECL_S_ISREG
<br>
<p>+#    define S_ISREG(mode) (mode &amp; _S_IFREG)
<br>
<p>+#  endif
<br>
<p>+#  if !HAVE_DECL_S_ISDIR
<br>
<p>+#    define S_ISDIR(mode) (mode &amp; _S_IFDIR)
<br>
<p>+#  endif
<br>
<p>+#  ifndef HAVE_STRCASECMP
<br>
<p>+#    define strcasecmp hwloc_strcasecmp
<br>
<p>+#  endif
<br>
<p>+#endif
<br>
<p>+
<br>
<p>&nbsp;#endif /* HWLOC_PRIVATE_MISC_H */
<br>
<p>Overall this looks OK.
<br>
<p>In the MSVC project under contrib/windows/, we use a hardwired hwloc_config.h which says:
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
<p>For strdup and putenv, my MSVC fails with &quot;The POSIX name for this item is deprecated. Instead use the ISO C++ conformant name: _foo.&quot;
<br>
I wonder why you didn't have this problem?
<br>
<p>Is _stricmp() OK instead of your code for hwloc_strcasecmp() ?
<br>
<p>Don't you have S_IFMT and S_IFREG/DIR without _ prefix?
<br>
<p>Brice
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-1095-gf683068)"</a>
<li><strong>Previous message:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
