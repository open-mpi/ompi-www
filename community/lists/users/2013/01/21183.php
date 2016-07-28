<?
$subject_val = "[OMPI users] XRC vs SRQ vs PRQ";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 11:22:09 2013" -->
<!-- isoreceived="20130122162209" -->
<!-- sent="Tue, 22 Jan 2013 11:22:02 -0500" -->
<!-- isosent="20130122162202" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] XRC vs SRQ vs PRQ" -->
<!-- id="98E3F179-F174-498D-83FD-E32C09D96779_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] XRC vs SRQ vs PRQ<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 11:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21184.php">Brock Palen: "[OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Reply:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We hit a problem recently with memory errors when scaling a code to 1000 cores. 
<br>
<p>Switching to SRQ and some guess of queue values selected appears to let the code run.
<br>
S,4096,128:S,12288,128:S,65536,12 
<br>
<p>Two questions,
<br>
<p>This is a ConnectX fabric, should I switch them to XRC queues? And should I use the same queue size/count?  That a safe assumption?
<br>
X,4096,128:X,12288,128:X,65536,12 
<br>
<p><p>&nbsp;&nbsp;When should I use one queue type over the other?
<br>
<p>Is there a way to get stat feedback on the use of your shared queues (SRQ or XRC) ?
<br>
<p>Example, using code 'not from here' and would like to know,   &quot;hey you are always  running out of your queue of size X&quot;  Or &quot; your queue of size Y is never used&quot;
<br>
<p>We are kinda blind for a lot of our applications :-)
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21184.php">Brock Palen: "[OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21182.php">Victor Vysotskiy: "Re: [OMPI users] [EXTERNAL] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Reply:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
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
