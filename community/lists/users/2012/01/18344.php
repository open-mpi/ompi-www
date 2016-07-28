<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 14:19:33 2012" -->
<!-- isoreceived="20120131191933" -->
<!-- sent="Tue, 31 Jan 2012 20:19:18 +0100" -->
<!-- isosent="20120131191918" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="3CBDDF52-3A9D-4E76-A607-D165754ECCB8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB028285-9D3E-4FD2-B7B2-A34057A503A2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 14:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18343.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18343.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 20:12 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; I only noticed after the fact that Tom is also here at Cisco (it's a big company, after all :-) ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've contacted him using our proprietary super-secret Cisco handshake (i.e., the internal phone network); I'll see if I can figure out the issues off-list.
</span><br>
<p>But I would be interested in a statement about a hostlist for singleton startups. Or whether it's honoring the tight integration nodes more by accident than by design. And as said: I see a wrong allocation, as the initial ./Mpitest doesn't count as process. I get a 3+1 allocation instead of 2+2 (what is granted by SGE). If started with &quot;mpiexec -np 1 ./Mpitest&quot; all is fine.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Jan 31, 2012, at 1:08 PM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe it's a side effect of a tight integration that it would start on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the correct nodes (but I face an incorrect allocation of slots and an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message at the end if started without mpiexec), as in this case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it has no command line option for the hostfile. How to get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested nodes if started from the command line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I wouldn't expect it to work without mpirun/mpiexec and, of course,
</span><br>
<span class="quotelev2">&gt;&gt; I basically agree with Reuti about the rest.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there is an actual SGE problem or need for an enhancement, though,
</span><br>
<span class="quotelev2">&gt;&gt; please file it per <a href="https://arc.liv.ac.uk/trac/SGE#mail">https://arc.liv.ac.uk/trac/SGE#mail</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="18345.php">Daniel Milroy: "[OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="18343.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18343.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18347.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
