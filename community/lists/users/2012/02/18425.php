<?
$subject_val = "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 09:31:24 2012" -->
<!-- isoreceived="20120209143124" -->
<!-- sent="Thu, 9 Feb 2012 09:31:22 -0500" -->
<!-- isosent="20120209143122" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="4F33926A.23060.481A2FF0_at_localhost" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20help:%20sm%20btl%20does%20not%20work%20when%20I%20specify%20the%20same%20host%20twice%20or%20more%20in%20the%20node%20list"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-09 09:31:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Previous message:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Good morning!
<br>
<p>I have trouble to communicate through sm btl in open MPI, please 
<br>
check the attached file for my system information. I am using open 
<br>
MPI 1.4.3, intel compilers V11.1, on linux RHEL 5.4 with kernel 2.6.
<br>
<p>The tests are the following: 
<br>
<p>(1) if I specify the btl to mpirun by &quot;--mca btl self,sm,openib&quot;, if I did 
<br>
not specify any of my computing nodes twice or more in the node 
<br>
list, my job runs fine. However, if I specify any of the computing 
<br>
nodes twice or more in the node list, it will hang there forever. 
<br>
<p>(2) if I did not specify the sm btl to mpirun as &quot;--mca btl 
<br>
self,openib&quot;, I could run my job smoothly, either put any of the 
<br>
computing nodes twice or more in the node list, or not. 
<br>
<p><span class="quotelev1">&gt;From above 2 tests, apparently something wrong with sm btl 
</span><br>
interface on my system. As I checked the user archive, sm btl 
<br>
issue has been encountered due to the comm_spawned 
<br>
parent/child processes. But this seems not the case here, if I do 
<br>
not use any of my MPI based solver, only with MPI initialization and 
<br>
finalization procedures called, it still has this issue. 
<br>
<p>Any comments?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<p><p>
<p>
The following section of this message contains a file attachment
<br>
prepared for transmission using the Internet MIME message format.
<br>
If you are using Pegasus Mail, or any another MIME-compliant system,
<br>
you should be able to save it or view it from within your mailer.
<br>
If you cannot, please ask your system administrator for assistance.
<br>
<p>&nbsp;&nbsp;&nbsp;---- File information -----------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File:  ompiinfo-config-uname-output.tgz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:  9 Feb 2012, 8:58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size:  126316 bytes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:  Unknown
<br>
<p>
<br><hr>
<ul>
<li>Application/Octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18425/ompiinfo-config-uname-output.tgz">ompiinfo-config-uname-output.tgz</a>
</ul>
<!-- attachment="ompiinfo-config-uname-output.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<li><strong>Previous message:</strong> <a href="18424.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Reply:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18458.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18493.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Maybe reply:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
