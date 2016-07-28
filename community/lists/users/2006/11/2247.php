<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 02:17:56 2006" -->
<!-- isoreceived="20061129071756" -->
<!-- sent="Wed, 29 Nov 2006 08:17:50 +0100" -->
<!-- isosent="20061129071750" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA31D_at_anubis2.clb.tcfr.thales" -->
<!-- inreplyto="[OMPI users] How to set paffinity on a multi-cpu node?" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20How%20to%20set%20paffinity%20on%20a%20multi-cpu%20node?"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-29 02:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with this solution, for the machinefile.
<br>
<p>Using mpiexec or a spawn command, you can add the cpu number attached to the hostname :
<br>
mpiexec -host [hostname]:[cpu number] -n 1 mpi_test
<br>
or, for MPI_Comm_spawn : 
<br>
MPI_Info_set( mpi_info, &quot;host&quot;, &quot;[hostname]:[cpu number]&quot; );
<br>
<p>Cheers, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the machinefile, add for each node with M cpus:
</span><br>
<span class="quotelev1">&gt; myhost_at_mydomain slots=N cpus_allowed=&lt;set&gt;,
</span><br>
<span class="quotelev1">&gt; &lt;set&gt; being the subset of 0..M-1  in some yours-to-decide format and
</span><br>
<span class="quotelev1">&gt; with yours-to-decide default values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Best Regards,
</span><br>
<span class="quotelev1">&gt;  Alexander Shaposhnikov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday 29 November 2006 06:16, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There is not, right now.  However, this is mainly because 
</span><br>
<span class="quotelev1">&gt; back when I
</span><br>
<span class="quotelev2">&gt; &gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev2">&gt; &gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev2">&gt; &gt; the use.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So right now there's only this lame control:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev2">&gt; &gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev2">&gt; &gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev2">&gt; &gt; proposed (e.g., mpirun command line parameters, magic MPI 
</span><br>
<span class="quotelev1">&gt; attributes,
</span><br>
<span class="quotelev2">&gt; &gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Alexander Shaposhnikov
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
