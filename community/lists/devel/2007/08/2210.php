<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 09:50:02 2007" -->
<!-- isoreceived="20070824135002" -->
<!-- sent="Fri, 24 Aug 2007 09:50:03 -0400" -->
<!-- isosent="20070824135003" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="46CEE20B.2020302_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B4958D7-7C2E-491F-8D17-B20CA1CD3F5F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 09:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2211.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Looks like I'm the only one barely excited about this idea. The  
</span><br>
<span class="quotelev1">&gt; system that you described, is well known. It been around for around  
</span><br>
<span class="quotelev1">&gt; 10 years, and it's called PMI. The interface you have in the tmp  
</span><br>
<span class="quotelev1">&gt; branch as well as the description you gave in your email are more  
</span><br>
<span class="quotelev1">&gt; than similar with what they sketch in the following two documents:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2draft.htm">http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2draft.htm</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2.htm">http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2.htm</a>
</span><br>
Yes, I am well acquainted with these documents, and the PMI did provide 
<br>
a lot of inspiration for the RSL.
<br>
<p><span class="quotelev1">&gt; Now, there is something wrong with reinventing the wheel if there are  
</span><br>
<span class="quotelev1">&gt; no improvements. And so far I'm unable to notice any major  
</span><br>
<span class="quotelev1">&gt; improvement neither compared with PMI nor with what we have today  
</span><br>
<span class="quotelev1">&gt; (except maybe being able to use PMI inside Open MPI).
</span><br>
This is true. The RSL is designed to handle exactly what we need right 
<br>
now. This does not mean that the interface cannot be extended later. The 
<br>
current RSL is a starting point.
<br>
<p><span class="quotelev1">&gt; Again, my main concern is about fault tolerance. There is nothing in  
</span><br>
<span class="quotelev1">&gt; PMI (and nothing in RSL so far) that allow any kind of fault  
</span><br>
<span class="quotelev1">&gt; tolerance [And believe me re-writing the MPICH mpirun to allow  
</span><br>
<span class="quotelev1">&gt; checkpoint/restart is a hassle].
</span><br>
I am open to any extensions that are needed. Again, the current version 
<br>
is designed as a starting point. Also, I have been talking a lot with 
<br>
Josh and the current RSL is more than enough to support 
<br>
checkpoint/restart as currently implemented. I would be interested in 
<br>
talking about any additions that are needed.
<br>
<p><span class="quotelev1">&gt; Moreover, your approach seems to  
</span><br>
<span class="quotelev1">&gt; open the possibility of having heterogeneous RTE (in terms of  
</span><br>
<span class="quotelev1">&gt; features) which in my view is definitively the wrong approach.
</span><br>
Do you mean having different RTEs that support different features? 
<br>
Personally I do not see this as a horrible thing. In fact, we already 
<br>
deal with this problem, since different systems support different 
<br>
things. For instance, we support comm_spawn on most systems, but not all.
<br>
<p>I do not understand why a user should have to use a RTE which supports 
<br>
every system ever imagined, and provides every possible fault-tolerant 
<br>
feature, when all they want is a thin RTE.
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 9:47 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev2">&gt;&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: To solidify the interface between OMPI and the runtime  
</span><br>
<span class="quotelev2">&gt;&gt; environment,
</span><br>
<span class="quotelev2">&gt;&gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev2">&gt;&gt; versions of ORTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev2">&gt;&gt; files in OMPI to funnel all runtime request through this framework.  
</span><br>
<span class="quotelev2">&gt;&gt; Few
</span><br>
<span class="quotelev2">&gt;&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Development has started in tmp/rsl, but is still in its  
</span><br>
<span class="quotelev2">&gt;&gt; infancy. We hope
</span><br>
<span class="quotelev2">&gt;&gt; to have a working system in the next month.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; Short version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on creating an interface between OMPI and the runtime  
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt; This would make a RSL framework in OMPI which all runtime services  
</span><br>
<span class="quotelev2">&gt;&gt; would be
</span><br>
<span class="quotelev2">&gt;&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev2">&gt;&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev2">&gt;&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev2">&gt;&gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev2">&gt;&gt; beneficial to have specialized runtime systems. With our current  
</span><br>
<span class="quotelev2">&gt;&gt; system this
</span><br>
<span class="quotelev2">&gt;&gt; is not easy to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev2">&gt;&gt; hatched. This would take the form of a framework within OMPI,  
</span><br>
<span class="quotelev2">&gt;&gt; through which
</span><br>
<span class="quotelev2">&gt;&gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev2">&gt;&gt; different runtime systems to be used with Open MPI. Additionally,  
</span><br>
<span class="quotelev2">&gt;&gt; with such a
</span><br>
<span class="quotelev2">&gt;&gt; system it would be possible to have multiple versions of open rte  
</span><br>
<span class="quotelev2">&gt;&gt; coexisting,
</span><br>
<span class="quotelev2">&gt;&gt; which may facilitate development and testing. Finally, this would  
</span><br>
<span class="quotelev2">&gt;&gt; solidify the
</span><br>
<span class="quotelev2">&gt;&gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev2">&gt;&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev2">&gt;&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a summary of the changes required for the RSL (at least how  
</span><br>
<span class="quotelev2">&gt;&gt; it is
</span><br>
<span class="quotelev2">&gt;&gt; currently envisioned):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Add a framework to ompi for the rsl, and a component to support  
</span><br>
<span class="quotelev2">&gt;&gt; orte.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev2">&gt;&gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev2">&gt;&gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev2">&gt;&gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev2">&gt;&gt; 3. Change the configuration code so that open-rte is only linked  
</span><br>
<span class="quotelev2">&gt;&gt; where needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The design of the rsl is not solidified. I have been playing in a  
</span><br>
<span class="quotelev2">&gt;&gt; tmp branch
</span><br>
<span class="quotelev2">&gt;&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which  
</span><br>
<span class="quotelev2">&gt;&gt; everyone is
</span><br>
<span class="quotelev2">&gt;&gt; welcome to look at and comment on, but be advised that things here are
</span><br>
<span class="quotelev2">&gt;&gt; subject to change (I don't think it even compiles right now). There  
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev2">&gt;&gt; always get ORTE, or do they sometimes get a system specific  
</span><br>
<span class="quotelev2">&gt;&gt; runtime). Most
</span><br>
<span class="quotelev2">&gt;&gt; likely mpirun will always use ORTE, and alternative launching  
</span><br>
<span class="quotelev2">&gt;&gt; programs would
</span><br>
<span class="quotelev2">&gt;&gt; be used for other runtimes.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Whether there will be any performance implications. My guess is  
</span><br>
<span class="quotelev2">&gt;&gt; not,
</span><br>
<span class="quotelev2">&gt;&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, I am interested in people's comments on whether they think  
</span><br>
<span class="quotelev2">&gt;&gt; adding
</span><br>
<span class="quotelev2">&gt;&gt; such abstraction is good or not, and whether it is reasonable to do  
</span><br>
<span class="quotelev2">&gt;&gt; such a
</span><br>
<span class="quotelev2">&gt;&gt; thing for v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins&lt;RSL- 
</span><br>
<span class="quotelev2">&gt;&gt; Diagram.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2211.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
