<?
$subject_val = "[OMPI users] openmpi java binding errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 22:59:32 2013" -->
<!-- isoreceived="20130314025932" -->
<!-- sent="Wed, 13 Mar 2013 19:59:28 -0700" -->
<!-- isosent="20130314025928" -->
<!-- name="Huasha Zhao" -->
<!-- email="creislerzhao_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi java binding errors" -->
<!-- id="CAJY_E12A9FCxTuQeXkL0XK6i3vG9hVcTOmeGZHfLSSP2_VdrCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi java binding errors<br>
<strong>From:</strong> Huasha Zhao (<em>creislerzhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 22:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I encountered an error when running openmpi Java applications (it works
<br>
fine with c/c++ applications). The java code compiles successfully, but it
<br>
crashed at runtime with:
<br>
<p>NO LT_DLADVISE - CANNOT LOAD LIBOMPI
<br>
<p>JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
<br>
I think it has to do with dynamically loading native libraries. Since I
<br>
have no experiences with JNI, I would like to resort to the community to
<br>
help solve the problem.
<br>
<p>This is how exactly I install openmpi (on a EC2 AMI linux instance). I use
<br>
a nightly snapshot openmpi-1.9r28157.tar.gz
<br>
<p>sudo ./configure --enable-mpi-java --prefix=/usr/local
<br>
sudo make all install
<br>
<p>I also set LD_LIBRARY_PATH to include &quot;/usr/local/lib&quot; which has
<br>
&quot;libmpi.so&quot;.
<br>
<p>Thanks,
<br>
<pre>
-- 
Chris Zhao
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21537.php">George Bosilca: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21545.php">Ralph Castain: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
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
