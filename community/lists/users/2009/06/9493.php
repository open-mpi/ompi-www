<?
$subject_val = "[OMPI users] Fedora install problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 03:52:13 2009" -->
<!-- isoreceived="20090602075213" -->
<!-- sent="Tue, 2 Jun 2009 00:52:09 -0700" -->
<!-- isosent="20090602075209" -->
<!-- name="jacob Balthazor" -->
<!-- email="jcb344_at_[hidden]" -->
<!-- subject="[OMPI users] Fedora install problem" -->
<!-- id="a902047b0906020052p46f95025m14d25a8ae458e9f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fedora install problem<br>
<strong>From:</strong> jacob Balthazor (<em>jcb344_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 03:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>Reply:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am just getting my feet wet with openmpi and can't seem to get it
<br>
running. I installed openmpi and all it's components via yum and am able
<br>
compile and run programs with mpi locally but not across the two computers.
<br>
I set up the keyed ssh on both mechines and am able to log into another
<br>
without asking for a password. From reading online it looks like my problem
<br>
may stem from an unconfigured .bash_profile as I don't think yum would have
<br>
configured it for me. My question is where does yum stick the bin and lib
<br>
files that I need to reference in my profile? What should my bash_profile
<br>
look like? Thank you for reading and am eagerly awaiting your reply.
<br>
<p>-Jacob
<br>
<p>My Profile:
<br>
# .bash_profile
<br>
# Get the aliases and functions
<br>
if [ -f ~/.bashrc ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. ~/.bashrc
<br>
fi
<br>
<p># User specific environment and startup programs
<br>
<p>PATH=$PATH:$HOME/bin
<br>
<p>export PATH
<br>
<p>When I try to run it:
<br>
[beowulf2_at_localhost Desktop]$ mpirun --hostfile hostfile -np 4 a.out
<br>
[localhost.localdomain:08564] Error: unknown option &quot;--bootproxy&quot;
<br>
input in flex scanner failed
<br>
[localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1166
<br>
[localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
errmgr_hnp.c at line 90
<br>
[localhost.localdomain:06428] ERROR: A daemon on node 192.168.0.3 failed to
<br>
start as expected.
<br>
[localhost.localdomain:06428] ERROR: There may be more information available
<br>
from
<br>
[localhost.localdomain:06428] ERROR: the remote shell (see above).
<br>
[localhost.localdomain:06428] ERROR: The daemon exited unexpectedly with
<br>
status 2.
<br>
[localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[localhost.localdomain:06428] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1198
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned
<br>
value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
[beowulf2_at_localhost Desktop]$
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9494.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9492.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links withOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>Reply:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
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
