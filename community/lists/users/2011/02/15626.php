<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 02:41:32 2011" -->
<!-- isoreceived="20110216074132" -->
<!-- sent="Tue, 15 Feb 2011 23:41:18 -0800" -->
<!-- isosent="20110216074118" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="C980BE60.E616%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D5B23D2.3070309_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-02-16 02:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thank you again for your reply.
<br>
<p><span class="quotelev1">&gt; A slight difference is that on vixen and dashen you ran the
</span><br>
<span class="quotelev1">&gt; MPI hostname tests as a regular user, not as root, right?
</span><br>
<span class="quotelev1">&gt; Not sure if this will make much of a difference,
</span><br>
<span class="quotelev1">&gt; but it may be worth trying to run it as a regular user in EC2 also.
</span><br>
<span class="quotelev1">&gt; I general most people avoid running user applications (MPI programs
</span><br>
<span class="quotelev1">&gt; included) as root.
</span><br>
<span class="quotelev1">&gt; Mostly for safety, but I wonder if there are any
</span><br>
<span class="quotelev1">&gt; implications in the 'rootly powers'
</span><br>
<span class="quotelev1">&gt; regarding the under-the-hood processes that OpenMPI
</span><br>
<span class="quotelev1">&gt; launches along with the actual user programs.
</span><br>
<p>Yes, between vixen and dahser I was doing the test as user tsakai,
<br>
not as root.  But the reason I wanted to do this test as root is
<br>
to show that it fails as regular user (generating pipe system
<br>
call failed error), whereas as root it would succeed, as it did
<br>
on Friday.  The ami has not changed.  The last change on the ami
<br>
was last Tuesday.  As such I don't understand this inconsistent
<br>
behavior.  I have lots of notes from previous sessions and I
<br>
consulted different successful session logs to replicate what I
<br>
saw Friday, but with no success.
<br>
<p>Having spent days and not getting anywhere, I decided to take a
<br>
different approach.  I instantiated a linux ami that was built by
<br>
Amazon, which feels like centos/fedora-based.  I downloaded gcc
<br>
and c++, plus openMPI 1.4.3.  After I got openMPI running, I
<br>
created an account for user tsakai, uploaded my public key, re-logged
<br>
in as user tsakai, and ran the same test.  Surprisingly (or not?) it
<br>
generated the same result.  I.e., I cannot run the same mpirun
<br>
command when there is a remote instance involved, but on itself
<br>
mpirun runs fine.  So, I am feeling that this has to be an ssh
<br>
authentication problem.  I looked at man page for ssh and ssh_config
<br>
and cannot figure out what I am doing wrong.  I put in &quot;LogLevel
<br>
DEBUG3&quot; line and it generated lots of lines, in which I found a
<br>
line:
<br>
&nbsp;&nbsp;debug1: Authentication succeeded (publickey).
<br>
Then I see a bunch of lines that look like:
<br>
&nbsp;&nbsp;debug3: Ignored env XXXXXXX
<br>
and mpirun hangs.  Here is the session log:
<br>
<p>&nbsp;&nbsp;[tsakai_at_vixen ec2]$
<br>
&nbsp;&nbsp;[tsakai_at_vixen ec2]$ ssh -i $MYKEY
<br>
tsakai_at_[hidden]
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 06:50:08 2011 from 63.193.205.1
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
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # show firewall is off
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ service iptables status
<br>
&nbsp;&nbsp;-bash: service: command not found
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ sudo service iptables status
<br>
&nbsp;&nbsp;iptables: Firewall is not running.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # show I can go to inst B with no
<br>
password authentication
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ ssh
<br>
domU-12-31-39-16-4E-4C.compute-1.internal
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 06:53:14 2011 from
<br>
domu-12-31-39-16-75-1e.compute-1.internal
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
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ # also back to inst A
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ ssh
<br>
domU-12-31-39-16-75-1E.compute-1.internal
<br>
&nbsp;&nbsp;Last login: Wed Feb 16 06:58:33 2011 from 63.193.205.1
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
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # OK
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # back to inst B
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-16-75-1E.compute-1.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ env | grep LD_LIB
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=:/usr/local/lib
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ # show no firewall on inst B
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ sudo service iptables status
<br>
&nbsp;&nbsp;iptables: Firewall is not running.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ # go back to inst A
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-4E-4C ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;Connection to domU-12-31-39-16-4E-4C.compute-1.internal closed.
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ env | grep LD_LIB
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=:/usr/local/lib
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ cat app.ac
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-4E-4C.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-4E-4C.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # top 2 are inst A (this machine);
<br>
bottom 2 are remote inst (inst B)
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-16-4E-4C.compute-1.internal - daemon did not report
<br>
back when launched
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # *** daemon did not report back when
<br>
launched ***
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ cat app.ac2
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # they refer to this instance (inst A)
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac2
<br>
&nbsp;&nbsp;domU-12-31-39-16-75-1E
<br>
&nbsp;&nbsp;domU-12-31-39-16-75-1E
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # that's no problem
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ cd .ssh
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ mv config config.svd
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config.svd &gt; config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ ll config
<br>
&nbsp;&nbsp;-rw-rw-r-- 1 tsakai tsakai 81 Feb 16 07:06 config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ chmod 600 config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat - &gt;&gt; config
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LogLevel DEBUG3
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
<br>
&nbsp;&nbsp;Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentityFile /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IdentitiesOnly yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BatchMode yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LogLevel DEBUG3
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ ll config
<br>
&nbsp;&nbsp;-rw------- 1 tsakai tsakai 98 Feb 16 07:07 config
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cd ..
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac
<br>
&nbsp;&nbsp;debug2: ssh_connect: needpriv 0
<br>
&nbsp;&nbsp;debug1: Connecting to domU-12-31-39-16-4E-4C.compute-1.internal
<br>
[10.96.77.182] port 22.
<br>
&nbsp;&nbsp;debug1: Connection established.
<br>
&nbsp;&nbsp;debug3: Not a RSA1 key file /home/tsakai/.ssh/tsakai.
<br>
&nbsp;&nbsp;debug2: key_type_from_name: unknown key type '-----BEGIN'
<br>
&nbsp;&nbsp;debug3: key_read: missing keytype
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug3: key_read: missing whitespace
<br>
&nbsp;&nbsp;debug2: key_type_from_name: unknown key type '-----END'
<br>
&nbsp;&nbsp;debug3: key_read: missing keytype
<br>
&nbsp;&nbsp;debug1: identity file /home/tsakai/.ssh/tsakai type -1
<br>
&nbsp;&nbsp;debug1: Remote protocol version 2.0, remote software version OpenSSH_5.3
<br>
&nbsp;&nbsp;debug1: match: OpenSSH_5.3 pat OpenSSH*
<br>
&nbsp;&nbsp;debug1: Enabling compatibility mode for protocol 2.0
<br>
&nbsp;&nbsp;debug1: Local version string SSH-2.0-OpenSSH_5.3
<br>
&nbsp;&nbsp;debug2: fd 3 setting O_NONBLOCK
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_KEXINIT sent
<br>
&nbsp;&nbsp;debug3: Wrote 792 bytes for a total of 813
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_KEXINIT received
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
diffie-hellman-group-exchange-sha256,diffie-hellman-group-exchange-sha1,diff
<br>
ie-hellman-group14-sha1,diffie-hellman-group1-sha1
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: ssh-rsa,ssh-dss
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
<br>
lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
<br>
iu.se
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
<br>
lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
<br>
iu.se
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
<br>
.com,hmac-sha1-96,hmac-md5-96
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
<br>
.com,hmac-sha1-96,hmac-md5-96
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: none,zlib_at_[hidden],zlib
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: none,zlib_at_[hidden],zlib
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: first_kex_follows 0
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: reserved 0
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
diffie-hellman-group-exchange-sha256,diffie-hellman-group-exchange-sha1,diff
<br>
ie-hellman-group14-sha1,diffie-hellman-group1-sha1
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: ssh-rsa,ssh-dss
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
<br>
lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
<br>
iu.se
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
<br>
lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
<br>
iu.se
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
<br>
.com,hmac-sha1-96,hmac-md5-96
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
<br>
.com,hmac-sha1-96,hmac-md5-96
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: none,zlib_at_[hidden]
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: none,zlib_at_[hidden]
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit:
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: first_kex_follows 0
<br>
&nbsp;&nbsp;debug2: kex_parse_kexinit: reserved 0
<br>
&nbsp;&nbsp;debug2: mac_setup: found hmac-md5
<br>
&nbsp;&nbsp;debug1: kex: server-&gt;client aes128-ctr hmac-md5 none
<br>
&nbsp;&nbsp;debug2: mac_setup: found hmac-md5
<br>
&nbsp;&nbsp;debug1: kex: client-&gt;server aes128-ctr hmac-md5 none
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_KEX_DH_GEX_REQUEST(1024&lt;1024&lt;8192) sent
<br>
&nbsp;&nbsp;debug1: expecting SSH2_MSG_KEX_DH_GEX_GROUP
<br>
&nbsp;&nbsp;debug3: Wrote 24 bytes for a total of 837
<br>
&nbsp;&nbsp;debug2: dh_gen_key: priv key bits set: 125/256
<br>
&nbsp;&nbsp;debug2: bits set: 489/1024
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_KEX_DH_GEX_INIT sent
<br>
&nbsp;&nbsp;debug1: expecting SSH2_MSG_KEX_DH_GEX_REPLY
<br>
&nbsp;&nbsp;debug3: Wrote 144 bytes for a total of 981
<br>
&nbsp;&nbsp;debug3: check_host_in_hostfile: filename /home/tsakai/.ssh/known_hosts
<br>
&nbsp;&nbsp;debug3: check_host_in_hostfile: match line 1
<br>
&nbsp;&nbsp;debug3: check_host_in_hostfile: filename /home/tsakai/.ssh/known_hosts
<br>
&nbsp;&nbsp;debug3: check_host_in_hostfile: match line 1
<br>
&nbsp;&nbsp;debug1: Host 'domu-12-31-39-16-4e-4c.compute-1.internal' is known and
<br>
matches the RSA host key.
<br>
&nbsp;&nbsp;debug1: Found key in /home/tsakai/.ssh/known_hosts:1
<br>
&nbsp;&nbsp;debug2: bits set: 491/1024
<br>
&nbsp;&nbsp;debug1: ssh_rsa_verify: signature correct
<br>
&nbsp;&nbsp;debug2: kex_derive_keys
<br>
&nbsp;&nbsp;debug2: set_newkeys: mode 1
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_NEWKEYS sent
<br>
&nbsp;&nbsp;debug1: expecting SSH2_MSG_NEWKEYS
<br>
&nbsp;&nbsp;debug3: Wrote 16 bytes for a total of 997
<br>
&nbsp;&nbsp;debug2: set_newkeys: mode 0
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_NEWKEYS received
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_SERVICE_REQUEST sent
<br>
&nbsp;&nbsp;debug3: Wrote 48 bytes for a total of 1045
<br>
&nbsp;&nbsp;debug2: service_accept: ssh-userauth
<br>
&nbsp;&nbsp;debug1: SSH2_MSG_SERVICE_ACCEPT received
<br>
&nbsp;&nbsp;debug2: key: /home/tsakai/.ssh/tsakai ((nil))
<br>
&nbsp;&nbsp;debug3: Wrote 64 bytes for a total of 1109
<br>
&nbsp;&nbsp;debug1: Authentications that can continue: publickey
<br>
&nbsp;&nbsp;debug3: start over, passed a different list publickey
<br>
&nbsp;&nbsp;debug3: preferred gssapi-with-mic,publickey
<br>
&nbsp;&nbsp;debug3: authmethod_lookup publickey
<br>
&nbsp;&nbsp;debug3: remaining preferred: ,publickey
<br>
&nbsp;&nbsp;debug3: authmethod_is_enabled publickey
<br>
&nbsp;&nbsp;debug1: Next authentication method: publickey
<br>
&nbsp;&nbsp;debug1: Trying private key: /home/tsakai/.ssh/tsakai
<br>
&nbsp;&nbsp;debug1: read PEM private key done: type RSA
<br>
&nbsp;&nbsp;debug3: sign_and_send_pubkey
<br>
&nbsp;&nbsp;debug2: we sent a publickey packet, wait for reply
<br>
&nbsp;&nbsp;debug3: Wrote 384 bytes for a total of 1493
<br>
&nbsp;&nbsp;debug1: Authentication succeeded (publickey).
<br>
&nbsp;&nbsp;debug2: fd 4 setting O_NONBLOCK
<br>
&nbsp;&nbsp;debug1: channel 0: new [client-session]
<br>
&nbsp;&nbsp;debug3: ssh_session2_open: channel_new: 0
<br>
&nbsp;&nbsp;debug2: channel 0: send open
<br>
&nbsp;&nbsp;debug1: Requesting no-more-sessions_at_[hidden]
<br>
&nbsp;&nbsp;debug1: Entering interactive session.
<br>
&nbsp;&nbsp;debug3: Wrote 128 bytes for a total of 1621
<br>
&nbsp;&nbsp;debug2: callback start
<br>
&nbsp;&nbsp;debug2: client_session2_setup: id 0
<br>
&nbsp;&nbsp;debug1: Sending environment.
<br>
&nbsp;&nbsp;debug3: Ignored env HOSTNAME
<br>
&nbsp;&nbsp;debug3: Ignored env TERM
<br>
&nbsp;&nbsp;debug3: Ignored env SHELL
<br>
&nbsp;&nbsp;debug3: Ignored env HISTSIZE
<br>
&nbsp;&nbsp;debug3: Ignored env EC2_AMITOOL_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env SSH_CLIENT
<br>
&nbsp;&nbsp;debug3: Ignored env SSH_TTY
<br>
&nbsp;&nbsp;debug3: Ignored env USER
<br>
&nbsp;&nbsp;debug3: Ignored env LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;debug3: Ignored env LS_COLORS
<br>
&nbsp;&nbsp;debug3: Ignored env EC2_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env MAIL
<br>
&nbsp;&nbsp;debug3: Ignored env PATH
<br>
&nbsp;&nbsp;debug3: Ignored env INPUTRC
<br>
&nbsp;&nbsp;debug3: Ignored env PWD
<br>
&nbsp;&nbsp;debug3: Ignored env JAVA_HOME
<br>
&nbsp;&nbsp;debug1: Sending env LANG = en_US.UTF-8
<br>
&nbsp;&nbsp;debug2: channel 0: request env confirm 0
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_CLOUDWATCH_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_IAM_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env SHLVL
<br>
&nbsp;&nbsp;debug3: Ignored env HOME
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_PATH
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_AUTO_SCALING_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env LOGNAME
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_ELB_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env SSH_CONNECTION
<br>
&nbsp;&nbsp;debug3: Ignored env LESSOPEN
<br>
&nbsp;&nbsp;debug3: Ignored env AWS_RDS_HOME
<br>
&nbsp;&nbsp;debug3: Ignored env G_BROKEN_FILENAMES
<br>
&nbsp;&nbsp;debug3: Ignored env _
<br>
&nbsp;&nbsp;debug3: Ignored env OLDPWD
<br>
&nbsp;&nbsp;debug3: Ignored env OMPI_MCA_plm
<br>
&nbsp;&nbsp;debug1: Sending command:  orted --daemonize -mca ess env -mca
<br>
orte_ess_jobid 125566976 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
<br>
--hnp-uri &quot;125566976.0;tcp://10.96.118.236:56064&quot;
<br>
&nbsp;&nbsp;debug2: channel 0: request exec confirm 1
<br>
&nbsp;&nbsp;debug2: fd 3 setting TCP_NODELAY
<br>
&nbsp;&nbsp;debug2: callback done
<br>
&nbsp;&nbsp;debug2: channel 0: open confirm rwindow 0 rmax 32768
<br>
&nbsp;&nbsp;debug3: Wrote 272 bytes for a total of 1893
<br>
&nbsp;&nbsp;debug2: channel 0: rcvd adjust 2097152
<br>
&nbsp;&nbsp;debug2: channel_input_status_confirm: type 99 id 0
<br>
&nbsp;&nbsp;debug2: exec request accepted on channel 0
<br>
&nbsp;&nbsp;debug2: channel 0: read&lt;=0 rfd 4 len 0
<br>
&nbsp;&nbsp;debug2: channel 0: read failed
<br>
&nbsp;&nbsp;debug2: channel 0: close_read
<br>
&nbsp;&nbsp;debug2: channel 0: input open -&gt; drain
<br>
&nbsp;&nbsp;debug2: channel 0: ibuf empty
<br>
&nbsp;&nbsp;debug2: channel 0: send eof
<br>
&nbsp;&nbsp;debug2: channel 0: input drain -&gt; closed
<br>
&nbsp;&nbsp;debug3: Wrote 32 bytes for a total of 1925
<br>
&nbsp;&nbsp;debug2: channel 0: rcvd eof
<br>
&nbsp;&nbsp;debug2: channel 0: output open -&gt; drain
<br>
&nbsp;&nbsp;debug2: channel 0: obuf empty
<br>
&nbsp;&nbsp;debug2: channel 0: close_write
<br>
&nbsp;&nbsp;debug2: channel 0: output drain -&gt; closed
<br>
&nbsp;&nbsp;debug1: client_input_channel_req: channel 0 rtype exit-status reply 0
<br>
&nbsp;&nbsp;debug2: channel 0: rcvd close
<br>
&nbsp;&nbsp;debug3: channel 0: will not send data after close
<br>
&nbsp;&nbsp;debug2: channel 0: almost dead
<br>
&nbsp;&nbsp;debug2: channel 0: gc: notify user
<br>
&nbsp;&nbsp;debug2: channel 0: gc: user detached
<br>
&nbsp;&nbsp;debug2: channel 0: send close
<br>
&nbsp;&nbsp;debug2: channel 0: is dead
<br>
&nbsp;&nbsp;debug2: channel 0: garbage collecting
<br>
&nbsp;&nbsp;debug1: channel 0: free: client-session, nchannels 1
<br>
&nbsp;&nbsp;debug3: channel 0: status: The following connections are open:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#0 client-session (t4 r0 i3/0 o3/0 fd -1/-1 cfd -1)
<br>
<p>&nbsp;&nbsp;debug3: channel 0: close_fds r -1 w -1 e 6 c -1
<br>
&nbsp;&nbsp;debug3: Wrote 32 bytes for a total of 1957
<br>
&nbsp;&nbsp;debug3: Wrote 64 bytes for a total of 2021
<br>
&nbsp;&nbsp;debug1: fd 0 clearing O_NONBLOCK
<br>
&nbsp;&nbsp;Transferred: sent 1840, received 1896 bytes, in 0.1 seconds
<br>
&nbsp;&nbsp;Bytes per second: sent 18384.8, received 18944.3
<br>
&nbsp;&nbsp;debug1: Exit status 0
<br>
&nbsp;&nbsp;# it is hanging; I am about to issue control-C
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domU-12-31-39-16-4E-4C.compute-1.internal - daemon did not report
<br>
back when launched
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # it says the same thing, i.e.,
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # daemon did not report back when
<br>
launched
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # what does that mean?
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # ssh doesn't say anything alarming...
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ # I give up
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$
<br>
&nbsp;&nbsp;[tsakai_at_domU-12-31-39-16-75-1E ~]$ exit
<br>
&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;[tsakai_at_vixen ec2]$
<br>
&nbsp;&nbsp;[tsakai_at_vixen ec2]$
<br>
<p>Do you see anything strange?
<br>
<p>One final question: On ssh man page, it mentions a few environmental
<br>
varialbles.  SSH_ASKPASS, SSH_AUTH_SOCK, SSH_CONNECTION, etc.  Do
<br>
any of these matter as far as openMPI is concerned?
<br>
<p>Thank you, Gus.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p>On 2/15/11 5:09 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to reproduce what I was able to show last Friday on Amazon
</span><br>
<span class="quotelev2">&gt;&gt; EC2 instances, but I am having a problem.  What I was able to show last
</span><br>
<span class="quotelev2">&gt;&gt; Friday as root was with this command:
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun &#173;app app.ac
</span><br>
<span class="quotelev2">&gt;&gt; with app.ac being:
</span><br>
<span class="quotelev2">&gt;&gt;   -H dns-entry-A &#173;np 1 (linux command)
</span><br>
<span class="quotelev2">&gt;&gt;   -H dns-entry-A &#173;np 1 (linux command)
</span><br>
<span class="quotelev2">&gt;&gt;   -H dns-entry-B &#173;np 1 (linux command)
</span><br>
<span class="quotelev2">&gt;&gt;   -H dns-entry-B &#173;np 1 (linux command)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here&#185;s the config file in root&#185;s .ssh directory:
</span><br>
<span class="quotelev2">&gt;&gt;   Host *
</span><br>
<span class="quotelev2">&gt;&gt;         IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev2">&gt;&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt;         BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yesterday and today I can&#185;t get this to work.  I made the last part of
</span><br>
<span class="quotelev2">&gt;&gt; app.ac
</span><br>
<span class="quotelev2">&gt;&gt; file simpler (it now says /bin/hostname).  Below is the session:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # I am on instance A, host name for inst A is:
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# nslookup domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev2">&gt;&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev2">&gt;&gt;   Name: domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;   Address: 10.210.210.48
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# cd .ssh
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# cat config
</span><br>
<span class="quotelev2">&gt;&gt;   Host *
</span><br>
<span class="quotelev2">&gt;&gt;           IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev2">&gt;&gt;           IdentitiesOnly yes
</span><br>
<span class="quotelev2">&gt;&gt;           BatchMode yes
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# ll config
</span><br>
<span class="quotelev2">&gt;&gt;   -rw-r--r-- 1 root root 103 Feb 15 17:18 config
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# chmod 600 config
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # show I can go to inst B without password/passphrase
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# ssh domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;   Last login: Tue Feb 15 17:18:46 2011 from 10.210.210.48
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-E6-71
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# nslookup `hostname`
</span><br>
<span class="quotelev2">&gt;&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev2">&gt;&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev2">&gt;&gt;   Name: domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;   Address: 10.210.233.123
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # and back to inst A is also no problem
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# ssh domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev2">&gt;&gt;   Last login: Tue Feb 15 17:36:19 2011 from 63.193.205.1
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # log out twice to go back to inst A
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev2">&gt;&gt;   logout
</span><br>
<span class="quotelev2">&gt;&gt;   Connection to domU-12-31-39-09-CD-C2.compute-1.internal closed.
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev2">&gt;&gt;   logout
</span><br>
<span class="quotelev2">&gt;&gt;   Connection to domU-12-31-39-09-E6-71.compute-1.internal closed.
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# cd ..
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# pwd
</span><br>
<span class="quotelev2">&gt;&gt;   /root
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# ll
</span><br>
<span class="quotelev2">&gt;&gt;   total 8
</span><br>
<span class="quotelev2">&gt;&gt;   -rw-r--r-- 1 root root 260 Feb 15 17:24 app.ac
</span><br>
<span class="quotelev2">&gt;&gt;   -rw-r--r-- 1 root root 130 Feb 15 17:34 app.ac2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# cat app.ac
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # when there is a remote machine (bottome 2 lines) it hangs
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# mpirun -app app.ac
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt;   that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         domU-12-31-39-09-E6-71.compute-1.internal - daemon did not
</span><br>
<span class="quotelev2">&gt;&gt; report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# cat app.ac2
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # when there is no remote machine, then mpirun works:
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# mpirun -app app.ac2
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev2">&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # this gotta be ssh problem....
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# # show no firewall is used
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# iptables --list
</span><br>
<span class="quotelev2">&gt;&gt;   Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev2">&gt;&gt;    target     prot opt source               destination
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev2">&gt;&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev2">&gt;&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev2">&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev2">&gt;&gt;   logout
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would someone please point out what I am doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
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
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing wrong that I can see.
</span><br>
<span class="quotelev1">&gt; Just another couple of suggestions,
</span><br>
<span class="quotelev1">&gt; based on somewhat vague possibilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A slight difference is that on vixen and dashen you ran the
</span><br>
<span class="quotelev1">&gt; MPI hostname tests as a regular user, not as root, right?
</span><br>
<span class="quotelev1">&gt; Not sure if this will make much of a difference,
</span><br>
<span class="quotelev1">&gt; but it may be worth trying to run it as a regular user in EC2 also.
</span><br>
<span class="quotelev1">&gt; I general most people avoid running user applications (MPI programs
</span><br>
<span class="quotelev1">&gt; included) as root.
</span><br>
<span class="quotelev1">&gt; Mostly for safety, but I wonder if there are any
</span><br>
<span class="quotelev1">&gt; implications in the 'rootly powers'
</span><br>
<span class="quotelev1">&gt; regarding the under-the-hood processes that OpenMPI
</span><br>
<span class="quotelev1">&gt; launches along with the actual user programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may make no difference either,
</span><br>
<span class="quotelev1">&gt; but you could do a 'service iptables status',
</span><br>
<span class="quotelev1">&gt; to see if the service is running, even though there are
</span><br>
<span class="quotelev1">&gt; no explicit iptable rules (as per your email).
</span><br>
<span class="quotelev1">&gt; If the service is not running you get
</span><br>
<span class="quotelev1">&gt; 'Firewall is stopped.' (in CentOS).
</span><br>
<span class="quotelev1">&gt; I *think* 'iptables --list' loads the iptables module into the
</span><br>
<span class="quotelev1">&gt; kernel, as a side effect, whereas the service command does not.
</span><br>
<span class="quotelev1">&gt; So, it may be cleaner (safer?) to use the service version
</span><br>
<span class="quotelev1">&gt; instead of 'iptables --list'.
</span><br>
<span class="quotelev1">&gt; I don't know if it will make any difference,
</span><br>
<span class="quotelev1">&gt; but just in case, if the service is running,
</span><br>
<span class="quotelev1">&gt; why not do 'service iptables stop',
</span><br>
<span class="quotelev1">&gt; and perhaps also 'chkconfig iptables off' to be completely
</span><br>
<span class="quotelev1">&gt; free of iptables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15625.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
