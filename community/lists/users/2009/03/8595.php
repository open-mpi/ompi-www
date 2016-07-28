<?
$subject_val = "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:07:16 2009" -->
<!-- isoreceived="20090326150716" -->
<!-- sent="Thu, 26 Mar 2009 09:07:05 -0600" -->
<!-- isosent="20090326150705" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="FD05C868-8445-422B-8F23-3A56CA6A5B48_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adbbb9af0903260800o52e22bd3vfb6d6e72b215081d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 11:07:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex
<br>
<p>The problem is likely to be that there is no connection available  
<br>
between grid03 and grid04. Did you create/define an Ethernet/IP  
<br>
interface directly between those two virtual machines?
<br>
<p>Otherwise, there is no way for MPI to communicate between them.
<br>
<p>Ralph
<br>
<p><p>On Mar 26, 2009, at 9:00 AM, Alessandro Surace wrote:
<br>
<p><span class="quotelev1">&gt; Hi Guys,
</span><br>
<span class="quotelev1">&gt; I'm really new in mpi. I've created a small grid composed of virtual  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; real host.
</span><br>
<span class="quotelev1">&gt; grid01 real/Centos/(Open MPI) 1.2.5
</span><br>
<span class="quotelev1">&gt; grid03 virtual (xen)/Centos/(Open MPI) 1.2.5
</span><br>
<span class="quotelev1">&gt; grid04 virtual (vmware)/Centos/(Open MPI) 1.2.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run a parallel job like this:
</span><br>
<span class="quotelev1">&gt; mpirun  -v -H grid01,grid04 -np 2  /mnt/ewd/mpi/fibonacci/
</span><br>
<span class="quotelev1">&gt; fibonacci_mpi
</span><br>
<span class="quotelev1">&gt; The job run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try instead
</span><br>
<span class="quotelev1">&gt; mpirun  -v -H grid03,grid04 -np 2  /mnt/ewd/mpi/fibonacci/ 
</span><br>
<span class="quotelev1">&gt; fibonacci_mpi
</span><br>
<span class="quotelev1">&gt; or with all 3 nodes I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like there is something wrong between grid03, grid04.
</span><br>
<span class="quotelev1">&gt; But If I run the job indivdually on every host it runs without  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't understand what happens.
</span><br>
<span class="quotelev1">&gt; Any Ideas?
</span><br>
<span class="quotelev1">&gt; In attach all the details.
</span><br>
<span class="quotelev1">&gt; But Does Exist a guide / howto configure and setup openmpi (not  
</span><br>
<span class="quotelev1">&gt; build) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; &lt;DEBUG.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
