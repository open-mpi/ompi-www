<?
$subject_val = "[OMPI users] need help in this error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 24 13:35:05 2013" -->
<!-- isoreceived="20131024173505" -->
<!-- sent="Thu, 24 Oct 2013 12:35:03 -0500" -->
<!-- isosent="20131024173503" -->
<!-- name="Osman Khalid" -->
<!-- email="osmankhalid2005_at_[hidden]" -->
<!-- subject="[OMPI users] need help in this error" -->
<!-- id="CAPct32oBONBDquuaSQXR_FwQawv+1pUGMqGRHE30WEXs6t3HJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] need help in this error<br>
<strong>From:</strong> Osman Khalid (<em>osmankhalid2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-24 13:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22833.php">Damien Hocking: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Reply:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am for the first time installing OpenMPI on my windows XP machine, using
<br>
Cygwin.
<br>
<p>The *./configure* command is successful.
<br>
<p>However, when I give *make* command, i get the following error:
<br>
<p>$ make
<br>
Making all in config
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/opal'
<br>
Making all in include
<br>
make[2]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/include'
<br>
/usr/bin/make  all-am
<br>
make[3]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/include'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/include'
<br>
make[2]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/include'
<br>
Making all in libltdl
<br>
*make[2]: Entering directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/libltdl'*
<br>
*/bin/sh /home/OSMANK/openmpi-1.6.5/opal/libltdl/config/install-sh -d .*
<br>
*/bin/sh: /home/OSMANK/openmpi-1.6.5/opal/libltdl/config/install-sh: No
<br>
such file or directory*
<br>
make[2]: *** [argz.h] Error 127
<br>
make[2]: Leaving directory
<br>
`/d/cygwin/home/OSMANK/openmpi-1.6.5/opal/libltdl'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/d/cygwin/home/OSMANK/openmpi-1.6.5/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I went to the above folder, and found that the file  &quot;install-sh&quot; was there.
<br>
<p>Would request help on that.
<br>
<p>Best Regards
<br>
Osman
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22833.php">Damien Hocking: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<li><strong>Reply:</strong> <a href="22835.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
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
