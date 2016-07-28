<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 16:59:06 2009" -->
<!-- isoreceived="20090331205906" -->
<!-- sent="Tue, 31 Mar 2009 16:59:00 -0400" -->
<!-- isosent="20090331205900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="D6384F41-935B-495C-A084-42CD3556EEA8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090331203638.GR23981_at_gre.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 16:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8689.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8689.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My goal in having you try that statement in a standalone shell script  
<br>
wasn't the success or failure of the uname command -- but rather to  
<br>
figure out if something in that statement itself was causing the  
<br>
syntax error.
<br>
<p>Apparently it is not.  There's an errant character elsewhere that is  
<br>
causing the problem.  FWIW, you should be able to run ./config/ 
<br>
config.guess by itself and get a single line of output with no errors  
<br>
-- so you don't even have to test this in the larger context of Open  
<br>
MPI's configure process.  As you showed in an earlier mail, even that  
<br>
doesn't work.
<br>
<p>We get config.guess from git.savannah.gnu.org when we make OMPI  
<br>
tarballs.  FWIW, here's the md5 and sha1sums from the config.guess  
<br>
that I got from a 1.3.1 tarball:
<br>
<p>13:57] svbu-mpi:/home/jsquyres/openmpi-1.3.1 % md5sum config/ 
<br>
config.guess
<br>
6384bbc496ef6e69328a9a428c623cc5  config/config.guess
<br>
[13:58] svbu-mpi:/home/jsquyres/openmpi-1.3.1 % sha1sum config/ 
<br>
config.guess
<br>
199adb16fc94e6cf62912be5fbb69a77214b33e5  config/config.guess
<br>
<p>I would be pretty surprised if yours don't match.  If they don't  
<br>
there's some larger issue going on (e.g., filesystem corruption?) that  
<br>
would also be pretty surprising.
<br>
<p><p><p>On Mar 31, 2009, at 4:36 PM, Kevin McManus wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Mar 31, 2009 at 10:11:17PM +0200, Bogdan Costescu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 31 Mar 2009, Bogdan Costescu wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;'uname -X' is valid on Solaris, but not on Linux.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not good to reply to oneself, but I've looked at the archives and
</span><br>
<span class="quotelev2">&gt; &gt; realized that 'uname -X' comes from a message of the OP. My guess is
</span><br>
<span class="quotelev2">&gt; &gt; that the same source directory was used to build for Solaris
</span><br>
<span class="quotelev2">&gt; &gt; previously (maybe on shared NFS ?) and some state is being picked  
</span><br>
<span class="quotelev1">&gt; by a
</span><br>
<span class="quotelev2">&gt; &gt; new ./configure run who then decides to treat the system as Solaris.
</span><br>
<span class="quotelev2">&gt; &gt; So unpacking the archive again and starting building from scratch
</span><br>
<span class="quotelev2">&gt; &gt; might be a good idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine is isolated, no nfs but there is a SunStudio compiler  
</span><br>
<span class="quotelev1">&gt; suite
</span><br>
<span class="quotelev1">&gt; in my path before /bin and /user/bin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit worrying if this is the answer but will re-arrange paths and try
</span><br>
<span class="quotelev1">&gt; unpacking again - anything is worth a try :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Kevin McManus                                Queen Mary 413
</span><br>
<span class="quotelev1">&gt; School of Computing &amp; Mathematical Sciences,
</span><br>
<span class="quotelev1">&gt; University of Greenwich,
</span><br>
<span class="quotelev1">&gt; Old Royal Naval College,
</span><br>
<span class="quotelev1">&gt; Park Row, Greenwich,                   Tel +44 (0)208 331 8719
</span><br>
<span class="quotelev1">&gt; London, SE10 9LS                       Fax +44 (0)208 331 8665
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Greenwich, a charity and company limited by
</span><br>
<span class="quotelev1">&gt; guarantee, registered in England (reg no. 986729)
</span><br>
<span class="quotelev1">&gt; Registered Office: Old Royal Naval College
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
<li><strong>Next message:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8689.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8689.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8692.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
