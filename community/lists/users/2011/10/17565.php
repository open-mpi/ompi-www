<?
$subject_val = "Re: [OMPI users] Question regarding mpirun options with ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 11:14:21 2011" -->
<!-- isoreceived="20111018151421" -->
<!-- sent="Tue, 18 Oct 2011 15:14:16 +0000" -->
<!-- isosent="20111018151416" -->
<!-- name="Faisal Shahzad" -->
<!-- email="itsfaisi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding mpirun options with ompi-restart" -->
<!-- id="SNT118-W59929CE21C126E5A88AD56D5E50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjE=aFUXhAP9iT=bqyRZ1STQamUXBibxYRhsiQ-pdF6J2BQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Faisal Shahzad (<em>itsfaisi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-18 11:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="17564.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17564.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Reply:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Thank you for your reply.I actually do not see option flag '--mpirun_opts' with 'ompi-restart --help'.Besides, I could only find 'mpirun_opts' in /ompi-trunk/orte/tools/orte-restart/<a href="https://svn.open-mpi.org/source/search?q=mpirun_opts+&amp;defs=&amp;refs=&amp;path=&amp;hist">https://svn.open-mpi.org/source/search?q=mpirun_opts+&amp;defs=&amp;refs=&amp;path=&amp;hist</a>= 
<br>
Kind regards,Faisal
<br>
<span class="quotelev1">&gt; Date: Tue, 18 Oct 2011 10:01:25 -0400
</span><br>
<span class="quotelev1">&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question regarding mpirun options with ompi-restart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll preface my response with the note that I have not tried any of
</span><br>
<span class="quotelev1">&gt; those options with the C/R functionality. It should just work, but I
</span><br>
<span class="quotelev1">&gt; am not 100% certain. If it doesn't, let me know and I'll file a bug to
</span><br>
<span class="quotelev1">&gt; fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can pass any mpirun option through ompi-restart by using the
</span><br>
<span class="quotelev1">&gt; --mpirun_opts option.
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So something like:
</span><br>
<span class="quotelev1">&gt;   shell$ ompi-restart --mpirun_opts &quot;-npernode 2&quot; ompi-global-snapshot-1234
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 18, 2011 at 7:45 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Group,
</span><br>
<span class="quotelev2">&gt; &gt; I am using  openmpi/1.5.3 and using ompi-checkpoint to checkpoint my
</span><br>
<span class="quotelev2">&gt; &gt; applicaiton. I use some mpirun option flags (-npernode, -npersocket, binding
</span><br>
<span class="quotelev2">&gt; &gt; options etc. ) for mpirun. It works fine.
</span><br>
<span class="quotelev2">&gt; &gt; My question is that is it possible to specify these mpirun options
</span><br>
<span class="quotelev2">&gt; &gt; (-npernode, -npersocket, binding options etc. ) for ompi-restart?
</span><br>
<span class="quotelev2">&gt; &gt; I will be thankful for your reply.
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Faisal
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="17564.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17564.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>Reply:</strong> <a href="17566.php">Josh Hursey: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
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
