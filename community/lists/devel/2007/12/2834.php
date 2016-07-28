<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 20:08:02 2007" -->
<!-- isoreceived="20071213010802" -->
<!-- sent="Wed, 12 Dec 2007 20:07:55 -0500" -->
<!-- isosent="20071213010755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)" -->
<!-- id="7F868A3E-23C7-43E8-9DC8-FA5B2FB0E241_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B78E41F2-2995-4A1C-93FE-8CF2CD691EE0_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 20:07:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The logic was wrong. I only get half of it. Commit 16950 solve the  
<br>
problem. Sorry for this.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 12, 2007, at 2:44 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yes -- something changed; I tested all 4 languages extensively before
</span><br>
<span class="quotelev1">&gt; I committed (but not on mac).  This fails for me on Linux as well;
</span><br>
<span class="quotelev1">&gt; I'll check into it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 2:15 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this change (or r16908) causing the below error in the MTT
</span><br>
<span class="quotelev2">&gt;&gt; trivial test (f77_hello)? The error occurs on Solaris and
</span><br>
<span class="quotelev2">&gt;&gt; Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; NOTICE: Invoking /ws/ompi-tools/SUNWspro/SOS11/bin/f90 -f77 -ftrap=
</span><br>
<span class="quotelev2">&gt;&gt; %none -I&lt;scratch&gt;/installs/cGmK/install/include/v9 -xarch=amd64
</span><br>
<span class="quotelev2">&gt;&gt; hello.f -o f77_hello -R&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -R/
</span><br>
<span class="quotelev2">&gt;&gt; opt/mx/lib -L&lt;scratch&gt;/installs/cGmK/install/lib/amd64 -lmpi_f77 -
</span><br>
<span class="quotelev2">&gt;&gt; lmpi -lopen-rte -lopen-pal -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev2">&gt;&gt; hello.f:
</span><br>
<span class="quotelev2">&gt;&gt;  MAIN main:
</span><br>
<span class="quotelev2">&gt;&gt; Undefined			first referenced
</span><br>
<span class="quotelev2">&gt;&gt;  symbol  			    in file
</span><br>
<span class="quotelev2">&gt;&gt; intercept_extra_state_t_class       &lt;scratch&gt;/installs/cGmK/install/
</span><br>
<span class="quotelev2">&gt;&gt; lib/amd64/libmpi_f77.so
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: Symbol referencing errors. No output written to f77_hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See also <a href="http://www.open-mpi.org/mtt/index.php?do_redir=475">http://www.open-mpi.org/mtt/index.php?do_redir=475</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Didn't look that closely here, just noted the line change
</span><br>
<span class="quotelev2">&gt;&gt; involving &quot;intercept_extra_state&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Dec/09/2007 07:19:59PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-12-09 19:19:58 EST (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 16909
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16909">https://svn.open-mpi.org/trac/ompi/changeset/16909</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Avoid a compiler warning about the function being defined but not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used when we compile the profiling layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mpi/f77/register_datarep_f.c |     6 +++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1 files changed, 3 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/register_datarep_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/register_datarep_f.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/register_datarep_f.c	2007-12-09 19:19:58 EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sun, 09 Dec 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,6 +90,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Aint *extra_state_f77;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } intercept_extra_state_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercept_extra_state_constructor(intercept_extra_state_t *obj)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    obj-&gt;read_fn_f77 = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -98,9 +101,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    obj-&gt;extra_state_f77 = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OBJ_CLASS_DECLARATION(intercept_extra_state_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if !OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OBJ_CLASS_INSTANCE(intercept_extra_state_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   opal_list_item_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   intercept_extra_state_constructor, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2834/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
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
