<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 08:11:25 2008" -->
<!-- isoreceived="20080807121125" -->
<!-- sent="Thu, 7 Aug 2008 08:10:22 -0400" -->
<!-- isosent="20080807121022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="217B9E8D-D7CC-4ACB-9BF7-CF0BAA688969_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF7750E814.13F04D7B-ONC125749E.0027A84C-C125749E.002852ED_at_offis.uni-oldenburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 08:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 7, 2008, at 3:20 AM, Jan Ploski wrote:
<br>
<p><span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2008/07/6161.php">http://www.open-mpi.org/community/lists/users/2008/07/6161.php</a>
</span><br>
<p><span class="quotelev1">&gt; Thanks for this explanation. According to what you wrote,
</span><br>
<span class="quotelev1">&gt; --without-memory-manager can make my and other applications run
</span><br>
<span class="quotelev1">&gt; significantly slower.
</span><br>
<p>*If* they continually re-use the same buffers for large messages and  
<br>
you're using an OpenFabrics network (or older Myrinet/GM).  Then yes,  
<br>
your peak bandwidth with be a bit lower.  We use a pipelined protocol  
<br>
to offset the total impact, so it's not a total disaster -- but there  
<br>
is definitely some loss off the total bandwidth you'll see for large  
<br>
messages.  Small message performance is not impacted because those use  
<br>
pre-registered buffers.
<br>
<p><span class="quotelev1">&gt; While I can find out just how much for my app, I
</span><br>
<span class="quotelev1">&gt; hardly can do it for other (unknown) users. So it would be nice if  
</span><br>
<span class="quotelev1">&gt; my heap
</span><br>
<span class="quotelev1">&gt; profiling problem could be resolved in another way in the future. Is  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; planned mpi_leave_pinned change in v1.3 going to correct it?
</span><br>
<p>Here's what we're doing for v1.3 (it's an open ticket to document this  
<br>
before v1.3 is released):
<br>
<p>1. leave_pinned will remain off by default on networks that don't care  
<br>
about it (tcp, sm, ...etc.)
<br>
<p>2. for openfabrics networks (i.e., the openib btl), leave_pinned will  
<br>
automatically enable itself if:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) one of the following two is true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- you added -lopenmpi-malloc to the link step when creating  
<br>
your MPI app
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- or, if libopenmpi-malloc is not present, if a mallopt() hint  
<br>
[that we try by default] was able to assert itself that tells the  
<br>
allocator to never return memory to the OS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) and the user did not manually specific leave_pinned=0
<br>
<p>libopenmpi-malloc is the same ptmalloc2 library that we used in the  
<br>
v1.2 series.  We can detect if it is there at run-time; if it is not,  
<br>
we try the mallopt hint.
<br>
<p>So by default, you shouldn't need to specify leave_pinned=1 anymore  
<br>
for the openib btl -- you should get the same end result as if you had  
<br>
specified it in the v1.2 series (better bandwidth for large  
<br>
messages).  But if you want exactly the same behavior as v1.2, you'll  
<br>
need to add -lompi-malloc to your link line.  We anticipate that most  
<br>
users won't notice the difference.
<br>
<p>The reason we separated out the ptmalloc2 library is that it  
<br>
definitely causes problems with some applications (e.g., valgrind  
<br>
profiling), and it penalizes networks that don't need a memory  
<br>
allocator (e.g., tcp, sm, ...etc.).
<br>
<p>Does that make sense?
<br>
<p>If you'd like to give it a whirl, the trunk nightly tarballs are  
<br>
fairly stable at this point -- except for the sm btl.  There's a bug  
<br>
in how the sm btl interacts with our message passing engine (ob1) that  
<br>
George swears he will have fixed by tomorrow.  :-)  But if you avoid  
<br>
using the sm btl, you should be fine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Trunk and v1.3 snapshot tarballs are pretty close at this point; we're  
<br>
mainly applying bug fixes to the trunk and moving them over to the  
<br>
v1.3 after they've &quot;soaked&quot; on the trunk for a few days.  Soon enough,  
<br>
however, the trunk will likely start diverging from the v1.3 branch as  
<br>
we move on towards v1.4.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
