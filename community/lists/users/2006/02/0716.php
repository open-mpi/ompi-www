<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 27 08:30:38 2006" -->
<!-- isoreceived="20060227133038" -->
<!-- sent="Mon, 27 Feb 2006 14:29:32 +0100" -->
<!-- isosent="20060227132932" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="[OMPI users] Memory allocation problem with OpenIB" -->
<!-- id="1141046972.24937.13.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Emanuel Ziegler (<em>eziegler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-27 08:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>After solving my last problem with the help of this list (thanks
<br>
again :) I encountered another problem regarding the memory allocation
<br>
for the openib component.
<br>
If I try to run an arbitrary MPI program, e.g. with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ orterun -np 2 --bynode --host node01,node02 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix /usr/local ./mpptest -gnuplot
<br>
the following error appears:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[0,1,1][btl_openib.c:787:mca_btl_openib_module_init] error creating
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;high priority cq for mthca0 errno says Cannot allocate memory
<br>
Obviously, the error occurs only on node02 and not on the local node01
<br>
although they are both configured identically. The hosts were cloned
<br>
using SystemImager and the problem is symmetric (it always fails on the
<br>
remote host).
<br>
The FAQ (see
<br>
<a href="http://www.open-mpi.org/faq/?category=infiniband#ib-locked-pages">http://www.open-mpi.org/faq/?category=infiniband#ib-locked-pages</a>) blames
<br>
that on insufficient user rights for locking memory. So I
<br>
adjusted /etc/security/limits.conf and set the hard and soft lilit to
<br>
unlimited, but the error remains. The limits are applied correctly as
<br>
the command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ orterun -np 2 --bynode --host node01,node02 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix /usr/local /bin/bash -c ulimit -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unlimited
<br>
indicated.
<br>
<p>The libraries involved are OpenMPI 1.0.2-a7 with libibverbs-1.0-rc5 and
<br>
libmthca-1.0-rc5 on Debian sarge with kernel 2.6.15 (from
<br>
www.backports.org). There is 8 GB RAM and 16 GB swap available. While
<br>
running the program less than 1 GB is used. CQ size is at default
<br>
(1000).
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Emanuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0715.php">Jeff Squyres: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
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
