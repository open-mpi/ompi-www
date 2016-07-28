<?
$subject_val = "Re: [OMPI users] mpirun: specify multiple install prefixes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:32:45 2007" -->
<!-- isoreceived="20071220133245" -->
<!-- sent="Thu, 20 Dec 2007 06:32:31 -0700" -->
<!-- isosent="20071220133231" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: specify multiple install prefixes" -->
<!-- id="C38FBCFF.BA88%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4f9bf870712140845o2f239d61qcb3e8517a0769038_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: specify multiple install prefixes<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 08:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4677.php">Pignot Geoffroy: "[OMPI users] mpirun: specify multiple install prefixes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid not - nor is it in the plans for 1.3 either. I'm afraid it fell
<br>
through the cracks as the needs inside the developer community moved into
<br>
other channels.
<br>
<p>I'll raise the question internally and see if people feel we should do this.
<br>
It wouldn't be hard to put it into 1.3 at this point, but will be very hard
<br>
to do so if not done very soon.
<br>
<p>Thanks for the reminder!
<br>
Ralph
<br>
<p><p><p>On 12/14/07 9:45 AM, &quot;Pignot Geoffroy&quot; &lt;geopignot_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just would like to known if this functionality (a prefix field in
</span><br>
<span class="quotelev1">&gt; hostfile if i understand well ) has been integrated in the 1.2.4 ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your answer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------- On Mar 22, 2007, at 10:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; We had a nice chat about this on the OpenRTE telecon this morning. The
</span><br>
<span class="quotelev1">&gt; question of what to do with multiple prefix's has been a long-running
</span><br>
<span class="quotelev1">&gt; issue,
</span><br>
<span class="quotelev1">&gt; most recently captured in bug trac report #497. The problem is that
</span><br>
<span class="quotelev1">&gt; prefix
</span><br>
<span class="quotelev1">&gt; is intended to tell us where to find the ORTE/OMPI executables, and
</span><br>
<span class="quotelev1">&gt; therefore is associated with a node - not an app_context. What we
</span><br>
<span class="quotelev1">&gt; haven't
</span><br>
<span class="quotelev1">&gt; been able to define is an appropriate notation that a user can exploit
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; tell us the association.
</span><br>
<span class="quotelev1">&gt; This issue has arisen on several occasions where either (a) users have
</span><br>
<span class="quotelev1">&gt; heterogeneous clusters with a common file system, so the prefix must be
</span><br>
<span class="quotelev1">&gt; adjusted on each *type* of node to point to the correct type of
</span><br>
<span class="quotelev1">&gt; binary; and
</span><br>
<span class="quotelev1">&gt; (b) for whatever reason, typically on rsh/ssh clusters, users have
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; the binaries in different locations on some of the nodes. In this latter
</span><br>
<span class="quotelev1">&gt; case, the reports have been from homogeneous clusters, so the *type* of
</span><br>
<span class="quotelev1">&gt; binary was never the issue - it just wasn't located where we expected.
</span><br>
<span class="quotelev1">&gt; Sun's solution is (I believe) what most of us would expect - they locate
</span><br>
<span class="quotelev1">&gt; their executables in the same relative location on all their nodes. The
</span><br>
<span class="quotelev1">&gt; binary in that location is correct for that local architecture. This
</span><br>
<span class="quotelev1">&gt; requires, though, that the &quot;prefix&quot; location not be on a common file
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; Unfortunately, that isn't the case with LANL's roadrunner, nor can we
</span><br>
<span class="quotelev1">&gt; expect
</span><br>
<span class="quotelev1">&gt; that everyone will follow that sensible approach :-). So we need a
</span><br>
<span class="quotelev1">&gt; notation
</span><br>
<span class="quotelev1">&gt; to support the &quot;exception&quot; case where someone needs to truly specify
</span><br>
<span class="quotelev1">&gt; prefix
</span><br>
<span class="quotelev1">&gt; versus node(s).
</span><br>
<span class="quotelev1">&gt; We discussed a number of options, including auto-detecting the local
</span><br>
<span class="quotelev1">&gt; arch
</span><br>
<span class="quotelev1">&gt; and appending it to the specified &quot;prefix&quot; and several others. After
</span><br>
<span class="quotelev1">&gt; discussing them, those of us on the call decided that adding a field
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; hostfile that specifies the prefix to use on that host would be the best
</span><br>
<span class="quotelev1">&gt; solution. This could be done on a cluster-level basis, so - although
</span><br>
<span class="quotelev1">&gt; it is
</span><br>
<span class="quotelev1">&gt; annoying to create the data file - at least it would only have to be
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; once.
</span><br>
<span class="quotelev1">&gt; Again, this is the exception case, so requiring a little inconvenience
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev1">&gt; a reasonable thing to do.
</span><br>
<span class="quotelev1">&gt; Anyone have heartburn and/or other suggestions? If not, we might start
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; play with this next week. We would have to do some small modifications
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; the RAS, RMAPS, and PLS components to ensure that any multi-prefix
</span><br>
<span class="quotelev1">&gt; info gets
</span><br>
<span class="quotelev1">&gt; correctly propagated and used across all platforms for consistent
</span><br>
<span class="quotelev1">&gt; behavior.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4677.php">Pignot Geoffroy: "[OMPI users] mpirun: specify multiple install prefixes"</a>
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
