<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 07:49:05 2013" -->
<!-- isoreceived="20131204124905" -->
<!-- sent="Wed, 4 Dec 2013 04:49:03 -0800" -->
<!-- isosent="20131204124903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="CAMD57ocYE=+r_uN+JfK9RfPpTKjODt-Hhhc2qm0Cbbqu4RW0zA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2007115.4RBtbHfZL5_at_quad" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 07:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: ORTE already has a sensor framework in it that reads some of these
<br>
things, so adding the coretemp etc is pretty trivial. These readings can be
<br>
taken in the ORTE event thread on daemons, but we could allow procs to do
<br>
so as well (if the app requests it), or can make it driven via the MPI_T
<br>
function. If we use the event engine, we could have ORTE push those values
<br>
into the internal database, and then provide an MPI_T access to retrieve
<br>
them.
<br>
<p>I'm working on the monitoring section over the next few weeks and can add
<br>
the data collection part. If Jeff or someone can point me to the required
<br>
MPI_T &quot;glue&quot;, I can add that too.
<br>
<p><p>On Wed, Dec 4, 2013 at 4:23 AM, Chris Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 4 Dec 2013 11:39:29 AM Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 3, 2013, at 7:54 PM,
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Would it make any sense to expose system/environmental/thermal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; information to the application via MPI_T ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  Interesting idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phew. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the best way to grab such stuff via IPMI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think so, that means either having the process have permissions to
</span><br>
<span class="quotelev1">&gt; access /dev/ipmi* or needing to talk over the network to the adapter,
</span><br>
<span class="quotelev1">&gt; neither
</span><br>
<span class="quotelev1">&gt; of which are likely to be desirable (or even possible, our iDataplex IMMs
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; not accessible from the compute nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, using the coretemp kernel module means you get access to at least
</span><br>
<span class="quotelev1">&gt; information about CPU temperatures on Intel systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.${A}/temp${B}_input
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which contains the core temperature in 100ths of a degree Celsius and are
</span><br>
<span class="quotelev1">&gt; world readable.  You also get access to the various thermal trip points and
</span><br>
<span class="quotelev1">&gt; alarms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ${B} value is 1 for the CPU package (SandyBridge or later only), then
</span><br>
<span class="quotelev1">&gt; sequentially for the physical cores.  ${A} is 0 for the first socket, then
</span><br>
<span class="quotelev1">&gt; max($B of $A)+1 for the next socket, etc..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So on the test login node of our 2010 era Nehalem iDataplex you get a file
</span><br>
<span class="quotelev1">&gt; per
</span><br>
<span class="quotelev1">&gt; CPU core but nothing for the socket, viz:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_merri-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp5_input
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_merri-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 53000
</span><br>
<span class="quotelev1">&gt; 59000
</span><br>
<span class="quotelev1">&gt; 55000
</span><br>
<span class="quotelev1">&gt; 58000
</span><br>
<span class="quotelev1">&gt; 56000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the test login node of our SandyBridge iDataplex delivered mid year we
</span><br>
<span class="quotelev1">&gt; get
</span><br>
<span class="quotelev1">&gt; the package as well:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_barcoo-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp1_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp6_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp7_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp1_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp6_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp7_input
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_barcoo-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 43000
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 42000
</span><br>
<span class="quotelev1">&gt; 43000
</span><br>
<span class="quotelev1">&gt; 38000
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 37000
</span><br>
<span class="quotelev1">&gt; 33000
</span><br>
<span class="quotelev1">&gt; 37000
</span><br>
<span class="quotelev1">&gt; 32000
</span><br>
<span class="quotelev1">&gt; 34000
</span><br>
<span class="quotelev1">&gt; 36000
</span><br>
<span class="quotelev1">&gt; 33000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's more information in $KERNEL_SOURCE/Documentation/hwmon/coretemp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both those systems are running RHEL6, so it should be fairly well supported
</span><br>
<span class="quotelev1">&gt; *if* the sysadmin has loaded the modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That might well be do-able, since there's no performance penalty for
</span><br>
<span class="quotelev1">&gt; reading
</span><br>
<span class="quotelev2">&gt; &gt; such values until you actually read the values (i.e., we don't actively
</span><br>
<span class="quotelev2">&gt; &gt; monitor these values in OMPI's overall progression engine; they're only
</span><br>
<span class="quotelev2">&gt; &gt; read when the application invokes an MPI_T read function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, these *shouldn't* hang trying to read them. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
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
