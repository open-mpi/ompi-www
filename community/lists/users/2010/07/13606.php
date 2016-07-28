<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 17:28:20 2010" -->
<!-- isoreceived="20100712212820" -->
<!-- sent="Mon, 12 Jul 2010 23:29:54 +0200" -->
<!-- isosent="20100712212954" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C3B8952.6070501_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinPmjO8v9AcghUJUqOwyuh8Aujk2XrGfaG5ZPg1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-12 17:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13605.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex,
<br>
<p>Actually, I don't see the errors from your outputs, the headers that are 
<br>
not found won't stop you to build Open MPI, they are not errors, but 
<br>
only the checking results of your system for configuring Open MPI. What 
<br>
you need to do is just press configure button twice, and then press 
<br>
generate button on CMake-GUI, all the Visual Studio solution and project 
<br>
files will be generated. The next thing is to open the solution and 
<br>
build it.
<br>
<p>Just let me know if you get any further questions.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-7-12 7:35 PM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed a 90 day trial of Visual Studio 2008, and I am pretty sure 
</span><br>
<span class="quotelev1">&gt; I am getting the exact same thing. The log and the picture are 
</span><br>
<span class="quotelev1">&gt; attached just as last time. Any new ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 12, 2010 at 9:58 AM, Shiqing Fan &lt;fan_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     When the attachment is large, you can set the email directly to me
</span><br>
<span class="quotelev1">&gt;     off the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For the problem you got, the reason is that you are using MinGW,
</span><br>
<span class="quotelev1">&gt;     but not Microsoft C/C++ compiler. Is that possible for you to just
</span><br>
<span class="quotelev1">&gt;     switch to Microsoft Visual Studio 2005 or 2008? There are still
</span><br>
<span class="quotelev1">&gt;     many problems for supporting MinGW at moment.
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
<span class="quotelev1">&gt;     On 2010-7-12 3:48 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am attaching all the output text resulted when configuring for
</span><br>
<span class="quotelev2">&gt;&gt;     the first time. I am also attaching a picture of the of the main
</span><br>
<span class="quotelev2">&gt;&gt;     area. My main purpose of installing OpenMPI is to set up a set of
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;virtual cluster&quot; on the Windows 7 machine, so I could
</span><br>
<span class="quotelev2">&gt;&gt;     get accustomed with the different settings, and so I could try
</span><br>
<span class="quotelev2">&gt;&gt;     some small programs, before being allowed to work on the actual
</span><br>
<span class="quotelev2">&gt;&gt;     cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Note, this is the first time I am using a mailing list, so if I
</span><br>
<span class="quotelev2">&gt;&gt;     am not allowed attachments, please tell me. I tried to keep them
</span><br>
<span class="quotelev2">&gt;&gt;     as small as possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;     Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sat, Jul 10, 2010 at 7:16 AM, Shiqing Fan &lt;fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:fan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Building Open MPI using CMake is the recommended procedure,
</span><br>
<span class="quotelev2">&gt;&gt;         you probably should stick with it, and it has been proved
</span><br>
<span class="quotelev2">&gt;&gt;         working well on different Windows platforms. The other
</span><br>
<span class="quotelev2">&gt;&gt;         building procedures are not well supported for some time now,
</span><br>
<span class="quotelev2">&gt;&gt;         and they are deprecated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For the problems that you got when building with CMake, it
</span><br>
<span class="quotelev2">&gt;&gt;         might because some dependent headers/libraries are not
</span><br>
<span class="quotelev2">&gt;&gt;         installed. Could you please provide the detail CMake error
</span><br>
<span class="quotelev2">&gt;&gt;         output, so that I can help you fix it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Regards,
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 2010-7-9 8:19 PM, Alexandru Blidaru wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hey guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         This is my first time posting on an email list, so if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         don't follow certain protocols just tell me. Anyway, I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         working at a research lab as a High School Summer Intern,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and part of my project involves installing OpenMPI on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Windows machine to run some applications in virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         clusters. I tried following the first two methods from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Windows ReadMe file, but none of them work. For the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         one, there are a bunch of header files cMake can't find. For
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the second one, the cannot find the ompi-static.tgz tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         The set of files that I downloaded from OpenMPI can be found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         here (tried both tars):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I noticed however that the ompi-static tarball can be found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in the Subversion that i obtained this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         way:<a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         tell me what I might be doing wrong? Or maybe more detailed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         steps? it's the first time I work with OpenMPI or any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         similar technologies.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Alex Blidaru
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev2">&gt;&gt;         High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev2">&gt;&gt;            Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev2">&gt;&gt;         Address:Allmandring 30               email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13605.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13597.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13609.php">Damien: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
