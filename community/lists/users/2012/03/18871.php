<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 10:37:12 2012" -->
<!-- isoreceived="20120329143712" -->
<!-- sent="Thu, 29 Mar 2012 10:37:02 -0400" -->
<!-- isosent="20120329143702" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="CB99EBCE.13E6F%tombry_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL105-W31672AA64115FDBB304C169D480_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc command not found - Fedora<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 10:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18870.php">Jeffrey Squyres: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18870.php">Jeffrey Squyres: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And if &#179;which mpicc&#178; doesn&#185;t find the executable, you could try
<br>
rpmquery -l openmpi
<br>
and
<br>
rpmquery -l openmpi-devel
<br>
<p>Do you see mpicc?  Is its parent directory in your PATH?
<br>
<p>---Tom
<br>
<p>On 3/29/12 8:33 AM, &quot;Hameed Alzahrani&quot; &lt;ibn_aibaan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you type &quot;which mpicc&quot; does the system return the correct path for the
</span><br>
<span class="quotelev1">&gt; open MPI binaries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Mar 2012 19:45:18 +0800
</span><br>
<span class="quotelev1">&gt; From: rohand87_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpicc command not found - Fedora
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed mpi successfully on fedora using yum install openmpi
</span><br>
<span class="quotelev1">&gt; openmpi-devel openmpi-libs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also added /usr/lib/openmpi/bin to PATH and LD_LIBRARY_PATH variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I try to complie my program using mpicc hello.c or
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/bin/mpicc hello.c I get error saying mpicc: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the contents of /user/lib/openmpi/bin and there is no mpicc... here
</span><br>
<span class="quotelev1">&gt; is the screenshot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; The add/remove  programs show the installation details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried re installing but same thing happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone help me to solve this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<p><p><p>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18871/image.png" alt="image.png">
<!-- attachment="image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18871/03-image.png" alt="image.png">
<!-- attachment="03-image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18870.php">Jeffrey Squyres: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18869.php">Hameed Alzahrani: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18870.php">Jeffrey Squyres: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
