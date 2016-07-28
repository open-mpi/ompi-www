<?
$subject_val = "Re: [OMPI users] OpenMpi installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 13:08:32 2014" -->
<!-- isoreceived="20140207180832" -->
<!-- sent="Fri, 7 Feb 2014 10:07:13 -0800" -->
<!-- isosent="20140207180713" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi installation" -->
<!-- id="4E8672FC-54DD-4D66-BF6C-971A10CE5BCA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAA52m+Mo-m+bBv3dHpmiJZ5t2AJkdHRQcFR4VTZ56AbAXd89kw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 13:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23571.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>In reply to:</strong> <a href="23571.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] OpenMpi installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And please do us a favor, Talia, and don't cross post the same problem to multiple mailing lists. I've been answering this on the devel posting, and all we are doing is duplicating our answers (and wasting people's time).
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 7, 2014, at 9:55 AM, &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan &lt;ozgur.pekcagliyan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like your problem is related with environment parameters. .bashrc is only for non-login shells as Reuti mentioned before. You should look for a file name .bash_profile, .profile or .bash_login.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may put your export lines in one of these files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check this link out;
</span><br>
<span class="quotelev1">&gt; <a href="http://askubuntu.com/questions/161249/bashrc-not-executed-when-opening-new-terminal">http://askubuntu.com/questions/161249/bashrc-not-executed-when-opening-new-terminal</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 7, 2014 at 7:15 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Am 07.02.2014 um 18:10 schrieb Talla:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes I have access to the command when I source it by hand? do you have any ready (example) ./bashrc file? I installed openmpi in my home directory (not root) if that help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can either source ~/.bashrc in any of your profiles for interactive logins or simply define it therein too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please have a look at `man bash` section &quot;INVOCATION&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Feb 7, 2014 at 8:05 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 07.02.2014 um 17:42 schrieb Talla:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I downloaded openmpi 1.7 and followed the installation instructions:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cd openmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --prefix=&quot;/home/$USER/.openmpi&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make install
</span><br>
<span class="quotelev3">&gt; &gt; &gt; export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; echo export PATH=&quot;$PATH:/home/$USER/.openmpi/bin&quot; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; echo export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/home/$USER/.openmpi/lib/&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; /home/$USER/.bashrc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The ~/.bashrc is by default only sourced for a non-interactive login. Do you have access to the command when you source it by hand?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NB: To avoid getting any system wide `mpicc`... first, it's safer to specify your custom installation first in both assignments of the environment variables.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No error messages appear, accept &quot;nothing to do with all-em&quot;. However when I run mpicc or mpirun it says no command. So I am not sure if the mpi installed correctly in my red hat server or not. I don't know what I am missing so I would really appreciate it if you help me as I am struggling with this for a while.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you in advance. Talla
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ######################
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dr. Jamal A Talla
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Assistant professor
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Department of Physics, Rm 2139
</span><br>
<span class="quotelev3">&gt; &gt; &gt; College of Science,09
</span><br>
<span class="quotelev3">&gt; &gt; &gt; King Faisal University
</span><br>
<span class="quotelev3">&gt; &gt; &gt; P.O. Box 380, Al-Ahsaa - 31982
</span><br>
<span class="quotelev3">&gt; &gt; &gt; City Code: HOF
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kingdom of Saudi Arabia
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cell Phone: +966564542399
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
</span><br>
<span class="quotelev1">&gt; B.Sc. in Computer Engineering
</span><br>
<span class="quotelev1">&gt; M.Sc. in Computer Engineering
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23573.php">Siegmar Gross: "[OMPI users] rankfiles in openmpi-1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23571.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>In reply to:</strong> <a href="23571.php">&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan: "Re: [OMPI users] OpenMpi installation"</a>
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
