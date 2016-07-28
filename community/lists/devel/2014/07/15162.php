<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 04:26:29 2014" -->
<!-- isoreceived="20140716082629" -->
<!-- sent="Wed, 16 Jul 2014 17:26:27 +0900" -->
<!-- isosent="20140716082627" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="53C63733.6000104_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ED37C43A-F29D-4310-AC0B-1A702D8E340B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 04:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15161.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15161.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and all,
<br>
<p>my understanding is that
<br>
<p>opal_finalize_util
<br>
<p>agressively tries to free memory that would be still allocated otherwise.
<br>
<p>an other way of saying &quot;make valgrind happy&quot; is &quot;fully automake memory
<br>
leak detection&quot;
<br>
(Joost pointed to the -fsanitize=leak feature of gcc 4.9 in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/05/14672.php">http://www.open-mpi.org/community/lists/devel/2014/05/14672.php</a>)
<br>
<p>the following simple program :
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;int ret, provided;
<br>
&nbsp;&nbsp;ret = MPI_T_init_thread(MPI_THREAD_SINGLE, &amp;provided);
<br>
&nbsp;&nbsp;ret = MPI_T_finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>leaks a *lot* of objects (and might remove some environment variables as
<br>
well) which have been half destroyed by opal_finalize_util, for example :
<br>
- classes are still marked as initialized *but* the cls_contruct_array
<br>
has been free'd
<br>
- the oob framework was not unallocated, it is still marked as
<br>
MCA_BASE_FRAMEWORK_FLAG_REGISTERED
<br>
&nbsp;&nbsp;but some mca variables were freed, and that will cause problems when
<br>
MPI_Init try to (re)start the tcp component
<br>
<p>now my 0.02$ :
<br>
<p>ideally, MPI_Finalize nor MPI_T_finalize would leak any memory and the
<br>
framework would be re-initializable.
<br>
this could be a goal and George gave some good explanations on why it is
<br>
hard to achieve.
<br>
from my pragmatic point of view, and for this test case only, i am very
<br>
happy with a simple working solution,
<br>
even if it means that MPI_T_finalize leaks way too much memory in order
<br>
to work around the non re-initializable framework.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/16 12:49, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I've attached a solution that blocks the segfault without requiring any 
</span><br>
<span class="quotelev1">&gt; gyrations. Can someone explain why this isn't adequate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternate solution was to simply decrement opal_util_initialized in 
</span><br>
<span class="quotelev1">&gt; MPI_T_finalize rather than calling finalize itself. Either way resolves the 
</span><br>
<span class="quotelev1">&gt; problem in a very simple manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15163.php">Rolf vandeVaart: "[OMPI devel] Onesided failures"</a>
<li><strong>Previous message:</strong> <a href="15161.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15161.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15166.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15167.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
