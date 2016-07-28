<?
$subject_val = "Re: [OMPI users] pipe function call failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 18:30:18 2010" -->
<!-- isoreceived="20100309233018" -->
<!-- sent="Wed, 10 Mar 2010 00:34:55 +0100" -->
<!-- isosent="20100309233455" -->
<!-- name="Lasse Kliemann" -->
<!-- email="lasse-list-openmpi-2010_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pipe function call failed..." -->
<!-- id="20100309233455.GA2090_at_lasse.mail.plastictre.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8C30D582-4E2F-4980-9733-6857467CC1E8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] pipe function call failed...<br>
<strong>From:</strong> Lasse Kliemann (<em>lasse-list-openmpi-2010_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 18:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<li><strong>In reply to:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alas, I am by far no Glibc expert. I did a grep through the Glibc 
<br>
changelog, but only found a reference to tcgetattr from 2006.
<br>
<p>Of course, I would also like to see a real solution here instead 
<br>
of ignoring the error condition.
<br>
<p>* Message by -Ralph Castain- from Tue 2010-03-09:
<br>
<span class="quotelev1">&gt; Ignoring an error doesn't seem like a good idea. The real 
</span><br>
<span class="quotelev1">&gt; question is why we are getting that error - it sounds like the 
</span><br>
<span class="quotelev1">&gt; newest Glibc release has changed the API?? Can you send us the 
</span><br>
<span class="quotelev1">&gt; revised one so we can put in a test and use the correct API for 
</span><br>
<span class="quotelev1">&gt; the installed version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2010, at 9:40 AM, Lasse Kliemann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -n 1 ls
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev2">&gt; &gt; Node: xxxxx.xxxxxxxxxx.xxxxxxxx.xx
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I receive this error constantly. I tracked it down so far that it  
</span><br>
<span class="quotelev2">&gt; &gt; appears now certain that the 'tcgetattr' and 'tcsetattr' calls in 
</span><br>
<span class="quotelev2">&gt; &gt; 'orte/mca/iof/base/iof_base_setup.c' are responsible. 'errno' is 
</span><br>
<span class="quotelev2">&gt; &gt; set to 22 each, which means 'invalid argument'. We can simply 
</span><br>
<span class="quotelev2">&gt; &gt; ignore the return values of these calls and continue, as done in 
</span><br>
<span class="quotelev2">&gt; &gt; the attached patch. Some simple tests suggest that everything 
</span><br>
<span class="quotelev2">&gt; &gt; else is fine, but I haven't tested thoroughly yet.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On another system, this problem is absent. The main difference 
</span><br>
<span class="quotelev2">&gt; &gt; are GCC and Glibc versions. The problematic system uses GCC 4.3.4 
</span><br>
<span class="quotelev2">&gt; &gt; and Glibc 2.11.1 -- which is the newest Glibc release and maybe 
</span><br>
<span class="quotelev2">&gt; &gt; untested yet with OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let me know which additional information I can provide to further 
</span><br>
<span class="quotelev2">&gt; &gt; analyze this issue.
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12287/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<li><strong>In reply to:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
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
