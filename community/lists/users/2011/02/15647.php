<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 00:11:23 2011" -->
<!-- isoreceived="20110218051123" -->
<!-- sent="Thu, 17 Feb 2011 21:11:13 -0800" -->
<!-- isosent="20110218051113" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="C9833E39.E6D9%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="32442C64-196F-4389-A652-552E3B2408EA_at_cisco.com" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 00:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15646.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you for your suggestions.  I followed your steps verbatim.
<br>
Unfortunately, there is a bit of problem.  Here's what I did:
<br>
<p>&nbsp;&nbsp;[tsakai_at_vixen ec2]$ ssh -i $MYKEY
<br>
tsakai_at_[hidden]
<br>
&nbsp;&nbsp;The authenticity of host 'ec2-184-73-62-72.compute-1.amazonaws.com
<br>
(184.73.62.72)' can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is cb:52:71:49:63:c2:52:58:9c:2e:04:46:f7:4e:b9:13.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 21:20:01 2011 from 63.193.205.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$ # this is instance A
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:         172.16.0.23
<br>
&nbsp;&nbsp;Address:        172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name:   ip-10-194-215-32.ec2.internal
<br>
&nbsp;&nbsp;Address: 10.194.215.32
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$ rm -rf $HOME/.ssh
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$ ssh-keygen -t dsa
<br>
&nbsp;&nbsp;Generating public/private dsa key pair.
<br>
&nbsp;&nbsp;Enter file in which to save the key (/home/tsakai/.ssh/id_dsa):
<br>
&nbsp;&nbsp;Created directory '/home/tsakai/.ssh'.
<br>
&nbsp;&nbsp;Enter passphrase (empty for no passphrase):
<br>
&nbsp;&nbsp;Enter same passphrase again:
<br>
&nbsp;&nbsp;Your identification has been saved in /home/tsakai/.ssh/id_dsa.
<br>
&nbsp;&nbsp;Your public key has been saved in /home/tsakai/.ssh/id_dsa.pub.
<br>
&nbsp;&nbsp;The key fingerprint is:
<br>
&nbsp;&nbsp;54:eb:bd:e7:f2:52:24:49:94:7b:7a:9e:e4:b7:0b:04 tsakai_at_ip-10-194-215-32
<br>
&nbsp;&nbsp;The key's randomart image is:
<br>
&nbsp;&nbsp;+--[ DSA 1024]----+
<br>
&nbsp;&nbsp;|          ....   |
<br>
&nbsp;&nbsp;|         . .o    |
<br>
&nbsp;&nbsp;|        . .E o   |
<br>
&nbsp;&nbsp;|       . . .= o  |
<br>
&nbsp;&nbsp;|        S . .*   |
<br>
&nbsp;&nbsp;|            o.+  |
<br>
&nbsp;&nbsp;|            .B.. |
<br>
&nbsp;&nbsp;|            oo= .|
<br>
&nbsp;&nbsp;|             +o+o|
<br>
&nbsp;&nbsp;+-----------------+
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 ~]$ cd $HOME/.ssh
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$ ll
<br>
&nbsp;&nbsp;total 8
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 668 Feb 18 02:15 id_dsa
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 613 Feb 18 02:15 id_dsa.pub
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$ cp id_dsa.pub authorized_keys
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$ chmod 644 authorized_keys
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$ ll
<br>
&nbsp;&nbsp;total 12
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 613 Feb 18 02:16 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 668 Feb 18 02:15 id_dsa
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 613 Feb 18 02:15 id_dsa.pub
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$
<br>
<p>Now the next step is to go to instance B via ssh.  This doesn't
<br>
work for me because the id_dsa on instance A at this point is
<br>
not the counterpart (id_dsa.pub) that's kept on instance B.  Here
<br>
is what happens:
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-194-215-32 .ssh]$ ssh ip-10-196-61-219.ec2.internal
<br>
&nbsp;&nbsp;The authenticity of host 'ip-10-196-61-219.ec2.internal (10.196.61.219)'
<br>
&nbsp;&nbsp;can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is e5:ab:5b:d1:67:2c:ec:7e:33:3c:b8:b3:8a:73:5e:e9.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Warning: Permanently added 'ip-10-196-61-219.ec2.internal,10.196.61.219'
<br>
&nbsp;&nbsp;(RSA) to the list of known hosts.
<br>
&nbsp;&nbsp;Permission denied (publickey).
<br>
<p>I got onto instance B directly from my local machine and did the same
<br>
as what I did on A:
<br>
<p>&nbsp;&nbsp;[tsakai_at_vixen ec2]$ ssh -i $MYKEY
<br>
tsakai_at_[hidden]
<br>
&nbsp;&nbsp;The authenticity of host 'ec2-67-202-49-161.compute-1.amazonaws.com
<br>
(67.202.49.161)' can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is e5:ab:5b:d1:67:2c:ec:7e:33:3c:b8:b3:8a:73:5e:e9.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 21:20:01 2011 from 63.193.205.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$ # this is instance B
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: ip-10-196-61-219.ec2.internal
<br>
&nbsp;&nbsp;Address: 10.196.61.219
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$ rm -rf $HOME/.ssh
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$ ssh-keygen -t dsa
<br>
&nbsp;&nbsp;Generating public/private dsa key pair.
<br>
&nbsp;&nbsp;Enter file in which to save the key (/home/tsakai/.ssh/id_dsa):
<br>
&nbsp;&nbsp;Created directory '/home/tsakai/.ssh'.
<br>
&nbsp;&nbsp;Enter passphrase (empty for no passphrase):
<br>
&nbsp;&nbsp;Enter same passphrase again:
<br>
&nbsp;&nbsp;Your identification has been saved in /home/tsakai/.ssh/id_dsa.
<br>
&nbsp;&nbsp;Your public key has been saved in /home/tsakai/.ssh/id_dsa.pub.
<br>
&nbsp;&nbsp;The key fingerprint is:
<br>
&nbsp;&nbsp;dd:c1:73:97:50:eb:d1:ad:84:94:0f:98:51:b2:8d:4a tsakai_at_ip-10-196-61-219
<br>
&nbsp;&nbsp;The key's randomart image is:
<br>
&nbsp;&nbsp;+--[ DSA 1024]----+
<br>
&nbsp;&nbsp;|          o=oo.. |
<br>
&nbsp;&nbsp;|          oBo.. =|
<br>
&nbsp;&nbsp;|        E o *oo++|
<br>
&nbsp;&nbsp;|       . o . =oo.|
<br>
&nbsp;&nbsp;|        S . . .. |
<br>
&nbsp;&nbsp;|                 |
<br>
&nbsp;&nbsp;|                 |
<br>
&nbsp;&nbsp;|                 |
<br>
&nbsp;&nbsp;|                 |
<br>
&nbsp;&nbsp;+-----------------+
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$
<br>
<p>Now comes another failure from the instance B:
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$ scp
<br>
@ip-10-194-215-32.ec2.internal:.ssh/id_rsa\* .
<br>
&nbsp;&nbsp;The authenticity of host 'ip-10-194-215-32.ec2.internal (10.194.215.32)'
<br>
&nbsp;&nbsp;can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is cb:52:71:49:63:c2:52:58:9c:2e:04:46:f7:4e:b9:13.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)?
<br>
&nbsp;&nbsp;Host key verification failed.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-196-61-219 ~]$
<br>
<p>I have seen these problems many times over last few days and I have
<br>
worked it out.  The failure occurs because, in order to do silent
<br>
authentication, it wants to see an indentity of destination machine
<br>
in known_hosts file in .ssh directory.  One way to get around this
<br>
is to use -i flag (which requires private key) of ssh once.  If that
<br>
is done from both directions, then ssh can do authentication silently.
<br>
Essentially, I had done exactly the same thing as your instruction
<br>
indicate.  Only I didn't use dsa, I used rsa.  I don't think that is
<br>
a roadblock, is it?
<br>
<p>&nbsp;&nbsp;[tsakai_at_vixen ec2]$ ssh -i $MYKEY
<br>
tsakai_at_[hidden]
<br>
&nbsp;&nbsp;The authenticity of host 'ec2-50-17-48-206.compute-1.amazonaws.com
<br>
(50.17.48.206)' can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is b4:4b:e3:74:42:d9:9c:82:21:0e:7d:d6:e3:13:4b:dd.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 21:20:01 2011 from 63.193.205.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: ip-10-110-10-137.ec2.internal
<br>
&nbsp;&nbsp;Address: 10.110.10.137
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ cd .ssh
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ll
<br>
&nbsp;&nbsp;total 12
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 config
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # there is no known_hosts file, which we
<br>
need.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # to create it, we need to hide config
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mv config __config
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ssh -i tsakai
<br>
tsakai_at_ip-10-110-10-137.ec2.internal
<br>
&nbsp;&nbsp;The authenticity of host 'ip-10-110-10-137.ec2.internal (10.110.10.137)'
<br>
can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is b4:4b:e3:74:42:d9:9c:82:21:0e:7d:d6:e3:13:4b:dd.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Warning: Permanently added 'ip-10-110-10-137.ec2.internal,10.110.10.137'
<br>
(RSA) to the list of known hosts.
<br>
&nbsp;&nbsp;Last login: Fri Feb 18 04:20:29 2011 from 63.193.205.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ cd .ssh
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 __config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 425 Feb 18 04:22 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # I ssh'ed to the same instance
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ who
<br>
&nbsp;&nbsp;tsakai   pts/0        2011-02-18 04:20 (63.193.205.1)
<br>
&nbsp;&nbsp;tsakai   pts/1        2011-02-18 04:22 (ip-10-110-10-137.ec2.internal)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to ip-10-110-10-137.ec2.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ who
<br>
&nbsp;&nbsp;tsakai   pts/0        2011-02-18 04:20 (63.193.205.1)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 __config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 425 Feb 18 04:22 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # known_hosts file got made
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # what's in it?
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ wc known_hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1   3 425 known_hosts
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ cat known_hosts
<br>
&nbsp;&nbsp;ip-10-110-10-137.ec2.internal,10.110.10.137 ssh-rsa
<br>
AAAAB3NzaC1yc2EAAAABIwAAAQEAyEMhrftyAg637XzteErroLE2Uf2PgrPz7S/Hs0Tyedk9ooWO
<br>
iIzlpTq3fEGXeZIZ4sMMiwuFQuF60TSkCUKSx9sZi8ce2Tvck1uTNrki/rlP11gY/aJ1oFW9Gg7A
<br>
LT2B8xPFThoSZntjMXYwRxxHwqVza0ELCxMV+kk6bdGeTPvFjl3tnyKEQJsdy8/HZy8v2jvFaWRq
<br>
Pzc6JIACEdkZ2AArN8Xh33yHFlOQ6XGwf86ZIqwWrbBH4Cvo6058rs9VDjzdBKcdM1D7K5ea5lF1
<br>
QGGEzfsUl7dVq6Z1UWnZoI9bqc1Mw+tpW08T2VCm0Dhz7V/UUHRtVGljQmaucpx9aw==
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # now go to instance B
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ssh -i tsakai
<br>
tsakai_at_domU-12-31-39-16-C6-70.compute-1.internal
<br>
&nbsp;&nbsp;The authenticity of host 'domu-12-31-39-16-c6-70.compute-1.internal
<br>
(10.96.197.154)' can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is 2e:8b:83:39:02:9f:48:d6:fd:49:2f:82:96:0b:84:35.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Warning: Permanently added
<br>
'domu-12-31-39-16-c6-70.compute-1.internal,10.96.197.154' (RSA) to the list
<br>
of known hosts.
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 21:20:01 2011 from 63.193.205.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # I am on instance B
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: domU-12-31-39-16-C6-70.compute-1.internal
<br>
&nbsp;&nbsp;Address: 10.96.197.154
<br>
<p>&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ cd .ssh
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ ll
<br>
&nbsp;&nbsp;total 12
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 config
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ # the same trick
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ mv config __config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ ssh -i tsakai
<br>
tsakai_at_ip-10-110-10-137.ec2.internal
<br>
&nbsp;&nbsp;The authenticity of host 'ip-10-110-10-137.ec2.internal (10.110.10.137)'
<br>
can't be established.
<br>
&nbsp;&nbsp;RSA key fingerprint is b4:4b:e3:74:42:d9:9c:82:21:0e:7d:d6:e3:13:4b:dd.
<br>
&nbsp;&nbsp;Are you sure you want to continue connecting (yes/no)? yes
<br>
&nbsp;&nbsp;Warning: Permanently added 'ip-10-110-10-137.ec2.internal,10.110.10.137'
<br>
(RSA) to the list of known hosts.
<br>
&nbsp;&nbsp;Last login: Fri Feb 18 04:22:24 2011 from ip-10-110-10-137.ec2.internal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ # I am on instance A
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ # go back to instance B
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to ip-10-110-10-137.ec2.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 __config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 425 Feb 18 04:27 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ # known_hosts got made
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ cat known_hosts
<br>
&nbsp;&nbsp;ip-10-110-10-137.ec2.internal,10.110.10.137 ssh-rsa
<br>
AAAAB3NzaC1yc2EAAAABIwAAAQEAyEMhrftyAg637XzteErroLE2Uf2PgrPz7S/Hs0Tyedk9ooWO
<br>
iIzlpTq3fEGXeZIZ4sMMiwuFQuF60TSkCUKSx9sZi8ce2Tvck1uTNrki/rlP11gY/aJ1oFW9Gg7A
<br>
LT2B8xPFThoSZntjMXYwRxxHwqVza0ELCxMV+kk6bdGeTPvFjl3tnyKEQJsdy8/HZy8v2jvFaWRq
<br>
Pzc6JIACEdkZ2AArN8Xh33yHFlOQ6XGwf86ZIqwWrbBH4Cvo6058rs9VDjzdBKcdM1D7K5ea5lF1
<br>
QGGEzfsUl7dVq6Z1UWnZoI9bqc1Mw+tpW08T2VCm0Dhz7V/UUHRtVGljQmaucpx9aw==
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ mv __config config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 425 Feb 18 04:27 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ # go back to instance A
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 .ssh]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-16-C6-70.compute-1.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 __config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 862 Feb 18 04:25 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mv __config config
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 862 Feb 18 04:25 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # now show I can ssh without -i flag
<br>
silently
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ssh
<br>
domU-12-31-39-16-C6-70.compute-1.internal
<br>
&nbsp;&nbsp;Last login: Fri Feb 18 04:25:56 2011 from ip-10-110-10-137.ec2.internal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # and to instance A
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ ssh ip-10-110-10-137.ec2.internal
<br>
&nbsp;&nbsp;Last login: Fri Feb 18 04:27:36 2011 from
<br>
domu-12-31-39-16-c6-70.compute-1.internal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__|  __|_  )  Amazon Linux AMI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_|  (     /     Beta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___|\___|___|
<br>
<p>&nbsp;&nbsp;See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
<br>
:-)
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ # OK
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ # go back to instance B
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to ip-10-110-10-137.ec2.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ env | grep -i path
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=:/usr/local/lib
<br>
&nbsp;&nbsp;PATH=/usr/local/bin:/bin:/usr/bin:/opt/aws/bin:/home/tsakai/bin
<br>
&nbsp;&nbsp;AWS_PATH=/opt/aws
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # check firewall
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ sudo service iptables status
<br>
&nbsp;&nbsp;iptables: Firewall is not running.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ ll -t /usr/local/lib | head
<br>
&nbsp;&nbsp;total 4100
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 385864 Feb 16 01:33 libvt.a
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 154950 Feb 16 01:33 libvt.fmpi.a
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 567848 Feb 16 01:33 libvt.mpi.a
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 462838 Feb 16 01:33 libvt.omp.a
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 643482 Feb 16 01:33 libvt.ompi.a
<br>
&nbsp;&nbsp;-rw-r--r-- 1 root root 231278 Feb 16 01:33 libotf.a
<br>
&nbsp;&nbsp;-rwxr-xr-x 1 root root    891 Feb 16 01:33 libotf.la
<br>
&nbsp;&nbsp;drwxr-xr-x 2 root root   4096 Feb 16 01:33 openmpi
<br>
&nbsp;&nbsp;-rwxr-xr-x 1 root root    991 Feb 16 01:33 libmca_common_sm.la
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ sudo find / -name mpirun
<br>
&nbsp;&nbsp;/usr/local/bin/mpirun
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ cat .ssh/config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # try mpirun without the other machine
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ mpirun --host `hostname` -np 2 hostname
<br>
&nbsp;&nbsp;domU-12-31-39-16-C6-70
<br>
&nbsp;&nbsp;domU-12-31-39-16-C6-70
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ mpirun --host
<br>
domU-12-31-39-16-C6-70.compute-1.internal -np 2 hostname
<br>
&nbsp;&nbsp;domU-12-31-39-16-C6-70
<br>
&nbsp;&nbsp;domU-12-31-39-16-C6-70
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # now add an extra host
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ mpirun --host \
<br>
<span class="quotelev1">  &gt;
</span><br>
domU-12-31-39-16-C6-70.compute-1.internal,ip-10-110-10-137.ec2.internal \
<br>
<span class="quotelev1">  &gt;                                  -np 2 \
</span><br>
<span class="quotelev1">  &gt;                                  hostname
</span><br>
&nbsp;&nbsp;# it is hanging
<br>
&nbsp;&nbsp;# let me issue control-c
<br>
&nbsp;&nbsp;^Cmpirun: killing job...
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ip-10-110-10-137.ec2.internal - daemon did not report back when
<br>
launched
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ # go back to machine A
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-C6-70 ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-16-C6-70.compute-1.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ll
<br>
&nbsp;&nbsp;total 16
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 232 Feb 16 04:00 authorized_keys
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai  81 Feb 16 04:10 config
<br>
&nbsp;&nbsp;-rw-r--r-- 1 tsakai tsakai 862 Feb 18 04:25 known_hosts
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 887 Feb 16 04:07 tsakai
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ sudo service iptables status
<br>
&nbsp;&nbsp;iptables: Firewall is not running.
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ sudo find / -name mpirun
<br>
&nbsp;&nbsp;/usr/local/bin/mpirun
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ env | grep -i path
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=:/usr/local/lib
<br>
&nbsp;&nbsp;PATH=/usr/local/bin:/bin:/usr/bin:/opt/aws/bin:/home/tsakai/bin
<br>
&nbsp;&nbsp;AWS_PATH=/opt/aws
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ cat config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mpirun --host `hostname` -np 2 hostname
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mpirun --host
<br>
ip-10-110-10-137.ec2.internal -np 2 hostname
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # add the other instance
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mpirun --host \
<br>
<span class="quotelev1">  &gt;
</span><br>
ip-10-110-10-137.ec2.internal,domU-12-31-39-16-C6-70.compute-1.internal \
<br>
<span class="quotelev1">  &gt;                               -np 2 \
</span><br>
<span class="quotelev1">  &gt;                               hostname
</span><br>
&nbsp;&nbsp;# again hanging; issuing control-c
<br>
&nbsp;&nbsp;^Cmpirun: killing job...
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-16-C6-70.compute-1.internal - daemon did not report
<br>
back when launched
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # try with IP
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: ip-10-110-10-137.ec2.internal
<br>
&nbsp;&nbsp;Address: 10.110.10.137
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mpirun --host 10.110.10.137 -np 2 hostname
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;ip-10-110-10-137
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ ssh
<br>
domU-12-31-39-16-C6-70.compute-1.internal 'nslookup domU-12-31-39-16-C6-70'
<br>
&nbsp;&nbsp;Server:               172.16.0.23
<br>
&nbsp;&nbsp;Address:      172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name: domU-12-31-39-16-C6-70.compute-1.internal
<br>
&nbsp;&nbsp;Address: 10.96.197.154
<br>
<p>&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ mpirun --host \
<br>
<span class="quotelev1">  &gt;                               10.110.10.137,10.96.197.154 \
</span><br>
<span class="quotelev1">  &gt;                               -np 2 hostname
</span><br>
&nbsp;&nbsp;# hanging also, get out by control-d
<br>
&nbsp;&nbsp;^Cmpirun: killing job...
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.96.197.154 - daemon did not report back when launched
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ # I can't figure out what more to do....
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-110-10-137 .ssh]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;[tsakai_at_vixen ec2]$
<br>
<p>Do you see anything incorrect in what I am doing?
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/17/11 6:52 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 16, 2011, at 6:17 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now, may I point out something I noticed out of the
</span><br>
<span class="quotelev2">&gt;&gt; DEBUG3 Output last night?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_jobid 125566976 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hnp-uri &quot;125566976.0;tcp://10.96.118.236:56064&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What this means is that ssh sent the &quot;orted ...&quot; command to the remote side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Gus mentioned, &quot;orted&quot; is the &quot;Open MPI Run-Time Environment daemon&quot; --
</span><br>
<span class="quotelev1">&gt; it's a helper thingy that mpirun launches on the remote nodes before launching
</span><br>
<span class="quotelev1">&gt; your actual application.  All those parameters (from --daemonize through
</span><br>
<span class="quotelev1">&gt; ...:56064&quot;) are options for orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of that gorp is considered internal to Open MPI -- most people never see
</span><br>
<span class="quotelev1">&gt; that stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Followed by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: request exec confirm 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: fd 3 setting TCP_NODELAY
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: callback done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: open confirm rwindow 0 rmax 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug3: Wrote 272 bytes for a total of 1893
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel 0: rcvd adjust 2097152
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  debug2: channel_input_status_confirm: type 99 id 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is just more status information about the ssh connection; it doesn't
</span><br>
<span class="quotelev1">&gt; really have any direct relation to Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know offhand if ssh displays the ack that a command successfully ran.
</span><br>
<span class="quotelev1">&gt; If you're not convinced that it did, then login to the other node while the
</span><br>
<span class="quotelev1">&gt; command is hung and run a ps to see if the orted is actually running or not.
</span><br>
<span class="quotelev1">&gt; I *suspect* that it is running, but that it's just hung for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's some suggestions to try debugging:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On your new linux AMI instances (some of this may be redundant with what you
</span><br>
<span class="quotelev1">&gt; did already):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ensure that firewalling is disabled on all instances
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ensure that your .bashrc (or whatever startup file is relevant to your
</span><br>
<span class="quotelev1">&gt; shell) is set to prefix PATH and LD_LIBRARY_PATH to your Open MPI
</span><br>
<span class="quotelev1">&gt; installation.  Ensure the *PREFIX* these variables to guarantee that you don't
</span><br>
<span class="quotelev1">&gt; get interference from already-installed versions of Open MPI (e.g., if Open
</span><br>
<span class="quotelev1">&gt; MPI is installed by default on your AMI and you weren't aware of it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - setup a simple, per-user SSH key, perhaps something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ rm -rf $HOME/.ssh
</span><br>
<span class="quotelev1">&gt;    (remove what you had before; let's just start over)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ ssh-keygen -t dsa
</span><br>
<span class="quotelev1">&gt;    (hit enter to accept all defaults and set no passphrase)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ cd $HOME/.ssh
</span><br>
<span class="quotelev1">&gt;      A$ cp id_dsa.pub authorized_keys
</span><br>
<span class="quotelev1">&gt;      A$ chmod 644 authorized_keys
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode
</span><br>
<span class="quotelev1">&gt;    (login to node B)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      B$ ssh-keygen -t dsa
</span><br>
<span class="quotelev1">&gt;    (hit enter to accept all defaults and set no passphrase; just to create
</span><br>
<span class="quotelev1">&gt; $HOME/.ssh with the right permissions, etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      B$ scp @firstnode:.ssh/id_dsa\* .
</span><br>
<span class="quotelev1">&gt;    (enter your password on A -- we're overwriting all the files here)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      B$ cp id_dsa.pub authorized_keys
</span><br>
<span class="quotelev1">&gt;      B$ chmod 644 authorized_keys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now you should be able to ssh from one node to the other without passwords:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode hostname
</span><br>
<span class="quotelev1">&gt;      B
</span><br>
<span class="quotelev1">&gt;      A$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      B$ ssh firstnode hostname
</span><br>
<span class="quotelev1">&gt;      A
</span><br>
<span class="quotelev1">&gt;      B$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't just test with &quot;ssh othernode&quot; -- test with &quot;ssh othernode &lt;command&gt;&quot; to
</span><br>
<span class="quotelev1">&gt; ensure that non-interactive logins work properly.  That's what Open MPI will
</span><br>
<span class="quotelev1">&gt; use under the covers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Now ensure that PATH and LD_LIBRARY_PATH are set for non-interactive ssh
</span><br>
<span class="quotelev1">&gt; sessions (i.e., some .bashrc's will exit &quot;early&quot; if they detect that it is a
</span><br>
<span class="quotelev1">&gt; non-interactive session).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode env | grep -i path
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ensure that the output shows the path and ld_library_path locations for Open
</span><br>
<span class="quotelev1">&gt; MPI at the beginning of those variables.  To go for the gold, you can try
</span><br>
<span class="quotelev1">&gt; this, too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode which ompi_info
</span><br>
<span class="quotelev1">&gt;      (if all paths are set right, this should show the ompi_info of your 1.4.3
</span><br>
<span class="quotelev1">&gt; install)
</span><br>
<span class="quotelev1">&gt;      A$ ssh othernode ompi_info
</span><br>
<span class="quotelev1">&gt;      (should show all the info about your 1.4.3 install)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If all the above works, then test with a simple, non-MPI application across
</span><br>
<span class="quotelev1">&gt; both nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ mpirun --host firstnode,othernode -np 2 hostname
</span><br>
<span class="quotelev1">&gt;      A
</span><br>
<span class="quotelev1">&gt;      B
</span><br>
<span class="quotelev1">&gt;      A$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - When that works, you should be able to test with a simple MPI application
</span><br>
<span class="quotelev1">&gt; (e.g., the examples/ring_c.c file in the Open MPI distribution):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A$ cd /path/to/open/mpi/source
</span><br>
<span class="quotelev1">&gt;      A$ cd examples
</span><br>
<span class="quotelev1">&gt;      A$ make
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev1">&gt;      A$ scp ring_c @othernode:/path/to/open/mpi/source/examples
</span><br>
<span class="quotelev1">&gt;      ...
</span><br>
<span class="quotelev1">&gt;      A$ mpirun --host firstnode,othernode -np 4 ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15646.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
