<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 22:08:28 2008" -->
<!-- isoreceived="20080124030828" -->
<!-- sent="Wed, 23 Jan 2008 19:08:21 -0800" -->
<!-- isosent="20080124030821" -->
<!-- name="Dean Dauger, Ph. D." -->
<!-- email="d_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="130F6214-CEB0-4351-84EE-492D09FB7989_at_daugerresearch.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3.1201021214.21566.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Dean Dauger, Ph. D. (<em>d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 22:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3027.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I think I have a possible explanation for this problem.  Previously  
<br>
orterun was jumping to 0x00000000:
<br>
<p><span class="quotelev1">&gt; [Rotarran-X-5:04475] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [ 1] [0xbffff828, 0x00000000] (-P-)
</span><br>
<p>On a hunch I tried changing the number of bool's in the  
<br>
orte_pls_rsh_component_t data structure of pls_rsh.h. Another bus  
<br>
error occurred with orterun jumping to 0x80000000 instead.  So I went  
<br>
further and changed the layout of the orte_pls_rsh_component_t struct  
<br>
from something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool reap;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool assume_same_shell;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool force_rsh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char** agent_argv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int agent_argc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* agent_path;
<br>
<p>to this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char** agent_argv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* agent_path;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int agent_argc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int unusedInt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool reap;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool assume_same_shell;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool force_rsh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool unusedB;
<br>
<p>recompiled, dropped the new .la and .so pieces in, and then it all  
<br>
worked.
<br>
<p>My hunch is that I'm having a data alignment problem.  Perhaps the  
<br>
pointer reference to _launch of the pls module is stored after the  
<br>
orte_pls_rsh_component_t struct, but then alignment that given build  
<br>
assumes is different from that of my newly compiled pls module.   
<br>
Apple usually compiles with every type on its &quot;natural&quot; alignment in  
<br>
memory (PowerPC always liked it that way and the habit has stuck) and  
<br>
looking at 3 bools followed by a char** tells me there could be padding.
<br>
<p>The problem, rather than whether or not to have padding, is what do  
<br>
we agree on.  I don't know who put what memory align compiler flag in  
<br>
what makefile or ./configure line, but if I rearrange the struct into  
<br>
the latter example above then I have no ambiguity, so orterun() calls  
<br>
_launch just fine in the rsh module and my own.
<br>
<p>Thanks for your help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Dean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3027.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
