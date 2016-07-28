<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 09:28:17 2006" -->
<!-- isoreceived="20060113142817" -->
<!-- sent="Fri, 13 Jan 2006 15:28:09 +0100" -->
<!-- isosent="20060113142809" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="f77_check.m4 changes" -->
<!-- id="20060113142809.GB27830_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-01-13 09:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>Did you mean this in your recent changes to the trunk?
<br>
I'm not quite sure, I don't really understand the code
<br>
at a glance.
<br>
<p>Without it, configure barfs over here because it contains
<br>
&nbsp;&nbsp;if ...; then
<br>
&nbsp;&nbsp;fi
<br>
somewhere, which is a shell syntax error.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: config/f77_check.m4
<br>
===================================================================
<br>
--- config/f77_check.m4	(revision 8684)
<br>
+++ config/f77_check.m4	(working copy)
<br>
@@ -70,12 +70,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Look for a corresponding C type (will abort by itself if the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# type isn't found and we need it)
<br>
-            if test &quot;$3&quot; != &quot;&quot;; then
<br>
-                OMPI_FIND_TYPE([$1], [$3], [$2], [$ofc_type_size], [ofc_c_type])
<br>
-                if test -z &quot;$ofc_c_type&quot;; then
<br>
-                    ofc_have_type=
<br>
-                fi
<br>
-            fi
<br>
+	    m4_ifval([$3], [OMPI_FIND_TYPE([$1], [$3], [$2], [$ofc_type_size], [ofc_c_type])
<br>
+			    if test -z &quot;$ofc_c_type&quot;; then
<br>
+				ofc_have_type=
<br>
+			    fi])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Get the alignment of the type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ofc_have_type&quot; = &quot;1&quot;; then
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
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
