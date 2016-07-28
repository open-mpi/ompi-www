<?
$subject_val = "Re: [OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 07:49:22 2008" -->
<!-- isoreceived="20080523114922" -->
<!-- sent="Fri, 23 May 2008 07:49:17 -0400" -->
<!-- isosent="20080523114917" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about priority" -->
<!-- id="D6FB94E5-C8FA-421F-8F67-D38DB3605403_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C4F8BD7-7D17-4872-BDB8-37607464A895_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 07:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Jeff Squyres: "[OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah (Sorry I didn't reply earlier).
<br>
<p>Each component is asked for at least two items of information:  
<br>
priority (int), and module (struct *).
<br>
<p>The priority can range from [INT_MIN | INT_MAX] with the highest  
<br>
priority selected, even if that priority is negative.
<br>
<p>If the component does not want to be selected then it should return  
<br>
NULL for the module value. This indicates to the selection logic that  
<br>
no matter what the priority is set to the component should not be a  
<br>
candidate for selection.
<br>
<p>So a component is selectable if it returns a non-NULL value for the  
<br>
module struct, and is not selectable if it returns NULL. The priority  
<br>
only indicates relative rank between all available components.
<br>
<p>Does that make sense? I should probably add this comment to the  
<br>
mca_base_select function to preserve it. I'll make a bug for it so it  
<br>
doesn't get lost.
<br>
<p>-- Josh
<br>
<p>On May 23, 2008, at 7:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We may not have this uniform throughout the code base -- this is one
</span><br>
<span class="quotelev1">&gt; of the things we wanted to talk about in the Bay area meeting.  I
</span><br>
<span class="quotelev1">&gt; believe that the allowable range for priorities should be [0, 100],
</span><br>
<span class="quotelev1">&gt; and that if you don't want to be selected, you should return NULL (or
</span><br>
<span class="quotelev1">&gt; use some other mechanism to indicate that you didn't want to be
</span><br>
<span class="quotelev1">&gt; selected).  That was the original intent of the MCA selection
</span><br>
<span class="quotelev1">&gt; mechanisms, at least.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh -- is this consistent with what you found when you consolidated a
</span><br>
<span class="quotelev1">&gt; lot of this stuff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 22, 2008, at 11:30 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know there was some recent discussion about priority of components,
</span><br>
<span class="quotelev2">&gt;&gt; but I wanted to double check.  I am trying to understand what
</span><br>
<span class="quotelev2">&gt;&gt; priority =
</span><br>
<span class="quotelev2">&gt;&gt; 0 means.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My assumption is the following:
</span><br>
<span class="quotelev2">&gt;&gt; priority &gt;= 0 means the component is selectable
</span><br>
<span class="quotelev2">&gt;&gt; priority &lt; 0 means the component is not selectable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ask this because in some of the collective code it looks like a
</span><br>
<span class="quotelev2">&gt;&gt; priority = 0 means not selectable.  Not a big deal, but I am  
</span><br>
<span class="quotelev2">&gt;&gt; trying to
</span><br>
<span class="quotelev2">&gt;&gt; fix a memory leak and I need to get this piece right.  And I assume
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; priority &lt; 0 will give one the same behavior as ^component but the
</span><br>
<span class="quotelev2">&gt;&gt; code
</span><br>
<span class="quotelev2">&gt;&gt; paths within Open MPI would be different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Jeff Squyres: "[OMPI devel] Memory hooks stuff"</a>
<li><strong>In reply to:</strong> <a href="4010.php">Jeff Squyres: "Re: [OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4013.php">Rolf Vandevaart: "Re: [OMPI devel] Question about priority"</a>
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
