<?
$subject_val = "Re: [OMPI users] need help in this error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 24 16:02:25 2013" -->
<!-- isoreceived="20131024200225" -->
<!-- sent="Thu, 24 Oct 2013 15:02:23 -0500" -->
<!-- isosent="20131024200223" -->
<!-- name="Osman Khalid" -->
<!-- email="osmankhalid2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] need help in this error" -->
<!-- id="CAPct32pYaQM3_LvszDAZNATj+z7iXPA08rqyBpa0FfCPUmAe0w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="526960C7.6050505_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] need help in this error<br>
<strong>From:</strong> Osman Khalid (<em>osmankhalid2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-24 16:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>In reply to:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Reply:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Marco for reply
<br>
<p>I changed the version to 1.7, but it is stilling give me exactly the same
<br>
error. I copy paste error below:
<br>
<p>$ make
<br>
Making all in config
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/opal'
<br>
Making all in include
<br>
make[2]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/include'
<br>
/usr/bin/make  all-am
<br>
make[3]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/include'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/include'
<br>
make[2]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/libltdl'
<br>
/bin/sh /home/OSMANK/openmpi-1.7.3/opal/libltdl/config/install-sh -d .
<br>
/bin/sh: /home/OSMANK/openmpi-1.7.3/opal/libltdl/config/install-sh: No such
<br>
file or directory
<br>
make[2]: *** [argz.h] Error 127
<br>
make[2]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.7.3/opal/libltdl'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.7.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Thanks in advance.
<br>
<p><p>On Thu, Oct 24, 2013 at 1:02 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Il 10/24/2013 7:35 PM, Osman Khalid ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am for the first time installing OpenMPI on my windows XP machine,
</span><br>
<span class="quotelev2">&gt;&gt; using Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The *./configure* command is successful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I give *make* command, i get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt; Making all in config
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/d/cygwin/home/OSMANK/**
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.6.5/config'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/d/cygwin/home/OSMANK/**openmpi-1.6.5/opal/libltdl'*
</span><br>
<span class="quotelev2">&gt;&gt; */bin/sh /home/OSMANK/openmpi-1.6.5/**opal/libltdl/config/install-sh -d
</span><br>
<span class="quotelev2">&gt;&gt; .*
</span><br>
<span class="quotelev2">&gt;&gt; */bin/sh: /home/OSMANK/openmpi-1.6.5/**opal/libltdl/config/install-**sh:
</span><br>
<span class="quotelev2">&gt;&gt; No
</span><br>
<span class="quotelev2">&gt;&gt; such file or directory*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [argz.h] Error 127
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/d/cygwin/home/OSMANK/**openmpi-1.6.5/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/d/cygwin/home/OSMANK/**openmpi-1.6.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I went to the above folder, and found that the file  &quot;install-sh&quot; was
</span><br>
<span class="quotelev2">&gt;&gt; there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would request help on that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Osman
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.2 is available on cygwin
</span><br>
<span class="quotelev1">&gt; Any specific reason to build 1.6.5 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>In reply to:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Reply:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
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
