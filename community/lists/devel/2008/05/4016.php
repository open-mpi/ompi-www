<?
$subject_val = "Re: [OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 08:28:27 2008" -->
<!-- isoreceived="20080523122827" -->
<!-- sent="Fri, 23 May 2008 08:28:17 -0400" -->
<!-- isosent="20080523122817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about priority" -->
<!-- id="E3A8152F-3175-4F62-85B7-935A0AFC4534_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4836B52C.60104_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 08:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that technically, the component can do whatever it wants  
<br>
(e.g., look at its priority, see 0, and decide to return NULL).   
<br>
However, to be consistent, we should decide on a specific behavior and  
<br>
make it uniform to all components.
<br>
<p>I'd opt for the ^foo notation to disable a component.
<br>
<p><p>On May 23, 2008, at 8:14 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This mostly makes sense.  But let me probe a little more.  Can a
</span><br>
<span class="quotelev1">&gt; component return NULL if it looks at its priority and the priority is
</span><br>
<span class="quotelev1">&gt; less than or equal to 0?  For example, currently the hierarch  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt; returns NULL when its priority is equal or less than 0.  This means  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; as a user when I set the priority to 0 I am indicating that I do not
</span><br>
<span class="quotelev1">&gt; want the hierarch component selected at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, is the priority only used to specify relative behavior.  So, it is
</span><br>
<span class="quotelev1">&gt; not to be used to completely deselect a component.  To deselect, you
</span><br>
<span class="quotelev1">&gt; would need to use the ^component format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is where I am confused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yeah (Sorry I didn't reply earlier).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each component is asked for at least two items of information:
</span><br>
<span class="quotelev2">&gt;&gt; priority (int), and module (struct *).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The priority can range from [INT_MIN | INT_MAX] with the highest
</span><br>
<span class="quotelev2">&gt;&gt; priority selected, even if that priority is negative.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the component does not want to be selected then it should return
</span><br>
<span class="quotelev2">&gt;&gt; NULL for the module value. This indicates to the selection logic that
</span><br>
<span class="quotelev2">&gt;&gt; no matter what the priority is set to the component should not be a
</span><br>
<span class="quotelev2">&gt;&gt; candidate for selection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So a component is selectable if it returns a non-NULL value for the
</span><br>
<span class="quotelev2">&gt;&gt; module struct, and is not selectable if it returns NULL. The priority
</span><br>
<span class="quotelev2">&gt;&gt; only indicates relative rank between all available components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does that make sense? I should probably add this comment to the
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_select function to preserve it. I'll make a bug for it so it
</span><br>
<span class="quotelev2">&gt;&gt; doesn't get lost.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2008, at 7:14 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We may not have this uniform throughout the code base -- this is one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the things we wanted to talk about in the Bay area meeting.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe that the allowable range for priorities should be [0, 100],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that if you don't want to be selected, you should return NULL  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use some other mechanism to indicate that you didn't want to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selected).  That was the original intent of the MCA selection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mechanisms, at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh -- is this consistent with what you found when you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consolidated a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lot of this stuff?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 22, 2008, at 11:30 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know there was some recent discussion about priority of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I wanted to double check.  I am trying to understand what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 means.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My assumption is the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority &gt;= 0 means the component is selectable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority &lt; 0 means the component is not selectable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ask this because in some of the collective code it looks like a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority = 0 means not selectable.  Not a big deal, but I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix a memory leak and I need to get this piece right.  And I assume
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority &lt; 0 will give one the same behavior as ^component but the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paths within Open MPI would be different.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Gleb Natapov: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4017.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
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
