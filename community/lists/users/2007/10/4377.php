<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 19:38:00 2007" -->
<!-- isoreceived="20071031233800" -->
<!-- sent="Wed, 31 Oct 2007 16:37:53 -0700" -->
<!-- isosent="20071031233753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="326C1A61-F5AF-48DD-8F56-0114ABBFA5FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="34641.142.137.135.124.1193856933.squirrel_at_mail.neuralbs.com" -->
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
<strong>Date:</strong> 2007-10-31 19:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also see:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
and
<br>
<a href="http://www.open-mpi.org/projects/plpa/">http://www.open-mpi.org/projects/plpa/</a>
<br>
<p><p>On Oct 31, 2007, at 11:55 AM, kyron_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; It will indeed but you can have better control over the processor
</span><br>
<span class="quotelev1">&gt; assignment by using processor affinity (also get better  
</span><br>
<span class="quotelev1">&gt; performance) as
</span><br>
<span class="quotelev1">&gt; sen here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.nic.uoregon.edu/tau-wiki/Guide:Opteron_NUMA_Analysis">http://www.nic.uoregon.edu/tau-wiki/Guide:Opteron_NUMA_Analysis</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www-128.ibm.com/developerworks/linux/library/l-affinity.html">http://www-128.ibm.com/developerworks/linux/library/l-affinity.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt; I think if you boot the mpi on the host machine, and than run your
</span><br>
<span class="quotelev2">&gt;&gt; program with 8 thread (mpirun  -np 8 &lt;program_name&gt;) , the operating
</span><br>
<span class="quotelev2">&gt;&gt; system will automatically distribute it to the cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Pummill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am doing some testing on a variety of 8-core nodes in which I just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to execute a couple of executables and have them distributed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the available cores without overlapping. Typically, this would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a parameter like /-machinefile machines/, but I have no idea  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names to put into the /machines/ file as this is a single node with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two quad core cpu's. As I am launching the jobs sans scheduler, I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to specify what cores to run on I would think to keep from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overscheduling some cores while others receive nothing to do at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simple suggestions? Maybe Open MPI takes care of this detail for me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Pummill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
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
