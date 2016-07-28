<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:13:09 2011" -->
<!-- isoreceived="20111214201309" -->
<!-- sent="Wed, 14 Dec 2011 15:12:59 -0500" -->
<!-- isosent="20111214201259" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE9034B.7060801_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKRSGb8AdxWxzxU1=cFYdJDCT+RVKW1FY0N6hkizo7-er8T_uw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 12:52 PM, Micah Sklut wrote:
<br>
<span class="quotelev1">&gt; Hi Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output of :
</span><br>
<span class="quotelev1">&gt; barells_at_ip-10-17-153-123:~&gt; /opt/openmpi/intel/bin/mpif90 -showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/lib64/mpi/gcc/openmpi/include -pthread
</span><br>
<span class="quotelev1">&gt; -I/usr/lib64/mpi/gcc/openmpi/lib64 -L/usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev1">&gt; -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This points to gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do see what you are saying about the 1.4.2 and 1.4.4 components.
</span><br>
<span class="quotelev1">&gt; I'm not sure why that is, but there seems to be some conflict with the
</span><br>
<span class="quotelev1">&gt; existing openmpi, before recently installed 1.4.4 and trying to install
</span><br>
<span class="quotelev1">&gt; with ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is one of the reasons for recommending complete removal (rpm -e if 
<br>
need be) of any MPI which is on a default path (and setting a clean 
<br>
path) before building a new one, as well as choosing a unique install 
<br>
path for the new one.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
