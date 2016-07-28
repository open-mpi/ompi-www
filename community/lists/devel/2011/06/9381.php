<?
$subject_val = "Re: [OMPI devel] Ideas for notifying completion of ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 08:39:10 2011" -->
<!-- isoreceived="20110616123910" -->
<!-- sent="Thu, 16 Jun 2011 08:39:06 -0400" -->
<!-- isosent="20110616123906" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ideas for notifying completion of ompi-restart" -->
<!-- id="BANLkTikWihRcZHqB5Bp2E4YMQZ7YsPW0LA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikr=8HzwXid6g=1Cga9ciWEOD_CVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ideas for notifying completion of ompi-restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-16 08:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9382.php">Jeff Squyres: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9378.php">Kishor Kharbas: "[OMPI devel] Ideas for notifying completion of ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the HNP/mpirun knows when the job is fully restarted. The code for
<br>
that is at:
<br>
&nbsp;&nbsp;orte/mca/snapc/full/snapc_full_global.c:1758
<br>
<p>This should prevent ompi-checkpoint from starting a checkpoint before
<br>
the restart is complete. I suspect those are the errors that you are
<br>
talking about.
<br>
<p>Since you are triggering the checkpoint external to the application,
<br>
you will need to add code to the HNP/mpirun around the code cited
<br>
above to notify you of the restart completion. There is no such
<br>
mechanism for an external tool to know that the job has successfully
<br>
finished the restart in the current trunk. If you come up with a good
<br>
solution, send us a patch and we can try to work it into the trunk.
<br>
<p>-- Josh
<br>
<p>On Wed, Jun 15, 2011 at 5:36 PM, Kishor Kharbas &lt;kkharba_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello !
</span><br>
<span class="quotelev1">&gt; I am working on some simulations where I have to perform periodic
</span><br>
<span class="quotelev1">&gt; kill-restart and checkpointing on a MPI application.
</span><br>
<span class="quotelev1">&gt; As a checkpoint can take place immediately after restart I need some way to
</span><br>
<span class="quotelev1">&gt; know whether ompi-restart of the application is complete.
</span><br>
<span class="quotelev1">&gt; If I do not ensure that restart of all application processes is complete,
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint fails after throwing a slew of errors.
</span><br>
<span class="quotelev1">&gt; Can someone please suggest an idea for having some kind of notification
</span><br>
<span class="quotelev1">&gt; indicating restarts have complete (in the sense that checkpointing .
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Kishor
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9382.php">Jeff Squyres: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9380.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9378.php">Kishor Kharbas: "[OMPI devel] Ideas for notifying completion of ompi-restart"</a>
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
