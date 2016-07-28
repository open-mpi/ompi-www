<?
$subject_val = "[OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 02:16:31 2016" -->
<!-- isoreceived="20160328061631" -->
<!-- sent="Mon, 28 Mar 2016 02:16:30 -0400" -->
<!-- isosent="20160328061630" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Error running mpicc" -->
<!-- id="CAHXxYDjJ9vwTuWgt-W2+LKyapE1exGRYmqo9AyTdkPhjCMOuXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Error running mpicc<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-28 02:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>The system in question is a CentOS 7 box, that has been running OpenMPI,
<br>
both the master branch and the 1.10.2 release happily until now.
<br>
<p>Just now, in order to debug something, I recompiled with the following
<br>
options:
<br>
<p>$ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
<br>
<p>The compilation and install was successful; however, mpicc now crashes like
<br>
this:
<br>
<p>[durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
<br>
mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
<br>
Aborted (core dumped)
<br>
<p><p>Searching the mailing archive, I found two posts that describe similar
<br>
situations:
<br>
<p><a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
<br>
<p>However, the solution proposed in these, to disable verbs, is not
<br>
acceptable to me for the following reasons: I am trying to implement a new
<br>
BTL by reverse engineering the openib BTL. I am using a Qlogic HCA for this
<br>
purpose. (Please note that I cannot use PSM as I am writing code for a BTL)
<br>
<p>As there any more acceptable solutions for this? Here are the list of nl
<br>
libraries on my box:
<br>
<p>[durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
<br>
libnl.x86_64                           1.1.4-3.el7
<br>
@anaconda
<br>
libnl-devel.x86_64                     1.1.4-3.el7
<br>
@anaconda
<br>
libnl3.x86_64                          3.2.21-10.el7
<br>
@base
<br>
libnl3-cli.x86_64                      3.2.21-10.el7
<br>
@base
<br>
<p>and uninstalling libnl3 is not an option either: it seems yum  wants to
<br>
uninstall around 100 odd other packages because of dependency which will
<br>
essentially render the machine unusable.
<br>
<p>&nbsp;Please help!
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28854.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28856.php">Gilles Gouaillardet: "Re: [OMPI users] Error running mpicc"</a>
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
