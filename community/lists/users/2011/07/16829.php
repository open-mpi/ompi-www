<?
$subject_val = "[OMPI users] openmpi-1.5.2 installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 05:33:54 2011" -->
<!-- isoreceived="20110706093354" -->
<!-- sent="Wed, 6 Jul 2011 11:27:07 +0200" -->
<!-- isosent="20110706092707" -->
<!-- name="Sushil Mishra" -->
<!-- email="sushilbioinfo_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.5.2 installation problem" -->
<!-- id="CAJ-S7c-YAypU3CXpZ0x_8q-meOraMXF7XGN3CxR+AJhm-YQtsA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.5.2 installation problem<br>
<strong>From:</strong> Sushil Mishra (<em>sushilbioinfo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 05:27:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
I am trying to install openmpi-1.5.2 in Debian 4.3.2-1.1. I am not a root
<br>
user and I have to do it as user. The problem I am facing is in &quot;make all&quot;
<br>
and error is fallowing:
<br>
<p><p>Making all in mca/plm/tm
<br>
make[2]: Entering directory
<br>
`/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
<br>
&nbsp;&nbsp;CC     plm_tm_component.lo
<br>
&nbsp;&nbsp;CC     plm_tm_module.lo
<br>
&nbsp;&nbsp;CCLD   mca_plm_tm.la
<br>
/bin/grep: /usr/lib/libgssapi.la: No such file or directory
<br>
/bin/sed: can't read /usr/lib/libgssapi.la: No such file or directory
<br>
libtool: link: `/usr/lib/libgssapi.la' is not a valid libtool archive
<br>
make[2]: *** [mca_plm_tm.la] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>It cant find libgssapi.la file in /usr/lib whereas this file is present in
<br>
/usr/heimdal/lib/ not in /usr/lib/  . I cant see where to change the path so
<br>
that it can use it from there, or really I am missing some other packages ?
<br>
Can any of you please suggest me how to tell this path to the script?
<br>
<p>Sincerely
<br>
Sushil
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
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
