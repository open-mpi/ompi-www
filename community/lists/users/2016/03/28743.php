<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 13:41:07 2016" -->
<!-- isoreceived="20160317174107" -->
<!-- sent="Thu, 17 Mar 2016 13:41:06 -0400" -->
<!-- isosent="20160317174106" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="CABOsP2NH-=0Pm8Sd8T19979-0z-+XfGDaCMoGg75SJSUeMny6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D853E3D90_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 13:41:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 17, 2016 at 12:15 PM, Cabral, Matias A
<br>
&lt;matias.a.cabral_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I was looking for lines like&quot; [nodexyz:17085] selected cm best priority 40&quot; and  &quot; [nodexyz:17099] select: component psm selected&quot;
</span><br>
<p>this may have turned up more then i expected.  i recompiled openmpi
<br>
v1.8.4 as a test and reran the tests.  which seemed to run just fine.
<br>
looking at the debug output, i can clearly see a difference in the psm
<br>
calls.  i performed the same test using 1.10.2 and it works as well.
<br>
<p>i've sent a msg off to the user to have him rerun and see where we're at.
<br>
<p>i suspect my system level compile of openmpi might be all screwed up
<br>
with concern for psm.  i didn't see anything off in the configure
<br>
output, but i must have missed something.  i'll report back
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28744.php">Andrus, Brian Contractor: "[OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28742.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
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
