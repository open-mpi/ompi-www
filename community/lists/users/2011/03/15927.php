<?
$subject_val = "Re: [OMPI users] 1.5.3 and SGE integration?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 10:59:53 2011" -->
<!-- isoreceived="20110321145953" -->
<!-- sent="Mon, 21 Mar 2011 11:01:31 -0400" -->
<!-- isosent="20110321150131" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.5.3 and SGE integration?" -->
<!-- id="4D87684B.4010908_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="871v20u0dz.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.5.3 and SGE integration?<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 11:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15926.php">Peter Kjellstr&#246;m: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>In reply to:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave what version of Grid Engine are you using?
<br>
The plm checks for the following env-var's to determine if you are 
<br>
running Grid Engine.
<br>
SGE_ROOT
<br>
ARC
<br>
PE_HOSTFILE
<br>
JOB_ID
<br>
<p>If these are not there during the session that mpirun is executed then 
<br>
it will resort to ssh.
<br>
<p>--td
<br>
<p><p>On 03/21/2011 08:24 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; I've just tried 1.5.3 under SGE with tight integration, which seems to
</span><br>
<span class="quotelev1">&gt; be broken.  I built and ran in the same way as for 1.4.{1,3}, which
</span><br>
<span class="quotelev1">&gt; works, and ompi_info reports the same gridengine parameters for 1.5 as
</span><br>
<span class="quotelev1">&gt; for 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The symptoms are that it reports a failure to communicate using ssh,
</span><br>
<span class="quotelev1">&gt; whereas it should be using the SGE builtin method via qrsh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There doesn't seem to be a relevant bug report, but before I
</span><br>
<span class="quotelev1">&gt; investigate, has anyone else succeeded/failed with it, or have any
</span><br>
<span class="quotelev1">&gt; hints?
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15927/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15928.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15926.php">Peter Kjellstr&#246;m: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>In reply to:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15929.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
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
