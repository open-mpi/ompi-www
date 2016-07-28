<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 15:40:39 2007" -->
<!-- isoreceived="20071023194039" -->
<!-- sent="Tue, 23 Oct 2007 14:40:32 -0500" -->
<!-- isosent="20071023194032" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI can't open PML cm" -->
<!-- id="OF10A10F6C.638618C3-ON8625737D.006B31DD-8625737D.006C14A3_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.13345.1192639755.6844.users_at_open-mpi.org" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 15:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4289.php">Prasun Ratn: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4287.php">Amit Kumar Saha: "[OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thanks for your response.
<br>
I found a bug in my MTL code that had propagated up to PML which was 
<br>
causing that error. 
<br>
<p>Sajjad Tabib
<br>
<p><p><p>Message: 2
<br>
Date: Wed, 17 Oct 2007 12:24:53 -0400
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Open MPI can't open PML cm
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;8561CFAA-764A-4C61-A6B1-CDC74F1CD257_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;us-ascii&quot;
<br>
<p>The CM PML only support networks that do matching in hardware. In 
<br>
Open MPI temrs, the CM PML require one of the MTL (instead of the BTL 
<br>
for all others PML). For a full list of supported networks, one can 
<br>
list the content of the ompi/mca/mtl directory (right now: Myrinet, 
<br>
Portals and QSLogic).
<br>
<p>If your environment do not dispose of any of these networks, then CM 
<br>
cannot be used. Moreover, as you force the PML to CM on the command 
<br>
line, as CM fails to load, Open MPI give up claiming that no PML were 
<br>
found.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 17, 2007, at 12:02 PM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use the cm component from pml, but when I execute 
</span><br>
<span class="quotelev1">&gt; the command: &quot;mpirun -np 2 --mca pml cm ompi_test&quot;, I get the error 
</span><br>
<span class="quotelev1">&gt; message that &quot;No available pml components were found&quot;. I did a 
</span><br>
<span class="quotelev1">&gt; ompi_info to see if the cm component exist, and it does. The output 
</span><br>
<span class="quotelev1">&gt; of &quot;&gt;ompi_info | grep cm&quot; was &quot;MCA pml: cm (MCA v1.0, API v1.0, 
</span><br>
<span class="quotelev1">&gt; Component v1.3)&quot;. I have also set my  LD_LIBRARY_PATH as instructed 
</span><br>
<span class="quotelev1">&gt; by the FAQs. I have even reconfigured and rebuilt open-mpi, but 
</span><br>
<span class="quotelev1">&gt; that didn't fix the problem either. I am wondering whether a 
</span><br>
<span class="quotelev1">&gt; process on my system could interfere with opening the cm component. 
</span><br>
<span class="quotelev1">&gt; I don't know the answer to this, but thought that I should throw it 
</span><br>
<span class="quotelev1">&gt; out there.
</span><br>
<span class="quotelev1">&gt; Anyways, I am not sure what to do next to troubleshoot this problem 
</span><br>
<span class="quotelev1">&gt; and was hoping that somebody could give me pointers on what might 
</span><br>
<span class="quotelev1">&gt; be wrong or what I could check/do next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4289.php">Prasun Ratn: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4287.php">Amit Kumar Saha: "[OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
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
