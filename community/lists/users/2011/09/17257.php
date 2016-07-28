<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 12:36:41 2011" -->
<!-- isoreceived="20110913163641" -->
<!-- sent="Tue, 13 Sep 2011 10:36:28 -0600" -->
<!-- isosent="20110913163628" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Question on using rsh" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E3E268B_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Question on using rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 12:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, Reuti,
<br>
<p>There are no typos, except in my post itself where I clipped out a few arguments.
<br>
<p>I just repeated the exercise this morning, exactly like this:
<br>
<p>&lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca orte_rsh_agent /usr/bin/rsh -x MPI_ENVIRONMENT=1 ./test_setup
<br>
<p>It prompts for a password.
<br>
<p>Then I hit the &quot;up&quot; arrow key to bring the command back, and I type over &quot;orte&quot; and replace with &quot;plm&quot;:
<br>
<p>&lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh -x MPI_ENVIRONMENT=1 ./test_setup
<br>
<p>This time it does not prompt for a password.
<br>
<p>I can reverse the order, it doesn't change the behavior:  the &quot;orte&quot; one prompts for a password but the &quot;plm&quot; one doesn't.
<br>
<p>They must not be wholly identical, somehow.  This is OpenMPI 1.4.3.
<br>
<p>Ed
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, September 12, 2011 7:43 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Question on using rsh
<br>
<p>The two are synonyms for each other - they resolve to the identical variable, so there isn't anything different about them.
<br>
<p>Not sure what the issue might be, but I would check for a typo - we don't check that mca params are spelled correctly, nor do we check for params that don't exist (e.g., because you spelled it wrong).
<br>
<p><p>On Sep 12, 2011, at 3:03 PM, Blosch, Edwin L wrote:
<br>
<p><p>I have a hello world program that runs without prompting for password with plm_rsh_agent but not with orte_rsh_agent, I mean it runs but only after prompting for a password:
<br>
<p>&lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh ./test_setup
<br>
<p>Hello from process            2
<br>
Hello from process            5
<br>
Hello from process           12
<br>
Hello from process            6
<br>
<p>Hello from process            0
<br>
Hello from process            4
<br>
Hello from process            3
<br>
Hello from process            7
<br>
Hello from process           14
<br>
Hello from process            8
<br>
Hello from process            1
<br>
Hello from process            9
<br>
Hello from process     &amp;n bsp;     10
<br>
Hello from process           11
<br>
Hello from process           13
<br>
Hello from process           15
<br>
<p>&lt;path&gt;bin/mpirun --machinefile mpihosts.dat -np 16 -mca orte_rsh_agent /usr/bin/rsh./test_setup
<br>
bloscel_at_f8312's password:
<br>
<p>I didn't notice anything about this in the FAQ except that orte_rsh_agent is newer than plm_rsh_agent.  Did I miss some critical piece of information?  Why do these options behave differently?
<br>
<p><p>Thanks
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17258.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
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
