<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 01:58:33 2011" -->
<!-- isoreceived="20110210065833" -->
<!-- sent="Wed, 9 Feb 2011 22:58:07 -0800" -->
<!-- isosent="20110210065807" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="AANLkTi=FdW5Tbij3WcQNA0eASsyXGxWSL5MTYEAEu6Eo_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C978BF75.E42A%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 01:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't really know what the problem is.  It seems like you're doing things
<br>
correctly.  I'm almost sure you've done all of the following, but just to be
<br>
sure:
<br>
having the ssh public keys in other computer's authorized_key file.
<br>
ssh keys generated without passphrases
<br>
<p>On Wed, Feb 9, 2011 at 10:08 PM, Tena Sakai &lt;tsakai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have made a bit of progress(?)...
</span><br>
<span class="quotelev1">&gt; I made a config file in my .ssh directory on the cloud.  It looks like:
</span><br>
<span class="quotelev1">&gt;     # machine A
</span><br>
<span class="quotelev1">&gt;     Host domU-12-31-39-07-35-21.compute-1.internal
</span><br>
<span class="quotelev1">&gt;     HostName domU-12-31-39-07-35-21
</span><br>
<span class="quotelev1">&gt;     BatchMode yes
</span><br>
<span class="quotelev1">&gt;     IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;     ChallengeResponseAuthentication no
</span><br>
<span class="quotelev1">&gt;     IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # machine B
</span><br>
<span class="quotelev1">&gt;     Host domU-12-31-39-06-74-E2.compute-1.internal
</span><br>
<span class="quotelev1">&gt;     HostName domU-12-31-39-06-74-E2
</span><br>
<span class="quotelev1">&gt;     BatchMode yes
</span><br>
<span class="quotelev1">&gt;     IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;     ChallengeResponseAuthentication no
</span><br>
<span class="quotelev1">&gt;     IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file exists on both machine A and machine B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now When I issue mpirun command as below:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-06-74-E2 ~]$ mpirun -app app.ac2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It hungs.  I control-C out of it and I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;     that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;     below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;     the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         domU-12-31-39-07-35-21.compute-1.internal - daemon did not report
</span><br>
<span class="quotelev1">&gt; back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I making progress?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this mean I am past authentication and something else is the problem?
</span><br>
<span class="quotelev1">&gt; Does someone have an example .ssh/config file I can look at?  There are so
</span><br>
<span class="quotelev1">&gt; many keyword-argument paris for this config file and I would like to look
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; some very basic one that works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/9/11 7:52 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an app.ac1 file like below:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_vixen local]$ cat app.ac1
</span><br>
<span class="quotelev1">&gt;     -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev1">&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
</span><br>
<span class="quotelev1">&gt;     -H vixen.egcrc.org   -np 1 Rscript
</span><br>
<span class="quotelev1">&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
</span><br>
<span class="quotelev1">&gt;     -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev1">&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
</span><br>
<span class="quotelev1">&gt;     -H blitzen.egcrc.org -np 1 Rscript
</span><br>
<span class="quotelev1">&gt; /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program I run is
</span><br>
<span class="quotelev1">&gt;     Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
</span><br>
<span class="quotelev1">&gt; Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s the program fib.R:
</span><br>
<span class="quotelev1">&gt;     [ tsakai_at_vixen local]$ cat fib.R
</span><br>
<span class="quotelev1">&gt;         # fib() computes, given index n, fibonacci number iteratively
</span><br>
<span class="quotelev1">&gt;         # here's the first dozen sequence (indexed from 0..11)
</span><br>
<span class="quotelev1">&gt;         # 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fib &lt;- function( n ) {
</span><br>
<span class="quotelev1">&gt;             a &lt;- 0
</span><br>
<span class="quotelev1">&gt;             b &lt;- 1
</span><br>
<span class="quotelev1">&gt;             for ( i in 1:n ) {
</span><br>
<span class="quotelev1">&gt;                  t &lt;- b
</span><br>
<span class="quotelev1">&gt;                  b &lt;- a
</span><br>
<span class="quotelev1">&gt;                  a &lt;- a + t
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     arg &lt;- commandArgs( TRUE )
</span><br>
<span class="quotelev1">&gt;     myHost &lt;- system( 'hostname', intern=TRUE )
</span><br>
<span class="quotelev1">&gt;     cat( fib(arg), myHost, '\n' )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It reads an argument from command line and produces a fibonacci number that
</span><br>
<span class="quotelev1">&gt; corresponds to that index, followed by the machine name.  Pretty simple
</span><br>
<span class="quotelev1">&gt; stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s the run output:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_vixen local]$ mpirun -app app.ac1
</span><br>
<span class="quotelev1">&gt;     5 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;     8 vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;     13 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;     21 blitzen.egcrc.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is exactly what I expect.  So far so good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I want to run the same thing on cloud.  I launch 2 instances of the
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; virtual machine, to which I get to by:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_vixen local]$ ssh &#150;A &#150;I ~/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt; machine-instance-A-public-dns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I am on machine A:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B without
</span><br>
<span class="quotelev1">&gt; password authentication,
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev1">&gt; domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev1">&gt;     Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;     domU-12-31-39-0C-C8-01
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine A
</span><br>
<span class="quotelev1">&gt; without using password
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai
</span><br>
<span class="quotelev1">&gt; domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;     The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)' can't
</span><br>
<span class="quotelev1">&gt; be established.
</span><br>
<span class="quotelev1">&gt;     RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
</span><br>
<span class="quotelev1">&gt;     Are you sure you want to continue connecting (yes/no)? yes
</span><br>
<span class="quotelev1">&gt;     Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the list
</span><br>
<span class="quotelev1">&gt; of known hosts.
</span><br>
<span class="quotelev1">&gt;     Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
</span><br>
<span class="quotelev1">&gt;     logout
</span><br>
<span class="quotelev1">&gt;     Connection to domU-12-31-39-00-D1-F2 closed.
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
</span><br>
<span class="quotelev1">&gt;     logout
</span><br>
<span class="quotelev1">&gt;     Connection to domU-12-31-39-0C-C8-01 closed.
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;     domU-12-31-39-00-D1-F2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, neither machine uses password for authentication; it uses
</span><br>
<span class="quotelev1">&gt; public/private key pairs.  There is no problem (that I can see) for ssh
</span><br>
<span class="quotelev1">&gt; invocation
</span><br>
<span class="quotelev1">&gt; from one machine to the other.  This is so because I have a copy of public
</span><br>
<span class="quotelev1">&gt; key
</span><br>
<span class="quotelev1">&gt; and a copy of private key on each instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The app.ac file is identical, except the node names:
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
</span><br>
<span class="quotelev1">&gt;     -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
</span><br>
<span class="quotelev1">&gt;     -H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
</span><br>
<span class="quotelev1">&gt;     -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
</span><br>
<span class="quotelev1">&gt;     -H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s what happens with mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
</span><br>
<span class="quotelev1">&gt;     tsakai_at_domu-12-31-39-0c-c8-01's password:
</span><br>
<span class="quotelev1">&gt;     Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt;     tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;     that caused that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [tsakai_at_domU-12-31-39-00-D1-F2 ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpirun (or somebody else?) asks me password, which I don&#146;t have.
</span><br>
<span class="quotelev1">&gt; I end up typing control-C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s my question:
</span><br>
<span class="quotelev1">&gt; How can I get past authentication by mpirun where there is no password?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate your help/insight greatly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15547.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15556.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
