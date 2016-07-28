<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 15:52:35 2007" -->
<!-- isoreceived="20070312195235" -->
<!-- sent="Mon, 12 Mar 2007 15:52:24 -0400" -->
<!-- isosent="20070312195224" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] LSF &amp;amp; OpenMPI" -->
<!-- id="F1D1F3F0-303E-4F12-A21B-23C4751579D9_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 15:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the status of LSF and OpenMPI?
<br>
<p>I'm running on a major HPC system using GM &amp; LSF and we have to use a  
<br>
number of workarounds so that we can use OpenMPI.  Specifically,  
<br>
using the scripts on this system we have to have our csh file source  
<br>
a file to set up the environment on the nodes.  Using OpenMPI's  
<br>
mpirun directly does not work because at the very minimum the hosts  
<br>
to run on are not available to it, I had a work around but there it  
<br>
seems that the environment is not passed to the nodes.
<br>
<p>The notes from the support people indicate that the problem is that  
<br>
openmpi's mpirun command doesn't recognize the &quot;-gm-copy-env&quot;  
<br>
option.  Does this mean anything to anyone?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r12073
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>Have there been any improvements in the compatibility of OpenMPI with  
<br>
LSF since version 1.1.2?
<br>
<p>Does anyone in the OpenMPI team have access to a system using the LSF  
<br>
batch queueing system?  Is an machine with Gm and LSF different yet?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2777.php">Reuti: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2779.php">Ralph Castain: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
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
