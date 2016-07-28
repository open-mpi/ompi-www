<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 17:22:26 2006" -->
<!-- isoreceived="20060615212226" -->
<!-- sent="Thu, 15 Jun 2006 17:22:22 -0400" -->
<!-- isosent="20060615212222" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot link statically against OpenMPI programs" -->
<!-- id="34A2103EAA952D42A158D34F30AF14CF01366015_at_engin-mail5.engin.umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2FBC6789-6927-48DD-BF5C-8BA608B5E82D_at_gmail.com" -->
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
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 17:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Previous message:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>In reply to:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anoop,
<br>
<p>OpenMPI defaults to building only shared libraries; see this FAQ entry
<br>
for building static libraries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a>
<br>
<p>Hope this helps.
<br>
--andy
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Anoop Rajendra
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 15, 2006 4:56 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Cannot link statically against OpenMPI programs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having trouble compiling applications to link statically
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line and error I receive is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_Pebble-anoop examples]# mpicc -c cpi.c 
</span><br>
<span class="quotelev1">&gt; [root_at_Pebble-anoop examples]# mpicc -static -o cpi cpi.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure how I can compile an application statically. Can 
</span><br>
<span class="quotelev1">&gt; someone help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Anoop
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1428.php">Brian Barrett: "Re: [OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Previous message:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
<li><strong>In reply to:</strong> <a href="1426.php">Anoop Rajendra: "[OMPI users] Cannot link statically against OpenMPI programs"</a>
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
