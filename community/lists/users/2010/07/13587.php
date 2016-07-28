<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 09:49:06 2010" -->
<!-- isoreceived="20100712134906" -->
<!-- sent="Mon, 12 Jul 2010 09:48:36 -0400" -->
<!-- isosent="20100712134836" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="AANLkTincfBj-rSz0sKPBwDBxpLIUuluWY2uBb8U-RykN_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C38567F.3060901_at_hlrs.de" -->
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
<strong>Date:</strong> 2010-07-12 09:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13586.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13566.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am attaching all the output text resulted when configuring for the first
<br>
time. I am also attaching a picture of the of the main area. My main purpose
<br>
of installing OpenMPI is to set up a set of &quot;virtual cluster&quot; on the Windows
<br>
7 machine, so I could get accustomed with the different settings, and so I
<br>
could try some small programs, before being allowed to work on the actual
<br>
cluster.
<br>
<p>Note, this is the first time I am using a mailing list, so if I am not
<br>
allowed attachments, please tell me. I tried to keep them as small as
<br>
possible.
<br>
<p>Thanks for your help,
<br>
Alex
<br>
<p>On Sat, Jul 10, 2010 at 7:16 AM, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building Open MPI using CMake is the recommended procedure, you probably
</span><br>
<span class="quotelev1">&gt; should stick with it, and it has been proved working well on different
</span><br>
<span class="quotelev1">&gt; Windows platforms. The other building procedures are not well supported for
</span><br>
<span class="quotelev1">&gt; some time now, and they are deprecated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the problems that you got when building with CMake, it might because
</span><br>
<span class="quotelev1">&gt; some dependent headers/libraries are not installed. Could you please provide
</span><br>
<span class="quotelev1">&gt; the detail CMake error output, so that I can help you fix it?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-7-9 8:19 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is my first time posting on an email list, so if I don't follow
</span><br>
<span class="quotelev1">&gt; certain protocols just tell me. Anyway, I am working at a research lab as a
</span><br>
<span class="quotelev1">&gt; High School Summer Intern, and part of my project involves installing
</span><br>
<span class="quotelev1">&gt; OpenMPI on a Windows machine to run some applications in virtual clusters. I
</span><br>
<span class="quotelev1">&gt; tried following the first two methods from the Windows ReadMe file, but none
</span><br>
<span class="quotelev1">&gt; of them work. For the first one, there are a bunch of header files cMake
</span><br>
<span class="quotelev1">&gt; can't find. For the second one, the cannot find the ompi-static.tgz tarball.
</span><br>
<span class="quotelev1">&gt; The set of files that I downloaded from OpenMPI can be found here (tried
</span><br>
<span class="quotelev1">&gt; both tars): <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I noticed however that the ompi-static tarball can be found in the
</span><br>
<span class="quotelev1">&gt; Subversion that i obtained this way:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone tell me what I
</span><br>
<span class="quotelev1">&gt; might be doing wrong? Or maybe more detailed steps? it's the first time I
</span><br>
<span class="quotelev1">&gt; work with OpenMPI or any similar technologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alex Blidaru
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13587/configure.txt">configure.txt</a>
</ul>
<!-- attachment="configure.txt" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13587/Capture.PNG" alt="Capture.PNG">
<!-- attachment="Capture.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13586.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13566.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13588.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
