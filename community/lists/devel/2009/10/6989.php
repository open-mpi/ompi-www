<?
$subject_val = "Re: [OMPI devel] Trunk is brokem ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:42:29 2009" -->
<!-- isoreceived="20091021184229" -->
<!-- sent="Wed, 21 Oct 2009 12:42:15 -0600" -->
<!-- isosent="20091021184215" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is brokem ?" -->
<!-- id="22DF5E7B-4414-40FE-8B0A-C1D2D30C5B96_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ADF3708.3080209_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 14:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - impossible to know what explicit includes are required for  
<br>
every environment. We have been building the trunk without problem on  
<br>
our systems.
<br>
<p>Appreciate the fix!
<br>
<p>On Oct 21, 2009, at 10:30 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; It was broken :-(
</span><br>
<span class="quotelev1">&gt; I fixed it - r22119
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On my systems I see follow error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../opal/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; paffinity/linux/plpa/src/libplpa -I../../../.. -O3 -DNDEBUG -Wall - 
</span><br>
<span class="quotelev2">&gt;&gt; Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict- 
</span><br>
<span class="quotelev2">&gt;&gt; prototypes -Wcomment -pedantic -Werror-implicit-function- 
</span><br>
<span class="quotelev2">&gt;&gt; declaration -finline-functions -fno-strict-aliasing -pthread - 
</span><br>
<span class="quotelev2">&gt;&gt; fvisibility=hidden -MT sensor_pru.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev2">&gt;&gt; sensor_pru.Tpo -c sensor_pru.c -fPIC -DPIC -o .libs/sensor_pru.o
</span><br>
<span class="quotelev2">&gt;&gt; sensor_pru_component.c: In function 'orte_sensor_pru_open':
</span><br>
<span class="quotelev2">&gt;&gt; sensor_pru_component.c:77: error: implicit declaration of function  
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_output'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like the sensor code is broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6990.php">Jeff Squyres: "[OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6988.php">George Bosilca: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<li><strong>In reply to:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
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
