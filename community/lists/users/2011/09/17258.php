<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 12:44:44 2011" -->
<!-- isoreceived="20110913164444" -->
<!-- sent="Tue, 13 Sep 2011 10:44:36 -0600" -->
<!-- isosent="20110913164436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Question on using rsh" -->
<!-- id="4D18A1DD-03D8-47E2-AA21-6679118C0990_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E3E268B_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Question on using rsh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 12:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad - I thought you were talking about the 1.5 series :-(
<br>
<p>orte_rsh_agent does not exist in the 1.4 series. Check &quot;ompi_info --param plm rsh&quot; and you'll see that it isn't there.
<br>
<p>So plm_rsh_agent is picking up your request. The other cmd line blissfully ignores the orte_rsh_agent param.
<br>
<p><p>On Sep 13, 2011, at 10:36 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, Reuti,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There are no typos, except in my post itself where I clipped out a few arguments.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I just repeated the exercise this morning, exactly like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat &#150;np 16 &#150;mca orte_rsh_agent /usr/bin/rsh &#150;x MPI_ENVIRONMENT=1 ./test_setup
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It prompts for a password.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then I hit the &#147;up&#148; arrow key to bring the command back, and I type over &#147;orte&#148; and replace with &#147;plm&#148;:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat &#150;np 16 &#150;mca plm_rsh_agent /usr/bin/rsh &#150;x MPI_ENVIRONMENT=1 ./test_setup
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This time it does not prompt for a password.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I can reverse the order, it doesn&#146;t change the behavior:  the &#147;orte&#148; one prompts for a password but the &#147;plm&#148; one doesn&#146;t.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; They must not be wholly identical, somehow.  This is OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, September 12, 2011 7:43 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Question on using rsh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The two are synonyms for each other - they resolve to the identical variable, so there isn't anything different about them.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a hello world program that runs without prompting for password with plm_rsh_agent but not with orte_rsh_agent, I mean it runs but only after prompting for a password:
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
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
