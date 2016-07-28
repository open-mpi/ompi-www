<?
$subject_val = "Re: [OMPI users] Intel 13.0.0 -pthreads warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 14:14:58 2012" -->
<!-- isoreceived="20121010181458" -->
<!-- sent="Wed, 10 Oct 2012 20:14:52 +0200" -->
<!-- isosent="20121010181452" -->
<!-- name="Jonas Juselius" -->
<!-- email="jonas.juselius_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel 13.0.0 -pthreads warning" -->
<!-- id="5075BB1C.4030207_at_uit.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF2B8B44-8CF0-4032-95ED-9D8C84981F1C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel 13.0.0 -pthreads warning<br>
<strong>From:</strong> Jonas Juselius (<em>jonas.juselius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 14:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20461.php">USA Linux UAE: "[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>In reply to:</strong> <a href="20460.php">Reuti: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>On 10/10/2012 07:25 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 10.10.2012 um 19:16 schrieb Jonas Juselius:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we recently installed the latest compilers from Intel (version 13.0.0), and compiled openmpi 1.6.2 for those compilers. When compiling using the mpif90, mpicc and mpicxx commands, the compiler spews out warnings that the &quot;-pthreads&quot; option is deprecated and that &quot;-reentrant threads&quot; should be used instead. While this is not a problem per se (yet), it confuses our users. I tried to fix this, but the settings are configured quite deep in some autoconf macros, and I decided to leave it for the time being.
</span><br>
<span class="quotelev1">&gt; what about adjusting it in /usr/share/openmpi/mpicc-wrapper-data.txt and alike?
</span><br>
<p>Ahh, that's a useful workaround! But it would be nice to have a solution 
<br>
which works automagically with both gcc and intel, i.e. when using 
<br>
OMPI_CC=icc. But for now I can ajust the flags for the intel users, and 
<br>
avoid confusion :)
<br>
<p>Jonas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20461.php">USA Linux UAE: "[OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>In reply to:</strong> <a href="20460.php">Reuti: "Re: [OMPI users] Intel 13.0.0 -pthreads warning"</a>
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
