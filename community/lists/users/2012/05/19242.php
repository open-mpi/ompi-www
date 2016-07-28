<?
$subject_val = "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 18:00:49 2012" -->
<!-- isoreceived="20120509220049" -->
<!-- sent="Wed, 9 May 2012 23:00:39 +0100 (WEST)" -->
<!-- isosent="20120509220039" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with SGE: &amp;quot;-np N&amp;quot; for mpirun needed?" -->
<!-- id="alpine.DEB.2.00.1205092254410.12062_at_serodio" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FAAD62B.9040001_at_seznam.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 18:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<li><strong>Previous message:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 May 2012, Jiri Polach wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You might want to use a smaller number of processors than those made
</span><br>
<span class="quotelev2">&gt;&gt; available by SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for replying. I can imagine that in some special cases it might be 
</span><br>
<span class="quotelev1">&gt; useful to request N processors from SGE and than use M&lt;N; in such cases I 
</span><br>
<span class="quotelev1">&gt; would specify &quot;-np M&quot; for mpirun, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this does not answer the question - if I just want to use as many 
</span><br>
<span class="quotelev1">&gt; processors as I request from SGE - do I need to specify &quot;-np N&quot; for mpirun or 
</span><br>
<span class="quotelev1">&gt; not?
</span><br>
<p>Openmpi can be compiled with SGE integration. If present, you don't need 
<br>
to use the -np argument (I'm checking one of my submit scripts).
<br>
<p>Otherwise I use
<br>
<p>-np $NSLOTS
<br>
<p>$NSLOTS is given transparently by SGE with the total number of slots
<br>
<p>If sge integration is not available (check through ompi_info) you also 
<br>
might have to build the hostfile.
<br>
<p>(which could be achieved, for instance, with
<br>
<p>HOSTFILE=hostfile
<br>
awk '{print $1&quot; cpu=&quot;$2}' ${PE_HOSTFILE} &gt; ${HOSTFILE}
<br>
<p>mpirun -machinefile ${HOSTFILE} -np ${NSLOTS} ${EXEC}
<br>
<p><p>)
<br>
<p><p>best (sorry if I extended the answer)
<br>
<p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
<br>
<p>&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;Institutional Address:
<br>
<p>&nbsp;&nbsp;Ricardo J.N. dos Reis
<br>
&nbsp;&nbsp;IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
<br>
&nbsp;&nbsp;Av. Rovisco Pais
<br>
&nbsp;&nbsp;1049-001 Lisboa
<br>
&nbsp;&nbsp;Portugal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- email sent with alpine 2.00 -
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<li><strong>Previous message:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>In reply to:</strong> <a href="19241.php">Jiri Polach: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
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
