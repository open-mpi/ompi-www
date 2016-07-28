<?
$subject_val = "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 12:06:12 2010" -->
<!-- isoreceived="20100106170612" -->
<!-- sent="Wed, 6 Jan 2010 12:06:06 -0500" -->
<!-- isosent="20100106170606" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3" -->
<!-- id="3cc760c91001060906m4cce47f4i857a5195b0afdc98_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 12:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="11701.php">Marcia Cristina Cera: "[OMPI users] mpirun hangs with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am trying to compile OpenMPI 1.4 with PGI 9.0-3 and am getting the
<br>
following error in configure:
<br>
<p>checking for functional offsetof macro... no
<br>
configure: WARNING: Your compiler does not support offsetof macro
<br>
configure: error: Configure: Cannot continue
<br>
<p>I have searched around and found that this error occurs because of a problem
<br>
in the configure scripts when PGI 10 is used, but I'm using 9.0-3 which
<br>
should not have the configure script issue. Here is the output of pgcc -V:
<br>
<p>pgcc 9.0-3 64-bit target on x86-64 Linux -tp k8-64e
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>I'm not sure what's wrong here as other people have reported being able to
<br>
build OpenMPI with PGI 9. Does anyone have any ideas?
<br>
<p>Thanks,
<br>
Tim Miller
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="11701.php">Marcia Cristina Cera: "[OMPI users] mpirun hangs with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Reply:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
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
