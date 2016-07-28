<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:04:07 2010" -->
<!-- isoreceived="20100226020407" -->
<!-- sent="Thu, 25 Feb 2010 19:04:00 -0700" -->
<!-- isosent="20100226020400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="71d2d8cc1002251804w66487991k9c67718733a42ab3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6CC62C23-E606-4F3D-A4DA-7818C2B3A370_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 21:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to add to Josh's comment: I am working now on recovering from HNP
<br>
failure as well. Should have that in a month or so.
<br>
<p><p>On Thu, Feb 25, 2010 at 10:46 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 8:32 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2010, at 11:16 , Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hum... I'm really afraid about this. I understand your choice since it
</span><br>
<span class="quotelev1">&gt; is really a good solution for fail/stop/restart behaviour, but looking from
</span><br>
<span class="quotelev1">&gt; the fail/recovery side, can you envision some alternative for the orted's
</span><br>
<span class="quotelev1">&gt; reconfiguration on the fly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Leonardo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see why the current code prohibit such behavior. However, I don't
</span><br>
<span class="quotelev1">&gt; see right now in this branch how the remaining daemons (and MPI processes)
</span><br>
<span class="quotelev1">&gt; reconstruct the communication topology, but this is just a technicality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use the 'cm' routed component then the reconstruction of the ORTE
</span><br>
<span class="quotelev1">&gt; level communication works for all but the loss of the HNP. Neither Ralph or
</span><br>
<span class="quotelev1">&gt; I have looked at supporting other routed components at this time. I know
</span><br>
<span class="quotelev1">&gt; your group at UTK has some done work in this area so we wanted to tackle
</span><br>
<span class="quotelev1">&gt; additional support for more scalable routed components as a second step,
</span><br>
<span class="quotelev1">&gt; hopefully with collaboration from your group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as the MPI layer, I can't say much at this point on how that works.
</span><br>
<span class="quotelev1">&gt; This RFC only handles recovery of the ORTE layer, MPI layer recovery is a
</span><br>
<span class="quotelev1">&gt; second step and involves much longer discussions. I have a solution for a
</span><br>
<span class="quotelev1">&gt; certain type of MPI application, and it sounds like you have something that
</span><br>
<span class="quotelev1">&gt; can be applied more generally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, this is the code that UT will bring in. All our work focus on
</span><br>
<span class="quotelev1">&gt; maintaining the exiting environment up and running instead of restarting
</span><br>
<span class="quotelev1">&gt; everything. The orted will auto-heal (i.e reshape the underlying topology,
</span><br>
<span class="quotelev1">&gt; recreate the connections, and so on), and the fault is propagated to the MPI
</span><br>
<span class="quotelev1">&gt; layer who will take the decision on what to do next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per my previous suggestion, would it be useful to chat on the phone early
</span><br>
<span class="quotelev1">&gt; next week about our various strategies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7500.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7498.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7501.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
