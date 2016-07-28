<?
$subject_val = "Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:22:05 2014" -->
<!-- isoreceived="20140929172205" -->
<!-- sent="Mon, 29 Sep 2014 10:22:01 -0700" -->
<!-- isosent="20140929172201" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()" -->
<!-- id="F93D48F6-5092-4359-9725-3A4C95C8E842_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwCNcDDzqQHqvj4NyFRDzWkVsJJHnLQPibQRFyMJvyqqhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 13:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15932.php">Pritchard Jr., Howard: "[OMPI devel] release 1.9"</a>
<li><strong>Previous message:</strong> <a href="15930.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch - the problem is that ompi_info_get_bool returns &quot;success&quot; if the value isn't found, setting &quot;flag&quot; to false, but doesn't set the value of the param itself. So if you don't specify &quot;blocking_fence&quot; in MPI_Info, then the &quot;blocking_fence&quot; flag wasn't being set.
<br>
<p>Fixed in r32812 and scheduled for 1.8.4
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Sep 28, 2014, at 2:43 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just built 1.8.3 for another round of testing with mpi4py. I'm getting
</span><br>
<span class="quotelev1">&gt; the following valgrind warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==4718== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==4718==    at 0xD0D9F4C: component_select (osc_sm_component.c:333)
</span><br>
<span class="quotelev1">&gt; ==4718==    by 0x4CF44F6: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4718==    by 0x4C68B69: ompi_win_allocate (win.c:182)
</span><br>
<span class="quotelev1">&gt; ==4718==    by 0x4CBB8C2: PMPI_Win_allocate (pwin_allocate.c:79)
</span><br>
<span class="quotelev1">&gt; ==4718==    by 0x400898: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The offending code is in ompi/mca/osc/sm/osc_sm_component.c, it seems
</span><br>
<span class="quotelev1">&gt; you forgot to initialize the &quot;blocking_fence&quot; to a default true or
</span><br>
<span class="quotelev1">&gt; false value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        bool blocking_fence;
</span><br>
<span class="quotelev1">&gt;        int flag;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if (OMPI_SUCCESS != ompi_info_get_bool(info, &quot;blocking_fence&quot;,
</span><br>
<span class="quotelev1">&gt;                                               &amp;blocking_fence, &amp;flag)) {
</span><br>
<span class="quotelev1">&gt;            goto error;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if (blocking_fence) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15925.php">http://www.open-mpi.org/community/lists/devel/2014/09/15925.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15932.php">Pritchard Jr., Howard: "[OMPI devel] release 1.9"</a>
<li><strong>Previous message:</strong> <a href="15930.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
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
