<?
$subject_val = "[OMPI devel] OpenMPI and SGE integration made more stable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 12:02:27 2012" -->
<!-- isoreceived="20120726160227" -->
<!-- sent="Thu, 26 Jul 2012 18:02:22 +0200" -->
<!-- isosent="20120726160222" -->
<!-- name="Christoph van W&#252;llen" -->
<!-- email="vanwullen_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI and SGE integration made more stable" -->
<!-- id="B4BA2F6B-2991-49E3-9E1C-CC46980E208E_at_chemie.uni-kl.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI and SGE integration made more stable<br>
<strong>From:</strong> Christoph van W&#252;llen (<em>vanwullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 12:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11325.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a long-standing problem that due to a bug in Sun GridEngine
<br>
(setting the stack size limit equal to the address space limit)
<br>
using qrsh from within OpenMPI fails if a large memory is requested
<br>
but the stack size not explicitly set to a reasonably small value.
<br>
<p>The best solution were if SGE just would not touch the stack
<br>
size limit and leave it at INFINITY.
<br>
<p>However I have tested that just reducing the stack size limit in
<br>
file orte/mca/plm/rsh/plm_rsh_module.c, function ssh_child()  before
<br>
execv'ing qrsh circumvents the problem,  so just after exec_patch is set
<br>
by strdup(...)   I inserted the lines
<br>
<p>&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;struct rlimit rlim;
<br>
&nbsp;&nbsp;&nbsp;int l;
<br>
<p>&nbsp;&nbsp;&nbsp;l=strlen(exec_path);
<br>
&nbsp;&nbsp;&nbsp;if (l &gt; 5 &amp;&amp; !strcmp(&quot;/qrsh&quot;, exec_path + (l-5))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getrlimit(RLIMIT_STACK, &amp;rlim);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rlim.rlim_max &gt; 10000000L) rlim.rlim_max=10000000L;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rlim.rlim_cur &gt; 10000000L) rlim.rlim_cur=10000000L;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setrlimit(RLIMIT_STACK, &amp;rlim);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p><p>It looks quick-and-dirty and it certainly is, but it solves a severe
<br>
problem many users have with OpenMPI and SGE. Feel free to use this
<br>
information as you like. Note that MPI worker jobs eventually
<br>
spawned off on &quot;distant&quot; nodes do not suffer from the reduced stack
<br>
size limit, it is only the qrsh command.
<br>
<p>Is this (still) of interest?
<br>
<p>+---------------------------------+----------------------------------+
<br>
| Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
<br>
| TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
<br>
| Erwin-Schr&#246;dinger-Str.          |                                  |
<br>
| D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
<br>
|                                                                    |
<br>
| HomePage:  <a href="http://www.chemie.uni-kl.de/vanwullen">http://www.chemie.uni-kl.de/vanwullen</a>                   |
<br>
+---------------------------------+----------------------------------+
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11325.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<li><strong>Previous message:</strong> <a href="11323.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26868 - in trunk/orte/mca/plm: base rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
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
