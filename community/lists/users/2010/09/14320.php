<?
$subject_val = "Re: [OMPI users] How to know which process is running on which core?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:34:32 2010" -->
<!-- isoreceived="20100924123432" -->
<!-- sent="Fri, 24 Sep 2010 08:34:27 -0400" -->
<!-- isosent="20100924123427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to know which process is running on which core?" -->
<!-- id="7668D1FA-6736-4339-9555-5517FFC55B39_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D57346CD-F215-4F5B-B8A7-3561D13533C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to know which process is running on which core?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14321.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14319.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I completely neglected to mention that you could also use hwloc (Hardware Locality), a small utility library for learning topology-kinds of things (including if you're bound, where you're bound, etc.).  Hwloc is a sub-project of Open MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>Open MPI uses hwloc internally, but you could also link your application against hwloc and call its C functions to get information about your process' locality, etc.
<br>
<p><p><p>On Sep 24, 2010, at 8:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On the OMPI SVN trunk, we have an &quot;Open MPI extension&quot; call named OMPI_Affinity_str().  Below is an excerpt from the man page.  If this is desirable, we can probably get it into 1.5.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NAME
</span><br>
<span class="quotelev1">&gt;       OMPI_Affinity_str  -  Obtain  prettyprint strings of processor affinity
</span><br>
<span class="quotelev1">&gt;       information for this process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SYNTAX
</span><br>
<span class="quotelev1">&gt; C Syntax
</span><br>
<span class="quotelev1">&gt;       #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;       #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       int OMPI_Affinity_str(char ompi_bound[OMPI_AFFINITY_STRING_MAX],
</span><br>
<span class="quotelev1">&gt;                             char current_binding[OMPI_AFFINITY_STRING_MAX],
</span><br>
<span class="quotelev1">&gt;                             char exists[OMPI_AFFINITY_STRING_MAX])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; OUTPUT PARAMETERS
</span><br>
<span class="quotelev1">&gt;       ompi_bound
</span><br>
<span class="quotelev1">&gt;                 A prettyprint string describing what  processor(s)  Open  MPI
</span><br>
<span class="quotelev1">&gt;                 bound  this  process to, or a string indicating that Open MPI
</span><br>
<span class="quotelev1">&gt;                 did not bind this process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       current_binding
</span><br>
<span class="quotelev1">&gt;                 A  prettyprint  string  describing  what  processor(s)   this
</span><br>
<span class="quotelev1">&gt;                 process  is  currently  bound to, or a string indicating that
</span><br>
<span class="quotelev1">&gt;                 the process is bound to  all  available  processors  (and  is
</span><br>
<span class="quotelev1">&gt;                 therefore considered &quot;unbound&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       exists    A  prettyprint  string  describing  the available sockets and
</span><br>
<span class="quotelev1">&gt;                 cores on this host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2010, at 11:10 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You mean via an API of some kind? Not through an MPI call, but you can do it (though your code will wind up OMPI-specific). Look at the OMPI source code in opal/mca/paffinity/paffinity.h and you'll see the necessary calls as well as some macros to help parse the results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depending upon what version you are using, there may also be a function in opal/mca/paffinity/base/base.h to pretty-print that info for you. I believe it may only be in the developer's trunk right now, or it may have made it into the 1.5.0 release candidate....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 23, 2010 at 11:24 AM, Fernando Saez &lt;saezfernando_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all, I'm new in the list. I don't know if this post has been treated before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way in the OMPI library to report which process is running
</span><br>
<span class="quotelev2">&gt;&gt; on which core in a SMP system? I need to know processor affinity for optimizations issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fernando Saez
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14321.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14319.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
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
