<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 08:37:38 2007" -->
<!-- isoreceived="20070208133738" -->
<!-- sent="Thu, 8 Feb 2007 08:37:27 -0500" -->
<!-- isosent="20070208133727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI  &amp;quot;Realy&amp;quot; support AIX?" -->
<!-- id="DE3C2EAC-3852-4367-BE4E-26E0DA4B2C65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY102-DAV9F9F3F98B523D07C36B638D9E0_at_phx.gbl" -->
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
<strong>Date:</strong> 2007-02-08 08:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>In reply to:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had previously done some AIX testing with OMPI, but it really  
<br>
hasn't received much testing in long, long time.  At this point, it  
<br>
is probably safest to say that OMPI is unsupported on AIX.
<br>
<p>Sorry.  :-(
<br>
<p><p>On Feb 7, 2007, at 3:18 PM, Nader Ahmadi wrote:
<br>
<p><span class="quotelev1">&gt; We are in the process to decide, if we should use Open MPI in an  
</span><br>
<span class="quotelev1">&gt; AIX environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our in-house testing indicates that OMPI (V 1.1.x and V 1.2.x)  
</span><br>
<span class="quotelev1">&gt; stdio is broken under AIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point, I am trying to find out if there is a fix or work- 
</span><br>
<span class="quotelev1">&gt; around for this problem. I have put another
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; posting (see attached). One recommendation was try pre-release of V  
</span><br>
<span class="quotelev1">&gt; 1.2, which didn't make any difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am hoping that an OMPI developer or someone from IBM come up with  
</span><br>
<span class="quotelev1">&gt; a solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI documentation, indicates that AIX is being supported, with  
</span><br>
<span class="quotelev1">&gt; limited testing before each release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is limited testing? Does it mean, Configure, Install and  
</span><br>
<span class="quotelev1">&gt; running &quot;Hello World&quot; on one node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, we did configure and installed  V 1.1.x as well as  
</span><br>
<span class="quotelev1">&gt; V1.2.x, but attempt to running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple test such as &quot;mpirun -np 1 hostname&quot;, fails, see attached  
</span><br>
<span class="quotelev1">&gt; for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have eight  nodes IBM systems, I could run any test, to solve  
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your comments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ali,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From Previous Posting on OMPI user's group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed Open MPI 1.1.2  on IBM AIX 5.3 cluster. It looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; terminal output is broken. There are a few entry in the OpenMPI  
</span><br>
<span class="quotelev1">&gt; archive for this problem,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with no suggested solution or real work around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am putting this posting with hope to get some advise for a work  
</span><br>
<span class="quotelev1">&gt; around or solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out  
</span><br>
<span class="quotelev1">&gt; put as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only way to get an output from this command is to add --debug- 
</span><br>
<span class="quotelev1">&gt; daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1 --debug-daemons hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even this debug option is not working for a real application which  
</span><br>
<span class="quotelev1">&gt; generate several output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking forward for any comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>In reply to:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
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
