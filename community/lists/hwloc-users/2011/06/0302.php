<?
$subject_val = "[hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 17:32:16 2011" -->
<!-- isoreceived="20110609213216" -->
<!-- sent="Thu, 09 Jun 2011 14:32:05 -0700" -->
<!-- isosent="20110609213205" -->
<!-- name="cs_at_[hidden]" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="27402.1307655125_at_kanawha.pbspro.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 1.2 compilation problems<br>
<strong>From:</strong> <a href="mailto:cs_at_[hidden]?Subject=Re:%20[hwloc-users]%20hwloc%201.2%20compilation%20problems"><em>cs_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-09 17:32:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0308.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0319.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0320.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0321.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0322.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0324.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0326.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I wonder whether anyone could speak about exactly what
<br>
versions of the supporting operating systems we should expect to
<br>
work, particularly specifics about compilation requirements and
<br>
instructions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've been trying to build hwloc-1.2 on some of our old
<br>
AIX systems (5.2, 5.3, 6.1), without success in all cases.  I've
<br>
tried both the default configuration (which selected gcc, but could
<br>
not complete the configure step) and using CC=/usr/vac/bin/cc (configure
<br>
did complete but the make soon found fault with lines in lstopo-text.c).
<br>
I've appended the usual compressed tarballs, but if I've missed
<br>
some extant, more detailed instructions (which I also didn't find
<br>
searching the mailing list archives), I'd appreciate being told where
<br>
to go.  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<p><p><p><p>

<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0302/ompi-output-gcc.tar.bz2">AIX 6.1 configuration, default</a>
</ul>
<!-- attachment="ompi-output-gcc.tar.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0302/ompi-output-vac.tar.bz2">AIX 6.1 configuration+make, CC=/usr/vac/bin/cc</a>
</ul>
<!-- attachment="ompi-output-vac.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0308.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0319.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0320.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0321.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0322.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0324.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0326.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
