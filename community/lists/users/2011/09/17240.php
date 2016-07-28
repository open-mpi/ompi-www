<?
$subject_val = "Re: [OMPI users] Question on using rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 20:42:46 2011" -->
<!-- isoreceived="20110913004246" -->
<!-- sent="Mon, 12 Sep 2011 18:42:37 -0600" -->
<!-- isosent="20110913004237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on using rsh" -->
<!-- id="BB077D59-EB29-4C2F-935B-0D4A10B75D90_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E6171_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 20:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The two are synonyms for each other - they resolve to the identical variable, so there isn't anything different about them.
<br>
<p>Not sure what the issue might be, but I would check for a typo - we don't check that mca params are spelled correctly, nor do we check for params that don't exist (e.g., because you spelled it wrong).
<br>
<p><p>On Sep 12, 2011, at 3:03 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I have a hello world program that runs without prompting for password with plm_rsh_agent but not with orte_rsh_agent, I mean it runs but only after prompting for a password:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh ./test_setup
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello from process            2
</span><br>
<span class="quotelev1">&gt; Hello from process            5
</span><br>
<span class="quotelev1">&gt; Hello from process           12
</span><br>
<span class="quotelev1">&gt; Hello from process            6
</span><br>
<span class="quotelev1">&gt; Hello from process            0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello from process            4
</span><br>
<span class="quotelev1">&gt; Hello from process            3
</span><br>
<span class="quotelev1">&gt; Hello from process            7
</span><br>
<span class="quotelev1">&gt; Hello from process           14
</span><br>
<span class="quotelev1">&gt; Hello from process            8
</span><br>
<span class="quotelev1">&gt; Hello from process            1
</span><br>
<span class="quotelev1">&gt; Hello from process            9
</span><br>
<span class="quotelev1">&gt; Hello from process     &amp;n bsp;     10
</span><br>
<span class="quotelev1">&gt; Hello from process           11
</span><br>
<span class="quotelev1">&gt; Hello from process           13
</span><br>
<span class="quotelev1">&gt; Hello from process           15
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path&gt;bin/mpirun --machinefile mpihosts.dat -np 16 -mca orte_rsh_agent /usr/bin/rsh./test_setup
</span><br>
<span class="quotelev1">&gt; bloscel_at_f8312's password:        
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I didn&#146;t notice anything about this in the FAQ except that orte_rsh_agent is newer than plm_rsh_agent.  Did I miss some critical piece of information?  Why do these options behave differently?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
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
