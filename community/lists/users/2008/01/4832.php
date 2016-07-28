<?
$subject_val = "[OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 09:49:51 2008" -->
<!-- isoreceived="20080115144951" -->
<!-- sent="Tue, 15 Jan 2008 09:49:40 -0500 (EST)" -->
<!-- isosent="20080115144940" -->
<!-- name="M Jones" -->
<!-- email="jonesm_at_[hidden]" -->
<!-- subject="[OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="Pine.LNX.4.64.0801080955540.16691_at_mail.ccr.buffalo.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47838EAC.8060208_at_gmx.at" -->
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
<strong>Subject:</strong> [OMPI users] mixed myrinet/non-myrinet nodes<br>
<strong>From:</strong> M Jones (<em>jonesm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 09:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;We have a mixed environment in which roughly 2/3 of the nodes
<br>
in our cluster have myrinet (mx 1.2.1), while the full cluster has
<br>
gigE.  Running open-mpi exclusively on myrinet nodes or exclusively
<br>
on non-myrinet nodes is fine, but mixing the two nodes types
<br>
results in a runtime error (PML add procs failed), no matter what --mca 
<br>
flags I try to use to push the traffic onto tcp (note that
<br>
--mca mtl ^mx --mca btl ^mx does appear to use tcp, as long as all
<br>
of the nodes have myrinet cards, but not in the mixed case).
<br>
<p>I thought that we would be able to use a single open-mpi build to
<br>
support both networks (and users would be able to request mx nodes if
<br>
they need them using the batch queuing system, which they are
<br>
already accustomed to).  Am I missing something (or just doing
<br>
something dumb)?  Compiling mpi implementations for each compiler suite
<br>
is bad enough, add in separate builds for networks and it just gets
<br>
worse ...
<br>
<p>Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4831.php">Prakash Velayutham: "Re: [OMPI users] getenv issue"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Dino Rossegger: "[OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4833.php">Gleb Natapov: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4834.php">George Bosilca: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe reply:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
