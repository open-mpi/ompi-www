<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 06:37:45 2010" -->
<!-- isoreceived="20100406103745" -->
<!-- sent="Tue, 6 Apr 2010 12:37:39 +0200" -->
<!-- isosent="20100406103739" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="p2z9b0da5ce1004060337n9ca27500ybd14a71b365bcda3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="650DAF06-346A-4566-962C-081794B2090D_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 06:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12551.php">Jeff Squyres: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intelcompilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Trent
<br>
<span class="quotelev1">&gt; the 1024 RSA has already been cracked.
</span><br>
Yeah but unless you've got 3 guys spending 100 hours varying the
<br>
voltage of your processors
<br>
it is still safe... :)
<br>
<p><p>On Tue, Apr 6, 2010 at 11:35 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 06.04.2010 um 09:48 schrieb Terry Frankcombe:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; 1. Run the following command on the client
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;* -&gt; ssh-keygen -t dsa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; 2. File id_dsa and id_dsa.pub will be created inside $HOME/.ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; 3. Copy id_dsa.pub to the server's .ssh directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;* -&gt; scp $HOME/.ssh/id_dsa.pub user_at_server:/home/user/.ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; 4. Change to /root/.ssh and create file authorized_keys containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; id_dsa content
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;* -&gt; cd /home/user/.ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;* -&gt; cat id_dsa &gt;&gt; authorized_keys
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; 5. You can try ssh to the server from the client and no password
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;* -&gt; ssh user_at_server
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That prescription is a little messed up. &#160;You need to create id_dsa and
</span><br>
<span class="quotelev2">&gt;&gt; id_dsa.pub on the client, as above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it is the client's id_dsa.pub that needs to go
</span><br>
<span class="quotelev2">&gt;&gt; into /home/user/.ssh/authorized_keys on the server, which seems to be
</span><br>
<span class="quotelev2">&gt;&gt; not what the above recipe does.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that doesn't help, try adding -v or even -v -v to the ssh command to
</span><br>
<span class="quotelev2">&gt;&gt; see what the connection is trying to do w.r.t. your keys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inside a cluster I suggest hostbased authentication. No keys for the user, a common used ssh_known_hosts file and a central place to look for errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Passphraseless ssh-keys I just dislike as they tempt the user to copy them to all remote location (especially the private part) to get more comfort while using ssh between two remote clusters, but using an ssh-agent would in this case be a more secure option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12551.php">Jeff Squyres: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intelcompilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12549.php">Reuti: "Re: [OMPI users] Help om Openmpi"</a>
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
