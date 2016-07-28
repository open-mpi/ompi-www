<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 10:55:11 2006" -->
<!-- isoreceived="20060728145511" -->
<!-- sent="Fri, 28 Jul 2006 09:53:40 -0500" -->
<!-- isosent="20060728145340" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Method" -->
<!-- id="44CA24F4.7070508_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57228.128.165.148.155.1154097510.squirrel_at_www.osl.iu.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 10:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1688.php">Jeff Squyres: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>In reply to:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
don't forget furthermore, that for successfully using this 
<br>
fault-tolerance approach, the parents or other child processes should 
<br>
not be affected by the death/failure of another child process. Right now 
<br>
in Open MPI, if one of the child processes (which you spawned using 
<br>
MPI_Comm_spawn) fails, the whole application will fail. [To be more 
<br>
precise: the MPI standard does not enforce/mandate the behavior 
<br>
described in the paper which you mentioned]
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev2">&gt;&gt; I have implemented the fault tolerance method in which you would use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SPAWN to dynamically create communication groups and use
</span><br>
<span class="quotelev2">&gt;&gt; those communicators for a form of process fault tolerance (as
</span><br>
<span class="quotelev2">&gt;&gt; described by William Gropp and Ewing Lusk in their 2004 paper),
</span><br>
<span class="quotelev2">&gt;&gt; but am having some problems getting it to work the way I intended.
</span><br>
<span class="quotelev2">&gt;&gt; Basically, when it runs, it is spawning all the processes on the
</span><br>
<span class="quotelev2">&gt;&gt; same machine (as it always starts at the top of the machine_list
</span><br>
<span class="quotelev2">&gt;&gt; when spawning a process).  Is there a way that I get get these
</span><br>
<span class="quotelev2">&gt;&gt; processes to spawn on different machines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI (and most other MPI implementations) you will be restricted to
</span><br>
<span class="quotelev1">&gt; using only the machines in your allocation when you use MPI_Comm_spawn*.
</span><br>
<span class="quotelev1">&gt; The standard allows you can suggest to MPI_Comm_spawn where to place the
</span><br>
<span class="quotelev1">&gt; 'children' that it creates using the MPI_Info key -- specifically the
</span><br>
<span class="quotelev1">&gt; {host} keyvalue referenced here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node97.htm#Node97">http://www.mpi-forum.org/docs/mpi-20-html/node97.htm#Node97</a>
</span><br>
<span class="quotelev1">&gt; MPI_Info is described here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node53.htm#Node53">http://www.mpi-forum.org/docs/mpi-20-html/node53.htm#Node53</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI, in the current release, does not do anything with this key.
</span><br>
<span class="quotelev1">&gt; This has been fixed in subversion (as of r11039) and will be in the next
</span><br>
<span class="quotelev1">&gt; release of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to use this functionality in the near term I would suggest
</span><br>
<span class="quotelev1">&gt; using the nightly build of the subversion trunk available here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One possible route I considerd was using something like SLURM to
</span><br>
<span class="quotelev2">&gt;&gt; distribute the jobs, and just putting '+' in the machine file.  Will
</span><br>
<span class="quotelev2">&gt;&gt; this work?  Is this the best route to go?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Off the top of my head, I'm not sure if that would work of not. The
</span><br>
<span class="quotelev1">&gt; best/cleanest route would be to use the MPI_Info command and the {host}
</span><br>
<span class="quotelev1">&gt; key.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let us know if you have any trouble with MPI_Comm_spawn or MPI_Info in
</span><br>
<span class="quotelev1">&gt; this scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help with this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Byron
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1688.php">Jeff Squyres: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<li><strong>In reply to:</strong> <a href="1686.php">Josh Hursey: "Re: [OMPI users] Fault Tolerant Method"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1696.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Method"</a>
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
