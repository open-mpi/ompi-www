<?
$subject_val = "[OMPI users] Failure to include Myrinet MX in install";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 11:15:22 2008" -->
<!-- isoreceived="20080806151522" -->
<!-- sent="Wed, 06 Aug 2008 16:15:07 +0100" -->
<!-- isosent="20080806151507" -->
<!-- name="STUART PURVES" -->
<!-- email="stuart.purves_at_[hidden]" -->
<!-- subject="[OMPI users] Failure to include Myrinet MX in install" -->
<!-- id="s899ce11.012_at_tungsten.whl.co.uk" -->
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
<strong>Subject:</strong> [OMPI users] Failure to include Myrinet MX in install<br>
<strong>From:</strong> STUART PURVES (<em>stuart.purves_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 11:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Previous message:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Reply:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
***  Before acting on this email or opening any attachment you are advised to read the disclaimer at the end of this email ***
<br>
<p>ompi_info reports
<br>
Open MPI: 1.2.6
<br>
Open MPI SVN revision: r17946
<br>
Open RTE: 1.2.6
<br>
Open RTE SVN revision: r17946
<br>
OPAL: 1.2.6
<br>
OPAL SVN revision: r17946
<br>
Prefix: /usr/local
<br>
Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&lt; .... more output ... &gt;
<br>
mpirun default --prefix: no
<br>
[sparenode:15092] mca: base: component_find: unable to open mtl mx: file
<br>
not found (ignored)
<br>
[sparenode:15092] mca: base: component_find: unable to open btl mx: file
<br>
not found (ignored)
<br>
[sparenode:15092] mca: base: component_find: unable to open mtl mx: file
<br>
not found (ignored)
<br>
MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.6)
<br>
&nbsp;&lt; ... more output .... &gt;
<br>
<p>The system is  HP DL145 with RHEL5 (2.6.18-92.el5xen), with 
<br>
Myrinet-2000 PCIX-based NIC
<br>
using mx2g_1.2.6 installed to /opt/mx. The last attempt at an install on
<br>
the system was 
<br>
<p>./configure --with-mx=/opt/mx
<br>
make all install
<br>
<p>This was in conjunction with the good folks at Myrinet tech support who
<br>
have now directed me here 
<br>
as we cannot see why there is a problem. My previous attempts have also
<br>
used the --with-mx-libdir to 
<br>
point to /opt/mx/lib , /opt/mx/lib64 , to no good effect.
<br>
<p>Kinda stumped on this build, what's my mistake or next move ?
<br>
<p>*** Disclaimer ***
<br>
The information contained in this E-Mail and any subsequent correspondence may be subject to the Export Control Act (ECA) 2002. The content is private and is intended solely for the recipient(s). 
<br>
For those other than the recipient any disclosure, copying, distribution, or action taken, or omitted to be taken, in reliance on such information is prohibited and may be unlawful.
<br>
<p>If received in error please return to sender immediately.
<br>
<p>Under the laws of England misuse of information that is subject to the ECA 2002, is a criminal offence.
<br>
<p>Westland Helicopters Ltd 
<br>
Lysander Road 
<br>
Yeovil BA20 2YB 
<br>
England 
<br>
<p>Registered in England under No 604352 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6279/attachment">HTML</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Previous message:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Reply:</strong> <a href="6280.php">George Bosilca: "Re: [OMPI users] Failure to include Myrinet MX in install"</a>
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
