<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 14:44:32 2007" -->
<!-- isoreceived="20071031184432" -->
<!-- sent="Wed, 31 Oct 2007 19:45:50 +0100" -->
<!-- isosent="20071031184550" -->
<!-- name="Sefa Arslan" -->
<!-- email="sefa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="4728CD5E.4060904_at_higgs.gen.tr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4721FF3A.6080804_at_uark.edu" -->
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
<strong>From:</strong> Sefa Arslan (<em>sefa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 14:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think if you boot the mpi on the host machine, and than run your 
<br>
program with 8 thread (mpirun  -np 8 &lt;program_name&gt;) , the operating 
<br>
system will automatically distribute it to the cores.
<br>
<p>Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; I am doing some testing on a variety of 8-core nodes in which I just 
</span><br>
<span class="quotelev1">&gt; want to execute a couple of executables and have them distributed to 
</span><br>
<span class="quotelev1">&gt; the available cores without overlapping. Typically, this would be done 
</span><br>
<span class="quotelev1">&gt; with a parameter like /-machinefile machines/, but I have no idea what 
</span><br>
<span class="quotelev1">&gt; names to put into the /machines/ file as this is a single node with 
</span><br>
<span class="quotelev1">&gt; two quad core cpu's. As I am launching the jobs sans scheduler, I need 
</span><br>
<span class="quotelev1">&gt; to specify what cores to run on I would think to keep from 
</span><br>
<span class="quotelev1">&gt; overscheduling some cores while others receive nothing to do at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simple suggestions? Maybe Open MPI takes care of this detail for me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Pummill
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
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
