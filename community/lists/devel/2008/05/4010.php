<?
$subject_val = "Re: [OMPI devel] Question about priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 07:15:05 2008" -->
<!-- isoreceived="20080523111505" -->
<!-- sent="Fri, 23 May 2008 07:14:55 -0400" -->
<!-- isosent="20080523111455" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about priority" -->
<!-- id="2C4F8BD7-7D17-4872-BDB8-37607464A895_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48359179.80608_at_sun.com" -->
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
<strong>Date:</strong> 2008-05-23 07:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4011.php">Jeff Squyres: "[OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4009.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>In reply to:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We may not have this uniform throughout the code base -- this is one  
<br>
of the things we wanted to talk about in the Bay area meeting.  I  
<br>
believe that the allowable range for priorities should be [0, 100],  
<br>
and that if you don't want to be selected, you should return NULL (or  
<br>
use some other mechanism to indicate that you didn't want to be  
<br>
selected).  That was the original intent of the MCA selection  
<br>
mechanisms, at least.
<br>
<p>Josh -- is this consistent with what you found when you consolidated a  
<br>
lot of this stuff?
<br>
<p>On May 22, 2008, at 11:30 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there was some recent discussion about priority of components,
</span><br>
<span class="quotelev1">&gt; but I wanted to double check.  I am trying to understand what  
</span><br>
<span class="quotelev1">&gt; priority =
</span><br>
<span class="quotelev1">&gt; 0 means.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My assumption is the following:
</span><br>
<span class="quotelev1">&gt; priority &gt;= 0 means the component is selectable
</span><br>
<span class="quotelev1">&gt; priority &lt; 0 means the component is not selectable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask this because in some of the collective code it looks like a
</span><br>
<span class="quotelev1">&gt; priority = 0 means not selectable.  Not a big deal, but I am trying to
</span><br>
<span class="quotelev1">&gt; fix a memory leak and I need to get this piece right.  And I assume  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; priority &lt; 0 will give one the same behavior as ^component but the  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; paths within Open MPI would be different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4011.php">Jeff Squyres: "[OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4009.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>In reply to:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
<li><strong>Reply:</strong> <a href="4012.php">Josh Hursey: "Re: [OMPI devel] Question about priority"</a>
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
