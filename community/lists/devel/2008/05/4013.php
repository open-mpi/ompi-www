<?
$subject_val = "Re: [OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 08:14:45 2008" -->
<!-- isoreceived="20080523121445" -->
<!-- sent="Fri, 23 May 2008 08:14:36 -0400" -->
<!-- isosent="20080523121436" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about priority" -->
<!-- id="4836B52C.60104_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6FB94E5-C8FA-421F-8F67-D38DB3605403_at_open-mpi.org" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 08:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4014.php">Terry Dontje: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4016.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4016.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This mostly makes sense.  But let me probe a little more.  Can a 
<br>
component return NULL if it looks at its priority and the priority is 
<br>
less than or equal to 0?  For example, currently the hierarch component 
<br>
returns NULL when its priority is equal or less than 0.  This means that 
<br>
as a user when I set the priority to 0 I am indicating that I do not 
<br>
want the hierarch component selected at all.
<br>
<p>Or, is the priority only used to specify relative behavior.  So, it is 
<br>
not to be used to completely deselect a component.  To deselect, you 
<br>
would need to use the ^component format.
<br>
<p>That is where I am confused.
<br>
<p>Rolf
<br>
<p><p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Yeah (Sorry I didn't reply earlier).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each component is asked for at least two items of information:  
</span><br>
<span class="quotelev1">&gt; priority (int), and module (struct *).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The priority can range from [INT_MIN | INT_MAX] with the highest  
</span><br>
<span class="quotelev1">&gt; priority selected, even if that priority is negative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the component does not want to be selected then it should return  
</span><br>
<span class="quotelev1">&gt; NULL for the module value. This indicates to the selection logic that  
</span><br>
<span class="quotelev1">&gt; no matter what the priority is set to the component should not be a  
</span><br>
<span class="quotelev1">&gt; candidate for selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So a component is selectable if it returns a non-NULL value for the  
</span><br>
<span class="quotelev1">&gt; module struct, and is not selectable if it returns NULL. The priority  
</span><br>
<span class="quotelev1">&gt; only indicates relative rank between all available components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that make sense? I should probably add this comment to the  
</span><br>
<span class="quotelev1">&gt; mca_base_select function to preserve it. I'll make a bug for it so it  
</span><br>
<span class="quotelev1">&gt; doesn't get lost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2008, at 7:14 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We may not have this uniform throughout the code base -- this is one
</span><br>
<span class="quotelev2">&gt;&gt; of the things we wanted to talk about in the Bay area meeting.  I
</span><br>
<span class="quotelev2">&gt;&gt; believe that the allowable range for priorities should be [0, 100],
</span><br>
<span class="quotelev2">&gt;&gt; and that if you don't want to be selected, you should return NULL (or
</span><br>
<span class="quotelev2">&gt;&gt; use some other mechanism to indicate that you didn't want to be
</span><br>
<span class="quotelev2">&gt;&gt; selected).  That was the original intent of the MCA selection
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms, at least.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh -- is this consistent with what you found when you consolidated a
</span><br>
<span class="quotelev2">&gt;&gt; lot of this stuff?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 22, 2008, at 11:30 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know there was some recent discussion about priority of components,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I wanted to double check.  I am trying to understand what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 means.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My assumption is the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority &gt;= 0 means the component is selectable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority &lt; 0 means the component is not selectable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask this because in some of the collective code it looks like a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority = 0 means not selectable.  Not a big deal, but I am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix a memory leak and I need to get this piece right.  And I assume
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority &lt; 0 will give one the same behavior as ^component but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paths within Open MPI would be different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4014.php">Terry Dontje: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4016.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4016.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
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
