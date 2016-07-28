<?
$subject_val = "[OMPI devel] Broken abort backtrace functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:00:17 2014" -->
<!-- isoreceived="20140929210017" -->
<!-- sent="Mon, 29 Sep 2014 14:00:16 -0700" -->
<!-- isosent="20140929210016" -->
<!-- name="Deva" -->
<!-- email="devendar.bureddy_at_[hidden]" -->
<!-- subject="[OMPI devel] Broken abort backtrace functionality" -->
<!-- id="CABB+w0SuvFhq8YdMBG--tqWpQLwAAKFDu3h4O8BzZK32dB2hcg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Broken abort backtrace functionality<br>
<strong>From:</strong> Deva (<em>devendar.bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 17:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15934.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 - trunk/ompi/mca/coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15932.php">Pritchard Jr., Howard: "[OMPI devel] release 1.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
<li><strong>Reply:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looks like OMPI_MCA_mpi_abort_print_stack=1 is broken.  I'm seeing
<br>
following warning with it.
<br>
<p>--------------------------
<br>
$mpirun -np 2  -x OMPI_MCA_mpi_abort_print_stack=1 ./hello_c
<br>
--------------------------------------------------------------------------
<br>
WARNING: A user-supplied value attempted to override the default-only MCA
<br>
variable named &quot;mpi_abort_print_stack&quot;.
<br>
<p>The user-supplied value was ignored.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A user-supplied value attempted to override the default-only MCA
<br>
variable named &quot;mpi_abort_print_stack&quot;.
<br>
<p>The user-supplied value was ignored.
<br>
--------------------------------------------------------------------------
<br>
Hello, world, I am 1 of 2,
<br>
Hello, world, I am 0 of 2,
<br>
----------------------------------
<br>
<p><p>It seems HAVE_BACKTRACE is not defined by any configuration but, below
<br>
relevant code is guarded with it.
<br>
<p><p>#if OPAL_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; defined(HAVE_BACKTRACE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_INFO_LVL_9,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_SCOPE_READONLY,
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_FLAG_DEFAULT_ONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_INFO_LVL_9,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_SCOPE_CONSTANT,
<br>
#endif
<br>
<p>$git grep HAVE_BACKTRACE
<br>
ompi/runtime/ompi_mpi_params.c:#if OPAL_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp;
<br>
defined(HAVE_BACKTRACE)
<br>
$
<br>
<p><p><pre>
-- 
-Devendar
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15934.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 - trunk/ompi/mca/coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15932.php">Pritchard Jr., Howard: "[OMPI devel] release 1.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
<li><strong>Reply:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
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
