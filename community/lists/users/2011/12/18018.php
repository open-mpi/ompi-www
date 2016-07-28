<?
$subject_val = "Re: [OMPI users] Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 21:57:10 2011" -->
<!-- isoreceived="20111221025710" -->
<!-- sent="Wed, 21 Dec 2011 02:57:04 +0000" -->
<!-- isosent="20111221025704" -->
<!-- name="Shaandar Nyamtulga" -->
<!-- email="nyam100_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passwordless ssh" -->
<!-- id="BAY171-W732D97B16502C893E030DFE5A50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EF05928.1040909_at_obs.ujf-grenoble.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passwordless ssh<br>
<strong>From:</strong> Shaandar Nyamtulga (<em>nyam100_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 21:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you clarify your answer please.
<br>
I have one master node and other slave nodes. I created rsa key on my master node and copied it to all slaves.
<br>
/home/mpiuser directory of all nodes are shared through NFS.The strange thing is why it requires password after I mount a slave and do ssh to the slave.
<br>
When I dismount I can ssh without password.
<br>
<p>&nbsp;
<br>
<p><p><p>Date: Tue, 20 Dec 2011 10:45:12 +0100
<br>
From: mathieu.westphal_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Passwordless ssh
<br>
<p><p>Hello
<br>
<p>You have to copy nodeX public key at the end of nodeY authorizedkeys.
<br>
<p><p>Mathieu
<br>
Le 20/12/2011 05:03, Shaandar Nyamtulga a &#233;crit : 
<br>
<p><p><p>Hi
<br>
I built Beuwolf cluster using OpenMPI reading the following link.
<br>
<a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
<br>
I can access my nodes without password before mounting my slaves.
<br>
But when I mount my slaves and run a program, it asks again passwords.
<br>
<p>$ eval `ssh-agent`
<br>
<p>$ ssh-add ~/.ssh/id_dsa
<br>
<p>The above is not working. Terminal gives the reply &quot;Could not open a connection to your authentication agent.&quot;
<br>
<p>Help is needed urgently.
<br>
<p>Thank you
<br>
<p><p><p><p>&nbsp;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Reply:</strong> <a href="18019.php">jody: "Re: [OMPI users] Passwordless ssh"</a>
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
