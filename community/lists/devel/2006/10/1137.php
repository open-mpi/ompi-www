<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 16:27:11 2006" -->
<!-- isoreceived="20061023202711" -->
<!-- sent="Mon, 23 Oct 2006 22:26:56 +0200" -->
<!-- isosent="20061023202656" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] help config.status to not mess up substitutions" -->
<!-- id="20061023202655.GB2411_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-10-23 16:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Reply:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please apply this robustness patch, which helps to avoid accidental
<br>
unwanted substitutions done by config.status.  From all I can tell,
<br>
they do not happen now, but first the Autoconf manual warns against
<br>
them, second they make some config.status optimizations so much more
<br>
difficult than necessary.  :-)
<br>
<p>In unrelated news, I tested Automake 1.10 with OpenMPI, and it saves
<br>
about 15s of config.status time, and about half a minute of `make dist'
<br>
time on my system.  Some pending Fortran changes have only made it into
<br>
Automake after 1.10 was released.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>2006-10-23  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* opal/tools/wrappers/Makefile.am: Protect manual substitutions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from config.status.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/tools/wrappers/Makefile.am: Likewise.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orte/tools/wrappers/Makefile.am: Likewise.
<br>
<p>Index: opal/tools/wrappers/Makefile.am
<br>
===================================================================
<br>
--- opal/tools/wrappers/Makefile.am	(revision 12254)
<br>
+++ opal/tools/wrappers/Makefile.am	(working copy)
<br>
@@ -76,8 +76,8 @@
<br>
&nbsp;
<br>
&nbsp;opalcc.1: opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f opalcc.1
<br>
-	sed -e 's/@COMMAND@/opalcc/g' -e 's/@PROJECT@/Open PAL/g' -e 's/@PROJECT_SHORT@/OPAL/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalcc.1
<br>
+	sed -e 's/[@]COMMAND[@]/opalcc/g' -e 's/[@]PROJECT[@]/Open PAL/g' -e 's/[@]PROJECT_SHORT[@]/OPAL/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalcc.1
<br>
&nbsp;
<br>
&nbsp;opalc++.1: opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f opalc++.1
<br>
-	sed -e 's/@COMMAND@/opalc++/g' -e 's/@PROJECT@/Open PAL/g' -e 's/@PROJECT_SHORT@/OPAL/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalc++.1
<br>
+	sed -e 's/[@]COMMAND[@]/opalc++/g' -e 's/[@]PROJECT[@]/Open PAL/g' -e 's/[@]PROJECT_SHORT[@]/OPAL/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalc++.1
<br>
Index: ompi/tools/wrappers/Makefile.am
<br>
===================================================================
<br>
--- ompi/tools/wrappers/Makefile.am	(revision 12254)
<br>
+++ ompi/tools/wrappers/Makefile.am	(working copy)
<br>
@@ -84,20 +84,20 @@
<br>
&nbsp;
<br>
&nbsp;mpicc.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f mpicc.1
<br>
-	sed -e 's/@COMMAND@/mpicc/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicc.1
<br>
+	sed -e 's/[@]COMMAND[@]/mpicc/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicc.1
<br>
&nbsp;
<br>
&nbsp;mpic++.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f mpic++.1
<br>
-	sed -e 's/@COMMAND@/mpic++/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpic++.1
<br>
+	sed -e 's/[@]COMMAND[@]/mpic++/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpic++.1
<br>
&nbsp;
<br>
&nbsp;mpicxx.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f mpicxx.1
<br>
-	sed -e 's/@COMMAND@/mpicxx/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicxx.1
<br>
+	sed -e 's/[@]COMMAND[@]/mpicxx/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicxx.1
<br>
&nbsp;
<br>
&nbsp;mpif77.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f mpif77.1
<br>
-	sed -e 's/@COMMAND@/mpif77/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/Fortran 77/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif77.1
<br>
+	sed -e 's/[@]COMMAND[@]/mpif77/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/Fortran 77/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif77.1
<br>
&nbsp;
<br>
&nbsp;mpif90.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f mpif90.1
<br>
-	sed -e 's/@COMMAND@/mpif90/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/Fortran 90/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif90.1
<br>
+	sed -e 's/[@]COMMAND[@]/mpif90/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/Fortran 90/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif90.1
<br>
Index: orte/tools/wrappers/Makefile.am
<br>
===================================================================
<br>
--- orte/tools/wrappers/Makefile.am	(revision 12254)
<br>
+++ orte/tools/wrappers/Makefile.am	(working copy)
<br>
@@ -51,8 +51,8 @@
<br>
&nbsp;
<br>
&nbsp;ortecc.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f ortecc.1
<br>
-	sed -e 's/@COMMAND@/ortecc/g' -e 's/@PROJECT@/OpenRTE/g' -e 's/@PROJECT_SHORT@/ORTE/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortecc.1
<br>
+	sed -e 's/[@]COMMAND[@]/ortecc/g' -e 's/[@]PROJECT[@]/OpenRTE/g' -e 's/[@]PROJECT_SHORT[@]/ORTE/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortecc.1
<br>
&nbsp;
<br>
&nbsp;ortec++.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f ortec++.1
<br>
-	sed -e 's/@COMMAND@/ortec++/g' -e 's/@PROJECT@/OpenRTE/g' -e 's/@PROJECT_SHORT@/ORTE/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortec++.1
<br>
+	sed -e 's/[@]COMMAND[@]/ortec++/g' -e 's/[@]PROJECT[@]/OpenRTE/g' -e 's/[@]PROJECT_SHORT[@]/ORTE/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortec++.1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Reply:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
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
