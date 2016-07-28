<?
$subject_val = "Re: [OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 13:06:46 2008" -->
<!-- isoreceived="20080523170646" -->
<!-- sent="Fri, 23 May 2008 13:06:35 -0400" -->
<!-- isosent="20080523170635" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about priority" -->
<!-- id="CADB57F8-5C91-4933-A62F-26F600F0CD4C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="24CFA1D1-4A3D-4C66-A024-483AC8E4F7DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about priority<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 13:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4021.php">George Bosilca: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>Previous message:</strong> <a href="4019.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2008, at 9:56 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, as Jeff pointed out, the behavior of frameworks and
</span><br>
<span class="quotelev1">&gt; components in determining component selection is not consistent in the
</span><br>
<span class="quotelev1">&gt; codebase. The mca_base_select() commit made things much better, but
</span><br>
<span class="quotelev1">&gt; there are still frameworks that do not (or cannot) use it, and there
</span><br>
<span class="quotelev1">&gt; are some behaviors that are just not well defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consistency issues lead to user (and developer) confusion and degrade
</span><br>
<span class="quotelev1">&gt; the image of the project. For exactly those reasons I want to talk
</span><br>
<span class="quotelev1">&gt; about a number of such issues in one of our technical meeting this
</span><br>
<span class="quotelev1">&gt; summer (this issue is currently scheduled for the July meeting). The
</span><br>
<span class="quotelev1">&gt; goal is to come out of that meeting with a coding standard behavior
</span><br>
<span class="quotelev1">&gt; for components during open/selection/close. Frameworks and components
</span><br>
<span class="quotelev1">&gt; can diverge from this base standard, but then it is the responsibility
</span><br>
<span class="quotelev1">&gt; of the component writer to make sure this is clearly communicated to
</span><br>
<span class="quotelev1">&gt; users about expectations.
</span><br>
<p>This is a pretty strong statement and some examples are welcomed.  
<br>
Anyway, we already have a coding standard for the component  
<br>
manipulation, and apparently there are cases when we need a hand  
<br>
crafted selection logic (such as collectives as Josh pointed it out).  
<br>
The ^component is managed at the bottom layer, where we create the  
<br>
list of components to be opened, so this is consistent across the board.
<br>
<p><span class="quotelev1">&gt; To answer your question though, an individual component can determine
</span><br>
<span class="quotelev1">&gt; what to return for the {priority,module} pair based on anything it
</span><br>
<span class="quotelev1">&gt; wishes. For instance the SLURM PLM component will return NULL if it
</span><br>
<span class="quotelev1">&gt; does not see the correct environment variables, and a working module
</span><br>
<span class="quotelev1">&gt; if it does. Collectives are a special type of framework so the
</span><br>
<span class="quotelev1">&gt; selection logic there is specialized, meaning it does not use the
</span><br>
<span class="quotelev1">&gt; mca_base_select function, but uses a more custom version of select.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you supply &quot;^component&quot; then the component is never opened and thus
</span><br>
<span class="quotelev1">&gt; never queried during selection. If you specify 0 for the priority of
</span><br>
<span class="quotelev1">&gt; the hierarch component the the component is opened, and will just
</span><br>
<span class="quotelev1">&gt; return NULL during selection. If you specify &gt; 0 for the priority then
</span><br>
<span class="quotelev1">&gt; the hierarch component will return a module to the selection code.
</span><br>
<span class="quotelev1">&gt; This module will be used if the hierarch component has the 'best'
</span><br>
<span class="quotelev1">&gt; priority, otherwise the hierarch component should be closed
</span><br>
<span class="quotelev1">&gt; [hierarch_component_close] at the end of the selection code.
</span><br>
<span class="quotelev1">&gt; Determining the 'best' priority and whether or not the components are
</span><br>
<span class="quotelev1">&gt; closed at the end of selection is determined by the coll/base select
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I may have just made things seem more complex than they
</span><br>
<span class="quotelev1">&gt; probably are.
</span><br>
<p>I don't think so. For me the process is straightforward. Here are the  
<br>
possible scenarios:
<br>
1) ^component behave as if the corresponding file (i.e. shared  
<br>
library) is not available.
<br>
2) init returning a NULL module, means that this component do not  
<br>
desire to be selected. There is no need to clarify the reason why, the  
<br>
outcome is that the component selected to be ignored.
<br>
3) returning a non NULL module and a priority allow the selection  
<br>
logic to include the specified module in the selection process. Of  
<br>
course the selection process is different for some framework, but this  
<br>
is to be expected. Keep in mind that while there are one-to-one  
<br>
framework (such as the IO subsystem and the PML) and many-to-one  
<br>
framework (such as the BTLs and the collectives) the priority always  
<br>
allow the selector to order the modules based on the decreasing  
<br>
priority. Then, based on the type of the framework (one-to-one or many- 
<br>
to-one), the selector pick the first or all modules from the list and  
<br>
close the others. As I said ... straightforward :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 23, 2008, at 8:28 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that technically, the component can do whatever it wants
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., look at its priority, see 0, and decide to return NULL).
</span><br>
<span class="quotelev2">&gt;&gt; However, to be consistent, we should decide on a specific behavior  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; make it uniform to all components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd opt for the ^foo notation to disable a component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2008, at 8:14 AM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This mostly makes sense.  But let me probe a little more.  Can a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component return NULL if it looks at its priority and the priority  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; less than or equal to 0?  For example, currently the hierarch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returns NULL when its priority is equal or less than 0.  This means
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as a user when I set the priority to 0 I am indicating that I do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want the hierarch component selected at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or, is the priority only used to specify relative behavior.  So, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not to be used to completely deselect a component.  To deselect, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would need to use the ^component format.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is where I am confused.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yeah (Sorry I didn't reply earlier).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Each component is asked for at least two items of information:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority (int), and module (struct *).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The priority can range from [INT_MIN | INT_MAX] with the highest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority selected, even if that priority is negative.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the component does not want to be selected then it should return
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NULL for the module value. This indicates to the selection logic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no matter what the priority is set to the component should not be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; candidate for selection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So a component is selectable if it returns a non-NULL value for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module struct, and is not selectable if it returns NULL. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only indicates relative rank between all available components.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does that make sense? I should probably add this comment to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_base_select function to preserve it. I'll make a bug for it so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't get lost.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 23, 2008, at 7:14 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We may not have this uniform throughout the code base -- this is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the things we wanted to talk about in the Bay area meeting.  I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; believe that the allowable range for priorities should be [0,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 100],
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and that if you don't want to be selected, you should return NULL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use some other mechanism to indicate that you didn't want to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; selected).  That was the original intent of the MCA selection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mechanisms, at least.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh -- is this consistent with what you found when you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consolidated a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lot of this stuff?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 22, 2008, at 11:30 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I know there was some recent discussion about priority of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but I wanted to double check.  I am trying to understand what
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0 means.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My assumption is the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority &gt;= 0 means the component is selectable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority &lt; 0 means the component is not selectable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I ask this because in some of the collective code it looks like a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority = 0 means not selectable.  Not a big deal, but I am
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trying to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fix a memory leak and I need to get this piece right.  And I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assume
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority &lt; 0 will give one the same behavior as ^component but  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; paths within Open MPI would be different.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4020/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4021.php">George Bosilca: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>Previous message:</strong> <a href="4019.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
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
