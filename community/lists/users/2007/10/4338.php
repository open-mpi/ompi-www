<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 11:57:07 2007" -->
<!-- isoreceived="20071026155707" -->
<!-- sent="Fri, 26 Oct 2007 10:57:03 -0500" -->
<!-- isosent="20071026155703" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Hostfile&amp;quot; on Multicore Node?" -->
<!-- id="47220E4F.6030701_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="748BD6A9-02EE-4024-BA87-3BEC648EAD25_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 11:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, it appears that for a machine of this type (dual quad core cpu's), 
<br>
this approach would be correct for my tests...
<br>
<p>[jpummill_at_n1 bin]$ more my-hosts
<br>
n1 slots=8 max_slots=8
<br>
<p>and subsequently, launch two jobs in this configuration...
<br>
/home/jpummill/openmpi-1.2.2/bin/mpirun --hostfile my-hosts -np 4 
<br>
--byslot ./cg.C.4
<br>
<p>It appears that this does avoid oversubscribing any particular core as I 
<br>
am not exceeding my core count by running just the two jobs requiring 4 
<br>
cores each.
<br>
<p>Thanks,
<br>
<p>Jeff Pummill
<br>
<p><p><p><p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The cleaner way to define such an environment is by using the 
</span><br>
<span class="quotelev1">&gt; max-slots and/or slots options in the hostfile. Here is a FAQ entry 
</span><br>
<span class="quotelev1">&gt; about how Open MPI deal with these options 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2007, at 10:52 AM, Jeff Pummill wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am doing some testing on a variety of 8-core nodes in which I just 
</span><br>
<span class="quotelev2">&gt;&gt; want to execute a couple of executables and have them distributed to 
</span><br>
<span class="quotelev2">&gt;&gt; the available cores without overlapping. Typically, this would be 
</span><br>
<span class="quotelev2">&gt;&gt; done with a parameter like -machinefile machines, but I have no idea 
</span><br>
<span class="quotelev2">&gt;&gt; what names to put into the machines file as this is a single node 
</span><br>
<span class="quotelev2">&gt;&gt; with two quad core cpu's. As I am launching the jobs sans scheduler, 
</span><br>
<span class="quotelev2">&gt;&gt; I need to specify what cores to run on I would think to keep from 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4337.php">George Bosilca: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4367.php">Sefa Arslan: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
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
