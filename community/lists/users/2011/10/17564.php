<?
$subject_val = "Re: [OMPI users] Question regarding mpirun options with ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 10:01:29 2011" -->
<!-- isoreceived="20111018140129" -->
<!-- sent="Tue, 18 Oct 2011 10:01:25 -0400" -->
<!-- isosent="20111018140125" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding mpirun options with ompi-restart" -->
<!-- id="CAANzjE=aFUXhAP9iT=bqyRZ1STQamUXBibxYRhsiQ-pdF6J2BQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT118-W524F82073215B983CFDC91D5E50_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question regarding mpirun options with ompi-restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-18 10:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="17563.php">Faisal Shahzad: "[OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17563.php">Faisal Shahzad: "[OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Reply:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll preface my response with the note that I have not tried any of
<br>
those options with the C/R functionality. It should just work, but I
<br>
am not 100% certain. If it doesn't, let me know and I'll file a bug to
<br>
fix it.
<br>
<p>You can pass any mpirun option through ompi-restart by using the
<br>
--mpirun_opts option.
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart</a>
<br>
<p>So something like:
<br>
&nbsp;&nbsp;shell$ ompi-restart --mpirun_opts &quot;-npernode 2&quot; ompi-global-snapshot-1234
<br>
<p>-- Josh
<br>
<p>On Tue, Oct 18, 2011 at 7:45 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Group,
</span><br>
<span class="quotelev1">&gt; I am using&#160;&#160;openmpi/1.5.3 and using ompi-checkpoint to checkpoint my
</span><br>
<span class="quotelev1">&gt; applicaiton. I use some mpirun option flags&#160;(-npernode, -npersocket, binding
</span><br>
<span class="quotelev1">&gt; options etc. )&#160;for mpirun. It works fine.
</span><br>
<span class="quotelev1">&gt; My question is that is it possible to specify these mpirun options
</span><br>
<span class="quotelev1">&gt; (-npernode, -npersocket, binding options etc. ) for ompi-restart?
</span><br>
<span class="quotelev1">&gt; I will be thankful for your reply.
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Faisal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="17563.php">Faisal Shahzad: "[OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17563.php">Faisal Shahzad: "[OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Reply:</strong> <a href="17565.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
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
