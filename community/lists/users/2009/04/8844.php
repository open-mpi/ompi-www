<?
$subject_val = "Re: [OMPI users] MPI can not open file?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 15:57:55 2009" -->
<!-- isoreceived="20090408195755" -->
<!-- sent="Wed, 8 Apr 2009 14:57:50 -0500" -->
<!-- isosent="20090408195750" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI can not open file?" -->
<!-- id="48178577-C05C-42DB-9B8C-3CE2366C6846_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DB3360.8070107_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI can not open file?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 15:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
<li><strong>Previous message:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2009, at 6:05 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; [bknapp_at_quoVadis04 testSet]$ mpirun -np 8 -machinefile /home/bknapp/ 
</span><br>
<span class="quotelev1">&gt; scripts/machinefile.txt mdrun -np 8 -nice 0 -s  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
</span><br>
<p>I don't know anything about gromacs, but is that above command right?
<br>
<p>You're using both &quot;mpirun -np 8&quot; *and* &quot;mdrun -np 8&quot; -- are they  
<br>
supposed to be used together like that?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
<li><strong>Previous message:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
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
