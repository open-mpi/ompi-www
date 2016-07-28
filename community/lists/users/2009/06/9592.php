<?
$subject_val = "Re: [OMPI users] uninstall";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 12:45:11 2009" -->
<!-- isoreceived="20090610164511" -->
<!-- sent="Wed, 10 Jun 2009 12:45:01 -0400" -->
<!-- isosent="20090610164501" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] uninstall" -->
<!-- id="4A2FE30D.3070909_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E6920A5-2B66-470F-B05A-140FE8E430A8_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 12:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Previous message:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jacob
<br>
<p>Besides Ralph's suggestion,
<br>
see these FAQs (# 4 and # 5):
<br>
<a href="http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi">http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi</a>
<br>
<p>Easy way is to install on an NFS mounted directory on all computers.
<br>
This way only one installation is needed (e.g. 
<br>
/share/apps/openmpi-1.3.2, which
<br>
is a typical shared directory name if you use Rocks clusters).
<br>
<p>Another way is to install on a directory with the same name on each 
<br>
computer (e.g. /opt/openmpi-1.3.2, every computer has its own /opt).
<br>
This way you have to install on every computer (or copy over the whole
<br>
OpenMPI directory tree to all of them, if the computers have the same 
<br>
architecture).
<br>
<p>Use the configure --prefix=/directory/name to choose the installation 
<br>
directory.
<br>
Don't choose the standard locations /usr or /usr/local, as it may
<br>
overwrite existing MPIs and mess things up with yum.
<br>
<p>I hope this helps.
<br>
Gus Correa
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
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; When you built OMPI from hand, you probably configured it with a 
</span><br>
<span class="quotelev1">&gt; --prefix=foo option. Just &quot;rm -rf foo&quot; to uninstall, and then make sure 
</span><br>
<span class="quotelev1">&gt; your PATH and LD_LIBRARY_PATH don't include &quot;foo&quot; any more if you 
</span><br>
<span class="quotelev1">&gt; modified your .login and/or .cshrc files (or whatever you use).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2009, at 1:11 AM, Jacob Balthazor wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I downloaded compiled, and installed open mpi off the web site but 
</span><br>
<span class="quotelev2">&gt;&gt; was having problems. I then installed open mpi and ins libs via yum. 
</span><br>
<span class="quotelev2">&gt;&gt; Adter that I was able to compile and run mpi programs locally but ran 
</span><br>
<span class="quotelev2">&gt;&gt; into problems when I tried to run them across two computers (see 
</span><br>
<span class="quotelev2">&gt;&gt; output below). I was told that this was probably because I have two 
</span><br>
<span class="quotelev2">&gt;&gt; different copies of openmpi. I uninstalled openmpi via yum and am now 
</span><br>
<span class="quotelev2">&gt;&gt; trying to figure out the best way to uninstall the compiled version of 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi to reinstall with a clean slate. Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Jacob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2009, at 4:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like you have two different versions of Open MPI installed 
</span><br>
<span class="quotelev2">&gt;&gt; on your two machines (it's hard to tell with the name 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;localhost.localdomain&quot;, though -- can you name your two computers 
</span><br>
<span class="quotelev2">&gt;&gt; differently so that you can tell them apart in the output?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need to have the same version of Open MPI installed on both machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2009, at 3:52 AM, jacob Balthazor wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I am just getting my feet wet with openmpi and can't seem to get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it running. I installed openmpi and all it's components via yum and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am able compile and run programs with mpi locally but not across the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two computers. I set up the keyed ssh on both mechines and am able to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log into another without asking for a password. From reading online 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it looks like my problem may stem from an unconfigured .bash_profile 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as I don't think yum would have configured it for me. My question is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where does yum stick the bin and lib files that I need to reference 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my profile? What should my bash_profile look like? Thank you for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reading and am eagerly awaiting your reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Jacob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My Profile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # .bash_profile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Get the aliases and functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       . ~/.bashrc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # User specific environment and startup programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=$PATH:$HOME/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try to run it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beowulf2_at_localhost Desktop]$ mpirun --hostfile hostfile -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:08564] Error: unknown option &quot;--bootproxy&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; input in flex scanner failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] ERROR: A daemon on node 192.168.0.3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] ERROR: There may be more information 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] ERROR: The daemon exited unexpectedly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with status 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beowulf2_at_localhost Desktop]$
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9593.php">Gleb \: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart routine."</a>
<li><strong>Previous message:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<li><strong>In reply to:</strong> <a href="9591.php">Ralph Castain: "Re: [OMPI users] uninstall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
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
