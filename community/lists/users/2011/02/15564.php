<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 19:12:32 2011" -->
<!-- isoreceived="20110211001232" -->
<!-- sent="Thu, 10 Feb 2011 16:12:26 -0800" -->
<!-- isosent="20110211001226" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C979BD97.E485%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E906CAE-404B-4107-A1FD-28F21472D84D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 19:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15563.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15562.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi jeff,
<br>
<p>Thanks for the firewall tip.  I tried it while allowing all tip traffic
<br>
and got interesting and preplexing result.  Here's what's interesting
<br>
(BTW, I got rid of &quot;LogLevel DEBUG3&quot; from ./ssh/config on this run):
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ mpirun --app app.ac2
<br>
&nbsp;&nbsp;&nbsp;Host key verification failed.
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A daemon (pid 2743) died unexpectedly with status 255 while attempting
<br>
&nbsp;&nbsp;&nbsp;to launch so we are aborting.
<br>
<p>&nbsp;&nbsp;&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;&nbsp;&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;&nbsp;&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have
<br>
the
<br>
&nbsp;&nbsp;&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;&nbsp;&nbsp;automatically be forwarded to the remote nodes.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ env | grep LD_LIB
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ # Let's set LD_LIBRARY_PATH to
<br>
/usr/local/lib
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ export LD_LIBRARY_PATH='/usr/local/lib'
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ # I better to this on machine B as well
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ ssh -i tsakai ip-10-195-171-159
<br>
&nbsp;&nbsp;&nbsp;Warning: Identity file tsakai not accessible: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;Last login: Thu Feb 10 18:31:20 2011 from 10.203.21.132
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$ export LD_LIBRARY_PATH='/usr/local/lib'
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$ env | grep LD_LIB
<br>
&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH=/usr/local/lib
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$ # OK, now go bak to machine A
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-195-171-159 ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;Connection to ip-10-195-171-159 closed.
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;ip-10-203-21-132
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ # try mpirun again
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ mpirun --app app.ac2
<br>
&nbsp;&nbsp;&nbsp;Host key verification failed.
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A daemon (pid 2789) died unexpectedly with status 255 while attempting
<br>
&nbsp;&nbsp;&nbsp;to launch so we are aborting.
<br>
<p>&nbsp;&nbsp;&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;&nbsp;&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;&nbsp;&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have
<br>
the
<br>
&nbsp;&nbsp;&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;&nbsp;&nbsp;automatically be forwarded to the remote nodes.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
<p>--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ # I thought openmpi library was in
<br>
/usr/local/lib...
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ ll -t /usr/local/lib | less
<br>
&nbsp;&nbsp;&nbsp;total 16604
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      16 Feb  8 23:06 libfuse.so -&gt;
<br>
libfuse.so.2.8.5
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      16 Feb  8 23:06 libfuse.so.2 -&gt;
<br>
libfuse.so.2.8.5
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      25 Feb  8 23:06 libmca_common_sm.so -&gt;
<br>
libmca_common_sm.so.1.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      25 Feb  8 23:06 libmca_common_sm.so.1 -&gt;
<br>
libmca_common_sm.so.1.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      15 Feb  8 23:06 libmpi.so -&gt; libmpi.so.0.0.2
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      15 Feb  8 23:06 libmpi.so.0 -&gt;
<br>
libmpi.so.0.0.2
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_cxx.so -&gt;
<br>
libmpi_cxx.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_cxx.so.0 -&gt;
<br>
libmpi_cxx.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f77.so -&gt;
<br>
libmpi_f77.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f77.so.0 -&gt;
<br>
libmpi_f77.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f90.so -&gt;
<br>
libmpi_f90.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      19 Feb  8 23:06 libmpi_f90.so.0 -&gt;
<br>
libmpi_f90.so.0.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-pal.so -&gt;
<br>
libopen-pal.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-pal.so.0 -&gt;
<br>
libopen-pal.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-rte.so -&gt;
<br>
libopen-rte.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libopen-rte.so.0 -&gt;
<br>
libopen-rte.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      26 Feb  8 23:06 libopenmpi_malloc.so -&gt;
<br>
libopenmpi_malloc.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      26 Feb  8 23:06 libopenmpi_malloc.so.0 -&gt;
<br>
libopenmpi_malloc.so.0.0.0
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libulockmgr.so -&gt;
<br>
libulockmgr.so.1.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      20 Feb  8 23:06 libulockmgr.so.1 -&gt;
<br>
libulockmgr.so.1.0.1
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      16 Feb  8 23:06 libxml2.so -&gt;
<br>
libxml2.so.2.7.2
<br>
&nbsp;&nbsp;&nbsp;lrwxrwxrwx 1 root root      16 Feb  8 23:06 libxml2.so.2 -&gt;
<br>
libxml2.so.2.7.2
<br>
&nbsp;&nbsp;&nbsp;-rw-r--r-- 1 root root  385912 Jan 26 01:00 libvt.a
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$ # Now, I am really confused...
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-203-21-132 ~]$
<br>
<p>Do you know why it's complaining about shared libraries?
<br>
<p>Thank you.
<br>
<p>Tena
<br>
<p><p>On 2/10/11 1:05 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Your prior mails were about ssh issues, but this one sounds like you might
</span><br>
<span class="quotelev1">&gt; have firewall issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, the &quot;orted&quot; command attempts to open a TCP socket back to mpirun for
</span><br>
<span class="quotelev1">&gt; various command and control reasons.  If it is blocked from doing so by a
</span><br>
<span class="quotelev1">&gt; firewall, Open MPI won't run.  In general, you can either disable your
</span><br>
<span class="quotelev1">&gt; firewall or you can setup a trust relationship for TCP connections within your
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2011, at 1:03 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for suggesting &quot;LogLevel DEBUG3.&quot;  I did so and complete
</span><br>
<span class="quotelev2">&gt;&gt; session is captured in the attached file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I did is much similar to what I have done before: verify
</span><br>
<span class="quotelev2">&gt;&gt; that ssh works and then run mpirun command.  In my a bit lengthy
</span><br>
<span class="quotelev2">&gt;&gt; session log, there are two responses from &quot;LogLevel DEBUG3.&quot;  First
</span><br>
<span class="quotelev2">&gt;&gt; from an scp invocation and then from mpirun invocation.  They both
</span><br>
<span class="quotelev2">&gt;&gt; say
</span><br>
<span class="quotelev2">&gt;&gt;    debug1: Authentication succeeded (publickey).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From mpirun invocation, I see a line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_jobid 3344891904 -mca orte_ess_vpid 1 -mca orte_ess_num_procs
</span><br>
<span class="quotelev2">&gt;&gt;    2 --hnp-uri &quot;3344891904.0;tcp://10.194.95.239:54256&quot;
</span><br>
<span class="quotelev2">&gt;&gt; The IP address at the end of the line is indeed that of machine B.
</span><br>
<span class="quotelev2">&gt;&gt; After that there was hanging and I controlled-C out of it, which
</span><br>
<span class="quotelev2">&gt;&gt; gave me more lines.  But the lines after
</span><br>
<span class="quotelev2">&gt;&gt;    debug1: Sending command:  orted bla bla bla
</span><br>
<span class="quotelev2">&gt;&gt; doesn't look good to me.  But, in truth, I have no idea what they
</span><br>
<span class="quotelev2">&gt;&gt; mean.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you could shed some light, I would appreciate it very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/10/11 10:57 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 10.02.2011 um 19:11 schrieb Tena Sakai:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your local machine is Linux like, but the execution hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are Macs? I saw the /Users/tsakai/... in your output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, my environment is entirely linux.  The path to my home
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory on one host (blitzen) has been known as /Users/tsakai,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; despite it is an nfs mount from vixen (which is known to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; itself as /home/tsakai).  For historical reasons, I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; chosen to give a symbolic link named /Users to vixen's /Home,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so that I can use consistent path for both vixen and blitzen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; okay. Sometimes the protection of the home directory must be adjusted too,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as you can do it from the command line this shouldn't be an issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this a private cluster (or at least private interfaces)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It would also be an option to use hostbased authentication,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which will avoid setting any known_hosts file or passphraseless
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh-keys for each user.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, it is not a private cluster.  It is Amazon EC2.  When I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ssh from my local machine (vixen) I use its public interface,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but to address from one amazon cluster node to the other I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use nodes' private dns names: domU-12-31-39-07-35-21 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; domU-12-31-39-06-74-E2.  Both public and private dns names
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change from a launch to another.  I am using passphrasesless
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh-keys for authentication in all cases, i.e., from vixen to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Amazon node A, from amazon node A to amazon node B, and from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Amazon node B back to A.  (Please see my initail post.  There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a session dialogue for this.)  They all work without authen-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tication dialogue, except a brief initial dialogue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   The authenticity of host 'domu-xx-xx-xx-xx-xx-x (10.xx.xx.xx)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   can't be established.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Are you sure you want to continue connecting (yes/no)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to which I say &quot;yes.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I am unclear with what you mean by &quot;hostbased authentication&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doesn't that mean with password?  If so, it is not an option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No. It's convenient inside a private cluster as it won't fill each users'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; known_hosts file and you don't need to create any ssh-keys. But when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname changes every time it might also create new hostkeys. It uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostkeys (private and public), this way it works for all users. Just for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could look into it later.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Can you try to use a command when connecting from A to B? E.g. ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `domU-12-31-39-06-74-E2 ls`. Is this working too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - What about putting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LogLevel DEBUG3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In your ~/.ssh/config. Maybe we can see what he's trying to negotiate before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it fails in verbose mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/10/11 2:27 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your local machine is Linux like, but the execution hosts are Macs? I saw
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Users/tsakai/... in your output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a) executing a command on them is also working, e.g.: ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; domU-12-31-39-07-35-21 ls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 10.02.2011 um 07:08 schrieb Tena Sakai:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have made a bit of progress(?)...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I made a config file in my .ssh directory on the cloud.  It looks like:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   # machine A
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Host domU-12-31-39-07-35-21.compute-1.internal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is just an abbreviation or nickname above. To use the specified
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; settings,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it's necessary to specify exactly this name. When the settings are the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anyway for all machines, you can use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   BatchMode yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instead.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this a private cluster (or at least private interfaces)? It would also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an option to use hostbased authentication, which will avoid setting any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; known_hosts file or passphraseless ssh-keys for each user.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   HostName domU-12-31-39-07-35-21
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   ChallengeResponseAuthentication no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   # machine B
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Host domU-12-31-39-06-74-E2.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   HostName domU-12-31-39-06-74-E2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   ChallengeResponseAuthentication no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This file exists on both machine A and machine B.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now When I issue mpirun command as below:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-06-74-E2 ~]$ mpirun -app app.ac2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It hungs.  I control-C out of it and I get:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
-------------------------------------------------------------------------&gt;&gt;&gt;&gt;&gt;&gt;
<br>
-
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
-------------------------------------------------------------------------&gt;&gt;&gt;&gt;&gt;&gt;
<br>
-
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
-------------------------------------------------------------------------&gt;&gt;&gt;&gt;&gt;&gt;
<br>
-
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
-------------------------------------------------------------------------&gt;&gt;&gt;&gt;&gt;&gt;
<br>
-
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       domU-12-31-39-07-35-21.compute-1.internal - daemon did not report
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am I making progress?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does this mean I am past authentication and something else is the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does someone have an example .ssh/config file I can look at?  There are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; many keyword-argument paris for this config file and I would like to look
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some very basic one that works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 2/9/11 7:52 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have an app.ac1 file like below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_vixen local]$ cat app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program I run is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#185;s the program fib.R:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [ tsakai_at_vixen local]$ cat fib.R
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       # fib() computes, given index n, fibonacci number iteratively
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       # here's the first dozen sequence (indexed from 0..11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       # 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   fib &lt;- function( n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           a &lt;- 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           b &lt;- 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           for ( i in 1:n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                t &lt;- b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                b &lt;- a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                a &lt;- a + t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   arg &lt;- commandArgs( TRUE )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   myHost &lt;- system( 'hostname', intern=TRUE )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   cat( fib(arg), myHost, '\n' )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It reads an argument from command line and produces a fibonacci number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; corresponds to that index, followed by the machine name.  Pretty simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#185;s the run output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_vixen local]$ mpirun -app app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   5 vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   8 vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   13 blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   21 blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is exactly what I expect.  So far so good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I want to run the same thing on cloud.  I launch 2 instances of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; virtual machine, to which I get to by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_vixen local]$ ssh &#173;A &#173;I ~/.ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; machine-instance-A-public-dns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I am on machine A:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B without
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; password authentication,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; without using password
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)' can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; be established.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   RSA key fingerprint is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Are you sure you want to continue connecting (yes/no)? yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; known hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Connection to domU-12-31-39-00-D1-F2 closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Connection to domU-12-31-39-0C-C8-01 closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As you can see, neither machine uses password for authentication; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; public/private key pairs.  There is no problem (that I can see) for ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; invocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from one machine to the other.  This is so because I have a copy of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; public
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; key
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and a copy of private key on each instance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The app.ac file is identical, except the node names:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#185;s what happens with mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   tsakai_at_domu-12-31-39-0c-c8-01's password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Permission denied, please try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mpirun (or somebody else?) asks me password, which I don&#185;t have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I end up typing control-C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here&#185;s my question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; How can I get past authentication by mpirun where there is no password?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would appreciate your help/insight greatly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; &lt;session4Reuti.text&gt;_______________________________________________
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15563.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15562.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
