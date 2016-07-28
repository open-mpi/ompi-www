<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:43:08 2014" -->
<!-- isoreceived="20140304004308" -->
<!-- sent="Mon, 3 Mar 2014 17:43:13 -0700" -->
<!-- isosent="20140304004313" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D08C1_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53151D05.9070803_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 19:43:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus,
<br>
<p>I am using this system: <a href="http://centers.hpc.mil/systems/unclassified.html#Spirit">http://centers.hpc.mil/systems/unclassified.html#Spirit</a>. I don't know exactly configurations of the file system. Here is the output of &quot;df -h&quot;:
<br>
Filesystem            Size  Used Avail Use% Mounted on
<br>
/dev/sda6             919G   16G  857G   2% /
<br>
tmpfs                  32G     0   32G   0% /dev/shm
<br>
/dev/sda5             139M   33M  100M  25% /boot
<br>
adfs3v-s:/adfs3/hafs14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.5T  678G  5.5T  11% /scratch
<br>
adfs3v-s:/adfs3/hafs16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.5T  678G  5.5T  11% /var/spool/mail
<br>
10.148.18.45_at_o2ib:10.148.18.46_at_o2ib:/fs1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2P  136T  1.1P  12% /work1
<br>
10.148.18.132_at_o2ib:10.148.18.133_at_o2ib:/fs4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2P  793T  368T  69% /work4
<br>
10.148.18.104_at_o2ib:10.148.18.165_at_o2ib:/fs3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2P  509T  652T  44% /work3
<br>
10.148.18.76_at_o2ib:10.148.18.164_at_o2ib:/fs2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2P  521T  640T  45% /work2
<br>
panfs://172.16.0.10/CWFS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/cwfs
<br>
panfs://172.16.1.61/CWFS1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS1
<br>
panfs://172.16.0.210/CWFS2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS2
<br>
panfs://172.16.1.125/CWFS3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS3
<br>
panfs://172.16.1.224/CWFS4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS4
<br>
panfs://172.16.1.224/CWFS5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS5
<br>
panfs://172.16.1.224/CWFS6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS6
<br>
panfs://172.16.1.224/CWFS7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;728T  286T  443T  40% /p/CWFS7
<br>
<p>1. My home directory is /home/yanb.
<br>
My simulation files are located at /work3/yanb.
<br>
The default TMPDIR set by system is just /work3/yanb
<br>
<p>2. I did try not to set TMPDIR and let it default, which is just case 1 and case 2.
<br>
&nbsp;&nbsp;Case1: #export TMPDIR=/home/yanb/tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It gives no apparent reason.
<br>
&nbsp;&nbsp;Case2: #export TMPDIR=/home/yanb/tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It gives warning of shared memory file on network file system.
<br>
<p>3. With &quot;export TMPDIR=/tmp&quot;, the job gives the same, no apparent reason.
<br>
<p>4. FYI, &quot;ls /&quot; gives:
<br>
ELT    apps  cgroup  hafs1   hafs12  hafs2  hafs5  hafs8        home   lost+found  mnt  p      root     selinux  tftpboot  var    work3
<br>
admin  bin   dev     hafs10  hafs13  hafs3  hafs6  hafs9        lib    media       net  panfs  sbin     srv      tmp       work1  work4
<br>
app    boot  etc     hafs11  hafs15  hafs4  hafs7  hafs_x86_64  lib64  misc        opt  proc   scratch  sys      usr       work2  workspace
<br>
<p>Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Monday, March 03, 2014 17:24
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>Hi Beichuan
<br>
<p>If you are using the university cluster, chances are that /home is not local, but on an NFS share, or perhaps Lustre (which you may have mentioned before, I don't remember).
<br>
<p>Maybe &quot;df -h&quot; will show what is local what is not.
<br>
It works for NFS, it prefixes file systems with the server name, but I don't know about Lustre.
<br>
<p>Did you try just not to set TMPDIR and let it default?
<br>
If the default TMPDIR is on Lustre (did you say this?, anyway I don't
<br>
remember) you could perhaps try to force it to /tmp:
<br>
export TMPDIR=/tmp,
<br>
If the cluster nodes are diskfull /tmp is likely to exist and be local to the cluster nodes.
<br>
[But the cluster nodes may be diskless ... :( ]
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 03/03/2014 07:10 PM, Beichuan Yan wrote:
<br>
<span class="quotelev1">&gt; How to set TMPDIR to a local filesystem? Is /home/yanb/tmp a local filesystem? I don't know how to tell a directory is local file system or network file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff 
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 03, 2014 16:57
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI job initializing problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about setting TMPDIR to a local filesystem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2014, at 3:43 PM, Beichuan Yan&lt;beichuan.yan_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree there are two cases for pure-MPI mode: 1. Job fails with no apparent reason;  2 job complains shared-memory file on network file system, which can be resolved by &quot; export TMPDIR=/home/yanb/tmp&quot;, /home/yanb/tmp is my local directory. The default TMPDIR points to a Lustre directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no any other output. I checked my job with &quot;qstat -n&quot; and found that processes were actually not started on compute nodes even though PBS Pro has &quot;started&quot; my job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Then I test pure-MPI mode: OPENMP is turned off, and each compute node runs 16 processes (clearly shared-memory of MPI is used). Four combinations of &quot;TMPDIR&quot; and &quot;TCP&quot; are tested:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun $TCP -np 64 -npernode 16 -hostfile $PBS_NODEFILE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./paraEllip3d input.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start Prologue v2.5 Mon Mar  3 15:47:16 EST 2014 End Prologue v2.5 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mon Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash: line 1: 448597 Terminated              /var/spool/PBS/mom_priv/jobs/602244.service12.SC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start Epilogue v2.5 Mon Mar  3 15:50:51 EST 2014 Statistics 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpupercent=0,cput=00:00:00,mem=7028kb,ncpus=128,vmem=495768kb,wallti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =00:03:24 End Epilogue v2.5 Mon Mar  3 15:50:52 EST 2014
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you have two general cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The job fails for no apparent reason (like above), or 2. The job 
</span><br>
<span class="quotelev2">&gt;&gt; complains that your TMPDIR is on a shared filesystem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the real issue, then, is to figure out why your jobs are failing with no output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything in the stderr output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23762.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
