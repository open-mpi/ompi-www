<?
$subject_val = "Re: [OMPI users] proper use of MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 13:30:34 2013" -->
<!-- isoreceived="20131111183034" -->
<!-- sent="Mon, 11 Nov 2013 18:30:33 +0000" -->
<!-- isosent="20131111183033" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] proper use of MPI_Abort" -->
<!-- id="0E41AA68-851A-4024-8008-DDD3E2D5CD04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADC981242279AD408816CB7141A2789D78FFF297_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] proper use of MPI_Abort<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 13:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22941.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2013, at 2:13 PM, &quot;Andrus, Brian Contractor&quot; &lt;bdandrus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good to know. Thanks!
</span><br>
<p>(sorry for the delay in replying; I was traveling last week, which always makes a disaster of my INBOX)
<br>
<p><span class="quotelev1">&gt; Seems really like MPI_ABORT should only be used within error traps after MPI functions have been started.
</span><br>
<p>Correct.  We treat MPI_Abort to mean that something Bad has happened, and we should be noisy about it.
<br>
<p><span class="quotelev1">&gt; Code-wise, the sample I got was not the best. Usage should be checked before MPI_Initialize, I think :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the expectation is that MPI_ABORT is only called when the user should be notified something went haywire.
</span><br>
<p>Yes.  Another way you might consider handling this is to have one process do the error checking (e.g., MCW rank 0) and then broadcast out a flag result indicating &quot;time to MPI_Finalize/exit&quot; or &quot;everything looks good; let's proceed.&quot;  I.e., something like this (pseudocode typed off the top of my head; excuse errors):
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;int rank, flag = 0;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(...);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;if (0 == rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_for_badness();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (bad) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Badness...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;if (flag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22941.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
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
