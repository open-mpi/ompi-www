<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 15:00:24 2011" -->
<!-- isoreceived="20110224200024" -->
<!-- sent="Thu, 24 Feb 2011 19:59:30 +0000" -->
<!-- isosent="20110224195930" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF06E515B6586_at_GVW1341EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22D98CAE-923A-4BA0-80B9-4A5D9D4FA05E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM environment variables at runtime<br>
<strong>From:</strong> Henderson, Brent (<em>brent.henderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 14:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15737.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15737.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 24, 2011 10:20 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2011, at 11:15 AM, Henderson, Brent wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that the parent of the sleep processes is orted and that orted
</span><br>
<span class="quotelev1">&gt; was started by slurmstepd.  Unless orted is updating the slurm
</span><br>
<span class="quotelev1">&gt; variables for the children (which is doubtful) then they will not
</span><br>
<span class="quotelev1">&gt; contain the specific settings that I see when I run srun directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by that statement.  The orted passes its
</span><br>
<span class="quotelev1">&gt; environment to its children; so whatever the slurm stepd set in the
</span><br>
<span class="quotelev1">&gt; environment for the orted, the children should be getting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>While you are correct the environment is inherited to the children, sometimes that does not make sense.  Take for example SLURM_PROCID.  If slurmstepd starts the orted and sets its SLURM_PROCID, then the children sleep processes (of orted) would get that as well exactly as it is in orted.  That is clearly misleading at best.  For example:
<br>
<p>[brent_at_node2 mpi]$ mpirun -np 4 --bynode sleep 300
<br>
<p>Then looking at the remote node:
<br>
<p>[brent_at_node1 mpi]$ ps -fu brent
<br>
UID        PID  PPID  C STIME TTY          TIME CMD
<br>
brent     2853  2850  0 13:23 ?        00:00:00 /mnt/node1/home/brent/bin/openmpi143/bin/orted -mca
<br>
brent     2856  2853  0 13:23 ?        00:00:00 sleep 300
<br>
brent     2857  2853  0 13:23 ?        00:00:00 sleep 300
<br>
(snip)
<br>
<p>And the SLURM_PROCID from each process:
<br>
<p>[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2853/environ | egrep ^SLURM_ | grep PROCID
<br>
SLURM_PROCID=0
<br>
[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2856/environ | egrep ^SLURM_ | grep PROCID
<br>
SLURM_PROCID=0
<br>
[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2857/environ | egrep ^SLURM_ | grep PROCID
<br>
SLURM_PROCID=0
<br>
[brent_at_node1 mpi]$
<br>
<p>They really can't be all SLURM_PROCID=0 - that is supposed to be unique for the job - right?  It appears that the SLURM_PROCID is inherited from the orted parent - which makes a fair amount of sense given how things are launched.  If I use HP-MPI, the slurmstepd starts each of the sleep processes and it does set SLURM_PROCID uniquely when launching each child.  This is the crux of my issue.
<br>
<p>I did find that there are OMPI_* variables that I can map internally back to what I think that the slurm variables should be:
<br>
<p>[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2853/environ | egrep ^OMPI | grep WORLD
<br>
[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2856/environ | egrep ^OMPI | grep WORLD
<br>
OMPI_COMM_WORLD_SIZE=4
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2
<br>
OMPI_COMM_WORLD_RANK=1
<br>
OMPI_COMM_WORLD_LOCAL_RANK=0
<br>
[brent_at_node1 mpi]$ perl -p -e 's/\0/\n/g' /proc/2857/environ | egrep ^OMPI | grep WORLD
<br>
OMPI_COMM_WORLD_SIZE=4
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=2
<br>
OMPI_COMM_WORLD_RANK=3
<br>
OMPI_COMM_WORLD_LOCAL_RANK=1
<br>
[brent_at_node1 mpi]$
<br>
<p>So, I think if I combined some OMPI_* things with SLURM_* things, I should be o.k. for what I need.
<br>
<p>Now to answer the other question - why are there some variables missing.  It appears that when the orted processes are launched - via srun but only one per node, it is a subset of the main allocation and thus some of the environment variables are not the same (or missing entirely) as compared to launching them directly with srun on the full allocation.  This also makes sense to me at some level, so I'm at peace with it now.  :)
<br>
<p><span class="quotelev1">&gt; Clearly, something is different here -- maybe we do have a bug -- but
</span><br>
<span class="quotelev1">&gt; as you stated below, why does it work for me?  Is SLURM 2.2.x the
</span><br>
<span class="quotelev1">&gt; difference?  I don't know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I'm tempted to try the older version of slurm as this might be the cause of the missing environment variables, but that is an experiment for another day.  I'll see if I can make do with what I see currently.
<br>
<p><span class="quotelev2">&gt; &gt; Now, the question still is, why does this work for Jeff?  :)  Is
</span><br>
<span class="quotelev1">&gt; there a way to get orted out of the way so the sleep processes are
</span><br>
<span class="quotelev1">&gt; launched directly by srun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes; see Ralph's prior mail about direct srun support in Open MPI
</span><br>
<span class="quotelev1">&gt; 1.5.x.  You lose some functionality / features that way, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Maybe that will be an answer, but I'll see if I can make things work with 1.4.3 for now.
<br>
<p>Last thing before I go.  Please let me apologize for not being clear on what I disagreed with Ralph about in my last note.  Clearly he nailed the orted launching process and spelled it out very clearly, but I don't believe that HP-MPI is not doing anything special to copy/fix up the SLURM environment variables.  Hopefully that was clear by the body of that message.  
<br>
<p>I think we are done here as I think I can make something work with the various environment variables now.  Many thanks to Jeff and Ralph for their suggestions and insight on this issue!
<br>
<p>Brent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15739.php">James Dinan: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>Previous message:</strong> <a href="15737.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15737.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
