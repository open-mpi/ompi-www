<?
$subject_val = "[OMPI devel] get_iwarp_subnet_id in openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 14:49:07 2008" -->
<!-- isoreceived="20080520184907" -->
<!-- sent="Tue, 20 May 2008 14:48:49 -0400" -->
<!-- isosent="20080520184849" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="[OMPI devel] get_iwarp_subnet_id in openib btl" -->
<!-- id="48331D11.9000605_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] get_iwarp_subnet_id in openib btl<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 14:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Reply:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am not familiar with get_iwarp_subnet_id and I am not sure why it is 
<br>
causing trunk to barf. I think I am using ofed 1.2.5. See attached for 
<br>
config.log.
<br>
<p>&nbsp;&nbsp;&nbsp;10439 libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info components.o 
<br>
ompi_info.o output.o param.o version.o  ../../../ompi/.libs/libmpi.so 
<br>
-L/opt/ofed/lib64 -libcm -libverbs -lrt 
<br>
/work/00951/paklui/ompi-trunk7/config-data1/orte/.libs/libopen-rte.so 
<br>
/work/00951/paklui/ompi-trunk7/config-data1/opal/.libs/libopen-pal.so 
<br>
-lnuma -ldl -lnsl -lutil -lpthread -Wl,--rpath 
<br>
-Wl,/work/00951/paklui/ompi-trunk7/shared-install1/lib
<br>
&nbsp;&nbsp;&nbsp;10440 ../../../ompi/.libs/libmpi.so: undefined reference to 
<br>
`get_iwarp_subnet_ id'
<br>
&nbsp;&nbsp;&nbsp;10441 make[2]: *** [ompi_info] Error 2
<br>
&nbsp;&nbsp;&nbsp;10442 make[2]: Leaving directory 
<br>
`/work/00951/paklui/ompi-trunk7/config-data1/        ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;&nbsp;10443 make[1]: *** [install-recursive] Error 1
<br>
&nbsp;&nbsp;&nbsp;10444 make[1]: Leaving directory 
<br>
`/work/00951/paklui/ompi-trunk7/config-data1/ompi'
<br>
&nbsp;&nbsp;&nbsp;10445 make: *** [install-recursive] Error 1
<br>
&quot;make.install.log.0&quot; 10445L, 2050037C                         10445,1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bot
<br>
<p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]

</pre>
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3946/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3945.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Reply:</strong> <a href="3947.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
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
