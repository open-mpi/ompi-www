<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 09:21:14 2009" -->
<!-- isoreceived="20091217142114" -->
<!-- sent="Thu, 17 Dec 2009 14:15:14 -0000" -->
<!-- isosent="20091217141514" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F5818BDD_at_kl-exc-001.res.lan" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B2A38DF.9040104_at_icps.u-strasbg.fr" -->
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
<strong>Date:</strong> 2009-12-17 09:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your reply. Yes, your mpirun command works for me. But I need to use bsub job scheduler. I wonder why 
<br>
bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot; doesn't work.
<br>
<p>Cheers,
<br>
<p>Min Zhu
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Romaric David
<br>
Sent: 17 December 2009 13:58
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] About openmpi-mpirun
<br>
<p>Min Zhu a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I excuted 
</span><br>
<span class="quotelev1">&gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hello,
<br>
<p>Here we use :
<br>
<p>&nbsp;&nbsp;mpirun  /bin/tcsh -c &quot; limit stacksize unlimited ; /full/path/to/wrf.exe&quot;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R. David
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11571.php">Jeff Squyres: "Re: [OMPI users] About openmpi-mpirun"</a>
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
