<?
$subject_val = "Re: [OMPI devel] OpenMPI and SGE integration made more stable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 03:00:57 2012" -->
<!-- isoreceived="20120727070057" -->
<!-- sent="Fri, 27 Jul 2012 09:00:50 +0200" -->
<!-- isosent="20120727070050" -->
<!-- name="Daniel Gruber" -->
<!-- email="dgruber_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and SGE integration made more stable" -->
<!-- id="7FEBB19F-6EF7-4868-8A66-9B892A3F2F96_at_univa.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B4BA2F6B-2991-49E3-9E1C-CC46980E208E_at_chemie.uni-kl.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI and SGE integration made more stable<br>
<strong>From:</strong> Daniel Gruber (<em>dgruber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 03:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11329.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11324.php">Christoph van W&#252;llen: "[OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Setting the stack size limit to the vmem limit was fixed long 
<br>
time ago in 2009 for SGE 6.2u3 hence it should work in 
<br>
all later versions as well as in all SGE 6.2u5 successors 
<br>
like Univa Grid Engine. Hence the exact version number
<br>
would be interesting.
<br>
<p>Daniel
<br>
<p><p>Am 26.07.2012 um 18:02 schrieb Christoph van W&#252;llen:
<br>
<p><span class="quotelev1">&gt; It is a long-standing problem that due to a bug in Sun GridEngine
</span><br>
<span class="quotelev1">&gt; (setting the stack size limit equal to the address space limit)
</span><br>
<span class="quotelev1">&gt; using qrsh from within OpenMPI fails if a large memory is requested
</span><br>
<span class="quotelev1">&gt; but the stack size not explicitly set to a reasonably small value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best solution were if SGE just would not touch the stack
</span><br>
<span class="quotelev1">&gt; size limit and leave it at INFINITY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I have tested that just reducing the stack size limit in
</span><br>
<span class="quotelev1">&gt; file orte/mca/plm/rsh/plm_rsh_module.c, function ssh_child()  before
</span><br>
<span class="quotelev1">&gt; execv'ing qrsh circumvents the problem,  so just after exec_patch is set
</span><br>
<span class="quotelev1">&gt; by strdup(...)   I inserted the lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;   struct rlimit rlim;
</span><br>
<span class="quotelev1">&gt;   int l;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   l=strlen(exec_path);
</span><br>
<span class="quotelev1">&gt;   if (l &gt; 5 &amp;&amp; !strcmp(&quot;/qrsh&quot;, exec_path + (l-5))) {
</span><br>
<span class="quotelev1">&gt;     getrlimit(RLIMIT_STACK, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;     if (rlim.rlim_max &gt; 10000000L) rlim.rlim_max=10000000L;
</span><br>
<span class="quotelev1">&gt;     if (rlim.rlim_cur &gt; 10000000L) rlim.rlim_cur=10000000L;
</span><br>
<span class="quotelev1">&gt;     setrlimit(RLIMIT_STACK, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks quick-and-dirty and it certainly is, but it solves a severe
</span><br>
<span class="quotelev1">&gt; problem many users have with OpenMPI and SGE. Feel free to use this
</span><br>
<span class="quotelev1">&gt; information as you like. Note that MPI worker jobs eventually
</span><br>
<span class="quotelev1">&gt; spawned off on &quot;distant&quot; nodes do not suffer from the reduced stack
</span><br>
<span class="quotelev1">&gt; size limit, it is only the qrsh command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this (still) of interest?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt; | Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
</span><br>
<span class="quotelev1">&gt; | TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
</span><br>
<span class="quotelev1">&gt; | Erwin-Schr&#246;dinger-Str.          |                                  |
</span><br>
<span class="quotelev1">&gt; | D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
</span><br>
<span class="quotelev1">&gt; |                                                                    |
</span><br>
<span class="quotelev1">&gt; | HomePage:  <a href="http://www.chemie.uni-kl.de/vanwullen">http://www.chemie.uni-kl.de/vanwullen</a>                   |
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11329.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11324.php">Christoph van W&#252;llen: "[OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
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
