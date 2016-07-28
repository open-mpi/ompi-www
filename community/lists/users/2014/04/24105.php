<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 05:37:28 2014" -->
<!-- isoreceived="20140408093728" -->
<!-- sent="Tue, 8 Apr 2014 15:07:27 +0530" -->
<!-- isosent="20140408093727" -->
<!-- name="Nisha Dhankher -M.Tech(CSE)" -->
<!-- email="nishadhankher-coaeseeit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="CAL8-kUC1PkP+NaKJfoJ0prKi=Y5AF4jxeh6_fuy37aotTV8Hxw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59101658-DE29-4B89-976F-96A591EF500D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi query<br>
<strong>From:</strong> Nisha Dhankher -M.Tech(CSE) (<em>nishadhankher-coaeseeit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 05:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
latest rocks 6.2  carry this version only
<br>
<p><p>On Tue, Apr 8, 2014 at 3:49 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI 1.4.3 is *ancient*.  Please upgrade -- we just released Open MPI
</span><br>
<span class="quotelev1">&gt; 1.8 last week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, please look at this FAQ entry -- it steps you through a lot of basic
</span><br>
<span class="quotelev1">&gt; troubleshooting steps about getting basic MPI programs working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems">http://www.open-mpi.org/faq/?category=running#diagnose-multi-host-problems</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you get basic MPI programs working, then try with MPI Blast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2014, at 3:11 AM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mpirun --mca btl ^openib --mca btl_tcp_if_include eth0  -np 16
</span><br>
<span class="quotelev1">&gt;  -machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o out.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; was the command i executed on cluster...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Apr 5, 2014 at 12:34 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; sorry Ralph my mistake its not names...it is &quot;it does not happen on same
</span><br>
<span class="quotelev1">&gt; nodes.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Apr 5, 2014 at 12:33 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; same vm on all machines that is virt-manager
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Apr 5, 2014 at 12:32 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; opmpi version 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Apr 4, 2014 at 8:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, so if you run mpiBlast on all the non-name nodes, everything is
</span><br>
<span class="quotelev1">&gt; okay? What do you mean by &quot;names nodes&quot;?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 4, 2014, at 7:32 AM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no it does not happen on names nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Apr 4, 2014 at 7:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Nisha
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm sorry if my questions appear abrasive - I'm just a little
</span><br>
<span class="quotelev1">&gt; frustrated at the communication bottleneck as I can't seem to get a clear
</span><br>
<span class="quotelev1">&gt; picture of your situation. So you really don't need to keep calling me
</span><br>
<span class="quotelev1">&gt; &quot;sir&quot; :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The error you are hitting is very unusual - it means that the processes
</span><br>
<span class="quotelev1">&gt; are able to make a connection, but are failing to correctly complete a
</span><br>
<span class="quotelev1">&gt; simple handshake exchange of their process identifications. There are only
</span><br>
<span class="quotelev1">&gt; a few ways that can happen, and I'm trying to get you to test for them.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So let's try and see if we can narrow this down. You mention that it
</span><br>
<span class="quotelev1">&gt; works on some machines, but not all. Is this consistent - i.e., is it
</span><br>
<span class="quotelev1">&gt; always the same machines that work, and the same ones that generate the
</span><br>
<span class="quotelev1">&gt; error? If you exclude the ones that show the error, does it work? If so,
</span><br>
<span class="quotelev1">&gt; what is different about those nodes? Are they a different architecture?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 3, 2014, at 11:09 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; smae virt-manager is bein used by all pc's.no i did n't enable
</span><br>
<span class="quotelev1">&gt; openmpi-hetro.Yes openmpi version is same in all through same kickstart
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ok...actually sir...rocks itself installed,configured openmpi and
</span><br>
<span class="quotelev1">&gt; mpich on it own through hpc roll.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Apr 4, 2014 at 9:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 3, 2014, at 8:03 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; thankyou Ralph.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes cluster is heterogenous...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; And did you configure OMPI --enable-heterogeneous? And are you running
</span><br>
<span class="quotelev1">&gt; it with ---hetero-nodes? What version of OMPI are you using anyway?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that we don't care if the host pc's are hetero - what we care
</span><br>
<span class="quotelev1">&gt; about is the VM. If all the VMs are the same, then it shouldn't matter.
</span><br>
<span class="quotelev1">&gt; However, most VM technologies don't handle hetero hardware very well -
</span><br>
<span class="quotelev1">&gt; i.e., you can't emulate an x86 architecture on top of a Sparc or Power chip
</span><br>
<span class="quotelev1">&gt; or vice versa.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; And i haven't made compute nodes on direct physical nodes (pc's)
</span><br>
<span class="quotelev1">&gt; becoz in college it is not possible to take whole lab of 32 pc's for your
</span><br>
<span class="quotelev1">&gt; work  so i ran on vm.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yes, but at least it would let you test the setup to run MPI across
</span><br>
<span class="quotelev1">&gt; even a couple of pc's - this is simple debugging practice.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In Rocks cluster, frontend give the same kickstart to all the pc's so
</span><br>
<span class="quotelev1">&gt; openmpi version should be same i guess.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Guess? or know? Makes a difference - might be worth testing.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sir
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpiformatdb is a command to distribute database fragments to
</span><br>
<span class="quotelev1">&gt; different compute nodes after partitioning od database.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; And sir have you done mpiblast ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nope - but that isn't the issue, is it? The issue is with the MPI
</span><br>
<span class="quotelev1">&gt; setup.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Fri, Apr 4, 2014 at 4:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What is &quot;mpiformatdb&quot;? We don't have an MPI database in our system,
</span><br>
<span class="quotelev1">&gt; and I have no idea what that command means
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As for that error - it means that the identifier we exchange between
</span><br>
<span class="quotelev1">&gt; processes is failing to be recognized. This could mean a couple of things:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. the OMPI version on the two ends is different - could be you
</span><br>
<span class="quotelev1">&gt; aren't getting the right paths set on the various machines
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2. the cluster is heterogeneous
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You say you have &quot;virtual nodes&quot; running on various PC's? That would
</span><br>
<span class="quotelev1">&gt; be an unusual setup - VM's can be problematic given the way they handle TCP
</span><br>
<span class="quotelev1">&gt; connections, so that might be another source of the problem if my
</span><br>
<span class="quotelev1">&gt; understanding of your setup is correct. Have you tried running this across
</span><br>
<span class="quotelev1">&gt; the PCs directly - i.e., without any VMs?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Apr 3, 2014, at 10:13 AM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran
</span><br>
<span class="quotelev1">&gt; command :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i
</span><br>
<span class="quotelev1">&gt; query.fas -o output.txt
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to run
</span><br>
<span class="quotelev1">&gt; for other but with no  results even after 2 hours lapsed.....on rocks 6.0
</span><br>
<span class="quotelev1">&gt; cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb
</span><br>
<span class="quotelev1">&gt; ram to each
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:41 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; i also made machine file which contain ip adresses of all compute
</span><br>
<span class="quotelev1">&gt; nodes + .ncbirc file for path to mpiblast and shared ,local storage path....
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sir
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I ran the same command of mpirun on my college supercomputer 8 nodes
</span><br>
<span class="quotelev1">&gt; each having 24 processors but it just running....gave no result uptill 3
</span><br>
<span class="quotelev1">&gt; hours...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:39 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran
</span><br>
<span class="quotelev1">&gt; command :
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i
</span><br>
<span class="quotelev1">&gt; query.fas -o output.txt
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to run
</span><br>
<span class="quotelev1">&gt; for other but with results even after 2 hours lapsed.....on rocks 6.0
</span><br>
<span class="quotelev1">&gt; cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb
</span><br>
<span class="quotelev1">&gt; ram to each
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm having trouble understanding your note, so perhaps I am getting
</span><br>
<span class="quotelev1">&gt; this wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; * your perl command fails with &quot;no route to host&quot; - but I don't see
</span><br>
<span class="quotelev1">&gt; any host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command
</span><br>
<span class="quotelev1">&gt; wasn't recognized? Is that correct?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; * you then ran mpiblast and it sounds like it successfully started
</span><br>
<span class="quotelev1">&gt; the processes, but then one aborted? Was there an error message beyond just
</span><br>
<span class="quotelev1">&gt; the -1 return status?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; error btl_tcp_endpint.c: 638 connection failed due to error 113
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; In openmpi: this error came when i run my mpiblast program on rocks
</span><br>
<span class="quotelev1">&gt; cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when
</span><br>
<span class="quotelev1">&gt; i run following command linux_shell$ perl -e 'die$!=113' this msg comes:
</span><br>
<span class="quotelev1">&gt; &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; 10.1.255.244 was also executed but it did nt recognized these
</span><br>
<span class="quotelev1">&gt; commands....nd aborted.... what should i do...? When i run my mpiblast
</span><br>
<span class="quotelev1">&gt; program for the frst time then it give mpi_abort error...bailing out of
</span><br>
<span class="quotelev1">&gt; signal -1 on rank 2 processor...then i removed my public ethernet
</span><br>
<span class="quotelev1">&gt; cable....and then give btl_tcp endpint error 113....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
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
