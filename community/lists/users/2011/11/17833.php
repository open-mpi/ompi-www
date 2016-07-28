<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 25 09:28:59 2011" -->
<!-- isoreceived="20111125142859" -->
<!-- sent="Fri, 25 Nov 2011 07:28:50 -0700" -->
<!-- isosent="20111125142850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="AF2BBC52-D73C-4406-9D25-1FBEE87FF2A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B0E879C5-E8E2-4749-BE00-DBF45282D409_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-25 09:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2011, at 3:42 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 25.11.2011 um 03:47 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2011, at 2:00 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 24.11.2011 um 05:26 schrieb Jaison Paul:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to access OpenMPI processes over Internet using ssh and not quite successful, yet. I believe that I should be able to do it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to run one process on my PC and the rest on a remote cluster over internet. I have set the public keys (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is not a valid syntax for Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This isn't correct
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm completely sorry about this, it wasn't my intention to misguide anyone.
</span><br>
<p>Not a problem at all!
<br>
<p><span class="quotelev1">&gt; But this syntax isn't something I would have expected to work, nor is it documented in `man mpiexec` AFAICS. I suggest to add it there or at <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>. Or maybe a complete new man page for &quot;hostfile&quot;, where also slots= and max_slots= are explained in one location.
</span><br>
<p>Yeah, our documentation is somewhat out-of-date in that area. The best explanation is on the wiki:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>That was the design document I used when I wrote the code.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NB: Checking orte/util/hostfile/hostfile.c even ^ to exclude hosts is supported, but from which initial list will they be excluded? In the `man orte_hosts` I find --default-hostfile which could be the initial list, but --default-hostfile isn't in mpirun's man page.
</span><br>
<p>The &quot;initial list&quot; is whatever hostfile you provided - either the default hostfile or one specified on the cmd line. Remember, we use a progression here:
<br>
<p>1. if a default hostfile exists, get our allocation from it. Any other hostfiles specified on the cmd line are then used to filter hosts from the default hostfile - i.e., we will ignore any hostname given in the cmd line hostfile if it wasn't included in the default hostfile. The &quot;exclude&quot; option applies in both cases. Any exclude directive in the default hostfile will ensure that host isn't included in the allocation. An excluded host in the cmd line hostfile will ensure that host is removed from the final allocation, should it have been present in the default hostfile.
<br>
<p>2. if a default hostfile doesn't exist, then cycle across all hostfiles given on the cmd line and use the aggregate list as the allocation. I believe any exclude option here would apply only to the individual hostfile - i.e., if one hostfile includes a node and another excludes it, I suspect the node will wind up in the allocation.
<br>
<p>Once we have that global allocation, the nodes used for launch of each app_context are filtered from that global allocation using the hostfile specified for that app_context. So any exclude in that hostfile will impact only the associated app_context.
<br>
<p>Confusing and complex, I know - unfortunately, that is what I was told the community would want. :-/
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - we have long supported that syntax in a hostfile, and there is no issue with having a different user name at each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jaison: are you sure your nodes are setup for password-less ssh? In other words, have you setup your .ssh files on the remote nodes so they will allow us to ssh a process on them without providing a password? This is the typical problem we see.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But it fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue seems to be the user! That is, the user on my PC is different to that of user at remotehosts. That's my assumption.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this the problem? Is there any work-around to solve this issue? Do I need to have same username at all nodes to solve this issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can define nicknames for an ssh connection in a file ~/.ssh/config like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host foobar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  User baz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hostname the.remote.server.demo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Port 1234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While this will work with any nickname for an ssh connection, in your case the nickname must match the one specified in the hostfile, as Open MPI won't use this lookup file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host remotehost.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  User user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh should then use the entries therein to initiate the connection. For details you can have a look at `man ssh_config`.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17834.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
