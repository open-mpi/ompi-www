<?
$subject_val = "[OMPI users] problem with installing openmp 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 15:37:42 2009" -->
<!-- isoreceived="20090820193742" -->
<!-- sent="Thu, 20 Aug 2009 19:37:37 +0000 (GMT)" -->
<!-- isosent="20090820193737" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] problem with installing openmp 1.3" -->
<!-- id="12351.20003.qm_at_web28313.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem with installing openmp 1.3<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-20 15:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Previous message:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Reply:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I tried to install openmpi 1.3 in my home directory on one of the nodes of our cluster. I have adminsitrative rights and is installing as a superuser. The configure phase is fine. The make all install part give me the following problems:
<br>
<p>#######################################
<br>
test -z &quot;/home/jean/openmpi/share/openmpi&quot; || /bin/mkdir -p &quot;/home/jean/openmpi/share/openmpi&quot;
<br>
&#160;/usr/bin/install -c -m 644 'base/help-orte-odls-base.txt' '/home/jean/openmpi/share/openmpi/help-orte-odls-base.txt'
<br>
/usr/bin/install: accessing `/home/jean/openmpi/share/openmpi/help-orte-odls-base.txt': Transport endpoint is not connected
<br>
make[3]: *** [install-dist_pkgdataDATA] Error 1
<br>
make[3]: Leaving directory `/root/openmpi-1.3/orte/mca/odls'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/root/openmpi-1.3/orte/mca/odls'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/root/openmpi-1.3/orte'
<br>
make: *** [install-recursive] Error 1
<br>
#########################################
<br>
<p>Any help will be very appreciated.
<br>
<p>Jean
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Previous message:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Reply:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
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
