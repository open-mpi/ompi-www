<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 18:08:28 2008" -->
<!-- isoreceived="20081021220828" -->
<!-- sent="Tue, 21 Oct 2008 16:08:13 -0600" -->
<!-- isosent="20081021220813" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="A0801CEC7AFED846978515099D145DA512837379B6_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12052_1224610760_m9LHdJ1K013826_C31FBAB2-483E-4B7E-A789-AFE544F20A9E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 18:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 21, 2008 11:36 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI runtime-specific
</span><br>
<span class="quotelev1">&gt; environment variable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 21.10.2008 um 18:52 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doug is right that we could use an additional command line flag to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indicate MPI runs, but at this point, we're trying to hide
</span><br>
<span class="quotelev1">&gt; that from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the user, such that all they have to do is run the binary vs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orterun/mpirun the binary and we detect whether it's a serial or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parallel run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And when you have this information you decide for your user,
</span><br>
<span class="quotelev1">&gt; whether to use mpirun (and the correct version to use) or
</span><br>
<span class="quotelev1">&gt; just the plain binary?
</span><br>
<p>I might have created some confusion here too.  The goal is to build an MPI-enabled binary 'foo' which a user may invoke as
<br>
<p>(1) ./foo
<br>
-OR-
<br>
(2) mpirun -np 4 ./foo
<br>
<p>The binary foo then determines at run-time whether it is to run in (1) serial, where MPI_Init will never be called; or (2) parallel, calling MPI_Init and so on.  This is a historical behavior which we need to preserve, at least for our present software release.
<br>
<p><span class="quotelev1">&gt; You are making something like &quot;strings the_binary&quot; and grep
</span><br>
<span class="quotelev1">&gt; for indications of the compilation type? For the standard
</span><br>
<span class="quotelev1">&gt; Open MPI with shared libraries a &quot;ldd the_binary&quot; might
</span><br>
<span class="quotelev1">&gt; reveal some information.
</span><br>
<p>Hadn't thought to do that actually, since it addresses a slightly different problem than I propose above.  Thanks for the suggestion.  This is another possibility if instead of doing this detection directly in our binary, we decide to change to a wrapper script approach.
<br>
<p>In any case, I appreciate all the discussion -- I believe I have a reasonable path forward using a combination of pre-processor defines that the OMPI wrappers and headers make with the runtime environment variables Ralph suggested (I'll just check for both the &lt;1.3 and &gt;= 1.3 environment cases).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7066.php">Doug Reeder: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
