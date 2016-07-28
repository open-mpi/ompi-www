<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 10:40:09 2006" -->
<!-- isoreceived="20060728144009" -->
<!-- sent="Fri, 28 Jul 2006 10:38:30 -0400 (EDT)" -->
<!-- isosent="20060728143830" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Method" -->
<!-- id="57228.128.165.148.155.1154097510.squirrel_at_www.osl.iu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="c698d63f2ac43.2ac43c698d63f_at_rdc-kc.rr.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 10:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<li><strong>In reply to:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I have implemented the fault tolerance method in which you would use
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN to dynamically create communication groups and use
</span><br>
<span class="quotelev1">&gt; those communicators for a form of process fault tolerance (as
</span><br>
<span class="quotelev1">&gt; described by William Gropp and Ewing Lusk in their 2004 paper),
</span><br>
<span class="quotelev1">&gt; but am having some problems getting it to work the way I intended.
</span><br>
<span class="quotelev1">&gt; Basically, when it runs, it is spawning all the processes on the
</span><br>
<span class="quotelev1">&gt; same machine (as it always starts at the top of the machine_list
</span><br>
<span class="quotelev1">&gt; when spawning a process).  Is there a way that I get get these
</span><br>
<span class="quotelev1">&gt; processes to spawn on different machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In Open MPI (and most other MPI implementations) you will be restricted to
<br>
using only the machines in your allocation when you use MPI_Comm_spawn*.
<br>
The standard allows you can suggest to MPI_Comm_spawn where to place the
<br>
'children' that it creates using the MPI_Info key -- specifically the
<br>
{host} keyvalue referenced here:
<br>
<a href="http://www.mpi-forum.org/docs/mpi-20-html/node97.htm#Node97">http://www.mpi-forum.org/docs/mpi-20-html/node97.htm#Node97</a>
<br>
MPI_Info is described here:
<br>
<a href="http://www.mpi-forum.org/docs/mpi-20-html/node53.htm#Node53">http://www.mpi-forum.org/docs/mpi-20-html/node53.htm#Node53</a>
<br>
<p>Open MPI, in the current release, does not do anything with this key.
<br>
This has been fixed in subversion (as of r11039) and will be in the next
<br>
release of Open MPI.
<br>
<p>If you want to use this functionality in the near term I would suggest
<br>
using the nightly build of the subversion trunk available here:
<br>
<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><p><span class="quotelev1">&gt; One possible route I considerd was using something like SLURM to
</span><br>
<span class="quotelev1">&gt; distribute the jobs, and just putting '+' in the machine file.  Will
</span><br>
<span class="quotelev1">&gt; this work?  Is this the best route to go?
</span><br>
<p>Off the top of my head, I'm not sure if that would work of not. The
<br>
best/cleanest route would be to use the MPI_Info command and the {host}
<br>
key.
<br>
<p>Let us know if you have any trouble with MPI_Comm_spawn or MPI_Info in
<br>
this scenario.
<br>
<p>Hope that helps,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Byron
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<li><strong>In reply to:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1687.php">Edgar Gabriel: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>Reply:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
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
