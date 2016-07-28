<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:12:11 2012" -->
<!-- isoreceived="20120509151211" -->
<!-- sent="Wed, 9 May 2012 08:12:00 -0700" -->
<!-- isosent="20120509151200" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="D26F7E0E-6422-456F-902A-8A38E5A51D3E_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FA8F143.3090702_at_oracle.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 11:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
True. I was curious as to what happens when I am time sharing the CPU.
<br>
<p><pre>
--
Sent from my iPhone
On May 8, 2012, at 3:11 AM, TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
&gt; On 5/7/2012 8:40 PM, Jeff Squyres (jsquyres) wrote:
&gt;&gt; 
&gt;&gt; On May 7, 2012, at 8:31 PM, Jingcha Joba wrote:
&gt;&gt; 
&gt;&gt;&gt; So in the above stated example, end-start will be: &lt;whatever the solver took&gt; + 20ms ?
&gt;&gt;&gt;  
&gt;&gt;&gt; (time slice of P2 + P3 = 20ms)
&gt;&gt; More or less (there's nonzero amount of time required for the kernel scheduler, and the time quantum for each of P2 and P3 is likely not *exactly* 10ms).  But you're over thinking this.  
&gt;&gt; 
&gt;&gt; The elapsed wall-clock time is simply (end-start).
&gt;&gt; 
&gt; To kind of add to what Jeff is saying, the case you are describing sounds like oversubscription.  If you really need to find the &quot;pure&quot; performance of the code you should be running on a dedicated cluster otherwise you'll be battling other issues in addition to timeslicing.  
&gt; 
&gt; -- 
&gt; Terry D. Dontje | Principal Software Engineer
&gt; Developer Tools Engineering | +1.781.442.2631
&gt; Oracle - Performance Technologies
&gt; 95 Network Drive, Burlington, MA 01803
&gt; Email terry.dontje_at_[hidden]
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
