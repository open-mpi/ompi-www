<?
$subject_val = "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:19:41 2009" -->
<!-- isoreceived="20090929131941" -->
<!-- sent="Tue, 29 Sep 2009 09:19:36 -0400" -->
<!-- isosent="20090929131936" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Failed to find the followingexecutable&amp;quot;	problemunder Torque" -->
<!-- id="EE410100-42A6-4A55-8820-0448C114964C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB0641B191_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 09:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10811.php">Nader Ahmadi: "[OMPI users] OMPI performace with Redhat Linux MRG"</a>
<li><strong>In reply to:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2009, at 12:17 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt;   Command:  ['mpirun', '--prefix /usr/mpi/intel/openmpi-1.2.8', '-np  
</span><br>
<span class="quotelev1">&gt; 8', '--mca btl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, yes, this would definitely be a problem.
<br>
<p><span class="quotelev1">&gt; whereas if I take the additional step of removing spaces from the  
</span><br>
<span class="quotelev1">&gt; arguments, it works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Command:  ['mpirun', '--prefix', '/usr/mpi/intel/openmpi-1.2.8',  
</span><br>
<span class="quotelev1">&gt; '--machinefile', '/var/spool/torque/aux/7854.fwnaeglingio', '-np',  
</span><br>
<span class="quotelev1">&gt; '8', '--mca', 'btl', '^tcp', '--mca', 'mpi_leave_pinned', '1', '-- 
</span><br>
<span class="quotelev1">&gt; mca', 'mpool_base_use_mem_hooks', '1', '-x', 'LD_LIBRARY_PATH', '- 
</span><br>
<span class="quotelev1">&gt; x', 'MPI_ENVIRONMENT=1', '/tmp/7854.fwnaeglingio/ 
</span><br>
<span class="quotelev1">&gt; falconv4_ibm_openmpi', '-cycles', '10', '-ri', 'restart.5010', '- 
</span><br>
<span class="quotelev1">&gt; ro', '/tmp/7854.fwnaeglingio/restart.5010']
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow the handling of the argv list by orterun has changed in  
</span><br>
<span class="quotelev1">&gt; 1.2.8 as compared to 1.2.2-1, as the spawned command used to execute  
</span><br>
<span class="quotelev1">&gt; just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing the elements in argv used to be split on spaces first,  
</span><br>
<span class="quotelev1">&gt; before being parsed, whereas now they are not, resulting in the  
</span><br>
<span class="quotelev1">&gt; first string being reported as an unrecognized option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I don't think we've changed that level of command line parsing in a  
<br>
long, long time, but then again 1.2.2 is a pretty long time ago.  So I  
<br>
guess it's possible...?  (I honestly don't remember)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10811.php">Nader Ahmadi: "[OMPI users] OMPI performace with Redhat Linux MRG"</a>
<li><strong>In reply to:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
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
