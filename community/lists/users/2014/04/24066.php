<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 03:11:37 2014" -->
<!-- isoreceived="20140405071137" -->
<!-- sent="Sat, 5 Apr 2014 12:41:37 +0530" -->
<!-- isosent="20140405071137" -->
<!-- name="Nisha Dhankher -M.Tech(CSE)" -->
<!-- email="nishadhankher-coaeseeit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="CAL8-kUDw9CCoOBsG3cXhnU+BipOeYVSgbBLOJ3sdz+G=6GPYKA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL8-kUBJtUL1KXitLfEjzp=4YtVnSpu5GFBdBgpB3R=j1u1_Ug_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-05 03:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24065.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24065.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mpirun *--mca btl ^openib --mca btl_tcp_if_include eth0*  -np 16
<br>
-machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o out.txt
<br>
<p>was the command i executed on cluster...
<br>
<p><p><p>On Sat, Apr 5, 2014 at 12:34 PM, Nisha Dhankher -M.Tech(CSE) &lt;
<br>
nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; sorry Ralph my mistake its not names...it is &quot;it does not happen on same
</span><br>
<span class="quotelev1">&gt; nodes.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 5, 2014 at 12:33 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; same vm on all machines that is virt-manager
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 5, 2014 at 12:32 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opmpi version 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Apr 4, 2014 at 8:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, so if you run mpiBlast on all the non-name nodes, everything is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; okay? What do you mean by &quot;names nodes&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 4, 2014, at 7:32 AM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no it does not happen on names nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Apr 4, 2014 at 7:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Nisha
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm sorry if my questions appear abrasive - I'm just a little
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; frustrated at the communication bottleneck as I can't seem to get a clear
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; picture of your situation. So you really don't need to keep calling me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;sir&quot; :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error you are hitting is very unusual - it means that the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes are able to make a connection, but are failing to correctly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complete a simple handshake exchange of their process identifications.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are only a few ways that can happen, and I'm trying to get you to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test for them.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So let's try and see if we can narrow this down. You mention that it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works on some machines, but not all. Is this consistent - i.e., is it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; always the same machines that work, and the same ones that generate the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error? If you exclude the ones that show the error, does it work? If so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what is different about those nodes? Are they a different architecture?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 3, 2014, at 11:09 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sir
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; smae virt-manager is bein used by all pc's.no i did n't enable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-hetro.Yes openmpi version is same in all through same kickstart
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  ok...actually sir...rocks itself installed,configured openmpi and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpich on it own through hpc roll.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Apr 4, 2014 at 9:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 3, 2014, at 8:03 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thankyou Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes cluster is heterogenous...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And did you configure OMPI --enable-heterogeneous? And are you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; running it with ---hetero-nodes? What version of OMPI are you using anyway?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note that we don't care if the host pc's are hetero - what we care
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about is the VM. If all the VMs are the same, then it shouldn't matter.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, most VM technologies don't handle hetero hardware very well -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i.e., you can't emulate an x86 architecture on top of a Sparc or Power chip
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or vice versa.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And i haven't made compute nodes on direct physical nodes (pc's)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; becoz in college it is not possible to take whole lab of 32 pc's for your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; work  so i ran on vm.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes, but at least it would let you test the setup to run MPI across
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; even a couple of pc's - this is simple debugging practice.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  In Rocks cluster, frontend give the same kickstart to all the pc's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so openmpi version should be same i guess.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Guess? or know? Makes a difference - might be worth testing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sir
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiformatdb is a command to distribute database fragments to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; different compute nodes after partitioning od database.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And sir have you done mpiblast ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Nope - but that isn't the issue, is it? The issue is with the MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; setup.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Apr 4, 2014 at 4:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What is &quot;mpiformatdb&quot;? We don't have an MPI database in our system,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I have no idea what that command means
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As for that error - it means that the identifier we exchange between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes is failing to be recognized. This could mean a couple of things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. the OMPI version on the two ends is different - could be you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; aren't getting the right paths set on the various machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. the cluster is heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You say you have &quot;virtual nodes&quot; running on various PC's? That would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; be an unusual setup - VM's can be problematic given the way they handle TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; connections, so that might be another source of the problem if my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; understanding of your setup is correct. Have you tried running this across
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the PCs directly - i.e., without any VMs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 3, 2014, at 10:13 AM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; command :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; query.fas -o output.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for other but with no  results even after 2 hours lapsed.....on rocks 6.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ram to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:41 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; i also made machine file which contain ip adresses of all compute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes + .ncbirc file for path to mpiblast and shared ,local storage path....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ran the same command of mpirun on my college supercomputer 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes each having 24 processors but it just running....gave no result
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; uptill 3 hours...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:39 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; query.fas -o output.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; run for other but with results even after 2 hours lapsed.....on rocks 6.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ram to each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm having trouble understanding your note, so perhaps I am
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; getting this wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * your perl command fails with &quot;no route to host&quot; - but I don't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; see any host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wasn't recognized? Is that correct?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * you then ran mpiblast and it sounds like it successfully
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; started the processes, but then one aborted? Was there an error message
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; beyond just the -1 return status?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  error btl_tcp_endpint.c: 638 connection failed due to error 113&lt;<a href="http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113">http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In openmpi: this error came when i run my mpiblast program on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rocks cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when i run following command linux_shell$ perl -e 'die$!=113' this msg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; comes: &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_tcp_if_include 10.1.255.244 was also executed but it did nt recognized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; these commands....nd aborted.... what should i do...? When i run my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiblast program for the frst time then it give mpi_abort error...bailing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; out of signal -1 on rank 2 processor...then i removed my public ethernet
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cable....and then give btl_tcp endpint error 113....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24065.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24065.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
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
