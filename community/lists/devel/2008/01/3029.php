<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 22:20:07 2008" -->
<!-- isoreceived="20080124032007" -->
<!-- sent="Wed, 23 Jan 2008 20:19:55 -0700" -->
<!-- isosent="20080124031955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="C3BD51EB.4385%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="130F6214-CEB0-4351-84EE-492D09FB7989_at_daugerresearch.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 22:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3030.php">Jeff Squyres: "[OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry, but now I am totally confused. Are you saying that you are having
<br>
problems with the default rsh component in the distributed 1.2.3 code?? Or
<br>
are you having a problem with your customized version? What compiler are you
<br>
using? If it's your customized version, did you make sure to change the
<br>
names of the data structures and modules as I pointed out?
<br>
<p>We regularly work on Macs, both PPC and Intel based (I develop and test on
<br>
both every day), and I have -never- seen this problem in our code base.
<br>
Hence my confusion.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 1/23/08 8:08 PM, &quot;Dean Dauger, Ph. D.&quot; &lt;d_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I have a possible explanation for this problem.  Previously
</span><br>
<span class="quotelev1">&gt; orterun was jumping to 0x00000000:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Rotarran-X-5:04475] Failing at address: 0x0
</span><br>
<span class="quotelev2">&gt;&gt; [ 1] [0xbffff828, 0x00000000] (-P-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a hunch I tried changing the number of bool's in the
</span><br>
<span class="quotelev1">&gt; orte_pls_rsh_component_t data structure of pls_rsh.h. Another bus
</span><br>
<span class="quotelev1">&gt; error occurred with orterun jumping to 0x80000000 instead.  So I went
</span><br>
<span class="quotelev1">&gt; further and changed the layout of the orte_pls_rsh_component_t struct
</span><br>
<span class="quotelev1">&gt; from something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      bool reap;
</span><br>
<span class="quotelev1">&gt;      bool assume_same_shell;
</span><br>
<span class="quotelev1">&gt;      bool force_rsh;
</span><br>
<span class="quotelev1">&gt;      char** agent_argv;
</span><br>
<span class="quotelev1">&gt;      int agent_argc;
</span><br>
<span class="quotelev1">&gt;      char* agent_path;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      char** agent_argv;
</span><br>
<span class="quotelev1">&gt;      char* agent_path;
</span><br>
<span class="quotelev1">&gt;      int agent_argc;
</span><br>
<span class="quotelev1">&gt;      int unusedInt;
</span><br>
<span class="quotelev1">&gt;      bool reap;
</span><br>
<span class="quotelev1">&gt;      bool assume_same_shell;
</span><br>
<span class="quotelev1">&gt;      bool force_rsh;
</span><br>
<span class="quotelev1">&gt;      bool unusedB;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; recompiled, dropped the new .la and .so pieces in, and then it all
</span><br>
<span class="quotelev1">&gt; worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My hunch is that I'm having a data alignment problem.  Perhaps the
</span><br>
<span class="quotelev1">&gt; pointer reference to _launch of the pls module is stored after the
</span><br>
<span class="quotelev1">&gt; orte_pls_rsh_component_t struct, but then alignment that given build
</span><br>
<span class="quotelev1">&gt; assumes is different from that of my newly compiled pls module.
</span><br>
<span class="quotelev1">&gt; Apple usually compiles with every type on its &quot;natural&quot; alignment in
</span><br>
<span class="quotelev1">&gt; memory (PowerPC always liked it that way and the habit has stuck) and
</span><br>
<span class="quotelev1">&gt; looking at 3 bools followed by a char** tells me there could be padding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem, rather than whether or not to have padding, is what do
</span><br>
<span class="quotelev1">&gt; we agree on.  I don't know who put what memory align compiler flag in
</span><br>
<span class="quotelev1">&gt; what makefile or ./configure line, but if I rearrange the struct into
</span><br>
<span class="quotelev1">&gt; the latter example above then I have no ambiguity, so orterun() calls
</span><br>
<span class="quotelev1">&gt; _launch just fine in the rsh module and my own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;     Dean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3030.php">Jeff Squyres: "[OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
