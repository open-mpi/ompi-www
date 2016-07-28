<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 08:25:14 2007" -->
<!-- isoreceived="20070330122514" -->
<!-- sent="Fri, 30 Mar 2007 08:24:37 -0400" -->
<!-- isosent="20070330122437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Jeff Squyres: &amp;quot;Re:  password orted problem&amp;quot;" -->
<!-- id="4A1ADBF0-05EB-49B7-BC52-F2187D6D749A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1175188105.5254.22.camel_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 08:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jens Klostermann: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2007, at 1:08 PM, Jens Klostermann wrote:
<br>
<p><span class="quotelev1">&gt; In reply to
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/12/2286.php">http://www.open-mpi.org/community/lists/users/2006/12/2286.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently switched to openmpi1.2 unfortunately the password problem
</span><br>
<span class="quotelev1">&gt; still persists! I generated new rsa keys and made passwordless ssh
</span><br>
<span class="quotelev1">&gt; available. This was tested by login to each node per passwordless ssh,
</span><br>
<span class="quotelev1">&gt; fortunately there are only 16 nodes:-).
</span><br>
<span class="quotelev1">&gt; The funny thing is it seems to be a problem only with my user and
</span><br>
<span class="quotelev1">&gt; appears randomly, but more likely if I uses more nodes.
</span><br>
<p>Is the problem still something like this:
<br>
<p><pre>
----
[say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
orted: Command not found.
-----
Because if so, it's a larger / non-MPI issue.  If the orted  
executable cannot be found on the remote node, there's no way Open  
MPI will succeed.
The question of *why* the orted can't be found may be a bit deeper of  
a problem -- if you have your PATH set right, etc., perhaps it's an  
NFS issue...?
&gt; One cure for the problem until now is using the option --mca
&gt; pls_rsh_debug. What does this switch do other than producing more  
&gt; output
&gt; that this resolves my problem?
It also slows the code down a bit such that the timing is different.
&gt; Two other questions what is the
&gt; -ras (Resource allocation subsystem): and how can I set this up/what
&gt; options to have
I would doubt that the ras is involved in the issue -- the ras is  
used to read hostfiles, analyze lists of hosts from resource  
managers, etc.  It doesn't actually do anything in the actual launch.
&gt; pls (Process launch subsystem): and how can I set this up/what options
&gt; to have?
I assume you're using the RSH launcher; you can use the ompi_info  
command to see what parameters are available for that component:
      ompi_info --param pls rsh
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jens Klostermann: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
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
