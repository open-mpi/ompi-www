<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 09:55:44 2010" -->
<!-- isoreceived="20100712135544" -->
<!-- sent="Mon, 12 Jul 2010 15:58:09 +0200" -->
<!-- isosent="20100712135809" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C3B1F71.7000203_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTincfBj-rSz0sKPBwDBxpLIUuluWY2uBb8U-RykN_at_mail.gmail.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 09:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13589.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex,
<br>
<p>When the attachment is large, you can set the email directly to me off 
<br>
the list.
<br>
<p>For the problem you got, the reason is that you are using MinGW, but not 
<br>
Microsoft C/C++ compiler. Is that possible for you to just switch to 
<br>
Microsoft Visual Studio 2005 or 2008? There are still many problems for 
<br>
supporting MinGW at moment.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2010-7-12 3:48 PM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching all the output text resulted when configuring for the 
</span><br>
<span class="quotelev1">&gt; first time. I am also attaching a picture of the of the main area. My 
</span><br>
<span class="quotelev1">&gt; main purpose of installing OpenMPI is to set up a set of &quot;virtual 
</span><br>
<span class="quotelev1">&gt; cluster&quot; on the Windows 7 machine, so I could get accustomed with the 
</span><br>
<span class="quotelev1">&gt; different settings, and so I could try some small programs, before 
</span><br>
<span class="quotelev1">&gt; being allowed to work on the actual cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, this is the first time I am using a mailing list, so if I am not 
</span><br>
<span class="quotelev1">&gt; allowed attachments, please tell me. I tried to keep them as small as 
</span><br>
<span class="quotelev1">&gt; possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 10, 2010 at 7:16 AM, Shiqing Fan &lt;fan_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Building Open MPI using CMake is the recommended procedure, you
</span><br>
<span class="quotelev1">&gt;     probably should stick with it, and it has been proved working well
</span><br>
<span class="quotelev1">&gt;     on different Windows platforms. The other building procedures are
</span><br>
<span class="quotelev1">&gt;     not well supported for some time now, and they are deprecated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For the problems that you got when building with CMake, it might
</span><br>
<span class="quotelev1">&gt;     because some dependent headers/libraries are not installed. Could
</span><br>
<span class="quotelev1">&gt;     you please provide the detail CMake error output, so that I can
</span><br>
<span class="quotelev1">&gt;     help you fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2010-7-9 8:19 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hey guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This is my first time posting on an email list, so if I don't
</span><br>
<span class="quotelev2">&gt;&gt;     follow certain protocols just tell me. Anyway, I am working at a
</span><br>
<span class="quotelev2">&gt;&gt;     research lab as a High School Summer Intern, and part of my
</span><br>
<span class="quotelev2">&gt;&gt;     project involves installing OpenMPI on a Windows machine to run
</span><br>
<span class="quotelev2">&gt;&gt;     some applications in virtual clusters. I tried following the
</span><br>
<span class="quotelev2">&gt;&gt;     first two methods from the Windows ReadMe file, but none of them
</span><br>
<span class="quotelev2">&gt;&gt;     work. For the first one, there are a bunch of header files cMake
</span><br>
<span class="quotelev2">&gt;&gt;     can't find. For the second one, the cannot find the
</span><br>
<span class="quotelev2">&gt;&gt;     ompi-static.tgz tarball. The set of files that I downloaded from
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI can be found here (tried both tars):
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I noticed however that the ompi-static tarball can be found in
</span><br>
<span class="quotelev2">&gt;&gt;     the Subversion that i obtained this
</span><br>
<span class="quotelev2">&gt;&gt;     way:<a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone tell
</span><br>
<span class="quotelev2">&gt;&gt;     me what I might be doing wrong? Or maybe more detailed steps?
</span><br>
<span class="quotelev2">&gt;&gt;     it's the first time I work with OpenMPI or any similar technologies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;     Alex Blidaru
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;     High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;        Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;     Address:Allmandring 30               email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13589.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
