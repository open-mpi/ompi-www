<?
$subject_val = "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:22:08 2008" -->
<!-- isoreceived="20080528122208" -->
<!-- sent="Wed, 28 May 2008 08:21:54 -0400" -->
<!-- isosent="20080528122154" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque" -->
<!-- id="D2D17220-4ABD-4437-AF47-A3B582C275B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0805271602u5b6319bem408f219d9b99310e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-28 08:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5745.php">twurgl_at_[hidden]: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5741.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(I'm not a subscriber to the torqueusers or mauiusers lists -- I'm not  
<br>
sure my post will get through)
<br>
<p>I wonder if Jan's idea has merit -- if Torque is killing the job for  
<br>
some other reason (i.e., not wallclock).  The message printed by  
<br>
mpirun (&quot;mpirun: killing job...&quot;) is *only* displayed if mpirun  
<br>
receives a SIGINT or SIGTERM.  So perhaps some other resource limit is  
<br>
being reached...?
<br>
<p>Is there a way to have Torque log if it is killing a job for some  
<br>
reason?
<br>
<p><p>On May 27, 2008, at 7:02 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Yep.  Wall time is no where near violation (dies about 2 minutes into
</span><br>
<span class="quotelev1">&gt; a 30 minute allocation).  I did a ulimit -a through qsub and direct on
</span><br>
<span class="quotelev1">&gt; the node (as the same user in both cases), and the results were
</span><br>
<span class="quotelev1">&gt; identical (most items were unlimited).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 27, 2008 at 9:25 AM, Jan Ploski &lt;Jan.Ploski_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This suggestion is rather trivial, but since you have not mentioned
</span><br>
<span class="quotelev2">&gt;&gt; anything in this area:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that the job is not exceeding resource limits  
</span><br>
<span class="quotelev2">&gt;&gt; (walltime -
</span><br>
<span class="quotelev2">&gt;&gt; enforced by TORQUE, or rlimits such as memory - enforced by the  
</span><br>
<span class="quotelev2">&gt;&gt; kernel,
</span><br>
<span class="quotelev2">&gt;&gt; but they could be set differently in TORQUE and your manual  
</span><br>
<span class="quotelev2">&gt;&gt; invocations of
</span><br>
<span class="quotelev2">&gt;&gt; mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jan Ploski
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5745.php">twurgl_at_[hidden]: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5741.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5751.php">Jim Kusznir: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
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
