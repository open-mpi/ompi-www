<?
$subject_val = "[OMPI users] vader/sm not being picked up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 15:59:24 2015" -->
<!-- isoreceived="20150624195924" -->
<!-- sent="Wed, 24 Jun 2015 14:59:23 -0500" -->
<!-- isosent="20150624195923" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="[OMPI users] vader/sm not being picked up" -->
<!-- id="CAFGXdky=Tuj7Ep0JWYED-c_u5Uau4pcmAPM73F8o8TOwoJ0Nww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] vader/sm not being picked up<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 15:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27187.php">Jeff Squyres (jsquyres): "[OMPI users] Update to Open MPI version number scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>Reply:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Running OpenMPI 1.8.4 one application running on 16 cores of a single
<br>
node
<br>
takes over an hour compared to just 7 minutes for MPICH.  If I use
<br>
--mca btl vader,sm,self it runs in the same 7 minutes as MPICH.  If I throw
<br>
in
<br>
the tcp and openib btl's it also runs quickly, so it seems to just not be
<br>
picking
<br>
up the sm or vader btl's by default.  ompi_info shows the exclusivities set
<br>
correctly.  I've also installed OpenMPI 1.8.6 and it runs fine.  Can someone
<br>
take a look at the attached ompi_info output and let me know what is wrong
<br>
in the configuration, or if there was a bug that has been fixed.  Thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27188/ompi_info.out">ompi_info.out</a>
</ul>
<!-- attachment="ompi_info.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27187.php">Jeff Squyres (jsquyres): "[OMPI users] Update to Open MPI version number scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>Reply:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
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
