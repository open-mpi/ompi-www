<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 14:08:12 2006" -->
<!-- isoreceived="20060104190812" -->
<!-- sent="Wed, 4 Jan 2006 13:08:06 -0600 (CST)" -->
<!-- isosent="20060104190806" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.LNX.4.58.0601041234190.17147_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0601041047290.243404_at_gwdu70.gwdg.de" -->
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
<strong>Date:</strong> 2006-01-04 14:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 Jan 2006, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 3 Jan 2006, Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPE/MPE2 logging (or clog/clog2) does not impose any limitation on the
</span><br>
<span class="quotelev2">&gt; &gt; number of processes.  Could you explain what difficulty or error
</span><br>
<span class="quotelev2">&gt; &gt; message you encountered when using &gt;32 processes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either my program quits without writing the logfile (and without
</span><br>
<span class="quotelev1">&gt; complaining) or it crashes in MPI_Finalize. I get the message
</span><br>
<span class="quotelev1">&gt; &quot;33 additional processes aborted (not shown)&quot;.
</span><br>
<p>This is not MPE error message.  If the logging crashes in MPI_Finalize,
<br>
it usually means the merging of logging data from child nodes fails.
<br>
Since you didn't get any MPE error messages, so it means the cause of
<br>
the crash isn't expected by MPE.  Does anyone know if &quot;33 additional
<br>
processes aborted (not shown)&quot; is from OpenMPI ?
<br>
<p>Since I don't know the real cause of the crash, this is what I would do:
<br>
<p>1, Set MPE_TMPDIR or TMPDIR to bigger local filesystem to make sure that
<br>
&nbsp;&nbsp;&nbsp;disk space is not an issue here.
<br>
<p>2, Run &lt;MPE_INSTALL_DIR&gt;/share/examples_logging/cpilog with &gt;32 processes
<br>
&nbsp;&nbsp;&nbsp;to see if you get the same error message.  If the same error occurs,
<br>
&nbsp;&nbsp;&nbsp;it could be there is some other fundamental issue e.g. networking
<br>
&nbsp;&nbsp;&nbsp;problem...
<br>
<p>A.Chan
<br>
<p><span class="quotelev1">&gt; Since this looks weird I think I will recompile with the newer MPE
</span><br>
<span class="quotelev1">&gt; version you suggested. (When I do not link with MPE libraries my program
</span><br>
<span class="quotelev1">&gt; runs fine.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Carsten
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
<li><strong>Next message:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
