<?
$subject_val = "[OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 12:33:55 2009" -->
<!-- isoreceived="20090713163355" -->
<!-- sent="Mon, 13 Jul 2009 09:33:56 -0700" -->
<!-- isosent="20090713163356" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Xgrid and choosing agents..." -->
<!-- id="63EE16C3-751C-43B7-9128-9186AF724ACF_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.21.1247328024.20289.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Xgrid and choosing agents...<br>
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 12:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9937.php">Rodrigo Delgado Urz&#250;a: "[OMPI users] OpenMPI SCI support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>Have you tried turning off Hyper-Threading with the Processor  
<br>
Preference Pane?
<br>
<p>The processor palette is include in the CHUD package when you  
<br>
installed the developer tools. It lives in /Developer/Extras/ 
<br>
PreferencePanes;  launch it and it will get added to the system  
<br>
preferences.
<br>
<p><p>Warner Yuen
<br>
Scientific Computing
<br>
Consulting Engineer
<br>
Apple, Inc.
<br>
email: wyuen_at_[hidden]
<br>
<p><p><p>On Jul 11, 2009, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Sat, 11 Jul 2009 07:56:08 -0700
</span><br>
<span class="quotelev1">&gt; From: Klymak Jody &lt;jklymak_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Xgrid and choosing agents...
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;A6282054-7BCC-4261-9822-AD080B5A68EA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry in advance if these are naive questions - I'm not experienced in
</span><br>
<span class="quotelev1">&gt; running a grid...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores mimic
</span><br>
<span class="quotelev1">&gt; 16 cores and show up in xgrid as each agent having 16 processors.
</span><br>
<span class="quotelev1">&gt; However, the processing speed goes down as the used processors exceeds
</span><br>
<span class="quotelev1">&gt; 8, so if possible I'd prefer to not have more than 8 processors
</span><br>
<span class="quotelev1">&gt; working on each machine at a time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, if I submit a 16-processor job to xgrid it all goes to
</span><br>
<span class="quotelev1">&gt; &quot;xserve03&quot;.  Or even worse, it does so if I submit two separate 8-
</span><br>
<span class="quotelev1">&gt; processor jobs.  Is there anyway to steer jobs to less-busy agents?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried making a hostfile and then specifying the host, but I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host
</span><br>
<span class="quotelev1">&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current allocation
</span><br>
<span class="quotelev1">&gt; for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt;   ../build/mitgcmuv
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;   xserve01.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is a reasonable alternative to simply not use xgrid and rely on ssh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1285, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9938/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9937.php">Rodrigo Delgado Urz&#250;a: "[OMPI users] OpenMPI SCI support"</a>
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
