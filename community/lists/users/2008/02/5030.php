<?
$subject_val = "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 12:16:17 2008" -->
<!-- isoreceived="20080213171617" -->
<!-- sent="Wed, 13 Feb 2008 12:16:02 -0500" -->
<!-- isosent="20080213171602" -->
<!-- name="Hsieh, Pei-Ying (MED US)" -->
<!-- email="pei-ying.hsieh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="7AEC29D79CDD2646955922C34AFF197329E12E_at_USMLVV1EXCTV06.ww005.siemens.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47B31BC6.6030906_at_cs.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS<br>
<strong>From:</strong> Hsieh, Pei-Ying (MED US) (<em>pei-ying.hsieh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 12:16:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5031.php">Tom Wurgler: "[OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM"</a>
<li><strong>Previous message:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, James,
<br>
<p>Thanks for the email.  
<br>
<p>Yes, I did define CC/CXX/FC/F77/LDFLAGS.. Before configure.  All set to
<br>
mpicc/mpic++/mpif90.
<br>
<p>Pei 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of James A. Peltier
<br>
Sent: Wednesday, February 13, 2008 11:33 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS
<br>
<p>Hsieh, Pei-Ying (MED US) wrote:
<br>
<span class="quotelev1">&gt; Hi, Mark,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I installed HYPRE, I simply did &quot;./configure 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/hypre2.0&quot;, then make, make install.  All libraries
</span><br>
<p><span class="quotelev1">&gt; seems to be static libraries. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As for openmpi, I did &quot;./configure --prefix=/usr/local/openmpi 
</span><br>
<span class="quotelev1">&gt; --enable-static --disable-shared&quot;, then, make all install (elmer
</span><br>
prefers 
<br>
<span class="quotelev1">&gt; statically linked).  So, all openmpi static library should resides in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi.  A simple hello_mpi.c (.f90) ran fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; During elmer configuration, one of the steps is to build blas/parpack 
</span><br>
<span class="quotelev1">&gt; libraries.  Which was successful (I got libparpack.a under 
</span><br>
<span class="quotelev1">&gt; ELMER_HOME/lib).  It is not clear to me why at the final step of elmer
</span><br>
<p><span class="quotelev1">&gt; configuration, it complains about not finding HYPRE and parpack.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I also suspect about the /usr/lib64 business.  Trying to sort out 
</span><br>
<span class="quotelev1">&gt; whether this is an openMPI issue (on 64 bit SuSE) or elmer issue.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Did you ensure that all of the applications were built using the OpenMPI
<br>
<p>compilers?  Sometimes you *have* to define the CC, CXX, etc when
<br>
building.
<br>
<p><pre>
-- 
James A. Peltier
Technical Director, RHCE
SCIRF | GrUVi @ Simon Fraser University - Burnaby Campus
Phone   : 778-782-3610
Fax     : 778-782-3045
Mobile  : 778-840-6434
E-Mail  : jpeltier_at_[hidden]
Website : <a href="http://gruvi.cs.sfu.ca">http://gruvi.cs.sfu.ca</a> | <a href="http://scirf.cs.sfu.ca">http://scirf.cs.sfu.ca</a>
MSN     : subatomic_spam_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
----------------------------------------------------------------------------
This message and any included attachments are from Siemens Medical Solutions 
and are intended only for the addressee(s). 
The information contained herein may include trade secrets or privileged or 
otherwise confidential information. Unauthorized review, forwarding, printing, 
copying, distributing, or using such information is strictly prohibited and may 
be unlawful. If you received this message in error, or have reason to believe 
you are not authorized to receive it, please promptly delete this message and 
notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden] 
Thank you
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5031.php">Tom Wurgler: "[OMPI users] Can't get OPENMPI to run parallel job with Myrinet/GM"</a>
<li><strong>Previous message:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
