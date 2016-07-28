<?
$subject_val = "[OMPI devel] Unknown object files in libmpi.a";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 23:57:35 2014" -->
<!-- isoreceived="20140123045735" -->
<!-- sent="Thu, 23 Jan 2014 13:57:33 +0900" -->
<!-- isosent="20140123045733" -->
<!-- name="Irvanda Kurniadi" -->
<!-- email="irvanda.k_at_[hidden]" -->
<!-- subject="[OMPI devel] Unknown object files in libmpi.a" -->
<!-- id="CAPgw+iPW6unisOXJ74ycSUi-weLEf4Yv9Nm=+DfDc1z2fH+4jw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Unknown object files in libmpi.a<br>
<strong>From:</strong> Irvanda Kurniadi (<em>irvanda.k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 23:57:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Reply:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to port openmpi-1.6.5 in l4/fiasco. I checked the libmpi.a. I
<br>
did the &quot; ar t libmpi.a &quot; in my terminal. I can't find the source file (.c)
<br>
of some object files created in libmpi.a, such as:
<br>
ompi_bitmap.o
<br>
op_predefined.o
<br>
convertor.o
<br>
copy_functions.o
<br>
copy_functions_heterogeneous.o
<br>
datatype_pack.o
<br>
datatype_unpack.o
<br>
dt_add.o dt_args.o .. dt_sndrcv.o (15 files)
<br>
fake_stack.o
<br>
position.o
<br>
libdatatype_reliable_la-datatype_pack.o
<br>
libdatatype_reliable_la-datatype_unpack.o
<br>
common_sm_mmap.o
<br>
<p>Can you tell me where is the source of those object files? Because I have
<br>
to compile every single .c file in openmpi which is needed to be compiled.
<br>
Thanks
<br>
<p>regards,
<br>
Irvanda
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13866.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13864.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<li><strong>Reply:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
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
