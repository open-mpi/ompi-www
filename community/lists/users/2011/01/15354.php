<?
$subject_val = "Re: [OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 21:49:11 2011" -->
<!-- isoreceived="20110113024911" -->
<!-- sent="Wed, 12 Jan 2011 21:49:02 -0500" -->
<!-- isosent="20110113024902" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: --hostfile option" -->
<!-- id="4D2E681E.8090705_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C953A21D.DCB7%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] More newbie question: --hostfile option<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 21:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can execute the command below:
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : -H 
</span><br>
<span class="quotelev1">&gt; compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
</span><br>
<span class="quotelev1">&gt; and I get:
</span><br>
<span class="quotelev1">&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev1">&gt;    compute-0-0.local
</span><br>
<span class="quotelev1">&gt;    compute-0-1.local
</span><br>
<span class="quotelev1">&gt;    compute-0-2.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a file myhosts, which looks like:
</span><br>
<span class="quotelev1">&gt;    compute-0-0 slots=1
</span><br>
<span class="quotelev1">&gt;    compute-0-1 slots=1
</span><br>
<span class="quotelev1">&gt;    compute-0-2 slots=1
</span><br>
<span class="quotelev1">&gt; but when I execute:
</span><br>
<span class="quotelev1">&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;    There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;      hostname
</span><br>
<span class="quotelev1">&gt;    that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt;    --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt;    launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;    libraries on the remote node. You may set your LD_LIBRARY_PATH to 
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt;    location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;    automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;    that caused that situation.
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, this works:
</span><br>
<span class="quotelev1">&gt;    $ mpirun --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev1">&gt;    compute-0-0.local
</span><br>
<span class="quotelev1">&gt;    compute-0-1.local
</span><br>
<span class="quotelev1">&gt;    compute-0-2.local
</span><br>
<span class="quotelev1">&gt;    $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I correct in concluding that &#150;H and &#151;hostfile cannot be issued in the
</span><br>
<span class="quotelev1">&gt; same mpirun command which contains a colon (:)?  Or is there any trick
</span><br>
<span class="quotelev1">&gt; or work-around to have both &#150;H and &#151;hostfile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Tena
<br>
<p>I don't know if this is an option for you, but OpenMPI can be built
<br>
integrated with a resource manager.
<br>
This obviates completely the need to specify the host list
<br>
on the mpirun command line, or to use
<br>
a hostfile, or to get involved with all this syntactical nitty-gritty.
<br>
OpenMPI will use exactly those resources (nodes, cores, etc) that are
<br>
made available to it by the resource manager upon your request.
<br>
<p>We use Torque here, which is simple, effective, and even available 
<br>
through RPM-type packages on many Linux distributions.
<br>
(Although it is also easy to build from source.)
<br>
I think OpenMPI also builds with SGE,
<br>
maybe with other resource managers too.
<br>
See the FAQ and the README file for more details on how to build
<br>
OpenMPI with Torque (or SGE) support.
<br>
<p>Resource managers are also a no-nonsense way to manage jobs, either
<br>
from one or from many users.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>PS - Looking at your node's names, it looks like to me you have a Rocks 
<br>
cluster, right?
<br>
Rocks has an SGE and a Torque roll.
<br>
You could install one of them (only one!), if not yet there, and enjoy!
<br>
('rocks list roll' will tell what you have.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
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
