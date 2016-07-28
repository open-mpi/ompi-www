<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 14:15:15 2007" -->
<!-- isoreceived="20071212191515" -->
<!-- sent="Wed, 12 Dec 2007 14:15:06 -0500" -->
<!-- isosent="20071212191506" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)" -->
<!-- id="20071212191505.GG19514_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200712100019.lBA0Jx5a013556_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 14:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Reply:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is this change (or r16908) causing the below error in the MTT
<br>
trivial test (f77_hello)? The error occurs on Solaris and
<br>
Linux.
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;NOTICE: Invoking /ws/ompi-tools/SUNWspro/SOS11/bin/f90 -f77 -ftrap=%none -I&lt;scratch&gt;/installs/cGmK/install/include/v9 -xarch=amd64 hello.f -o f77_hello -R&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -R/opt/mx/lib -L&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -lsocket -lnsl -lrt -lm
<br>
&nbsp;&nbsp;hello.f:
<br>
&nbsp;&nbsp;&nbsp;MAIN main:
<br>
&nbsp;&nbsp;Undefined			first referenced
<br>
&nbsp;&nbsp;&nbsp;symbol  			    in file
<br>
&nbsp;&nbsp;intercept_extra_state_t_class       &lt;scratch&gt;/installs/cGmK/install/lib/amd64/libmpi_f77.so
<br>
&nbsp;&nbsp;ld: fatal: Symbol referencing errors. No output written to f77_hello
<br>
<p>See also <a href="http://www.open-mpi.org/mtt/index.php?do_redir=475">http://www.open-mpi.org/mtt/index.php?do_redir=475</a>.
<br>
<p>Didn't look that closely here, just noted the line change
<br>
involving &quot;intercept_extra_state&quot;.
<br>
<p>-Ethan
<br>
<p><p>On Sun, Dec/09/2007 07:19:59PM, bosilca_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-12-09 19:19:58 EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16909
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16909">https://svn.open-mpi.org/trac/ompi/changeset/16909</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Avoid a compiler warning about the function being defined but not
</span><br>
<span class="quotelev1">&gt; used when we compile the profiling layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/f77/register_datarep_f.c |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/register_datarep_f.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/register_datarep_f.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/register_datarep_f.c	2007-12-09 19:19:58 EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev1">&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev1">&gt;      MPI_Aint *extra_state_f77;
</span><br>
<span class="quotelev1">&gt;  } intercept_extra_state_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt;  static void intercept_extra_state_constructor(intercept_extra_state_t *obj)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      obj-&gt;read_fn_f77 = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -98,9 +101,6 @@
</span><br>
<span class="quotelev1">&gt;      obj-&gt;extra_state_f77 = NULL;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt;  OBJ_CLASS_INSTANCE(intercept_extra_state_t,
</span><br>
<span class="quotelev1">&gt;                     opal_list_item_t,
</span><br>
<span class="quotelev1">&gt;                     intercept_extra_state_constructor, NULL);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Reply:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
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
