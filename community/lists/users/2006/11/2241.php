<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 22:08:01 2006" -->
<!-- isoreceived="20061129030801" -->
<!-- sent="Wed, 29 Nov 2006 09:07:53 +0600" -->
<!-- isosent="20061129030753" -->
<!-- name="shaposh_at_[hidden]" -->
<!-- email="shaposh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="200611290907.53776.shaposh_at_isp.nsc.ru" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="40CDAEB3-8AB7-41F9-88E2-E8B146298214_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:shaposh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20How%20to%20set%20paffinity%20on%20a%20multi-cpu%20node?"><em>shaposh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-28 22:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the machinefile, add for each node with M cpus:
<br>
myhost_at_mydomain slots=N cpus_allowed=&lt;set&gt;,
<br>
&lt;set&gt; being the subset of 0..M-1  in some yours-to-decide format and
<br>
with yours-to-decide default values.
<br>
<p>&nbsp;Best Regards,
<br>
&nbsp;Alexander Shaposhnikov
<br>
<p>On Wednesday 29 November 2006 06:16, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; There is not, right now.  However, this is mainly because back when I
</span><br>
<span class="quotelev1">&gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev1">&gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev1">&gt; the use.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So right now there's only this lame control:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev1">&gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev1">&gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev1">&gt; proposed (e.g., mpirun command line parameters, magic MPI attributes,
</span><br>
<span class="quotelev1">&gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev1">&gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev2">&gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev2">&gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev2">&gt; &gt; Thank You.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Alexander Shaposhnikov
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
