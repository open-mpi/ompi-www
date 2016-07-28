<?
$subject_val = "Re: [OMPI users] uninstall";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 07:28:16 2009" -->
<!-- isoreceived="20090610112816" -->
<!-- sent="Wed, 10 Jun 2009 05:28:02 -0600" -->
<!-- isosent="20090610112802" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] uninstall" -->
<!-- id="5E6920A5-2B66-470F-B05A-140FE8E430A8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E3AE76AB-12BF-4937-A24F-B9DBE9915E98_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] uninstall<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 07:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>In reply to:</strong> <a href="9589.php">Jacob Balthazor: "[OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you built OMPI from hand, you probably configured it with a -- 
<br>
prefix=foo option. Just &quot;rm -rf foo&quot; to uninstall, and then make sure  
<br>
your PATH and LD_LIBRARY_PATH don't include &quot;foo&quot; any more if you  
<br>
modified your .login and/or .cshrc files (or whatever you use).
<br>
<p><p>On Jun 10, 2009, at 1:11 AM, Jacob Balthazor wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I downloaded compiled, and installed open mpi off the web site but  
</span><br>
<span class="quotelev1">&gt; was having problems. I then installed open mpi and ins libs via yum.  
</span><br>
<span class="quotelev1">&gt; Adter that I was able to compile and run mpi programs locally but  
</span><br>
<span class="quotelev1">&gt; ran into problems when I tried to run them across two computers (see  
</span><br>
<span class="quotelev1">&gt; output below). I was told that this was probably because I have two  
</span><br>
<span class="quotelev1">&gt; different copies of openmpi. I uninstalled openmpi via yum and am  
</span><br>
<span class="quotelev1">&gt; now trying to figure out the best way to uninstall the compiled  
</span><br>
<span class="quotelev1">&gt; version of openmpi to reinstall with a clean slate. Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jacob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 4:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like you have two different versions of Open MPI  
</span><br>
<span class="quotelev1">&gt; installed on your two machines (it's hard to tell with the name  
</span><br>
<span class="quotelev1">&gt; &quot;localhost.localdomain&quot;, though -- can you name your two computers  
</span><br>
<span class="quotelev1">&gt; differently so that you can tell them apart in the output?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to have the same version of Open MPI installed on both  
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 3:52 AM, jacob Balthazor wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I am just getting my feet wet with openmpi and can't seem to  
</span><br>
<span class="quotelev2">&gt;&gt; get it running. I installed openmpi and all it's components via yum  
</span><br>
<span class="quotelev2">&gt;&gt; and am able compile and run programs with mpi locally but not  
</span><br>
<span class="quotelev2">&gt;&gt; across the two computers. I set up the keyed ssh on both mechines  
</span><br>
<span class="quotelev2">&gt;&gt; and am able to log into another without asking for a password. From  
</span><br>
<span class="quotelev2">&gt;&gt; reading online it looks like my problem may stem from an  
</span><br>
<span class="quotelev2">&gt;&gt; unconfigured .bash_profile as I don't think yum would have  
</span><br>
<span class="quotelev2">&gt;&gt; configured it for me. My question is where does yum stick the bin  
</span><br>
<span class="quotelev2">&gt;&gt; and lib files that I need to reference in my profile? What should  
</span><br>
<span class="quotelev2">&gt;&gt; my bash_profile look like? Thank you for reading and am eagerly  
</span><br>
<span class="quotelev2">&gt;&gt; awaiting your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Jacob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My Profile:
</span><br>
<span class="quotelev2">&gt;&gt; # .bash_profile
</span><br>
<span class="quotelev2">&gt;&gt; # Get the aliases and functions
</span><br>
<span class="quotelev2">&gt;&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev2">&gt;&gt;       . ~/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # User specific environment and startup programs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:$HOME/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run it:
</span><br>
<span class="quotelev2">&gt;&gt; [beowulf2_at_localhost Desktop]$ mpirun --hostfile hostfile -np 4 a.out
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:08564] Error: unknown option &quot;--bootproxy&quot;
</span><br>
<span class="quotelev2">&gt;&gt; input in flex scanner failed
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] ERROR: A daemon on node 192.168.0.3  
</span><br>
<span class="quotelev2">&gt;&gt; failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] ERROR: There may be more information  
</span><br>
<span class="quotelev2">&gt;&gt; available from
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev2">&gt;&gt; with status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [beowulf2_at_localhost Desktop]$
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
<li><strong>Next message:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9590.php">Gleb Igumnov: "[OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>In reply to:</strong> <a href="9589.php">Jacob Balthazor: "[OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9592.php">Gus Correa: "Re: [OMPI users] uninstall"</a>
<li><strong>Reply:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
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
