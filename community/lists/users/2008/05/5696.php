<?
$subject_val = "Re: [OMPI users] qsub and limits.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 11:46:07 2008" -->
<!-- isoreceived="20080517154607" -->
<!-- sent="Sat, 17 May 2008 17:45:50 +0200" -->
<!-- isosent="20080517154550" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub and limits.conf" -->
<!-- id="20080517154550.GA14055_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5530226b0805170758x4b439aben3a26eccf650ac49c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub and limits.conf<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-17 11:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Previous message:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, May 17, 2008 at 04:58:30PM +0200, Javier Lazaro wrote:
<br>
<p><span class="quotelev1">&gt; I have install torque-2.3.0 and openmpi-1.2.3.
</span><br>
<p>Open MPI-1.2.6 is available.
<br>
<p><span class="quotelev1">&gt; I make tests and I have discovered that the jobs launched with the parameter
</span><br>
<span class="quotelev1">&gt; '-hostfile' or '-machinefile' stops are to exceed the limits in the file
</span><br>
<span class="quotelev1">&gt; /etc/security/limits.conf
</span><br>
<p>You cannot blame Open MPI for that. It's either Torque's responsibility
<br>
or the system's task to enforce settings.
<br>
<p>MPI isn't about memory limits, runtime limitations, number of processes
<br>
and so on. Not at all.
<br>
<p>I suggest you go and ask the Torque mailinglist.
<br>
<p><span class="quotelev1">&gt; cat ${PBS_NODEFILE}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile ${PBS_NODEFILE} /home/javier/mpi_hola/a.out
</span><br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
<br>
<p>You don't need to read the hostfile yourself, there is a Torque launch
<br>
module included in Open MPI.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>Previous message:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Javier Lazaro: "[OMPI users] qsub and limits.conf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
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
