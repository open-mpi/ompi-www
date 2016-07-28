<?
$subject_val = "Re: [OMPI users] An mpirun question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 09:55:11 2009" -->
<!-- isoreceived="20090417135511" -->
<!-- sent="Fri, 17 Apr 2009 14:55:05 +0100" -->
<!-- isosent="20090417135505" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An mpirun question" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F50D0142_at_kl-exc-001.res.lan" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1239880011.5779.31.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] An mpirun question<br>
<strong>From:</strong> Min Zhu (<em>min.zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 09:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8963.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8945.php">Terry Frankcombe: "Re: [OMPI users] An mpirun question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Terry,
<br>
<p>Thank you very much for your help. It worked!
<br>
<p>Min
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Terry Frankcombe
<br>
Sent: 16 April 2009 12:07
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] An mpirun question
<br>
<p>Hi Min Zhu
<br>
<p>You need to read about hostfiles and bynode/byslot scheduling.  See
<br>
here:
<br>
&lt;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>&gt;
<br>
<p>Ciao
<br>
<p><p>On Thu, 2009-04-16 at 10:43 +0100, Min Zhu wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if you could help me with this question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have got 3 Linux servers with 8 processors on each server. If I want
</span><br>
<span class="quotelev1">&gt; to run a job using mpirun command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and specify the number of processors to be used on each server. Is
</span><br>
<span class="quotelev1">&gt; there any way to do this? At the moment,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find that I can only issue such command &#226;&#128;&#156;mpirun &#226;&#128;&#147;np 14 &#226;&#128;&#147;host
</span><br>
<span class="quotelev1">&gt; cfd1,cfd2 ./wrf.exe&#226;&#128;&#153; which means the mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will run the job using 7 processors on each server cfd1 and cfd2. Can
</span><br>
<span class="quotelev1">&gt; I specify say using 8 processors on cfd1 and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6 processors on cfd2? I ask this question because I found that the
</span><br>
<span class="quotelev1">&gt; different combination of processors on those
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Servers can influence the computation time dramatically. Thank you
</span><br>
<span class="quotelev1">&gt; very much in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Min Zhu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments,
</span><br>
<span class="quotelev1">&gt; contains information that may be confidential, and is protected by
</span><br>
<span class="quotelev1">&gt; copyright. It is directed to the intended recipient(s) only. If you
</span><br>
<span class="quotelev1">&gt; have received this e-mail in error please e-mail the sender by
</span><br>
<span class="quotelev1">&gt; replying to this message, and then delete the e-mail. Unauthorised
</span><br>
<span class="quotelev1">&gt; disclosure, publication, copying or use of this e-mail is prohibited.
</span><br>
<span class="quotelev1">&gt; Any communication of a personal nature in this e-mail is not made by
</span><br>
<span class="quotelev1">&gt; or on behalf of any RES group company. E-mails sent or received may be
</span><br>
<span class="quotelev1">&gt; monitored to ensure compliance with the law, regulation and/or our
</span><br>
<span class="quotelev1">&gt; policies.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>________________________________________________________________________
<br>
This e-mail has been scanned for all viruses by Star. The
<br>
service is powered by MessageLabs. For more information on a proactive
<br>
anti-virus service working around the clock, around the globe, visit:
<br>
<a href="http://www.star.net.uk">http://www.star.net.uk</a>
<br>
________________________________________________________________________
<br>
<p>CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8963.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8945.php">Terry Frankcombe: "Re: [OMPI users] An mpirun question"</a>
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
