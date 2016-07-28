<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 19:24:25 2006" -->
<!-- isoreceived="20060105002425" -->
<!-- sent="Wed, 4 Jan 2006 18:24:17 -0600 (CST)" -->
<!-- isosent="20060105002417" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun --prefix" -->
<!-- id="Pine.LNX.4.58.0601041819370.17147_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A012214-0180-4B7B-A65D-02079B1B988A_at_open-mpi.org" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 19:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Wed, 4 Jan 2006, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Anthony --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really sorry; we just noticed this message today -- it got lost
</span><br>
<span class="quotelev1">&gt; in the post-SC recovery/holiday craziness.  :-(
</span><br>
<p>I understand. :)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your request is fairly reasonable, but I wouldn't want to make it the
</span><br>
<span class="quotelev1">&gt; default behavior.  Specifically, I can envision some scenarios where
</span><br>
<span class="quotelev1">&gt; it might be problematic (e.g., heterogeneous situations -- which we
</span><br>
<span class="quotelev1">&gt; don't yet support, but definitely will someday).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about this -- an ISV asked me for a similar feature a little
</span><br>
<span class="quotelev1">&gt; while ago: if mpirun is invoked with an absolute pathname, then use
</span><br>
<span class="quotelev1">&gt; that base directory (minus the difference from $bindir) as an option
</span><br>
<span class="quotelev1">&gt; to an implicit --prefix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (your suggestion may actually be parsed as exactly that, but I wasn't
</span><br>
<span class="quotelev1">&gt; entirely sure)
</span><br>
<p>Yes, that is what I meant. The change should make things easier for
<br>
typical MPI users.
<br>
<p>Thanks,
<br>
A.Chan
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2005, at 12:20 PM, Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is not a bug just wonder if this can be improved.  I have been
</span><br>
<span class="quotelev2">&gt; &gt; running openmpi linked program with command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;openmpi-install-dir&gt;/bin/mpirun --prefix &lt;openmpi-install-dir&gt; \
</span><br>
<span class="quotelev2">&gt; &gt;                                  --host A  -np N a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My understanding is that --prefix allows extra search path in
</span><br>
<span class="quotelev2">&gt; &gt; addition to
</span><br>
<span class="quotelev2">&gt; &gt; PATH and LD_LIBRARY_PATH, correct me if I am wrong.  Assuming that
</span><br>
<span class="quotelev2">&gt; &gt; openmpi's install directory structure is fixed, would it possible for
</span><br>
<span class="quotelev2">&gt; &gt; mpirun to search &lt;openmpi-install-dir&gt; automatically for libmpi.so &amp;
</span><br>
<span class="quotelev2">&gt; &gt; friends so to avoid the redundant --prefix &lt;openmpi-install-dir&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; mpirun ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; A.Chan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
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
