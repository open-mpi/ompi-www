<?
$subject_val = "Re: [OMPI users] openMPI in 64 bit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:10:58 2014" -->
<!-- isoreceived="20140515201058" -->
<!-- sent="Thu, 15 May 2014 16:10:57 -0400" -->
<!-- isosent="20140515201057" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI in 64 bit" -->
<!-- id="53751F51.4020106_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHVi7zJLCF+Ty42KePx3SvhHaj3ZkU9oimBfuP-RmTD+wsabJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI in 64 bit<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 16:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24396.php">Ralph Castain: "Re: [OMPI users] openMPI in 64 bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/15/2014 3:13 PM, Ajay Nair wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using openMPI for my application with intel visual 
</span><br>
<span class="quotelev1">&gt; fortran. The version that I am currently using is openMPI-1.6.2. It 
</span><br>
<span class="quotelev1">&gt; works fine iwth fortran code compiled in 32bit and run it with openMPI 
</span><br>
<span class="quotelev1">&gt; 32 bit files. However recently I moved to a 64 bit machine and even 
</span><br>
<span class="quotelev1">&gt; though I could compile the code successfully with intel fortran 64 bit 
</span><br>
<span class="quotelev1">&gt; and also pointing the openMPI to the corresponding 64 bit files, the 
</span><br>
<span class="quotelev1">&gt; exe would not start and threw the error:
</span><br>
<span class="quotelev1">&gt; *the application was unable to start correctly (0x00007b)*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; This is because the msvcr100d.dll file (this is required by openMPI 
</span><br>
<span class="quotelev1">&gt; even when I run in 32bit mode) is a 32 bit dll file and it probably 
</span><br>
<span class="quotelev1">&gt; requires 64 bit equivalent. I could not find any 64 bit equivalent for 
</span><br>
<span class="quotelev1">&gt; this dll.
</span><br>
<span class="quotelev1">&gt; My question is why is openMPI looking for this dll file (even in case 
</span><br>
<span class="quotelev1">&gt; of 32bit compilation). Can i do away with this dependency or is there 
</span><br>
<span class="quotelev1">&gt; any way I can run it in 64 bit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
64-bit Windows of course includes full 32-bit support, so you might 
<br>
still run your 32-bit MPI application.
<br>
You would need a full 64-bit build of the MPI libraries for 
<br>
compatibility with your 64-bit application.  I haven't seen any 
<br>
indication that anyone is supporting openmpi for ifort Windows 64-bit.  
<br>
The closest openmpi thing seems to be the cygwin (gcc/gfortran) build.  
<br>
Windows seems to be too crowded for so many MPI versions to succeed.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24394.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="24392.php">Hadi Montakhabi: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24396.php">Ralph Castain: "Re: [OMPI users] openMPI in 64 bit"</a>
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
