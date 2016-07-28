<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 14:57:32 2007" -->
<!-- isoreceived="20071031185732" -->
<!-- sent="Wed, 31 Oct 2007 14:55:33 -0400 (EDT)" -->
<!-- isosent="20071031185533" -->
<!-- name="kyron_at_[hidden]" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="34641.142.137.135.124.1193856933.squirrel_at_mail.neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4728CD5E.4060904_at_higgs.gen.tr" -->
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
<strong>From:</strong> <a href="mailto:kyron_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;Hostfile&amp;amp;quot;%20on%20Multicore%20Node?"><em>kyron_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-10-31 14:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It will indeed but you can have better control over the processor
<br>
assignment by using processor affinity (also get better performance) as
<br>
sen here:
<br>
<p><a href="http://www.nic.uoregon.edu/tau-wiki/Guide:Opteron_NUMA_Analysis">http://www.nic.uoregon.edu/tau-wiki/Guide:Opteron_NUMA_Analysis</a>
<br>
<a href="http://www-128.ibm.com/developerworks/linux/library/l-affinity.html">http://www-128.ibm.com/developerworks/linux/library/l-affinity.html</a>
<br>
<p>Eric
<br>
<span class="quotelev1">&gt; I think if you boot the mpi on the host machine, and than run your
</span><br>
<span class="quotelev1">&gt; program with 8 thread (mpirun  -np 8 &lt;program_name&gt;) , the operating
</span><br>
<span class="quotelev1">&gt; system will automatically distribute it to the cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am doing some testing on a variety of 8-core nodes in which I just
</span><br>
<span class="quotelev2">&gt;&gt; want to execute a couple of executables and have them distributed to
</span><br>
<span class="quotelev2">&gt;&gt; the available cores without overlapping. Typically, this would be done
</span><br>
<span class="quotelev2">&gt;&gt; with a parameter like /-machinefile machines/, but I have no idea what
</span><br>
<span class="quotelev2">&gt;&gt; names to put into the /machines/ file as this is a single node with
</span><br>
<span class="quotelev2">&gt;&gt; two quad core cpu's. As I am launching the jobs sans scheduler, I need
</span><br>
<span class="quotelev2">&gt;&gt; to specify what cores to run on I would think to keep from
</span><br>
<span class="quotelev2">&gt;&gt; overscheduling some cores while others receive nothing to do at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simple suggestions? Maybe Open MPI takes care of this detail for me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Pummill
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4368.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
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
