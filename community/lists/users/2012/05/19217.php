<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 06:11:24 2012" -->
<!-- isoreceived="20120508101124" -->
<!-- sent="Tue, 08 May 2012 06:11:15 -0400" -->
<!-- isosent="20120508101115" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="4FA8F143.3090702_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1CE15F3-7818-4E15-8229-1CEDB836C37C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 06:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/2012 8:40 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 7, 2012, at 8:31 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in the above stated example, end-start will be:&lt;whatever the solver took&gt;  + 20ms ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (time slice of P2 + P3 = 20ms)
</span><br>
<span class="quotelev1">&gt; More or less (there's nonzero amount of time required for the kernel scheduler, and the time quantum for each of P2 and P3 is likely not *exactly* 10ms).  But you're over thinking this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The elapsed wall-clock time is simply (end-start).
</span><br>
<span class="quotelev1">&gt;
</span><br>
To kind of add to what Jeff is saying, the case you are describing 
<br>
sounds like oversubscription.  If you really need to find the &quot;pure&quot; 
<br>
performance of the code you should be running on a dedicated cluster 
<br>
otherwise you'll be battling other issues in addition to timeslicing.
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19233.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
