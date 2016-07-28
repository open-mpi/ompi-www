<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 13:49:34 2014" -->
<!-- isoreceived="20140306184934" -->
<!-- sent="Thu, 6 Mar 2014 11:49:45 -0700" -->
<!-- isosent="20140306184945" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D0B20_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5315F5BA.6040306_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-03-06 13:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23778.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<li><strong>Previous message:</strong> <a href="23776.php">Vince Grimes: "[OMPI users] LOCAL QP OPERATION ERROR"</a>
<li><strong>In reply to:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23779.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23779.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. For $TMPDIR and $TCP, there are four combinations by commenting on/off (note the system's default TMPDIR=/work3/yanb):
<br>
export TMPDIR=/work1/home/yanb/tmp
<br>
TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
<p>2. I tested the 4 combinations for OpenMPI 1.6.5 and OpenMPI 1.7.4 respectively for the pure-MPI mode (no OPENMP threads; 8 nodes, each node runs 16 processes). The results are weird: of all 8 cases, only TWO of them can run, but run so slow:
<br>
<p>OpenMPI 1.6.5:
<br>
export TMPDIR=/work1/home/yanb/tmp
<br>
TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
Warning: shared-memory, /work1/home/yanb/tmp/
<br>
Run, take 10 minutes, slow
<br>
<p>OpenMPI 1.7.4:
<br>
#export TMPDIR=/work1/home/yanb/tmp
<br>
#TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
<br>
Warning: shared-memory /work3/yanb/605832.SPIRIT/
<br>
Run, take 10 minutess, slow
<br>
<p>So you see, a) openmpi 1.6.5 and 1.7.4 need different settings to run; b) whether specifying TMPDIR, I got the shared memory warning.
<br>
<p>3. But a few days ago, OpenMPI 1.6.5 worked great and took only 1 minute (now it takes 10 minutes). I am so confused by the results. Does the system loading level or fluctuation or PBS pro affect OpenMPI performance?
<br>
<p>Thanks,
<br>
Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Tuesday, March 04, 2014 08:48
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>Hi Beichuan
<br>
<p>So, from &quot;df&quot; it looks like /home is /work1, right?
<br>
<p>Also, &quot;mount&quot; shows only /work[1-4], not the other
<br>
7 CWFS panfs (Panasas?), which apparently are not available in the compute nodes/blades.
<br>
<p>I presume you have access and are using only some of the /work[1-4]
<br>
(lustre) file systems for all your MPI and other software installation, right? Not the panfs, right?
<br>
<p>Awkward that it doesn't work, because lustre is supposed to be a parallel file system, highly available to all nodes (assuming it is mounted on all nodes).
<br>
<p>It also shows a small /tmp with a tmpfs file system, which is volatile, in memory:
<br>
<p><a href="http://en.wikipedia.org/wiki/Tmpfs">http://en.wikipedia.org/wiki/Tmpfs</a>
<br>
<p>I would guess they don't let you write there, so TMPDIR=/tmp may not be a possible option, but this is just a wild guess.
<br>
Or maybe OMPI requires an actual non-volatile file system to write its shared memory auxiliary files and other stuff that normally goes on /tmp?  [Jeff, Ralph, help!!] I kind of remember some old discussion on this list about this, but maybe it was in another list.
<br>
<p>[You could ask the sys admin about this, and perhaps what he recommends to use to replace /tmp.]
<br>
<p>Just in case they may have some file system mount point mixup, you could try perhaps TMPDIR=/work1/yanb/tmp (rather than /home) You could also try TMPDIR=/work3/yanb/tmp, as if I remember right this is another file system you have access to (not sure anymore, it may have been in the previous emails).
<br>
Either way, you may need to create the tmp directory beforehand.
<br>
<p>**
<br>
<p>Any chances that this is an environment mixup?
<br>
<p>Say, that you may be inadvertently using the SGI-MPI mpiexec Using a /full/path/to/mpiexec in your job may clarify this.
<br>
<p>&quot;which mpiexec&quot; will tell, but since the environment on the compute nodes may not be exactly the same as in the login node, it may not be reliable information.
<br>
<p>Or perhaps you may not be pointing to the OMPI libraries?
<br>
Are you exporting PATH and LD_LIBRARY_PATH on .bashrc/.tcshrc, with the OMPI items (bin and lib) *PREPENDED* (not appended), so as to take precedence over other possible/SGI/pre-existent MPI items?
<br>
<p>Those are pretty (ugly) common problems.
<br>
<p>**
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 03/03/2014 10:13 PM, Beichuan Yan wrote:
<br>
<span class="quotelev1">&gt; 1. info from a compute node
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ hostname
</span><br>
<span class="quotelev1">&gt; r32i1n1
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ df -h /home
</span><br>
<span class="quotelev1">&gt; Filesystem            Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev1">&gt; 10.148.18.45_at_o2ib:10.148.18.46_at_o2ib:/fs1
</span><br>
<span class="quotelev1">&gt;                        1.2P  136T  1.1P  12% /work1 -bash-4.1$ mount
</span><br>
<span class="quotelev1">&gt; devpts on /dev/pts type devpts (rw,gid=5,mode=620) tmpfs on /tmp type
</span><br>
<span class="quotelev1">&gt; tmpfs (rw,size=150m) none on /proc/sys/fs/binfmt_misc type binfmt_misc
</span><br>
<span class="quotelev1">&gt; (rw) cpuset on /dev/cpuset type cpuset (rw)
</span><br>
<span class="quotelev1">&gt; 10.148.18.45_at_o2ib:10.148.18.46_at_o2ib:/fs1 on /work1 type lustre
</span><br>
<span class="quotelev1">&gt; (rw,flock)
</span><br>
<span class="quotelev1">&gt; 10.148.18.76_at_o2ib:10.148.18.164_at_o2ib:/fs2 on /work2 type lustre
</span><br>
<span class="quotelev1">&gt; (rw,flock)
</span><br>
<span class="quotelev1">&gt; 10.148.18.104_at_o2ib:10.148.18.165_at_o2ib:/fs3 on /work3 type lustre
</span><br>
<span class="quotelev1">&gt; (rw,flock)
</span><br>
<span class="quotelev1">&gt; 10.148.18.132_at_o2ib:10.148.18.133_at_o2ib:/fs4 on /work4 type lustre
</span><br>
<span class="quotelev1">&gt; (rw,flock)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. For &quot;export TMPDIR=/home/yanb/tmp&quot;, I created it beforehand, and I did see mpi-related temporary files there when the job gets started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus
</span><br>
<span class="quotelev1">&gt; Correa
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 03, 2014 18:23
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI job initializing problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Beichuan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, it says &quot;unclassified.html&quot;, so I presume it is not a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The web site says the computer is an SGI ICE X.
</span><br>
<span class="quotelev1">&gt; I am not familiar to it, so what follows are guesses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The SGI site brochure suggests that the nodes/blades have local disks:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.sgi.com/pdfs/4330.pdf">https://www.sgi.com/pdfs/4330.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file systems prefixed with IP addresses (work[1-4]) and with panfs (cwfs and CWFS[1-6]) and a colon (:) are shared exports (not local), but not necessarily NFS (panfs may be Panasas?).
</span><br>
<span class="quotelev1">&gt;   From this output it is hard to tell where /home is, but I would guess it is also shared (not local).
</span><br>
<span class="quotelev1">&gt; Maybe &quot;df -h /home&quot; will tell.  Or perhaps &quot;mount&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may be logged in to a login/service node, so although it does have a /tmp (your ls / shows tmp), this doesn't guarantee that the compute nodes/blades also do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since your jobs failed when you specified TMPDIR=/tmp, I would guess /tmp doesn't exist on the nodes/blades, or is not writable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try to submit a job with, say, &quot;mpiexec -np 16 ls -ld /tmp&quot;?
</span><br>
<span class="quotelev1">&gt; This should tell if /tmp exists on the nodes, if it is writable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A stupid question:
</span><br>
<span class="quotelev1">&gt; When you tried your job with this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you create the directory /home/yanb/tmp beforehand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, you may need to ask the help of a system administrator of this machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/03/2014 07:43 PM, Beichuan Yan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using this system: <a href="http://centers.hpc.mil/systems/unclassified.html#Spirit">http://centers.hpc.mil/systems/unclassified.html#Spirit</a>. I don't know exactly configurations of the file system. Here is the output of &quot;df -h&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem            Size  Used Avail Use% Mounted on
</span><br>
<span class="quotelev2">&gt;&gt; /dev/sda6             919G   16G  857G   2% /
</span><br>
<span class="quotelev2">&gt;&gt; tmpfs                  32G     0   32G   0% /dev/shm
</span><br>
<span class="quotelev2">&gt;&gt; /dev/sda5             139M   33M  100M  25% /boot
</span><br>
<span class="quotelev2">&gt;&gt; adfs3v-s:/adfs3/hafs14
</span><br>
<span class="quotelev2">&gt;&gt;                         6.5T  678G  5.5T  11% /scratch
</span><br>
<span class="quotelev2">&gt;&gt; adfs3v-s:/adfs3/hafs16
</span><br>
<span class="quotelev2">&gt;&gt;                         6.5T  678G  5.5T  11% /var/spool/mail
</span><br>
<span class="quotelev2">&gt;&gt; 10.148.18.45_at_o2ib:10.148.18.46_at_o2ib:/fs1
</span><br>
<span class="quotelev2">&gt;&gt;                         1.2P  136T  1.1P  12% /work1
</span><br>
<span class="quotelev2">&gt;&gt; 10.148.18.132_at_o2ib:10.148.18.133_at_o2ib:/fs4
</span><br>
<span class="quotelev2">&gt;&gt;                         1.2P  793T  368T  69% /work4
</span><br>
<span class="quotelev2">&gt;&gt; 10.148.18.104_at_o2ib:10.148.18.165_at_o2ib:/fs3
</span><br>
<span class="quotelev2">&gt;&gt;                         1.2P  509T  652T  44% /work3
</span><br>
<span class="quotelev2">&gt;&gt; 10.148.18.76_at_o2ib:10.148.18.164_at_o2ib:/fs2
</span><br>
<span class="quotelev2">&gt;&gt;                         1.2P  521T  640T  45% /work2
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.0.10/CWFS
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/cwfs
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.61/CWFS1
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS1
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.0.210/CWFS2
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS2
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.125/CWFS3
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS3
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.224/CWFS4
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS4
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.224/CWFS5
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS5
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.224/CWFS6
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS6
</span><br>
<span class="quotelev2">&gt;&gt; panfs://172.16.1.224/CWFS7
</span><br>
<span class="quotelev2">&gt;&gt;                         728T  286T  443T  40% /p/CWFS7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. My home directory is /home/yanb.
</span><br>
<span class="quotelev2">&gt;&gt; My simulation files are located at /work3/yanb.
</span><br>
<span class="quotelev2">&gt;&gt; The default TMPDIR set by system is just /work3/yanb
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. I did try not to set TMPDIR and let it default, which is just case 1 and case 2.
</span><br>
<span class="quotelev2">&gt;&gt;     Case1: #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev2">&gt;&gt;               TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        It gives no apparent reason.
</span><br>
<span class="quotelev2">&gt;&gt;     Case2: #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev2">&gt;&gt;               #TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        It gives warning of shared memory file on network file system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. With &quot;export TMPDIR=/tmp&quot;, the job gives the same, no apparent reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. FYI, &quot;ls /&quot; gives:
</span><br>
<span class="quotelev2">&gt;&gt; ELT    apps  cgroup  hafs1   hafs12  hafs2  hafs5  hafs8        home   lost+found  mnt  p      root     selinux  tftpboot  var    work3
</span><br>
<span class="quotelev2">&gt;&gt; admin  bin   dev     hafs10  hafs13  hafs3  hafs6  hafs9        lib    media       net  panfs  sbin     srv      tmp       work1  work4
</span><br>
<span class="quotelev2">&gt;&gt; app    boot  etc     hafs11  hafs15  hafs4  hafs7  hafs_x86_64  lib64  misc        opt  proc   scratch  sys      usr       work2  workspace
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus
</span><br>
<span class="quotelev2">&gt;&gt; Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, March 03, 2014 17:24
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI job initializing problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are using the university cluster, chances are that /home is not local, but on an NFS share, or perhaps Lustre (which you may have mentioned before, I don't remember).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe &quot;df -h&quot; will show what is local what is not.
</span><br>
<span class="quotelev2">&gt;&gt; It works for NFS, it prefixes file systems with the server name, but I don't know about Lustre.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you try just not to set TMPDIR and let it default?
</span><br>
<span class="quotelev2">&gt;&gt; If the default TMPDIR is on Lustre (did you say this?, anyway I don't
</span><br>
<span class="quotelev2">&gt;&gt; remember) you could perhaps try to force it to /tmp:
</span><br>
<span class="quotelev2">&gt;&gt; export TMPDIR=/tmp,
</span><br>
<span class="quotelev2">&gt;&gt; If the cluster nodes are diskfull /tmp is likely to exist and be local to the cluster nodes.
</span><br>
<span class="quotelev2">&gt;&gt; [But the cluster nodes may be diskless ... :( ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/03/2014 07:10 PM, Beichuan Yan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How to set TMPDIR to a local filesystem? Is /home/yanb/tmp a local filesystem? I don't know how to tell a directory is local file system or network file system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, March 03, 2014 16:57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI job initializing problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about setting TMPDIR to a local filesystem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 3, 2014, at 3:43 PM, Beichuan Yan&lt;beichuan.yan_at_[hidden]&gt;    wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree there are two cases for pure-MPI mode: 1. Job fails with no apparent reason;  2 job complains shared-memory file on network file system, which can be resolved by &quot; export TMPDIR=/home/yanb/tmp&quot;, /home/yanb/tmp is my local directory. The default TMPDIR points to a Lustre directory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is no any other output. I checked my job with &quot;qstat -n&quot; and found that processes were actually not started on compute nodes even though PBS Pro has &quot;started&quot; my job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Beichuan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. Then I test pure-MPI mode: OPENMP is turned off, and each compute node runs 16 processes (clearly shared-memory of MPI is used). Four combinations of &quot;TMPDIR&quot; and &quot;TCP&quot; are tested:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case 1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #export TMPDIR=/home/yanb/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TCP=&quot;--mca btl_tcp_if_include 10.148.0.0/16&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun $TCP -np 64 -npernode 16 -hostfile $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./paraEllip3d input.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Start Prologue v2.5 Mon Mar  3 15:47:16 EST 2014 End Prologue v2.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mon Mar  3 15:47:16 EST 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -bash: line 1: 448597 Terminated              /var/spool/PBS/mom_priv/jobs/602244.service12.SC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Start Epilogue v2.5 Mon Mar  3 15:50:51 EST 2014 Statistics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpupercent=0,cput=00:00:00,mem=7028kb,ncpus=128,vmem=495768kb,wall
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; m
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =00:03:24 End Epilogue v2.5 Mon Mar  3 15:50:52 EST 2014
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like you have two general cases:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. The job fails for no apparent reason (like above), or 2. The job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complains that your TMPDIR is on a shared filesystem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the real issue, then, is to figure out why your jobs are failing with no output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there anything in the stderr output?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23778.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<li><strong>Previous message:</strong> <a href="23776.php">Vince Grimes: "[OMPI users] LOCAL QP OPERATION ERROR"</a>
<li><strong>In reply to:</strong> <a href="23770.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23779.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23779.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
