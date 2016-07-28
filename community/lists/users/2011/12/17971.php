<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:19:15 2011" -->
<!-- isoreceived="20111214201915" -->
<!-- sent="Wed, 14 Dec 2011 15:19:10 -0500" -->
<!-- isosent="20111214201910" -->
<!-- name="Micah Sklut" -->
<!-- email="micahs2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="CAKRSGb9hPwKy6c8_tZskcGQ17JV3sA6fJJ0=zYnMeRkh3P0Tag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE9034B.7060801_at_aol.com" -->
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
<strong>From:</strong> Micah Sklut (<em>micahs2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I uninstalled 1.4.2 with rpm -e ompi, and now my existing mpi binaries are
<br>
working.
<br>
<p>Thanks so much for everyone's help.
<br>
<p>On Wed, Dec 14, 2011 at 3:12 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12/14/2011 12:52 PM, Micah Sklut wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gustavo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output of :
</span><br>
<span class="quotelev2">&gt;&gt; barells_at_ip-10-17-153-123:~&gt; /opt/openmpi/intel/bin/mpif90 -showme
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/usr/lib64/mpi/gcc/openmpi/**include -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/lib64/mpi/gcc/openmpi/**lib64 -L/usr/lib64/mpi/gcc/openmpi/**lib64
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This points to gfortran.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do see what you are saying about the 1.4.2 and 1.4.4 components.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why that is, but there seems to be some conflict with the
</span><br>
<span class="quotelev2">&gt;&gt; existing openmpi, before recently installed 1.4.4 and trying to install
</span><br>
<span class="quotelev2">&gt;&gt; with ifort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This is one of the reasons for recommending complete removal (rpm -e if
</span><br>
<span class="quotelev1">&gt; need be) of any MPI which is on a default path (and setting a clean path)
</span><br>
<span class="quotelev1">&gt; before building a new one, as well as choosing a unique install path for
</span><br>
<span class="quotelev1">&gt; the new one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Micah Sklut
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17970.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
