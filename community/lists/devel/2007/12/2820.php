<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 14:45:20 2007" -->
<!-- isoreceived="20071212194520" -->
<!-- sent="Wed, 12 Dec 2007 14:44:45 -0500" -->
<!-- isosent="20071212194445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)" -->
<!-- id="B78E41F2-2995-4A1C-93FE-8CF2CD691EE0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071212191505.GG19514_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 14:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Reply:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- something changed; I tested all 4 languages extensively before  
<br>
I committed (but not on mac).  This fails for me on Linux as well;  
<br>
I'll check into it...
<br>
<p>On Dec 12, 2007, at 2:15 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this change (or r16908) causing the below error in the MTT
</span><br>
<span class="quotelev1">&gt; trivial test (f77_hello)? The error occurs on Solaris and
</span><br>
<span class="quotelev1">&gt; Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  NOTICE: Invoking /ws/ompi-tools/SUNWspro/SOS11/bin/f90 -f77 -ftrap= 
</span><br>
<span class="quotelev1">&gt; %none -I&lt;scratch&gt;/installs/cGmK/install/include/v9 -xarch=amd64  
</span><br>
<span class="quotelev1">&gt; hello.f -o f77_hello -R&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -R/ 
</span><br>
<span class="quotelev1">&gt; opt/mx/lib -L&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -lmpi_f77 - 
</span><br>
<span class="quotelev1">&gt; lmpi -lopen-rte -lopen-pal -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt;  hello.f:
</span><br>
<span class="quotelev1">&gt;   MAIN main:
</span><br>
<span class="quotelev1">&gt;  Undefined			first referenced
</span><br>
<span class="quotelev1">&gt;   symbol  			    in file
</span><br>
<span class="quotelev1">&gt;  intercept_extra_state_t_class       &lt;scratch&gt;/installs/cGmK/install/ 
</span><br>
<span class="quotelev1">&gt; lib/amd64/libmpi_f77.so
</span><br>
<span class="quotelev1">&gt;  ld: fatal: Symbol referencing errors. No output written to f77_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See also <a href="http://www.open-mpi.org/mtt/index.php?do_redir=475">http://www.open-mpi.org/mtt/index.php?do_redir=475</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Didn't look that closely here, just noted the line change
</span><br>
<span class="quotelev1">&gt; involving &quot;intercept_extra_state&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec/09/2007 07:19:59PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-12-09 19:19:58 EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 16909
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16909">https://svn.open-mpi.org/trac/ompi/changeset/16909</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Avoid a compiler warning about the function being defined but not
</span><br>
<span class="quotelev2">&gt;&gt; used when we compile the profiling layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mpi/f77/register_datarep_f.c |     6 +++---
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 3 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mpi/f77/register_datarep_f.c
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mpi/f77/register_datarep_f.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mpi/f77/register_datarep_f.c	2007-12-09 19:19:58 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Aint *extra_state_f77;
</span><br>
<span class="quotelev2">&gt;&gt; } intercept_extra_state_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev2">&gt;&gt; static void  
</span><br>
<span class="quotelev2">&gt;&gt; intercept_extra_state_constructor(intercept_extra_state_t *obj)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     obj-&gt;read_fn_f77 = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -98,9 +101,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     obj-&gt;extra_state_f77 = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_CLASS_INSTANCE(intercept_extra_state_t,
</span><br>
<span class="quotelev2">&gt;&gt;                    opal_list_item_t,
</span><br>
<span class="quotelev2">&gt;&gt;                    intercept_extra_state_constructor, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Reply:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
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
