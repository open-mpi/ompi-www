<?
$subject_val = "Re: [OMPI users] Question regarding mpirun options with ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 11:36:45 2011" -->
<!-- isoreceived="20111018153645" -->
<!-- sent="Tue, 18 Oct 2011 11:36:41 -0400" -->
<!-- isosent="20111018153641" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding mpirun options with ompi-restart" -->
<!-- id="CAANzjEmPUhHMgEtZQtN9gT=YQ_=T9fsKLfTFYeRBiXbBrefvYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT118-W5780F0DE545A3F46DC4612D5E50_at_phx.gbl" -->
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
<strong>Date:</strong> 2011-10-18 11:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
<li><strong>Previous message:</strong> <a href="17567.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17567.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That option is only available on the trunk at the moment. I filed a
<br>
ticket to move the functionality to the 1.5 branch:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2890">https://svn.open-mpi.org/trac/ompi/ticket/2890</a>
<br>
<p>The work around would be to take the appfile generated from
<br>
&quot;ompi-restart --apponly ompi_snapshot...&quot;, and then run mpirun with
<br>
the options followed by the generated appfile.
<br>
&nbsp;shell$ mpirun -np 10 -npernode 2 appfile_from_ompi_restart
<br>
<p>Not as pretty, but it should work.
<br>
<p>-- Josh
<br>
<p>On Tue, Oct 18, 2011 at 11:28 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am using&#160;openmpi v1.5.3
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Faisal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 18 Oct 2011 11:17:33 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Question regarding mpirun options with
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That command line option may be only available on the trunk. What
</span><br>
<span class="quotelev2">&gt;&gt; version of Open MPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 18, 2011 at 11:14 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you for your reply.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I actually do not see option flag '--mpirun_opts' with 'ompi-restart
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --help'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Besides, I could only find 'mpirun_opts'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in&#160;/ompi-trunk/orte/tools/orte-restart/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="https://svn.open-mpi.org/source/search?q=mpirun_opts+&amp;defs=&amp;refs=&amp;path=&amp;hist">https://svn.open-mpi.org/source/search?q=mpirun_opts+&amp;defs=&amp;refs=&amp;path=&amp;hist</a>=
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Faisal
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Date: Tue, 18 Oct 2011 10:01:25 -0400
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] Question regarding mpirun options with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ompi-restart
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'll preface my response with the note that I have not tried any of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; those options with the C/R functionality. It should just work, but I
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; am not 100% certain. If it doesn't, let me know and I'll file a bug to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; fix it.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You can pass any mpirun option through ompi-restart by using the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --mpirun_opts option.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-restart</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; So something like:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; shell$ ompi-restart --mpirun_opts &quot;-npernode 2&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ompi-global-snapshot-1234
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Tue, Oct 18, 2011 at 7:45 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Dear Group,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I am using&#160;&#160;openmpi/1.5.3 and using ompi-checkpoint to checkpoint my
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; applicaiton. I use some mpirun option flags&#160;(-npernode, -npersocket,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; binding
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; options etc. )&#160;for mpirun. It works fine.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; My question is that is it possible to specify these mpirun options
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; (-npernode, -npersocket, binding options etc. ) for ompi-restart?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I will be thankful for your reply.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Kind regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Faisal
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
<li><strong>Previous message:</strong> <a href="17567.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="17567.php">Faisal Shahzad: "Re: [OMPI users] Question regarding mpirun options with ompi-restart"</a>
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
