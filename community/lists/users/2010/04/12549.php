<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 05:35:54 2010" -->
<!-- isoreceived="20100406093554" -->
<!-- sent="Tue, 6 Apr 2010 11:35:42 +0200" -->
<!-- isosent="20100406093542" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="650DAF06-346A-4566-962C-081794B2090D_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1270540132.1413.7.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help om Openmpi<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 05:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12548.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12547.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 06.04.2010 um 09:48 schrieb Terry Frankcombe:
<br>
<p><span class="quotelev2">&gt;&gt;   1. Run the following command on the client
</span><br>
<span class="quotelev2">&gt;&gt;          * -&gt; ssh-keygen -t dsa
</span><br>
<span class="quotelev2">&gt;&gt;   2. File id_dsa and id_dsa.pub will be created inside $HOME/.ssh
</span><br>
<span class="quotelev2">&gt;&gt;   3. Copy id_dsa.pub to the server's .ssh directory
</span><br>
<span class="quotelev2">&gt;&gt;          * -&gt; scp $HOME/.ssh/id_dsa.pub user_at_server:/home/user/.ssh
</span><br>
<span class="quotelev2">&gt;&gt;   4. Change to /root/.ssh and create file authorized_keys containing
</span><br>
<span class="quotelev2">&gt;&gt; id_dsa content
</span><br>
<span class="quotelev2">&gt;&gt;          * -&gt; cd /home/user/.ssh
</span><br>
<span class="quotelev2">&gt;&gt;          * -&gt; cat id_dsa &gt;&gt; authorized_keys
</span><br>
<span class="quotelev2">&gt;&gt;   5. You can try ssh to the server from the client and no password
</span><br>
<span class="quotelev2">&gt;&gt; will be needed
</span><br>
<span class="quotelev2">&gt;&gt;          * -&gt; ssh user_at_server
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That prescription is a little messed up.  You need to create id_dsa and
</span><br>
<span class="quotelev1">&gt; id_dsa.pub on the client, as above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it is the client's id_dsa.pub that needs to go
</span><br>
<span class="quotelev1">&gt; into /home/user/.ssh/authorized_keys on the server, which seems to be
</span><br>
<span class="quotelev1">&gt; not what the above recipe does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that doesn't help, try adding -v or even -v -v to the ssh command to
</span><br>
<span class="quotelev1">&gt; see what the connection is trying to do w.r.t. your keys.
</span><br>
<p>inside a cluster I suggest hostbased authentication. No keys for the user, a common used ssh_known_hosts file and a central place to look for errors.
<br>
<p>Passphraseless ssh-keys I just dislike as they tempt the user to copy them to all remote location (especially the private part) to get more comfort while using ssh between two remote clusters, but using an ssh-agent would in this case be a more secure option.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12548.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12547.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12550.php">jody: "Re: [OMPI users] Help om Openmpi"</a>
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
