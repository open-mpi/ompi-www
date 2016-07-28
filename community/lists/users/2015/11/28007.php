<?
$subject_val = "Re: [OMPI users] Open MPI CPU Binding Related Questions.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 13:04:01 2015" -->
<!-- isoreceived="20151105180401" -->
<!-- sent="Thu, 05 Nov 2015 18:03:57 +0000" -->
<!-- isosent="20151105180357" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI CPU Binding Related Questions." -->
<!-- id="87vb9gmigi.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAD1Bv4MXh7VcmfqmKrtbJ0n6SmdGTnVSo4U0GZmfe5KvrCd1Mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI CPU Binding Related Questions.<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 13:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jason Cook &lt;jasoncook_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt;    - 2.      Since we allow sharing of the compute nodes with multiple
</span><br>
<span class="quotelev1">&gt;    jobs, I noticed if users utilize the option bind-to-core, Open MPI starts
</span><br>
<span class="quotelev1">&gt;    with CPU core 0 and works its way sequentially as stated in the man pages
</span><br>
<span class="quotelev1">&gt;    for this option. Since we do allow sharing of the nodes with multiple jobs,
</span><br>
<span class="quotelev1">&gt;    I have seen two separate jobs with binding options, overload the same CPU
</span><br>
<span class="quotelev1">&gt;    core(s) which causes the job to run longer than expected. Is there a way to
</span><br>
<span class="quotelev1">&gt;    configure Open MPI to observe the current binding of other jobs and
</span><br>
<span class="quotelev1">&gt;    allocate the job bindings around previous bound jobs?
</span><br>
<p>That's a (batch system) resource manager problem; presumably you have
<br>
expensive support.  OMPI will respect a binding it's given by the
<br>
resource manager which should normally be configured to supply one.  I
<br>
won't post the evidence of it working fine here under SGE, as that would
<br>
include home directory and maybe private executable names.  (If you want
<br>
to enforce it on Linux, you need to run in a cpuset, which is a
<br>
different story.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
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
