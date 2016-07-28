<?
$subject_val = "Re: [OMPI users] Fedora install problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 07:45:55 2009" -->
<!-- isoreceived="20090602114555" -->
<!-- sent="Tue, 2 Jun 2009 07:45:50 -0400" -->
<!-- isosent="20090602114550" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fedora install problem" -->
<!-- id="CED916E6-FDEB-4CCD-B7EB-3DA7A536942E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a902047b0906020052p46f95025m14d25a8ae458e9f8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fedora install problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 07:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like you have two different versions of Open MPI installed  
<br>
on your two machines (it's hard to tell with the name  
<br>
&quot;localhost.localdomain&quot;, though -- can you name your two computers  
<br>
differently so that you can tell them apart in the output?).
<br>
<p>You need to have the same version of Open MPI installed on both  
<br>
machines.
<br>
<p><p>On Jun 2, 2009, at 3:52 AM, jacob Balthazor wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I am just getting my feet wet with openmpi and can't seem to  
</span><br>
<span class="quotelev1">&gt; get it running. I installed openmpi and all it's components via yum  
</span><br>
<span class="quotelev1">&gt; and am able compile and run programs with mpi locally but not across  
</span><br>
<span class="quotelev1">&gt; the two computers. I set up the keyed ssh on both mechines and am  
</span><br>
<span class="quotelev1">&gt; able to log into another without asking for a password. From reading  
</span><br>
<span class="quotelev1">&gt; online it looks like my problem may stem from an  
</span><br>
<span class="quotelev1">&gt; unconfigured .bash_profile as I don't think yum would have  
</span><br>
<span class="quotelev1">&gt; configured it for me. My question is where does yum stick the bin  
</span><br>
<span class="quotelev1">&gt; and lib files that I need to reference in my profile? What should my  
</span><br>
<span class="quotelev1">&gt; bash_profile look like? Thank you for reading and am eagerly  
</span><br>
<span class="quotelev1">&gt; awaiting your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jacob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Profile:
</span><br>
<span class="quotelev1">&gt; # .bash_profile
</span><br>
<span class="quotelev1">&gt; # Get the aliases and functions
</span><br>
<span class="quotelev1">&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev1">&gt;         . ~/.bashrc
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # User specific environment and startup programs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:$HOME/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run it:
</span><br>
<span class="quotelev1">&gt; [beowulf2_at_localhost Desktop]$ mpirun --hostfile hostfile -np 4 a.out
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:08564] Error: unknown option &quot;--bootproxy&quot;
</span><br>
<span class="quotelev1">&gt; input in flex scanner failed
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] ERROR: A daemon on node 192.168.0.3  
</span><br>
<span class="quotelev1">&gt; failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev1">&gt; with status 2.
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [beowulf2_at_localhost Desktop]$
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
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
