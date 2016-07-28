<?
$subject_val = "[OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 18:33:57 2011" -->
<!-- isoreceived="20110215233357" -->
<!-- sent="Tue, 15 Feb 2011 15:33:47 -0800" -->
<!-- isosent="20110215233347" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="C9804C1C.E605%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] This must be ssh problem, but I can't figure out what it is...<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 18:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to reproduce what I was able to show last Friday on Amazon
<br>
EC2 instances, but I am having a problem.  What I was able to show last
<br>
Friday as root was with this command:
<br>
&nbsp;&nbsp;mpirun &#150;app app.ac
<br>
with app.ac being:
<br>
&nbsp;&nbsp;-H dns-entry-A &#150;np 1 (linux command)
<br>
&nbsp;&nbsp;-H dns-entry-A &#150;np 1 (linux command)
<br>
&nbsp;&nbsp;-H dns-entry-B &#150;np 1 (linux command)
<br>
&nbsp;&nbsp;-H dns-entry-B &#150;np 1 (linux command)
<br>
<p>Here&#146;s the config file in root&#146;s .ssh directory:
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /root/.ssh/.derobee/.kagi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
<p>Yesterday and today I can&#146;t get this to work.  I made the last part of app.ac
<br>
file simpler (it now says /bin/hostname).  Below is the session:
<br>
<p>&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # I am on instance A, host name for inst A is:
<br>
&nbsp;&nbsp;-bash-3.2# hostname
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# nslookup domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: domU-12-31-39-09-CD-C2.compute-1.internal
<br>
&nbsp;&nbsp;Address: 10.210.210.48
<br>
<p>&nbsp;&nbsp;-bash-3.2# cd .ssh
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# cat config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /root/.ssh/.derobee/.kagi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# ll config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 103 Feb 15 17:18 config
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# chmod 600 config
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # show I can go to inst B without password/passphrase
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# ssh domU-12-31-39-09-E6-71.compute-1.internal
<br>
&nbsp;&nbsp;Last login: Tue Feb 15 17:18:46 2011 from 10.210.210.48
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# hostname
<br>
&nbsp;&nbsp;domU-12-31-39-09-E6-71
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# nslookup `hostname`
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: domU-12-31-39-09-E6-71.compute-1.internal
<br>
&nbsp;&nbsp;Address: 10.210.233.123
<br>
<p>&nbsp;&nbsp;-bash-3.2# # and back to inst A is also no problem
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# ssh domU-12-31-39-09-CD-C2.compute-1.internal
<br>
&nbsp;&nbsp;Last login: Tue Feb 15 17:36:19 2011 from 63.193.205.1
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# hostname
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # log out twice to go back to inst A
<br>
&nbsp;&nbsp;-bash-3.2# exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-09-CD-C2.compute-1.internal closed.
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-09-E6-71.compute-1.internal closed.
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# hostname
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# cd ..
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# pwd
<br>
&nbsp;&nbsp;/root
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# ll
<br>
&nbsp;&nbsp;total 8
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 260 Feb 15 17:24 app.ac
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 130 Feb 15 17:34 app.ac2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# cat app.ac
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # when there is a remote machine (bottome 2 lines) it hangs
<br>
&nbsp;&nbsp;-bash-3.2# mpirun -app app.ac
<br>
&nbsp;&nbsp;mpirun: killing job...
<br>
<p>&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
&nbsp;&nbsp;below. Additional manual cleanup may be required - please refer to
<br>
&nbsp;&nbsp;the &quot;orte-clean&quot; tool for assistance.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-09-E6-71.compute-1.internal - daemon did not report back when launched
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# cat app.ac2
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # when there is no remote machine, then mpirun works:
<br>
&nbsp;&nbsp;-bash-3.2# mpirun -app app.ac2
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# hostname
<br>
&nbsp;&nbsp;domU-12-31-39-09-CD-C2
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # this gotta be ssh problem....
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# # show no firewall is used
<br>
&nbsp;&nbsp;-bash-3.2# iptables --list
<br>
&nbsp;&nbsp;Chain INPUT (policy ACCEPT)
<br>
&nbsp;&nbsp;&nbsp;target     prot opt source               destination
<br>
<p>&nbsp;&nbsp;Chain FORWARD (policy ACCEPT)
<br>
&nbsp;&nbsp;target     prot opt source               destination
<br>
<p>&nbsp;&nbsp;Chain OUTPUT (policy ACCEPT)
<br>
&nbsp;&nbsp;target     prot opt source               destination
<br>
&nbsp;&nbsp;-bash-3.2#
<br>
&nbsp;&nbsp;-bash-3.2# exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;[tsakai_at_vixen ec2]$
<br>
<p>Would someone please point out what I am doing wrong?
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15624.php">Barnet Wagman: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15622.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
