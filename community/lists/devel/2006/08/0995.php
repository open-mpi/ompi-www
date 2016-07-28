<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 16 14:59:35 2006" -->
<!-- isoreceived="20060816185935" -->
<!-- sent="Wed, 16 Aug 2006 20:59:30 +0200" -->
<!-- isosent="20060816185930" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] robustify config against picky compiler flags" -->
<!-- id="20060816185929.GG15270_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-16 14:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="0994.php">Brian Barrett: "[OMPI devel] Open MPI v1.2 branch started"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Autoconf has recently seen some effort to robustify configure tests
<br>
against picky GCC warning settings.  There is quite a way to go yet, but
<br>
it may still be useful to move the OpenMPI configury in that direction,
<br>
too.  So below is a patch that picks some low-hanging fruit on the way
<br>
to make
<br>
&nbsp;&nbsp;../ompi-trunk/configure -C CFLAGS='-W -Wall -Werror' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS='-W -Wall -Werror'
<br>
<p>work better with GCC.  Note that currently, the above will still produce
<br>
some wrong results, or may even fail one some systems; so it's really
<br>
just a first step in that direction.
<br>
<p>Also please double-check the changes to Windows specific files -- I did
<br>
not test them in any way.
<br>
<p>As a side effect, this patch fixes one typo in a comment, and one
<br>
underquoted pair of brackets that would make code from c_weak_symbols.m4
<br>
end up as
<br>
&nbsp;&nbsp;int main(int argc, char *argv);
<br>
<p>in the configure script.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: config/ompi_check_pthread_pids.m4
<br>
===================================================================
<br>
--- config/ompi_check_pthread_pids.m4	(revision 11225)
<br>
+++ config/ompi_check_pthread_pids.m4	(working copy)
<br>
@@ -44,7 +44,7 @@
<br>
&nbsp;#include &lt;unistd.h&gt;
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;void *checkpid(void *arg);
<br>
-int main(int argc, char* argv[]) {
<br>
+int main() {
<br>
&nbsp;&nbsp;&nbsp;pthread_t thr;
<br>
&nbsp;&nbsp;&nbsp;int pid, retval;
<br>
&nbsp;&nbsp;&nbsp;pid = getpid();
<br>
Index: config/ompi_microsoft.m4
<br>
===================================================================
<br>
--- config/ompi_microsoft.m4	(revision 11225)
<br>
+++ config/ompi_microsoft.m4	(working copy)
<br>
@@ -39,7 +39,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working InterlockedCompareExchange)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
-                     int main( int argc, char** argv ) {
<br>
+                     int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LONG dest = 1, exchange = 0, comperand = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SetErrorMode(SEM_FAILCRITICALERRORS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InterlockedCompareExchange( &amp;dest, exchange, comperand );
<br>
@@ -55,7 +55,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working InterlockedCompareExchangeAcquire)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
-                 int main( int argc, char** argv ) {
<br>
+                 int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LONG dest = 1, exchange = 0, comperand = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SetErrorMode(SEM_FAILCRITICALERRORS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InterlockedCompareExchangeAcquire( &amp;dest, exchange, comperand );
<br>
@@ -71,7 +71,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working InterlockedCompareExchangeRelease)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
-                 int main( int argc, char** argv ) {
<br>
+                 int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LONG dest = 1, exchange = 0, comperand = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SetErrorMode(SEM_FAILCRITICALERRORS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InterlockedCompareExchangeRelease( &amp;dest, exchange, comperand );
<br>
@@ -87,7 +87,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working InterlockedCompareExchange64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
-                 int main( int argc, char** argv ) {
<br>
+                 int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LONGLONG dest = 1, exchange = 0, comperand = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SetErrorMode(SEM_FAILCRITICALERRORS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InterlockedCompareExchange64( &amp;dest, exchange, comperand );
<br>
Index: config/ompi_setup_libevent.m4
<br>
===================================================================
<br>
--- config/ompi_setup_libevent.m4	(revision 11225)
<br>
+++ config/ompi_setup_libevent.m4	(working copy)
<br>
@@ -225,7 +225,7 @@
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;
<br>
&nbsp;int
<br>
-main(int argc, char **argv)
<br>
+main()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int kq;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n;
<br>
@@ -289,7 +289,7 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;int
<br>
-main(int argc, char **argv)
<br>
+main()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int epfd;
<br>
&nbsp;
<br>
Index: config/f77_get_value_true.m4
<br>
===================================================================
<br>
--- config/f77_get_value_true.m4	(revision 11225)
<br>
+++ config/f77_get_value_true.m4	(working copy)
<br>
@@ -56,7 +56,6 @@
<br>
&nbsp;
<br>
&nbsp;void $ompi_print_logical_fn(ompi_fortran_logical_t * logical)
<br>
&nbsp;{
<br>
-    int result = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FILE *f=fopen(&quot;conftestval&quot;, &quot;w&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!f) exit(1);
<br>
&nbsp;
<br>
@@ -89,7 +88,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[happy=0])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$happy&quot; = &quot;0&quot; ; then
<br>
-                 AC_MSG_ERROR([Could not determine value of Fotran .TRUE..  Aborting.])
<br>
+                 AC_MSG_ERROR([Could not determine value of Fortran .TRUE..  Aborting.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$cross_compiling&quot; = &quot;yes&quot;],
<br>
Index: config/ompi_config_asm.m4
<br>
===================================================================
<br>
--- config/ompi_config_asm.m4	(revision 11225)
<br>
+++ config/ompi_config_asm.m4	(working copy)
<br>
@@ -211,7 +211,7 @@
<br>
&nbsp;}
<br>
&nbsp;#endif
<br>
&nbsp;int
<br>
-main(int argc, char *argv[[]])
<br>
+main()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gsym_test_func();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
Index: config/cxx_find_template_repository.m4
<br>
===================================================================
<br>
--- config/cxx_find_template_repository.m4	(revision 11225)
<br>
+++ config/cxx_find_template_repository.m4	(working copy)
<br>
@@ -91,7 +91,7 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;int
<br>
-main(int argc, char *argv[])
<br>
+main()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;foo&lt;bar&gt; var1(6);
<br>
&nbsp;&nbsp;&nbsp;foo&lt; foo&lt;bar&gt; &gt; var2(var1);
<br>
Index: config/c_weak_symbols.m4
<br>
===================================================================
<br>
--- config/c_weak_symbols.m4	(revision 11225)
<br>
+++ config/c_weak_symbols.m4	(working copy)
<br>
@@ -33,7 +33,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &gt; conftest.c &lt;&lt;EOF
<br>
&nbsp;extern int fake(int i);
<br>
&nbsp;extern int real(int i);
<br>
-int main(int argc, char *argv[]) { return fake(3); }
<br>
+int main() { return fake(3); }
<br>
&nbsp;EOF
<br>
&nbsp;
<br>
&nbsp;# Try the compile
<br>
Index: config/ompi_check_icc.m4
<br>
===================================================================
<br>
--- config/ompi_check_icc.m4	(revision 11225)
<br>
+++ config/ompi_check_icc.m4	(working copy)
<br>
@@ -36,7 +36,7 @@
<br>
&nbsp;&nbsp;&nbsp;va_end (arglist);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-int main (int argc, char * argv[])
<br>
+int main ()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;FILE *f;
<br>
&nbsp;&nbsp;&nbsp;func (4711, &quot;Help %d [%s]\n&quot;, 10, &quot;ten&quot;);
<br>
Index: config/c_get_alignment.m4
<br>
===================================================================
<br>
--- config/c_get_alignment.m4	(revision 11225)
<br>
+++ config/c_get_alignment.m4	(working copy)
<br>
@@ -29,7 +29,7 @@
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;struct foo { char c; $1 x; };
<br>
-int main(int argc, char* argv[])
<br>
+int main()
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct foo *p = (struct foo *) malloc(sizeof(struct foo));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int diff;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">Jonathan Underwood: "[OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="0994.php">Brian Barrett: "[OMPI devel] Open MPI v1.2 branch started"</a>
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
