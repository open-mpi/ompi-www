<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 07:14:35 2010" -->
<!-- isoreceived="20100710111435" -->
<!-- sent="Sat, 10 Jul 2010 13:16:15 +0200" -->
<!-- isosent="20100710111615" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="4C38567F.3060901_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTin35ixPHrYRV8szwKk8O1AKmh7mhA49vCaFEotd_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-10 07:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13565.php">Jack Bryan: "[OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13564.php">Alexandru Blidaru: "[OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi Alex,
<br>
<p>Building Open MPI using CMake is the recommended procedure, you probably 
<br>
should stick with it, and it has been proved working well on different 
<br>
Windows platforms. The other building procedures are not well supported 
<br>
for some time now, and they are deprecated.
<br>
<p>For the problems that you got when building with CMake, it might because 
<br>
some dependent headers/libraries are not installed. Could you please 
<br>
provide the detail CMake error output, so that I can help you fix it?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-7-9 8:19 PM, Alexandru Blidaru wrote:
<br>
<span class="quotelev1">&gt; Hey guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my first time posting on an email list, so if I don't follow 
</span><br>
<span class="quotelev1">&gt; certain protocols just tell me. Anyway, I am working at a research lab 
</span><br>
<span class="quotelev1">&gt; as a High School Summer Intern, and part of my project involves 
</span><br>
<span class="quotelev1">&gt; installing OpenMPI on a Windows machine to run some applications in 
</span><br>
<span class="quotelev1">&gt; virtual clusters. I tried following the first two methods from the 
</span><br>
<span class="quotelev1">&gt; Windows ReadMe file, but none of them work. For the first one, there 
</span><br>
<span class="quotelev1">&gt; are a bunch of header files cMake can't find. For the second one, the 
</span><br>
<span class="quotelev1">&gt; cannot find the ompi-static.tgz tarball. The set of files that I 
</span><br>
<span class="quotelev1">&gt; downloaded from OpenMPI can be found here (tried both tars): 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed however that the ompi-static tarball can be found in the 
</span><br>
<span class="quotelev1">&gt; Subversion that i obtained this 
</span><br>
<span class="quotelev1">&gt; way:<a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone tell me 
</span><br>
<span class="quotelev1">&gt; what I might be doing wrong? Or maybe more detailed steps? it's the 
</span><br>
<span class="quotelev1">&gt; first time I work with OpenMPI or any similar technologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alex Blidaru
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13565.php">Jack Bryan: "[OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13564.php">Alexandru Blidaru: "[OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Reply:</strong> <a href="13587.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
