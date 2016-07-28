<?
$subject_val = "Re: [OMPI users] Question on using rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 04:30:48 2011" -->
<!-- isoreceived="20110913083048" -->
<!-- sent="Tue, 13 Sep 2011 10:30:37 +0200" -->
<!-- isosent="20110913083037" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on using rsh" -->
<!-- id="AD49F45C-F873-4382-8AF5-8430DBF43EF6_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BB077D59-EB29-4C2F-935B-0D4A10B75D90_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on using rsh<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 04:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.09.2011 um 02:42 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; The two are synonyms for each other - they resolve to the identical variable, so there isn't anything different about them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what the issue might be, but I would check for a typo - we don't check that mca params are spelled correctly, nor do we check for params that don't exist (e.g., because you spelled it wrong).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 3:03 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a hello world program that runs without prompting for password with plm_rsh_agent but not with orte_rsh_agent, I mean it runs but only after prompting for a password:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh ./test_setup
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            5
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process           12
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            6
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            4
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            3
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            7
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process           14
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            8
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process            9
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process     &amp;n bsp;     10
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process           11
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process           13
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process           15
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;bin/mpirun --machinefile mpihosts.dat -np 16 -mca orte_rsh_agent /usr/bin/rsh./test_setup
</span><br>
<p>Is it a typo or copy/paste error: there is a blank missing between /usr/bin/rsh and ./test_setup
<br>
<p>- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; bloscel_at_f8312's password:        
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I didn&#146;t notice anything about this in the FAQ except that orte_rsh_agent is newer than plm_rsh_agent.  Did I miss some critical piece of information?  Why do these options behave differently?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
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
<li><strong>Next message:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
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
