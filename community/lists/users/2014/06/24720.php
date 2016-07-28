<?
$subject_val = "Re: [OMPI users] importing to MPI data already in memory from another	process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 12:11:46 2014" -->
<!-- isoreceived="20140627161146" -->
<!-- sent="Fri, 27 Jun 2014 16:11:45 +0000" -->
<!-- isosent="20140627161145" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] importing to MPI data already in memory from another	process" -->
<!-- id="982432B5-2BA2-4DB0-9F99-374DA99FE3F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F1F6AF73-D64E-4A2F-B0DB-331E15C54E2C_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] importing to MPI data already in memory from another	process<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 12:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24716.php">Brock Palen: "[OMPI users] importing to MPI data already in memory from another process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 27, 2014, at 8:53 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to import/map memory from a process (data acquisition) such that an MPI program could 'take' or see that memory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a need to do data acquisition at the rate of .7TB/s and need todo some shuffles/computation on these data,  some of the nodes are directly connected to the device, and some will do processing. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the proposed flow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Data collector nodes runs process collecting data from device
</span><br>
<span class="quotelev1">&gt; * Those nodes somehow pass the data to an MPI job running on these nodes and a number of other nodes (cpu need for filterting is greater than what the 16 data nodes can provide).
</span><br>
<p>For a non-MPI solution for intranode data transfer in this case, take a look at vmsplice(2):
<br>
<p><a href="http://man7.org/linux/man-pages/man2/vmsplice.2.html">http://man7.org/linux/man-pages/man2/vmsplice.2.html</a>
<br>
<p>Pay particular attention to the SPLICE_F_GIFT flag, which will allow you to simply give memory pages away to the MPI process, avoiding unnecessary data copies.  You would just need a pipe shared between the data collector process and the MPI process (and to be a bit careful with your memory allocation/management, since any page you gift away should probably come from mmap(2) directly).
<br>
<p><p>Otherwise, as George mentioned, I would investigate converting your current data collector processes to also be MPI processes so that they can simply communicate the data to the rest of the cluster.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24719.php">George Bosilca: "Re: [OMPI users] importing to MPI data already in memory from another process"</a>
<li><strong>In reply to:</strong> <a href="24716.php">Brock Palen: "[OMPI users] importing to MPI data already in memory from another process"</a>
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
