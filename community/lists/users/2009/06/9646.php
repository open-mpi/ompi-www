<?
$subject_val = "[OMPI users] Machinefile option in opempi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 15:35:24 2009" -->
<!-- isoreceived="20090619193524" -->
<!-- sent="Fri, 19 Jun 2009 15:35:19 -0400" -->
<!-- isosent="20090619193519" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="[OMPI users] Machinefile option in opempi-1.3.2" -->
<!-- id="41935ab00906191235m26af1939hf360b8274a301ee5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Machinefile option in opempi-1.3.2<br>
<strong>From:</strong> Rajesh Sudarsan (<em>rsudarsan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 15:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tested a simple hello world program on 5 nodes each with dual
<br>
quad-core processors. I noticed that openmpi does not always follow
<br>
the order of the processors indicated in the machinefile. Depending
<br>
upon the number of processors requested, openmpi does some type of
<br>
sorting to find the best node fit for a particular job and runs on
<br>
them.  Is there a way to make openmpi to turn off this sorting and
<br>
strictly follow the order indicated in the machinefile?
<br>
<p>mpiexec supports three options to specify the machinefile -
<br>
default-machinefile, hostfile, and machinefile. Can anyone tell what
<br>
is the difference between these three options?
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Thanks,
<br>
Rajesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
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
