<?
$subject_val = "Re: [OMPI users] openMPI in 64 bit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:17:15 2014" -->
<!-- isoreceived="20140515201715" -->
<!-- sent="Thu, 15 May 2014 13:15:28 -0700" -->
<!-- isosent="20140515201528" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI in 64 bit" -->
<!-- id="B88DF7E1-B800-483A-9D60-E8E26234FC6C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 16:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is on a Windows box? If so, I don't know if anyone built/posted a 64-bit release version for Windows (you might check the OMPI site and see if there is something specific for 64-bit), and we don't support Windows directly any more. You might also look at the cygwin site for a downloadable version that runs under cygwin.
<br>
<p><p>On May 15, 2014, at 12:13 PM, Ajay Nair &lt;prodigyaj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been using openMPI for my application with intel visual fortran. The version that I am currently using is openMPI-1.6.2. It works fine iwth fortran code compiled in 32bit and run it with openMPI 32 bit files. However recently I moved to a 64 bit machine and even though I could compile the code successfully with intel fortran 64 bit and also pointing the openMPI to the corresponding 64 bit files, the exe would not start and threw the error:
</span><br>
<span class="quotelev1">&gt; the application was unable to start correctly (0x00007b)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is because the msvcr100d.dll file (this is required by openMPI even when I run in 32bit mode) is a 32 bit dll file and it probably requires 64 bit equivalent. I could not find any 64 bit equivalent for this dll. 
</span><br>
<span class="quotelev1">&gt; My question is why is openMPI looking for this dll file (even in case of 32bit compilation). Can i do away with this dependency or is there any way I can run it in 64 bit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; AJ
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24395.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>In reply to:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
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
