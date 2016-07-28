<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 17:04:16 2012" -->
<!-- isoreceived="20120228220416" -->
<!-- sent="Tue, 28 Feb 2012 17:04:12 -0500" -->
<!-- isosent="20120228220412" -->
<!-- name="Jeremy" -->
<!-- email="spritzydog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="CA+tOgLHLby28R0Bygw_h_AWvW1UxgXfREGA15pUss2QeFiZBJA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A804708-C44A-4BF1-9EF3-0B81AB8C3625_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Jeremy (<em>spritzydog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 17:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Previous message:</strong> <a href="18582.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>In reply to:</strong> <a href="18580.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p><span class="quotelev1">&gt;On Tue, Feb 28, 2012 at 11:34 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I reviewed the code and it seems to be ok :) The error should be reported if the port migration is already happened once (port 1 to port 2), and now you are trying to shutdown port 2 and MPI reports that it can't migrate anymore. It assumes that port 1 is still down and it can't go back to from port 2 to port 1.
</span><br>
<p>In my test case I never try to shutdown port 2.
<br>
I start with both ports cabled up.
<br>
Then I start the MPI test
<br>
Then I unplug the Port 1 cable.
<br>
I leave Port 2 alone.  I expect the application to just keep using Port 2.
<br>
<p>So I expect the migration from Port 1 to Port 2 when I unplug the
<br>
cable.  But I don't expect any more migration after that.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please build open mpi in debug mode and try to run it in verbose mode. It will help to understand better the scenario.
</span><br>
<p>I've recompiled with debug mode(configure --enable-debug).  The
<br>
resulting output (mpirun --mca btl_base_verbose 1) is too large to
<br>
send (28 MB).  Are there specific lines you are looking for? Or do you
<br>
have a preferred method for sending you a text file?
<br>
<p>Unfortunately, I will be out of the office until Monday.  I'll resume
<br>
more experiments then.
<br>
<p>Thanks for your time,
<br>
<p>-Jeremy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Previous message:</strong> <a href="18582.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>In reply to:</strong> <a href="18580.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
