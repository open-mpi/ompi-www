<?
$subject_val = "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 16:38:38 2008" -->
<!-- isoreceived="20080212213838" -->
<!-- sent="Tue, 12 Feb 2008 15:38:30 -0600" -->
<!-- isosent="20080212213830" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="47B211D6.4050004_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7AEC29D79CDD2646955922C34AFF197329DF2E_at_USMLVV1EXCTV06.ww005.siemens.net" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 16:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5025.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5025.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible that this could be a problem with /usr/lib64 as opposed 
<br>
to /usr/lib?
<br>
<p>Just a thought...
<br>
<p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
//
<br>
<p><p>Hsieh, Pei-Ying (MED US) wrote:
<br>
<span class="quotelev1">&gt; Hi, Edgar and Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the quick reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What puzzles me is that, on 32 bit OpenSUSE, I was able to compile elmer
</span><br>
<span class="quotelev1">&gt; solver without any issue using the same script.  I am planning to use
</span><br>
<span class="quotelev1">&gt; HYPRE library, but, configure file indicated that it cannot find hypre
</span><br>
<span class="quotelev1">&gt; either which is another puzzle to me.  I will look into this further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pei 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 12, 2008 4:28 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt that this has to do anything with the platform. We are running 
</span><br>
<span class="quotelev1">&gt; here Open MPI on a 64bit architecture using SuSe 10.2  since quite a 
</span><br>
<span class="quotelev1">&gt; while successfully. However, you configure log is indicating, the 
</span><br>
<span class="quotelev1">&gt; parpack could not be found, so you might have to change the CFLAGS and 
</span><br>
<span class="quotelev1">&gt; LDFLAGS in order for you configure script to find the according library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hsieh, Pei-Ying (MED US) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: The MPI version needs parpack. Disabling MPI.
</span><br>
<span class="quotelev2">&gt;&gt; peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message and any included attachments are from Siemens Medical Solutions 
</span><br>
<span class="quotelev1">&gt; and are intended only for the addressee(s). 
</span><br>
<span class="quotelev1">&gt; The information contained herein may include trade secrets or privileged or 
</span><br>
<span class="quotelev1">&gt; otherwise confidential information. Unauthorized review, forwarding, printing, 
</span><br>
<span class="quotelev1">&gt; copying, distributing, or using such information is strictly prohibited and may 
</span><br>
<span class="quotelev1">&gt; be unlawful. If you received this message in error, or have reason to believe 
</span><br>
<span class="quotelev1">&gt; you are not authorized to receive it, please promptly delete this message and 
</span><br>
<span class="quotelev1">&gt; notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
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
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5025.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5025.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
