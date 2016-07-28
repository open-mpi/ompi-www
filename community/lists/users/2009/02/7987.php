<?
$subject_val = "Re: [OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 17:46:22 2009" -->
<!-- isoreceived="20090206224622" -->
<!-- sent="Fri, 6 Feb 2009 17:46:10 -0500" -->
<!-- isosent="20090206224610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global Communicator" -->
<!-- id="A56A39E1-401A-4916-925D-F33B534011E9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F53E389D6EDBD6408B5BEED30A9DAD630510E92B_at_HACSSEX005.ihess.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Global Communicator<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 17:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2009, at 11:59 AM, McCalla, Mac wrote:
<br>
<p><span class="quotelev1">&gt; Does the &quot;default mpirun command&quot; implementation match the build  
</span><br>
<span class="quotelev1">&gt; environment for quest_ompi.x ?
</span><br>
<span class="quotelev1">&gt; ie., what mpi implementation (mpich, LAM/MPI, OPENMPI, or other) was  
</span><br>
<span class="quotelev1">&gt; quest_ompi.x  compiled/linked with? and does that match the result  
</span><br>
<span class="quotelev1">&gt; of &quot;which mpirun&quot;?  You might try running a job using your PBS  
</span><br>
<span class="quotelev1">&gt; system that simply executes the which mpirun command and see what  
</span><br>
<span class="quotelev1">&gt; you get.
</span><br>
<p>Mac is dead-on in his analysis.
<br>
<p>You must compile your MPI application with exactly the same MPI  
<br>
implementation that you run it -- there is currently no binary  
<br>
compatibility between MPI implementations.  So if you compile your MPI  
<br>
application with Open MPI, then you must run it with Open MPI's mpirun/ 
<br>
mpiexec (which, as the man page notes, are exact synonyms of each  
<br>
other in Open MPI -- this is not necessarily true in other MPI  
<br>
implementations).
<br>
<p>If you compile your application with MPICH, then you must use MPICH's  
<br>
mpirun/mpiexec -- and you'll need to ask them for help if things don't  
<br>
work (i.e., it's an entirely different project and we're not qualified  
<br>
to give you help with their software).
<br>
<p>Finally, note that Open MPI &quot;understands&quot; PBS/Torque.  If your system  
<br>
administrator build Open MPI with PBS/Torque support, you don't need  
<br>
to list the hostfile on Open MPI's mpirun/mpiexec command line -- Open  
<br>
MPI will &quot;just figure it out&quot; and know a) what hosts to use and b) how  
<br>
many processes to launch.  Specifically, you can use this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
<p>(or, as Mac suggests, you might want to provide a full path name to  
<br>
mpiexec to ensure that you're getting the &quot;Right&quot; mpiexec)
<br>
<p>You can check your Open MPI installation to see if it has PBS/Torque  
<br>
support with the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info | grep tm
<br>
<p>If you see anything in the output like this (although the exact  
<br>
version numbers may be different):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v2.0, API v2.0, Component v1.4)
<br>
<p>then your Open MPI has this native PBS/Torque support built-in and you  
<br>
can avoid specifying a hostfile and -np arguments.
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
<li><strong>Next message:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Previous message:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7984.php">McCalla, Mac: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
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
