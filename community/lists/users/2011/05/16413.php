<?
$subject_val = "Re: [OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 14:48:07 2011" -->
<!-- isoreceived="20110502184807" -->
<!-- sent="Mon, 02 May 2011 14:50:25 -0400" -->
<!-- isosent="20110502185025" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="4DBEFCF1.4000004_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F43771548964FD5A062680A0CD97EEA_at_ce.ufl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 14:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/02/2011 02:04 PM, Robert Walters wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was under the impression that all connections are made because of 
</span><br>
<span class="quotelev1">&gt; the nature of the program that OpenMPI is invoking. LS-DYNA is a 
</span><br>
<span class="quotelev1">&gt; finite element solver and for any given simulation I run, the cores on 
</span><br>
<span class="quotelev1">&gt; each node must constantly communicate with one another to check for 
</span><br>
<span class="quotelev1">&gt; various occurrences (contact with various pieces/parts, updating nodal 
</span><br>
<span class="quotelev1">&gt; coordinates, etc...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
You might be right, the connections might have been established but the 
<br>
error message you state (connection refused) seems out of place if the 
<br>
connection was already established.
<br>
<p>Was there more error messages from OMPI other than &quot;connection 
<br>
refused&quot;?  If so could you possibly provide that output to us, maybe it 
<br>
will give us a hint where in the library things are messing up.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run the program using --mca mpi_preconnect_mpi 1 and the 
</span><br>
<span class="quotelev1">&gt; simulation has started itself up successfully which I think means that 
</span><br>
<span class="quotelev1">&gt; the mpi_preconnect passed since all of the child processes have 
</span><br>
<span class="quotelev1">&gt; started up on each individual node. Thanks for the suggestion though, 
</span><br>
<span class="quotelev1">&gt; it's a good place to start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, it possibly could be telling if things do work with this setting.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been worried (though I have no basis for it) that messages may be 
</span><br>
<span class="quotelev1">&gt; getting queued up and hitting some kind of ceiling or timeout. As a 
</span><br>
<span class="quotelev1">&gt; finite element code, I think the communication occurs on a large 
</span><br>
<span class="quotelev1">&gt; scale. Lots of very small packets going back and forth quickly. A few 
</span><br>
<span class="quotelev1">&gt; studies have been done by the High Performance Computing Advisory 
</span><br>
<span class="quotelev1">&gt; Council 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf">http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf</a>) and 
</span><br>
<span class="quotelev1">&gt; they've suggested that LS-DYNA communicates at very, very high rates 
</span><br>
<span class="quotelev1">&gt; (Not sure but from pg.15 of that document they're suggesting hundreds 
</span><br>
<span class="quotelev1">&gt; of millions of messages in only a few hours). Is there any kind of 
</span><br>
<span class="quotelev1">&gt; buffer or queue that OpenMPI develops if messages are created too 
</span><br>
<span class="quotelev1">&gt; quickly? Does it dispatch them immediately or does it attempt to apply 
</span><br>
<span class="quotelev1">&gt; some kind of traffic flow control?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The queuing really depends on what type of calls the application is 
<br>
making.  If it is doing blocking sends then I wouldn't expect too much 
<br>
queuing happening using the tcp btl.  As far as traffic flow control is 
<br>
concerned I believe the tcp btl doesn't do any for the most part and 
<br>
lets tcp handle that.  Maybe someone else on the list could chime in if 
<br>
I am wrong here.
<br>
<p>In the past I have seen where lots of traffic on the network and to a 
<br>
particular node has cause some connections not to be established.  But I 
<br>
don't know of any outstanding issue with such issues right now.
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16413/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
