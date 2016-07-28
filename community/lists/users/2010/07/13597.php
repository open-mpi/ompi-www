<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 13:35:55 2010" -->
<!-- isoreceived="20100712173555" -->
<!-- sent="Mon, 12 Jul 2010 13:35:29 -0400" -->
<!-- isosent="20100712173529" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="AANLkTinPmjO8v9AcghUJUqOwyuh8Aujk2XrGfaG5ZPg1_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C3B1F71.7000203_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install OpenMPI on Win 7 machine<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 13:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13598.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13606.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>I installed a 90 day trial of Visual Studio 2008, and I am pretty sure I am
<br>
getting the exact same thing. The log and the picture are attached just as
<br>
last time. Any new ideas?
<br>
<p>Regards,
<br>
Alex
<br>
<p>On Mon, Jul 12, 2010 at 9:58 AM, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the attachment is large, you can set the email directly to me off the
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the problem you got, the reason is that you are using MinGW, but not
</span><br>
<span class="quotelev1">&gt; Microsoft C/C++ compiler. Is that possible for you to just switch to
</span><br>
<span class="quotelev1">&gt; Microsoft Visual Studio 2005 or 2008? There are still many problems for
</span><br>
<span class="quotelev1">&gt; supporting MinGW at moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-7-12 3:48 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am attaching all the output text resulted when configuring for the
</span><br>
<span class="quotelev1">&gt; first time. I am also attaching a picture of the of the main area. My main
</span><br>
<span class="quotelev1">&gt; purpose of installing OpenMPI is to set up a set of &quot;virtual cluster&quot; on the
</span><br>
<span class="quotelev1">&gt; Windows 7 machine, so I could get accustomed with the different settings,
</span><br>
<span class="quotelev1">&gt; and so I could try some small programs, before being allowed to work on the
</span><br>
<span class="quotelev1">&gt; actual cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Note, this is the first time I am using a mailing list, so if I am not
</span><br>
<span class="quotelev1">&gt; allowed attachments, please tell me. I tried to keep them as small as
</span><br>
<span class="quotelev1">&gt; possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 10, 2010 at 7:16 AM, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building Open MPI using CMake is the recommended procedure, you probably
</span><br>
<span class="quotelev2">&gt;&gt; should stick with it, and it has been proved working well on different
</span><br>
<span class="quotelev2">&gt;&gt; Windows platforms. The other building procedures are not well supported for
</span><br>
<span class="quotelev2">&gt;&gt; some time now, and they are deprecated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the problems that you got when building with CMake, it might because
</span><br>
<span class="quotelev2">&gt;&gt; some dependent headers/libraries are not installed. Could you please provide
</span><br>
<span class="quotelev2">&gt;&gt; the detail CMake error output, so that I can help you fix it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-7-9 8:19 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hey guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This is my first time posting on an email list, so if I don't follow
</span><br>
<span class="quotelev2">&gt;&gt; certain protocols just tell me. Anyway, I am working at a research lab as a
</span><br>
<span class="quotelev2">&gt;&gt; High School Summer Intern, and part of my project involves installing
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI on a Windows machine to run some applications in virtual clusters. I
</span><br>
<span class="quotelev2">&gt;&gt; tried following the first two methods from the Windows ReadMe file, but none
</span><br>
<span class="quotelev2">&gt;&gt; of them work. For the first one, there are a bunch of header files cMake
</span><br>
<span class="quotelev2">&gt;&gt; can't find. For the second one, the cannot find the ompi-static.tgz tarball.
</span><br>
<span class="quotelev2">&gt;&gt; The set of files that I downloaded from OpenMPI can be found here (tried
</span><br>
<span class="quotelev2">&gt;&gt; both tars): <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I noticed however that the ompi-static tarball can be found in the
</span><br>
<span class="quotelev2">&gt;&gt; Subversion that i obtained this way:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone tell me what I
</span><br>
<span class="quotelev2">&gt;&gt; might be doing wrong? Or maybe more detailed steps? it's the first time I
</span><br>
<span class="quotelev2">&gt;&gt; work with OpenMPI or any similar technologies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Alex Blidaru
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;&gt; Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13597/configure_2.txt">configure_2.txt</a>
</ul>
<!-- attachment="configure_2.txt" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13597/Capture_2.PNG" alt="Capture_2.PNG">
<!-- attachment="Capture_2.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13598.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13596.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13600.php">Trent Creekmore: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13606.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
