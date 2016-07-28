<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 13:11:38 2011" -->
<!-- isoreceived="20110210181138" -->
<!-- sent="Thu, 10 Feb 2011 10:11:33 -0800" -->
<!-- isosent="20110210181133" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C9796901.E460%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="66E70430-307D-4D72-81FD-C3E051FE73FC_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2011-02-10 13:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15554.php">swagat mishra: "[OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p><span class="quotelev1">&gt; your local machine is Linux like, but the execution hosts
</span><br>
<span class="quotelev1">&gt; are Macs? I saw the /Users/tsakai/... in your output.
</span><br>
<p>No, my environment is entirely linux.  The path to my home
<br>
directory on one host (blitzen) has been known as /Users/tsakai,
<br>
despite it is an nfs mount from vixen (which is known to
<br>
itself as /home/tsakai).  For historical reasons, I have
<br>
chosen to give a symbolic link named /Users to vixen's /Home,
<br>
so that I can use consistent path for both vixen and blitzen.
<br>
<p><span class="quotelev1">&gt; Is this a private cluster (or at least private interfaces)?
</span><br>
<span class="quotelev1">&gt; It would also be an option to use hostbased authentication,
</span><br>
<span class="quotelev1">&gt; which will avoid setting any known_hosts file or passphraseless
</span><br>
<span class="quotelev1">&gt; ssh-keys for each user.
</span><br>
<p>No, it is not a private cluster.  It is Amazon EC2.  When I
<br>
Ssh from my local machine (vixen) I use its public interface,
<br>
but to address from one amazon cluster node to the other I
<br>
use nodes' private dns names: domU-12-31-39-07-35-21 and
<br>
domU-12-31-39-06-74-E2.  Both public and private dns names
<br>
change from a launch to another.  I am using passphrasesless
<br>
ssh-keys for authentication in all cases, i.e., from vixen to
<br>
Amazon node A, from amazon node A to amazon node B, and from
<br>
Amazon node B back to A.  (Please see my initail post.  There
<br>
is a session dialogue for this.)  They all work without authen-
<br>
tication dialogue, except a brief initial dialogue:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The authenticity of host 'domu-xx-xx-xx-xx-xx-x (10.xx.xx.xx)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;can't be established.
<br>
&#160;&#160;&#160;&#160;RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
<br>
&#160;&#160;&#160;&#160;Are you sure you want to continue connecting (yes/no)?
<br>
to which I say &quot;yes.&quot;
<br>
But I am unclear with what you mean by &quot;hostbased authentication&quot;?
<br>
Doesn't that mean with password?  If so, it is not an option.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/10/11 2:27 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; your local machine is Linux like, but the execution hosts are Macs? I saw the
</span><br>
<span class="quotelev1">&gt; /Users/tsakai/... in your output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) executing a command on them is also working, e.g.: ssh
</span><br>
<span class="quotelev1">&gt; domU-12-31-39-07-35-21 ls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 10.02.2011 um 07:08 schrieb Tena Sakai:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have made a bit of progress(?)...
</span><br>
<span class="quotelev2">&gt;&gt; I made a config file in my .ssh directory on the cloud.  It looks like:
</span><br>
<span class="quotelev2">&gt;&gt;     # machine A
</span><br>
<span class="quotelev2">&gt;&gt;     Host domU-12-31-39-07-35-21.compute-1.internal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is just an abbreviation or nickname above. To use the specified settings,
</span><br>
<span class="quotelev1">&gt; it's necessary to specify exactly this name. When the settings are the same
</span><br>
<span class="quotelev1">&gt; anyway for all machines, you can use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host *
</span><br>
<span class="quotelev1">&gt;     IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;     IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;     BatchMode yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a private cluster (or at least private interfaces)? It would also be
</span><br>
<span class="quotelev1">&gt; an option to use hostbased authentication, which will avoid setting any
</span><br>
<span class="quotelev1">&gt; known_hosts file or passphraseless ssh-keys for each user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     HostName domU-12-31-39-07-35-21
</span><br>
<span class="quotelev2">&gt;&gt;     BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;     IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev2">&gt;&gt;     ChallengeResponseAuthentication no
</span><br>
<span class="quotelev2">&gt;&gt;     IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     # machine B
</span><br>
<span class="quotelev2">&gt;&gt;     Host domU-12-31-39-06-74-E2.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;     HostName domU-12-31-39-06-74-E2
</span><br>
<span class="quotelev2">&gt;&gt;     BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;     IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev2">&gt;&gt;     ChallengeResponseAuthentication no
</span><br>
<span class="quotelev2">&gt;&gt;     IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This file exists on both machine A and machine B.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now When I issue mpirun command as below:
</span><br>
<span class="quotelev2">&gt;&gt;     [tsakai_at_domU-12-31-39-06-74-E2 ~]$ mpirun -app app.ac2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It hungs.  I control-C out of it and I get:
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt;     that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt;     below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt;     the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         domU-12-31-39-07-35-21.compute-1.internal - daemon did not report
</span><br>
<span class="quotelev2">&gt;&gt; back when launched
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I making progress?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this mean I am past authentication and something else is the problem?
</span><br>
<span class="quotelev2">&gt;&gt; Does someone have an example .ssh/config file I can look at?  There are so
</span><br>
<span class="quotelev2">&gt;&gt; many keyword-argument paris for this config file and I would like to look at
</span><br>
<span class="quotelev2">&gt;&gt; some very basic one that works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/9/11 7:52 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an app.ac1 file like below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_vixen local]$ cat app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program I run is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#185;s the program fib.R:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [ tsakai_at_vixen local]$ cat fib.R
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         # fib() computes, given index n, fibonacci number iteratively
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         # here's the first dozen sequence (indexed from 0..11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         # 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fib &lt;- function( n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             a &lt;- 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             b &lt;- 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for ( i in 1:n ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  t &lt;- b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  b &lt;- a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  a &lt;- a + t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     arg &lt;- commandArgs( TRUE )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     myHost &lt;- system( 'hostname', intern=TRUE )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cat( fib(arg), myHost, '\n' )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It reads an argument from command line and produces a fibonacci number that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corresponds to that index, followed by the machine name.  Pretty simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#185;s the run output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_vixen local]$ mpirun -app app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     5 vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     8 vixen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     13 blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     21 blitzen.egcrc.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which is exactly what I expect.  So far so good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I want to run the same thing on cloud.  I launch 2 instances of the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual machine, to which I get to by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_vixen local]$ ssh &#173;A &#173;I ~/.ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine-instance-A-public-dns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I am on machine A:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password authentication,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without using password
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)' can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be established.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Are you sure you want to continue connecting (yes/no)? yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; known hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Connection to domU-12-31-39-00-D1-F2 closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Connection to domU-12-31-39-0C-C8-01 closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can see, neither machine uses password for authentication; it uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; public/private key pairs.  There is no problem (that I can see) for ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from one machine to the other.  This is so because I have a copy of public
</span><br>
<span class="quotelev3">&gt;&gt;&gt; key
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a copy of private key on each instance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The app.ac file is identical, except the node names:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#185;s what happens with mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     tsakai_at_domu-12-31-39-0c-c8-01's password:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Permission denied, please try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mpirun (or somebody else?) asks me password, which I don&#185;t have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I end up typing control-C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#185;s my question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I get past authentication by mpirun where there is no password?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate your help/insight greatly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15554.php">swagat mishra: "[OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
