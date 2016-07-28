<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 13:17:02 2006" -->
<!-- isoreceived="20061018171702" -->
<!-- sent="Wed, 18 Oct 2006 11:16:53 -0600" -->
<!-- isosent="20061018171653" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job fails to terminate" -->
<!-- id="C15BBDA5.52E3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0610181757220.29896_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 13:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<li><strong>In reply to:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lydia
<br>
<p>Could you confirm the version you are using? I think there is a typo there.
<br>
<p>Also, could you tell us how you configured the code (the configure command
<br>
line would be nice).
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 10/18/06 11:03 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have recently installed openmpi 1.3r1212a over tcp and gigabit
</span><br>
<span class="quotelev1">&gt; on a Solaris 10 x86/64 system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compilation of some test codes
</span><br>
<span class="quotelev1">&gt; monte (a monte carlo estimate of pi),
</span><br>
<span class="quotelev1">&gt; connectivity which test connectivity between processes and nodes
</span><br>
<span class="quotelev1">&gt; prime, which calculates prime numbers  (these testcode are examples
</span><br>
<span class="quotelev1">&gt; which are bundled with Sun HPC).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compile fine using the openmpi version of mpicc, mpif95 and mpic++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And sometimes the jobs work fine, but most of the time the jobs freeze
</span><br>
<span class="quotelev1">&gt; leaving zombies behind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my run time command is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile my-hosts -mca pls_rsh_agent rsh --mca btl tcp,self -np 14 \
</span><br>
<span class="quotelev1">&gt; monte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I get as output
</span><br>
<span class="quotelev1">&gt; oberon(209) &gt; mpirun --hostfile my-hosts -mca pls_rsh_agent rsh --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self -np 14 monte
</span><br>
<span class="quotelev1">&gt; Monte-Carlo estimate of pi by   14 processes is 3.141503.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the cursor hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process table shows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oberon# ps -eaf | grep dph0elh
</span><br>
<span class="quotelev1">&gt;  dph0elh  9583  7445   7 17:45:01 pts/26      9:22 mpirun --hostfile my-hosts
</span><br>
<span class="quotelev1">&gt; -mca pls_rsh_agent rsh --mca btl tcp,self -np 14 mon
</span><br>
<span class="quotelev1">&gt;  dph0elh  9595  9588   0        - ?           0:02 &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt;  dph0elh  9588     1   7 17:45:01 ??          9:03 orted --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.1 --num_procs 5 --vpid_start 0 --nodename oberon
</span><br>
<span class="quotelev1">&gt;  dph0elh  7445  6924   0 17:01:38 pts/26      0:00 -tcsh
</span><br>
<span class="quotelev1">&gt;     root  9656  4151   0 18:01:31 pts/36      0:00 grep dph0elh
</span><br>
<span class="quotelev1">&gt;  dph0elh  9593  9588   0        - ?           0:02 &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one of the nodes offers 8 cpus the other nodes in the hostfile offer 2.
</span><br>
<span class="quotelev1">&gt; There are a total of 14 cpus available. and as you can see from the command
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt; I use --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are no other interconnects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could not find any entry in the FAQs, except for the advice on using
</span><br>
<span class="quotelev1">&gt; --mca btl tcp,self.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<li><strong>Next message:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<li><strong>In reply to:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
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
