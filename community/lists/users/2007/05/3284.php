<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 16 14:50:58 2007" -->
<!-- isoreceived="20070516185058" -->
<!-- sent="Wed, 16 May 2007 14:50:54 -0400" -->
<!-- isosent="20070516185054" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.2.2" -->
<!-- id="ea86ce220705161150h70c340a6w4fd5cc5424f5912f_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-16 14:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Previous message:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
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
version 1.2.2. This release is mainly a bug fix release over the v1.2.1
<br>
release, but there are few minor new features.  We strongly
<br>
recommend that all users upgrade to version 1.2.2 if possible.
<br>
<p>Version 1.2.2 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here are a list of changes in v1.2.2 as compared to v1.2.1:
<br>
<p>- Fix regression in 1.2.1 regarding the handling of $CC with both
<br>
&nbsp;&nbsp;absolute and relative path names.
<br>
- Fix F90 array of status dimensions.  Thanks to Randy Bramley for
<br>
&nbsp;&nbsp;noticing the problem.
<br>
- Add btl_openib_ib_pkey_value MCA parameter for controlling IB port selection.
<br>
- Fixed a variety of threading/locking bugs.
<br>
- Fixed some compiler warnings associated with ROMIO, OS X, and gridengine.
<br>
- If pbs-config can be found, use it to look for TM support.  Thanks
<br>
&nbsp;&nbsp;to Bas van der Viles for the inspiration and preliminary work.
<br>
- Fixed a deadlock in orterun when the rsh PLS encounters some errors.
<br>
<p><pre>
-- 
Tim Mattox
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Previous message:</strong> <a href="3283.php">Jeff Squyres: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
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
