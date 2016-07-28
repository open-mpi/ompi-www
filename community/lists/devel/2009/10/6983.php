<?
$subject_val = "Re: [OMPI devel] Trunk is brokem ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:30:02 2009" -->
<!-- isoreceived="20091021163002" -->
<!-- sent="Wed, 21 Oct 2009 18:30:00 +0200" -->
<!-- isosent="20091021163000" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is brokem ?" -->
<!-- id="4ADF3708.3080209_at_dev.mellanox.co.il" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ADF33AF.4040108_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is brokem ?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<li><strong>In reply to:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Reply:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was broken :-(
<br>
I fixed it - r22119
<br>
<p>Pasha
<br>
<p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; On my systems I see follow error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include 
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -Wall -Wundef -Wno-long-long -Wsign-compare 
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic 
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -MT sensor_pru.lo 
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/sensor_pru.Tpo -c sensor_pru.c -fPIC -DPIC -o 
</span><br>
<span class="quotelev1">&gt; .libs/sensor_pru.o
</span><br>
<span class="quotelev1">&gt; sensor_pru_component.c: In function 'orte_sensor_pru_open':
</span><br>
<span class="quotelev1">&gt; sensor_pru_component.c:77: error: implicit declaration of function 
</span><br>
<span class="quotelev1">&gt; 'opal_output'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like the sensor code is broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6984.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>Previous message:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<li><strong>In reply to:</strong> <a href="6982.php">Pavel Shamis (Pasha): "[OMPI devel] Trunk is brokem ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Reply:</strong> <a href="6989.php">Ralph Castain: "Re: [OMPI devel] Trunk is brokem ?"</a>
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
