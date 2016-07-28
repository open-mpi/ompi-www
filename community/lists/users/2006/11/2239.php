<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 19:17:06 2006" -->
<!-- isoreceived="20061129001706" -->
<!-- sent="Tue, 28 Nov 2006 19:16:55 -0500" -->
<!-- isosent="20061129001655" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="40CDAEB3-8AB7-41F9-88E2-E8B146298214_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200611252031.17407.shaposh_at_isp.nsc.ru" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 19:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Brian W Barrett: "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>In reply to:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is not, right now.  However, this is mainly because back when I  
<br>
implemented the processor affinity stuff in OMPI (well over a year  
<br>
ago), no one had any opinions on exactly what interface to expose to  
<br>
the use.  :-)
<br>
<p>So right now there's only this lame control:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>I am not opposed to implementing more flexible processor affinity  
<br>
controls, but the Big Discussion over the past few months is exactly  
<br>
how to expose it to the end user.  There have been several formats  
<br>
proposed (e.g., mpirun command line parameters, magic MPI attributes,  
<br>
MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.   
<br>
So here's the time to chime in -- anyone have any opinions on this?
<br>
<p><p><p>On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev1">&gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev1">&gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev1">&gt; only a single core on each CPU.
</span><br>
<span class="quotelev1">&gt; Thank You.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Alexander Shaposhnikov
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Brian W Barrett: "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>In reply to:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2240.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
