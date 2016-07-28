<?
$subject_val = "Re: [OMPI users] Install OpenMPI on Win 7 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 15:33:20 2010" -->
<!-- isoreceived="20100712193320" -->
<!-- sent="Mon, 12 Jul 2010 14:33:22 -0500" -->
<!-- isosent="20100712193322" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install OpenMPI on Win 7 machine" -->
<!-- id="COL117-DS56EF2B90C42B4E9C799ECE9B80_at_phx.gbl" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTilsfwVqLgOlp2ASJUlbuAQ_lKv7DSqwHzJeb6AF_at_mail.gmail.com" -->
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
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 15:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13601.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13601.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13606.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then do it on a USB drive.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><a href="https://fedorahosted.org/liveusb-creator/">https://fedorahosted.org/liveusb-creator/</a>
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Alexandru Blidaru
<br>
Sent: Monday, July 12, 2010 2:20 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Install OpenMPI on Win 7 machine
<br>
<p>&nbsp;
<br>
<p>Well, I tried cygwin, and it aborted the whole thing at one point. I know
<br>
that most Linux distros come with OpenMPI. The cluster I'm actually going to
<br>
be working with has Linux on it. The reason why I am not switching to Linux
<br>
for the virtual cluster part is that my computer doesn't have a DVD/CD drive
<br>
and they told me that they don't really have time to set up Linux for me
<br>
through a network installation.
<br>
<p>So for the next few days I will be stuck with Windows 7
<br>
<p>On Mon, Jul 12, 2010 at 2:49 PM, Trent Creekmore
<br>
&lt;mtcreekmore_at_[hidden]&gt; wrote:
<br>
<p>I would say trying put Cygwin on the computer.
<br>
<p>&nbsp;
<br>
<p><a href="http://www.cygwin.com/">http://www.cygwin.com/</a>
<br>
<p>&nbsp;
<br>
<p>It puts a Linux like environment on Windows which includes  gcc and g++.
<br>
<p>&nbsp;
<br>
<p>Since you are setting up virtual clusters, why not just go ahead and setup a
<br>
virtual Linux cluster and be on to other things than trying to get it
<br>
compile on Windows?
<br>
<p>&nbsp;
<br>
<p>In many distros, Open MPI is already included in their standard repository
<br>
so you would not even need to compile it.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Alexandru Blidaru
<br>
Sent: Monday, July 12, 2010 12:35 PM
<br>
To: fan_at_[hidden]
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] Install OpenMPI on Win 7 machine
<br>
<p>&nbsp;
<br>
<p>Hey,
<br>
<p>&nbsp;
<br>
<p>I installed a 90 day trial of Visual Studio 2008, and I am pretty sure I am
<br>
getting the exact same thing. The log and the picture are attached just as
<br>
last time. Any new ideas?
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Alex
<br>
<p>On Mon, Jul 12, 2010 at 9:58 AM, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<p><p>Hi Alex,
<br>
<p>When the attachment is large, you can set the email directly to me off the
<br>
list.
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
<p><p><p>On 2010-7-12 3:48 PM, Alexandru Blidaru wrote: 
<br>
<p>Hi, 
<br>
<p>&nbsp;
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
<p>&nbsp;
<br>
<p>Note, this is the first time I am using a mailing list, so if I am not
<br>
allowed attachments, please tell me. I tried to keep them as small as
<br>
possible.
<br>
<p>&nbsp;
<br>
<p>Thanks for your help,
<br>
<p>Alex
<br>
<p>On Sat, Jul 10, 2010 at 7:16 AM, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<p>Hi Alex,
<br>
<p>Building Open MPI using CMake is the recommended procedure, you probably
<br>
should stick with it, and it has been proved working well on different
<br>
Windows platforms. The other building procedures are not well supported for
<br>
some time now, and they are deprecated.
<br>
<p>For the problems that you got when building with CMake, it might because
<br>
some dependent headers/libraries are not installed. Could you please provide
<br>
the detail CMake error output, so that I can help you fix it?
<br>
<p><p>Regards,
<br>
Shiqing 
<br>
<p><p><p><p>On 2010-7-9 8:19 PM, Alexandru Blidaru wrote: 
<br>
<p>Hey guys, 
<br>
<p>&nbsp;
<br>
<p>This is my first time posting on an email list, so if I don't follow certain
<br>
protocols just tell me. Anyway, I am working at a research lab as a High
<br>
School Summer Intern, and part of my project involves installing OpenMPI on
<br>
a Windows machine to run some applications in virtual clusters. I tried
<br>
following the first two methods from the Windows ReadMe file, but none of
<br>
them work. For the first one, there are a bunch of header files cMake can't
<br>
find. For the second one, the cannot find the ompi-static.tgz tarball. The
<br>
set of files that I downloaded from OpenMPI can be found here (tried both
<br>
tars): <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> .
<br>
<p>&nbsp;
<br>
<p>I noticed however that the ompi-static tarball can be found in the
<br>
Subversion that i obtained this
<br>
way:<a href="http://www.open-mpi.org/svn/mercurial.php">http://www.open-mpi.org/svn/mercurial.php</a> . Can anyone tell me what I
<br>
might be doing wrong? Or maybe more detailed steps? it's the first time I
<br>
work with OpenMPI or any similar technologies.
<br>
<p>&nbsp;
<br>
<p>Thanks for your help,
<br>
<p>Alex Blidaru
<br>
<p>&nbsp;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
 
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13601.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>In reply to:</strong> <a href="13601.php">Alexandru Blidaru: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13606.php">Shiqing Fan: "Re: [OMPI users] Install OpenMPI on Win 7 machine"</a>
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
