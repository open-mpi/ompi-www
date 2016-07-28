<?
$subject_val = "Re: [OMPI users] pipe function call failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 11:52:28 2010" -->
<!-- isoreceived="20100309165228" -->
<!-- sent="Tue, 9 Mar 2010 09:52:19 -0700" -->
<!-- isosent="20100309165219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pipe function call failed..." -->
<!-- id="8C30D582-4E2F-4980-9733-6857467CC1E8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100309164017.GB4060_at_lasse.mail.plastictre.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 11:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12285.php">Douglas Guptill: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>In reply to:</strong> <a href="12282.php">Lasse Kliemann: "[OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ignoring an error doesn't seem like a good idea. The real question is why we are getting that error - it sounds like the newest Glibc release has changed the API?? Can you send us the revised one so we can put in a test and use the correct API for the installed version?
<br>
<p><p>On Mar 9, 2010, at 9:40 AM, Lasse Kliemann wrote:
<br>
<p><span class="quotelev1">&gt; $ mpirun -n 1 ls
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev1">&gt; Node: xxxxx.xxxxxxxxxx.xxxxxxxx.xx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I receive this error constantly. I tracked it down so far that it  
</span><br>
<span class="quotelev1">&gt; appears now certain that the 'tcgetattr' and 'tcsetattr' calls in 
</span><br>
<span class="quotelev1">&gt; 'orte/mca/iof/base/iof_base_setup.c' are responsible. 'errno' is 
</span><br>
<span class="quotelev1">&gt; set to 22 each, which means 'invalid argument'. We can simply 
</span><br>
<span class="quotelev1">&gt; ignore the return values of these calls and continue, as done in 
</span><br>
<span class="quotelev1">&gt; the attached patch. Some simple tests suggest that everything 
</span><br>
<span class="quotelev1">&gt; else is fine, but I haven't tested thoroughly yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another system, this problem is absent. The main difference 
</span><br>
<span class="quotelev1">&gt; are GCC and Glibc versions. The problematic system uses GCC 4.3.4 
</span><br>
<span class="quotelev1">&gt; and Glibc 2.11.1 -- which is the newest Glibc release and maybe 
</span><br>
<span class="quotelev1">&gt; untested yet with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know which additional information I can provide to further 
</span><br>
<span class="quotelev1">&gt; analyze this issue.
</span><br>
<span class="quotelev1">&gt; &lt;patch.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12285.php">Douglas Guptill: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>In reply to:</strong> <a href="12282.php">Lasse Kliemann: "[OMPI users] pipe function call failed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12287.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
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
