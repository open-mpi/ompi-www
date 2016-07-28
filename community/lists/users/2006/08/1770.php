<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 06:50:40 2006" -->
<!-- isoreceived="20060825105040" -->
<!-- sent="Fri, 25 Aug 2006 12:50:37 +0200" -->
<!-- isosent="20060825105037" -->
<!-- name="Christine Kreuzer" -->
<!-- email="c.kreuzer_at_[hidden]" -->
<!-- subject="[OMPI users] problem with ompi_info" -->
<!-- id="20060825125037.rtcwlmsrcnk8c848_at_webmail.rz.uni-saarland.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Christine Kreuzer (<em>c.kreuzer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 06:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">Caird, Andrew J: "Re: [OMPI users] Jumbo frames"</a>
<li><strong>Previous message:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>Reply:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I tried to install  openmpi-1.1 on a AMD 64 OPTERON dual core (RHEL 4).
<br>
I got no error message from ./configure and make all install.
<br>
Not all tests passed (oob_test oob_test_self oob_test_packed and test_schema
<br>
were skipped)so I entered ompi_info in the bin directory and got the following
<br>
error message:
<br>
<p>[root_at_dhcp76-200 openmpi-1.1]# ompi_info
<br>
ompi_info: error while loading shared libraries: libmpi.so.0: cannot open shared
<br>
object file: Nosuch file or directory
<br>
<p>The library libmpi.so.0 exists in the lib directory and is linked to
<br>
libmpi.so.0.0.0.
<br>
<p>Thanks for any help,
<br>
Christine
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1771.php">Caird, Andrew J: "Re: [OMPI users] Jumbo frames"</a>
<li><strong>Previous message:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>Reply:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
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
