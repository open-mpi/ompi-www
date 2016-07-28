<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 07:44:25 2008" -->
<!-- isoreceived="20080807114425" -->
<!-- sent="Thu, 7 Aug 2008 14:44:20 +0300" -->
<!-- isosent="20080807114420" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone" -->
<!-- id="453d39990808070444u297c7826n702fa0a2e1103085_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="051.5ad5438aec71cbfbd4079478fe191734_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 07:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
<li><strong>Previous message:</strong> <a href="4556.php">Lenny Verkhovsky: "Re: [OMPI devel] new Open MPI team member"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
<li><strong>Reply:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I really would like to help, but I am not sure how much time will I have in
<br>
the very near future ( we are expecting a babygirl delivery ).
<br>
<p>On 8/6/08, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------+--------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reporter:  jnysal  |        Owner:  rhc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Type:  defect  |       Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major   |    Milestone:  Open MPI 1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version:          |   Resolution:
</span><br>
<span class="quotelev1">&gt; Keywords:          |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------+--------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by rhc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * owner:  jnysal =&gt; rhc
</span><br>
<span class="quotelev1">&gt;   * status:  assigned =&gt; new
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Several of us have had a telecon on this subject, and have a proposed
</span><br>
<span class="quotelev1">&gt;   solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The real root of the problem here is that we never clearly delineated
</span><br>
<span class="quotelev1">&gt;   between physical and logical processors in OMPI. Instead, there was an
</span><br>
<span class="quotelev1">&gt;   implicit assumption that the two were one-and-the-same. Thus, if a user
</span><br>
<span class="quotelev1">&gt;   specified a slot_list, we just directly dumped that into the paffinity
</span><br>
<span class="quotelev1">&gt;   subsystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Unfortunately, when we use paffinity_alone and automatically map the
</span><br>
<span class="quotelev1">&gt; ranks
</span><br>
<span class="quotelev1">&gt;   to processors, we again just passed the info the paffinity subsystem -
</span><br>
<span class="quotelev1">&gt;   without clearly indicating whether this was a physical processor or
</span><br>
<span class="quotelev1">&gt;   logical processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Our feeling is that we need to cleanly handle both physical and logical
</span><br>
<span class="quotelev1">&gt;   processor specifications. Accordingly, we propose to do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. modify the opal_paffinity_base_get API to add a boolean flag
</span><br>
<span class="quotelev1">&gt; indicating
</span><br>
<span class="quotelev1">&gt;   we want logical (true) or physical (false) processor id's in the returned
</span><br>
<span class="quotelev1">&gt;   cpumask
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   2. modify the opal_paffinity_base_set API to add a boolean flag
</span><br>
<span class="quotelev1">&gt; indicating
</span><br>
<span class="quotelev1">&gt;   we provided logical (true) or physical (false) processor id's in the
</span><br>
<span class="quotelev1">&gt;   cpumask
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   3. modify the opal_paffinity linux and solaris components to do the
</span><br>
<span class="quotelev1">&gt;   necessary mapping to handle the two cases so that we bind or return data
</span><br>
<span class="quotelev1">&gt;   according to the new flag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   4. modify ompi_mpi_init so that mpi_paffinity_alone indicates the
</span><br>
<span class="quotelev1">&gt;   automatic binding is to be done on the basis of logical processor id's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   5. modify the syntax of the slot_list mca param so that it defaults to
</span><br>
<span class="quotelev1">&gt;   logical processor ids, but allows the user to prepend the specification
</span><br>
<span class="quotelev1">&gt;   with a &quot;P&quot; or &quot;p&quot; to indicate these are physical processor id's. This
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt;   also be applied to the parsing of the rank_file mapping file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   6. modify the places that utilize that param to handle the new syntax,
</span><br>
<span class="quotelev1">&gt;   including the opal_paffinity_base_slot_list_set and its companion
</span><br>
<span class="quotelev1">&gt;   functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   7. update the documentation to reflect the changed syntax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Terry has volunteered to modify the paffinity components. Ralph will do
</span><br>
<span class="quotelev1">&gt;   the ORTE-level stuff and mpi_init, and likely the slot_list stuff too
</span><br>
<span class="quotelev1">&gt;   (unless Lenny has time and is willing to help there?). This will be done
</span><br>
<span class="quotelev1">&gt;   on a new Hg branch that Ralph will create - will post the access info
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev1">&gt;   later today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Any comments? Please post soon so we don't go too far down path before we
</span><br>
<span class="quotelev1">&gt;   hear them!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1435#comment:18">https://svn.open-mpi.org/trac/ompi/ticket/1435#comment:18</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
<li><strong>Previous message:</strong> <a href="4556.php">Lenny Verkhovsky: "Re: [OMPI devel] new Open MPI team member"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
<li><strong>Reply:</strong> <a href="4558.php">Terry Dontje: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1435: Crash on PPC (with SMT off) when using mpi_paffinity alone"</a>
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
