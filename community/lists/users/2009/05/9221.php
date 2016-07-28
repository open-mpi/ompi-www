<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:38:05 2009" -->
<!-- isoreceived="20090505133805" -->
<!-- sent="Tue, 5 May 2009 09:38:00 -0400" -->
<!-- isosent="20090505133800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="735F8681-75FF-41E9-BBCA-9FA41F60B828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dad39cd60905050625t5bd7e4e6t5e256d10feaad867_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2009, at 9:25 AM, Jeroen Kleijer wrote:
<br>
<p><span class="quotelev1">&gt; If you wish to submit to lsf using its native commands (bsub) you  
</span><br>
<span class="quotelev1">&gt; can do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -q ${QUEUE} -a openmpi -n ${CPUS} &quot;mpirun.lsf  -x PATH -x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH -x MPI_BUFFER_SIZE ${COMMAND} ${OPTIONS}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be noted that in this case you don't call OpenMPI's mpirun  
</span><br>
<span class="quotelev1">&gt; directly but use the mpirun.lsf, a wrapper script provided by LSF.  
</span><br>
<span class="quotelev1">&gt; This wrapper script takes care of setting the necessary environment  
</span><br>
<span class="quotelev1">&gt; variables and eventually calls the correct mpirun. (the option &quot;-a  
</span><br>
<span class="quotelev1">&gt; openmpi&quot; tells LSF that we're using OpenMPI so don't try to  
</span><br>
<span class="quotelev1">&gt; autodetect)
</span><br>
<p>I had forgotten about this.
<br>
<p>I should ask my LSF contacts if this method still works with Open MPI  
<br>
v1.3 (which natively supports LSF), or whether strange / interesting  
<br>
failures occur because of the integration that mpirun.lsf does ends up  
<br>
effectively conflicting with what OMPI's mpirun does internally...
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
<li><strong>Next message:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
