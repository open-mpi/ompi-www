<?
$subject_val = "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 19:02:25 2008" -->
<!-- isoreceived="20080527230225" -->
<!-- sent="Tue, 27 May 2008 16:02:17 -0700" -->
<!-- isosent="20080527230217" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque" -->
<!-- id="df8c8a6d0805271602u5b6319bem408f219d9b99310e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF0137BD52.3C424071-ONC1257456.0059DB08-C1257456.005A4512_at_offis.uni-oldenburg.de" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-27 19:02:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5742.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5740.php">Graham Jenkins: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep.  Wall time is no where near violation (dies about 2 minutes into
<br>
a 30 minute allocation).  I did a ulimit -a through qsub and direct on
<br>
the node (as the same user in both cases), and the results were
<br>
identical (most items were unlimited).
<br>
<p>Any other ideas?
<br>
<p>--Jim
<br>
<p>On Tue, May 27, 2008 at 9:25 AM, Jan Ploski &lt;Jan.Ploski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This suggestion is rather trivial, but since you have not mentioned
</span><br>
<span class="quotelev1">&gt; anything in this area:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that the job is not exceeding resource limits (walltime -
</span><br>
<span class="quotelev1">&gt; enforced by TORQUE, or rlimits such as memory - enforced by the kernel,
</span><br>
<span class="quotelev1">&gt; but they could be set differently in TORQUE and your manual invocations of
</span><br>
<span class="quotelev1">&gt; mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jan Ploski
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5742.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5740.php">Graham Jenkins: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
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
