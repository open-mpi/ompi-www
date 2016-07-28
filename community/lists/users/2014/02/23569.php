<?
$subject_val = "Re: [OMPI users] OpenMpi installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 12:10:24 2014" -->
<!-- isoreceived="20140207171024" -->
<!-- sent="Fri, 7 Feb 2014 20:10:23 +0300" -->
<!-- isosent="20140207171023" -->
<!-- name="Talla" -->
<!-- email="jtalla_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi installation" -->
<!-- id="CAGCe5YrVdkJtspFRVCyShWYbBYzwwwp-D7xOqq+gzT1BJ8ub4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D7C09FA2-B60C-447A-B7A9-FCC98D95ECAD_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMpi installation<br>
<strong>From:</strong> Talla (<em>jtalla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 12:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>In reply to:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Reply:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I have access to the command when I source it by hand? do you have any
<br>
ready (example) ./bashrc file? I installed openmpi in my home directory
<br>
(not root) if that help?
<br>
<p><p>On Fri, Feb 7, 2014 at 8:05 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 07.02.2014 um 17:42 schrieb Talla:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I downloaded openmpi 1.7 and followed the installation instructions:
</span><br>
<span class="quotelev2">&gt; &gt; cd openmpi
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=&quot;/home/$USER/.openmpi&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; make install
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev2">&gt; &gt; echo export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ~/.bashrc is by default only sourced for a non-interactive login. Do
</span><br>
<span class="quotelev1">&gt; you have access to the command when you source it by hand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NB: To avoid getting any system wide `mpicc`... first, it's safer to
</span><br>
<span class="quotelev1">&gt; specify your custom installation first in both assignments of the
</span><br>
<span class="quotelev1">&gt; environment variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No error messages appear, accept &quot;nothing to do with all-em&quot;. However
</span><br>
<span class="quotelev1">&gt; when I run mpicc or mpirun it says no command. So I am not sure if the mpi
</span><br>
<span class="quotelev1">&gt; installed correctly in my red hat server or not. I don't know what I am
</span><br>
<span class="quotelev1">&gt; missing so I would really appreciate it if you help me as I am struggling
</span><br>
<span class="quotelev1">&gt; with this for a while.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance. Talla
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ######################
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Jamal A Talla
</span><br>
<span class="quotelev2">&gt; &gt; Assistant professor
</span><br>
<span class="quotelev2">&gt; &gt; Department of Physics, Rm 2139
</span><br>
<span class="quotelev2">&gt; &gt; College of Science,09
</span><br>
<span class="quotelev2">&gt; &gt; King Faisal University
</span><br>
<span class="quotelev2">&gt; &gt; P.O. Box 380, Al-Ahsaa - 31982
</span><br>
<span class="quotelev2">&gt; &gt; City Code: HOF
</span><br>
<span class="quotelev2">&gt; &gt; Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt; &gt; Cell Phone: +966564542399
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
*######################*
*Dr. Jamal A TallaAssistant professorDepartment of Physics, **Rm 2139*
*College of Science,09 King Faisal UniversityP.O. Box 380, Al-Ahsaa** -
31982*
City Code: HOF
*Kingdom of Saudi ArabiaCell Phone: +966564542399*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>In reply to:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Reply:</strong> <a href="23570.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
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
