<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_select()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 09:58:32 2008" -->
<!-- isoreceived="20080505135832" -->
<!-- sent="Mon, 5 May 2008 09:58:17 -0400" -->
<!-- isosent="20080505135817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_select()" -->
<!-- id="42C919EB-2EF9-4D01-9677-6D8DBDE2A8DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E125FF1-9E10-4E85-ADB2-B4A1C186A6CF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_select()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 09:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3829.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3827.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This all sounds good to me!
<br>
<p>On Apr 29, 2008, at 6:35 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; What:  Add mca_base_select() and adjust frameworks &amp; components to use
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; Why:   Consolidation of code for general goodness.
</span><br>
<span class="quotelev1">&gt; Where: <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play">https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play</a>
</span><br>
<span class="quotelev1">&gt; When:  Code ready now. Documentation ready soon.
</span><br>
<span class="quotelev1">&gt; Timeout: May 6, 2008 (After teleconf) [1 week]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Discussion:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; For a number of years a few developers have been talking about
</span><br>
<span class="quotelev1">&gt; creating a MCA base component selection function. For various reasons
</span><br>
<span class="quotelev1">&gt; this was never implemented. Recently I decided to give it a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A base select function will allow Open MPI to provide completely
</span><br>
<span class="quotelev1">&gt; consistent selection behavior for many of its frameworks (18 of 31 to
</span><br>
<span class="quotelev1">&gt; be exact at the moment). The primary goal of this work is to improving
</span><br>
<span class="quotelev1">&gt; code maintainability through code reuse. Other benefits also result
</span><br>
<span class="quotelev1">&gt; such as a slightly smaller memory footprint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mca_base_select() function represented the most commonly used
</span><br>
<span class="quotelev1">&gt; logic for component selection: Select the one component with the
</span><br>
<span class="quotelev1">&gt; highest priority and close all of the not selected components. This
</span><br>
<span class="quotelev1">&gt; function can be found at the path below in the branch:
</span><br>
<span class="quotelev1">&gt;  opal/mca/base/mca_base_components_select.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To support this I had to formalize a query() function in the
</span><br>
<span class="quotelev1">&gt; mca_base_component_t of the form:
</span><br>
<span class="quotelev1">&gt;   int mca_base_query_component_fn(mca_base_module_t **module, int
</span><br>
<span class="quotelev1">&gt; *priority);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This function is specified after the open and close component
</span><br>
<span class="quotelev1">&gt; functions in this structure as to allow compatibility with frameworks
</span><br>
<span class="quotelev1">&gt; that do not use the base selection logic. Frameworks that do *not* use
</span><br>
<span class="quotelev1">&gt; this function are *not* effected by this commit. However, every
</span><br>
<span class="quotelev1">&gt; component in the frameworks that use the mca_base_select function must
</span><br>
<span class="quotelev1">&gt; adjust their component query function to fit that specified above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 18 frameworks in Open MPI have been changed. I have updated all of the
</span><br>
<span class="quotelev1">&gt; components in the 18 frameworks available in the trunk on my branch.
</span><br>
<span class="quotelev1">&gt; The effected frameworks are:
</span><br>
<span class="quotelev1">&gt;  - OPAL Carto
</span><br>
<span class="quotelev1">&gt;  - OPAL crs
</span><br>
<span class="quotelev1">&gt;  - OPAL maffinity
</span><br>
<span class="quotelev1">&gt;  - OPAL memchecker
</span><br>
<span class="quotelev1">&gt;  - OPAL paffinity
</span><br>
<span class="quotelev1">&gt;  - ORTE errmgr
</span><br>
<span class="quotelev1">&gt;  - ORTE ess
</span><br>
<span class="quotelev1">&gt;  - ORTE Filem
</span><br>
<span class="quotelev1">&gt;  - ORTE grpcomm
</span><br>
<span class="quotelev1">&gt;  - ORTE odls
</span><br>
<span class="quotelev1">&gt;  - ORTE pml
</span><br>
<span class="quotelev1">&gt;  - ORTE ras
</span><br>
<span class="quotelev1">&gt;  - ORTE rmaps
</span><br>
<span class="quotelev1">&gt;  - ORTE routed
</span><br>
<span class="quotelev1">&gt;  - ORTE snapc
</span><br>
<span class="quotelev1">&gt;  - OMPI crcp
</span><br>
<span class="quotelev1">&gt;  - OMPI dpm
</span><br>
<span class="quotelev1">&gt;  - OMPI pubsub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was a question of the memory footprint change as a result of
</span><br>
<span class="quotelev1">&gt; this commit. I used 'pmap' to determine process memory footprint of a
</span><br>
<span class="quotelev1">&gt; hello world MPI program. Static and Shared build numbers are below
</span><br>
<span class="quotelev1">&gt; along with variations on launching locally and to a single node
</span><br>
<span class="quotelev1">&gt; allocated by SLURM. All of this was on Indiana University's Odin
</span><br>
<span class="quotelev1">&gt; machine. We compare against the trunk (r18276) representing the last
</span><br>
<span class="quotelev1">&gt; SVN sync point of the branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Process(shared)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev1">&gt;    ---------------+----------+---------+-------
</span><br>
<span class="quotelev1">&gt;    mpirun (orted) |   39976K |  36828K | 3148K
</span><br>
<span class="quotelev1">&gt;    hello (0)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev1">&gt;    hello (1)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev1">&gt;    ---------------+----------+---------+-------
</span><br>
<span class="quotelev1">&gt;    mpirun         |   40032K |  37924K | 2108K
</span><br>
<span class="quotelev1">&gt;    orted          |   34720K |  34660K |   60K
</span><br>
<span class="quotelev1">&gt;    hello (0)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev1">&gt;    hello (1)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Process(static)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev1">&gt;    ---------------+----------+---------+-------
</span><br>
<span class="quotelev1">&gt;    mpirun (orted) |   21384K |  21372K |  12K
</span><br>
<span class="quotelev1">&gt;    hello (0)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev1">&gt;    hello (1)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev1">&gt;    ---------------+----------+---------+-------
</span><br>
<span class="quotelev1">&gt;    mpirun         |   21384K |  21372K |  12K
</span><br>
<span class="quotelev1">&gt;    orted          |   21208K |  21196K |  12K
</span><br>
<span class="quotelev1">&gt;    hello (0)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev1">&gt;    hello (1)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see there are some small memory footprint improvements on
</span><br>
<span class="quotelev1">&gt; my branch that result from this work. The size of the Open MPI project
</span><br>
<span class="quotelev1">&gt; shrinks a bit as well. This commit cuts between 3,500 and 2,000 lines
</span><br>
<span class="quotelev1">&gt; of code (depending on how you count) so about a ~1% code shrink.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The branch is stable in all of the testing I have done, but there are
</span><br>
<span class="quotelev1">&gt; some platforms on which I cannot test. So please give this branch a
</span><br>
<span class="quotelev1">&gt; try and let me know if you find any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3829.php">Josh Hursey: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3827.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Reply:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
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
