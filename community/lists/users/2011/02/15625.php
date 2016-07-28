<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 20:09:48 2011" -->
<!-- isoreceived="20110216010948" -->
<!-- sent="Tue, 15 Feb 2011 20:09:38 -0500" -->
<!-- isosent="20110216010938" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="4D5B23D2.3070309_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C9804C1C.E605%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 20:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Tena Sakai: "[OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to reproduce what I was able to show last Friday on Amazon
</span><br>
<span class="quotelev1">&gt; EC2 instances, but I am having a problem.  What I was able to show last
</span><br>
<span class="quotelev1">&gt; Friday as root was with this command:
</span><br>
<span class="quotelev1">&gt;   mpirun &#150;app app.ac
</span><br>
<span class="quotelev1">&gt; with app.ac being:
</span><br>
<span class="quotelev1">&gt;   -H dns-entry-A &#150;np 1 (linux command)
</span><br>
<span class="quotelev1">&gt;   -H dns-entry-A &#150;np 1 (linux command)
</span><br>
<span class="quotelev1">&gt;   -H dns-entry-B &#150;np 1 (linux command)
</span><br>
<span class="quotelev1">&gt;   -H dns-entry-B &#150;np 1 (linux command)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#146;s the config file in root&#146;s .ssh directory:
</span><br>
<span class="quotelev1">&gt;   Host *
</span><br>
<span class="quotelev1">&gt;         IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev1">&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;         BatchMode yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yesterday and today I can&#146;t get this to work.  I made the last part of 
</span><br>
<span class="quotelev1">&gt; app.ac
</span><br>
<span class="quotelev1">&gt; file simpler (it now says /bin/hostname).  Below is the session:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # I am on instance A, host name for inst A is:
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# nslookup domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev1">&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev1">&gt;   Name: domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Address: 10.210.210.48
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# cd .ssh
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# cat config
</span><br>
<span class="quotelev1">&gt;   Host *
</span><br>
<span class="quotelev1">&gt;           IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev1">&gt;           IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;           BatchMode yes
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# ll config
</span><br>
<span class="quotelev1">&gt;   -rw-r--r-- 1 root root 103 Feb 15 17:18 config
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# chmod 600 config
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # show I can go to inst B without password/passphrase
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# ssh domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Last login: Tue Feb 15 17:18:46 2011 from 10.210.210.48
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-E6-71
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# nslookup `hostname`
</span><br>
<span class="quotelev1">&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev1">&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev1">&gt;   Name: domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Address: 10.210.233.123
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # and back to inst A is also no problem
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# ssh domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Last login: Tue Feb 15 17:36:19 2011 from 63.193.205.1
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # log out twice to go back to inst A
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   Connection to domU-12-31-39-09-CD-C2.compute-1.internal closed.
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   Connection to domU-12-31-39-09-E6-71.compute-1.internal closed.
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# cd ..
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# pwd
</span><br>
<span class="quotelev1">&gt;   /root
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# ll
</span><br>
<span class="quotelev1">&gt;   total 8
</span><br>
<span class="quotelev1">&gt;   -rw-r--r-- 1 root root 260 Feb 15 17:24 app.ac
</span><br>
<span class="quotelev1">&gt;   -rw-r--r-- 1 root root 130 Feb 15 17:34 app.ac2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# cat app.ac
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # when there is a remote machine (bottome 2 lines) it hangs
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# mpirun -app app.ac
</span><br>
<span class="quotelev1">&gt;   mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;   that caused that situation.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         domU-12-31-39-09-E6-71.compute-1.internal - daemon did not 
</span><br>
<span class="quotelev1">&gt; report back when launched
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# cat app.ac2
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # when there is no remote machine, then mpirun works:
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# mpirun -app app.ac2
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # this gotta be ssh problem....
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# # show no firewall is used
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# iptables --list
</span><br>
<span class="quotelev1">&gt;   Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt;    target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt;   -bash-3.2#
</span><br>
<span class="quotelev1">&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would someone please point out what I am doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hi Tena
<br>
<p>Nothing wrong that I can see.
<br>
Just another couple of suggestions,
<br>
based on somewhat vague possibilities.
<br>
<p>A slight difference is that on vixen and dashen you ran the
<br>
MPI hostname tests as a regular user, not as root, right?
<br>
Not sure if this will make much of a difference,
<br>
but it may be worth trying to run it as a regular user in EC2 also.
<br>
I general most people avoid running user applications (MPI programs 
<br>
included) as root.
<br>
Mostly for safety, but I wonder if there are any
<br>
implications in the 'rootly powers'
<br>
regarding the under-the-hood processes that OpenMPI
<br>
launches along with the actual user programs.
<br>
<p>This may make no difference either,
<br>
but you could do a 'service iptables status',
<br>
to see if the service is running, even though there are
<br>
no explicit iptable rules (as per your email).
<br>
If the service is not running you get
<br>
'Firewall is stopped.' (in CentOS).
<br>
I *think* 'iptables --list' loads the iptables module into the
<br>
kernel, as a side effect, whereas the service command does not.
<br>
So, it may be cleaner (safer?) to use the service version
<br>
instead of 'iptables --list'.
<br>
I don't know if it will make any difference,
<br>
but just in case, if the service is running,
<br>
why not do 'service iptables stop',
<br>
and perhaps also 'chkconfig iptables off' to be completely
<br>
free of iptables?
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>In reply to:</strong> <a href="15623.php">Tena Sakai: "[OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
