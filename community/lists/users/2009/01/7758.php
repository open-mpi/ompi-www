<?
$subject_val = "[OMPI users] 1.3 hangs running 2 exes with different names";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 07:42:12 2009" -->
<!-- isoreceived="20090122124212" -->
<!-- sent="Thu, 22 Jan 2009 13:42:07 +0100" -->
<!-- isosent="20090122124207" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="[OMPI users] 1.3 hangs running 2 exes with different names" -->
<!-- id="b4f9bf870901220442h3472f8bfr4ec5dda39808db26_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] 1.3 hangs running 2 exes with different names<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 07:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>Reply:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello , still a bug ???
<br>
<p>compil03% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host compil03 a.out
<br>
: -n 1 --host compil02 a.out
<br>
Hello world from process 0 of 2
<br>
Hello world from process 1 of 2
<br>
<p>compil03% mv a.out a.out_32
<br>
compil03% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host compil03
<br>
a.out_32 : -n 1 --host compil02 a.out
<br>
HANGS
<br>
<p>Thanks in advance for your expertise
<br>
<p>Geoffroy
<br>
<p><p><p><p><p>2009/1/22 &lt;users-request_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. One additional (unwanted) process when using dynamical
</span><br>
<span class="quotelev1">&gt;      process management (Evgeniy Gromov)
</span><br>
<span class="quotelev1">&gt;   2. Re: One additional (unwanted) process when using  dynamical
</span><br>
<span class="quotelev1">&gt;      process management (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;   3. Re: One additional (unwanted) process when using  dynamical
</span><br>
<span class="quotelev1">&gt;      process management (Evgeniy Gromov)
</span><br>
<span class="quotelev1">&gt;   4. Re: One additional (unwanted) process when        using   dynamical
</span><br>
<span class="quotelev1">&gt;      process management (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;   5. Re: openmpi 1.3 and --wdir problem (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;   6. Re: Problem compiling open mpi 1.3 with sunstudio12       express
</span><br>
<span class="quotelev1">&gt;      (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;   7. Handling output of processes (jody)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 19:02:48 +0100
</span><br>
<span class="quotelev1">&gt; From: Evgeniy Gromov &lt;Evgeniy.Gromov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] One additional (unwanted) process when using
</span><br>
<span class="quotelev1">&gt;        dynamical       process management
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;49776348.8000900_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev1">&gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev1">&gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev1">&gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev1">&gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev1">&gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev1">&gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev1">&gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev1">&gt; when it runs just on one pc with a few cores (let say nodes=1:ppn=4),
</span><br>
<span class="quotelev1">&gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev1">&gt; requested and there is no additional process.
</span><br>
<span class="quotelev1">&gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Evgeniy
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 11:15:00 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] One additional (unwanted) process when using
</span><br>
<span class="quotelev1">&gt;        dynamical process management
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4CCBD3F8-937F-4F8B-B953-F9CF9DD45EF5_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not that I've seen. What version of OMPI are you using, and on what
</span><br>
<span class="quotelev1">&gt; type of machine/environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 11:02 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev2">&gt; &gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev2">&gt; &gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev2">&gt; &gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev2">&gt; &gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev2">&gt; &gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev2">&gt; &gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev2">&gt; &gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev2">&gt; &gt; when it runs just on one pc with a few cores (let say nodes=1:ppn=4),
</span><br>
<span class="quotelev2">&gt; &gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev2">&gt; &gt; requested and there is no additional process.
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Evgeniy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 19:30:27 +0100
</span><br>
<span class="quotelev1">&gt; From: Evgeniy Gromov &lt;Evgeniy.Gromov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] One additional (unwanted) process when using
</span><br>
<span class="quotelev1">&gt;        dynamical process management
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;497769C3.8070201_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt; I encountered this problem using openmpi-1.2.5,
</span><br>
<span class="quotelev1">&gt; on a Opteron cluster with Myrinet-mx. I tried for
</span><br>
<span class="quotelev1">&gt; compilation of Global Arrays different compilers
</span><br>
<span class="quotelev1">&gt; (gfortran, intel, pathscale), the result is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned in the previous message GA itself works
</span><br>
<span class="quotelev1">&gt; fine, but the application which uses it doesn't work
</span><br>
<span class="quotelev1">&gt; correctly if it runs on several nodes. If it runs on
</span><br>
<span class="quotelev1">&gt; one node with several cores everything is fine. So I
</span><br>
<span class="quotelev1">&gt; thought that the problem might be in this additional
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I try to use the latest 1.3 version of openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Evgeniy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Not that I've seen. What version of OMPI are you using, and on what type
</span><br>
<span class="quotelev2">&gt; &gt; of machine/environment?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 21, 2009, at 11:02 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev3">&gt; &gt;&gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when it runs just on one pc with a few cores (let say nodes=1:ppn=4),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; requested and there is no additional process.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Evgeniy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; _______________________________________
</span><br>
<span class="quotelev1">&gt; Dr. Evgeniy Gromov
</span><br>
<span class="quotelev1">&gt; Theoretische Chemie
</span><br>
<span class="quotelev1">&gt; Physikalisch-Chemisches Institut
</span><br>
<span class="quotelev1">&gt; Im Neuenheimer Feld 229
</span><br>
<span class="quotelev1">&gt; D-69120 Heidelberg
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Telefon: +49/(0)6221/545263
</span><br>
<span class="quotelev1">&gt; Fax: +49/(0)6221/545221
</span><br>
<span class="quotelev1">&gt; E-mail: evgeniy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 11:38:48 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] One additional (unwanted) process when
</span><br>
<span class="quotelev1">&gt;  using
</span><br>
<span class="quotelev1">&gt;        dynamical process management
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;75C59577-D1EA-422B-A0B9-7F1C28E8D4CF_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can, 1.3 would certainly be a good step to take. I'm not sure
</span><br>
<span class="quotelev1">&gt; why 1.2.5 would be behaving this way, though, so it may indeed be
</span><br>
<span class="quotelev1">&gt; something in the application (perhaps in the info key being passed to
</span><br>
<span class="quotelev1">&gt; us?) that is the root cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, if it isn't too much trouble, moving to 1.3 will provide you
</span><br>
<span class="quotelev1">&gt; with a better platform for dynamic process management regardless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 11:30 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt; &gt; I encountered this problem using openmpi-1.2.5,
</span><br>
<span class="quotelev2">&gt; &gt; on a Opteron cluster with Myrinet-mx. I tried for
</span><br>
<span class="quotelev2">&gt; &gt; compilation of Global Arrays different compilers
</span><br>
<span class="quotelev2">&gt; &gt; (gfortran, intel, pathscale), the result is the same.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned in the previous message GA itself works
</span><br>
<span class="quotelev2">&gt; &gt; fine, but the application which uses it doesn't work
</span><br>
<span class="quotelev2">&gt; &gt; correctly if it runs on several nodes. If it runs on
</span><br>
<span class="quotelev2">&gt; &gt; one node with several cores everything is fine. So I
</span><br>
<span class="quotelev2">&gt; &gt; thought that the problem might be in this additional
</span><br>
<span class="quotelev2">&gt; &gt; process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should I try to use the latest 1.3 version of openmpi?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Evgeniy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not that I've seen. What version of OMPI are you using, and on what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; type of machine/environment?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 21, 2009, at 11:02 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when it runs just on one pc with a few cores (let say
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nodes=1:ppn=4),
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; requested and there is no additional process.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Evgeniy
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Evgeniy Gromov
</span><br>
<span class="quotelev2">&gt; &gt; Theoretische Chemie
</span><br>
<span class="quotelev2">&gt; &gt; Physikalisch-Chemisches Institut
</span><br>
<span class="quotelev2">&gt; &gt; Im Neuenheimer Feld 229
</span><br>
<span class="quotelev2">&gt; &gt; D-69120 Heidelberg
</span><br>
<span class="quotelev2">&gt; &gt; Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Telefon: +49/(0)6221/545263
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +49/(0)6221/545221
</span><br>
<span class="quotelev2">&gt; &gt; E-mail: evgeniy_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 11:40:28 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi 1.3 and --wdir problem
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B57EA438-1C8A-467C-B791-96EABE6031F4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is now fixed in the trunk and will be in the 1.3.1 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for the heads-up!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 8:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are correct - that is a bug in 1.3.0. I'm working on a fix for
</span><br>
<span class="quotelev2">&gt; &gt; it now and will report back.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for catching it!
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 21, 2009, at 3:22 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   I'm currently trying the new release but I cant reproduce the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.2.8 behaviour
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   concerning --wdir option
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   %% /tmp/openmpi-1.2.8/bin/mpirun -n 1 --wdir /tmp --host r003n030
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pwd :   --wdir /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /scr1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /tmp
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   but
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   %% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host r003n030
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pwd : --wdir  /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /scr1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /scr1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Thanks in advance
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Geoffroy
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Jan 2009 14:06:42 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem compiling open mpi 1.3 with
</span><br>
<span class="quotelev1">&gt;        sunstudio12     express
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;36FCDF58-9138-46A9-A432-CDF2A99A1CD7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I have run with my LD_LIBRARY_PATH set to a combination of
</span><br>
<span class="quotelev1">&gt; multiple OMPI installations; it ended up using the leftmost entry in
</span><br>
<span class="quotelev1">&gt; the LD_LIBRARY_PATH (as I intended).  I'm not quite sure why it
</span><br>
<span class="quotelev1">&gt; wouldn't do that for you.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 4:53 AM, Olivier Marsden wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - Check that /opt/mpi_sun and /opt/mpi_gfortran* are actually
</span><br>
<span class="quotelev3">&gt; &gt;&gt; distinct subdirectories; there's no hidden sym/hard links in there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; somewhere (where directories and/or individual files might
</span><br>
<span class="quotelev3">&gt; &gt;&gt; accidentally be pointing to the other tree)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; no hidden links in the directories
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - does &quot;env | grep mpi_&quot; show anything interesting / revealing?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What is your LD_LIBRARY_PATH set to?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nothing in env | grep mpi,  and for the purposes of building,
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH is set to
</span><br>
<span class="quotelev2">&gt; &gt; /opt/sun/express/sunstudioceres/lib/:/opt/mpi_sun/lib:xxx
</span><br>
<span class="quotelev2">&gt; &gt; where xxx is, among other things, the other mpi installations.
</span><br>
<span class="quotelev2">&gt; &gt; This lead me to find a problem, but which seems to be more related
</span><br>
<span class="quotelev2">&gt; &gt; to my linux configuration than openmpi:
</span><br>
<span class="quotelev2">&gt; &gt; I tried redefining ld_library_path to point just to sun, and
</span><br>
<span class="quotelev2">&gt; &gt; everything works correctly.
</span><br>
<span class="quotelev2">&gt; &gt; Putting my previous paths back into the variable leads to erroneous
</span><br>
<span class="quotelev2">&gt; &gt; behaviour, with ldd indicating that mpif90
</span><br>
<span class="quotelev2">&gt; &gt; is linked to libraries in the gfortran tree.
</span><br>
<span class="quotelev2">&gt; &gt; I thought that ld looked for libraries in folders in the order that
</span><br>
<span class="quotelev2">&gt; &gt; the folders are given in ld_library_path, and so
</span><br>
<span class="quotelev2">&gt; &gt; having mpi_sun as the first folder would suffice for its libraries
</span><br>
<span class="quotelev2">&gt; &gt; to be used; is that where I was wrong?
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the trouble, in any case redefining the ld_library_path to
</span><br>
<span class="quotelev2">&gt; &gt; remove all references to other installations works.
</span><br>
<span class="quotelev2">&gt; &gt; Looks like I'll have to swot up on my linker configuration knowledge!
</span><br>
<span class="quotelev2">&gt; &gt; Thanks alot for your time,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Olivier Marsden
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Thu, 22 Jan 2009 09:58:22 +0100
</span><br>
<span class="quotelev1">&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Handling output of processes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;9b0da5ce0901220058n6e534224i78a6daf6b0afc209_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev1">&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev1">&gt; separately during an mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev1">&gt; opens a xterm for each process,
</span><br>
<span class="quotelev1">&gt; which then starts the actual application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev1">&gt; interested in among 19 others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev1">&gt; outputs separately, so
</span><br>
<span class="quotelev1">&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev1">&gt; processor outputs?
</span><br>
<span class="quotelev1">&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev1">&gt; redirect the output over a TCP
</span><br>
<span class="quotelev1">&gt; socket to a server application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But perhaps there is an easier way, or something like this alread does
</span><br>
<span class="quotelev1">&gt; exist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1126, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>Reply:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
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
