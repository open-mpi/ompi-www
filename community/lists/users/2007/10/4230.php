<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 12:25:12 2007" -->
<!-- isoreceived="20071017162512" -->
<!-- sent="Wed, 17 Oct 2007 12:24:53 -0400" -->
<!-- isosent="20071017162453" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI can't open PML cm" -->
<!-- id="8561CFAA-764A-4C61-A6B1-CDC74F1CD257_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFC6E7EF32.C1220DF5-ON86257377.005557F3-86257377.005824D2_at_us.ibm.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 12:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<li><strong>In reply to:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The CM PML only support networks that do matching in hardware. In  
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4230/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<li><strong>In reply to:</strong> <a href="4229.php">Sajjad Tabib: "[OMPI users] Open MPI can't open PML cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
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
