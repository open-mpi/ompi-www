<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 13:20:17 2011" -->
<!-- isoreceived="20110210182017" -->
<!-- sent="Thu, 10 Feb 2011 10:20:12 -0800" -->
<!-- isosent="20110210182012" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C9796B08.E464%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="AANLkTi=FdW5Tbij3WcQNA0eASsyXGxWSL5MTYEAEu6Eo_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-02-10 13:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15555.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15548.php">David Zhang: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David,
<br>
<p>Thank you for your reply.
<br>
<p><span class="quotelev1">&gt; just to be sure:
</span><br>
<span class="quotelev1">&gt; having the ssh public keys in other computer's authorized_key file.
</span><br>
<span class="quotelev1">&gt; ssh keys generated without passphrases
</span><br>
<p>Yes, as evidenced by my session dialogue, invoking ssh manually is
<br>
not a problem.  I cannot use mpirun command (which I believe
<br>
uses ssh as an infrastructure) in the same setting, i.e., with  private
<br>
key and public key, the latter in the destination&#146;s authorized_key
<br>
file).
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/9/11 10:58 PM, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p>I don't really know what the problem is.  It seems like you're doing things correctly.  I'm almost sure you've done all of the following, but just to be sure:
<br>
having the ssh public keys in other computer's authorized_key file.
<br>
ssh keys generated without passphrases
<br>
<p>On Wed, Feb 9, 2011 at 10:08 PM, Tena Sakai &lt;tsakai_at_[hidden]&gt; wrote:
<br>
Hi,
<br>
<p>I have made a bit of progress(?)...
<br>
I made a config file in my .ssh directory on the cloud.  It looks like:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# machine A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Host domU-12-31-39-07-35-21.compute-1.internal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HostName domU-12-31-39-07-35-21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ChallengeResponseAuthentication no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# machine B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Host domU-12-31-39-06-74-E2.compute-1.internal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HostName domU-12-31-39-06-74-E2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ChallengeResponseAuthentication no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
<p>This file exists on both machine A and machine B.
<br>
<p>Now When I issue mpirun command as below:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-06-74-E2 ~]$ mpirun -app app.ac2
<br>
<p>It hungs.  I control-C out of it and I get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: killing job...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
&nbsp;&nbsp;&nbsp;&nbsp;below. Additional manual cleanup may be required - please refer to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the &quot;orte-clean&quot; tool for assistance.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-07-35-21.compute-1.internal - daemon did not report back when launched
<br>
<p>Am I making progress?
<br>
<p>Does this mean I am past authentication and something else is the problem?
<br>
Does someone have an example .ssh/config file I can look at?  There are so
<br>
many keyword-argument paris for this config file and I would like to look at
<br>
some very basic one that works.
<br>
<p><p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden] &lt;<a href="http://tsakai&#64;gallo.ucsf.edu">http://tsakai&#64;gallo.ucsf.edu</a>&gt;
<br>
<p>On 2/9/11 7:52 PM, &quot;Tena Sakai&quot; &lt;tsakai_at_[hidden] &lt;<a href="http://tsakai&#64;gallo.ucsf.edu">http://tsakai&#64;gallo.ucsf.edu</a>&gt; &gt; wrote:
<br>
<p>Hi
<br>
<p>I have an app.ac1 file like below:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ cat app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H vixen.egcrc.org &lt;<a href="http://vixen.egcrc.org">http://vixen.egcrc.org</a>&gt;    -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H vixen.egcrc.org &lt;<a href="http://vixen.egcrc.org">http://vixen.egcrc.org</a>&gt;    -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H blitzen.egcrc.org &lt;<a href="http://blitzen.egcrc.org">http://blitzen.egcrc.org</a>&gt;  -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H blitzen.egcrc.org &lt;<a href="http://blitzen.egcrc.org">http://blitzen.egcrc.org</a>&gt;  -np 1 Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R 8
<br>
<p>The program I run is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rscript /Users/tsakai/Notes/R/parallel/Rmpi/local/fib.R x
<br>
Where x is [5..8].  The machines vixen and blitzen each run 2 runs.
<br>
<p>Here&#146;s the program fib.R:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[ tsakai_at_vixen local]$ cat fib.R
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# fib() computes, given index n, fibonacci number iteratively
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# here's the first dozen sequence (indexed from 0..11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# 1, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fib &lt;- function( n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i in 1:n ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t &lt;- b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b &lt;- a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a &lt;- a + t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;arg &lt;- commandArgs( TRUE )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myHost &lt;- system( 'hostname', intern=TRUE )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cat( fib(arg), myHost, '\n' )
<br>
<p>It reads an argument from command line and produces a fibonacci number that
<br>
corresponds to that index, followed by the machine name.  Pretty simple stuff.
<br>
<p>Here&#146;s the run output:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ mpirun -app app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;5 vixen.egcrc.org &lt;<a href="http://vixen.egcrc.org">http://vixen.egcrc.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8 vixen.egcrc.org &lt;<a href="http://vixen.egcrc.org">http://vixen.egcrc.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;13 blitzen.egcrc.org &lt;<a href="http://blitzen.egcrc.org">http://blitzen.egcrc.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;21 blitzen.egcrc.org &lt;<a href="http://blitzen.egcrc.org">http://blitzen.egcrc.org</a>&gt;
<br>
<p>Which is exactly what I expect.  So far so good.
<br>
<p>Now I want to run the same thing on cloud.  I launch 2 instances of the same
<br>
virtual machine, to which I get to by:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_vixen local]$ ssh &#150;A &#150;I ~/.ssh/tsakai machine-instance-A-public-dns
<br>
<p>Now I am on machine A:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # and I can go to machine B without password authentication,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # i.e., use public/private key
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ ssh -i .ssh/tsakai domU-12-31-39-0C-C8-01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Last login: Wed Feb  9 20:51:48 2011 from 10.254.214.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # I am now on machine B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-0C-C8-01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ # now show I can get to machine A without using password
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ ssh -i .ssh/tsakai domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The authenticity of host 'domu-12-31-39-00-d1-f2 (10.254.214.4)' can't be established.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;RSA key fingerprint is e3:ad:75:b1:a4:63:7f:0f:c4:0b:10:71:f3:2f:21:81.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Warning: Permanently added 'domu-12-31-39-00-d1-f2' (RSA) to the list of known hosts.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Last login: Wed Feb  9 20:49:34 2011 from 10.215.203.239
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Connection to domU-12-31-39-00-D1-F2 closed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-0C-C8-01 ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Connection to domU-12-31-39-0C-C8-01 closed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ # back at machine A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-00-D1-F2
<br>
<p>As you can see, neither machine uses password for authentication; it uses
<br>
public/private key pairs.  There is no problem (that I can see) for ssh invocation
<br>
from one machine to the other.  This is so because I have a copy of public key
<br>
and a copy of private key on each instance.
<br>
<p>The app.ac &lt;<a href="http://app.ac">http://app.ac</a>&gt;  file is identical, except the node names:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ cat app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-00-D1-F2 -np 1 Rscript /home/tsakai/fib.R 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H domU-12-31-39-0C-C8-01 -np 1 Rscript /home/tsakai/fib.R 8
<br>
<p>Here&#146;s what happens with mpirun:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$ mpirun -app app.ac1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tsakai_at_domu-12-31-39-0c-c8-01's password:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Permission denied, please try again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tsakai_at_domu-12-31-39-0c-c8-01's password: mpirun: killing job...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_domU-12-31-39-00-D1-F2 ~]$
<br>
<p>Mpirun (or somebody else?) asks me password, which I don&#146;t have.
<br>
I end up typing control-C.
<br>
<p>Here&#146;s my question:
<br>
How can I get past authentication by mpirun where there is no password?
<br>
<p>I would appreciate your help/insight greatly.
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden] &lt;<a href="http://tsakai&#64;gallo.ucsf.edu">http://tsakai&#64;gallo.ucsf.edu</a>&gt;
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15555.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15548.php">David Zhang: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
