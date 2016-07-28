<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 11:13:34 2007" -->
<!-- isoreceived="20071026151334" -->
<!-- sent="Fri, 26 Oct 2007 09:13:20 -0600" -->
<!-- isosent="20071026151320" -->
<!-- name="Tudor Buican" -->
<!-- email="tudor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="1193411600.5228.41.camel_at_showhorse.timb.com" -->
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
<strong>From:</strong> Tudor Buican (<em>tudor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 11:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>A simple suggestion: put eight (or whatever the number of cores is)
<br>
identical entries for each node, such as  
<br>
<p>compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-0
<br>
compute-0-1
<br>
compute-0-1
<br>
compute-0-1
<br>
compute-0-1
<br>
...........
<br>
<p>It seems to work for my dual-core nodes.
<br>
<p>-Tudor
<br>
<p><p>On Fri, 2007-10-26 at 09:52 -0500, Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; I am doing some testing on a variety of 8-core nodes in which I just
</span><br>
<span class="quotelev1">&gt; want to execute a couple of executables and have them distributed to
</span><br>
<span class="quotelev1">&gt; the available cores without overlapping. Typically, this would be done
</span><br>
<span class="quotelev1">&gt; with a parameter like -machinefile machines, but I have no idea what
</span><br>
<span class="quotelev1">&gt; names to put into the machines file as this is a single node with two
</span><br>
<span class="quotelev1">&gt; quad core cpu's. As I am launching the jobs sans scheduler, I need to
</span><br>
<span class="quotelev1">&gt; specify what cores to run on I would think to keep from overscheduling
</span><br>
<span class="quotelev1">&gt; some cores while others receive nothing to do at all.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<pre>
-- 
Tudor Buican &lt;tudor_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
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
