<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:05:04 2010" -->
<!-- isoreceived="20100422160504" -->
<!-- sent="Thu, 22 Apr 2010 11:04:26 -0500" -->
<!-- isosent="20100422160426" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BD0738A.6000902_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BB2345C.1030208_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12731.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To keep this thread updated:
<br>
<p>After I posted to the developers list, the community was able to guide
<br>
to a solution to the problem:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/04/7698.php">http://www.open-mpi.org/community/lists/devel/2010/04/7698.php</a>
<br>
<p>To sum up:
<br>
<p>The extended communication times while using shared memory communication
<br>
of openmpi processes are caused by openmpi session directory laying on
<br>
the network via NFS.
<br>
<p>The problem is resolved by establishing on each diskless node a ramdisk
<br>
or mounting a tmpfs. By setting the MCA parameter orte_tmpdir_base to
<br>
point to the according mountpoint shared memory communication and its
<br>
files are kept local, thus decreasing the communication times by magnitudes.
<br>
<p>The relation of the problem to the kernel version is not really
<br>
resolved, but maybe not &quot;the problem&quot; in this respect.
<br>
My benchmark is now running fine on a single node with 4 CPU, kernel
<br>
2.6.33.1 and openmpi 1.4.1.
<br>
Running on multiple nodes I experience still higher (TCP) communication
<br>
times than I would expect. But that requires me some more deep
<br>
researching the issue (e.g. collisions on the network) and should
<br>
probably posted to a new thread.
<br>
<p>Thank you guys for your help.
<br>
<p>oli
<br>
<p><p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12731.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
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
