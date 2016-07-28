<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 07:23:06 2013" -->
<!-- isoreceived="20131204122306" -->
<!-- sent="Wed, 04 Dec 2013 23:23:03 +1100" -->
<!-- isosent="20131204122303" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="2007115.4RBtbHfZL5_at_quad" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DFCD8401-D8C7-45E7-B27B-EE406B750824_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 07:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 Dec 2013 11:39:29 AM Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 3, 2013, at 7:54 PM,
</span><br>
<span class="quotelev1">&gt; Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Would it make any sense to expose system/environmental/thermal
</span><br>
<span class="quotelev2">&gt; &gt; information to the application via MPI_T ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  Interesting idea.
</span><br>
<p>Phew. :-)
<br>
<p><span class="quotelev1">&gt; Is the best way to grab such stuff via IPMI?
</span><br>
<p>I don't think so, that means either having the process have permissions to 
<br>
access /dev/ipmi* or needing to talk over the network to the adapter, neither 
<br>
of which are likely to be desirable (or even possible, our iDataplex IMMs are 
<br>
not accessible from the compute nodes).
<br>
<p>However, using the coretemp kernel module means you get access to at least 
<br>
information about CPU temperatures on Intel systems:
<br>
<p>/sys/bus/platform/devices/coretemp.${A}/temp${B}_input
<br>
<p>which contains the core temperature in 100ths of a degree Celsius and are 
<br>
world readable.  You also get access to the various thermal trip points and 
<br>
alarms.
<br>
<p>The ${B} value is 1 for the CPU package (SandyBridge or later only), then 
<br>
sequentially for the physical cores.  ${A} is 0 for the first socket, then 
<br>
max($B of $A)+1 for the next socket, etc..
<br>
<p>So on the test login node of our 2010 era Nehalem iDataplex you get a file per 
<br>
CPU core but nothing for the socket, viz:
<br>
<p>[root_at_merri-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
<br>
/sys/bus/platform/devices/coretemp.0/temp2_input
<br>
/sys/bus/platform/devices/coretemp.0/temp3_input
<br>
/sys/bus/platform/devices/coretemp.0/temp4_input
<br>
/sys/bus/platform/devices/coretemp.0/temp5_input
<br>
/sys/bus/platform/devices/coretemp.4/temp2_input
<br>
/sys/bus/platform/devices/coretemp.4/temp3_input
<br>
/sys/bus/platform/devices/coretemp.4/temp4_input
<br>
/sys/bus/platform/devices/coretemp.4/temp5_input
<br>
<p>[root_at_merri-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
<br>
52000
<br>
52000
<br>
52000
<br>
53000
<br>
59000
<br>
55000
<br>
58000
<br>
56000
<br>
<p>On the test login node of our SandyBridge iDataplex delivered mid year we get 
<br>
the package as well:
<br>
<p>[root_at_barcoo-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
<br>
/sys/bus/platform/devices/coretemp.0/temp1_input
<br>
/sys/bus/platform/devices/coretemp.0/temp2_input
<br>
/sys/bus/platform/devices/coretemp.0/temp3_input
<br>
/sys/bus/platform/devices/coretemp.0/temp4_input
<br>
/sys/bus/platform/devices/coretemp.0/temp5_input
<br>
/sys/bus/platform/devices/coretemp.0/temp6_input
<br>
/sys/bus/platform/devices/coretemp.0/temp7_input
<br>
/sys/bus/platform/devices/coretemp.6/temp1_input
<br>
/sys/bus/platform/devices/coretemp.6/temp2_input
<br>
/sys/bus/platform/devices/coretemp.6/temp3_input
<br>
/sys/bus/platform/devices/coretemp.6/temp4_input
<br>
/sys/bus/platform/devices/coretemp.6/temp5_input
<br>
/sys/bus/platform/devices/coretemp.6/temp6_input
<br>
/sys/bus/platform/devices/coretemp.6/temp7_input
<br>
<p>[root_at_barcoo-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
<br>
44000
<br>
43000
<br>
44000
<br>
42000
<br>
43000
<br>
38000
<br>
44000
<br>
37000
<br>
33000
<br>
37000
<br>
32000
<br>
34000
<br>
36000
<br>
33000
<br>
<p>There's more information in $KERNEL_SOURCE/Documentation/hwmon/coretemp.
<br>
<p>Both those systems are running RHEL6, so it should be fairly well supported 
<br>
*if* the sysadmin has loaded the modules.
<br>
<p><span class="quotelev1">&gt; That might well be do-able, since there's no performance penalty for reading
</span><br>
<span class="quotelev1">&gt; such values until you actually read the values (i.e., we don't actively
</span><br>
<span class="quotelev1">&gt; monitor these values in OMPI's overall progression engine; they're only
</span><br>
<span class="quotelev1">&gt; read when the application invokes an MPI_T read function).
</span><br>
<p>Indeed, these *shouldn't* hang trying to read them. ;-)
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
