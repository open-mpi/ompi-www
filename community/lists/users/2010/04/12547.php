<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 03:49:01 2010" -->
<!-- isoreceived="20100406074901" -->
<!-- sent="Tue, 06 Apr 2010 17:48:52 +1000" -->
<!-- isosent="20100406074852" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="1270540132.1413.7.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="COL117-DS5D1E0CEA07E290F64AE0DE9180_at_phx.gbl" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 03:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12548.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;    1. Run the following command on the client
</span><br>
<span class="quotelev1">&gt;           * -&gt; ssh-keygen -t dsa
</span><br>
<span class="quotelev1">&gt;    2. File id_dsa and id_dsa.pub will be created inside $HOME/.ssh
</span><br>
<span class="quotelev1">&gt;    3. Copy id_dsa.pub to the server's .ssh directory
</span><br>
<span class="quotelev1">&gt;           * -&gt; scp $HOME/.ssh/id_dsa.pub user_at_server:/home/user/.ssh
</span><br>
<span class="quotelev1">&gt;    4. Change to /root/.ssh and create file authorized_keys containing
</span><br>
<span class="quotelev1">&gt; id_dsa content
</span><br>
<span class="quotelev1">&gt;           * -&gt; cd /home/user/.ssh
</span><br>
<span class="quotelev1">&gt;           * -&gt; cat id_dsa &gt;&gt; authorized_keys
</span><br>
<span class="quotelev1">&gt;    5. You can try ssh to the server from the client and no password
</span><br>
<span class="quotelev1">&gt; will be needed
</span><br>
<span class="quotelev1">&gt;           * -&gt; ssh user_at_server
</span><br>
<p>That prescription is a little messed up.  You need to create id_dsa and
<br>
id_dsa.pub on the client, as above.
<br>
<p>But it is the client's id_dsa.pub that needs to go
<br>
into /home/user/.ssh/authorized_keys on the server, which seems to be
<br>
not what the above recipe does.
<br>
<p>If that doesn't help, try adding -v or even -v -v to the ssh command to
<br>
see what the connection is trying to do w.r.t. your keys.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12548.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12546.php">Terry Frankcombe: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12545.php">Trent Creekmore: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
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
