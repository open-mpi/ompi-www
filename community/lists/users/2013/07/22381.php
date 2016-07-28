<?
$subject_val = "[OMPI users] libtool:line1128 gfortran command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 08:36:49 2013" -->
<!-- isoreceived="20130725123649" -->
<!-- sent="Thu, 25 Jul 2013 20:36:28 +0800 (CST)" -->
<!-- isosent="20130725123628" -->
<!-- name="meng" -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="[OMPI users] libtool:line1128 gfortran command not found" -->
<!-- id="75a34c18.11093.14015d49672.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
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
<strong>Subject:</strong> [OMPI users] libtool:line1128 gfortran command not found<br>
<strong>From:</strong> meng (<em>qsmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 08:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am trying to install openmpi and come upone many problems. One is about the Fortran 77 compiler in configure stage, I solved it by editing .bashrc, changing from $GCCHOME/lib to $GCCHOME/lib64. Of course your os should be 64-bits.
<br>
&nbsp;&nbsp;After configure, when running make all install, the screen display:
<br>
<p>./scripts/mpi_imrecv_f90.f90.sh /home/greatnet/openmpi-1.7.2/ompi/mpi/fortran/use-mpi-tkr &gt; mpi_imrecv_f90.f90
<br>
&nbsp;../../../../libtool: line 1128: gfortran: command not found
<br>
<p>&nbsp;However, I am sure that gfortran exists and can run in any directory. When I add   &quot;$PATH&quot; after line 1128 in libtool, and then remake, it display &quot;/usr/bin:/bin&quot;.  Yes, indeed my gcc is not in /usr/bin ,/bin. How to add gcc to that path or how to solve my problem?
<br>
&nbsp;Thank you for your help.
<br>
Regards,
<br>
Meng
<br>
&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
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
