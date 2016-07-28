<?
$subject_val = "[OMPI users] Open MPI v1.2.7 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 10:47:52 2008" -->
<!-- isoreceived="20080828144752" -->
<!-- sent="Thu, 28 Aug 2008 10:47:46 -0400" -->
<!-- isosent="20080828144746" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.2.7 released" -->
<!-- id="ea86ce220808280747m48fc14cdh18c2624c994211c5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI v1.2.7 released<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 10:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.2.7. This release is mainly a bug fix release over the v1.2.6
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.2.7 if possible.
<br>
<p>Version 1.2.7 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.2.7 as compared to v1.2.6:
<br>
<p>- Add some Sun HCA vendor IDs.  See ticket #1461.
<br>
- Fixed a memory leak in MPI_Alltoallw when called from Fortran.
<br>
&nbsp;&nbsp;Thanks to Dave Grote for the bugreport.  See ticket #1457.
<br>
- Only link in libutil when it is needed/desired.  Thanks to
<br>
&nbsp;&nbsp;Brian Barret for diagnosing and fixing the problem.  See ticket #1455.
<br>
- Update some QLogic HCA vendor IDs.  See ticket #1453.
<br>
- Fix F90 binding for MPI_CART_GET.  Thanks to Scott Beardsley for
<br>
&nbsp;&nbsp;bringing it to our attention. See ticket #1429.
<br>
- Remove a spurious warning message generated in/by ROMIO. See ticket #1421.
<br>
- Fix a bug where command-line MCA parameters were not overriding
<br>
&nbsp;&nbsp;MCA parameters set from environment variables.  See ticket #1380.
<br>
- Fix a bug in the AMD64 atomics assembly.  Thanks to Gabriele Fatigati
<br>
&nbsp;&nbsp;for the bug report and bugfix.  See ticket #1351.
<br>
- Fix a gather and scatter bug on intercommunicators when the datatype
<br>
&nbsp;&nbsp;being moved is 0 bytes. See ticket #1331.
<br>
- Some more man page fixes from the Debian maintainers.
<br>
&nbsp;&nbsp;See tickets #1324 and #1329.
<br>
- Have openib BTL (OpenFabrics support) check for the presence of
<br>
&nbsp;&nbsp;/sys/class/infiniband before allowing itself to be used.  This check
<br>
&nbsp;&nbsp;prevents spurious &quot;OMPI did not find RDMA hardware!&quot; notices on
<br>
&nbsp;&nbsp;systems that have the software drivers installed, but no
<br>
&nbsp;&nbsp;corresponding hardware.  See tickets #1321 and #1305.
<br>
- Added vendor IDs for some ConnectX openib HCAs. See ticket #1311.
<br>
- Fix some RPM specfile inconsistencies.  See ticket #1308.
<br>
&nbsp;&nbsp;Thanks to Jim Kusznir for noticing the problem.
<br>
- Removed an unused function prototype that caused warnings on
<br>
&nbsp;&nbsp;some systems (e.g., OS X).  See ticket #1274.
<br>
- Fix a deadlock in inter-communicator scatter/gather operations.
<br>
&nbsp;&nbsp;Thanks to Martin Audet for the bug report.  See ticket #1268.
<br>
<p><pre>
-- 
Tim Mattox, Ph.D.
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6442.php">Jeff Squyres: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
