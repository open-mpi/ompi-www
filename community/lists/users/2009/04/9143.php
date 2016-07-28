<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 12:19:20 2009" -->
<!-- isoreceived="20090429161920" -->
<!-- sent="Wed, 29 Apr 2009 12:19:10 -0400" -->
<!-- isosent="20090429161910" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49F87DFE.1010404_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904290349w72bc486m47e4bc8ae6155598_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 12:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>In reply to:</strong> <a href="9141.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>You can run the MITgcm ocean model test cases and the CAM3 atmospheric
<br>
model test with two processors only, but the codes scale well to
<br>
any number of processors.
<br>
They are &quot;real life&quot; applications, but not too hard to get to work.
<br>
It will take some reading of their README and INSTALL files,
<br>
and perhaps of their User Guides to understand how they work, though.
<br>
<p>You can even run them on a single processor, but if you want to make
<br>
the point that your cluster OpenMPI works, you want also to use more 
<br>
than one processor.
<br>
<p>You can download the tarballs from these links:
<br>
<p><a href="http://mitgcm.org/download/">http://mitgcm.org/download/</a>
<br>
<a href="http://www.ccsm.ucar.edu/models/atm-cam/download/">http://www.ccsm.ucar.edu/models/atm-cam/download/</a>
<br>
<p>CAM3 will require the NetCDF package, which is easy to install also:
<br>
<a href="http://www.unidata.ucar.edu/downloads/netcdf/netcdf-3_6_3/index.jsp">http://www.unidata.ucar.edu/downloads/netcdf/netcdf-3_6_3/index.jsp</a>
<br>
<p>You can even get the NetCDF package with yum, if you prefer.
<br>
(Try &quot;yum info netcdf&quot;.)
<br>
<p>However, the MITgcm can work even without NetCDF (although it can
<br>
benefit from NetCDF also).
<br>
<p>Of course there are simpler MPI programs out there, but they may be
<br>
what you called &quot;mathematical computations&quot; as opposed to &quot;real life 
<br>
applications&quot;.  :)
<br>
<p>Somebody already sent you this link before.
<br>
It has some simpler MPI programs:
<br>
<p><a href="http://www.pdc.kth.se/training/Tutor/MPI/Templates/index-frame.html">http://www.pdc.kth.se/training/Tutor/MPI/Templates/index-frame.html</a>
<br>
<p>These (online) books may have some MPI program examples:
<br>
<p>Ian Foster's (online) book (Ch. 8 is on MPI):
<br>
<p><a href="http://www.wotug.org/parallel/books/addison-wesley/dbpp/text/book.html">http://www.wotug.org/parallel/books/addison-wesley/dbpp/text/book.html</a>
<br>
<p>Peter Pacheco's book (a short version is online):
<br>
<p><a href="http://www.cs.usfca.edu/mpi/">http://www.cs.usfca.edu/mpi/</a>
<br>
<p>Here are other MPI program examples (not all are guaranteed to work):
<br>
<p><a href="http://www2.cs.uh.edu/~johnson2/labs.html">http://www2.cs.uh.edu/~johnson2/labs.html</a>
<br>
<a href="http://www.redbooks.ibm.com/redbooks/SG245380.html">http://www.redbooks.ibm.com/redbooks/SG245380.html</a>
<br>
<p>See more links to MPI tutorials, etc, here:
<br>
<a href="http://fats-raid.ldeo.columbia.edu/pages/parallel_programming.html#mpi">http://fats-raid.ldeo.columbia.edu/pages/parallel_programming.html#mpi</a>
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; @Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the applications in the links u have sent are really high level n i 
</span><br>
<span class="quotelev1">&gt; believe really expensive too as i will have 2 have a physical apparatus 
</span><br>
<span class="quotelev1">&gt; for various measurements along with the cluster. Am i right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9144.php">Brian Blank: "Re: [OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="9142.php">Jeff Squyres: "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>In reply to:</strong> <a href="9141.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
