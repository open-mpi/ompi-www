<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 11:47:06 2009" -->
<!-- isoreceived="20091217164706" -->
<!-- sent="Thu, 17 Dec 2009 16:46:30 -0000" -->
<!-- isosent="20091217164630" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F5818C97_at_kl-exc-001.res.lan" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1261067919.15655.2.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Min Zhu (<em>min.zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 11:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11584.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11582.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Ashley,
<br>
<p>I changed the content in openmpi-mpirun script you mentioned but wrf.exe
<br>
still not executed.
<br>
<p>Cheers,
<br>
<p>Min Zhu
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ashley Pittman
<br>
Sent: 17 December 2009 16:39
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] About openmpi-mpirun
<br>
<p>On Thu, 2009-12-17 at 14:40 +0000, Min Zhu wrote:
<br>
<p><span class="quotelev1">&gt; Here is the content of openmpi-mpirun file, so maybe something needs
</span><br>
to
<br>
<span class="quotelev1">&gt; be changed?
</span><br>
<span class="quotelev1">&gt; if [ x&quot;${LSB_JOBFILENAME}&quot; = x -o x&quot;${LSB_HOSTS}&quot; = x ]; then
</span><br>
<span class="quotelev1">&gt;     usage
</span><br>
<span class="quotelev1">&gt;     exit -1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MYARGS=$*
</span><br>
<p>Shouldn't this be MYARGS=$@  It'll change the way quoted args are
<br>
forwarded to the parallel job.
<br>
<p>Ashley,
<br>
<p><p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11584.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11582.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
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
