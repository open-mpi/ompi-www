<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 11:32:02 2016" -->
<!-- isoreceived="20160316153202" -->
<!-- sent="Wed, 16 Mar 2016 11:32:01 -0400" -->
<!-- isosent="20160316153201" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="CABOsP2Nu1=7JTJZHUxzE=xi7FqJC6Rr7_PXA08+NJSYf1SHDSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABOsP2OFRF8QKkm71tE1CndiEJgnO5A1RqKAw-aJMSU50PndPA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-16 11:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 10, 2016 at 11:54 AM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; when i try to run an openmpi job with &gt;128 ranks (16 ranks per node)
</span><br>
<span class="quotelev1">&gt; using alltoall or alltoallv, i'm getting an error that the process was
</span><br>
<span class="quotelev1">&gt; unable to get a queue pair.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i've checked the max locked memory settings across my machines;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using ulimit -l in and outside of mpirun and they're all set to unlimited
</span><br>
<span class="quotelev1">&gt; pam modules to ensure pam_limits.so is loaded and working
</span><br>
<span class="quotelev1">&gt; the /etc/security/limits.conf is set for soft/hard mem to unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i tried a couple of quick mpi config settings i could think of;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mtl ^psm no affect
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_flags 1 no affect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the openmpi faq says to tweak some mtt values in /sys, but since i'm
</span><br>
<span class="quotelev1">&gt; not on mellanox that doesn't apply to me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the machines are rhel 6.7, kernel 2.6.32-573.12.1(with bundled ofed),
</span><br>
<span class="quotelev1">&gt; running on qlogic single-port infiniband cards, psm is enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; other collectives seem to run okay, it seems to only be alltoall comms
</span><br>
<span class="quotelev1">&gt; that fail and only at scale
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i believe (but can't prove) that this worked at one point, but i can't
</span><br>
<span class="quotelev1">&gt; recall when i last tested it.  so it's reasonable to assume that some
</span><br>
<span class="quotelev1">&gt; change to the system is preventing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the question is, where should i start poking to find it?
</span><br>
<p>bump?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28714.php">Elken, Tom: "Re: [OMPI users] locked memory and queue pairs"</a>
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
