<?
$subject_val = "Re: [OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 22:31:28 2011" -->
<!-- isoreceived="20110113033128" -->
<!-- sent="Wed, 12 Jan 2011 19:26:49 -0800" -->
<!-- isosent="20110113032649" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: --hostfile option" -->
<!-- id="C953B0F9.DCC7%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4D2E681E.8090705_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 22:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Previous message:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gus.  I am encouraged.  I will look into Torque
<br>
in a day or two or three.
<br>
<p>Regards,
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/12/11 6:49 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can execute the command below:
</span><br>
<span class="quotelev2">&gt;&gt;    $ mpirun -H vixen -np 1 hostname : -H
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; and I get:
</span><br>
<span class="quotelev2">&gt;&gt;    vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-0.local
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-2.local
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a file myhosts, which looks like:
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-0 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-2 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; but when I execute:
</span><br>
<span class="quotelev2">&gt;&gt;    $ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; I get:
</span><br>
<span class="quotelev2">&gt;&gt;    There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt;      hostname
</span><br>
<span class="quotelev2">&gt;&gt;    that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;    Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt;    --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt;    launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt;    libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt;    location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt;    automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt;    that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly, this works:
</span><br>
<span class="quotelev2">&gt;&gt;    $ mpirun --hostfile myhosts -np 3 hostname
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-0.local
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt;    compute-0-2.local
</span><br>
<span class="quotelev2">&gt;&gt;    $
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I correct in concluding that &#173;H and &#139;hostfile cannot be issued in the
</span><br>
<span class="quotelev2">&gt;&gt; same mpirun command which contains a colon (:)?  Or is there any trick
</span><br>
<span class="quotelev2">&gt;&gt; or work-around to have both &#173;H and &#139;hostfile?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if this is an option for you, but OpenMPI can be built
</span><br>
<span class="quotelev1">&gt; integrated with a resource manager.
</span><br>
<span class="quotelev1">&gt; This obviates completely the need to specify the host list
</span><br>
<span class="quotelev1">&gt; on the mpirun command line, or to use
</span><br>
<span class="quotelev1">&gt; a hostfile, or to get involved with all this syntactical nitty-gritty.
</span><br>
<span class="quotelev1">&gt; OpenMPI will use exactly those resources (nodes, cores, etc) that are
</span><br>
<span class="quotelev1">&gt; made available to it by the resource manager upon your request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use Torque here, which is simple, effective, and even available
</span><br>
<span class="quotelev1">&gt; through RPM-type packages on many Linux distributions.
</span><br>
<span class="quotelev1">&gt; (Although it is also easy to build from source.)
</span><br>
<span class="quotelev1">&gt; I think OpenMPI also builds with SGE,
</span><br>
<span class="quotelev1">&gt; maybe with other resource managers too.
</span><br>
<span class="quotelev1">&gt; See the FAQ and the README file for more details on how to build
</span><br>
<span class="quotelev1">&gt; OpenMPI with Torque (or SGE) support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Resource managers are also a no-nonsense way to manage jobs, either
</span><br>
<span class="quotelev1">&gt; from one or from many users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS - Looking at your node's names, it looks like to me you have a Rocks
</span><br>
<span class="quotelev1">&gt; cluster, right?
</span><br>
<span class="quotelev1">&gt; Rocks has an SGE and a Torque roll.
</span><br>
<span class="quotelev1">&gt; You could install one of them (only one!), if not yet there, and enjoy!
</span><br>
<span class="quotelev1">&gt; ('rocks list roll' will tell what you have.)
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
<li><strong>Next message:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Previous message:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
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
