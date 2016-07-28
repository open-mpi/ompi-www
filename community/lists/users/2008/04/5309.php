<?
$subject_val = "Re: [OMPI users] setup of a basic system on RHEL or Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 21:01:14 2008" -->
<!-- isoreceived="20080404010114" -->
<!-- sent="Fri, 04 Apr 2008 12:00:59 +1100" -->
<!-- isosent="20080404010059" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setup of a basic system on RHEL or Fedora" -->
<!-- id="1207270859.5385.70.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="47F57924.5010907_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] setup of a basic system on RHEL or Fedora<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 21:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>Previous message:</strong> <a href="5308.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5308.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; One thing about running programs is that the binaries need to be in the 
</span><br>
<span class="quotelev1">&gt; same absolute path on all systems. This means if you're running the 
</span><br>
<span class="quotelev1">&gt; program from /home/me on system1, the program you're running must also 
</span><br>
<span class="quotelev1">&gt; be in /home/me on all the other systems. OpenMPI will not transfer those 
</span><br>
<span class="quotelev1">&gt; binaries for you. An easy way for this is have an NFS mount for your MPI 
</span><br>
<span class="quotelev1">&gt; programs that all of the systems can access and run from there. The 
</span><br>
<span class="quotelev1">&gt; system specs make no difference as long as you're not going to switch to 
</span><br>
<span class="quotelev1">&gt; a high speed interconnect soon.
</span><br>
<p>Someone can correct me if I'm wrong, but I do believe that the
<br>
executables don't need to be in the same place on every node, but they
<br>
do need to be on every node somewhere in that node's PATH.  Certainly,
<br>
consistent NFS mounted filespaces is one of the easiest ways to achieve
<br>
this.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>Previous message:</strong> <a href="5308.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5308.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
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
