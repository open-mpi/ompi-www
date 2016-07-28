<?
$subject_val = "[OMPI users] uninstall";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 03:11:56 2009" -->
<!-- isoreceived="20090610071156" -->
<!-- sent="Wed, 10 Jun 2009 00:11:41 -0700" -->
<!-- isosent="20090610071141" -->
<!-- name="Jacob Balthazor" -->
<!-- email="jcb344_at_[hidden]" -->
<!-- subject="[OMPI users] uninstall" -->
<!-- id="E3AE76AB-12BF-4937-A24F-B9DBE9915E98_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] uninstall<br>
<strong>From:</strong> Jacob Balthazor (<em>jcb344_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 03:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Previous message:</strong> <a href="9588.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I downloaded compiled, and installed open mpi off the web site but  
<br>
was having problems. I then installed open mpi and ins libs via yum.  
<br>
Adter that I was able to compile and run mpi programs locally but ran  
<br>
into problems when I tried to run them across two computers (see  
<br>
output below). I was told that this was probably because I have two  
<br>
different copies of openmpi. I uninstalled openmpi via yum and am now  
<br>
trying to figure out the best way to uninstall the compiled version of  
<br>
openmpi to reinstall with a clean slate. Any suggestions?
<br>
<p>-Jacob
<br>
<p><p>On Jun 2, 2009, at 4:45 AM, Jeff Squyres wrote:
<br>
<p>This looks like you have two different versions of Open MPI installed  
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
<span class="quotelev1">&gt;       I am just getting my feet wet with openmpi and can't seem to  
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
<span class="quotelev1">&gt;        . ~/.bashrc
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Previous message:</strong> <a href="9588.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
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
