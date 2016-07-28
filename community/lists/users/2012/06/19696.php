<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 18:32:58 2012" -->
<!-- isoreceived="20120627223258" -->
<!-- sent="Wed, 27 Jun 2012 15:32:54 -0700" -->
<!-- isosent="20120627223254" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="20120627223254.GA24102_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B49AEE7-4CEE-4D1F-97DD-6253FD9CA5E8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 18:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>Previous message:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 27, 2012 at 02:30:11PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 27, 2012, at 2:25 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks! I tried this and, indeed, the program (I tested quantum espresso,
</span><br>
<span class="quotelev2">&gt; &gt; pw.x, so far) no longer hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good!  We're doing a bit more definitive testing here (took a little while to figure out how to do that, but we're in process of doing that now...) before we let this go out into the wild.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then I went one step further and benchmarked the following three cases:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) pw.x compiled with openmpi-1.3.3
</span><br>
<span class="quotelev2">&gt; &gt; 2) pw.x compiled with openmpi-1.4.3 and
</span><br>
<span class="quotelev2">&gt; &gt;   btl_openib_flags = 305
</span><br>
<span class="quotelev2">&gt; &gt;   btl_openib_eager_limit = 65536
</span><br>
<span class="quotelev2">&gt; &gt;   in etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt; 3) pw.x compiled with openmpi-1.6.1ticket3131r26612M
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; These are the results time (in seconds) per iteration - smaller is better:
</span><br>
<span class="quotelev2">&gt; &gt; 1) 33.11
</span><br>
<span class="quotelev2">&gt; &gt; 2) 28.23
</span><br>
<span class="quotelev2">&gt; &gt; 3) 34.81
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's rather disappointing, isn't it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it is.  But #2 is not really comparable with #1 and #3.  It's quite
</span><br>
<span class="quotelev1">&gt; possible that with newer IB hardware, the eager limit should be bumped
</span><br>
<span class="quotelev1">&gt; up by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I leave this to Mellanox to figure out...
</span><br>
<p>Good point ... I should run all three cases with the eager limit set to
<br>
65536.
<br>
<p>However, there is another issue that may affect the performance of the 1.6.1
<br>
version. I see a LOT of the following messages on stderr:
<br>
<p>--------------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to register memory in the driver.
<br>
Please check /var/log/messages or dmesg for driver specific failure
<br>
reason.
<br>
The failure occured here:
<br>
<p>&nbsp;&nbsp;Local host:    b413
<br>
&nbsp;&nbsp;Device:        mlx4_0
<br>
&nbsp;&nbsp;Function:      openib_reg_mr()
<br>
&nbsp;&nbsp;Errno says:    Cannot allocate memory (errno=12)
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
[b414:15870] 168 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[b414:15870] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[b414:15870] 131 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[b414:15870] 8 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[b414:15870] 1 more process has sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[b414:15870] 209 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[b414:15870] 144 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
...
<br>
<p>The strange thing is that this job used 32 processors (cores). Thus, I have
<br>
no idea what the &quot;168 more processes&quot;, etc., are refering to (there is
<br>
nothing in /var/log/messages about this).
<br>
<p>The messages do not appear to be fatal. But nevertheless - do you know
<br>
what causes these error messages?
<br>
<p>Cheers,
<br>
Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>Previous message:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19727.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
