<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 13:22:44 2007" -->
<!-- isoreceived="20070608172244" -->
<!-- sent="Fri, 08 Jun 2007 13:22:11 -0400" -->
<!-- isosent="20070608172211" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="[OMPI users] v1.2.2 mca base unable to open pls/ras tm" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA04C3FA4F_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 13:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3411.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I uninstalled and deleted our old installation directories of 1.1.4 and
<br>
1.2.1 so I could have it nice and clean for 1.2.2.  I extracted the
<br>
source and ran configure with these options:
<br>
<p>--prefix=/opt/openmpi/st --with-devel-headers --with-tm=/opt/torque
<br>
<p>&nbsp;
<br>
<p>I then build and installed it.  But when I ran a program I got these
<br>
messages from each of my processes:
<br>
<p>&lt;machine name&gt;: mca: base: component_find: unable to open pls tm: File
<br>
not found (ignored)
<br>
<p>&lt;machine name&gt;: mca: base: component_find: unable to open ras tm: File
<br>
not found (ignored)
<br>
<p>&nbsp;
<br>
<p>This was the first time that Open MPI was configured with -with-tm as
<br>
torque wasn't installed previously.  I found out that torque was not
<br>
installed to /opt/torque as it was supposed to be, but to it's default
<br>
location.  So I reran the configure without --with-tm and rebuilt and
<br>
reinstalled (after uninstalling the previous build).  But I still got
<br>
the same messages.
<br>
<p>&nbsp;
<br>
<p>So I completely deleted the source directory and destination directory,
<br>
extract the source, ran configure, rebuild and installed.  But still the
<br>
same errors.  According to the open mpi faq, support for torque must be
<br>
explicitly added via configure.
<br>
(<a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>)  So is it
<br>
still including it somehow?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Matt
<br>
<p>&nbsp;
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
<p><p><p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3411.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Reply:</strong> <a href="3413.php">George Bosilca: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
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
