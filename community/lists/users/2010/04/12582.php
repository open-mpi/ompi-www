<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 11:36:58 2010" -->
<!-- isoreceived="20100407153658" -->
<!-- sent="Wed, 07 Apr 2010 10:37:02 -0500" -->
<!-- isosent="20100407153702" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="4BBCA69E.3050806_at_phys.lsu.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705674A_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 11:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
In my case, it was the firewall.  It was restricting communication to 
<br>
ssh only between the compute nodes.  I appreciate the help.
<br>
<p>Rob
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those are normal ssh messages, I think - an ssh session may try 
</span><br>
<span class="quotelev1">&gt; mulktiple auth methods before one succeeds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're absolutely sure that there's no firewalling software and 
</span><br>
<span class="quotelev1">&gt; selinux is disabled?  Ompi is behaving as if it is trying to 
</span><br>
<span class="quotelev1">&gt; communicate and failing (e.g., its hanging while trying to open some 
</span><br>
<span class="quotelev1">&gt; tcp sockets back).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you open random tcp sockets between your nodes?  (E.g., in non-mpi 
</span><br>
<span class="quotelev1">&gt; processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wed Mar 31 06:25:43 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem in remote nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been checking the /var/log/messages on the compute node and there is
</span><br>
<span class="quotelev1">&gt; nothing new after executing ' mpirun --host itanium2 -np 2
</span><br>
<span class="quotelev1">&gt; helloworld.out',
</span><br>
<span class="quotelev1">&gt; but in the /var/log/messages file on the remote node it appears the
</span><br>
<span class="quotelev1">&gt; following messages, nothing about unix_chkpwd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mar 31 11:56:51 itanium2 sshd(pam_unix)[15349]: authentication failure;
</span><br>
<span class="quotelev1">&gt; logname= uid=0 euid=0 tty=NODEVssh ruser= rhost=itanium1  user=otro
</span><br>
<span class="quotelev1">&gt; Mar 31 11:56:53 itanium2 sshd[15349]: Accepted publickey for otro from
</span><br>
<span class="quotelev1">&gt; 192.168.3.1 port 40999 ssh2
</span><br>
<span class="quotelev1">&gt; Mar 31 11:56:53 itanium2 sshd(pam_unix)[15351]: session opened for user
</span><br>
<span class="quotelev1">&gt; otro by (uid=500)
</span><br>
<span class="quotelev1">&gt; Mar 31 11:56:53 itanium2 sshd(pam_unix)[15351]: session closed for 
</span><br>
<span class="quotelev1">&gt; user otro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the authentication fails at first, but in the next message
</span><br>
<span class="quotelev1">&gt; it connects with the node...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El Mar, 30 de Marzo de 2010, 20:02, Robert Collyer escribi&#195;&#179;:
</span><br>
<span class="quotelev2">&gt; &gt; I've been having similar problems using Fedora core 9.  I believe the
</span><br>
<span class="quotelev2">&gt; &gt; issue may be with SELinux, but this is just an educated guess.  In my
</span><br>
<span class="quotelev2">&gt; &gt; setup, shortly after a login via mpi, there is a notation in the
</span><br>
<span class="quotelev2">&gt; &gt; /var/log/messages on the compute node as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mar 30 12:39:45 &lt;node_name&gt; kernel: type=1400 audit(1269970785.534:588):
</span><br>
<span class="quotelev2">&gt; &gt; avc:  denied  { read } for  pid=8047 comm=&quot;unix_chkpwd&quot; name=&quot;hosts&quot;
</span><br>
<span class="quotelev2">&gt; &gt; dev=dm-0 ino=24579
</span><br>
<span class="quotelev2">&gt; &gt; scontext=system_u:system_r:system_chkpwd_t:s0-s0:c0.c1023
</span><br>
<span class="quotelev2">&gt; &gt; tcontext=unconfined_u:object_r:etc_runtime_t:s0 tclass=file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which says SELinux denied unix_chkpwd read access to hosts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you getting anything like this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the meantime, I'll check if allowing unix_chkpwd read access to hosts
</span><br>
<span class="quotelev2">&gt; &gt; eliminates the problem on my system, and if it works, I'll post the
</span><br>
<span class="quotelev2">&gt; &gt; steps involved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; uriz.49949_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've benn investigating and there is no firewall that could stop TCP
</span><br>
<span class="quotelev3">&gt; &gt;&gt; traffic in the cluster. With the option --mca plm_base_verbose 30 I get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the following output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1] /home/otro &gt; mpirun --mca plm_base_verbose 30 --host 
</span><br>
<span class="quotelev1">&gt; itanium2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; helloworld.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: component rsh has no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; register
</span><br>
<span class="quotelev3">&gt; &gt;&gt; function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: component rsh open 
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slurm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; register function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; successful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev3">&gt; &gt;&gt; priority to 10
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Query
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failed to return a module
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [itanium1:08311] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --Hangs here
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems a slurm problem??
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks to any idea
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; El Vie, 19 de Marzo de 2010, 17:57, Ralph Castain escribi&#195;&#179;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did you configure OMPI with --enable-debug? You should do this so that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; more diagnostic output is available.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You can also add the following to your cmd line to get more info:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --debug --debug-daemons --leave-session-attached
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Something is likely blocking proper launch of the daemons and 
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you aren't getting to the btl's at all.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 19, 2010, at 9:42 AM, uriz.49949_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The processes are running on the remote nodes but they don't give the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; response to the origin node. I don't know why.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; With the option --mca btl_base_verbose 30, I have the same problems
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; doesn't show any message.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in 
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; works perfectly, but when I try to execute it on the remote nodes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --host  option it hangs and gives no message. I think that the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; problem is not ssh because i can access to the nodes with no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; password
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You might want to check that Open MPI processes are actually 
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the remote nodes -- check with ps if you see any &quot;orted&quot; or other
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Do you have any TCP firewall software running between the 
</span><br>
<span class="quotelev1">&gt; nodes?  If
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; you'll need to disable it (at least for Open MPI jobs).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I also recommend running mpirun with the option --mca
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; btl_base_verbose
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 30 to troubleshoot tcp issues.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In some environments, you need to explicitly tell mpirun what 
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; interfaces it can use to reach the hosts. Read the following FAQ
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; section for more information:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Item 7 of the FAQ might be of special interest.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in remote nodes"</a>
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
