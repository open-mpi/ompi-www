<?
$subject_val = "[OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 04:11:15 2014" -->
<!-- isoreceived="20140414081115" -->
<!-- sent="Mon, 14 Apr 2014 10:11:11 +0200" -->
<!-- isosent="20140414081111" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof" -->
<!-- id="534B981F.1060700_at_mpimet.mpg.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof<br>
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 04:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24174.php">Reuti: "Re: [OMPI users] Different output ubuntu /mac"</a>
<li><strong>Previous message:</strong> <a href="24172.php">Kamal: "[OMPI users] Different output ubuntu /mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>Reply:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>the attached mympi_test.f90 does not compile with intel and OpenMPI 
<br>
Version 1.7.4, apparently it also does not compile with 1.8.0.
<br>
<p>The Intel Compiler version is 14.0.2.
<br>
<p>tmp/ifortjKG1cP.o: In function `MAIN__':
<br>
mympi_test.f90:(.text+0x90): undefined reference to `mpi_sizeof0di4_'
<br>
<p>This is very similar to an error reported for older versions 1.4.x and 
<br>
1.5x for the the Portland Group compiler:
<br>
<p><a href="https://www.open-mpi.org/community/lists/devel/2010/09/8443.php">https://www.open-mpi.org/community/lists/devel/2010/09/8443.php</a>
<br>
<p>Obviously this got fixed with version 1.6.*, and this version is working 
<br>
with the intel compiler as well.
<br>
<p>Cheerio,
<br>
Luis
<br>
<pre>
-- 
                              \\\\\\
                              (-0^0-)
--------------------------oOO--(_)--OOo-----------------------------
  Luis Kornblueh                           Tel. : +49-40-41173289
  Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
  Bundesstr. 53
  D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
  Federal Republic of Germany

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24173/mympi_test.f90">mympi_test.f90</a>
</ul>
<!-- attachment="mympi_test.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24174.php">Reuti: "Re: [OMPI users] Different output ubuntu /mac"</a>
<li><strong>Previous message:</strong> <a href="24172.php">Kamal: "[OMPI users] Different output ubuntu /mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>Reply:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
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
