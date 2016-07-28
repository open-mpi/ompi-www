<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 11:02:52 2012" -->
<!-- isoreceived="20120229160252" -->
<!-- sent="Wed, 29 Feb 2012 11:02:46 -0500" -->
<!-- isosent="20120229160246" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="AF4B3A5D-227D-4989-93C9-1A7840A7F397_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+tOgLHLby28R0Bygw_h_AWvW1UxgXfREGA15pUss2QeFiZBJA_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 11:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 28, 2012 at 11:34 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I reviewed the code and it seems to be ok :) The error should be reported if the port migration is already happened once (port 1 to port 2), and now you are trying to shutdown port 2 and MPI reports that it can't migrate anymore. It assumes that port 1 is still down and it can't go back to from port 2 to port 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my test case I never try to shutdown port 2.
</span><br>
<span class="quotelev1">&gt; I start with both ports cabled up.
</span><br>
<span class="quotelev1">&gt; Then I start the MPI test
</span><br>
<span class="quotelev1">&gt; Then I unplug the Port 1 cable.
</span><br>
<span class="quotelev1">&gt; I leave Port 2 alone.  I expect the application to just keep using Port 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I expect the migration from Port 1 to Port 2 when I unplug the
</span><br>
<span class="quotelev1">&gt; cable.  But I don't expect any more migration after that.
</span><br>
<p>Then we have some bug there :-
<br>
)
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you please build open mpi in debug mode and try to run it in verbose mode. It will help to understand better the scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've recompiled with debug mode(configure --enable-debug).  The
</span><br>
<span class="quotelev1">&gt; resulting output (mpirun --mca btl_base_verbose 1) is too large to
</span><br>
<span class="quotelev1">&gt; send (28 MB).  Are there specific lines you are looking for? Or do you
</span><br>
<span class="quotelev1">&gt; have a preferred method for sending you a text file?
</span><br>
<p>I would like to see all the file.
<br>
28MB is it the size after compression ?
<br>
<p>I think gmail supports up to 25Mb.
<br>
You may try to create gzip file and then slice it using &quot;split&quot; command.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18601.php">Venkateswara Rao Dokku: "[OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18622.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
