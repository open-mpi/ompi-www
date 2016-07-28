<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 11:21:12 2007" -->
<!-- isoreceived="20071026152112" -->
<!-- sent="Fri, 26 Oct 2007 11:20:58 -0400" -->
<!-- isosent="20071026152058" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="748BD6A9-02EE-4024-BA87-3BEC648EAD25_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 11:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4336.php">Tudor Buican: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The cleaner way to define such an environment is by using the max- 
<br>
slots and/or slots options in the hostfile. Here is a FAQ entry about  
<br>
how Open MPI deal with these options (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
<br>
category=running#mpirun-scheduling).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Oct 26, 2007, at 10:52 AM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; I am doing some testing on a variety of 8-core nodes in which I  
</span><br>
<span class="quotelev1">&gt; just want to execute a couple of executables and have them  
</span><br>
<span class="quotelev1">&gt; distributed to the available cores without overlapping. Typically,  
</span><br>
<span class="quotelev1">&gt; this would be done with a parameter like -machinefile machines, but  
</span><br>
<span class="quotelev1">&gt; I have no idea what names to put into the machines file as this is  
</span><br>
<span class="quotelev1">&gt; a single node with two quad core cpu's. As I am launching the jobs  
</span><br>
<span class="quotelev1">&gt; sans scheduler, I need to specify what cores to run on I would  
</span><br>
<span class="quotelev1">&gt; think to keep from overscheduling some cores while others receive  
</span><br>
<span class="quotelev1">&gt; nothing to do at all.
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4337/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Previous message:</strong> <a href="4336.php">Tudor Buican: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4335.php">Jeff Pummill: "[OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>Reply:</strong> <a href="4338.php">Jeff Pummill: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
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
