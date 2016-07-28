<?
$subject_val = "Re: [OMPI users] Passwordless ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 02:18:43 2011" -->
<!-- isoreceived="20111221071843" -->
<!-- sent="Wed, 21 Dec 2011 08:18:39 +0100" -->
<!-- isosent="20111221071839" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passwordless ssh" -->
<!-- id="CAKbzMGfDqAjKHVqSqLyf8ttGuKU=mZzeY1VJo_N6JXDRvQLH8w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY171-W732D97B16502C893E030DFE5A50_at_phx.gbl" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 02:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>Previous message:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>In reply to:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>Reply:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>You also must make sure that all slaves can
<br>
connect via ssh to each other and to the master
<br>
node without ssh.
<br>
<p>Jody
<br>
<p><p>On Wed, Dec 21, 2011 at 3:57 AM, Shaandar Nyamtulga &lt;nyam100_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Can you clarify your answer please.
</span><br>
<span class="quotelev1">&gt; I have one master node and other slave nodes. I created rsa key on my&#160;master
</span><br>
<span class="quotelev1">&gt; node and copied it to all slaves.
</span><br>
<span class="quotelev1">&gt; /home/mpiuser directory&#160;of all nodes are shared through NFS.The strange
</span><br>
<span class="quotelev1">&gt; thing is why it requires password after I mount&#160;a slave and do ssh to the
</span><br>
<span class="quotelev1">&gt; slave.
</span><br>
<span class="quotelev1">&gt; When I dismount I can ssh without password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Dec 2011 10:45:12 +0100
</span><br>
<span class="quotelev1">&gt; From: mathieu.westphal_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Passwordless ssh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to copy nodeX public key at the end of nodeY authorizedkeys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mathieu
</span><br>
<span class="quotelev1">&gt; Le 20/12/2011 05:03, Shaandar Nyamtulga a &#233;crit&#160;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I built Beuwolf cluster using OpenMPI reading the following link.
</span><br>
<span class="quotelev1">&gt; <a href="http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/">http://techtinkering.com/2009/12/02/setting-up-a-beowulf-cluster-using-open-mpi-on-linux/</a>
</span><br>
<span class="quotelev1">&gt; I can access my nodes without password before mounting my slaves.
</span><br>
<span class="quotelev1">&gt; But when I mount my slaves and run a program, it asks again passwords.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ eval `ssh-agent`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ssh-add ~/.ssh/id_dsa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above is not working. Terminal gives the reply &quot;Could not open a
</span><br>
<span class="quotelev1">&gt; connection to your authentication agent.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help is needed urgently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>Previous message:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>In reply to:</strong> <a href="18018.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>Reply:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
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
