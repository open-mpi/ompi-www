<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 21:55:59 2009" -->
<!-- isoreceived="20090812015559" -->
<!-- sent="Tue, 11 Aug 2009 21:55:50 -0400" -->
<!-- isosent="20090812015550" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="4A822126.20005_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="08AA38B8-9EDA-4A89-852E-1949F8AB2041_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 21:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<li><strong>Previous message:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>Jody Klymak wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at  17:35 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can check this, say, by logging in to each node and doing 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/bin/ompi_info and comparing the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep, they are all the same 1.3.3, SVN r21666, July 14th 2009.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Did you wipe off the old directories before reinstalling?
<br>
I had bad surprises by just running make again.
<br>
It is safer to cleanup, run configure, run make, run make install
<br>
all over again.
<br>
<p>I prefer to install on a NFS mounted directory,
<br>
and set the user environment (PATH, MANPATH, LD_LIBRARY_PATH, etc)
<br>
to search that directory before it looks for standard ones (such as 
<br>
/usr/local).
<br>
This ensures consistency on all nodes with a single installation,
<br>
no need to install on all nodes.
<br>
For clusters with a modest number of nodes this scales fine.
<br>
On different clusters I have used names such as /home/software,
<br>
/share/apps (Rocks cluster), etc,
<br>
for the main NFS mounted directory that
<br>
holds MPI and other applications,
<br>
and lives on the head node or on a storage node.
<br>
A lot of people do this.
<br>
<p>Another thing to look at is what is in your .bashrc/.tcshrc file,
<br>
whether it doesn't contain anything that may point to a different 
<br>
OpenMPI, modify the PATH mistakenly, etc.
<br>
I don't know about Mac OS-X, but in Linux the files in /etc/profile.d
<br>
often also set the user environment, and if they're wrong,
<br>
they can produce funny results.
<br>
Do you have any MPI related files there?
<br>
<p><span class="quotelev1">&gt; What about passwords?  ssh from server to node is passwordless, but do 
</span><br>
<span class="quotelev1">&gt; the nodes need to be passwordless as well?  i.e. is xserve01 trying to 
</span><br>
<span class="quotelev1">&gt; ssh to xserve02?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I would say so.
<br>
At least that is what we have on three Linux clusters.
<br>
passwordless ssh across any pair of nodes.
<br>
However, I would guess if this were not working,
<br>
other MPI versions wouldn't work either.
<br>
<p>In any case:
<br>
<p>Have you tried to ssh from node to node on all possible pairs?
<br>
<p>Do you have the public RSA key for all nodes on 
<br>
/etc/ssh/ssh_known_hosts2 (on all nodes)?
<br>
<p><span class="quotelev1">&gt; Anyway, not sure what else I can do to debug this. I'm considering 
</span><br>
<span class="quotelev1">&gt; rolling back to 1.1.5 and living without a queue manager...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>How could you roll back to 1.1.5,
<br>
now that you overwrote the directories?
<br>
<p>Hang in there!
<br>
The problem can be sorted out.
<br>
<p>Launching jobs with Torque is way much better than
<br>
using barebones mpirun.
<br>
You can queue up a sequence of MITgcm runs,
<br>
say one year each, each job pending on the correct
<br>
completion of the previous job, and just watch the results come out.
<br>
This and other features of resource managers
<br>
are very convenient, and you don't want to miss that.
<br>
If there is more than one user, then a resource manager is a must.
<br>
And you don't want to stay behind with the OpenMPI versions
<br>
and improvements either.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<li><strong>Previous message:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10327.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
