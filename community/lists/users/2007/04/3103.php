<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 05:57:04 2007" -->
<!-- isoreceived="20070420095704" -->
<!-- sent="Fri, 20 Apr 2007 11:56:56 +0200" -->
<!-- isosent="20070420095656" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with opal_wrapper version  1.2 rev 14435" -->
<!-- id="46288E68.4070505_at_sara.nl" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 05:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3102.php">Keith Refson: "[OMPI users] local QP operation err"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the error:
<br>
<p>ib-r1n1.irc.sara.nl:/var/tmp/openmpi-1.2-trunk.new
<br>
root# /usr/local/gnu-openmpi-1.2.1p0/bin/opal_wrapper
<br>
Cannot open configuration file 
<br>
${datarootdir}/openmpi/opal_wrapper-wrapper-data.txt
<br>
Error parsing data file opal_wrapper: Not found
<br>
<p>It seems that ${datarootdir) is not expanded. So mpicc and al other 
<br>
links to opal_wrapper does not work.
<br>
<p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3102.php">Keith Refson: "[OMPI users] local QP operation err"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Reply:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
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
